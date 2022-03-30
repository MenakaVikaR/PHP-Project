<!DOCTYPE html>
<html>
<head>
<title>KyaReFitting aa</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="multi-form.css">
<script src="jquery-3-4-1.js"></script>
<script src="jquery-validate-min.js"></script>
<script type="text/javascript" src="multi-form.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
// $("#fibrerich").change(function(){
// $("#file_error").html("");
// var file_size = $('#fibrerich')[0].files[0].size;
// if(file_size>5000) {
// $("#file_error").html("<p style='color:#FF0000'>Not uploaded. Please upload image less than 5kb.</p>");
// return false;
// }
// return true;
// });


// $("#porteinrich").change(function(){
// $("#file_errortwo").html("");
// var file_sizetwo = $('#porteinrich')[0].files[0].size;
// if(file_sizetwo>5000) {
// $("#file_errortwo").html("<p style='color:#FF0000'>Not uploaded. Please upload image less than 5kb.</p>");
// return false;
// }
// return true;
// });


// $("#watercontentfood").change(function(){
// $("#file_errorthree").html("");
// var file_sizethree = $('#watercontentfood')[0].files[0].size;
// if(file_sizethree>5000) {
// $("#file_errorthree").html("<p style='color:#FF0000'>Not uploaded. Please upload image less than 5kb.</p>");
// return false;
// }
// return true;
// });


// $("#seasonalfruits").change(function(){
// $("#file_errorfour").html("");
// var file_sizefour = $('#seasonalfruits')[0].files[0].size;
// if(file_sizefour>5000) {
// $("#file_errorfour").html("<p style='color:#FF0000'>Not uploaded. Please upload image less than 5kb.</p>");
// return false;
// }
// return true;
// });


// $("#morningevening").change(function(){
// $("#file_errorfive").html("");
// var file_sizefive = $('#morningevening')[0].files[0].size;
// if(file_sizefive>5000) {
// $("#file_errorfive").html("<p style='color:#FF0000'>Not uploaded. Please upload image less than 5kb.</p>");
// return false;
// }
// return true;
// });


// $("#photoactivity").change(function(){
// $("#file_errorsix").html("");
// var file_sizesix = $('#photoactivity')[0].files[0].size;
// if(file_sizesix>5000) {
// $("#file_errorsix").html("<p style='color:#FF0000'>Not uploaded. Please upload image less than 5kb.</p>");
// return false;
// }
// return true;
// });


// $("#stepscount").change(function(){
// $("#file_errorseven").html("");
// var file_sizeseven = $('#stepscount')[0].files[0].size;
// if(file_sizeseven>5000) {
// $("#file_errorseven").html("<p style='color:#FF0000'>Not uploaded. Please upload image less than 5kb.</p>");
// return false;
// }
// return true;
// });


var val	=	{
			    // Specify validation rules
			    rules: {
// 			    	name: "required",
// email: {
// required: true,
// email: true
// },
// data: "required",
// steps: "required",
// steps:{
// 	required:true,
// 	digits:true,
// 	min: 251
// }
			  
			    },
			    // Specify validation error messages
			    messages: {
			    	steps: {
			    		required: 	"Your step count is requied",
			    		digits: "Only numbers are allowed in this field",
			    		min: "Must be a number greater than 250"
			    	}
					
			    }
			}


$("#myForm").multiStepForm(
{
// defaultStep:0,
beforeSubmit : function(form, submit){
console.log("called before submiting the form");
console.log(form);
console.log(submit);
},
validations:val,
}
).navigateTo(0);
});
</script>
</head>
<body>
<style type="text/css">

</style>

<form id="myForm" action="contact.php" method="post" enctype="multipart/form-data"> 

<!-- One "tab" for each step in the form: -->
<div class="tab">
	<div class="sectionone">
		<h1>KyaReFitting aa</h1>
	</div>
	<!-- <div class="tab-width"><label>Email <span class="req">*</span></label>
		<input placeholder="Your email address" name="email" id="email" value="">
	</div> -->
	<div class="tab-width "><label>Name <span class="req">*</span></label>
		<!-- <input placeholder="Enter your name" name="name" id="name" value=""> -->
		<select class="dropdown" name="name">
			<option value="">Choose</option><hr>
			<option value="Madhavan Sankara Subramanian">Madhavan Sankara Subramanian</option>
			<option value="Uma Maheswari">Uma Maheswari</option>
			<option value="Siddharth  Ganapathy">Siddharth  Ganapathy</option>
			<option value="Akshaya Rajan">Akshaya Rajan</option>
			<option value="Manoj Moorthy">Manoj Moorthy</option>
			<option value="Subhalakshmi">Subhalakshmi</option>
			<option value="Sridhar K">Sridhar K</option>
			<option value="Abrar Sultana">Abrar Sultana</option>
			<option value="Karthika S Prem">Karthika S Prem</option>
			<option value="Saravanan k">Saravanan k</option>
			<option value="Dhamodharan  M">Dhamodharan  M</option>
			<option value="Kavinraj Santhi Ilangovan">Kavinraj Santhi Ilangovan</option>
			<option value="Anusha Tennyson">Anusha Tennyson</option>
			<option value="Porchelvan S">Porchelvan S</option>
			<option value="Udaya Arun">Udaya Arun</option>
			<option value="Lalitha Rashmi P">Lalitha Rashmi P</option>
			<option value="Anjali S">Anjali S</option>
			<option value="Hari Prasad B.K">Hari Prasad B.K</option>
			<option value="Yuvaraj Dhanaraju">Yuvaraj Dhanaraju</option>
			<option value="Ashwin S">Ashwin S</option>
			<option value="Uma Maheswari">Uma Maheswaridd</option>
			<option value="Yashaswini Balasubramanyam">Yashaswini Balasubramanyam</option>
			<option value="Menaka Raja">Menaka Raja</option>
			<option value="Anunita  Vashni">Anunita  Vashni</option>
			<option value="Prasanth Anandhan">Prasanth Anandhan</option>
			<option value="Srinandhini Manickam">Srinandhini Manickam</option>
			<option value="Kaliyarasi">Kaliyarasi</option>
			<option value="Ananth Raguram">Ananth Raguram</option>
		</select>
	</div>
	<div class="tab-width"><label>Date <span class="req">*</span> </label>
		<input name="data" id="data" value="" type="date">
	</div>
