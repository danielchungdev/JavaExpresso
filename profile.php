<!--[Pulls in the header part of the html from a php file]-->
<?php
    $path = './';
    $page = 'Lesson 1';
    include $path.'assets/inc/header.php';
	require $path.'../../../dbConnect.inc';

    session_start();

    if ($mysqli) {
        
        $sql = "SELECT quiz1Score, quiz2Score, quiz3Score, quiz4Score, quiz5Score FROM accountDb where userEmail = ".$_SESSION['email'];
        $res = $mysqli -> query($sql);
        if ($res) {
            while ($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $scores[] = $rowHolder;
            }
            
            
            
        }
        
    }
?>