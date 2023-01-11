<?php 
session_start();
include('config/dbconn.php');

if (isset($_POST['place-name']))
 {

    $pname = $_POST['place-name'];
    $sid = $_POST['state-id'];
    $pid = $_POST['place-id'];

	$filename = $_FILES["imagety"]["name"];
	$tempname = $_FILES["imagety"]["tmp_name"];
	$folder = "./images/" . $filename;



	// Get all the submitted data from the form
    $insert_query = "INSERT into login.places(places_id,name,state_id,image) values ('$pid','$pname','$sid','$filename')";
    $run = mysqli_query($conn,$insert_query);

    if($run)
    {   $_SESSION['status']="User added successfully";
        header("Location: places.php");
    }
    else
    {
        $_SESSION['status']="User failed";
        header("Location: places.php");
    }

    

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
if(isset($_POST['updateplaces']))
{   $user_id = $_POST['place_id'];
    $pname = $_POST['place-name'];
    $sid = $_POST['state-id'];
    $pid = $_POST['place-id'];
    $desc=$_POST['desc'];
    $update_query = "UPDATE login.places SET places_id='$pid',name='$pname',state_id='$sid',description='$desc' WHERE Places_id='$user_id'";
    $run = mysqli_query($conn,$update_query);

    if($run)
    {   $_SESSION['status']="Places updated successfully";
        header("Location: places.php");
    }
    else
    {
        $_SESSION['status']="Places update failed";
        header("Location: places.php");
    }

} 

if(isset($_POST['deleteuserbtn']))
{   $delete_id = $_POST['delete_id'];
    $delete_query = "DELETE FROM login.places WHERE Places_id='$delete_id'";
    $run = mysqli_query($conn,$delete_query);

    if($run)
    {   $_SESSION['status']="deleted successfully";
        header("Location: places.php");
    }
    else
    {
        $_SESSION['status']="User delete failed";
        header("Location: places.php");
    }

} 



?>