<?php
include ("includes/header.php");
include_once ("libs/config.php");
include_once ("libs/Database.php");
$db = new Database();
$aboutss= $db->select2('abouts');
// echo "<pre>";
// print_r($aboutss);
?>

<div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-2 text-center tst">
    <h2 class="text-center" style="color:#219ad4">Our Team</h2>
	<?php foreach($aboutss as $about): ?>
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <img src="assets/images/<?php echo $about['image'] ?>" width="200px" height="200px" />
                    </div>
                    <div class="col-sm-6 col-md-6 mest">
                        <h4>
                            <?php echo $about['name'] ?></h4>
                        <p>
                            <i class=""></i><?php echo $about['title'] ?>
                            <br />
                            <i class=""></i><a href=""><?php echo $about['dep'] ?></a>
                            <br />
                            <i class=""></i><?php echo $about['uni'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
<?php
include ("includes/footer.php");
?> 