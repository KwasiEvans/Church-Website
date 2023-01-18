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
	$result = $db->prepare("DELETE FROM news WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-news.php?success=true");
        }else{
            header("location:all-news.php?failed=true");
        } 
		
?>