<?php
// database connection code
if(isset($_POST['email']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','kyarefitting_aa_form');

// get the post records

$email = $_POST['email'];
$name = $_POST['name'];
$data = $_POST['data'];

// fibre rich food
$is_uploadingone = $_FILES["fibrerich"]["error"];
$fibrerich = $_FILES['fibrerich']['name'];
$img_sizefibrerich = $_FILES['fibrerich']['size'];
$tmp_name = $_FILES['fibrerich']['tmp_name'];
$img_ex = pathinfo($fibrerich, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);

$can_passone = $is_uploadingone == 0 ? true : false;
if(($can_passone)&&($img_sizefibrerich<5000)){
  $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
  $dstfibrerich = 'fibrerich-food/'.$new_img_name;
  move_uploaded_file($tmp_name, $dstfibrerich);   
}
else{
  $dstfibrerich = 0;
}

//$porteinrich = $_POST['porteinrich'];
// protein rich food
$is_uploadingtwo = $_FILES["porteinrich"]["error"];
$porteinrich = $_FILES['porteinrich']['name'];
$img_sizefibrerich = $_FILES['porteinrich']['size'];
$tmp_name = $_FILES['porteinrich']['tmp_name'];
$img_ex = pathinfo($porteinrich, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);

$can_passtwo = $is_uploadingtwo == 0 ? true : false;
if($can_passtwo){
  $porteinrich = $_FILES["porteinrich"]["name"];    
    $dstporteinrich = "./porteinrich-food/".$var3.$porteinrich;  
    $dstporteinrich = "porteinrich-food/".$var3.$porteinrich; 
    move_uploaded_file($_FILES["porteinrich"]["tmp_name"],$dstporteinrich);
}
else{
  $dstporteinrich = 0;
}

//$watercontentfood = $_POST['watercontentfood'];
// watercontent food
$is_uploadingthree = $_FILES["watercontentfood"]["error"];
$can_passthree = $is_uploadingthree == 0 ? true : false;
if($can_passthree){
  $watercontentfood = $_FILES["watercontentfood"]["name"];    
    $dstwatercontentfood = "./watercontent-food/".$var3.$watercontentfood;  
    $dstwatercontentfood = "watercontent-food/".$var3.$watercontentfood; 
    move_uploaded_file($_FILES["watercontentfood"]["tmp_name"],$dstwatercontentfood);
}
else{
  $dstwatercontentfood = 0;
}


//$seasonalfruits = $_POST['seasonalfruits'];
//seasonal fruits
$is_uploadingfour = $_FILES["seasonalfruits"]["error"];
$can_passfour = $is_uploadingfour == 0 ? true : false;
if($can_passfour){
  $seasonalfruits = $_FILES["seasonalfruits"]["name"];    
    $dstseasonalfruits = "./seasonalfruits-food/".$var3.$seasonalfruits;  
    $dstseasonalfruits = "seasonalfruits-food/".$var3.$seasonalfruits; 
    move_uploaded_file($_FILES["seasonalfruits"]["tmp_name"],$dstseasonalfruits);
}
else{
  $dstseasonalfruits = 0;
}


$optionlit = $_POST['optionlit'];


//$moreve = $_POST['moreve'];
// Morning and Evening
$is_uploadingfive = $_FILES["moreve"]["error"];
$can_passfive = $is_uploadingfive == 0 ? true : false;
if($can_passfive){
  $moreve = $_FILES["moreve"]["name"];    
    $dstmoreve = "./morning-evening/".$var3.$moreve;  
    $dstmoreve = "morning-evening/".$var3.$moreve; 
    move_uploaded_file($_FILES["moreve"]["tmp_name"],$dstmoreve);
}
else{
  $dstmoreve = 0;
}

$activityname = $_POST['activityname'];
$activitypoints = $_POST['activitypoints'];

//$photoactivity = $_POST['photoactivity'];
//Photo of Activity

$is_uploadingsix = $_FILES["photoactivity"]["error"];
$can_passsix = $is_uploadingsix == 0 ? true : false;
if($can_passsix){
 $photoactivity = $_FILES["photoactivity"]["name"];    
    $dstphotoactivity = "./activity-photo/".$var3.$photoactivity;  
    $dstphotoactivity = "activity-photo/".$var3.$photoactivity; 
    move_uploaded_file($_FILES["photoactivity"]["tmp_name"],$dstphotoactivity);
}
else{
  $dstphotoactivity = 0;
}


$optionoff = $_POST['optionoff'];
$optionmw = $_POST['optionmw'];

$steps = $_POST['steps'];
// if ($steps >= 251) {
//   # code...
//   $step = $_POST['steps'];
// }
// else
// {
//   echo "Please enter above 251 steps";
// }


//$stepsimage = $_POST['stepsimage'];
// steps image
$is_uploadingseven = $_FILES["stepsimage"]["error"];
$can_passseven = $is_uploadingseven == 0 ? true : false;
if($can_passseven){
  $stepsimage = $_FILES["stepsimage"]["name"];    
    $dststepsimage = "./steps-count/".$var3.$stepsimage;  
    $dststepsimage = "steps-count/".$var3.$stepsimage; 
    move_uploaded_file($_FILES["stepsimage"]["tmp_name"],$dststepsimage);
}
else{
  $dststepsimage = 0;
}


// database insert SQL code
$sql = "INSERT INTO user (Id, email, name, today_date, fibrerich_food, porteinrich_food, watercontent_food, seasonal_fruits, water_litres, morning_evening_sunlight, activity_name, activity_points, activity_photos, offscreen_time, metal_wellbeing, steps_count, stepscount_photo) VALUES('0', '$email', '$name', '$data', '$dstfibrerich', '$dstporteinrich', '$dstwatercontentfood', '$dstseasonalfruits', '$optionlit', '$dstmoreve', '$activityname', '$activitypoints', '$dstphotoactivity', '$optionoff', '$optionmw', '$steps', '$dststepsimage')";


// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
  // header('location: success.php');
  echo "Contact Records Inserted";
}
}
else
{
  echo "Are you a genuine visitor?";
  
}
?>