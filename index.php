<?php 
include 'includes/header.php';
?>

<html lang="en">

<?php 
    include './components/backgroundLayer.php';
?>


<?php 
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    
    switch ($page) {
        case 'home':
            include 'pages/home/home.php';
            break;
            
        case 'bookings':
            include 'pages/booking/booking.php';
            break;
            
        default:
          
            header('HTTP/1.0 404 Not Found');
            include '404.php'; 
            exit();
    }
} else {
    include 'pages/home/home.php';
}
?>

  <?php
    include 'includes/footer.php';
  ?>


</html>