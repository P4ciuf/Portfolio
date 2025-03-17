<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetti</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="projects.php">Progetti</a></li>
        <li><a href="contact.php">Contatti</a></li>
    </ul>
</nav>

<section class="projects">
    <h2>Progetti</h2>
    <div class="project-list">
        <?php
        $projects = $collection->find();
        foreach ($projects as $project) {
            echo "<div class='project'>";
            echo "<a href='" . $project['link'] . "' target='_blank'>";
            echo "<img src='assets/images/" . $project['image'] . "' alt='" . $project['title'] . "'>";
            echo "<h3>" . $project['title'] . "</h3>";
            echo "<p>" . $project['description'] . "</p>";
            echo "</a>";
            echo "</div>";
        }
        ?>
    </div>
</section>

</body>
</html>
