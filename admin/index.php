<?php
session_start();

if(!isset($_SESSION['email'])){
    header('location:login.php');
}else{


include ("includes/header.php");

$query = "SELECT * FROM questions";

$questions= $db->select($query);

//$query_cats = "SELECT * FROM categories";

//$cats = $db->select($query_cats);


?>

<div class="col-sm-12 blog-main">
    <div class="blog-header">
        <h1 class="blog-title">The Posts Section</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>
 
            <table class="table table-hover">
                <tr class="text-center">
                    <td colspan="6">All questions...Here</td>
                </tr>
                <tr>
                    <th>questions ID</th>
                    <th>questions Name</th>
                    <th>Post Author</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php while ($row = $questions->FETCH_ASSOC()) : //echo "<pre>" ;print_r($row);?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><a href="edit_post.php?id=<?php echo $row['id'] ?>"><?php echo $row['question']?></a></td>
                    <td><a href="edit_post.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="delete_post.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <?php endwhile;?>
            </table>
    

    <!--<nav>
      <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </nav>-->

</div><!-- /.blog-main -->

<?php

include ("includes/footer.php");

}

?>
