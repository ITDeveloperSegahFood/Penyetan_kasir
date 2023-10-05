$(document).ready( function () {
    $('#btn').on('click', function (e) {
        alert($(this).data("value"));
    });
    $('.list-square.marketplace').on('click', function (e) {
        alert($(this).data("value"));
    })
} );