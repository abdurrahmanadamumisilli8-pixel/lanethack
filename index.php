<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LanetHack - Secure Web App</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<!-- Navbar -->

<nav class="navbar navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            LanetHack
        </a>

        <div>

            <a
                href="login.php"
                class="btn btn-outline-light me-2"
            >
                Login
            </a>

            <a
                href="register.php"
                class="btn btn-primary"
            >
                Register
            </a>

        </div>

    </div>

</nav>


<!-- Hero Section -->

<div class="container">

    <div class="row align-items-center min-vh-75 py-5">

        <div class="col-md-7">

            <h1 class="display-4 fw-bold">
                Welcome to LanetHack 🚀
            </h1>

            <p class="lead mt-3">
                A simple and secure web application built
                with PHP, MySQL and Bootstrap.
            </p>

            <p class="text-muted">
                Create an account, securely login and manage
                your profile from your dashboard.
            </p>

            <a
                href="register.php"
                class="btn btn-primary btn-lg me-2"
            >
                Get Started
            </a>

            <a
                href="login.php"
                class="btn btn-outline-dark btn-lg"
            >
                Login
            </a>

        </div>


        <div class="col-md-5 mt-4 mt-md-0">

            <div class="card shadow">

                <div class="card-body text-center p-5">

                    <h2>🔐</h2>

                    <h3 class="mt-3">
                        Secure Authentication
                    </h3>

                    <p class="text-muted">
                        Your account uses secure password
                        hashing and session authentication.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Features -->

<div class="container pb-5">

    <h2 class="text-center mb-4">
        Why LanetHack?
    </h2>

    <div class="row g-4">

        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body text-center">

                    <h3>🔐</h3>

                    <h5>Secure</h5>

                    <p class="text-muted">
                        Passwords are securely hashed
                        before being stored.
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body text-center">

                    <h3>⚡</h3>

                    <h5>Simple</h5>

                    <p class="text-muted">
                        Easy registration and login
                        experience.
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card shadow-sm h-100">

                <div class="card-body text-center">

                    <h3>💻</h3>

                    <h5>Modern</h5>

                    <p class="text-muted">
                        Built using PHP, MySQL,
                        HTML and Bootstrap.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Footer -->

<footer class="bg-dark text-white text-center py-4">

    <p class="mb-0">
        © 2026 LanetHack | Secure Web Application
    </p>

</footer>

</body>

</html>