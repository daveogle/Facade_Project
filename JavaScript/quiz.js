/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//QUESTIONS
var score = 0;

var q1 = "Q1) In which senario would use of the Facade Design Pattern be most appropriate?";
var q2 = "Q2) Why is it called the Facade Pattern?";
var q3 = "Q3) How can the Facade Pattern increase system security?";
var q4 = "";
var q5 = "";
var q6 = "";
var q7 = "";
var q8 = "";
var q9 = "";
var q10 = "";

//Array holding all question id's
var questionId = ["question1", "question2", "question3", "question4", "question5", "question6", "question7", "question8", "question9", "question10"];

//Array holding all questions
var question = [q1, q2, q3, "FourthQ", "FifthQ", "SixthQ", "SeventhQ", "EighthQ", "NinthQ", "TenthQ"];

//ANSWERS (Answer [0] must always be the correct answer to the question)
var answers1 = ["You need to interact with a small part an existing complex system.",
    "You need to define rules for creating objects.",
    "You need to recycle objects that are no longer in use.",
    "You need to use sharing to support large numbers of similar objects efficiently."];
var answers2 = ["It puts up a new interface (or Facade) in front of the original system.",
    "It is always an abstract Class.",
    "It creates a wall in front of the system to block all access",
    "It is used to decive users into thinking malicious software is harmless"];
var answers3 = ["By forcing all access to the system through the facade Class.",
    "By allowing the implamentation of a firewall",
    "By enabling the system to request passwords for system access",
    "Because the Facade Class always implaments an encription algorithm"];
var answers4 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers5 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers6 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers7 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers8 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers9 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers10 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers = [answers1, answers2, answers3, answers4, answers5, answers6, answers7, answers8, answers9, answers10];

//JQuery
$(document).ready(function () {
    //Populate the quiz from the above arrays.
    $.each(questionId, function (index, value) {
        $("#" + value + " h3").html(question[index]);
    });

    for (var i = 0; i < 10; i++)
    {
        var randomArray = createRandomArray();
        for (var j = 0; j < 4; j++)
        {
            var curr = $(this);
            $('label[for=Q' + i + "" + j + ']').html(answers[i][randomArray[j] - 1]);
        }
    }

    //Prevent page re-load
    $("#answerQuiz").submit(function (e) {
        e.preventDefault();
    });

    //Answer Quiz
    $("#answerQuiz").submit(function () {
        score = 0;
        $('input:radio').each(function () {
            var $this = $(this), id = $this.attr('id');
            //if the answer is correct
            if ($('label[for="' + id + '"]').html() === answers[id.charAt(1)][0])
            {
                $('label[for="' + id + '"]').css({'background-color': 'lime'});
            }
            //if the answer is false
            if ($(this).prop('checked')) {//Check if a box is checked
                if ($('label[for="' + id + '"]').html() !== answers[id.charAt(1)][0])
                {
                    $('label[for="' + id + '"]').css({'background-color': 'red'});
                }
                else
                {
                    score = score + 1;
                }
            }
        });
        $("div.result").html("<p><em>Your Score: " + score + " / 10</em></p>");
        $('html, body').scrollTop( $(document).height() );
    });
});

/**
 * Create a array with the numbers 1 - 4 stored randomly within
 * 
 * @returns {Array|createRandomArray.randomArray}
 */
function createRandomArray()
{
    var randomArray = [];
    while (randomArray.length < 4)
    {
        var number = Math.floor((Math.random() * 4) + 1);
        if (randomArray.indexOf(number) < 0)
        {
            randomArray.push(number);
        }
    }
    return randomArray;
}