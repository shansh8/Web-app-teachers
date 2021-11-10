<?php
include 'dbh.php';
$student_id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>
    <body>
        <div id="main">
            <h1 style="background-color: #6495ed; color: white;">
                <?php
                session_start();
                echo $_SESSION['destination'];
                session_destroy();
                ?>-online</h1>
            <div class="output">
            <?php
               // $supervisor_id="SELECT supervisorID FROM fetchid WHERE studentId='$student_id'";
               
                $sql="SELECT *FROM fetchid WHERE destination='54'OR sender='54'";
                $destination='54';
                $sender='64';
                $result=$conn->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo "".$row["sender"]." "."::".$row["msg"]."--".$row["time"]."<br>";
                        echo "<br>";
                    }
                } else{
                    echo " No results";
                }
                //$conn->close();
                session_start();
                $_SESSION['destination']=$destination;
                $_SESSION['sender']=$sender;
                ?>
                
            </div>
            <form method="post" action="send.php">
                <textarea name="msg" placeholder="Type To Send Message...." class="form-control"></textarea><br>
                <input type="submit" value="Send">
            
               
            </form>
            <br>
            <form action="logout.php">
                <input style="width: 100%;background-color: #6495ed;color: white;font-size: 20px" type="submit" value="Logout">
            </form>
        </div>
    </body>
</html>