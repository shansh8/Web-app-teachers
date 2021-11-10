<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db'; // Database Name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$data=$_GET['id'];
$sql="SELECT * FROM course WHERE cid='$data'";
$query=mysqli_query($conn,$sql);
?>
<html>
    <head><title>Student List For a Particualr Course</title>
<style>
    body{
         background-image: url(hill3.jpg);
            background-size: cover;
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
			min-width: 800px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 15px 25px;
		}
		.data-table caption {
			margin: 15px;
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
    
         <table class="data-table">
        <caption class="title">List of Students for this course</caption>
        <thead>
			<tr>
                <th>cid</th>
				<th>Course Name</th>
                <th>Student Name</th>
				
				
			</tr>
		</thead>
        <tbody>
        
        
    <?php
        while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					
					<td>'.$row['cid'].'</td>
					<td>'.$row['coursename'].'</td>
					<td>'.$row['studentname'].'</td>
				</tr>';
			
		}
        ?>
             </tbody>
        </table>
    </body>
    </html>