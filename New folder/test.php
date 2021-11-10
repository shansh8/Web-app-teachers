<!DOCTYPE html>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM registration2';
$sql2='SELECT * FROM supervisor';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
    <tiltle>Supervisor profile</tiltle>
    <style>
        body{
            background-image: url(hill2.jpg);
            background-size: cover;
            font-family: Verdana;
            font-size: 14px;
            margin: 0px;
            padding: 0;
            background-size: cover
            line-height: 24px;
        }
        .navbar{
            text-align: center;
            width: 100%;
            background: black;
        }
        .navbar ul{
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative;
        }
        .navbar ul li a{
            display: block;
            padding: 25px;
            color: white;
            text-decoration: none;
            width: 150px;
            
        }
        .navbar ul:after{
            content: ""; clear: both;
            display: block;
            
        } 
        .navbar ul li{
            float:right;
            list-style: none;
            
        }
        .navbar ul ul{
            display: none;
            
        }
        .navbar ul li:hover>ul{
            display: block;
        }
        .navbar ul li:hover{
            background: black;
            transition: 0.9s;
        }
        .navbar ul li:hover a{
            color: white;
        } 
        .navbar ul ul {
            background: black;
            padding: 0;
            margin: 0;
            position: absolute;
            top : 100%;
        }
        .navbar ul ul li{
            float: none;
            position: relative;
            
        }
        .navbar ul ul li a{
            padding: 25px;
            color: white;
            width: 300px;
            text-align: left;
            
        }
        .navbar ul ul li a:hover{
            background: lightblue;
            color: black;
            transition: 0.9s;
        }
        .box {
            width: 450px;
            background: rgba(0,0,0,0.4);
            padding: 40px;
            text-align: center;
            margin: auto;
            margin-top: 10%;
            color: white;
            font-family: 'Century Gothic',sans-serif;
        }
        .box-img{
            border-radius: 50%;
            width: 200px;
            height: 200px;
        }
        .box h1{
            font-size: 40px;
            letter-spacing: 4px;
            font-weight: 100;
        }
        .box h5{
            font-size: 20px;
            letter-spacing: 3px;
            font-weight: 100;
        }
        .box h6{
            font-size: 20px;
            letter-spacing: 3px;
            font-weight: 100;
        }
        table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
		<li><a href="#">Chat</a></li>
            <li><a href="#">Requests</a></li>
           
           
        </ul>
    </div> 
    <div class="box">
        <img src="#" alt="no pic available" class="box-img">
        <?php
        while(mysqli_fetch_array($sql1))
        {
    
    //    <h1>Dr. Sourav Agarwal</h1>
      //  <h5>Supervisor</h5>
    //    <h6>Supervisor Id-sou123</h6>
      //  <p>Neurologist,Completed Masters on Neuro science from Harvard University </p>
        }    
        ?>
    </div>
    
    
    <table class="data-table">
        <caption class="title">Details of students and corresponding courses</caption>
        <thead>
			<tr>
                <th>No</th>
				<th>Student Name</th>
                <th>Student Id</th>
				<th>Course</th>
				
			</tr>
		</thead>
        <tbody>
            
            <!--showing entry of database in table format--->
            <?php
            $no=1;
            //$link_address="www.google.co.in\"
            while ($row = mysqli_fetch_array($query))
            {  $url="test2.php?id=".$row['id'];
            	echo "<tr>";
					echo "<td><a href=\"" . $url.  "\">" .$row['id']. "</a></td>";
				echo "</tr>";
            $no++;
                }
            ?>
        </tbody>
        
        </table>
</body>
</html>