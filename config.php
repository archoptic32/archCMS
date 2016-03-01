<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Australia/Sydney" );
define( "DB_DSN", "mysql:host=localhost;dbname=archcms" );
define( "DB_USERNAME", "archadmin" );
define( "DB_PASSWORD", "yourpasswordhere" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "archadmin" );
define( "ADMIN_PASSWORD", "yourpasswordhere" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry - there seems to be a problem - try again later!";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>