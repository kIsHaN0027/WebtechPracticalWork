<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `restaurant` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$password=$row['Password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `restaurant` set id=$id, name='$name',email='$email',mobile=$mobile,password='$password' 
    where id=$id";

    $result= mysqli_query($con,$sql);
    if($result){
        // echo "data updated successs";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mission mangal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your Name" name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="Email" class="form-control" id="exampleInputEmail1" placeholder="Enter your Email" name="email" autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label>Mobile.NO</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>