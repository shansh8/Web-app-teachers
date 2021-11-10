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
$student_id=$_GET['id'];

$sql="SELECT * FROM registration2 WHERE id='5'";
$result=mysqli_query($conn,$sql);
$result11=mysqli_query($conn,$sql);
$score="SELECT AVG(Score) FROM test WHERE StudentID='#'";
$result2=mysqli_query($conn,$score);
$showCourse="SELECT CourseName,List_of_Actvy,StartTime,DueDate,CompletedeDate FROM course WHERE StudentID='#'";
$result3=mysqli_query($conn,$showCourse);
 $url1="/webchat/home.php?id=".$student_id;
?>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <title>Student profile </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    margin-top:20px;
    background:#e9ebee;
}


.text-white {
    color: #ffffff;
}
h3 {
    line-height: 30px;
}
/* ==============
  Panels
===================*/
.panel {
  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
  border-radius: 0px;
  border: none;
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}
.panel .panel-body {
  padding: 20px;
}
.panel .panel-body p {
  margin: 0px;
}
.panel .panel-body p + p {
  margin-top: 15px;
}
.panel-heading {
  border-radius: 0;
  border: none !important;
  padding: 10px 20px;
}
.panel-default > .panel-heading {
  background-color: #fafafa;
  border-bottom: none;
  color: #797979;
}
.panel-title {
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 0;
  margin-top: 0;
  text-transform: uppercase;
}
.panel-footer {
  background: #fafafa;
  border-top: 0px;
}
.panel-color .panel-title {
  color: #ffffff;
}
.panel-primary > .panel-heading {
  background-color: #6e8cd7;
}
.panel-success > .panel-heading {
  background-color: #33b86c;
}
.panel-info > .panel-heading {
  background-color: #29b6f6;
}
.panel-warning > .panel-heading {
  background-color: #ffd740;
}
.panel-danger > .panel-heading {
  background-color: #ef5350;
}
.panel-purple > .panel-heading {
  background-color: #7e57c2;
}
.panel-pink > .panel-heading {
  background-color: #ec407a;
}
.panel-inverse > .panel-heading {
  background-color: #212121;
}
.panel-border {
  border-radius: 3px;
}
.panel-border .panel-heading {
  background-color: #ffffff;
  border-top: 3px solid #ccc !important;
  border-radius: 3px;
  padding: 10px 20px 0px;
}
.panel-border .panel-body {
  padding: 15px 20px 20px 20px;
}
.panel-border.panel-primary .panel-heading {
  border-color: #6e8cd7 !important;
  color: #6e8cd7 !important;
}
.panel-border.panel-success .panel-heading {
  border-color: #33b86c !important;
  color: #33b86c !important;
}
.panel-border.panel-info .panel-heading {
  border-color: #29b6f6 !important;
  color: #29b6f6 !important;
}
.panel-border.panel-warning .panel-heading {
  border-color: #ffd740 !important;
  color: #ffd740 !important;
}
.panel-border.panel-danger .panel-heading {
  border-color: #ef5350 !important;
  color: #ef5350 !important;
}
.panel-border.panel-purple .panel-heading {
  border-color: #7e57c2 !important;
  color: #7e57c2 !important;
}
.panel-border.panel-pink .panel-heading {
  border-color: #ec407a !important;
  color: #ec407a !important;
}
.panel-border.panel-inverse .panel-heading {
  border-color: #212121 !important;
  color: #212121 !important;
}
.panel-fill {
  border-radius: 3px;
}
.panel-fill .panel-heading {
  background-color: transparent;
  color: #ffffff;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5) !important;
}
.panel-fill .panel-body {
  color: rgba(255, 255, 255, 0.85);
}
.panel-fill.panel-default .panel-body {
  color: #666;
}
.panel-fill.panel-default .panel-heading {
  background-color: transparent;
  color: #333333;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
}
.panel-fill.panel-primary {
  background-color: #489ce7;
}
.panel-fill.panel-success {
  background-color: #58c386;
}
.panel-fill.panel-info {
  background-color: #50c1f4;
}
.panel-fill.panel-warning {
  background-color: #fcdc63;
}
.panel-fill.panel-danger {
  background-color: #ef7270;
}
.panel-fill.panel-purple {
  background-color: #9475cb;
}
.panel-fill.panel-pink {
  background-color: #ec6391;
}
.panel-fill.panel-inverse {
  background-color: #4a4a4a;
}
.panel-group .panel .panel-heading a[data-toggle=collapse].collapsed:before {
  content: '\f067';
}
.panel-group .panel .panel-heading .accordion-toggle.collapsed:before {
  content: '\f067';
}
.panel-group .panel .panel-heading a[data-toggle=collapse] {
  display: block;
}
.panel-group .panel .panel-heading a[data-toggle=collapse]:before {
  content: '\f068';
  display: block;
  float: right;
  font-family: 'FontAwesome';
  font-size: 14px;
  text-align: right;
  width: 25px;
}
.panel-group .panel .panel-heading .accordion-toggle {
  display: block;
}
.panel-group .panel .panel-heading .accordion-toggle:before {
  content: '\f068';
  display: block;
  float: right;
  font-family: 'FontAwesome';
  font-size: 14px;
  text-align: right;
  width: 25px;
}
.panel-group .panel .panel-heading + .panel-collapse .panel-body {
  border-top: none;
}
.panel-group .panel-heading {
  padding: 12px 26px;
}
.panel-group.panel-group-joined .panel + .panel {
  border-top: 1px solid #eeeeee;
  margin-top: 0;
}
.panel-group-joined .panel-group .panel + .panel {
  border-top: 1px solid #eeeeee;
  margin-top: 0;
}
/* ==============
  Profile
===================*/
.bg-overlay {
  -moz-border-radius: 6px 6px 0px 0px;
  -webkit-border-radius: 6px 6px 0px 0px;
  background-color: rgba(49, 126, 235, 0.4);
  border-radius: 6px 6px 0px 0px;
  height: 100%;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 100%;
}
.bg-picture {
  -webkit-background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background:#00b5ec;
  margin-top: -22px;
  padding: 100px 0px;
  position: relative;
}
.bg-picture > .bg-picture-overlay {
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(0, 0, 0, 0.4) 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), to(rgba(0, 0, 0, 0.4)));
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(0, 0, 0, 0.4) 100%);
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, rgba(0, 0, 0, 0.4) 100%);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}
.profile-info-name {
  position: relative;
}
.profile-tab-content {
  background-color: transparent !important;
  box-shadow: none !important;
  margin-top: 35px;
}
.user-tabs {
  background-color: #ffffff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  margin-left: 0;
  margin-right: 0px;
}
.user-tabs .nav.nav-tabs {
  box-shadow: none !important;
}
.user-tabs .nav.nav-tabs a {
  text-transform: uppercase;
}
.user-tabs .pull-right .btn {
  margin-top: 8px;
}
.about-info-p {
  margin-bottom: 20px;
}
.about-info-p p {
  font-size: 16px;
}
.tabs {
  background-color: #ffffff;
  margin: 0 auto;
  padding: 0px;
  position: relative;
  white-space: nowrap;
  width: 100%;
}
.tabs li.tab {
  background-color: #ffffff;
  display: block;
  float: left;
  margin: 0;
  text-align: center;
}
.tabs li.tab a {
  -moz-transition: color 0.28s ease;
  -ms-transition: color 0.28s ease;
  -o-transition: color 0.28s ease;
  -webkit-transition: color 0.28s ease;
  color: #ee6e73;
  display: block;
  height: 100%;
  text-decoration: none;
  transition: color 0.28s ease;
  width: 100%;
}
.tabs li.tab a.active {
  color: #6e8cd7 !important;
}
.tabs .indicator {
  background-color: #6e8cd7;
  bottom: 0;
  height: 2px;
  position: absolute;
  will-change: left, right;
}
.tabs-top .indicator {
  top: 0;
}
.nav.nav-tabs + .tab-content {
  background: #ffffff;
  margin-bottom: 30px;
  padding: 30px;
}
.tabs-vertical-env {
  background-color: #eeeeee;
  margin-bottom: 30px;
}
.tabs-vertical-env .tab-content {
  background: #ffffff;
  display: table-cell;
  margin-bottom: 30px;
  padding: 30px;
  vertical-align: top;
}
.tabs-vertical-env .nav.tabs-vertical {
  display: table-cell;
  min-width: 120px;
  vertical-align: top;
  width: 150px;
}
.tabs-vertical-env .nav.tabs-vertical li.active > a {
  background-color: #ffffff;
  border: 0;
}
.tabs-vertical-env .nav.tabs-vertical li > a {
  color: #333333;
  text-align: center;
  white-space: nowrap;
}
.nav.nav-tabs > li.active > a {
  background-color: #ffffff;
  border: 0;
}
.nav.nav-tabs > li > a,
.nav.tabs-vertical > li > a {
  background-color: transparent;
  border-radius: 0;
  border: none;
  color: #333333 !important;
  cursor: pointer;
  line-height: 50px;
  font-weight: 700;
  padding: 0px 20px;
}
.nav.nav-tabs > li > a:hover,
.nav.tabs-vertical > li > a:hover {
  color: #6e8cd7 !important;
}
.tab-content {
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  color: #777777;
}
.nav.nav-tabs > li:last-of-type a {
  margin-right: 0px;
}
.nav.nav-tabs {
  border-bottom: 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.navtab-bg {
  background-color: #eeeeee;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus,
.tabs-vertical-env .nav.tabs-vertical li.active > a {
  border: none;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:focus,
.nav-tabs > li.active > a:hover,
.tabs-vertical > li.active > a,
.tabs-vertical > li.active > a:focus,
.tabs-vertical > li.active > a:hover {
  color: #6e8cd7 !important;
}
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">

        <div class="wraper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bg-picture text-center">
                        <div class="bg-picture-overlay"></div>
                        <div class="profile-info-name">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                            <h3 class="text-white"> <?php
                                                
                                                
                                                while($row=mysqli_fetch_array($result11))
                                                {
                                                echo "<p>".$row['FirstName']." ".$row['LastName']."</p>";
                                                //echo "<p>".$row['LastName']."</p>";    
                                                }
                            ?></h3>
                        </div>
                    </div>
                    <!--/ meta -->
                </div>
            </div>
            <div class="row user-tabs">
                <div class="col-lg-6 col-md-9 col-sm-9">
                    <ul class="nav nav-tabs tabs" style="width: 100%;">
                        <li class="active tab" style="width: 25%;">
                            <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active">
                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                <span class="hidden-xs">About Student</span>
                            </a>
                        </li>
                        <li class="tab" style="width: 25%;">
                            <a href="#profile-2" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                <span class="hidden-xs">Activities</span>
                            </a>
                        </li>
                       <!---- <li class="tab" style="width: 25%;">
                            <a href="#messages-2" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                <span class="hidden-xs">Assessments</span>
                            </a>
                        </li>
                        <li class="tab" style="width: 25%;">
                            <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                <span class="hidden-xs">Details</span>
                            </a>
                        </li>--->
						<!---<li class="tab" style="width: 25%;">
                            <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                <span class="hidden-xs">Academic Settings</span>
                            </a>
                        </li>--->
                        <div class="indicator" style="right: 476px; left: 0px;"></div>
                        <div class="indicator" style="right: 476px; left: 0px;"></div>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-3 hidden-xs">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle btn-rounded btn btn-primary waves-effect waves-light" href="#"> Options<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="modifyDetails.php">Modify</a></li>
                                <li><a href="removeDetails.php">Remove</a></li>
                                <li class="divider"></li>
                                 
                                <li><?php echo "<a href='$url1'>"."Chatbox"."</a>"?></li>
                                
                                
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
                
                
                  <div class="col-lg-6 col-md-3 col-sm-3 hidden-xs">
                    <div class="pull-right">
                        <div class="dropdown">
                            <button style="background-color: #50c1f4;position:left;"><?php echo "<a href='$assign_new_course'>"."Chatbox"."</a>"?></button>
                          
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="tab-content profile-tab-content">
                        <div class="tab-pane active" id="home-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Personal Information</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="about-info-p">
                                                <strong>Full Name</strong>
                                                <br>
                                               <!--- <p class="text-muted">Student 12 </p>-->
                                                 <?php
                                                
                                                
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                echo "<p>".$row['FirstName']." ".$row['LastName']."</p>";
                                                //echo "<p>".$row['LastName']."</p>";    
                                                }
                            ?>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Student Id</strong>
                                                <br>
                                                <?php
                                                
                                                
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                echo "<p>".$row['StudentID']."</p>";
                                                }
                                                ?>
                                            </div>
                                             <div class="about-info-p">
                                                <strong>School Grade</strong>
                                                <br>
                                                <!--<p class="text-muted">06</p>-->
                                                 
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Class</strong>
                                                <br>
                                                <!---<p class="text-muted">xyz@xyz.com</p>-->
                                                 <?php
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                echo "<p>".$row['Class']."</p>";
                                                }
                                                ?>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>Address</strong>
                                                <br>
                                                <?php
                                                
                                                
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                echo "<p>".$row['Address']."</p>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Personal-Information -->

                                    <!-- Languages -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Languages</h3>
                                        </div>
                                        <div class="panel-body">
                                            <ul>
                                                <li>English</li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Languages -->

                                </div>

                                <div class="col-md-8">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Brief Report</h3>
                                        </div>
                                        <div class="panel-body">
                                            <p>LSAmple report content text</p>

                                            <p><strong>Sample focus areas</strong></p>

                                            <p>Sample strengths and weak areas of learning</p>in
                                        </div>
                                    </div>
                                    <!-- Personal-Information -->

                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Skills</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="m-b-15">
                                                <h5>Reading fluency  <span class="pull-right">60%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; visibility: hidden; animation-name: none;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="m-b-15">
                                                <h5>Spelling <span class="pull-right">90%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-pink wow animated progress-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; visibility: hidden; animation-name: none;">
                                                        <span class="sr-only">90% Complete</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="m-b-15">
                                                <h5>Auditory discrimination <span class="pull-right">80%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-purple wow animated progress-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; visibility: hidden; animation-name: none;">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="m-b-0">
                                                <h5>Reading Comprehension <span class="pull-right">95%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%; visibility: hidden; animation-name: none;">
                                                        <span class="sr-only">95% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
											<div class="m-b-0">
                                                <h5>Writing Skills <span class="pull-right">95%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%; visibility: hidden; animation-name: none;">
                                                        <span class="sr-only">85% Complete</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane" id="profile-2">
                            <!-- Personal-Information -->
                            <div class="panel panel-default panel-fill">

                                <div class="panel-body">
                                    <div class="timeline-2">
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted"></div>
                                                <p><strong><a href="#" class="text-info">Student12</a></strong> Completed <strong>Activity2</strong></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">23 Feb 18</div>
                                                <p><a href="" class="text-info">Completed</a> Activity2</p>
                                                <p><em>"Duration: 15 mins 07 sec</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">21 Feb 18</div>
                                                <p><a href="" class="text-info">Started</a> Activity2</p>
                                                <p><em>"Duration: Incomplete</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">19 Feb 2018</div>
                                                <p><strong><a href="#" class="text-info">Promoted</a></strong>Grade 6</p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">15 Feb 18</div>
                                                <p><a href="" class="text-info">Completed</a> Activity : Assessment 10.</p>
                                                <p><em>"Duration : 20 mins, Scored: 9 "</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">10 Feb 18</div>
                                                <p><a href="" class="text-info">Created</a> Student 12 Added</p>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Personal-Information -->
                        </div>

                        <div class="tab-pane" id="messages-2">
                            <!-- Personal-Information -->
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">My Projects</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Assessment name</th>
                                                    <th>Start Date</th>
                                                    <th>Due Date</th>
                                                    <th>Status</th>
                                                    <th>Marks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Assessment10</td>
                                                    <td>13/02/2018</td>
                                                    <td>15/02/2018</td>
                                                    <td><span class="label label-info">Completed</span></td>
                                                    <td>09 : PASS</td>
                                                </tr>
                                                

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!-- Personal-Information -->
                        </div>

                       <!--- <div class="tab-pane" id="settings-2">
                            <!-- Personal-Information 
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Edit Profile</h3>
                                </div>
                                <div class="panel-body">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="FullName">Full Name</label>
                                            <input type="text" value="John Doe" id="FullName" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Username">StudentID</label>
                                            <input type="text" value="john" id="Username" class="form-control">
                                        </div>
                                        <!---<div class="form-group">
                                            <label for="Password">Password</label>
                                            <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="RePassword">Re-Password</label>
                                            <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="AboutMe">About </label>
                                            <textarea style="height: 125px" id="AboutMe" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                        </div>
                                        <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                    </form>

                                </div>
                            </div>
                            <!-- Personal-Information 
                        </div>---->
                    </div>
                </div>
            </div>

            <!-- Footer -->
            
            <!-- End Footer -->
        </div>
        <!-- end container -->
    </div>
    <!-- end wrapper -->
    
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>