/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $(".box").hover(
            function () {
                //stuff to do on mouse enter
                $(this).css({'background-color': 'red', 'box-shadow': '0px 0px 0px #888888'});
            },
            function () {
                //stuff to do on mouse leave
                $(this).css({'background-color': 'yellow', 'box-shadow': '10px 10px 5px #888888'});
            });

    //Ajax call on a box clicked 
    $(".box").click(function () {
        ajaxCall();
    });
   
   $("#right").click(function () {
       alert($(this).attr('id'));
   });
   
      $("#left").click(function () {
       alert($(this).attr('id'));
   });
   
    function ajaxCall()
    {
        $.ajax({
            type: 'GET',
            url: 'Controller/control.php',
            data: 'page=' + event.target.id,
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
});


