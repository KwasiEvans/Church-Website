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
$a = $_POST['site_name'];
$b = $_POST['site_title'];
$c = $_POST['email'];
$d = $_POST['site_desc'];
$e = $_POST['site_keyword'];
$f = $_POST['google_code'];
$g = $_POST['street'];
$h = $_POST['city'];
$i = $_POST['country'];
$j = $_POST['phone'];
$k = $_POST['facebook'];
$l = $_POST['twitter'];
$m = $_POST['linkedin'];
$n = $_POST['status'];
// query
$sql = "UPDATE settings SET 
        `site_name`=?,`site_title`=?,`email`=?,`site_desc`=?,`site_keyword`=?,`google_code`=?,
        `street`=?,`city`=?,`country`=?,`phone`=?,`facebook`=?,
        `twitter`=?,`linkedin`=?,`status`=? WHERE id= 1";
//$sql = "INSERT INTO settings (site_name,site_title,email,site_keyword,street,city,country,phone,facebook,twitter,linkedin,status) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l)";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n));
//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d, ':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i, ':j'=>$j, ':k'=>$k, ':l'=>$l));
 if($q){
      header("location:settings.php?success=true");
        }else{
            header("location:settings.php?failed=true");
        }

?>