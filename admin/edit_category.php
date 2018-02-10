<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 5/5/2017
 * Time: 3:24 PM
 */
//include header file
include ("includes/header.php");

$id=$_GET['id'];
//echo $id;exit;

//select all categories
$query = "SELECT * FROM categories WHERE id = '$id'";
$cate = $db->select($query);

$single=$cate->FETCH_ASSOC();

//print_r($single);exit;


//form action inserting process
if(isset($_POST['update'])){
    $title = $_POST['title'];
    if($title == '') {
        echo "<p class='alert alert-warning text-center'>" . "Please fill all the fields" . "</p>";
    }else{
        //print_r($_POST);exit();
        $query = "UPDATE categories SET title= '$title' WHERE id='$id'";
        $insert = $db->update($query);
    }

}
//$query="INSERT INTO  posts (id) VALUES ()";


?>
    <div class="blog-header text-center">
        <h1 class="blog-title">Insert a Category</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>
    <div class="col-sm-offset-2 col-sm-8 blog-main">
        <form action="edit_category.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Category Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Add Category Title...." value="<?php echo $single['title'] ?>">
            </div>
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>

    </div>

<?php
include ("includes/footer.php");
?>