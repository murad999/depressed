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
    $name= $_POST['name'];
    $title = $_POST['title'];
    $dep = $_POST['dep'];
    $uni = $_POST['uni'];
    // $cats = $_POST['cats'];
    // $content= $_POST['content'];
    // $author = $_POST['author'];
    // $tags = $_POST['tags'];
    //inserting image
     $image = $_FILES['image']['name'];
     $image_tmp = $_FILES['image']['tmp_name'];
    //echo $image_tmp;
    if($name == '' || $title == '' || $dep == '' ||$uni == '') {
        echo "<p class='alert alert-warning text-center'>" . "Please fill all the fields" . "</p>";
    }else{
        //print_r($_POST);exit();
        move_uploaded_file($image_tmp,"../assets/images/$image");
        $query = "INSERT INTO abouts (name,title,dep,uni,image) VALUES ('$name','$title','$dep','$uni','$image')";
        $insert = $db->insert($query);
        header('location:about.php');
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
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Add question....">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Add question....">
            </div>
            <div class="form-group">
                <label for="title">Department</label>
                <input type="text" name="dep" class="form-control" id="title" placeholder="Add question....">
            </div>
            <div class="form-group">
                <label for="title">University</label>
                <input type="text" name="uni" class="form-control" id="title" placeholder="Add question....">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Select Image</label>
                <input type="file" id="exampleInputFile" name="image">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>

    </div>

<?php
include ("includes/footer.php");
?>