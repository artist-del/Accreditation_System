<?php 
    include('connection.php');


    if(isset($_POST['save'])){
        $title = $_POST['title'];
        $description= $_POST['description'];
        $area = $_POST['area'];


        $name = $_FILES['file']['name'];
        $folder = "model/uploads/";
        $tempFile = $_FILES['file']['tmp_name'];
        move_uploaded_file($tempFile, $folder .$name);
        

        $sql = "INSERT INTO tbl_documents (d_title, d_description, d_area, d_path) VALUES ('$title', '$description', '$area', '$name')";

        $con->query($sql);
        header('location: save.php');
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $sql = "SELECT * FROM tbl_documents WHERE Id='$id'";
        $result = $con->query($sql);

        if(count($result)==1){
            $row = $result->fetch_array();

            $id = $row['Id'];
            $title = $row['d_title'];
            $description = $row['d_description'];
            $area = $row['d_area'];

        }
    }

    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $sql = "DELETE FROM tbl_documents WHERE Id='$id'";
        $con->query($sql);

        header('location: delete.php');
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $area = $_POST['area'];
        
        if($_FILES['file']['name']==0){
            
            $sql = "UPDATE tbl_documents SET d_title='$title', d_description='$description', d_area='$area' WHERE Id='$id'";

            $con->query($sql);

            header('location: docslist.php');
        }else{

            $file = $_FILES['file']['name'];
            $name = $_FILES['file']['name'];
            $folder = "model/uploads/";
            $tempFile = $_FILES['file']['tmp_name'];
            move_uploaded_file($tempFile, $folder .$title);

            $sql = "UPDATE tbl_documents SET d_title='$title', d_description='$description', d_area='$area', d_path='$name' WHERE Id='$id'";

            $con->query($sql);

            header('location: docslist.php');


        }
    }

    if(isset($_GET['view'])){
        $id=$_GET['view'];
        $sql = "SELECT * FROM tbl_documents WHERE Id='$id'";
        $result = $con->query($sql);

        if(count($result)==1){
            $row = $result->fetch_array();
            $file = $row['d_path'];
        }
    }
?>