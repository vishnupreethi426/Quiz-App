<?php
    $logged=0;
    $invalid=0;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect.php';
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
            $logged=1;
            echo "Login successfully!";
        }else{
            $invalid=1;
            die("No user exist!".mysqli_error($conn));
        }
    }
}
 ?>