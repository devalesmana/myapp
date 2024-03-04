<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Artikel terbaru</h1>
    
    <?php foreach ($blogs as $key => $blog):?>
        <div class="blog">
            <h2><?php echo $blog['title']; ?></h2>
            <?php echo $blog['content']; ?>    
        </div>
    <?php endforeach; ?>
</body>
</html>