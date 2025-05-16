
<?php
 $registered=0;
 $userexists=0;
 if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM users WHERE name='$name'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $userexists=1;
            if($userexists==1){
                echo "User already exist!";
            }
           
        }else{
            $sql="INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
            $result=mysqli_query($conn,$sql);
            
            if($result){
                $registered=1;
                echo "Signup successfully!";
            }
            else{
                die("connection failed".mysqli_error($conn));
            }
           
}
    }
}
?>
