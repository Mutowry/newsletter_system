<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
    <!-- Font Awesome for arrow icon -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#"> <!-- Replace with logo -->
            <?php
            echo '<img src="includes/imgs/logo.png" alt="My Image">';
            ?>
        </a>
    </nav>

    <!-- Go Back Arrow -->
    <div class="container">
        <div class="go-back">
            <i class="fas fa-arrow-left"></i>
            <a href="index.php"><- Back</a> <!-- Replace with the path to your login page -->
        </div>
    </div>


    <!-- Sign-In Form -->
    <div class="signin-register-container">
        <h1>Sign in</h1>
        <p>No account? <a href="register.php">Register here!</a></p>


        <form action="includes/signin-inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit">LOGIN</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
    require_once 'includes/footer.php';
    ?>