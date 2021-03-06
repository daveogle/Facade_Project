/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//QUESTIONS
var score = 0;
var q1 = "Q1) In which scenario would use of the Façade Design Pattern be most appropriate?";
var q2 = "Q2) Why is it called the Façade Pattern?";
var q3 = "Q3) How can the Façade Pattern increase system security?";
var q4 = "Q4) What is the formal description of the Façade Pattern?";
var q5 = "Q5) How much of the original system does the Façade Pattern give access to?";
var q6 = "Q6) Name a benefit of encapsulating the existing system with the Façade Pattern.";
var q7 = "Q7) Select a scenario where the Façade Pattern would apply.";
var q8 = "Q8) Is it possible to add functionality to the original system with the Façade Pattern?";
var q9 = "Q9) Name a disadvantage of using the Façade Pattern.";
var q10 = "Q10) Select the best analogy a of the Façade Pattern in real life.";
//Array holding all question id's
var questionId = ["question1", "question2", "question3", "question4", "question5", "question6", "question7", "question8", "question9", "question10"];
//Array holding all questions
var question = [q1, q2, q3, q4, q5, q6, q7, q8, q9, q10];
//ANSWERS (Answer [0] must always be the correct answer to the question)
var answers1 = ["You need to interact with a small part an existing complex system.",
    "You need to define rules for creating objects.",
    "You need to recycle objects that are no longer in use.",
    "You need to use sharing to support large numbers of similar objects efficiently."];
var answers2 = ["It puts up a new interface (or Façade) in front of the original system.",
    "It is always an abstract Class.",
    "It creates a wall in front of the system to block all access",
    "It is used to deceive users into thinking malicious software is harmless"];
var answers3 = ["By forcing all access to the system through the façade Class.",
    "By allowing the implementation of a firewall",
    "By enabling the system to request passwords for system access",
    "Because the Façade Class always implements an encryption algorithm"];
var answers4 = ["Provide a unified higher-level interface to a set of interfaces in a subsystem.",
    "Convert the interface of a class into another interface that the client expects.",
    "Define the skeleton of an operation in an algorithm, deferring some steps to subclasses.",
    "Define an interface for creating an object letting subclasses decide which class to instantiate."];
var answers5 = ["As much or as little as you need it to.",
    "All of it.",
    "None of it.",
    "Only the essential Classes."];
var answers6 = ["Enables swapping out the old system for a new one with reduced effort.",
    "Enables better interaction between Classes.",
    "Ensures the class hierarchy is easily visible.",
    "Allows similar Classes to inherit from a common abstract Class."];
var answers7 = ["You want to avoid the need for the everybody to have to learn an existing complex system.",
    "You want to use a simple subsystem.",
    "You want to attach extra responsibilities to an object dynamically.",
    "You want to match an existing object beyond your control to a particular interface."];
var answers8 = ["Yes, the methods written for the Façade Class may be supplemented by new routines for the new functionality. ",
    "No, as the Façade Class is separate from the existing system.",
    "No, as this would be a violation of the Façade Pattern Principles.",
    "Yes, but only if the functionality in no way interacts with the existing system."];
var answers9 = ["You may end up writting and using unnecessary wrapper classes.",
    "There is no way to add further functionality to the system.",
    "Everyone must have a full understanding of the original system for the pattern to work.",
    "There is no way of hiding any part of the existing system."];
var answers10 = ["Use of a human petrol station attendant to interact with a complex fuel pump system.",
    "Use of a electrical power adapter for converting from one plug type to another.",
    "Use of a production line to speed up production of cars.",
    "Use of a lever to move a heavy object more easily."];
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

//Answer Quiz
    $("#answerQuiz").submit(function (e) {
        e.preventDefault();
        $("#answerQuiz").hide();
        score = 0;
        var correctAnswer = false;
        $('input:radio').each(function () {
            var $this = $(this), id = $this.attr('id');
            var qNumber = parseInt(id.charAt(1)) + 1;
            if ($(this).prop('checked')) {//if the box is checked
                //if the answer is correct
                if ($('label[for="' + id + '"]').html() === answers[id.charAt(1)][0])
                {
                    score = score + 1;
                    correctAnswer = true;
                    $('#question' + (qNumber) + ' .resultImage').html("<img src=\"Images/correct.png\" alt=\"right answer\" style=\"width:70px;height:70px;vertical-align: middle;margin-top:-20px;\">");
                    $(this).replaceWith(function () {
                        return $('<img src="Images/correct.png" alt="right answer" style="width:30px;height:30px;vertical-align: middle;">');
                    });
                }
                //if the answer is false
                if ($('label[for="' + id + '"]').html() !== answers[id.charAt(1)][0])
                {
                    $(this).replaceWith(function () {
                        return $('<img src="Images/wrong.jpeg" alt="wrong answer" style="width:30px;height:30px;vertical-align: middle;">');
                    });
                }
            }
            else //if not checked
            {
                //if the answer is right
                if ($('label[for="' + id + '"]').html() === answers[id.charAt(1)][0])
                {
                    $(this).replaceWith(function () {
                        return $('<img src="Images/correct.png" alt="right answer" style="width:30px;height:30px;vertical-align: middle;">');
                    });
                }
                else
                {
                    $(this).replaceWith(function () {
                        return $('<div style="width:30px;height:30px;float:left;"></div>');
                    });
                }
            }
            if (parseInt(id.charAt(2)) === 3 && !correctAnswer)
            {
                $('#question' + (qNumber) + ' .resultImage').html("<img src=\"Images/wrong.jpeg\" alt=\"wrong answer\" style=\"width:70px;height:70px;vertical-align: middle;margin-top:-20px;\">");
            }
            else if (parseInt(id.charAt(2)) === 3)
            {
                correctAnswer = false;
            }
        });
        $("div.result").html("<p><em><strong>Your Score: </strong>" + score + " / 10</em></p>");
        $('html, body').scrollTop($(document).height());
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