<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['username'];
$d = $_POST['password'];

// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'efac_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
        $sql = "INSERT INTO table_admin (name,email,username,password,file) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$file_name_new));
if($q){
      header("location:add-admin.php?success=true");
        }else{
            header("location:add-admin.php?failed=true");
        } 
		}
		?>