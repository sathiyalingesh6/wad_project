


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/loginpage.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<div class="mx-auto p-4" style="width: 700px;">

<div class="container-fluid">
        <div class="card text-white text-center bg-dark pb-3">
                    <h1 style="text-align: center;">Sign Up</h1>
                    <br>
                    <br>
                    
                        <form action="signup.php" method="post">
                        
                            <label for="username">Username <sup>*</sup>: </label>
                            <input type="text" id="username" name="user_name" required>
                            <br>
                            <br>
                            <label for="password">Password <sup>*</sup>: </label>
                            <input type="password" id="pass" name="pass_word" required>
                            <br>
                            <br>
                            <label for="phNumber">Phone Number <sup>*</sup>: </label>
                            <input type="text" id="phNumber" max=10 name="ph_number" required onblur="phone_check()">
                            <br>
                            <br>
                            <label for="email">Email ID <sup>*</sup>: </label>
                            <input type="email" id="email" name="email_id" required>
                            <br>
                            <br>
                            <label for="name">name <sup>*</sup>: </label>
                            <input type="text" id="name" name="name1" required onblur=name_check()>
                            <br>
                            <br>
                            <input type="submit" id="signupbtn" value="Sign Up">
                        </form>
                    
        </div>
    </div>
</div>

<script>
    var nameID = document.getElementById("name");
    var usernameID = document.getElementById("username");
    var phnoID = document.getElementById("phNumber");
    var emailID = document.getElementById("email");

    function name_check()
    {
    let count = 0;
    let name = nameID.value;
    for(i=0;i<name.length;i++){
        if((name.charCodeAt(i)>=65 && name.charCodeAt(i)<=90) || 
        (name.charCodeAt(i)>=97 && name.charCodeAt(i)<=122) ||
        (name.charCodeAt(i)==32)){
            count += 1;
        }
    }
    if(count != name.length){
        alert(" Name Can't have Non Alpha Characters i.e., Only Lower and Upper case Alphabets are Allowed");
        nameID.value='';
    }
    }

    function phone_check()
    {   let count=0;
        let phno=phnoID.value;
        for(i=0;i<phno.length;i++)
        {
        if(phno.charCodeAt(i)>=48 && phno.charCodeAt(i)<=57)
        {
            count+=1;
        }
        }

        if(count!=phno.length)
        {
            alert("Phone number should have only Numbers....");
            phnoID.value='';
        }
    }

    </script>
</body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "login";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    if(isset($_POST['user_name'])){
        $uname = $_POST['user_name'];
        $pword = $_POST['pass_word'];
        $pnumber = $_POST['ph_number'];
        $email = $_POST['email_id'];
        $name = $_POST['name1'];
        
        $insert_sql = "INSERT INTO logint(username, password, name, email,phoneno) VALUES('$uname', '$pword', '$name','$pnumber', '$email')";
        
        if(!mysqli_query($conn, $insert_sql)) {
            echo "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
        }
        else{
        header('Location: signin.php');
        }
    }

    mysqli_close($conn);
?>
