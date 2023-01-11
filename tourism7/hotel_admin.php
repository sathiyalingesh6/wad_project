<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="loginpage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login page in HTML</title>
</head>
<body>
<div class="mx-auto" style="width: 1000px;">
    <div class="container">
        <div class="card text-white text-center bg-dark pb-3" >
                    <h1>HOTEL ADMIN SIGN IN</h1>
                    <form action="index.php" method="post">
                        <div class="mainContainer">
                            <label for="username">Your username</label>
                            <input type="text" placeholder="Enter Username" name="username" required onblur=nameCheck()>
                            <br><br>
                            <label for="pswrd">Your password</label>
                            <input type="password" placeholder="Enter Password" name="pswrd" required onblur=passwordCheck()>
                           
                                <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                            </div>
                            <button type="submit">Login</button>
                            <p class="register">Not a member?  <a href="signup.php">Register here!</a></p>

                        </div>
                    </form>
        </div>
    </div>
</div>
</body>
</html>


<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "login";
    $conn = mysqli_connect($servername, $username, $password, $db);
    if(!$conn)
    {
        die("Connection failed: ".mysqli_connect_error());
    }
    if(isset($_POST['username'])){
        $uname = $_POST['username'];
        $pword = $_POST['pswrd'];
        $flag = 0;
        $extract_sql = "SELECT * FROM hoteladmin_login";
        $result = mysqli_query($conn, $extract_sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                if(($row["username"]==$uname) && ($row["password"]==$pword)){
                    header('Location: welcome.html');
                    echo "Successfully Loggged In";
                    $flag = 1;
                }
            }
        }
        if($flag == 0){
            include 'welcome.html';
            echo "No Such User Available";
        }
    }
    mysqli_close($conn);
?>