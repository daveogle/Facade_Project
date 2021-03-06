<?php
include("Include/header.html");
include("Include/navigation.html");
$questionId = array("question1", "question2", "question3", "question4", "question5", "question6", "question7", "question8", "question9", "question10");
?>
<link href="CSS/quiz.css" rel="stylesheet" type="text/css"/>
<script src="JavaScript/quiz.js" type="text/javascript"></script>
<div class ="mainContent">
    <H2>Quiz</H2>
    <p>In the previous page's you have learned about the Façade Design pattern, now it's time to test what
        you have learnt. Answer the following 10 questions to test your knowledge, press 'Check answers' when 
        your done to get your score.</p>
    <div class="quiz-wrapper">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<div class=\"question\" id=\"" . $questionId[$i] . "\">";
            echo "<div class=\"questionTitle\"><h3></h3><div class=\"resultImage\"></div></div>";
            echo "<form>";
            for ($j = 0; $j < 4; $j++) {
                echo "<span><input type=\"radio\" id=\"Q" . $i . $j . "\" name=\"questionList\"/><label style=\"vertical-align: middle\" for=\"Q" . $i . $j . "\">question</label></span>";
                echo "<br>";
            }
            echo "</form>";
            echo "</div>";
        }
        ?>
        <div class="sols">
            <div class="result">
            </div>
            <form id="answerQuiz">
                <input type="submit" value="Check answers" class="btn-style">
            </form>
        </div>
    </div>
</div>
<?php
include("Include/footer.html");
/*
 * End of file
 */

