<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
        <link href="/views/styles/bootstrap.min.css" rel="stylesheet"> 
        <link href="/views/styles/parallax.css" rel="stylesheet">
        <script src="/views/scripts/jquery.js"></script>
        <script src="/views/scripts/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
            </div>
        </nav>
        <?php echo $content; ?>
        <hr>
        <footer class="bg-dark text-white text-center" style="padding: 40px;">
            <h1>footer </h1>
        </footer>
    </body>
</html>