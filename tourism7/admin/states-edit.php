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
              <li class="breadcrumb-item"><a href="places.php">States</a></li>
              <li class="breadcrumb-item active">Edit States</li>
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
                    <h3 class="card-title">Edit - States</h3>
                    <a href="places.php"  class="btn btn-primary btn-sm float-right">Back </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="./states-sub.php" method="POST" enctype="multipart/form-data">
                            <?php 
                            if(isset($_GET['state_id']))
                            {
                            $state_id= $_GET['state_id'];
                            $qu = "SELECT * from login.state where states_id='$state_id' LIMIT 1 ";
                            $run = mysqli_query($conn,$qu);

                            if(mysqli_num_rows($run)>0)
                            {
                                    foreach($run as $row)
                                    {
                                        ?>
                                        <input type="hidden" name="user_id" value="<?php echo $_GET['state_id'] ?>">
                                        <div class="form-group">
                                            <label for="" >State Name</label>
                                            <input type="text" name="place-name" class="form-control" value="<?php echo $row['name']?>" placeholder="Place Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="" >State ID</label>
                                            <input type="text" name="place-id" class="form-control" value="<?php echo $row['state_id']?>" placeholder="place ID">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Description </label>
                                            <textarea rows="5" cols="40" name="desc" class="form-control" placeholder="Describe"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <input type="file" class="form-control" name="imagety" id="imagety" value="" required>
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