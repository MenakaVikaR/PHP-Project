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

// $fibrepoint = $_POST['fibrepoint'];
//fibre rich food
$is_uploadingone = $_FILES["my_image"]["error"];
$can_passone = $is_uploadingone == 0 ? true : false;
if($can_passone){
	$fnm = $_FILES["my_image"]["name"];    
    $dst = "./fibrerich-food/".$var3.$fnm;  
    $dst_db = "fibrerich-food/".$var3.$fnm; 
    move_uploaded_file($_FILES["my_image"]["tmp_name"],$dst);
}
else{
  $dst_db = 0;
}

//$porteinrich = $_POST['porteinrich'];
// protein rich food
$is_uploadingtwo = $_FILES["porteinrich"]["error"];
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
$is_uploadingfive = $_FILES["photoactivity"]["error"];
$can_passfive = $is_uploadingfive == 0 ? true : false;
if($can_passfive){
	$photoactivity = $_FILES["photoactivity"]["name"];    
    $dstphotoactivity = "./morning-evening/".$var3.$photoactivity;  
    $dstphotoactivity = "morning-evening/".$var3.$photoactivity; 
    move_uploaded_file($_FILES["photoactivity"]["tmp_name"],$dstphotoactivity);
}
else{
  $dstphotoactivity = 0;
}

// $is_uploadingsix = $_FILES["photoactivity"]["error"];
// $can_passsix = $is_uploadingsix == 0 ? true : false;
// if($can_passsix){
// 	$photoactivity = $_FILES["photoactivity"]["name"];    
//     $dstphotoactivity = "./activity-photo/".$var3.$photoactivity;  
//     $dstphotoactivity = "activity-photo/".$var3.$photoactivity; 
//     move_uploaded_file($_FILES["photoactivity"]["tmp_name"],$dstphotoactivity);
// }
// else{
//   $dstphotoactivity = 0;
// }


$optionoff = $_POST['optionoff'];
$optionmw = $_POST['optionmw'];
$steps = $_POST['steps'];

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

// $stepsimage = $_FILES['stepsimage']['name'];
// $img_size = $_FILES['stepsimage']['size'];
// $tmp_name = $_FILES['stepsimage']['tmp_name'];
// $error = $_FILES['stepsimage']['error'];
// $img_ex = pathinfo($stepsimage, PATHINFO_EXTENSION);
// $img_ex_lc = strtolower($img_ex);
// $allowed_exs = array("jpg", "jpeg", "png");
// $new_img_namestepsimage = uniqid("IMG-", true).'.'.$img_ex_lc;
// $img_upload_path = 'steps-count/'.$new_img_namestepsimage;
// move_uploaded_file($tmp_name, $img_upload_path);


// database insert SQL code
$sql = "INSERT INTO user (Id, email, name, dateform, fibrepoint, porteinrich, watercontentfood, seasonalfruits, optionlit, moreve, activityname, activitypoints, photoactivity, optionoff, optionmw, steps, stepsimage) VALUES('0', '$email', '$name', '$data', '$dst_db', '$dstporteinrich', '$dstwatercontentfood', '$dstseasonalfruits', '$optionlit', '$dstmoreve', '$activityname', '$activitypoints', '$dstphotoactivity', '$optionoff', '$optionmw', '$steps', '$dststepsimage')";
// $sql = "INSERT INTO `tbl_contact` (`Id`, email`, `name`, `data`, `fibrepoint`, `porteinrich`, `watercontentfood`, `seasonalfruits`, `optionlit`, `moreve`, `activityname`, `activitypoints`, `photoactivity`, `optionoff`, `optionmw`, `steps`, `stepsimage`) VALUES ('0', '$email', '$name', '$data', '$fibrepoint', '$porteinrich', '$watercontentfood', '$seasonalfruits', '$optionlit', '$moreve', '$activityname', '$activitypoints', '$photoactivity', '$optionoff', '$optionmw', '$steps', '$stepsimage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header('location: success.php');
	// echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>