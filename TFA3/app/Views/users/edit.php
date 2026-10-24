
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVA - Edit User</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<div class="header">
    <div class="icon">
        <span class="material-symbols-outlined">shopping_cart</span>
        <div>
            <h1>AVA</h1>
            <p>Point of Sale System</p>
        </div>
    </div>

    <nav>
        <ul>
            <li>
                <a href="<?= base_url('/') ?>">
                    <span class="material-symbols-outlined">home</span>Home
                </a>
            </li>
            <li>
                <a href="<?= base_url('customers') ?>">
                    <span class="material-symbols-outlined">people</span>Customers
                </a>
            </li>
            <li>
                <a href="<?= base_url('users') ?>" class="active">
                    <span class="material-symbols-outlined">person</span>Users
                </a>
            </li>
            <li>
                <a href="<?= base_url('about') ?>">
                    <span class="material-symbols-outlined">info</span>About
                </a>
            </li>
        </ul>
    </nav>
</div>

<div class="mainSectionList">
    <div class="customerListSection">

        <div class="upperListTitle">
            <div class="listIcon">
                <span class="material-symbols-outlined">edit</span>
            </div>

            <div class="listText">
                <h1>Edit User</h1>
                <p>Update existing user information</p>
            </div>
        </div>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="formErrors">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form
            action="<?= site_url('users/' . $user['id'] . '/update') ?>"
            method="post"
            enctype="multipart/form-data"
            class="customerForm"
        >
            <?= csrf_field() ?>

            <label for="username">Username *</label>
            <input
                type="text"
                id="username"
                name="username"
                value="<?= esc(old('username', $user['username'])) ?>"
                maxlength="50"
                required
            >

            <label for="full_name">Full Name *</label>
            <input
                type="text"
                id="full_name"
                name="full_name"
                value="<?= esc(old('full_name', $user['full_name'])) ?>"
                maxlength="100"
                required
            >
            
            <label>Current Profile Picture</label>

            <?php
                $avatarFilename = $user['avatar'] ?? null;
                $avatarPath = $avatarFilename
                    ? FCPATH . 'uploads/avatars/' . basename($avatarFilename)
                    : null;

                $avatarUrl = ($avatarPath && is_file($avatarPath))
                    ? base_url('uploads/avatars/' . rawurlencode(basename($avatarFilename)))
                    : base_url('assets/images/placeholder.png');
            ?>

            <img
                src="<?= esc($avatarUrl, 'attr') ?>"
                class="avatarPreview"
                alt="Current Avatar"
            >

            <label for="avatar">Upload New Avatar (JPG/PNG, Max 2MB)</label>

            <input
                type="file"
                id="avatar"
                name="avatar"
                accept=".jpg,.jpeg,.png,image/jpeg,image/png"
            >


            <div class="formActions">
                <button type="submit" class="saveBtn">
                    Update User
                </button>

                <a href="<?= site_url('users') ?>" class="cancelBtn">
                    Cancel
                </a>
            </div>
        </form>

    </div>
</div>

</body>
</html>
