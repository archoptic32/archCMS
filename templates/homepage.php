<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>BloggrPro</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet" />

    <!-- Import the custom CMS styles we incorporate with Bootstrap !-->
    <link href="assets/css/cms_styling.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <?php include "strings/str.blog.name.php"; ?>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="col-md-6">
            <div class="jumbotron">
                <h1><?php include "strings/str.blog.name.php"; ?></h1>
                <p>
                    //
                    <?php include "strings/str.blog.tagline.php"; ?>
                </p>
                <div class="btn-group btn-group-justified">
                    <a href="index.php?action=archive" class="btn btn-success">View Posts</a>
                    <a href="#" class="btn btn-primary">Facebook</a>
                    <a href="#" class="btn btn-info">Twitter</a>
                </div>
            </div>

            <div class="jumbotron">
                <p>
                    <?php include "strings/str.blog.intromsg.php"; ?>
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <h1>Latest Posts</h1>
            <div class="list-group">
                <?php foreach ( $results['articles'] as $article ) { ?>
                    <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="list-group-item">
                        <h4 class="list-group-item-heading"><?php echo htmlspecialchars( $article->title )?></h4>
                        <p class="list-group-item-text">
                            <?php echo htmlspecialchars( $article->summary )?>
                        </p>
                        <small>Posted on <?php echo date('j F', $article->publicationDate)?></small>
                    </a>
                    <?php } ?>
            </div>
        </div>


    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">
                <?php include "strings/str.blog.name.php"; ?> &copy; 2016,
                    <?php include "strings/str.blog.company.php"; ?>.
                        <a href="index.php">Home</a> |
                        <a href="index.php?action=archive">All Posts</a> |
                        <a href="contact.php">Contact</a> |
                        <a href="admin.php">Site Admin</a>
            </p>
        </div>
    </footer>
</body>
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>
<script src="assets/js/awesome-landing-page.js" type="text/javascript"></script>

</html>