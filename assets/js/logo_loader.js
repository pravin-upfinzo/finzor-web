// Page loader
$(window).on('load', function() {
     //Page Loader setup
     let lastLoadedDate = localStorage.getItem("lastLoadedDate");
     let today = new Date().toISOString().split("T")[0];
     if (lastLoadedDate !== today) {
         showLoader();
         localStorage.setItem("lastLoadedDate", today);
     }
 
     function showLoader() {
        $("#page-loader").show();
        
        setTimeout(function() {
            $("#page-loader").fadeOut("slow");
            $('.hero').fadeIn();
        }, 2000);
     }
  }); 
  var btn = $('#scroll_top');
  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
  });
  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
$(document).ready(function () {
  if ($(window).width() <= 991) {
    $(".menu > li").off("mouseenter mouseleave").click(function(e) {
        e.stopPropagation(); // Prevent bubbling of the event
        console.log('Menu clicked');
        $(this).children(".submenu").stop(true, true).slideToggle();
    });

    $(".submenu > li").click(function(e) {
        e.stopPropagation(); // Prevent the click event from bubbling to parent
        $(this).children(".inner-submenu").stop(true, true).slideToggle();
    });
  } else {
    $(".menu > li").hover(
        function() {
            $(this).children(".submenu").stop(true, true).fadeIn(200);
        },
        function() {
            $(this).children(".submenu").stop(true, true).fadeOut(200);
        }
    );
    $(".submenu > li").hover(
        function() {
            $(this).children(".inner-submenu").stop(true, true).fadeIn(200);
        },
        function() {
            $(this).children(".inner-submenu").stop(true, true).fadeOut(200);
        }
    );
  }
});