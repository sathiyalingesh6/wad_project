<?php 
    include('includes/header.php');
    include('includes/topbar.php');
    include('includes/sidebar.php');
    include('includes/header.php');
    include('config/dbconn.php');

    $query1=mysqli_query($conn,"Select * from login.logint;");
$enqcount=mysqli_num_rows($query1);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./reg-sub.php" method="POST">
      <div class="modal-body">
            <div class="form-group">
                <label for="" >Name</label>
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="" >Email ID</label>
                <input type="text" class="form-control" placeholder="Email Id">
            </div>
            <div class="form-group">
                <label for="" >Phone No</label>
                <input type="text" class="form-control" placeholder="Phone No">
            </div>
            <div class="form-group">
                <label for="" >Password</label>
                <input type="text" class="form-control" placeholder="Password">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" name="sub1" class="btn btn-primary">Save changes</button>
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
              <li class="breadcrumb-item active">Registerd Users</li>
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
                    <h3 class="card-title">Registered USers</h3>
                    <a href=""  data-toggle="modal" data-target="#addUserModal" class="btn btn-primary btn-sm float-right">Add user </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>Phone No</th>
                        
                    </tr>
                    
                    </thead>
                    <tbody>
                    <?php 
                    if($enqcount>0)
                    {
                        while($row1=mysqli_fetch_array($query1)) { ?>
                    <tr>
                        <td><?php echo $row1['name'];?></td>
                        <td><?php echo $row1['email'];?> </td>
                        <td><?php echo $row1['password'];?></td>
                        <td> <?php echo $row1['phoneno'];?></td>
                        
                    </tr>
                   <?php }} ?>
                    </tbody>
                    </table>
                </div>
    </div>
</div>
</div>
            </div>

        </div>
<?php 
include('includes/footer.php');
include('includes/script.php');
?>