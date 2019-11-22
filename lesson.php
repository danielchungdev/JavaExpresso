<!--[Pulls in the header part of the html from a php file]-->
<?php
	$path = './';
	$page = 'Lesson 1';
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
            while ($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $quiz[] = $rowHolder;
            }
        }
    }

    //TODO randomize questions

?>
<!--[body tag is already open]-->

            <div id="content">
                <h1 class="lesson_header">Lesson 1</h1>
                <h2 class="lesson_title">Print Statements</h2>
                <p class="lesson_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. A cras semper auctor neque vitae tempus. Cursus turpis massa tincidunt dui ut ornare lectus sit. Id aliquet risus feugiat in. Nec feugiat in fermentum posuere urna. Sit amet consectetur adipiscing elit. Sapien eget mi proin sed libero enim sed faucibus. Orci ac auctor augue mauris augue neque. Egestas pretium aenean pharetra magna ac placerat. Cras tincidunt lobortis feugiat vivamus. Justo donec enim diam vulputate ut. Lacus vel facilisis volutpat est velit egestas. Gravida cum sociis natoque penatibus et magnis dis. Urna porttitor rhoncus dolor purus non enim praesent. Arcu dui vivamus arcu felis bibendum ut tristique et.</p>

                <p class="lesson_content">Interdum consectetur libero id faucibus nisl tincidunt eget nullam. Aliquet risus feugiat in ante metus dictum at. Semper auctor neque vitae tempus quam pellentesque nec. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Eleifend donec pretium vulputate sapien nec sagittis aliquam. Diam sollicitudin tempor id eu nisl nunc mi. Urna porttitor rhoncus dolor purus non enim praesent elementum facilisis. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Rhoncus dolor purus non enim praesent elementum facilisis leo vel. In ante metus dictum at tempor. Consequat semper viverra nam libero justo laoreet sit. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Consectetur a erat nam at lectus urna. Magnis dis parturient montes nascetur ridiculus mus. Vitae congue eu consequat ac felis donec et odio. Etiam erat velit scelerisque in. Neque convallis a cras semper auctor. Velit scelerisque in dictum non consectetur.</p>
            </div>

            <div id="quiz">
                <!-- php include quiz-->
                <h2 id="quiz_title">Quiz</h2>
                <form action="lesson.php" onsubmit="return validate();" method="post">
                    <?php
                    
                    echo '<p class="question" id="q1">'.$quiz[0]["question"].'</p>
                        <input class="radio" type="radio" name="a1" value="A" id="A1"><label class="radio_label" for="A1">'.$quiz[0]["c1"].'</label><br/>
                        <input class="radio" type="radio" name="a1" value="B" id="B1"><label class="radio_label" for="B1">'.$quiz[0]["c2"].'</label><br/>
                        <input class="radio" type="radio" name="a1" value="C" id="C1"><label class="radio_label" for="C1">'.$quiz[0]["c3"].'</label><br/>
                        <input class="radio" type="radio" name="a1" value="D" id="D1"><label class="radio_label" for="D1">'.$quiz[0]["answer"].'</label><br/>';
                        
                    echo '<p class="question" id="q2">'.$quiz[1]["question"].'</p>
                        <input class="radio" type="radio" name="a2" value="A" id="A2"><label class="radio_label" for="A2">'.$quiz[1]["c1"].'</label><br/>
                        <input class="radio" type="radio" name="a2" value="B" id="B2"><label class="radio_label" for="B2">'.$quiz[1]["c2"].'</label><br/>
                        <input class="radio" type="radio" name="a2" value="C" id="C2"><label class="radio_label" for="C2">'.$quiz[1]["c3"].'</label><br/>
                        <input class="radio" type="radio" name="a2" value="D" id="D2"><label class="radio_label" for="D2">'.$quiz[1]["answer"].'</label><br/>';
                    
                    echo '<p class="question" id="q3">'.$quiz[2]["question"].'</p>
                        <input class="radio" type="radio" name="a3" value="A" id="A3"><label class="radio_label" for="A3">'.$quiz[2]["c1"].'</label><br/>
                        <input class="radio" type="radio" name="a3" value="B" id="B3"><label class="radio_label" for="B3">'.$quiz[2]["c2"].'</label><br/>
                        <input class="radio" type="radio" name="a3" value="C" id="C3"><label class="radio_label" for="C3">'.$quiz[2]["c3"].'</label><br/>
                        <input class="radio" type="radio" name="a3" value="D" id="D3"><label class="radio_label" for="D3">'.$quiz[2]["answer"].'</label><br/>';
                        
                    ?>
                        <input id="submit" class="button" type="submit">
                </form>
            </div>

        </div>
    </body>
</html>
