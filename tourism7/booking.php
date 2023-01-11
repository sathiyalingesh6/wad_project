<?php 
    include('./includes/header.php');
    include('./admin/config/dbconn.php');
?>

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
</head>
<body>  <?php 
        $hote_id =$_POST['hotel_id']; 
        ?>

        

        <?php include_once('./includes/aboutus.php'); ?>

<section id="hotels_booking" class="hotels section-padding">
    <div class="container-fluid ">
        <div class="row">
            <div class="section-header text-center pb-5">
                <h2><span>B</span>BOOKINGS</h2>
                <p> These are best Hotels in the city.</p>
            </div>
        </div>

        <form action="./booking-sub.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

                        <div class="form-group">
                            <label for="" >IN-DATE</label>
                            <input type="date" name="in-date1" class="form-control" placeholder="In-date">
                        </div>
                        
                        <div class="form-group">
                            <label for="" >OUT-DATE</label>
                            <input type="date" name="out-date1" class="form-control" placeholder="Out-date">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="hotel_id" class="" placeholder="Out-date" value="<?php echo $hote_id;?>"/>

                        </div>

            </div>
                <div class="modal-footer">
                    <button type="submit" name="bookcheck1" class="btn btn-primary">BOOK</button>
                </div>
        </form>

</section>



        <?php include_once('./includes/review.php'); ?>

        <?php include_once('./includes/footer.php'); ?>

</body>
</html>

