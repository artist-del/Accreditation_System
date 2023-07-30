<?php
    include('connection.php');
    session_start();

    if(isset($_POST["submit"])){
        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $department = $_POST["department"];
        $position = $_POST["position"];
        $e_add = $_POST["e_add"];
        $m_num = $_POST["m_num"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "insert into faculty (f_name, f_lname, f_address, f_gender, f_department, f_position, f_email, f_mobile, f_username, f_password) values('$f_name','$l_name','$address','$gender','$department','$position', '$e_add', '$m_num','$username', '$password')";

        $con->query($sql);


        $_SESSION['msg']='Successfully Save!';
 

       

    }
?>