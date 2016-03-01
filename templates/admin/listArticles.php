<?php include "templates/include/header.php" ?>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Site Administration</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="admin.php?action=newArticle">New Post</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a>Hi there, <?php echo htmlspecialchars( $_SESSION['username']) ?>.</a></li>
                <li><a><?php echo $results['totalRows']?> article<?php echo($results['totalRows']!=1)?'s':''?> total.</a></li>
                <li><a href="admin.php?action=logout">Log out</a></li>
            </ul>
        </div>
    </div>
</nav>
    <div id="container" class="container">
            <h1>All Posts</h1>
            <?php if ( isset( $results['errorMessage'] ) ) { ?>
            <div class="errorMessage">
                <?php echo $results['errorMessage'] ?>
            </div>
            <?php } ?>
            <?php if ( isset( $results['statusMessage'] ) ) { ?>
            <div class="statusMessage">
                <?php echo $results['statusMessage'] ?>
            </div>
            <?php } ?>
            <div class="well">
                <table class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th>Publication Date</th>
                        <th>Post Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $results['articles'] as $article ) { ?>
                    <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
                        <td><?php echo date('j M Y', $article->publicationDate)?></td>
                        <td><?php echo $article->title?></td>
                        <td><?php echo htmlspecialchars( $article->summary )?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
    </div>
        
    <!-- footer !-->
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