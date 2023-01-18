<?php
include '../connect.php';
$name = $_POST['name'];
$office = $_POST['office'];
$zone = $_POST['zone'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// This code will save file into the database
$query = ORM ::for_table('excos')->create();
$query->name=$name;
$query->office=$office;
$query->zone=$zone;
$query->phone=$phone;
$query->email = $email;
$query->save();
  if($query){
      header("location:add-exco.php?success=true");
        }else{
            header("location:add-exco.php?failed=true");
        }
        
?>
