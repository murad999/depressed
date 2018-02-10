<?php 
include ("includes/header.php");
include_once ("libs/config.php");
include_once ("libs/Database.php");
$db = new Database();
if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mass = $_POST['mass'];
    
    

    

    //echo $fname. $age. $gender;exit;
    if($name == '' && $email =='' && $mass =='') {
        $setmas= "<button class='btn btn-danger btn-block'>" . "Please fill all the fields" . "</button>";
    }else{
        //print_r($_POST);exit();
    $query = "INSERT INTO askques (name,email,msg) VALUES ('$name','$email','$mass')";
        $insert = $db->insert($query);
        
        if($insert){
           $_SESSION['massg']="Your massage Submited"; 
           
        }
        header('location:contact.php');
    }

}
?>

<div class="col-sm-8 blog-main">
	<div class="blog-header">
        <h3 class="">Contact Us</h3>
        <p><strong>Author : </strong>Md. Jobaer Hossain</p>
         <p><strong>Phone : </strong>0129348576</p>   
           <p><strong>Email : </strong>email@gmail.com</p> 
        
    </div>
    <div class="col-sm-offset-2 col-sm-8 blog-main">
        <p><?php if(isset($_SESSION['massg'])){echo $_SESSION['massg'];}?></p>
        <h4><strong>If any query..you ask me...</strong></h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" required class="form-control" id="title" placeholder="Add question....">
                <label for="title">Email</label>
                <input type="email" name="email" required class="form-control" id="title" placeholder="Add question....">
                <label for="title">Massage</label>
                <textarea style="font-size: 18px" name="mass" required class="form-control" id="title" rows="5" placeholder="Add question...."></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            
        </form>

    </div>
</div>



<?php 
//include ("includes/sidebar.php");
include ("includes/footer.php");
?>