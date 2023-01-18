<?php
include '../connect.php';
$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$phone = $_POST['phone'];
$detail = $_POST['detail'];
// This code will save file into the database
$query = ORM ::for_table('events')->create();
$query->title=$title;
$query->date=$date;
$query->time=$time;
$query->venue=$venue;
$query->phone = $phone;
$query->detail=$detail;
$query->save();
  if($query){
      header("location:add-event.php?success=true");
        }else{
            header("location:add-event.php?failed=true");
        }
        
?>
