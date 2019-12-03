<!--[Pulls in the header part of the html from a php file]-->
<?php
    $path = './';
    $page = 'Lesson 1';
    include $path.'assets/inc/header.php';
	require $path.'../../../dbConnect.inc';

    if (!isset($_SESSION)) {
        session_start();
    }

    if ($mysqli) {
        
        $sql = "SELECT quiz1Score, quiz2Score, quiz3Score, quiz4Score, quiz5Score FROM accountDb where userEmail = ".$_SESSION['email'];
        $res = $mysqli -> query($sql);
        if ($res) {
            while ($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $scores[] = $rowHolder;
            }
            
            echo '<table id="score_table">
                    <tr>
                        <th>Quiz Number</th>
                        <th>Quiz Score</th>
                    </tr>';
            for ($i = 1; $i <= count($scores); $i++) {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$scores["quiz".$i."Score"].'</td>
                        </tr>';
            }
            echo '</table>';
            
        }
        
    }
?>
</body>
</html>