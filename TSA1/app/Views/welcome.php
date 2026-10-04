<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskur | Tasks for Today</title>
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
                class="navbarLink active"
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
                class="navbarLink"
            >
                About
            </a>
        </nav>
    </header>
    <main id="welcomePage">
        <!-- HERO SECTION -->
        <section id="welcomePageHero">
            <div id="welcomePageHeroContent">
                <p id="welcomePageLabel">
                    WELCOME BACK!
                </p>
                <h1 id="welcomePageTitle">
                    Here are your
                    <span id="welcomePageTitleHighlight">
                        tasks for today
                    </span>
                </h1>
                <p id="welcomePageDescription">
                    Stay focused and keep going!
                </p>
                <!-- DATE -->
                <div id="welcomePageDateRow">
                    <div id="welcomePageDateIcon">
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
                    <span id="welcomePageCurrentDate">
                        <?= date('F d, Y') ?>
                    </span>
                    <span id="welcomePageTodayBadge">
                        Today
                    </span>
                </div>
            </div>
            <!-- HERO IMAGE -->
            <div id="welcomePageHeroImage">
                <img
                    src="<?= base_url('assets/images/WelcomePage.png') ?>"
                    alt="Taskur Workspace"
                >
            </div>
        </section>
        <!-- =========================
             TODAY'S TASKS
        ========================== -->
        <section id="welcomePageTasksCard">
            <div id="welcomePageTasksHeader">
                <div id="welcomePageTasksIcon">
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
                        <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                        <path d="M7 9l2 2 4-4"></path>
                        <path d="M7 15h10"></path>
                    </svg>
                </div>
                <div id="welcomePageTasksHeadingText">
                    <h2 id="welcomePageTasksTitle">
                        Today's Tasks
                    </h2>
                    <p id="welcomePageTasksSubtitle">
                        These are the tasks scheduled for today.
                    </p>
                </div>
            </div>
            <!-- TASK TABLE -->
            <div id="welcomePageTableWrapper">
                <?php if (!empty($tasks)): ?>
                    <table id="welcomePageTaskTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $index => $task): ?>
                                <?php
                                    $status = strtolower($task['status']);
                                    if ($status === 'completed') {
                                        $statusClass = 'statusCompleted';
                                    } elseif ($status === 'in progress' || $status === 'in-progress') {
                                        $statusClass = 'statusProgress';
                                    } else {
                                        $statusClass = 'statusPending';
                                    }
                                ?>
                                <tr>
                                    <td>
                                        <?= $index + 1 ?>
                                    </td>
                                    <td>
                                        <?= esc($task['title']) ?>
                                    </td>
                                    <td>
                                        <span class="statusBadge <?= $statusClass ?>">
                                            <?= esc(ucwords($task['status'])) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?= date(
                                            'M d, Y',
                                            strtotime($task['task_date'])
                                        ) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <!-- EMPTY STATE -->
                    <div id="welcomePageEmptyState">
                        <div id="welcomePageEmptyIcon">
                            <img
                                src="<?= base_url('assets/images/empty-task-icon.png') ?>"
                                alt="No Tasks"
                            >
                        </div>
                        <h3 id="welcomePageEmptyTitle">
                            No tasks for today
                        </h3>
                        <p id="welcomePageEmptyText">
                            You're all caught up. Enjoy your day!
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>
</div>
</body>
</html>