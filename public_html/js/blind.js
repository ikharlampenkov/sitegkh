$(document).ready(function () {
    $('.site-font-resize').on('click', 'a', function () {
        var currentClass = $(this).attr('class');
        $('body').removeClass('small medium large').addClass(currentClass);
        setParameter('size', currentClass);
        return false;
    });

    $('.site-color-change').on('click', 'a', function () {
        var currentClass = $(this).attr('class');
        $('body').removeClass('white black').addClass(currentClass);
        setParameter('color', currentClass);
        return false;
    });
});

function setParameter(type, value) {
    $.ajax({
        url: '?page=change-parameter',
        method: 'get',
        dataType: 'json',
        data: {'type': type, value: value},
        success: function (data) {
            console.log(data);
        }
    });
}