<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','kyarefitting_aa_form');

// get the post records
$total_value = 0;
// name
$name = $_POST['name'];
// date
$data = $_POST['data'];



function compressImage($source, $destination, $quality) { 
    // Get image info 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // Create a new image from file 
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // Save image 
    imagejpeg($image, $destination, $quality); 
     
    // Return compressed image 
    return $destination; 
} 

// fibre rich food
$is_uploadingone = $_FILES["fibrerich"]["error"];
$uploadPath = "fibrerich-food/"; 

$can_passone = $is_uploadingone == 0 ? true : false;
if($can_passone){

  $fileName = basename($_FILES["fibrerich"]["name"]); 
        $imageUploadPath = $uploadPath . $fileName; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif');
        
        $imageTemp = $_FILES["fibrerich"]["tmp_name"]; 
        $imageSize = $_FILES["fibrerich"]["size"];
        $dstfibrerich = compressImage($imageTemp, $imageUploadPath, 15);
        $compressedImageSize = filesize($dstfibrerich);
        $total_value+= 10;
}
else{
  $dstfibrerich = 0;
}

// proteinrichfood
$is_uploadingtwo = $_FILES["porteinrich"]["error"];
//$img_sizetwo = $_FILES['porteinrich']['size'];
$uploadPathtwo = "porteinrich-food/";

$can_passtwo = $is_uploadingtwo == 0 ? true : false;
if($can_passtwo){
    $fileName = basename($_FILES["porteinrich"]["name"]);
    $imageUploadPath = $uploadPathtwo . $fileName;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif');
    $imageTemp = $_FILES["porteinrich"]["tmp_name"]; 
    $imageSize = $_FILES["porteinrich"]["size"];
    $dstporteinrich = compressImage($imageTemp, $imageUploadPath, 15);
    $compressedImageSizetwo = filesize($dstporteinrich);
    $total_value+= 10;
}
else{
  $dstporteinrich = 0;
}

// watercontent food
$is_uploadingthree = $_FILES["watercontentfood"]["error"];
$uploadPaththree = "watercontent-food/";

$can_passthree = $is_uploadingthree == 0 ? true : false;
if($can_passthree){
    $fileName = basename($_FILES["watercontentfood"]["name"]);
    $imageUploadPath = $uploadPaththree . $fileName;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    // Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif');
    $imageTemp = $_FILES["watercontentfood"]["tmp_name"]; 
    $imageSize = $_FILES["watercontentfood"]["size"];
    $dstwatercontentfood = compressImage($imageTemp, $imageUploadPath, 15);
    $compressedImageSizetwo = filesize($dstwatercontentfood);
    $total_value+= 10;
}
else{
  $dstwatercontentfood = 0;
}

//seasonal fruits
$is_uploadingfour = $_FILES["seasonalfruits"]["error"];
$uploadPathfour = "seasonalfruits-food/";

$can_passfour = $is_uploadingfour == 0 ? true : false;
if($can_passfour){
    $fileName = basename($_FILES["seasonalfruits"]["name"]);
    $imageUploadPath = $uploadPathfour . $fileName;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    // Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif');
    $imageTemp = $_FILES["seasonalfruits"]["tmp_name"]; 
    $imageSize = $_FILES["seasonalfruits"]["size"];
    $dstseasonalfruits = compressImage($imageTemp, $imageUploadPath, 15);
    $compressedImageSizetwo = filesize($dstseasonalfruits);
    $total_value+= 10;
}
else{
  $dstseasonalfruits = 0;
}

// water liter
$optionlit = $_POST['optionlit'];
if($optionlit!= 0){
    $optionlit = $_POST['optionlit'];
    $total_value+= $optionlit;
}
else
{
    $optionlit = 0;
}

// Morning and Evening
$is_uploadingfive = $_FILES["moreve"]["error"];
$uploadPathfive = "morning-evening/";

$can_passfive = $is_uploadingfive == 0 ? true : false;
if($can_passfive){
    $fileName = basename($_FILES["moreve"]["name"]);
    $imageUploadPath = $uploadPathfive . $fileName;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif');
    $imageTemp = $_FILES["moreve"]["tmp_name"]; 
    $imageSize = $_FILES["moreve"]["size"];
    $dstmoreve = compressImage($imageTemp, $imageUploadPath, 15);
    $compressedImageSizetwo = filesize($dstmoreve);
    $total_value+= 10;
}
else{
  $dstmoreve = 0;
}

$activityname = $_POST['activityname'];
if($activityname!= null){
    $activityname = $_POST['activityname']; 
}
else
{
    $activityname = 0;
}

// Activity Points
$activitypoints = $_POST['activitypoints'];
if($activitypoints!= null){
    $activitypoints = $_POST['activitypoints'];
    $total_value+= 0.3 * $activitypoints;
}
else
{
    $activitypoints = 0;
}

//Photo of Activity
$is_uploadingsix = $_FILES["photoactivity"]["error"];
$uploadPathsix = "activity-photo/";

$can_passsix = $is_uploadingsix == 0 ? true : false;
if($can_passsix){
  $fileName = basename($_FILES["photoactivity"]["name"]);
    $imageUploadPath = $uploadPathsix . $fileName;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif');
    $imageTemp = $_FILES["photoactivity"]["tmp_name"]; 
    $imageSize = $_FILES["photoactivity"]["size"];
    $dstphotoactivity = compressImage($imageTemp, $imageUploadPath, 15);
    $compressedImageSizetwo = filesize($dstphotoactivity);
}
else{
  $dstphotoactivity = 0;
}


$optionoff = $_POST['optionoff'];
if($optionoff!= 0){
    $optionoff = $_POST['optionoff'];
    $total_value+= $optionoff; 
}
else
{
    $optionoff = 0;
}

$optionmw = $_POST['optionmw'];
$optionmw = $_POST['optionmw'];
if($optionmw!= 0){
    $optionmw = $_POST['optionmw'];
    $total_value+= $optionmw;
}
else
{
    $optionmw = 0;
}

$steps = $_POST['steps'];
$total_value+= $steps * 0.01;
//$stepsimage = $_POST['stepsimage'];
// steps image
$is_uploadingseven = $_FILES["stepscount"]["error"];
$uploadPathseven = "steps-count/";

$can_passseven = $is_uploadingseven == 0 ? true : false;
if($can_passseven){
  $fileName = basename($_FILES["stepscount"]["name"]);
    $imageUploadPath = $uploadPathseven . $fileName;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
    // Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif');
    $imageTemp = $_FILES["stepscount"]["tmp_name"]; 
    $imageSize = $_FILES["stepscount"]["size"];
    $dststepscount = compressImage($imageTemp, $imageUploadPath, 15);
    $compressedImageSizetwo = filesize($dststepscount);
    // $total_value+ = 10;
}
else{
  $dststepscount = 0;
}


// database insert SQL code
$sql = "INSERT INTO user (Id, email, name, today_date, fibrerich_food, porteinrich_food, watercontent_food, seasonal_fruits, water_litres, morning_evening_sunlight, activity_name, activity_points, activity_photos, offscreen_time, metal_wellbeing, steps_count, stepscount_photo, total) VALUES('0', '$email', '$name', '$data', '$dstfibrerich', '$dstporteinrich', '$dstwatercontentfood', '$dstseasonalfruits', '$optionlit', '$dstmoreve', '$activityname', '$activitypoints', '$dstphotoactivity', '$optionoff', '$optionmw', '$steps', '$dststepscount', $total_value)";


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