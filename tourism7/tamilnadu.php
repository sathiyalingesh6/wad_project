<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacation Hut</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/states.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
</head>
<body>
<?php include_once('./includes/header.php'); ?>

<?php include_once('./includes/slide_img.php'); ?>

<?php include_once('./includes/aboutus.php'); ?>

<?php include_once('./admin/config/dbconn.php'); ?>


<section id="places" class="places section-padding">
<div class="row">
            <div class="section-header text-center pb-5">
                <h2><span>P</span>Laces</h2>
                <p> These are most Viewed palces of our TamilNadu.</p>
            </div>
        </div>


<?php $query=mysqli_query($conn,"select * from places limit 6");
while($row=mysqli_fetch_array($query)){
if($row['places_id']==1){
?>
<div class="row">
<?php } else if($row['places_id']==4) { ?>
    </div> <div class="row">
        <?php } ?>
 <div class="col-lg-4 col-md-6">
            <div class="product-item">
            <a href="./hotels.php">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <img src="./admin/images/<?php echo $row['image'];?>" class="card-img-top">
                            <br><br>
                            <h3 class="card-title"><?php echo $row['name'];?>  </h3>
                           
                            <p class="lead"><?php echo $row['description'];?></p>
                                <br>
                                
                                <button class="btn btn-warning text-dark"> View</button>

                            </p>
                        </div>
                    </div>
            </a>
    </div>
 </div>
<?php } ?>
</div>
</section>

<?php include_once('./includes/review.php'); ?>

<?php include_once('./includes/footer.php'); ?>
</body>
</html>

