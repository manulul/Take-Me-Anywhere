//Knap animation
$(function () {
    $('#knap').click(function () {
        $(this).rotate({
            count: 10
            , duration: 0.3
            , easing: 'ease-out'
        });
    });
});

//Show modal
$('#knap').click(function() {
    setTimeout(function() {
    $(".modal").removeClass('modal');
    $("article").addClass('modalshow');
     },
            1000);
    
});

//Lyd
  var soundID = "Thunder";

      function loadSound () {
        createjs.Sound.registerSound("assets/thunder.ogg", soundID);
      }

      function playSound () {
        createjs.Sound.play(soundID);
      }

   
