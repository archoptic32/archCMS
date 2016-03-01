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