<!--[Pulls in the header part of the html from a php file]-->
<?php
	$path = './';
	$page = 'Lesson 5';
    $quizDB = "l5Questions";
    $quizNum = "quiz5Score";
	include $path.'assets/inc/header.php';
	require $path.'../../../dbConnect.inc';

    if ($mysqli) {
        if (isset($_POST["a1"]) && isset($_POST["a2"]) && isset($_POST["a3"])) {

            $score = 0;
            foreach ($_POST as $response) {
                if ($response == "correct") {
                    $score++;
                }
            }
            $score = ($score / 3) * 100;

            $sql = "INSERT INTO accountDb ($quizNum) VALUES ($score) where userEmail = ".$_SESSION['email'];
                $mysqli -> query($sql);
    
            

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

?>
<!--[body tag is already open]-->

            <div id="content">
                <h1 class="lesson_header">Lesson 5</h1>
                <h2 class="lesson_title">Objects</h2>
                <p class="lesson_content">An object or class is user written code that represents a specific thing. It has a set of properties and methods that can
                be accessed through referring the object.</p>

                <p class="lesson_content">Think an object has several parts. It has a name, attributes and methods. The easier way to think about it it's imagining
                    something you want to describe for the sake of this lesson let's do a dog. We have to think for a generic name for the class any dog. So lets
                    call it Dog.
                </p>
                <img class="dog" src="assets/images/lesson5/classname.png" alt="classname">
                <p class="lesson_content">Now we every object has a certain of attributes. You can think about it as qualities or properties. For example all dogs
                    have a breed, age and a color. Now you have to declare all this attributes to the object and it will look this way.
                </p>
                <img class="dog" src="assets/images/lesson5/attributes.png" alt="attributes">
                <p class="lesson_content">All attributes are private because they belong only to the dog class and no one else. Breed and color are of type string
                    because they are words and the age is of type int because age is a number.
                </p>
                <p class="lesson_content">
                    Now that we have set every attribute to our Dog. We now need a way to create it. The way that you do this is creating a constructor. Everytime you
                    call this constructor think about giving birth to a dog. Constructors usually take parameters to create the object. Constructors look like this.
                </p>
                <img class="dog" src="assets/images/lesson5/constructor.png" alt="constructor">
                <p class="lesson_content">
                    This is how you create a new object.
                </p>
                <img class="dog" src="assets/images/lesson5/creating.png" alt="creating">
            </div>

            <div id="quiz">
                <h2 id="quiz_title">Quiz</h2>
                <form action="lesson5.php" onsubmit="return validate();" method="post">
                <?php
                    if (isset($score)) {
                    echo $score;
                    }
                    include $path."assets/inc/quiz.php";
                ?>
                </form>
            </div>

        </div>
    </body>
</html>
