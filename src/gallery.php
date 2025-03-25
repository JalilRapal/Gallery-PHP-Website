<?php
session_start();
require 'config.php';

// Retrieve submissions from session
$submissions = isset($_SESSION['submissions']) ? $_SESSION['submissions'] : [];

try {
    $pdo = new PDO("mysql:host=localhost;dbname=user_settings_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$query = "SELECT * FROM user_settings";
$stmt = $pdo->prepare($query);
$stmt->execute();
$userSettings = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            background-color: #fff;
        }

        

        /* Navigation Bar */
        nav {
            width: 100%;
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            padding: 15px 0;
            z-index: 1000;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 10px 15px;
            text-decoration: none;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #575757;
            border-radius: 5px;
        }
       
        .content {
            padding-top: 90px;
        }

        button {
            font-size: 16px;
            padding: 10px;
        }

        /* Content Styling */
        .container {
            max-width: 1000px;
            margin: 100px auto 20px;
            background: #fff;
            padding: 20px;
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Gallery Layout */
        .gallery-container {
            width: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding: 20px;
        }

        .gallery-item {
            width: 280px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
        }

        .gallery-item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 10px;
        }

    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Gallery</h2>
        <div class="gallery-container">
            <?php foreach ($userSettings as $user) : ?>
                <div class="gallery-item" style="background-color: <?= htmlspecialchars($user['container_background_color']) ?>; color: <?= htmlspecialchars($user['container_text_color']) ?>;">
                    <h3 style="font-size: <?= htmlspecialchars($user['header_font_size']) ?>px;"><?= htmlspecialchars($user['name']) ?></h3>
                    <p style="font-size: <?= htmlspecialchars($user['paragraph_font_size']) ?>px; text-align: <?= htmlspecialchars($user['text_alignment']) ?>;">
                        <?= htmlspecialchars($user['caption']) ?>
                    </p>
                    <?php 
                    $imagePath = htmlspecialchars($user['picture']);
                    if (!empty($user['picture']) && file_exists($imagePath)) : ?>
                        <img src="<?= $imagePath ?>" alt="User Image">
                    <?php else : ?>
                        <p>Image not found</p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>