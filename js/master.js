$(function () {
    $('#knap').click(function () {
        $(this).rotate({
            count: 10
            , duration: 0.3
            , easing: 'ease-out'
        });
    });
});


$('#knap').click(function() {
    setTimeout(function() {
    $(".modal").removeClass('modal');
    $("article").addClass('modalshow');
     },
            1000);
    
});
