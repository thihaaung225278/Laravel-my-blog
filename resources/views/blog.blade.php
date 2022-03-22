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

    <h1><?= $blog->title; ?></h1>
    <span class="date"><?= $blog->date; ?></span>
    <p><?= $blog->body; ?></p>

    <a href="/">Back to Home</a>

</body>
</html>
