<?php include "connection.php"; ?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Home Page'; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="header-content">
        <img src="vit.jpg" alt="College Logo" class="logo">
        <h1>VidyalankarInstituteof Technology</h1>
        <div class="header-buttons">
            <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                <button onclick="location.href='logout.php'">Logout</button>
            <?php else: ?>
                <button onclick="location.href='login.php'">Login</button>
            <?php endif; ?>
        </div>
    </div>

    <!-- Navbar just below the college name, integrated into the layout -->
    <div class="navbar-container">
        <div class="navbar">
            <a href="index.php">HomeHome   </a>
            <a href="faculty.php">Faculty    </a>
            <a href="report.php">Admin    </a>
            <!-- <a href="Executive.php">Executive</a> -->
        </div>
    </div>
    </header>

<main>
    <img src="vit.jpg" alt="vit" class="vit">
</main>

<footer class='footer'>
    <p ><b>Thenk you for visiting</b></p>
</footer>
<script src="js/script.js"></script>
</body>
</html>
