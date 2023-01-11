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
<body>
        <?php include_once('./includes/header.php'); session_start(); ?>

        <?php include_once('./includes/slide_img.php'); ?>

        <?php include_once('./includes/aboutus.php'); ?>

<section id="hotels" class="hotels section-padding">
    <div class="container-fluid ">
        <div class="row">
            <div class="section-header text-center pb-5">
                <h2><span>H</span>OTELS</h2>
                <p> These are best Hotels in the city.</p>
            </div>
        </div>

        <div class="shadow-lg p-4 mb-3 bg-body rounded">
            <div class="container text-black bg-light ">
                <div class="row">
        
                        <div class="col-sm-4">
                            <img src="./images/tamilnadu/h1.jpg" alt="" class="card-img">
                        </div>
                        <div class="col-sm-8 text-center">
                            <h3> Hotel Lulu </h3>
                            <p> It is an Luxurious hotel where you can enjoy tour weekends with your friends and family happily.</p>
                            <button class="btn btn-warning text-dark"> Book Now</button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="container text-black bg-light">
                <div class="row">
        
                        <div class="col-sm-4">
                        <form action="./booking.php?hotel_id=1 " method="POST">
                            <img src="./images/tamilnadu/h2.jpg" alt="" class="card-img">
                        </div>
                        <div class="col-sm-8 text-center">
                            <h3> Hotel Zibe  </h3>
                            <p> It is an Luxurious hotel where you can enjoy tour weekends with your friends and family happily.</p>
                            <div class="form-group">
                            <input type="hidden" name="hotel_id" class="" placeholder="Out-date">
                        </div>
                        <div class="modal-footer">
                              <button type="submit" name="bookcheck1" class="btn btn-primary">BOOK</button>
                        </div>

                        </div>
                        </a>
</form>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="container text-black bg-light">
                <div class="row">
        
                        <div class="col-sm-4">
                            <img src="./images/tamilnadu/h3.jpg" alt="" class="card-img">
                        </div>
                        <div class="col-sm-8 text-center">
                            <h3> Lucas </h3>
                            <p> It is an Luxurious hotel where you can enjoy tour weekends with your friends and family happily.</p>
                            <button class="btn btn-warning text-dark"> Book Now</button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="container text-black bg-light">
                <div class="row">
        
                        <div class="col-sm-4">
                            <img src="./images/tamilnadu/h4.jpg" alt="" class="card-img">
                        </div>
                        <div class="col-sm-8 text-center">
                            <h3> Rajaganapthy Stay Inn </h3>
                            <p> It is an Luxurious hotel where you can enjoy tour weekends with your friends and family happily.</p>
                            <button class="btn btn-warning text-dark"> Book Now</button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="container text-black bg-light">
                <div class="row">
        
                        <div class="col-sm-4">
                            <img src="./images/tamilnadu/h5.jpg" alt="" class="card-img">
                        </div>
                        <div class="col-sm-8 text-center">
                            <h3> Le meridien </h3>
                            <p> It is an Luxurious hotel where you can enjoy tour weekends with your friends and family happily.</p>
                            <button class="btn btn-warning text-dark"> Book Now</button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="container text-black bg-light">
                <div class="row">
        
                        <div class="col-sm-4">
                            <img src="./images/tamilnadu/h6.jpg" alt="" class="card-img">
                        </div>
                        <div class="col-sm-8 text-center">
                            <h3> beach Resort </h3>
                            <p> It is an Luxurious hotel where you can enjoy tour weekends with your friends and family happily.</p>
                            <button class="btn btn-warning text-dark"> Book Now</button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="container text-black bg-light">
                <div class="row">
        
                        <div class="col-sm-4">
                            <img src="./images/tamilnadu/h7.jpg" alt="" class="card-img">
                        </div>
                        <div class="col-sm-8 text-center">
                            <h3> Grd Zibe </h3>
                            <p> It is an Luxurious hotel where you can enjoy tour weekends with your friends and family happily.</p>
                            <button class="btn btn-warning text-dark pb-2"> Book Now</button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>

</section>



        <?php include_once('./includes/review.php'); ?>

        <?php include_once('./includes/footer.php'); ?>

</body>
</html>