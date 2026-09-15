<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION["user_name"];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - LanetHack</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<!-- Navbar -->

<nav class="navbar navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand fw-bold" href="dashboard.php">
            LanetHack
        </a>

        <div>

            <a
                href="profile.php"
                class="btn btn-outline-light me-2"
            >
                Profile
            </a>

            <a
                href="logout.php"
                class="btn btn-danger"
            >
                Logout
            </a>

        </div>

    </div>

</nav>


<!-- Dashboard -->

<div class="container mt-5">

    <!-- Welcome -->

    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">

        <h1 class="display-6 fw-bold">
            Welcome, <?php echo htmlspecialchars($name); ?>! 👋
        </h1>

        <p class="lead">
            Welcome to your LanetHack dashboard.
        </p>

        <a
            href="profile.php"
            class="btn btn-primary"
        >
            View My Profile
        </a>

    </div>


    <!-- Cards -->

    <div class="row g-4">

        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body">

                    <h4 class="card-title">
                        🔐 Security
                    </h4>

                    <p class="card-text">
                        Your account is protected with secure
                        authentication.
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body">

                    <h4 class="card-title">
                        👤 Profile
                    </h4>

                    <p class="card-text">
                        View your account information and details.
                    </p>

                    <a
                        href="profile.php"
                        class="btn btn-outline-primary"
                    >
                        View Profile
                    </a>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body">

                    <h4 class="card-title">
                        🚀 LanetHack
                    </h4>

                    <p class="card-text">
                        A secure web application built with
                        PHP, MySQL and Bootstrap.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Footer -->

<footer class="text-center mt-5 py-4">

    <p class="text-muted mb-0">
        © 2026 LanetHack. All rights reserved.
    </p>

</footer>

</body>
</html>