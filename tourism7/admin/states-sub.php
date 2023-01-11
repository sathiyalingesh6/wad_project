<?php 
session_start();
include('config/dbconn.php');

if (isset($_POST['adduser1']))
 {

    $pname = $_POST['state-name'];
    $sid = $_POST['state-id'];
    

	$filename = $_FILES["imagety"]["name"];
	$tempname = $_FILES["imagety"]["tmp_name"];
	$folder = "./images/" . $filename;



	// Get all the submitted data from the form
    $insert_query = "INSERT into login.state(state_id,name,image) values ('$sid','$pname','$filename')";
    $run = mysqli_query($conn,$insert_query);

    if($run)
    {   $_SESSION['status']="State added successfully.";
        header("Location: states.php");
    }
    else
    {
        $_SESSION['status']="Failed to add State.";
        header("Location: states.php");
    }

    

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
if(isset($_POST['updateplaces']))
{   $user_id = $_POST['state_id'];
    
    $sname = $_POST['state-name'];
    $pid = $_POST['place-id'];
    $update_query = "UPDATE login.state SET state_id='$sid',name='$sname' WHERE Places_id='$user_id'";
    $run = mysqli_query($conn,$update_query);

    if($run)
    {   $_SESSION['status']="State updated successfully";
        header("Location: states.php");
    }
    else
    {
        $_SESSION['status']="State update failed";
        header("Location: states.php");
    }

} 

if(isset($_POST['deleteuserbtn']))
{   $delete_id = $_POST['delete_id'];
    $delete_query = "DELETE FROM login.state WHERE state_id='$delete_id'";
    $run = mysqli_query($conn,$delete_query);

    if($run)
    {   $_SESSION['status']="State deleted successfully";
        header("Location: states.php");
    }
    else
    {
        $_SESSION['status']="State delete Failed";
        header("Location: states.php");
    }

} 



?>