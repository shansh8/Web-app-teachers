<?php
session_start();
if(isset($_SESSION['destination'])){
    echo $_SESSION['destination'];
}
if(isset($_SESSION['sender']))
{
    echo $_SESSION['sender'];
}

?>