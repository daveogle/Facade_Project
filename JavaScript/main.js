/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    var filename = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    if (filename === "index.php")
    {
        $("#left").hide();
    }
    else if (filename === "reading.php")
    {
        $("#right").hide();
    }
    var pgNo = getPageNumber(filename);
    colourUpTo(pgNo);
    //var currentColour;

    //Ajax call on a box clicked 
    $("li .box").click(function () {
        ajaxCall(event.target.id);
    });
    
    $("li .doneBox").click(function () {
        ajaxCall(event.target.id);
    });

    $("#right").click(function () {
        if(pgNo === 8)
        {
            alert("Error");
        }
        else
        {
            var newPage = getPageName(pgNo + 1);
            ajaxCall(newPage);
        }
    });

    $("#left").click(function () {
        if(pgNo === 1)
        {
            alert("Error");
        }
        else
        {
            var newPage = getPageName(pgNo - 1);
            ajaxCall(newPage);
        }
    });

    function ajaxCall(page)
    {
        $.ajax({
            type: 'GET',
            url: 'Controller/control.php',
            data: 'page=' + page,
            success: function (msg)
            {
                alert(msg);
                location.href = msg;
            },
            error: function ()
            {
                alert("Failed");
            }
        });
    }

    //function to take current page and a left or right direction and return the correct page request
});

function getPageNumber(pageName)
{
    switch (pageName)
    {
        case "index.php" :
            return 1;
            break;
        case "what.php" :
            return 2;
            break;
        case "when.php" :
            return 3;
            break;
        case "keyFeatures.php" :
            return 4;
            break;
        case "variations.php" :
            return 5;
            break;
        case "examples.php" :
            return 6;
            break;
        case "quiz.php" :
            return 7;
            break;
        case "reading.php" :
            return 8;
            break;
    }
}

function getPageName(pageNumber)
{
    switch (pageNumber)
    {
        case  1 :
            return "index";
            break;
        case  2 :
            return "what";
            break;
        case 3 :
            return "when";
            break;
        case 4 :
            return "keyFeatures";
            break;
        case 5 :
            return "variations";
            break;
        case 6 :
            return "examples";
            break;
        case 7 :
            return "quiz";
            break;
        case 8 :
            return "reading";
            break;
    }
}

function colourUpTo(pageNumber)
{
    for (var i = 1; i <= pageNumber; i++)
    {
        //var page = $(getPageName(i));
        document.getElementById(getPageName(i)).style.background = "rgb(119, 165, 194)";
        document.getElementById(getPageName(i)).className = "doneBox";
    }
}


