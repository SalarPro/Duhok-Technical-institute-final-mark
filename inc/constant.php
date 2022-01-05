<?php            
date_default_timezone_set('asia/baghdad');

    $server   = "localhost";
    $database = "datitca_student_marks";
    $username = "datitca_user1";
    $password = "6E4Vt3@psR6&F";


    if(!defined('DB_NAME'))
    {define('DB_NAME',$database);}

     if(!defined('DB_USER'))
     {define('DB_USER',$username);}

     if(!defined('DB_PASSWORD'))
     {define('DB_PASSWORD',$password);}

     if(!defined('DB_HOST'))
     {define('DB_HOST',$server);}

?>