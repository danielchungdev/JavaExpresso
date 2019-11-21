<!--[Pulls in the header part of the html from a php file]-->
<?php
	$path = './';
	$page = 'Lesson 5';
	include $path.'assets/inc/header.php';
	require $path.'../../../dbConnect.inc';
?>
<!--[body tag is already open]-->

            <div id="content">
                <h1 class="lesson_header">Lesson 5</h1>
                <h2 class="lesson_title">Objects</h2>
                <p class="lesson_content">An object or class is user written code that represents a specific thing. It has a set of properties and methods that can
                be accessed through refering the object.</p>

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
                    Now that we have set every attribute to our Dog. We now need a way to create it. The way that you do this is creating a costructor. Everytime you
                    call this constructor think about giving birth to a dog. Constructors usually take parameters to create the object. Constructors look like this.
                </p>
                <img class="dog" src="assets/images/lesson5/constructor.png" alt="constructor">
                <p class="lesson_content">
                    This is how you create a new object.
                </p>
                <img class="dog" src="assets/images/lesson5/creating.png" alt="creating">
            </div>

            <div id="quiz">
                <!-- php include quiz-->
                <h2 id="quiz_title">Quiz</h2>
                <form>
                    <p class="question" id="q1">This is a question on print statements?</p>
                        <input class="radio" type="radio" name="a1" value="A" id="A"><label class="radio_label" for="A">Answer 1</label><br/>
                        <input class="radio" type="radio" name="a1" value="B" id="B"><label class="radio_label" for="B">Answer 2</label><br/>
                        <input class="radio" type="radio" name="a1" value="C" id="C"><label class="radio_label" for="C">Answer 3</label><br/>
                        <input class="radio" type="radio" name="a1" value="D" id="D"><label class="radio_label" for="D">Answer 4</label><br/>
                </form>
            </div>

        </div>
    </body>
</html>
