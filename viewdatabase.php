<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"kyarefitting_aa_form");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
//include_once 'contact.php';
$result = mysqli_query($conn,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
    body{

    background-color: #eee; 
}

table th , table td{
    text-align: center;
}

table tr:nth-child(even){
    background-color: #e4e3e3
}

th {
  background: #333;
  color: #fff;
}

.pagination {
  margin: 0;
}

.pagination li:hover{
    cursor: pointer;
}

.header_wrap {
  padding:30px 0;
}
.num_rows {
  width: 20%;
  float:left;
}
.tb_search{
  width: 20%;
  float:right;
}
.pagination-container {
  width: 70%;
  float:left;
}

.rows_count {
  width: 20%;
  float:right;
  text-align:right;
  color: #999;
}
</style>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="table-responsive">
  <table id="myTable" class="display table" width="100%">
  
  <tr>
    <td>Name</td>
    <td>Date</td>
    <td>Fibrerich Food</td>
    <td>Proteinrich Food</td>
    <td>Watercontent Food</td>
    <td>Seasonal Fruit</td>
    <td>Water Liters</td>
    <td>Morning Evening Sunlight</td>
    <td>Activity Name</td>
    <td>Activity Points</td>
    <td>Activity Photos</td>
    <td>Offscreen Time</td>
    <td>Metal Wellbeing</td>
    <td>Steps Count</td>
    <td>Stepscount Photo</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["today_date"]; ?></td>
    <td><?php echo $row["fibrerich_food"]; ?></td>
    <td><?php echo $row["porteinrich_food"]; ?></td>
    <td><?php echo $row["watercontent_food"]; ?></td>
    <td><?php echo $row["seasonal_fruits"]; ?></td>
    <td><?php echo $row["water_litres"]; ?></td>
    <td><?php echo $row["morning_evening_sunlight"]; ?></td>
    <td><?php echo $row["activity_name"]; ?></td>
    <td><?php echo $row["activity_points"]; ?></td>
    <td><?php echo $row["activity_photos"]; ?></td>
    <td><?php echo $row["offscreen_time"]; ?></td>
    <td><?php echo $row["metal_wellbeing"]; ?></td>
    <td><?php echo $row["steps_count"]; ?></td>
    <td><?php echo $row["stepscount_photo"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
 <script type="text/javascript">
    //
// This only line code describes to bind datatable functionalities like searching, sorting and paging to our table.
// Here 'myTable' is the ID of our table
//
 
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
 </script>
</html>