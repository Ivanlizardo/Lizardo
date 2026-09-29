<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVA - About</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <div class="header">
        <div class="icon">
            <span class="material-symbols-outlined">
                shopping_cart
            </span>
            <div>
                <h1>AVA</h1>
                <p>Point of Sale System</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="<?= base_url('') ?>"><span class="material-symbols-outlined">home</span>Home</a></li>
                <li><a href="<?= base_url('customers') ?>"><span class="material-symbols-outlined">people</span>Customers</a></li>
                <li><a href="<?= base_url('users') ?>"><span class="material-symbols-outlined">person</span>Users</a></li>
                <li><a href="<?= base_url('about') ?>"><span class="material-symbols-outlined">info</span>About</a></li>
                <li><a href="<?= base_url('logout') ?>"><span class="material-symbols-outlined">logout</span>Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="mainSectionAbout">
        <div class="upperAbout">
            <h4>
                A B O U T - U S
            </h4>
            <h1>A Simple POS</h1>
            <h1>for a better tomorrow</h1>
            <p>AVA is a simple and user-friendly point-of-sale system </p>
            <p>designed to help businesses manage customer, users, </p>
            <p>and daily operations with ease.</p>
        </div>
        <div class="aboutSection">
            <div class="purposeAbout">
                <h3>Our Purpose</h3>
                <p>This system was created to demonstrate the basic features of a Point of Sale (POS) website using</p>
                <p>CodeIgniter 4. It serves as a practical laboratory activity to apply web development concepts such</p>
                <p>as routing, controllers, and views — using static data for customer and user accounts.</p>
            </div>
            <div class="aboutCards">
                <div class="card">
                    <div class="cardIcon"><span class="material-symbols-outlined">people</span></div>
                    <h4>Customer Management</h4>
                    <p>Manage customer accounts and view their records.</p>
                </div>
                <div class="card">
                    <div class="cardIcon"><span class="material-symbols-outlined">person</span></div>
                    <h4>User Management</h4>
                    <p>Manage user accounts and view their records.</p>
                </div>
                <div class="card">
                    <div class="cardIcon"><span class="material-symbols-outlined">shopping_cart</span></div>
                    <h4>Point of Sale</h4>
                    <p>Process sales transactions and manage inventory.</p>
                </div>
            </div>
            <hr>
            <div class="saying">
                <div class="cardIcon"><span class="material-symbols-outlined">format_quote</span></div>
                <h3>"Good system support great services"</h3>
                <p>- AVA team</p>
            </div>
        </div>
        <hr>
        <div footer class="footerTitle">
            <h3>Ivan Mark Lizardo - TC32</h3>
        </div>
    </div>
</body>
</html>