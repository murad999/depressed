<?php
// session_start();
// echo $_SESSION['page_1']."<br>";

// if(isset($_POST['hig'])){
// 	$valu=$_POST['hig'];
// 	echo $_SESSION['page_1']+$valu;
// }

?>

<!--<!DOCTYPE html>
<html>
<body>

<form action="" method="post">
<label for="hig">Type your hig</label><br>
  <input type="radio" name="hig" value="1"> M<br>
  <input type="radio" name="hig" value="2"> F<br>
  <input type="radio" name="hig" value="3"> O<br>
	<input type="submit" value="submit">
</form> 

</body>
</html>-->
<?php 
include ("includes/header.php");


?>
		<div class="col-md-8">
			<div class="styleto">
				<h3>Take the Quiz</h3>
				<p>Do you think you might be depressed? Complete this quiz to find out if you’re showing signs of depression.
				Check one answer for each question that best describes you for the past 7 days.</p>
			</div>
		</div>
		<div class="cler">text</div>

        <div class="col-sm-8 blog-main">
          <!--<div class="blog-post">
            <h2 class="blog-post-title"></h2>
            <p class="blog-post-meta"></p>
            <img src="assets/images/" alt="" width="200px" height="200px">
            <p></p>
              <a class="pull-right readmore" href="single_post.php?id=">Read More</a>
          </div> /.blog-post -->
	

			<form action="" method="post">
				<dl>
					<dt>1. I do things slowly.<span class="required">*</span></dt>
					<dd class="spaceing">
						<label for="100a">
							<input id="100a" type="radio" name="val1" value="1"> Not at all
						</label><br>
						<label for="100b">
							<input id="100b" type="radio" name="val1" value="2"> Just a little
						</label><br>
						<label for="100c">
							<input id="100c" type="radio" name="val1" value="3"> Some What
						</label><br>
						<label for="100d">
							<input id="100d" type="radio" name="val1" value="4"> Modarately
						</label>
					</dd>
				</dl>
				<dl>
					<dt>2. I do things slowly.<span class="required">*</span></dt>
					<dd class="spaceing">
						<label for="100e">
							<input id="100e" type="radio" name="val2" value="1"> Not at all
						</label><br>
						<label for="100f">
							<input id="100f" type="radio" name="val2" value="2"> Just a little
						</label><br>
						<label for="100g">
							<input id="100g" type="radio" name="val2" value="3"> Some What
						</label><br>
						<label for="100h">
							<input id="100h" type="radio" name="val2" value="4"> Modarately
						</label>
					</dd>
				</dl>
				<dl>
					<dt>3. I do things slowly.<span class="required">*</span></dt>
					<dd class="spaceing">
						<label for="100i">
							<input id="100i" type="radio" name="val3" value="1"> Not at all
						</label><br>
						<label for="100j">
							<input id="100j" type="radio" name="val3" value="2"> Just a little
						</label><br>
						<label for="100k">
							<input id="100k" type="radio" name="val3" value="3"> Some What
						</label><br>
						<label for="100l">
							<input id="100l" type="radio" name="val3" value="4"> Modarately
						</label>
					</dd>
				</dl>
				<dl>
					<dt>4. I do things slowly.<span class="required">*</span></dt>
					<dd class="spaceing">
						<label for="100m">
							<input id="100m" type="radio" name="val4" value="1"> Not at all
						</label><br>
						<label for="100n">
							<input id="100n" type="radio" name="val4" value="2"> Just a little
						</label><br>
						<label for="100o">
							<input id="100o" type="radio" name="val4" value="3"> Some What
						</label><br>
						<label for="100p">
							<input id="100p" type="radio" name="val4" value="4"> Modarately
						</label>
					</dd>
				</dl>
				<dl>
					<dt>5. I do things slowly.<span class="required">*</span></dt>
					<dd class="spaceing">
						<label for="100m">
							<input id="100m" type="radio" name="val4" value="1"> Not at all
						</label><br>
						<label for="100n">
							<input id="100n" type="radio" name="val4" value="2"> Just a little
						</label><br>
						<label for="100o">
							<input id="100o" type="radio" name="val4" value="3"> Some What
						</label><br>
						<label for="100p">
							<input id="100p" type="radio" name="val4" value="4"> Modarately
						</label>
					</dd>
				</dl>
			 
			<input type="submit" name="submit" value="Submit">
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
