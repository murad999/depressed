<?php
session_start();
include ("includes/header.php");
include_once ("libs/config.php");
include_once ("libs/Database.php");
include_once ("libs/functions.php");
$db = new Database();
  // $_SESSION['questions'] = $question;
  //   $_SESSION['counter'] = 0;
$getQuestions= $db->select2('questions');



?>

<div class="col-md-12">
			
		    <div class="blog-header text-center">
		        <h3 class="">Depression Screening Test</h3><small></small>
		        <p class="">Use this brief 18-question online automated quiz to help you determine
		if you may need to see a mental health professional for diagnosis
		and treatment of depression, or for tracking your depression and mood on a regular basis.</p>
		    </div>
		    <hr>
		    <p><strong>Instructions:</strong> You can print this scale out or take it online, using it on a weekly basis to track your moods. It also might be used to show your doctor how your symptoms have changed from one visit to the next. Changes of <strong>five or more points</strong> are significant. This scale is not designed to make a diagnosis of depression or take the place of a professional diagnosis. If you suspect that you are depressed, please consult with a mental health professional as soon as possible.
Answer each of the 18 items below about how you have felt and behaved <strong>during the past week</strong>. Be honest for the most accurate result.</p>
		</div>
        
<div class="col-sm-8 blog-main">
  
	<form action="action.php" method="post">	
		
		<?php 
 
		$j=1;
		//$to=count($getQuestions); echo $to; 
		 //$question = $_SESSION['questions'][$_SESSION['counter']];
    	

			foreach($getQuestions as $show){   

		?>			
		<dl>
			
			<dt> <span class="no"><?php echo " ".$j;?></span> <span class="ques"><?php  echo $show['question']; ?></span><span class="required">*</span></dt>
			<dd class="spaceing">
				<label for="a">
					<input id="a"  type="radio" name="<?php echo $show['id']; ?>" value="0" required> Not at all
				</label>
				<label for="b">
					<input id="b" type="radio" name="<?php echo $show['id']; ?>" value="0.5" required> Several days
				</label>
				<label for="c">
					<input id="c" type="radio" name="<?php echo $show['id']; ?>" value="1" required> More than half of the days
				</label>
				<label for="d">
					<input id="d" type="radio" name="<?php echo $show['id']; ?>" value="1.5" required> Every day
				</label>	
			</dd>
			
		</dl>
<?php $j++;  }  ?>
		<input type="submit" name="submit" value="  Save and Continue on to Part 2 of the Quiz" class="btn btn-info btn-block">
	</form> 

	<div class="cler">text</div>



        </div><!-- /.blog-main -->

<?php 
include ("includes/sidebar.php");
include ("includes/footer.php"); 

?>
