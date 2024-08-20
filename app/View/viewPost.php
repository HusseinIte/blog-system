<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .content {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .author {
            font-style: italic;
            margin-bottom: 10px;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .back-link:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
<h1><?php echo htmlspecialchars($title) ?></h1>
    <p class="author">Written by: <?php echo htmlspecialchars($auther); ?></p>
    <div class="content">
        <?php echo nl2br(htmlspecialchars($content)); ?>
    </div>
    <a href="PostController.php?action=index" class="back-link">Back to Blog Listing</a>
</body>

</html>