<?php
include ("includes/header.php");

$query = "SELECT * FROM abouts";

$abouts= $db->select($query);
?>
<div class="col-sm-12 blog-main">
    <div class="blog-header">
        <h1 class="blog-title">The About section...</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        <h4><a href="add_about.php">Add about</a></h4>
    </div>
 
            <table class="table table-hover">
                <tr class="text-center">
                    <td colspan="6">All Information...Here</td>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th>University</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php while ($row = $abouts->FETCH_ASSOC()) : //echo "<pre>" ;print_r($row);?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['title']?></td>
                    <td><?php echo $row['dep']?></td>
                    <td><?php echo $row['uni']?></td>
                    <td><a href="edit_post.php?id=<?php echo $row['id'] ?>"><?php //echo $row['question']?></a></td>
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
?>