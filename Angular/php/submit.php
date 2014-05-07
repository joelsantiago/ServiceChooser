
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>My First Backbone.js App</title>

        <!-- Google web fonts -->
        <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel='stylesheet' />

        <!-- The main CSS file -->
        <link href="../css/style.css" rel="stylesheet" />

        <!--[if lt IE 9]>
        <script src="dist/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="main" method="post" action="submit.php">
            <h1>My Services</h1>

            <p id="services">
                You chose: <?php echo htmlspecialchars(implode(array_keys($_POST), ', '));?> <br />
                <a href="../index.html">Go back</a>
            </p>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>