
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            transition: 0.3s ease;
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
    <h2 class="text-center mb-4">User Settings</h2>
    <form action="submit.php" method="POST" enctype="multipart/form-data">
        
  
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

      
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Font Style</label>
                <select class="form-select" name="font_style">
                    <option value="Arial">Arial</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Courier New">Courier New</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Text Alignment</label>
                <select name="text_alignment" class="form-select">
                    <option value="left">Left</option>
                    <option value="center">Center</option>
                    <option value="right">Right</option>
                </select>
            </div>
        </div>
        <div class=" mb-3">
                <label class="form-label">Upload Picture</label>
                <input type="file" name="picture_upload" class="form-control">
        </div>

       
        <div class="mb-3">
            <label class="form-label">Caption</label>
            <textarea name="caption" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Caption Alignment</label>
            <select name="caption_alignment" class="form-select">
                <option value="left">Left</option>
                <option value="center">Center</option>
                <option value="right">Right</option>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Header Font Size</label>
                <input type="number" name="header_font_size" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Paragraph Font Size</label>
                <input type="number" name="paragraph_font_size" class="form-control">
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Background Color</label>
                <input type="color" name="background_color" class="form-control form-control-color">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Text Color</label>
                <input type="color" name="text_color" class="form-control form-control-color">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Link Color</label>
                <input type="color" name="link_color" class="form-control form-control-color">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Navigation Background Color</label>
                <input type="color" name="nav_background_color" class="form-control form-control-color">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Navigation Text Color</label>
                <input type="color" name="nav_text_color" class="form-control form-control-color">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Button Background Color</label>
                <input type="color" name="button_background_color" class="form-control form-control-color">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Button Text Color</label>
                <input type="color" name="button_text_color" class="form-control form-control-color">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Container Background Color</label>
                <input type="color" name="container_background_color" class="form-control form-control-color">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Container Text Color</label>
            <input type="color" name="container_text_color" class="form-control form-control-color">
        </div>

       
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
