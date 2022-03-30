<!DOCTYPE html>
<html>
<head>
<title>KyaReFitting aa</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/multi-form.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<!-- <script src="js/jquery-3-4-1.js"></script>
<script src="js/jquery-validate-min.js"></script> -->
<script type="text/javascript" src="js/multi-form.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$("#date").on('change', function() {
  var name = $('select#name option:selected').val(); //name
  var todaydate = $(this).val();  //date
	
     $.ajax({
            url: 'registerajax.php',
            type: 'post',
            data: {username: name, date: todaydate},
            success: function(response){
                if (response == 200) {
                	$("#uname_responses").html("<span style='color: green;'> </span>");
                	$('.next').prop('disabled', false);
                }else{
                	$('.next').prop('disabled', true);
                	$('#uname_response').html(response);
                }
             }
         });

});

$("#name").on('change', function() {
  
  var name = this.value; //name
  
  var todaydate = $("#date").val(); //date
  
	
     $.ajax({
            url: 'registerajax.php',
            type: 'post',
            data: {username: name, date: todaydate},
            success: function(response){

			if (response == 200) {
                	$("#uname_response").html("<span style='color: green;'> </span>");
                	$('.next').prop('disabled', false);
                }else{
                	$('.next').prop('disabled', true);
                	$('#uname_response').html(response);
                }

             }
         });

});
// $("#fibrerich").on('change',(function(e) {
// 		var demoimage = e.preventDefault();
// 		console.log(demoimage);
// 		$.ajax({
//         	url: "upload.php",
// 			type: "POST",
// 			data:  new FormData(this),
// 			beforeSend: function(){$("#body-overlay").show();},
// 			contentType: false,
//     	    processData:false,
// 			success: function(data)
// 		    {
// 			$("#targetLayer").html(data);
// 			$("#targetLayer").css('opacity','1');
// 			setInterval(function() {$("#body-overlay").hide(); },500);
// 			},
// 		  	error: function() 
// 	    	{
// 	    	} 	        
// 	   });
// 	}));

$("#fibrerich").change(function () {
	var len = this.files.length;
	var filelist = [];
	for (var i = 0; i < len; i++) {
		var filename = this.files[i];
		filelist.push(filename.name);
	}
	console.log(filelist);

			$.ajax({
            url: 'ajaximage.php',
            type: 'post',
            data: {imagedemo: filelist},
            success: function(response){

			

             }
         });

                    
                });

// $("#fibrerich").change(function () {
// 	var demoimage = e.preventDefault();
// 		console.log(demoimage);
//         if (this.files && this.files[0]) {
//             var reader = new FileReader();
//             console.log(reader);
//             reader.onload = function (e) {
//                 $('#imgshow').attr('src', e.target.result);
//             }
//             reader.readAsDataURL(this.files[0]);
//         }
//     });

// $("#fibrerich").on('change', function() {
// 	console.log('for full image url ' + $('#fibrerich').prop('src') );
//   console.log('for relative image url ' + $('#fibrerich').attr('src'));
// });



