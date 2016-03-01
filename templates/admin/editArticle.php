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
                <h1><?php echo $results['pageTitle']?></h1>
                <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
                    <div class="col-md-6">
                        <div class="well">
                            <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>" />
                        <?php if ( isset( $results['errorMessage'] ) ) { ?>
                            <div class="errorMessage">
                                <?php echo $results['errorMessage'] ?>
                            </div>
                            <?php } ?>

                                <label for="title">Post Title</label>
                                <input type="text" name="title" id="title" placeholder="Name this Post :)" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>" class="form-control" />

                                <label for="summary">Post Summary</label>
                                <textarea name="summary" id="summary" placeholder="This will appear on the quick description panel in the all posts view." required maxlength="1000" style="height: 5em;" class="form-control">
                                    <?php echo htmlspecialchars( $results['article']->summary )?>
                                </textarea>

                                <label for="postimg">Post Image</label>
                                <input type="text" name="postimg" id="postimg" placeholder="Image URL" required maxlength="255" value="<?php echo htmlspecialchars( $results['article']->postimg )?>" class="form-control" />

                                <label for="publicationDate">Publication Date</label>
                                <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( " Y-m-d ", $results['article']->publicationDate ) : " " ?>" class="form-control" />
                                <br />
                                <div class="buttons">
                                    <input type="submit" name="saveChanges" value="Save Changes" class="btn btn-success" />
                                    <input type="submit" formnovalidate name="cancel" value="Cancel" class="btn btn-warning" />
                                    <?php if ( $results['article']->id ) { ?>
                                        <a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')" class="btn btn-danger">Delete This Article</a>
                                        <?php } ?>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="well">
                            <label for="content">Article Content</label>
                        <textarea name="content" id="content" placeholder="The HTML content of the article" required maxlength="50000" style="height: 30em;" class="form-control">
                            <?php echo htmlspecialchars( $results['article']->content )?>
                        </textarea>
                        </div>
                    </div>
                </form>
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