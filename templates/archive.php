<?php include "templates/include/header.php" ?>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <?php include "strings/str.blog.name.php"; ?>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?action=archive">All Posts</a></li>
                    <li><a href="#"><?php include "strings/str.blog.name.php"; ?> Facebook</a></li>
                    <li><a href="#"><?php include "strings/str.blog.name.php"; ?> Twitter</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <?php echo $results['totalRows']?> article<?php echo($results['totalRows']!=1)?'s':''?> on <?php include "strings/str.blog.name.php"; ?>.
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- new new design archive !-->
    <div class="container">
        <!-- read posts function !-->
        <?php foreach ( $results['articles'] as $article ) { ?>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo htmlspecialchars( $article->title )?></h3>
                </div>
                <div class="panel-body">
                    //
                    <?php echo htmlspecialchars( $article->summary )?>
                </div>
                <div class="panel-footer">
                    <div class="btn-group">
                        <span class="btn btn-default btn-xs"><?php echo date('j F Y', $article->publicationDate)?></span>
                        <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="btn btn-primary btn-xs">View Post</a>
                        <a href="#" class="btn btn-info btn-xs">Share</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?> 
        
    </div>
    <!-- end of new new design archive !-->
    
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
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/script.js"></script>