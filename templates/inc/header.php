<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobLister</title>

    <link rel="stylesheet" href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation"><a href="index.php">Home</a></li>
                    <li role="presentation"><a href="create.php">Create Listing</a></li>
                </ul>
            </nav>
            <a href="index.php">
                <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
            </a>
        </div>
        <?php displayMessage(); ?>