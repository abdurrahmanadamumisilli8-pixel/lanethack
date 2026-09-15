<?php

session_start();
require_once "db.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION["user_id"];

$stmt = $conn->prepare(
    "SELECT name, email, created_at FROM users WHERE id = ?"
);

$stmt->bind_param("i", $user_id);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - LanetHack</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body>

<nav class="navbar navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="dashboard.php">
            LanetHack
        </a>

        <div>
            <a href="dashboard.php" class="btn btn-outline-light me-2">
                Dashboard
            </a>

            <a href="logout.php" class="btn btn-danger">
                Logout
            </a>
        </div>

    </div>

</nav>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-body">

                    <h2 class="text-center mb-4">
                        My Profile
                    </h2>

                    <div class="mb-3">
                        <strong>Name:</strong>
                        <?php echo htmlspecialchars($user["name"]); ?>
                    </div>

                    <div class="mb-3">
                        <strong>Email:</strong>
                        <?php echo htmlspecialchars($user["email"]); ?>
                    </div>

                    <div class="mb-3">
                        <strong>Account Created:</strong>
                        <?php echo htmlspecialchars($user["created_at"]); ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>