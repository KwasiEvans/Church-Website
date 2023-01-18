<?php 
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */

include '../connect.php';
$body = $_POST['body'];

//$query = ORM ::for_table('tbl_about')->create();
//$query->body=$body;
//$query->save();


$query = ORM::for_table('tbl_resources')->find_one(1);

// The following two forms are equivalent
//$query = $body->get('body');
$query ->body = $body;
$query ->save();
if($query->save()){
      header("location:add-program.php?success=true");
        }else{
            header("location:add-program.php?failed=true");
        }


?>
