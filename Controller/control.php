<?php

if (isset($_GET['page'])) : {
        switch ($_GET['page']) {
            case "first":
                echo "index.php";
                break;
            case "second":
                echo "what.php";
                break;
            case "third":
                echo"when.php";
                break;
            case "fourth":
                echo"keyFeatures.php";
                break;
            case "fifth":
                echo "variations.php";
                break;
            case "sixth":
                echo "quiz.php";
                break;
            case "seventh":
                echo "reading.php";
                break;
        }
    }
else : {
        die('ERROR');
    }
endif;
