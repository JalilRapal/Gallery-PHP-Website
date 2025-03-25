<?php
session_start();
require 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {

        $uploadDir = __DIR__ . '/uploads';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

       
        $name = htmlspecialchars($_POST['name']);
        $fontStyle = htmlspecialchars($_POST['font_style']);
        $fontSize = htmlspecialchars($_POST['font_size']);
        $textAlignment = htmlspecialchars($_POST['text_alignment']);
        $backgroundColor = htmlspecialchars($_POST['background_color']);
        $caption = htmlspecialchars($_POST['caption']);
        $captionAlignment = htmlspecialchars($_POST['caption_alignment']);
        $textColor = htmlspecialchars($_POST['text_color']);
        $linkColor = htmlspecialchars($_POST['link_color']);
        $navBackgroundColor = htmlspecialchars($_POST['nav_background_color']);
        $navTextColor = htmlspecialchars($_POST['nav_text_color']);
        $buttonBackgroundColor = htmlspecialchars($_POST['button_background_color']);
        $buttonTextColor = htmlspecialchars($_POST['button_text_color']);
        $containerBackgroundColor = htmlspecialchars($_POST['container_background_color']);
        $containerTextColor = htmlspecialchars($_POST['container_text_color']);
        $headerFontSize = htmlspecialchars($_POST['header_font_size']);
        $paragraphFontSize = htmlspecialchars($_POST['paragraph_font_size']);

 
        $pictureUpload = $_FILES['picture_upload'];
        $uploadPath = '';
        if ($pictureUpload['error'] == 0) {
            $fileName = time() . '_' . basename($pictureUpload['name']); // Unique file name
            $uploadPath = 'uploads/' . $fileName;
            if (!move_uploaded_file($pictureUpload['tmp_name'], $uploadDir . '/' . $fileName)) {
                echo "Failed to upload file.";
                exit();
            }
        }

       
        $stmt = $pdo->prepare("INSERT INTO user_settings 
            (name, font_style, font_size, text_alignment, picture, background_color, caption, caption_alignment, 
            text_color, link_color, nav_background_color, nav_text_color, button_background_color, button_text_color, 
            container_background_color, container_text_color, header_font_size, paragraph_font_size) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([
            $name, $fontStyle, $fontSize, $textAlignment, $uploadPath, $backgroundColor, $caption, $captionAlignment,
            $textColor, $linkColor, $navBackgroundColor, $navTextColor, $buttonBackgroundColor, $buttonTextColor,
            $containerBackgroundColor, $containerTextColor, $headerFontSize, $paragraphFontSize
        ]);

       
        header("Location: index.php?success=1");
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    echo "Invalid request!";
}
?>
