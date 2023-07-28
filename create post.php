<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .form-container {
            text-align: center;
            width: 400px;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .form-container h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-container label {
            display: block;
            text-align: left;
            font-weight: bold;
            color: #666;
            margin-bottom: 5px;
        }

        .form-container input[type="text"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .form-container textarea {
            resize: vertical;
        }

        .form-container input[type="file"] {
            display: none;
        }

        .form-container .file-label {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container .file-label:hover {
            background-color: #0056b3;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Create Post</h1>
        <form action="create process.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" cols="70" required></textarea>

            <input type="file" id="chooseimage" name="chooseimage" accept="image/*" required>
            <label for="chooseimage" class="file-label">Choose Image</label>
            
            <input class="btn btn-primary w-100 py-1" type ="Submit" name ="Submit" value="Submit"><a href ="listing post.php">
          
        </form>
    </div>
</body>
</html>
