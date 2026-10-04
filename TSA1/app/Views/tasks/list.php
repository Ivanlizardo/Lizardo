<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskur | Task List</title>
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
                class="navbarLink active"
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
    <!-- =========================================
         TASKS PAGE
    ========================================== -->
    <main id="tasksPage">
        <!-- PAGE HEADER -->
        <section id="tasksPageHeader">
            <div id="tasksPageHeaderContent">
                <p id="tasksPageLabel">
                    TASK MANAGEMENT
                </p>
                <h1 id="tasksPageTitle">
                    All Tasks
                </h1>
                <p id="tasksPageDescription">
                    View all your scheduled tasks in one place.
                </p>
            </div>
            <div id="tasksPageHeaderIcon">
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
                    <rect x="4" y="3" width="16" height="18" rx="2"></rect>
                    <path d="M9 7h6"></path>
                    <path d="M9 12h6"></path>
                    <path d="M9 17h6"></path>
                    <path d="M6.5 7h.01"></path>
                    <path d="M6.5 12h.01"></path>
                    <path d="M6.5 17h.01"></path>
                </svg>
            </div>
        </section>
        <!-- TASK LIST CARD -->
        <section id="tasksPageCard">
            <div id="tasksPageCardHeader">
                <div id="tasksPageCardIcon">
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
                <div id="tasksPageCardHeading">
                    <h2 id="tasksPageCardTitle">
                        Full Task List
                    </h2>
                    <p id="tasksPageCardSubtitle">
                        All tasks are arranged by scheduled date.
                    </p>
                </div>
            </div>
            <!-- TABLE -->
            <div id="tasksPageTableWrapper">
                <?php if (!empty($tasks)): ?>
                    <table id="tasksPageTaskTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Task Date</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $index => $task): ?>
                                <?php
                                    $status = strtolower($task['status']);
                                    if ($status === 'completed') {
                                        $statusClass = 'statusCompleted';
                                    } elseif (
                                        $status === 'in progress' ||
                                        $status === 'in-progress'
                                    ) {
                                        $statusClass = 'statusProgress';
                                    } else {
                                        $statusClass = 'statusPending';
                                    }
                                ?>
                                <tr>
                                    <td>
                                        <?= $index + 1 ?>
                                    </td>
                                    <td class="tasksPageTaskTitle">
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
                                    <td>
                                        <?= date(
                                            'M d, Y h:i A',
                                            strtotime($task['created_at'])
                                        ) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <!-- EMPTY STATE -->
                    <div id="tasksPageEmptyState">
                        <div id="tasksPageEmptyIcon">
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
                                <rect x="4" y="3" width="16" height="18" rx="2"></rect>
                                <path d="M8 8h8"></path>
                                <path d="M8 12h5"></path>
                                <path d="M8 16h3"></path>
                            </svg>
                        </div>
                        <h3 id="tasksPageEmptyTitle">
                            No tasks found
                        </h3>
                        <p id="tasksPageEmptyText">
                            There are currently no tasks available.
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>
</div>
</body>
</html>