<?php
$dsa = mysqli_connect("localhost","root","student details");
if(isset($_post['sumbit'])){
    $username = $_post['username'];
    $name = $_post['nasme'];
    $email = $_post['email'];
    $pass = $_post['password']
    $confirm_pass = $_post['confirm_password']

    $query = "INSERT INTO 'tblregsiter'('userid','name','email','pass') VALUE($username,$name,$email,$phone_no)";
    $result = mysqli_query($dsa,$query);
    if($result){
        echo "data inserted succussfully";
    }
    else{
        echo "Do not inserted"
    }
}
?>