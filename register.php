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
        <a class="navbar-brand" href="#"> <!-- Replace with your logo -->
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

    <div class="signin-register-container">
        <h1>Register</h1>
        <p>Already have an account? <a href="signin.php">Sign in!</a></p>


        <form action="includes/register-inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="confirmPassword" placeholder="Confirm password">
            <button type="submit" name="submit">REGISTER</button>
        </form>
    </div>

    <?php
    require_once 'includes/footer.php';
    ?>