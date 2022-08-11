<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehicle Management System</title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="logstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" HREF="12.jpg" />
<!-- Start WOWSlider.com HEAD section--> 
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<script src="aa.js" type="text/javascript"></script>
</head>
<body>

<div id="tooplate_wrapper">
		<div id="tooplate_header">
       	   <div id="site_title"><h2 id="hheader"style="margin-left:180px;margin-top:40px;font-size:22px;font-family:Cooper Black;"><b><span style="font-size:36px;color:white">    BURIE  TOWN BUS STATION</span><br/><br/></b>Online Vehicle Management System</h2></div>
             </div> <!-- end of forever header -->
    <div id="tooplate_menu">
			<ul>
				<li><a href="manager.php" class="current">Home</a></li>			
                <li><a href="registervehicle.php">Register Vehicle</a></li>
				<li><a href="vehicleinfo.php">View Vehicle info</a></li>
				<li><a href="manage_requests.php">Manage Request</a></li>
			    <li><a href="assign.php">Assign Vehicle</a></li>
			    <li><a href="fuel.php">Check Fuel Balance</a></li>
                <li><a href="#">Generate Report</a>
					<ul style="margin-left:10px;padding-right:4px;">
						<li><a href="reportuser.php">Report For Users</a></li>
						<li><a href="reportvehicle.php">Vehicle Report</a></li>
						<li><a href="FuelReport.php">Fuel Information</a></li>
					</ul>
					</li>
			    <li><a href="permission.php">Get Exit permission</a></li>
                <li><a href="update.php">Update account</a></li>
                <li><a href="viewcomment.php">View Comment</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>       	
		</div> <!-- end of tooplate_menu -->
    <script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
} 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}
</script>
    <div id="tooplate_main">
       	<div id="tooplate_content">
				<br /><br />			  
<div id="content">
	<form action="" method="post" >
							<?php 
	echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
	text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';
	$sel=mysql_query("SELECT * FROM  calculatefuelbalance ORDER BY date");
			echo '<table border="1";align="center" style="width:900px;height:200;color:black;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '
			<th bgcolor="#336699"><font color="white" size="2">Full Name</th>
		<th bgcolor="#336699"><font color="white" size="2">Previous KMs</th>
		<th bgcolor="#336699"><font color="white" size="2">Current KMS</th>
		<th bgcolor="#336699"><font color="white" size="2">Difference Kms</th>
			<th bgcolor="#336699"><font color="white" size="2">KM per Liter</th>
			<th bgcolor="#336699"><font color="white" size="2">Used Fuel</th>
			<th bgcolor="#336699"><font color="white" size="2">Given Fuel</th>
			<th bgcolor="#336699"><font color="white" size="2">Fuel Price</th>
			<th bgcolor="#336699"><font color="white" size="2">Total Fuel Price</th>
				<th bgcolor="#336699"><font color="white" size="2">date</th>
			</tr>';
			
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>   Vehicle  Calculated fuel balance";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
  print ("<tr>");
print ("<td><font size='2'>" . $row['FullName'] . "</td>");
print ("<td><font size='2'>" . $row['PreviousKMs'] . "</td>");	 
print ("<td><font size='2'>" . $row['CurrentKMS'] . "</td>");	
print ("<td><font size='2'>" . $row['DifferenceKms'] . "</td>");
print ("<td><font size='2'>" . $row['KMperLiter'] . "</td>");
print ("<td><font size='2'>" . $row['UsedFuel'] . "</td>");			
print ("<td><font size='2'>" . $row['GivenFuel'] . "</td>");	
print ("<td><font size='2'>" . $row['FuelPrice'] . "</td>");
print ("<td><font size='2'>" . $row['TotalFuelPrice'] . "</td>");	
print ("<td><font size='2'>" . $row['Date'] . "</td>");		
  print ("</tr>");
  }
print( "</table>");
			
						?>
					</form>
				</div>
	</div>
		
        <div class="cleaner"></div>
	</div> <!-- end of main -->
    <div id="tooplate_footer_wrapper">
        <div id="tooplate_copyright">
		<a href="http://www.youtube.com"><img src="images/youtube.png" id="youtube"></a>
		<a href="http://www.facebook.com"><img src="images/facebook.png" id="facebook"></a> 
		<a href="http://www.tweeter.com"><img src="images/tweeter.png" id="tweeter"></a> 
            <div id="footp"><b>Copyright © 2011 E.C  BURIE  TOWN BUS STATION</b>	</div>
		</div>
	</div>
</div> <!-- end of wrapper -->
</body>
</html>