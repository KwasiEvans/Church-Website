<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
	include'../connect.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM gallery WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-photos.php?success=true");
        }else{
            header("location:all-photos.php?failed=true");
        } 
		
?>