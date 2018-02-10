<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 5/1/2017
 * Time: 11:32 PM
 */
$query= "SELECT * FROM categories";
$cate=$db->select($query);
//print_r($cate);

?>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class="sidebar-module">
        <h4>Categories</h4>
        <ol class="list-unstyled">
            <?php while ($row = $cate->FETCH_ASSOC()) : //print_r($row) ?>
            <li><a href="category.php?id=<?php echo $row['id'];?>"><?php echo $row['title'] ?></a></li>
            <?php endwhile;?>
            <!--<li><a href="#">JavaScript</a></li>
            <li><a href="#">HTML & CSS</a></li>
            <li><a href="#">SQL</a></li>-->
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->
