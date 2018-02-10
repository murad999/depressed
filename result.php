<?php 
include ("includes/header.php");
session_start();
if(isset($_SESSION['nettotal'])){
	if($_SESSION['nettotal'] <= 7){
		$first_mass= "You Do Not Have Any Symptoms Of Depression"."<br>";
		$second_msg="<p>" . "Based on your answers to the quiz, you have no clinically significant symptoms of low mood or depression. This means that if you are going through a challenging time in your life, you are handling it very well." ."</p>";
		$third_msg="<p>" . "It is important that we continue to look after ourselves at all times. The following things help us maintain our physical and mental wellbeing:" ."</p>";
		$last_msg="1.Regularly doing things we enjoy and that are good for us, such as hobbies. We do best when we have things to look forward to". "<br>" ."
2.Staying in contact with good family and friends". "<br>" ."
3.A healthy and balanced diet". "<br>" ."
4.Regular exercise". "<br>" ."
5.The right amount of sleep. We need about 6 to 8 hours of sleep every night to function at our best.";
		//$war_mass= "<p>"."<a href='ans1.php'>". "view details.." ."</a>"."</p>";
	}elseif($_SESSION['nettotal'] <= 14){
		$first_mass= "You Have Mild Symptoms Of Depression"."<br>";
		$second_msg="<p>" . "There are many reasons why people experience low mood or mild symptoms of depression. These may include:". "<br>" ."". "<br>" ."

1.going through a difficult time or a change in life that is naturally hard to adjust to, like a loss". "<br>" ."". "<br>" ."
2.dealing with illness or health difficulties". "<br>" ."". "<br>" ."
3.experiencing relationship problems, financial problems or other challenges.". "<br>" ."

Sometimes our mood is lower than usual, for no obvious reason." ."</p>";
		$third_msg="<p>" . "Symptoms of low mood should be a trigger for us to do something helpful or change something in our life. You can take active steps to stop yourself from feeling worse and lift your mood. Try the following to help improve your mood:" ."</p>";
		$last_msg="1.Do one thing each day that you enjoy. This may be a social activity such as a coffee with a friend, or a hobby such as gardening, reading or going for a walk. We do best when we have things to look forward to.". "<br>" ."
2.Talk to family or friends to get sensible advice about how they cope with low mood. Good family and friends can support you during challenging times and can share experiences that might help.". "<br>" ."
3.Keep your thoughts and expectations realistic. Our view of the world and particularly of ourselves can become negative and critical when we are feeling down – this can make us feel even worse. Try to treat yourself the way you would treat a good friend.". "<br>" ."
4.Stay as physically healthy and active as you can. A healthy and balanced diet, and regular exercise is essential for our physical and mental wellbeing.". "<br>" ."
5.Get the right amount of sleep. We need about 6 to 8 hours of sleep every night to function at our best. Not getting enough sleep can have many negative effects on our health. Oversleeping often can also be unhealthy for us.";
	}elseif($_SESSION['nettotal'] <= 21){
		$first_mass= "You Have Moderately Severe Symptoms of Depression"."<br>";
		$second_msg="<p>" . "Moderately severe symptoms of depression often occur when we are dealing with a difficult situation or a traumatic event. If you are dealing with a difficult situation, it is normal to experience such symptoms for short periods of time. In these cases, symptoms often naturally resolve with time. However, people with moderately severe symptoms are at high risk of having depression and some may need professional support.". "<br>" ."<br>"."We strongly recommend that you:". "<br>" ."". "<br>" ."

1.Seek assessment and treatment from a health professional (like a psychologist or a psychiatrist) as soon as you can.". "<br>" ."". "<br>" ."
2.Start treatment as soon as possible. There are many treatments that are proven to work for depression, including psychological therapies and antidepressant medication.". "<br>" ."". "<br>" ."
" ."</p>";
		$third_msg="<p>" . "Alongside seeking professional support, other things that can help people with moderately severe symptoms of depression include:" ."</p>";
		$last_msg="1.Talk to family or friends to get sensible advice about how they cope with low mood. Good family and friends can support you during challenging times and can share experiences that might help.". "<br>" ."
2.Stay in regular contact with good people. Staying engaged with our support network helps us avoid becoming isolated and feeling lonely.". "<br>" ."
3.Avoid alcohol and drugs. These may seem helpful in the short term, but often cause other problems.". "<br>" ."
4.Do things that you enjoy and that are good for you each day. This may be a social activity such as a coffee with a friend or a hobby such as gardening, reading or going for a walk. This helps with mood, perspective, and keeps up healthy habits. We function best when we have things to look forward to.". "<br>" ."
5.Keep your thoughts and expectations realistic. Our view of the world and particularly of ourselves can become negative and critical when we are feeling down – this can make us feel even worse. Try to treat yourself the way you would treat a good friend.". "<br>" ."
6.Stay as physically healthy and active as you can. A healthy and balanced diet, and regular exercise is essential for our physical and mental wellbeing.". "<br>" ."
7.Get the right amount of sleep. We need about 6 to 8 hours of sleep every night to function at our best. Not getting enough sleep can have many negative effects on our health. Oversleeping often can also be unhealthy for us.";
	}elseif($_SESSION['nettotal'] <= 27){
		$first_mass= "You Have Severe Danger Symptoms Of Depression"."<br>";
		$second_msg="<p>" . "Severe symptoms of depression can occur because of stressful events, like a loss, or a traumatic event. In these cases, symptoms often naturally resolve with time. However, some people with severe symptoms need professional support.". "<br>" ."<br>"."The good news is that people can and do recover from depression. We strongly recommend that you:". "<br>" ."". "<br>" ."
". "<br>" ."
" ."</p>";
		$third_msg="<p>" . "Alongside seeking professional support, other things that can help people with moderately severe symptoms of depression include:" ."</p>";
		$last_msg="1.Talk to family or friends to get sensible advice about how they cope with low mood. Good family and friends can support you during challenging times and can share experiences that might help.". "<br>" ."
2.Stay in regular contact with good people. Staying engaged with our support network helps us avoid becoming isolated and feeling lonely.". "<br>" ."
3.Avoid alcohol and drugs. These may seem helpful in the short term, but often cause other problems.". "<br>" ."
4.Do things that you enjoy and that are good for you each day. This may be a social activity such as a coffee with a friend or a hobby such as gardening, reading or going for a walk. This helps with mood, perspective, and keeps up healthy habits. We function best when we have things to look forward to.". "<br>" ."
5.Keep your thoughts and expectations realistic. Our view of the world and particularly of ourselves can become negative and critical when we are feeling down – this can make us feel even worse. Try to treat yourself the way you would treat a good friend.". "<br>" ."
6.Stay as physically healthy and active as you can. A healthy and balanced diet, and regular exercise is essential for our physical and mental wellbeing.". "<br>" ."
7.Get the right amount of sleep. We need about 6 to 8 hours of sleep every night to function at our best. Not getting enough sleep can have many negative effects on our health. Oversleeping often can also be unhealthy for us.";
	}else{
		$first_mass= "Severe"."<br>";
		$war_mass= "Warrants active treatment with psychotherapy, medications, or combination";
	}
}
session_destroy();

?>
 <div class="col-md-12">
 	<div class="result">
 		<!--Panel-->
			<div class="card st" style="width: 94rem;">
			    <div class="card-header success-color white-text">
			        <h3 class="text-center">Result..</h3>
			    </div>
			    <div class="card-body bst">
			        <h2 class="card-title"><?php if(isset($first_mass)){ echo $first_mass;}?></h2>
			        
			        <h4><?php if(isset($second_msg)){ echo $second_msg;}?></h4>
			        <h4><?php if(isset($third_msg)){ echo $third_msg;}?></h4>
			        <ul>
			        	<?php if(isset($last_msg)){ echo $last_msg;}?>
			        </ul>
			        <!-- <a class="btn btn-success">Go somewhere</a> -->
			    </div>
			    <div class="card-footer text-muted success-color white-text text-center">
			       <a href="question.php" class="btn btn-info"><p class="mb-0">Back to one more Test</p></a> 
			    </div>
			</div>
<!--/.Panel-->
 	</div>
 	
 </div>                         

<?php 
//include ("includes/sidebar.php");
include ("includes/footer.php");
?>