<?php

    
    $mysqli=new mysqli('localhost','root','','onesmarter-staffing') or die(mysqli_error($mysqli));
 
    if (isset($_GET['delete'])) {
        $id=$_GET['delete'];
        $mysqli->query("DELETE FROM usertable where id=$id")or die($mysqli->error());
        header('location:./listofusers.php');
    }
   
    if (isset($_GET['delete'])) {
        $id=$_GET['delete'];
        $mysqli->query("DELETE FROM addjobs where id=$id")or die($mysqli->error());
        header('location:./updatejob.php');
    }

    if (isset($_GET['delete'])) {
        $id=$_GET['delete'];
        $mysqli->query("DELETE FROM employeestory where id=$id")or die($mysqli->error());
        header('location:./dashboard.php');
    }
    
    if (isset($_GET['delete'])) {
        $id=$_GET['delete'];
        $mysqli->query("DELETE FROM posibilitiessection where id=$id")or die($mysqli->error());
        header('location:./posibilities.php');
    }
    if (isset($_GET['delete'])) {
        $id=$_GET['delete'];
        $mysqli->query("DELETE FROM blogadmin where id=$id")or die($mysqli->error());
        header('location:./blogadmin.php');
    }
?>