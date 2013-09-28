/**
 * Created with JetBrains PhpStorm.
 * User: User
 * Date: 13.05.13
 * Time: 21:43
 * To change this template use File | Settings | File Templates.
 */

function addFile(id, fcount) {
    var box = document.getElementById(id);
    var count = document.getElementById(fcount);
    var content = "<input type=\"file\" name=\"qfile" + count.value + "\" /> ";

    box.innerHTML += content;
    count.value += 1;
}

function correctPager() {
    var a_list = $("a", "#pager");
    var rec = $('#rec_on_page').val();

    i = 0;
    for (i = 0; i < a_list.length; i++) {
        var temp_href = a_list[i].href;
        a_list[i].href = temp_href.toString().substr(0, temp_href.toString().lastIndexOf("=") + 1) + rec;
        ;
    }
}

function showHouse(id) {
    if ($("#house_" + id).css("display") == "none") {
        $("#house_" + id).css("display", "block");
    } else {
        $("#house_" + id).css("display", "none");
    }
}

function showAnswer(id) {
    if ($("#question_" + id).css("display") == "none") {
        $("#question_" + id).css("display", "block");
    } else {
        $("#question_" + id).css("display", "none");
    }
}

function calcMeterDiff(id) {
    var curVal = $('#meter_value_' + id).val();
    var prevVal = $('#meter_prev_' + id).html();

    curVal = curVal.toString().replace(',', '.');
    prevVal = prevVal.toString().replace(',', '.');

    var diff = (parseFloat(curVal) - parseFloat(prevVal)).toFixed(2);

    if (isNaN(diff)) {
        diff = 0;
    }

    $('#meter_diff_' + id).html(diff);

    if (diff <= 0) {
        $('#save').attr('disabled', 'disabled');
        $('#meter_value_' + id).css('color', '#ff1717');
        $('#note').css('display', 'block');
    } else {
        $('#meter_value_' + id).css('color', '#000000');
        $('#note').css('display', 'none');

        var active = true;
        $('div[id^="meter_diff_"]').each(function () {
            if (parseFloat($(this).html()) < 0) {
                active = false;
            }
        });

        if (active == true) {
            $('#save').attr('disabled', false);
        }
    }
}

function showQuestionForm() {
    if ($('#questionForm').css("display") == "none") {
        $('#questionForm').slideDown();
    } else {
        $('#questionForm').css("display", "none");
    }
}

$(document).ready(function () {

    $('#mainmenu .menu li').hover(
        function () {
            $(this).find('ul:first').show();
            $(this).find('a:first').addClass("hover");
        },
        function () {
            $(this).find('ul:first').hide();
            $(this).find('a:first').removeClass("hover");
        }
    );
    $('input, textarea').placeholder();

    // slider --

    var elems = $("#cont ul li");

    var contw = 1048;

    var cont_width = (elems.length) * contw;

    var current_elem = 0;

    var speed = 500;


    $("#cont ul").css('width', cont_width + "px");


    $(".slider .arrr").click(function () {

        current_elem++;

        if (current_elem == elems.length) {


            var cw = (elems.length + 1) * contw;

            $("#cont ul").css('width', cw + "px");

            $("#cont ul li:first").clone().appendTo("#cont .items");


            $("#cont ul").animate({ marginLeft: current_elem * -contw }, speed, function () {

                $("#cont ul").css('width', cont_width + "px");

                $("#cont ul").css('marginLeft', 0);

                $("#cont ul li:last").remove();

            });

            current_elem = 0;

        }

        else $("#cont ul").animate({ marginLeft: current_elem * -contw }, { duration: speed });

    });

    $(".slider .arrl").click(function () {

        current_elem--;

        if (current_elem < 0) {


            $("#cont ul li:last").clone().prependTo("#cont .items");

            $("#cont ul").css("marginLeft", (contw * -1) + "px");

            $("#cont ul").animate({ marginLeft: "0px" }, speed, function () {

                $("#cont ul").css('marginLeft', (cont_width - contw) * -1);

                $("#cont ul li:first").remove();

            });

            current_elem = elems.length - 1;

        }

        else $("#cont ul").animate({ marginLeft: current_elem * -contw }, { duration: speed });

    });

    // -- slider

});

