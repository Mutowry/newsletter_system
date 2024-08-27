<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo"> <!-- Replace with your logo -->
            <?php
            echo '<img src="../includes/imgs/logo.png" alt="My Image">';
            ?>
        </div>
        <nav class="nav-links">
            <a href="dashboard.php" class="nav-link">Dashboard</a>
            <a href="blogs.php" class="nav-link">Blogs</a>
        </nav>
    </div>