/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var questionId = ["question1", "question2", "question3", "question4", "question5", "question6", "question7", "question8", "question9", "question10"];
var question = ["FirstQ", "SecondQ", "ThirdQ", "FourthQ", "FifthQ", "SixthQ", "SeventhQ", "EighthQ", "NinthQ", "TenthQ"];
var answers1 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers2 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers3 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers4 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers5 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers6 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers7 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers8 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers9 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers10 = ["Right Answer", "Wrong Answer1", "WrongAnswer2", "Wrong Answer3"];
var answers = [answers1, answers2, answers3, answers4, answers5, answers6, answers7, answers8, answers9, answers10];

$(document).ready(function () {
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

    $("#answerQuiz").submit(function (e) {
        e.preventDefault();
    });

    //Answer Quiz
    $("#answerQuiz").submit(function () {
        $('input:radio').each(function () {
            var $this = $(this), id = $this.attr('id');
            if ($('label[for="' + id + '"]').html() === answers[id.charAt(1)][0])
            {
                $('label[for="' + id + '"]').css({'background-color': 'lime'});
            }
            if ($(this).prop('checked')) {//Check if a box is checked
                if ($('label[for="' + id + '"]').html() !== answers[id.charAt(1)][0])
                {
                    $('label[for="' + id + '"]').css({'background-color': 'red'});
                }
            }
        });
    });
});

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