<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- Intro con video -->
<div id="intro">
    <video autoplay muted loop id="intro-video">
        <source src="assets/videos/intro.mp4" type="video/mp4">
    </video>
    <div class="intro-text">
        <h1 id="typing-text">Il Mio Portfolio</h1>
    </div>
</div>

<!-- Contenuto principale -->
<div id="main-content" class="hidden">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="projects.php">Progetti</a></li>
            <li><a href="contact.php">Contatti</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </nav>

    <section class="hero">
        <h2>Benvenuto nel mio mondo creativo!</h2>
    </section>

</div>

<script src="assets/script.js"></script>
</body>
</html>
