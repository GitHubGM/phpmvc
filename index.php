<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    include 'dbconnectController.php';
    $db->query("INSERT INTO `users`(`name`, `email`, `mobile`) VALUES ('John Doe','')");
    
    echo "Hello"   ?>
</body>
</html>