$(function () {

	$('#menu-img,#garrote-menu').click(function(){
		$('#navbar,#move').toggleClass('mostrar');

	});

    $('#slides').superslides({
        animation: 'fade',
        play: 5000,
        animation_speed:5000
    });

    $("#video-intro").click(function(){

        $(this).fadeOut(2000, function () {
            $("#video-intro").remove();
        });
    });



    $("#seccion1").smoove({
        moveY   : '100px',
        opacity : 10
    });


    $("#seccion3").smoove({
        moveY   : '100px',
        opacity : 0
    });

    $("#seccion4,#seccion5").smoove({
            moveX: '100px'

    });


});

$(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