var val	=	{
			    // Specify validation rules
			    rules: {
			    	name: "required",
					email: {
					required: true,
					email: true
					},
					date: "required",
					steps: "required",
					steps:{
						required:true,
						digits:true,
						min: 251
					}
			  
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

<form id="myForm" action="register-db.php" method="post" enctype="multipart/form-data"> 

<!-- One "tab" for each step in the form: -->
<div class="tab">
	<div class="sectionone">
		<h1>KyaReFitting aa</h1>
	</div>
	
	<div class="tab-width "><label>Name <span class="req">*</span></label>
		<select class="dropdown" name="name" id="name">
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
			<option value="Uma Maheswari">Uma Maheswari</option>
			<option value="Yashaswini Balasubramanyam">Yashaswini Balasubramanyam</option>
			<option value="Menaka Raja">Menaka Raja</option>
			<option value="Anunita  Vashni">Anunita ashni</option>
			<option value="Prasanth Anandhan">Prasanth Anandhan</option>
			<option value="Srinandhini Manickam">Srinandhini Manickam</option>
			<option value="Kaliyarasi">Kaliyarasi</option>
			<option value="Ananth Raguram">Ananth Raguram</option>
		</select>
		<div id="uname_response" ></div>
	</div>
	<div class="tab-width"><label>Date <span class="req">*</span> </label>
		<input name="date" id="date" value="<?php echo date('Y-m-d'); ?>" readonly="readonly">
	</div>
</div>

<div class="tab">
	<p class="sectiontwo">Food</p>
	<div class="tab-widthtwo"><label style="width: 150px;">Fibre Rich
		<span class="points">(10 points)</span></label>
		<input name="fibrerich[]" type="file" id="fibrerich" accept="image/x-png,image/gif,image/jpeg" data-type='image' multiple>
	</div>
	<div class="tab-width"><label>Protein rich
		<span class="points">(10 points)</span></label> 
		<input name="porteinrich[]" type="file" id="porteinrich" accept="image/x-png,image/gif,image/jpeg" multiple>
	</div>
	<div class="tab-width"><label>Water Content Food
		<span class="points">(10 points)</span></label>
		<input name="watercontentfood[]" type="file" id="watercontentfood" accept="image/x-png,image/gif,image/jpeg" data-type='image' multiple>
	</div>
	<div class="tab-width"><label>Seasonal Fruits
		<span class="points">(10 points)</span></label>
		<input name="seasonalfruits[]" type="file" id="seasonalfruits" accept="image/x-png,image/gif,image/jpeg" data-type='image' multiple>
	</div>
</div>

<div class="tab">
	<p class="sectiontwo">Water</p>
	<div class="tab-widthtwo"><p>Drinking water for their weight <span class="req">*</span></p>
		<label class="container">1.5 to 2 litres
			<input type="radio" name="watreliter" value="30">
			<span class="checkmark"></span>
		</label>
		<label class="container">2.1 to 5 litres
			<input type="radio" name="watreliter" value="50">
			<span class="checkmark"></span>
		</label>
		 <button type="button" class="button"  onclick="clearSelection('watreliter');">
    Clear Selection
  </button>
	</div>


</div>

<div class="tab">
	<p class="sectiontwo">Activity</p>
	<div class="tab-widthtwo"><label>Sunlight (Morning / Evening)</label>
		<input name="moreve[]" type="file" id="morningevening" accept="image/x-png,image/gif,image/jpeg" data-type='image' multiple>
	</div>
	<div class="tab-width"><label>Activity Name</label>
		<input placeholder="Enter your activity name" name="activityname" value="">
	</div>
	<div class="tab-width"><label>Activity Points</label>
		<p><span class="points">1 cal = 0.3 points. Steps to check your calories, Enter Activity manually on google fit. Check Calories and enter. Furnish Photo</span></p>
		<input placeholder="Enter your activity points" name="activitypoints" id="activitypoints" value="">
	</div>
	<div class="tab-width"><label>Photo of Activity</label>
		<input name="photoactivity[]" type="file" id="photoactivity" accept="image/x-png,image/gif,image/jpeg" data-type='image' multiple>
	</div>
	<div class="tab-width"><p>Off Screen Time (Over and above fitness activity time)</p>
		<label class="container">0.5hours -- 25 points
			<input type="radio" name="offscreentime" value="25">
			<span class="checkmark"></span>
		</label>
		<label class="container">1hour -- 50 points
			<input type="radio" name="offscreentime" value="50">
			<span class="checkmark"></span>
		</label>
		<label class="container">1.5 hours - max -- 70 points
			<input type="radio" name="offscreentime" value="70">
			<span class="checkmark"></span>
		</label>
		<button type="button" class="button"  onclick="clearSelection('offscreentime');">
    Clear Selection
  </button>
	</div>
	<div class="tab-width"><p>Mental Wellbeing</p>
		<label class="container">5min Meditation -- 30 points
			<input type="radio" name="metalwellbeing" value="30">
			<span class="checkmark"></span>
		</label>
		<label class="container">15min Meditation -- 90 points
			<input type="radio" name="metalwellbeing" value="90">
			<span class="checkmark"></span>
		</label>
		<label class="container">30mins Meditation -- 120 points
			<input type="radio" name="metalwellbeing" value="120">
			<span class="checkmark"></span>
		</label>
		<button type="button" class="button"  onclick="clearSelection('metalwellbeing');">
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
		<input name="stepscount[]" type="file" id="stepscount" accept="image/x-png,image/gif,image/jpeg" data-type='image' multiple>
	</div>
</div>


<div class="buttonone">
	<div class="buttontwo">
		<button type="button" class="previous">Back</button>
		<button type="button" class="next">Next</button>
		<button type="submit" name="submit" id="submit" value="Click me to Contact" class="submit" name="reg_user">Submit</button>
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
