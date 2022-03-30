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

$is_uploading = $_FILES["my_image"]["error"];

$can_pass = $is_uploading == 0 ? true : false;
if($can_pass){
	$fnm = $_FILES["my_image"]["name"];    
    $dst = "./fibrerich-food/".$var3.$fnm;  
    $dst_db = "fibrerich-food/".$var3.$fnm; 
    move_uploaded_file($_FILES["my_image"]["tmp_name"],$dst);
}
else{
  $dst_db = 0;
}

//  if(!empty($_FILES['my_image']))
// {
// $dst = "./fibrerich-food/".$var3.$fnm; 
// $dst_db = "fibrerich-food/".$var3.$fnm; 
// move_uploaded_file($_FILES["my_image"]["tmp_name"],$dst);
// }
// else
// {
// 	$dst_db = 0;
// }


// fibre rich food
// $img_name = $_FILES['my_image']['name'];
// $img_size = $_FILES['my_image']['size'];
// $tmp_name = $_FILES['my_image']['tmp_name'];
// $error = $_FILES['my_image']['error'];
// $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
// $img_ex_lc = strtolower($img_ex);
// $allowed_exs = array("jpg", "jpeg", "png");
// $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
// $img_upload_path = 'fibrerich-food/'.$new_img_name;
// move_uploaded_file($tmp_name, $img_upload_path);

//$porteinrich = $_POST['porteinrich'];
// protein rich food
$porteinrich = $_FILES['porteinrich']['name'];
$img_size = $_FILES['porteinrich']['size'];
$tmp_name = $_FILES['porteinrich']['tmp_name'];
$error = $_FILES['porteinrich']['error'];
$img_ex = pathinfo($porteinrich, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg", "jpeg", "png");
$new_img_nameporteinrich = uniqid("IMG-", true).'.'.$img_ex_lc;
$img_upload_path = 'porteinrich-food/'.$new_img_nameporteinrich;
move_uploaded_file($tmp_name, $img_upload_path);

//$watercontentfood = $_POST['watercontentfood'];
// watercontent food
$watercontentfood = $_FILES['watercontentfood']['name'];
$img_size = $_FILES['watercontentfood']['size'];
$tmp_name = $_FILES['watercontentfood']['tmp_name'];
$error = $_FILES['watercontentfood']['error'];
$img_ex = pathinfo($watercontentfood, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg", "jpeg", "png");
$new_img_namewatercontentfood = uniqid("IMG-", true).'.'.$img_ex_lc;
$img_upload_path = 'watercontent-food/'.$new_img_namewatercontentfood;
move_uploaded_file($tmp_name, $img_upload_path);

//$seasonalfruits = $_POST['seasonalfruits'];
//seasonal fruits
$seasonalfruits = $_FILES['seasonalfruits']['name'];
$img_size = $_FILES['seasonalfruits']['size'];
$tmp_name = $_FILES['seasonalfruits']['tmp_name'];
$error = $_FILES['seasonalfruits']['error'];
$img_ex = pathinfo($seasonalfruits, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg", "jpeg", "png");
$new_img_nameseasonalfruits = uniqid("IMG-", true).'.'.$img_ex_lc;
$img_upload_path = 'seasonalfruits-food/'.$new_img_nameseasonalfruits;
move_uploaded_file($tmp_name, $img_upload_path);


$optionlit = $_POST['optionlit'];


//$moreve = $_POST['moreve'];
// Morning and Evening
$photoactivity = $_FILES['photoactivity']['name'];
$img_size = $_FILES['photoactivity']['size'];
$tmp_name = $_FILES['photoactivity']['tmp_name'];
$error = $_FILES['photoactivity']['error'];
$img_ex = pathinfo($photoactivity, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg", "jpeg", "png");
$new_img_namephotoactivity = uniqid("IMG-", true).'.'.$img_ex_lc;
$img_upload_path = 'activity-photo/'.$new_img_namephotoactivity;
move_uploaded_file($tmp_name, $img_upload_path);

$activityname = $_POST['activityname'];
$activitypoints = $_POST['activitypoints'];

//$photoactivity = $_POST['photoactivity'];
//Photo of Activity
$moreve = $_FILES['moreve']['name'];
$img_size = $_FILES['moreve']['size'];
$tmp_name = $_FILES['moreve']['tmp_name'];
$error = $_FILES['moreve']['error'];
$img_ex = pathinfo($moreve, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg", "jpeg", "png");
$new_img_namemoreve = uniqid("IMG-", true).'.'.$img_ex_lc;
$img_upload_path = 'morning-evening/'.$new_img_namemoreve;
move_uploaded_file($tmp_name, $img_upload_path);


$optionoff = $_POST['optionoff'];
$optionmw = $_POST['optionmw'];
$steps = $_POST['steps'];

//$stepsimage = $_POST['stepsimage'];
// steps image
$stepsimage = $_FILES['stepsimage']['name'];
$img_size = $_FILES['stepsimage']['size'];
$tmp_name = $_FILES['stepsimage']['tmp_name'];
$error = $_FILES['stepsimage']['error'];
$img_ex = pathinfo($stepsimage, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$allowed_exs = array("jpg", "jpeg", "png");
$new_img_namestepsimage = uniqid("IMG-", true).'.'.$img_ex_lc;
$img_upload_path = 'steps-count/'.$new_img_namestepsimage;
move_uploaded_file($tmp_name, $img_upload_path);


// database insert SQL code
$sql = "INSERT INTO user (Id, email, name, dateform, fibrepoint, porteinrich, watercontentfood, seasonalfruits, optionlit, moreve, activityname, activitypoints, photoactivity, optionoff, optionmw, steps, stepsimage) VALUES('0', '$email', '$name', '$data', '$dst_db', '$new_img_nameporteinrich', '$new_img_namewatercontentfood', '$new_img_nameseasonalfruits', '$optionlit', '$new_img_namemoreve', '$activityname', '$activitypoints', '$new_img_namephotoactivity', '$optionoff', '$optionmw', '$steps', '$new_img_namestepsimage')";
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