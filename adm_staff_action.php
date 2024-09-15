<?php
    session_start(); /* Alert message */
    include 'adm_staff_db.php';

    $update=false;
    $id="";
    $name="";
    $email="";
    $phone="";
    $role="";
    $photo="";


    if(isset($_POST['add'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $role=$_POST['role'];

        $photo=$_FILES['image']['name'];
        $upload="uploads/".$photo;

        $query="INSERT INTO staff(name,email,phone,role,photo) vALUEs(?,?,?,?,?);";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("sssss",$name,$email,$phone,$role,$upload);
        $stmt->execute();
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);

        header('location:adm_staff_list.php');
        $_SESSION['response']="successfully Inserted to the database!";  /* Alert message */
        $_SESSION['res_type']="success";
    }

    // Delete action
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];

        // To delete uploads from the folder
        $sql="SELECT photo FROM staff WHERE id=?";
        $stmt2=$conn->prepare($sql);
        $stmt2->bind_param("i", $id); /* binding id */
        $stmt2->execute(); /* To execute the statement */
        $result2=$stmt2->get_result();
        $row=$result2->fetch_assoc();

        $imagepath=$row['photo'];
        unlink($imagepath);

        // Delete action
        $query="DELETE FROM staff WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i" ,$id);
        $stmt->execute();

        header('location:adm_staff_list.php');
        $_SESSION['response']="successfully Deleted!";  /* Alert message */
        $_SESSION['res_type']="danger";
    }

        // Edit Action
        if(isset($_GET['edit'])){
        $id=$_GET['edit'];

        $query="SELECT * FROM staff WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute(); 
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        // To store the values coming from db
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $role=$row['role'];
        $photo=$row['photo'];

        $update=true;

        }

        // To uodate the image
        if(isset($_POST['update'])){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $role=$_POST['role']; 
            $oldimage=$_POST['oldimage'];   

        if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
            $newimage="uploads/".$_FILES['image']['name'];
            unlink($oldimage);
            move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
        }
        else{
            $newimagenew=$oldimage;
        }
        $query="UPDATE staff SET name=?,email=?,phone=?,role=?,photo=? WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("sssssi",$name,$email,$phone,$role,$newimage,$id);
        $stmt->execute();

        $_SESSION['response']="Updated Successfully!";  /* Alert message */
        $_SESSION['res_type']="primary";
        header('location:adm_staff_list.php');
    }

    // Details action
    if(isset($_GET['details'])){
        $id=$_GET['details'];

        $query="SELECT * FROM staff WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute(); 
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        $vid=$row['id'];
        $vname=$row['name'];
        $vemail=$row['email'];
        $vphone=$row['phone'];
        $vrole=$row['role'];
        $vphoto=$row['photo'];

    }

?>