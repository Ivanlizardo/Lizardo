<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskur | Profile</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
<div id="appContainer">
    <header id="navbar">
        <a href="<?= base_url('/') ?>" id="navbarBrand">
            <div id="navbarLogo">
                <img
                    src="<?= base_url('assets/images/taskur-logo.png') ?>"
                    alt="Taskur Logo"
                >
            </div>
            <span id="navbarBrandName">
                Taskur
            </span>
        </a>
        <nav id="navbarLinks">
            <a
                href="<?= base_url('/') ?>"
                class="navbarLink"
            >
                Home
            </a>
            <a
                href="<?= base_url('/tasks') ?>"
                class="navbarLink"
            >
                Tasks
            </a>
            <a
                href="<?= base_url('/profile') ?>"
                class="navbarLink active"
            >
                Profile
            </a>
            <a
                href="<?= base_url('/about') ?>"
                class="navbarLink"
            >
                About
            </a>
        </nav>
    </header>
    <!-- =========================================
         PROFILE PAGE
    ========================================== -->
    <main id="profilePage">
        <section id="profilePageContainer">
            <!-- PROFILE HEADER -->
            <div id="profilePageHeader">
                <div id="profilePageHeaderIcon">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <circle cx="12" cy="8" r="4"></circle>
                        <path d="M4 21a8 8 0 0 1 16 0"></path>
                    </svg>
                </div>
                <div id="profilePageHeaderText">
                    <h1 id="profilePageTitle">
                        User Profile
                    </h1>
                    <p id="profilePageSubtitle">
                        Here is the demo user's information.
                    </p>
                </div>
            </div>
            <!-- PROFILE CARD -->
            <section id="profilePageCard">
                <?php if (!empty($user)): ?>
                    <!-- PROFILE PICTURE -->
                    <div id="profilePagePhotoSection">
                        <div id="profilePagePhoto">
                            <img
                                src="<?= base_url('assets/images/profile-picture.png') ?>"
                                alt="User Profile Picture"
                            >
                        </div>
                    </div>
                    <!-- USER INFORMATION -->
                    <div id="profilePageInformation">
                        <!-- USERNAME -->
                        <div class="profilePageInfoRow">
                            <div class="profilePageInfoIcon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true"
                                >
                                    <circle cx="12" cy="8" r="4"></circle>
                                    <path d="M4 21a8 8 0 0 1 16 0"></path>
                                </svg>
                            </div>
                            <div class="profilePageInfoLabel">
                                Username
                            </div>
                            <div class="profilePageInfoValue">
                                <?= esc($user['username']) ?>
                            </div>
                        </div>
                        <!-- FULL NAME -->
                        <div class="profilePageInfoRow">
                            <div class="profilePageInfoIcon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true"
                                >
                                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                    <circle cx="8" cy="11" r="2"></circle>
                                    <path d="M5.5 16c.8-1.7 2-2.5 3.5-2.5s2.7.8 3.5 2.5"></path>
                                    <path d="M14 10h4"></path>
                                    <path d="M14 14h4"></path>
                                </svg>
                            </div>
                            <div class="profilePageInfoLabel">
                                Full Name
                            </div>
                            <div class="profilePageInfoValue">
                                <?= esc($user['full_name']) ?>
                            </div>
                        </div>
                        <!-- EMAIL -->
                        <div class="profilePageInfoRow">
                            <div class="profilePageInfoIcon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true"
                                >
                                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                    <path d="M3 7l9 6 9-6"></path>
                                </svg>
                            </div>
                            <div class="profilePageInfoLabel">
                                Email
                            </div>
                            <div class="profilePageInfoValue">
                                <?= esc($user['email']) ?>
                            </div>
                        </div>
                        <!-- MEMBER SINCE -->
                        <div class="profilePageInfoRow">
                            <div class="profilePageInfoIcon">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    aria-hidden="true"
                                >
                                    <rect x="3" y="5" width="18" height="16" rx="2"></rect>
                                    <path d="M16 3v4"></path>
                                    <path d="M8 3v4"></path>
                                    <path d="M3 10h18"></path>
                                </svg>
                            </div>
                            <div class="profilePageInfoLabel">
                                Member Since
                            </div>
                            <div class="profilePageInfoValue">
                                <?= date(
                                    'M d, Y h:i A',
                                    strtotime($user['created_at'])
                                ) ?>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- EMPTY STATE -->
                    <div id="profilePageEmptyState">
                        <h2 id="profilePageEmptyTitle">
                            No user found
                        </h2>
                        <p id="profilePageEmptyText">
                            Demo user information is currently unavailable.
                        </p>
                    </div>
                <?php endif; ?>
            </section>
        </section>
    </main>
</div>
</body>
</html>