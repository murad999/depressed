<?php
session_start();
include ("includes/header.php");
include_once ("libs/config.php");
include_once ("libs/Database.php");
include_once ("libs/functions.php");
$db = new Database();
$getQuestions= $db->select3('questions');

// if(isset($_SESSION['page_1'])){
//  	 $_SESSION['page_1']; 
//  	 echo $_SESSION['page_1'];echo "<br>";
//  }


 
// if(isset($_POST['submit'])){
// 	//$_SESSION['nettotal']=$_SESSION['page_1']+$_SESSION['total'];
// 	//header('location:result.php');
// 	//echo $_SESSION['total'];
// }

?>
<div class="cler">text</div>

        <div class="col-sm-8 blog-main">
          <!--<div class="blog-post">
            <h2 class="blog-post-title"></h2>
            <p class="blog-post-meta"></p>
            <img src="assets/images/" alt="" width="200px" height="200px">
            <p></p>
              <a class="pull-right readmore" href="single_post.php?id=">Read More</a>
          </div> /.blog-post -->
	

	<form action="action2.php" method="post">				
				<?php 
		$st=5; 
		$j=10;
		//$to=count($getQuestions); echo $to; 
		 //$question = $_SESSION['questions'][$_SESSION['counter']];
    	

			foreach($getQuestions as $show){   

		?>			
		<dl>
			
			<dt> <span class="no"><?php echo " ".$j;?></span> <span class="ques"><?php  echo $show['question']; ?></span><span class="required">*</span></dt>
			<dd class="spaceing">
				<label for="100a">
					<input id="100a"  type="radio" name="<?php echo $show['id']; ?>" value="0" required> Not at all
				</label>
				<label for="100b">
					<input id="100b" type="radio" name="<?php echo $show['id']; ?>" value="0.5" required> Several days
				</label>
				<label for="100c">
					<input id="100c" type="radio" name="<?php echo $show['id']; ?>" value="1" required> More than half of the days
				</label>
				<label for="100d">
					<input id="100d" type="radio" name="<?php echo $show['id']; ?>" value="1.5" required> Every day
				</label>		
			</dd>
			
		</dl>
<?php $j++;  }  ?>
			 
			<input type="submit" name="submit" value="Submit" class="btn btn-success btn-block">
			</form> 

<div class="cler">text</div>


          <!--<nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>-->

        </div><!-- /.blog-main -->



<?php
include ("includes/sidebar.php");
include ("includes/footer.php");

?>
