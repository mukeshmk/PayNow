<?php
	require_once('../login/auth.php');
?>
<!DOCTYPE html>
<?php
	$a_id=$_SESSION['SESS_MEMBER_ID'];
	
	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$c="USE paynow;";
	$c1=mysqli_query($connect,$c);
	$q1="SELECT a_nm FROM admins WHERE admin_id=$a_id;";	
	$result = $connect->query($q1);
	$row=$result->fetch_assoc();
	$a_nm=$row['a_nm'];
	
	if(!mysqli_query($connect,$q1))
	{
		echo("Error description 1: " . mysqli_error($connect));
		echo('<br><br>');
	}
?>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="description" content="PayNow - Admin Admin Template v.1">
<meta name="author" content="Isna Nur Azis">
<meta name="keyword" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PayNow - Admin</title>

<!-- start: Css -->
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

<!-- plugins -->
<link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
<link rel="stylesheet" type="text/css" href="asset/css/plugins/mediaelementplayer.css"/>
<link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
<link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/red.css"/>
<link href="asset/css/style.css" rel="stylesheet">
<!-- end: Css -->

<link rel="shortcut icon" href="asset/img/logomi.png">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


<body id="mimin" class="dashboard">
      <!-- start: Header -->
      <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>

                <a href="admin_home.php" class="navbar-brand">
                 <b>Pay Now</b>
                </a>

                <div class="container">
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $a_nm; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                </li>

              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
      <div class="container-fluid mimin-wrapper">
      <div id="left-menu">
        <div class="sub-left-menu scroll">
          <ul class="nav nav-list">
              <li><div class="left-bg"></div></li>
              <li class="time">
                <h1 class="animated fadeInLeft">21:00</h1>
                <p class="animated fadeInRight">Sat,October 1st 2029</p>
              </li>
              <li class="active ripple">
                <a class="tree-toggle nav-header" href="admin_home.php"><span class="fa-home fa"></span> Dashboard
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-diamond fa"></span> Vendor
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="wizard.php">Account creation</a></li>
                  <li><a href="itemadd.php">Item addition</a></li>
                  <li><a href="vendor_table.php">Deactivate</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-area-chart fa"></span> Customer
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="addmoney.php">Add Money</a></li>
                  <li><a href="cust_table.php">Deactivate Account</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </div>

          <!-- end: Left Menu -->


          <!-- start: Content -->
          <div id="content">
             <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Table Static</h3>
                        <p class="animated fadeInDown">
                          Tables <span class="fa-angle-right fa"></span>Table Static
                        </p>
                    </div>
                  </div>
              </div>

            <div class="col-md-12 top-20 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-body">
                  <div class="col-md-12 padding-0" style="padding-bottom:20px;">
                    <div class="col-md-6" style="padding-left:10px;">
                        <input type="checkbox" class="icheck pull-left" name="checkbox1"/>
                        <select>
                            <option>Delete</option>
                            <option>Ignore</option>
                            <option>Cancel</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                         <div class="col-lg-12">
                            <div class="input-group">
                              <input type="text" class="form-control" aria-label="...">
                              <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search<span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li role="separator" class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div><!-- /btn-group -->
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->
                    </div>
                 </div>
                  <div class="responsive-table">

                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><input type="checkbox" class="icheck" name="checkbox1" /></th>
                        <th>S No</th>
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
                        <td>1</td>
                        <td>Ramya Praneetha</td>
                        <td>Rp</td>
                        <td>alohomora</td>
                        <td>12000</td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
                        <td>2</td>
                        <td>Mukesh</td>
                        <td>Mk</td>
                        <td>winter</td>
                        <td>11250</td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
                        <td>3</td>
                        <td>Akilesh</td>
                        <td>Akil</td>
                        <td>sonic</td>
                        <td>1500</td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
                        <td>4</td>
                        <td>Keerthana</td></td>
                        <td>Kiki</td>
                        <td>black</td>
                        <td>1250</td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
                        <td>5</td>
                        <td>Aravind</td>
                        <td>Aravind</td>
                        <td>Architect</td>
                        <td>12500</td>
                      </tr>
                      
                    </tbody>
                  </table>
                  </div>
                  <div class="col-md-6" style="padding-top:20px;">
                    <span>showing 0-10 of 30 items</span>
                  </div>
                  <div class="col-md-6">
                        <ul class="pagination pull-right">
                          <li>
                            <a href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- end: content -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/icheck.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
$(document).ready(function(){
     $('input').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat-red'
      });
});
</script>
<!-- end: Javascript -->
</body>
</html>
