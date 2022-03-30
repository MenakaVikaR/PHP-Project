<?php
// Data Base Connection
$url='127.0.0.1';
$username='uwlyowuienhlk';
$password='~^.2`1-@}&jd';
$conn=mysqli_connect($url,$username,$password,"dblcsfgyfkuoqj");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM user");
$resultlead = mysqli_query($conn,"SELECT * FROM leaderboard");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard KyaReFitting aa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/viewdatabase.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h1>Database View for KyaReFitting aa</h1>
    <div class="header_wrap">
        <div class="num_rows">
		
				<div class="form-group"> 	
					<!--		Show Numbers Of Rows 		-->
			 		<select class  ="form-control" name="state" id="maxRows">
					 <option value="10">10</option>
					 <option value="15">15</option>
					 <option value="20">20</option>
					 <option value="50">50</option>
					 <option value="70">70</option>
					 <option value="100">100</option>
        			 <option value="5000">Show ALL Rows</option>
					</select>
			  	</div>
        </div>
        <div class="tb_search">
		<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
        </div>
    </div>

<table class="table table-striped table-class" id= "table-id">
<!-- Table Headind Start -->
<thead>
<tr>
<th>Name</th>
<th>Date</th>
<th>FibreRich</th>
<th>ProteinRich</th>
<th>WaterContent</th>
<th>SeasonalFruit</th>
<th>DrinkingWater</th>
<th>Sunlight(Mor/Eve)</th>
<th>ActivityPoints</th>
<th>OffScreenTime</th>
<th>MetalWellbeing</th>
<th>Steps</th>
<th>Total</th>
</tr>
</thead>

<!-- Table Content Start -->
<tbody>
	<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["today_date"]; ?></td>
<?php
if ($row["fibrerich_food"] != null ) {
$var = "10"
?><td><?php echo $var; ?></td>
<?php }else{
?><td><?php echo "0"; ?></td><?php
}
?>
<?php
if ($row["porteinrich_food"] != null ) {
$var = "10"
?><td><?php echo $var; ?></td>
<?php }else{
?><td><?php echo "0"; ?></td><?php
}
?>
<?php
if ($row["watercontent_food"] != null ) {
$var = "10"
?><td><?php echo $var; ?></td>
<?php }else{
?><td><?php echo "0"; ?></td><?php
}
?>
<?php
if ($row["seasonal_fruits"] != null ) {
$var = "10"
?><td><?php echo $var; ?></td>
<?php }else{
?><td><?php echo "0"; ?></td><?php
}
?>
<td><?php echo $row["water_litres"]; ?></td>
<?php
if ($row["morning_evening_sunlight"] != null ) {
$var = "10"
?><td><?php echo $var; ?></td>
<?php }else{
?><td><?php echo "0"; ?></td><?php
}
?>
<td><?php echo $row["activity_points"]; ?></td>
<td><?php echo $row["offscreen_time"]; ?></td>
<td><?php echo $row["metal_wellbeing"]; ?></td>
<td><?php echo $row["steps_count"]; ?></td>
<td><?php echo $row["total"]; ?></td>
</tr>
<?php
$i++;
}
?>  
<tbody>

</table>

<!--		Start Pagination -->
<div class='pagination-container'>
	<nav>
	  <ul class="pagination">
	   <!--	Here the JS Function Will Add the Rows -->
	  </ul>
	</nav>
</div>
<div class="rows_count">Showing 11 to 20 of 91 entries</div>
</div> <!-- 		End of Container -->
</body>

<!-- Pagination, Filter and Search Script -->
<script src="js/pagination.js"></script>
</html>