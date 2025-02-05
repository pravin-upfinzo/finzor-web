// Page loader
$( document ).ready(function() {
    
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

$(window).on('load', function() {
    setTimeout(function() {
        $('.hero').fadeIn();
    }, 500);
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
      $(".menu > li").off("mouseenter mouseleave").click(function (e) {
        e.stopPropagation();
        console.log('Menu clicked');
        $(this).children(".submenu-wrapper").stop(true, true).slideToggle();
      });
  
      $(".submenu > li").click(function (e) {
        e.stopPropagation();
        $(this).children(".inner-submenu").stop(true, true).slideToggle();
      });
    } else {
      $(".menu > li.dropdown").hover(
        function () {
          // Append blur background
          if ($('#menu-blur-bg').length === 0) {
            $('body').append('<div id="menu-blur-bg"></div>');
          }
          $("#menu-blur-bg").fadeIn(200);
          
          $(this).children(".submenu-wrapper").stop(true, true).fadeIn(200);
        },
        function () {
          $("#menu-blur-bg").fadeOut(200, function () {
            $(this).remove(); // Remove after fade out
          });
          
          $(this).children(".submenu-wrapper").stop(true, true).fadeOut(200);
        }
      );
  
      $(".submenu-wrapper .submenu > li").hover(
        function () {
          $(this).children(".inner-submenu").stop(true, true).fadeIn(200);
          $(this).addClass("active-submenu");
        },
        function () {
          $(this).children(".inner-submenu").stop(true, true).fadeOut(200);
          $(this).removeClass("active-submenu");
        }
      );
    }
  });
  
