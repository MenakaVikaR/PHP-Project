<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','kyarefitting_aa_form');
// echo $con;
// get the post records
$total_value = 0;
// name
$name = $_POST['name'];
// date
$date = $_POST['date'];

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

//fiberrich food

$fibrerich=' ';
$countfibrerich = 0;
foreach ($_FILES['fibrerich']['tmp_name'] as $key => $value) {
    $uploadPath = "fibrerich-food/"; 
    $filename=$_FILES['fibrerich']['name'][$key];
    if($filename != null){
        $countfibrerich = 1;
    }
    $fibrerich .= $filename;
    $filename_tmp=$_FILES['fibrerich']['tmp_name'][$key];
    $imageUploadPath = $uploadPath . $filename; 
    $dstfibrerich = compressImage($filename_tmp, $imageUploadPath, 15);
}
if($countfibrerich == 0){
    $fibrerich = 0;
}
else
{
    $total_value+= 10;
}


// proteinrich food

$porteinrich=' ';
$countporteinrich = 0;
    foreach ($_FILES['porteinrich']['tmp_name'] as $key => $value) {
        $uploadPath = "porteinrich-food/"; 
        $filename=$_FILES['porteinrich']['name'][$key];
        if($filename != null){
        $countporteinrich = 1;
        }
        $porteinrich .= $filename;
        $filename_tmp=$_FILES['porteinrich']['tmp_name'][$key];
        $imageUploadPath = $uploadPath . $filename; 
        $dstporteinrich = compressImage($filename_tmp, $imageUploadPath, 15);
    }
if($countporteinrich == 0){
    $porteinrich = 0;
}
else
{
    $total_value+= 10;
}


// watercontent food
$watercontentfood=' ';
$countwatercontentfood = 0;
    foreach ($_FILES['watercontentfood']['tmp_name'] as $key => $value) {
        $uploadPath = "watercontent-food/"; 
        $filename=$_FILES['watercontentfood']['name'][$key];
        if($filename != null){
        $countwatercontentfood = 1;
        }
        $watercontentfood .= $filename;
        $filename_tmp=$_FILES['watercontentfood']['tmp_name'][$key];
        $imageUploadPath = $uploadPath . $filename; 
        $dstwatercontentfood = compressImage($filename_tmp, $imageUploadPath, 15);
    }
if ($countwatercontentfood == 0) {
   $watercontentfood = 0;
}else{
    $total_value+= 10;
}


//seasonal fruits

$countseasonalfruits = 0;
$seasonalfruits=' ';
    foreach ($_FILES['seasonalfruits']['tmp_name'] as $key => $value) {
        $uploadPath = "seasonalfruits-food/"; 
        $filename=$_FILES['seasonalfruits']['name'][$key];
        if($filename != null){
        $countseasonalfruits = 1;
        }
        $seasonalfruits .= $filename;
        $filename_tmp=$_FILES['seasonalfruits']['tmp_name'][$key];
        $imageUploadPath = $uploadPath . $filename; 
        $dstseasonalfruits = compressImage($filename_tmp, $imageUploadPath, 15);
    }
if ($countseasonalfruits == 0) {
   $seasonalfruits = 0;
}else{
    $total_value+= 10;
}   


// water liter
$watreliter = $_POST['watreliter'];
if($watreliter!= 0){
    $watreliter = $_POST['watreliter'];
    $total_value+= $watreliter;
}
else
{
    $watreliter = 0;
}

// Morning and Evening

$countmoreve = 0;
$moreve=' ';
    foreach ($_FILES['moreve']['tmp_name'] as $key => $value) {
        $uploadPath = "morning-evening/"; 
        $filename=$_FILES['moreve']['name'][$key];
        if($filename != null){
        $countmoreve = 1;
        }
        $moreve .= $filename;
        $filename_tmp=$_FILES['moreve']['tmp_name'][$key];
        $imageUploadPath = $uploadPath . $filename; 
        $dstmoreve = compressImage($filename_tmp, $imageUploadPath, 15);
    }
if ($countmoreve == 0) {
   $moreve = 0;
}else{
    $total_value+= 10;
} 


// Activity Name

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


