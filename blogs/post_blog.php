<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Blog</title>
</head>
<body>
    <h2>Post Blog</h2>
    <form action="post_blog_process.php" method="post">
        Title: <input type="text" name="title" required><br>
        Description: <textarea name="description" required></textarea><br>
        Image URL: <input type="text" name="image" required><br>
        <input type="submit" value="Post Blog">
    </form>
</body>
</html>