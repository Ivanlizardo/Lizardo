<?php
namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $users = $userModel->findAll();

        return view('users/index', [
            'users' => $users,
        ]);
    }

    public function new()
    {
        return view('users/new');
    }

    public function create()
    {
        $rules = [
            'username' => 'required|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|max_length[100]'
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $saved = $userModel->insert([
            'username' => trim($this->request->getPost('username')),
            'full_name' => trim($this->request->getPost('full_name')),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        if ($saved === false) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $userModel->errors());
        }

        return redirect()
            ->to('/users')
            ->with('success', 'User added successfully!');
    }

    public function edit($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (!$user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('users/edit', [
            'user' => $user
        ]);
    }

        
    public function update($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if (!$user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'username' => "required|max_length[50]|is_unique[users.username,id,{$id}]",
            'full_name' => 'required|max_length[100]',
            'avatar' => [
                'rules' => 'max_size[avatar,2048]|is_image[avatar]|mime_in[avatar,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Avatar must not exceed 2MB.',
                    'is_image' => 'Please upload a valid image.',
                    'mime_in' => 'Only JPG and PNG images are allowed.'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username' => trim($this->request->getPost('username')),
            'full_name' => trim($this->request->getPost('full_name'))
        ];

        $avatar = $this->request->getFile('avatar');
        $newAvatarPath = null;

        if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {

            $uploadPath = FCPATH . 'uploads/avatars/';

            if (!is_dir($uploadPath) &&
                !mkdir($uploadPath, 0755, true) &&
                !is_dir($uploadPath)) {
                return redirect()->back()->withInput()
                    ->with('errors', [
                        'avatar' => 'Unable to create the upload folder.'
                    ]);
            }

            $extension = $avatar->getMimeType() === 'image/png'
                ? 'png'
                : 'jpg';

            $filename = bin2hex(random_bytes(16)) . '.' . $extension;
            $newAvatarPath = $uploadPath . $filename;

            try {
                service('image')
                    ->withFile($avatar->getTempName())
                    ->fit(200, 200, 'center')
                    ->save($newAvatarPath);

                $data['avatar'] = $filename;

            } catch (\Throwable $e) {
                if (is_file($newAvatarPath)) {
                    unlink($newAvatarPath);
                }

                log_message('error', 'Avatar processing failed: ' . $e->getMessage());

                return redirect()->back()->withInput()
                    ->with('errors', [
                        'avatar' => 'Unable to process the image.'
                    ]);
            }
        } elseif ($avatar && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            return redirect()->back()->withInput()
                ->with('errors', [
                    'avatar' => 'Avatar upload failed.'
                ]);
        }

        try {
            $saved = $userModel->update($id, $data);
        } catch (\Throwable $e) {
            $saved = false;
            log_message('error', 'User update failed: ' . $e->getMessage());
        }

        if ($saved === false) {
            if ($newAvatarPath && is_file($newAvatarPath)) {
                unlink($newAvatarPath);
            }

            return redirect()->back()->withInput()
                ->with('errors', [
                    'save' => 'Unable to update the user.'
                ]);
        }

        return redirect()
            ->to('/users')
            ->with('success', 'User updated successfully!');
    }


}
