<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Aggiungi Progetto</h2>
<form action="admin.php" method="post">
    <input type="text" name="title" placeholder="Titolo" required>
    <input type="text" name="description" placeholder="Descrizione" required>
    <input type="text" name="link" placeholder="Link" required>
    <input type="text" name="image" placeholder="Nome immagine" required>
    <button type="submit">Aggiungi</button>
</form>

<h2>Progetti Esistenti</h2>
<ul>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newProject = [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'link' => $_POST['link'],
            'image' => $_POST['image']
        ];
        $collection->insertOne($newProject);
        echo "<p>Progetto aggiunto!</p>";
    }

    $projects = $collection->find();
    foreach ($projects as $project) {
        echo "<li>" . $project['title'] . " - <a href='" . $project['link'] . "' target='_blank'>Vedi</a></li>";
    }
    ?>
</ul>

</body>
</html>
