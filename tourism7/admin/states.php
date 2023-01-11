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
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Add user </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./states-sub.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                        <div class="form-group">
                            <label for="" >State Name</label>
                            <input type="text" name="state-name" class="form-control" placeholder="Place Name">
                        </div>
                        <div class="form-group">
                            <label for="" >Place ID</label>
                            <input type="text" name="state-id" class="form-control" placeholder="place ID">
                        </div>
                        <div class="form-group">
                            <label for=""> Description </label>
                            <textarea rows="5" cols="40" name="desc"class="form-control" placeholder="Describe"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="imagety" id="image1">
                        </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="adduser1" class="btn btn-primary">ADD</button>
                </div>
        </form>
    </div>
  </div>
</div>

<!-- Delete User Modal -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./place-sub.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="delete_id" class="delete_user_id">
                <p> Are you sure want to delete this data? </p>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" name="deleteuserbtn" class="btn btn-primary">Delete</button>
            </div>
        </form>
    </div>
  </div>
</div>

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Places</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        echo "<h4>".$_SESSION['status']."</h4>";
                        unset($_SESSION['status']);
                    }
                ?>
<div class="card">
                <div class="card-header">
                    <h3 class="card-title">Places</h3>
                    <a href=""  data-toggle="modal" data-target="#addUserModal" class="btn btn-primary btn-sm float-right">Add user </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>state ID</th>
                        <th>State Name</th>
                        <th> Description </th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $query2=mysqli_query($conn,"Select * from login.state;");
                    $placecount=mysqli_num_rows($query2);
                    if($placecount>0)
                    {
                        while($row1=mysqli_fetch_array($query2)) { ?>
                    <tr>
                        <td><?php echo $row1['state_id'];?></td>
                        <td><?php echo $row1['name'];?> </td>
                        <td><?php echo $row1['description'];?> </td>

                        <td> <a href="states-edit.php?state_id=<?php echo $row1['state_id'];?>" class="btn btn-info btn-sm">Edit </a> 
                        <button type="button" value="<?php echo $row1['state_id'];?>" class="btn btn-danger btn-sm deletebtn"> Delete </button>
                        </td>
                        
                    </tr>
                   <?php } } else {?>  <tr> <td> NO record Found </td> </tr> <?php } ?>
                    </tbody>
                    </table>
                </div>
    </div>
</div>
</div>
            </div>

        </div>
<?php 

include('includes/script.php');
include('includes/footer.php');

?>
<script>
    $(document).ready(function () {
        $('.deletebtn').click(function (e) {
            e.preventDefault();
        var user_id = $(this).val();
        //console.log(user_id);
        $('.delete_user_id').val(user_id);
        $('#deleteModal').modal('show');
    });
});
</script>

?>