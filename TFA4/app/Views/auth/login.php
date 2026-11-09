<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>AVA - Staff Login</title>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"><link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"></head>
<body class="loginPage"><main class="loginPanel"><div class="loginBrand"><span class="material-symbols-outlined">shopping_cart</span><div><h1>AVA</h1><p>Point of Sale System</p></div></div><h2>Staff Login</h2><p class="loginIntro">Sign in to manage customer and user accounts.</p>
<?php if (session()->getFlashdata('error')): ?><div class="formErrors" role="alert"><?= esc(session()->getFlashdata('error')) ?></div><?php endif; ?>
<form class="customerForm" action="<?= site_url('login') ?>" method="post"><?= csrf_field() ?>
<label for="username">Username</label><input id="username" name="username" type="text" value="<?= esc(old('username')) ?>" autocomplete="username" required maxlength="50">
<label for="password">Password</label><input id="password" name="password" type="password" autocomplete="current-password" required>
<button class="saveBtn" type="submit">Log In</button></form></main></body></html>
