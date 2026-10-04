<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskur | About</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
<div id="appContainer">
    <!-- =========================================
         SHARED NAVBAR
    ========================================== -->
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
                class="navbarLink"
            >
                Profile
            </a>
            <a
                href="<?= base_url('/about') ?>"
                class="navbarLink active"
            >
                About
            </a>
        </nav>
    </header>
    <!-- =========================================
         ABOUT PAGE
    ========================================== -->
    <main id="aboutPage">
        <section id="aboutPageContainer">
            <!-- ABOUT HEADER -->
            <div id="aboutPageHeader">
                <div id="aboutPageHeaderIcon">
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
                        <circle cx="12" cy="12" r="9"></circle>
                        <path d="M12 10v6"></path>
                        <path d="M12 7h.01"></path>
                    </svg>
                </div>
                <div id="aboutPageHeaderText">
                    <h1 id="aboutPageTitle">
                        About This System
                    </h1>
                    <p id="aboutPageSubtitle">
                        Learn more about the Taskur Management System.
                    </p>
                </div>
            </div>
            <!-- ABOUT CARD -->
            <section id="aboutPageCard">
                <!-- LEFT IMAGE -->
                <div id="aboutPageImageSection">
                    <div id="aboutPageImage">
                        <img
                            src="<?= base_url('assets/images/about-system.png') ?>"
                            alt="Taskur Management System"
                        >
                    </div>
                </div>
                <!-- RIGHT CONTENT -->
                <div id="aboutPageContent">
                    <div id="aboutPageSystemInfo">
                        <h2 id="aboutPageSystemTitle">
                            Taskur
                            <span>Management System</span>
                        </h2>
                        <p id="aboutPageSystemDescription">
                            Taskur is a simple web-based task management system
                            designed to help users organize and view their daily
                            tasks. It allows users to view today's scheduled tasks,
                            browse the complete task list, and view user profile
                            information.
                        </p>
                    </div>
                    <div id="aboutPageDivider"></div>
                    <!-- DEVELOPER SECTION -->
                    <div id="aboutPageDeveloper">
                        <div id="aboutPageDeveloperIcon">
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
                                <path d="M8 9l-4 3 4 3"></path>
                                <path d="M16 9l4 3-4 3"></path>
                                <path d="M14 5l-4 14"></path>
                            </svg>
                        </div>
                        <div id="aboutPageDeveloperInfo">
                            <p id="aboutPageDeveloperLabel">
                                Developed by
                            </p>
                            <h3 id="aboutPageDeveloperName">
                                Ivan Mark Lizardo | TC32
                            </h3>
                            <p id="aboutPageDeveloperCourse">
                                BS Information Technology Student
                            </p>
                            <p id="aboutPageDeveloperDescription">
                                Developer of the Taskur Management System
                            </p>
                        </div>
                    </div>
                    <!-- FOOTER MESSAGE -->
                    <div id="aboutPageMessage">
                        <div id="aboutPageMessageIcon">
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
                                <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1.1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 0 0 0-7.8z"></path>
                            </svg>
                        </div>
                        <p id="aboutPageMessageText">
                            Built with passion for learning and productivity.
                        </p>
                    </div>
                </div>
            </section>
        </section>
    </main>
</div>
</body>
</html>