<?php

if (isset($_GET['page'])) : {
        switch ($_GET['page']) {
            case "first":
                echo "index.php";
                break;
            case "second":
                echo "#";
                break;
            case "third":
                echo"#";
                break;
            case "fourth":
                echo"#";
                break;
            case "fifth":
                echo "Quiz.php";
                break;
        }
    }
else : {
        die('ERROR');
    }
endif;
