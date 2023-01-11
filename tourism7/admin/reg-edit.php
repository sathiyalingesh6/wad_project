<?php 
    session_start();
    include('includes/header.php');
    include('includes/topbar.php');
    include('includes/sidebar.php');
    include('includes/header.php');
    include('config/dbconn.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Modal -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="places.php">Users</a></li>
              <li class="breadcrumb-item active">Edit Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

               
<div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit - Users</h3>
                    <a href="places.php"  class="btn btn-primary btn-sm float-right">Back </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="./place-sub.php" method="POST" enctype="multipart/form-data">
                            <?php 
                            if(isset($_GET['place_id']))
                            {
                            $place_id= $_GET['place_id'];
                            $qu = "SELECT * from login.places where places_id='$place_id' LIMIT 1 ";
                            $run = mysqli_query($conn,$qu);

                            if(mysqli_num_rows($run)>0)
                            {
                                    foreach($run as $row)
                                    {
                                        ?>
                                        <input type="hidden" name="user_id" value="<?php echo $_GET['place_id'] ?>">
                                        <div class="form-group">
                                            <label for="" >Place Name</label>
                                            <input type="text" name="place-name" class="form-control" value="<?php echo $row['name']?>" placeholder="Place Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="" >Place ID</label>
                                            <input type="text" name="place-id" class="form-control" value="<?php echo $row['places_id']?>" placeholder="place ID">
                                        </div>
                                        <div class="form-group">
                                            <label for="" >State Id</label>
                                            <input type="text" name="state-id" class="form-control" value="<?php echo $row['state_id']?>"  placeholder="State ID">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Description </label>
                                            <textarea rows="5" cols="40" name="desc"class="form-control" placeholder="Describe"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <input type="file" class="form-control" name="image" id="image" value="" required>
                                        </div>


                                        <?php
                                    }
                            }
                            else
                            {
                                echo "<h4>No record found </h4>";
                            }
                            }
                            ?>
                                
                        
                        <div class="modal-footer">
                            <button type="submit" name="updateplaces" class="btn btn-primary">Update</button>
                        </div>

                        </form>
                        </div>
                        </div>
                    </div>

</div>
<?php 
include('includes/footer.php');
?>