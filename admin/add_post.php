<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 5/5/2017
 * Time: 3:24 PM
 */
//include header file
include ("includes/header.php");

//select all categories
// $query = "SELECT * FROM categories";
// $cate = $db->select($query);


//form action inserting process
if(isset($_POST['submit'])){
    $title = $_POST['question'];
    // $cats = $_POST['cats'];
    // $content= $_POST['content'];
    // $author = $_POST['author'];
    // $tags = $_POST['tags'];
    //inserting image
    // $image = $_FILES['image']['name'];
    // $image_tmp = $_FILES['image']['tmp_name'];
    //echo $image_tmp;
    if($title == '') {
        echo "<p class='alert alert-warning text-center'>" . "Please fill all the fields" . "</p>";
    }else{
        //print_r($_POST);exit();
        //move_uploaded_file($image_tmp,"../assets/images/$image");
        $query = "INSERT INTO questions (question) VALUES ('$title')";
        $insert = $db->insert($query);
    }

}
//$query="INSERT INTO  posts (id) VALUES ()";


?>
    <div class="blog-header text-center">
        <h1 class="blog-title">Insert a Post</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>
               <?php 

                if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                    echo "<div class='alert alert-warning text-center'>" . $_GET['mag']."</div>";
                }
            ?>
    <div class="col-sm-offset-2 col-sm-8 blog-main">
        <form action="add_post.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="question" class="form-control" id="title" placeholder="Add question....">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>

    </div>

<?php
include ("includes/footer.php");
?>