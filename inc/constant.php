<?php            
date_default_timezone_set('asia/baghdad');

    $server   = "localhost";
    $database = "test";
    $username = "root";
    $password = "";


    if(!defined('DB_NAME'))
    {define('DB_NAME',$database);}

     if(!defined('DB_USER'))
     {define('DB_USER',$username);}

     if(!defined('DB_PASSWORD'))
     {define('DB_PASSWORD',$password);}

     if(!defined('DB_HOST'))
     {define('DB_HOST',$server);}

?>