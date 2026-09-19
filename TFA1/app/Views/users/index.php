<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVA - Users</title>

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
                <li><a href="<?= base_url('/') ?>"><span class="material-symbols-outlined">home</span>Home</a></li>
                <li><a href="<?= base_url('customers') ?>"><span class="material-symbols-outlined">people</span>Customers</a></li>
                <li><a href="<?= base_url('users') ?>" class="active"><span class="material-symbols-outlined">person</span>Users</a></li>
                <li><a href="<?= base_url('about') ?>"><span class="material-symbols-outlined">info</span>About</a></li>
                <li><a href="<?= base_url('logout') ?>"><span class="material-symbols-outlined">logout</span>Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="mainSectionList">
        <div class="upperPicture">
            <h4>
                U S E R - A C C O U N T S
            </h4>
            <h1>Our</h1>
            <h1>Team Behind the Service</h1>
            <p>These are the people </p>
            <p>who keep our business running smoothly</p>
        </div>
        <div class="customerListSection">
            <div class="upperListTitle">
                <div class="listIcon"><span class="material-symbols-outlined">people</span></div>
                <div class="listText">
                    <h1>Users List</h1>
                    <p>View Users records</p>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['role'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>