// $countphotoactivity = 0;
// $photoactivity=' ';
//     foreach ($_FILES['photoactivity']['tmp_name'] as $key => $value) {
//         $uploadPath = "activity-photo/"; 
//         $filename=$_FILES['photoactivity']['name'][$key];
//         if($filename != null){
//         $countphotoactivity = 1;
//         }
//         $photoactivity .= $filename;
//         $filename_tmp=$_FILES['photoactivity']['tmp_name'][$key];
//         $imageUploadPath = $uploadPath . $filename; 
//         $dstphotoactivity = compressImage($filename_tmp, $imageUploadPath, 15);
//     }
// if ($countphotoactivity == 0) {
//    $photoactivity = 0;
// }else{
//     $total_value+= 10;
// }


// $countmoreve = 0;
// $moreve=' ';
//     foreach ($_FILES['moreve']['tmp_name'] as $key => $value) {
//         $uploadPath = "morning-evening/"; 
//         $filename=$_FILES['moreve']['name'][$key];
//         if($filename != null){
//         $countmoreve = 1;
//         }
//         $moreve .= $filename;
//         $filename_tmp=$_FILES['moreve']['tmp_name'][$key];
//         $imageUploadPath = $uploadPath . $filename; 
//         $dstmoreve = compressImage($filename_tmp, $imageUploadPath, 15);
//     }
// if ($countmoreve == 0) {
//    $moreve = 0;
// }else{
//     $total_value+= 10;
// }

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

// offscreen time
$offscreentime = $_POST['offscreentime'];
if($offscreentime!= 0){
    $offscreentime = $_POST['offscreentime'];
    $total_value+= $offscreentime; 
}
else
{
    $offscreentime = 0;
}

// metalwellbeing
$metalwellbeing = $_POST['metalwellbeing'];
$metalwellbeing = $_POST['metalwellbeing'];
if($metalwellbeing!= 0){
    $metalwellbeing = $_POST['metalwellbeing'];
    $total_value+= $metalwellbeing;
}
else
{
    $metalwellbeing = 0;
}

$steps = $_POST['steps'];
$total_value+= $steps * 0.01;

// steps image

$stepscount=' ';
    foreach ($_FILES['stepscount']['tmp_name'] as $key => $value) {
        $uploadPath = "activity-photo/"; 
        $filename=$_FILES['stepscount']['name'][$key];
        $stepscount .= $filename;
        $filename_tmp=$_FILES['stepscount']['tmp_name'][$key];
        $imageUploadPath = $uploadPath . $filename; 
        $dststepscount = compressImage($filename_tmp, $imageUploadPath, 15);
    }

    
// $is_uploadingseven = $_FILES["stepscount"]["error"];
// $uploadPathseven = "steps-count/";

// $can_passseven = $is_uploadingseven == 0 ? true : false;
// if($can_passseven){
//   $fileName = basename($_FILES["stepscount"]["name"]);
//     $imageUploadPath = $uploadPathseven . $fileName;
//     $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
//     // Allow certain file formats 
//     $allowTypes = array('jpg','png','jpeg','gif');
//     $imageTemp = $_FILES["stepscount"]["tmp_name"]; 
//     $imageSize = $_FILES["stepscount"]["size"];
//     $dststepscount = compressImage($imageTemp, $imageUploadPath, 15);
//     $compressedImageSizetwo = filesize($dststepscount);
//     // $total_value+ = 10;
// }
// else{
//   $dststepscount = 0;
// }


// database insert SQL code
$sql = "INSERT INTO user (Id, name, today_date, fibrerich_food, porteinrich_food, watercontent_food, seasonal_fruits, water_litres, morning_evening_sunlight, activity_name, activity_points, activity_photos, offscreen_time, metal_wellbeing, steps_count, stepscount_photo, total) VALUES('0', '$name', '$date', '$fibrerich', '$porteinrich', '$watercontentfood', '$seasonalfruits', '$watreliter', '$moreve', '$activityname', '$activitypoints', '$photoactivity', '$offscreentime', '$metalwellbeing', '$steps', '$stepscount', $total_value)";


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
  echo "Register Unsuccessfull";
  
}
?>