//ローディング画面
$(document).ready(function() {
   $("#fakeLoader").fakeLoader({
   timeToHide:1200,
   zIndex:999, 
   spinner:"spinner3",
   bgColor:"#778899", 
 }); 
});

　 
//トップ画像オープン
$(document).ready(function(){
    $('.enter-link').click(function(){
                $('.enter').hide();
                $('.left').animate({
                   "margin-left": "-1000px",
                   "opacity": "0"
                    },"3000");
                $('.right').animate({
                   "left": "100%",
                   "opacity": "0"
                    },"3500");
                setTimeout(function(){
                    window.location.href="gallery.html"
                },3000);
               });
});


//lightbox
$(document).ready(function() {
	$('[data-fancybox]').fancybox();
});



//pagetop
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 300) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});