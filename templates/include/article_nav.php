<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php?action=archive">
                &lt; Back
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">
                        Posted on <?php echo date('j F Y', $results['article']->publicationDate)?>
                    </a>
                </li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                
            </ul>
        </div>
    </div>
</nav>