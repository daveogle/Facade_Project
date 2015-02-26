<?php

if (isset($_GET['page'])) : {
        switch ($_GET['page']) {
            case "index":
                echo "index.php";
                break;
            case "what":
                echo "what.php";
                break;
            case "when":
                echo "when.php";
                break;
            case "keyFeatures":
                echo"keyFeatures.php";
                break;
            case "variations":
                echo"variations.php";
                break;
            case "examples":
                echo "examples.php";
                break;
            case "quiz":
                echo "quiz.php";
                break;
            case "reading":
                echo "reading.php";
                break;
        }
    }
else : {
        die('ERROR');
    }
endif;
