<?php
session_start();
include ("includes/header.php");
include_once ("libs/config.php");
include_once ("libs/Database.php");
include_once ("libs/functions.php");

$db = new Database();

// $query = "SELECT * FROM questions";
// $cate = $db->select($query);

//print_r($cate);


if(isset($_POST['submit'])){
	$gender="";
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    if(array_key_exists('gender', $_POST)) {
    	$gender = $_POST['gender'];
	}
    

    

    //echo $fname. $age. $gender;exit;
    if($fname == '' && $age =='' && $gender =='') {
        $setmas= "<button class='btn btn-danger btn-block'>" . "Please fill all the fields" . "</button>";
    }else{
        //print_r($_POST);exit();
    $query = "INSERT INTO users (fname,age,gender) VALUES ('$fname','$age','$gender')";
        $insert = $db->insert($query);
        header('location:question.php');
    }

}

?>
<div class="col-md-12">
			
		    <div class="blog-header text-center">
		        <h4 class="blog-title">Depression Screening Test</h4><small></small>
		        <p class="lead blog-description">Use this brief 18-question online automated quiz to help you determine
		if you may need to see a mental health professional for diagnosis
		and treatment of depression, or for tracking your depression and mood on a regular basis.</p>
		<img class="text-center" src="assets/images/bg.jpeg">
		    </div>
		   <hr>
		</div>
		
		<div class="col-sm-8 blog-main page-idx">

			<p>Depression (major depressive disorder or clinical depression) is a common but serious mood disorder. It causes severe symptoms that affect how you feel, think, and handle daily activities, such as sleeping, eating, or working. To be diagnosed with depression, the symptoms must be present for at least two weeks.

Some forms of depression are slightly different, or they may develop under unique circumstances, such as:</p>
			<ul>
				<li><b> Persistent depressive disorder</b> </li>
				<li><b> Perinatal depression</b></li>
				<li><b> Psychotic depression</b></li>
				<li><b> Seasonal affective disorder</b></li>
				<li><b> Bipolar disorder</b></li>
			</ul>
			<p>According to the NIMH Major depression is one of the most common mental disorders affecting more than 15 million adults in the world.  Take this self-assessment test to see if you may be someone who could benefit from the treatment and support of a mental health professional.</p>
			<p style="background-color: #efefef;color:#b35454">Are You depressed ? then check your depression level...</p>
			<?php if(isset($setmas)){ echo $setmas;} ?>
		<form action="" method="post">
		  <div class="form-group">
		    <label for="name">Full Name <span class="required">*</span></label>
		    <input type="text" class="form-control" id="name" required name="fname" placeholder="Enter your full name">
		  </div>
		  <div class="form-group">
		    <label for="age">Age <span class="required">*</span></label>
		    <input type="number" class="form-control"  required id="age" name="age" placeholder="Enter your age">
		  </div>
		  <div class="form-group">
		  	<label for="gender">Your gender <span class="required">*</span></label>
		      <input type="radio" name="gender" value="male" required>Male	
		      <input type="radio" name="gender" value="female" required>Female
		      <input type="radio" name="gender" value="others" required>Others
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>




<?php
include ("includes/sidebar.php");
include ("includes/footer.php");

?>