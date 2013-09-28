/**
 * Created with JetBrains PhpStorm.
 * User: Moris
 * Date: 01.09.13
 * Time: 22:25
 * To change this template use File | Settings | File Templates.
 */

hs.graphicsDir = 'js/highslide/graphics/';
hs.wrapperClassName = 'wide-border';
hs.showCredits = false;

function showTime() {
    var d = new Date();

    var h = d.getHours();
    var m = d.getMinutes();
    var s = d.getSeconds();

    if (h < 10) {
        h = "0" + h;
    }

    if (m < 10) {
        m = "0" + m;
    }

    if (s < 10) {
        s = "0" + s;
    }

    $("#clock span").html(h + ":" + m + ":" + s);
}

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
    $("li.parent").mouseenter(function () {
        $(this).find(".level2").show();
    });

    $("li.parent").mouseleave(function () {
        $(this).find(".level2").hide();
    });

    showTime();
    setInterval(showTime, 1000);

    $('input, textarea').placeholder();
});
