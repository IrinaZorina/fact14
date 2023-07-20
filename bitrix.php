<?php require_once 'inc/header.php' ?>
<title></title>
<?php
setcookie('login',date('Y-m-d H:i:s'),time() + 86400);
if(isset($_COOKIE['login'])){
    $datesession = $_COOKIE['login'];
    $date1 = strtotime($datesession);
    // echo $date1;
    $_SESSION['timesec1'] = $date1;
}
?>
<?php require_once 'inc/footer.php' ?>