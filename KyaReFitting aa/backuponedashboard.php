<!-- <?php 
//if(isset($_POST['datastring'])) {
 $demo = $_POST['datastring'];
 echo $demo;
//}
$demoone = "stringone";
echo $demoone;
?> --> 

<!DOCTYPE html>
<html>
<head>
	<!-- <title>Dashboard KyaReFitting aa</title> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/viewdatabase.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
	<script type="text/javascript">
		$(document).ready(function(){
			 //$( "#save" ).click();
			 // alert("welcome");
// $("#save").on("click", function (e) {
			//$("#load").load("dashboard-db.php").fadeIn("slow");
    // e.preventDefault();
setInterval(function(){
			$("#load").load("dashboard-db.php").fadeIn("slow");
		}, 1000);
  
// });
});



	</script>
</head>
<body>
	<button id="save">click me</button>
<div id="load"></div>
</body>
</html>