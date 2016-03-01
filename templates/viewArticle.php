<?php include "templates/include/header.php"; ?>

    <body>
        <?php include "include/article_nav.php"; ?>
            <div id="container" class="container">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><?php echo htmlspecialchars( $results['article']->title )?></h3>
                            <!-- CONTENT PANEL !-->
                            <?php echo $results['article']->content?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <!-- ABOUT CONTENT PANEL !-->
                            <h4>About <?php echo htmlspecialchars( $results['article']->title )?></h4>
                            <p>
                                <?php echo htmlspecialchars( $results['article']->summary )?>
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary btn-block">Share</a>
                                <a href="index.php?action=archive" class="btn btn-success btn-block">All Posts</a>
                                <a href="./" class="btn btn-info btn-block">Return to Homepage</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="jumbotron">
                    <h3>Looking for more?</h3>
                    <p>Here's some links to get you started!</p>
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-primary">Home</a>
                        <a href="index.php?action=archive" class="btn btn-success">All Posts</a>
                        <a href="downloads.php" class="btn btn-info">Facebook</a>
                        <a href="https://nsport.al/content/" class="btn btn-warning">Twitter</a>
                    </div>
                    <br />
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