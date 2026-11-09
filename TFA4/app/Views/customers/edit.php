
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVA - Edit Customer</title>

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
            <li><a href="<?= base_url('/') ?>">
                <span class="material-symbols-outlined">home</span>Home
            </a></li>
            <li><a href="<?= base_url('customers') ?>" class="active">
                <span class="material-symbols-outlined">people</span>Customers
            </a></li>
            <li><a href="<?= base_url('users') ?>">
                <span class="material-symbols-outlined">person</span>Users
            </a></li>
            <li><a href="<?= base_url('about') ?>">
                <span class="material-symbols-outlined">info</span>About
            </a></li>
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
                <h1>Edit Customer</h1>
                <p>Update existing customer information</p>
            </div>
        </div>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="formErrors">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('customers/' . $customer['id'] . '/update') ?>"
              method="post"
              class="customerForm">

            <?= csrf_field() ?>

            <label for="full_name">Full Name *</label>
            <input
                type="text"
                id="full_name"
                name="full_name"
                value="<?= esc(old('full_name', $customer['full_name'])) ?>"
                maxlength="100"
                required
            >

            <label for="email">Email Address *</label>
            <input
                type="email"
                id="email"
                name="email"
                value="<?= esc(old('email', $customer['email'])) ?>"
                maxlength="100"
                required
            >

            <label for="phone">Phone Number</label>
            <input
                type="tel"
                id="phone"
                name="phone"
                value="<?= esc(old('phone', $customer['phone'] ?? '')) ?>"
                maxlength="20"
            >

            <div class="formActions">
                <button type="submit" class="saveBtn">
                    Update Customer
                </button>

                <a href="<?= site_url('customers') ?>" class="cancelBtn">
                    Cancel
                </a>
            </div>

        </form>
    </div>
</div>

</body>
</html>
