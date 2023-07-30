<?php
   
    include('connection.php');
    session_start();

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $sql = "SELECT * FROM faculty WHERE id=$id";
        $result = $con->query($sql);

        if(count($result)==1){
            $row = $result->fetch_array();
            $id = $row['Id'];
            $name = $row['f_name'];
            $lname = $row['f_lname'];
            $address = $row['f_address'];
            $gender = $row['f_gender'];
            $department = $row['f_department'];
            $position = $row['f_position'];
            $email = $row['f_email'];
            $number = $row['f_mobile'];
            $username = $row['f_username'];
            $password = $row['f_password'];
        }
        
    }
    
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $position = $_POST['position'];
        $email = $_POST['e_add'];
        $number = $_POST['m_num'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "UPDATE faculty SET f_name = '$name', f_lname='$lname', f_address='$address', f_gender='$gender', f_department = '$department', f_position='$position', f_email='$email', f_mobile='$number', f_username='$username', f_password='$password' WHERE Id='$id'";

        $con->query($sql);

        $_SESSION['data'] = 'Record update successfully!';
        header('location: table.php');

       

    }


    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
    
        $sql = "DELETE FROM faculty WHERE Id = '$id'";
    
        $con->query($sql);
    
        
        header('location: success.php');
     
        
    }
?>