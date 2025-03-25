<?php
session_start();

if (!isset($_SESSION['formData'])) {
    header('Location: Settings.php');
    exit();
}

$formData = $_SESSION['formData'];
?>
<style>
    body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 750px;
            margin: 100px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
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
            max-width: 900px;
            margin: 100px auto 20px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Gallery Layout */
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Home</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Settings.php">Settings</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>User Submitted Information</h1>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($formData['name']); ?></p>
        <p><strong>Font Style:</strong> <?php echo htmlspecialchars($formData['font_style']); ?></p>
        <p><strong>Font Size:</strong> <?php echo htmlspecialchars($formData['font_size']); ?></p>
        <p><strong>Text Alignment:</strong> <?php echo htmlspecialchars($formData['text_alignment']); ?></p>
        <p><strong>Picture Upload:</strong> <img src="<?php echo htmlspecialchars($formData['picture_upload']); ?>" alt="User Picture"></p>
        <p><strong>Picture Alignment:</strong> <?php echo htmlspecialchars($formData['picture_alignment']); ?></p>
        <p><strong>Background Color:</strong> <span style="background-color: <?php echo htmlspecialchars($formData['background_color']); ?>;">&nbsp;</span></p>
        <p><strong>Autobiography:</strong> <?php echo nl2br(htmlspecialchars($formData['autobiography'])); ?></p>
        <p><strong>Text Alignment:</strong> <?php echo htmlspecialchars($formData['autobiography_alignment']); ?></p>
    </div>
</body>
</html>

<?php
unset($_SESSION['formData']);
?>