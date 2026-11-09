<?php
namespace App\Controllers;
use App\Models\UserModel;
class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('logged_in') === true) return redirect()->to(site_url('users'));
        return view('auth/login');
    }
    public function attempt()
    {
        if (! $this->validate(['username' => 'required', 'password' => 'required'])) {
            return redirect()->back()->withInput()->with('error', 'Enter your username and password.');
        }
        $username = trim((string) $this->request->getPost('username'));
        $password = (string) $this->request->getPost('password');
        $user = (new UserModel())->where('username', $username)->first();
        if (! $user || ! password_verify($password, (string) ($user['password'] ?? ''))) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }
        session()->regenerate(true);
        session()->set(['logged_in' => true, 'user_id' => $user['id'], 'username' => $user['username']]);
        return redirect()->to(site_url('users'));
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
}
