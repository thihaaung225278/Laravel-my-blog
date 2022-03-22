<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <?php foreach($blogs as $blog): ?>
        <h1><a href="blog/<?= $blog->slug; ?>"><?= $blog->title; ?></a></h1>
        <span class="date"><?= $blog->date; ?></span>
        <p><?= $blog->intro;?></p>
    <?php endforeach;?>
</body>
</html>