</div>

<div class="tab">
	<p class="sectiontwo">Food</p>
	<div class="tab-widthtwo"><label style="width: 150px;">Fibre Rich
		<span class="points">(10 points)</span></label>
		<input name="fibrerich" type="file" id="fibrerich">
		<span id="file_error"></span>
	</div>
	<div class="tab-width"><label>Protein rich
		<span class="points">(10 points)</span></label> 
		<input name="porteinrich" type="file" id="porteinrich">
		<span id="file_errortwo"></span>
	</div>
	<div class="tab-width"><label>Water Content Food
		<span class="points">(10 points)</span></label>
		<input name="watercontentfood" type="file" id="watercontentfood">
		<span id="file_errorthree"></span>
	</div>
	<div class="tab-width"><label>Seasonal Fruits
		<span class="points">(10 points)</span></label>
		<input name="seasonalfruits" type="file" id="seasonalfruits">
		<span id="file_errorfour"></span>
	</div>
</div>

<div class="tab">
	<p class="sectiontwo">Water</p>
	<div class="tab-widthtwo"><p>Drinking water for their weight <span class="req">*</span></p>
		<label class="container">1.5 to 2 litres
			<input type="radio" name="optionlit" value="30 points">
			<span class="checkmark"></span>
		</label>
		<label class="container">2.1 to 5 litres
			<input type="radio" name="optionlit" value="50 points">
			<span class="checkmark"></span>
		</label>
		 <button type="button" class="button"  onclick="clearSelection('optionlit');">
    Clear Selection
  </button>
	</div>

<!-- </div> -->
</div>

<div class="tab">
	<p class="sectiontwo">Activity</p>
	<div class="tab-widthtwo"><label>Sunlight (Morning / Evening)</label>
		<input name="moreve" type="file" id="morningevening">
		<span id="file_errorfive"></span>
	</div>
	<div class="tab-width"><label>Activity Name</label>
		<input placeholder="Enter your activity name" name="activityname" id="activityname" value="">
	</div>
	<div class="tab-width"><label>Activity Points</label>
		<p><span class="points">1 cal = 0.3 points. Steps to check your calories, Enter Activity manually on google fit. Check Calories and enter. Furnish Photo</span></p>
		<input placeholder="Enter your activity points" name="activitypoints" id="activitypoints" value="">
	</div>
	<div class="tab-width"><label>Photo of Activity
		<span class="points">(10 points)</span></label>
		<input name="photoactivity" type="file" id="photoactivity">
		<span id="file_errorsix"></span>
	</div>
	<div class="tab-width"><p>Off Screen Time (Over and above fitness activity time)</p>
		<label class="container">0.5hours -- 25 points
			<input type="radio" name="optionoff" id="optionoff" value="25 points">
			<span class="checkmark"></span>
		</label>
		<label class="container">1hour -- 50 points
			<input type="radio" name="optionoff" id="optionoff" value="50 points">
			<span class="checkmark"></span>
		</label>
		<label class="container">1.5 hours - max -- 70 points
			<input type="radio" name="optionoff" id="optionoff" value="70 points">
			<span class="checkmark"></span>
		</label>
		<button type="button" class="button"  onclick="clearSelection('optionoff');">
    Clear Selection
  </button>
	</div>
	<div class="tab-width"><p>Mental Wellbeing</p>
		<label class="container">5min Meditation -- 30 points
			<input type="radio" name="optionmw" id="optionmw" value="30 points">
			<span class="checkmark"></span>
		</label>
		<label class="container">15min Meditation -- 90 points
			<input type="radio" name="optionmw" id="optionmw" value="90 points">
			<span class="checkmark"></span>
		</label>
		<label class="container">30mins Meditation -- 120 points
			<input type="radio" name="optionmw" id="optionmw" value="120 points">
			<span class="checkmark"></span>
		</label>
		<button type="button" class="button"  onclick="clearSelection('optionmw');">
    Clear Selection
  </button>
	</div>
</div>

<div class="tab">
	<p class="sectiontwo">Steps</p>
	<div class="tab-widthtwo"><label>Steps <span class="req">*</span>
		<span class="points"> (1step = 0.01 points) </span></label>
		<input placeholder="Enter your step points" name="steps" type="text">
	</div>
	<div class="tab-width"><label>Steps - Image</label>
		<input name="stepscount" type="file" id="stepscount">
		<span id="file_errorseven"></span>
	</div>
</div>
<!-- </div> -->

<div class="buttonone">
	<div class="buttontwo">
		<button type="button" class="previous">Back</button>
		<button type="button" class="next">Next</button>
		<button type="submit" name="Submit" id="Submit" value="Click me to Contact" class="submit" name="reg_user">Submit</button>
	</div>
</div>
<!-- Circles which indicates the steps of the form: -->
<div class="stepstyle">
	<span class="step">1</span>
	<span class="step">2</span>
	<span class="step">3</span>
	<span class="step">4</span>
	<span class="step">5</span>
</div>

</form>

</body>
</html>
