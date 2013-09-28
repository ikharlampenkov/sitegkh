/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 11.11.11
 * Time: 10:00
 * To change this template use File | Settings | File Templates.
 */

$(function () {
    $("#accordion").accordion({
        collapsible: true,
        active: false,
        heightStyle: "content"
    });

    $('div[id^="accordion"]').accordion({
        collapsible: true,
        active: false,
        heightStyle: "content"
    });
});
