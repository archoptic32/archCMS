<?php include "templates/include/header.php" ?>
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
        <div id="container" class="container">
        <div class="col-md-3"></div>
            
        <div class="col-md-6">
            <form class="form-signin" action="admin.php?action=login" method="post">
                <fieldset>
                    <h3>Site Administration</h3>
                    <div class="well">
                        <div class="form-group">
                        <label for="username" class="col-lg-2 control-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Administrator Username" required autofocus maxlength="20" />
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-lg-2 control-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Administrator Password" required maxlength="20" />
                        <div class="checkbox">
                                <input type="submit" name="login" value="Login" class="btn btn-primary btn-block" />
                        </div>
                    </div>
                    </div>
                </fieldset>
            </form>
        </div>
            
        <div class="col-md-3"></div>    
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
