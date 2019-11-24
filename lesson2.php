<!--[Pulls in the header part of the html from a php file]-->
<?php
	$path = './';
	$page = 'Lesson 2';
    $quizDB = "l2Questions";
	include $path.'assets/inc/header.php';
	require $path.'../../../dbConnect.inc';

    if ($mysqli) {
        if (isset($_POST["a1"]) && isset($_POST["a2"]) && isset($_POST["a3"])) {
            //TODO check answers
        }

        $sql = "SELECT question, c1, c2, c3, answer FROM $quizDB";
        $res = $mysqli -> query($sql);
        if ($res) {
            while ($rowHolder = mysqli_fetch_array($res, MYSQLI_NUM)) {
                $quiz[] = $rowHolder;
            }
        }
        
        $nums[0] = rand(0,5);
        for($i = 1; $i < 3; $i++) {
            $n = rand(0,5);
            while (in_array($n, $nums)) {
                $n = rand(0,5);
            }
            $nums[$i] = $n;
        }
        
        foreach ($nums as $n) {
            $questions[] = $quiz[$n];
        }
        
    }

    //TODO randomize questions

?>
<!--[body tag is already open]-->

            <div id="content">
                <h1 class="lesson_header">Lesson 2</h1>
                <h2 class="lesson_title">Print Statements</h2>
                <p class="lesson_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A cras semper auctor neque vitae tempus. Cursus turpis massa tincidunt dui ut ornare lectus sit. Id aliquet risus feugiat in. Nec feugiat in fermentum posuere urna. Sit amet consectetur adipiscing elit. Sapien eget mi proin sed libero enim sed faucibus. Orci ac auctor augue mauris augue neque. Egestas pretium aenean pharetra magna ac placerat. Cras tincidunt lobortis feugiat vivamus. Justo donec enim diam vulputate ut. Lacus vel facilisis volutpat est velit egestas. Gravida cum sociis natoque penatibus et magnis dis. Urna porttitor rhoncus dolor purus non enim praesent. Arcu dui vivamus arcu felis bibendum ut tristique et.</p>

                <p class="lesson_content">Interdum consectetur libero id faucibus nisl tincidunt eget nullam. Aliquet risus feugiat in ante metus dictum at. Semper auctor neque vitae tempus quam pellentesque nec. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Eleifend donec pretium vulputate sapien nec sagittis aliquam. Diam sollicitudin tempor id eu nisl nunc mi. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Rhoncus dolor purus non enim praesent elementum facilisis leo vel. In ante metus dictum at tempor. Consequat semper viverra nam libero justo laoreet sit. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Consectetur a erat nam at lectus urna. Magnis dis parturient montes nascetur ridiculus mus. Vitae congue eu consequat ac felis donec et odio. Etiam erat velit scelerisque in. Neque convallis a cras semper auctor. Velit scelerisque in dictum non consectetur.</p>
            </div>

            <div id="quiz">
                <!-- php include quiz-->
                <?php 
                    include $path."assets/inc/quiz.php";
                ?>
            </div>

        </div>
    </body>
</html>
