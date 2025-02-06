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
  
// Baneer Script
document.querySelectorAll('.hero_sec_dot').forEach((container) => {
  const CANVAS = container,

  CTX = CANVAS.getContext("2d"),
  W = window.innerWidth,
  H = window.innerHeight,
  XO = W / 2,
  YO = H / 2,
  NUM_PARTICLES = 400,
  MAX_Z = 2,
  MAX_R = 1,
  Z_SPD = 1,
  PARTICLES = [];

class Particle {
  constructor(x, y, z) {
      this.pos = new Vector(x, y, z);
      const X_VEL = 0,
          Y_VEL = 0,
          Z_VEL = -Z_SPD;
      this.vel = new Vector(X_VEL, Y_VEL, Z_VEL);
      this.vel.scale(0.005);
      this.fill = "#3EAB90";
      this.stroke = this.fill;
  }

  update() {
      this.pos.add(this.vel);
  }

  render() {
      const PIXEL = to2d(this.pos),
          X = PIXEL[0],
          Y = PIXEL[1],
          R = ((MAX_Z - this.pos.z) / MAX_Z) * MAX_R;

      if (X < 0 || X > W || Y < 0 || Y > H) this.pos.z = MAX_Z;

      this.update();
      CTX.beginPath();
      CTX.fillStyle = this.fill;
      CTX.strokeStyle = this.stroke;
      CTX.arc(X, PIXEL[1], R, 0, Math.PI * 2);
      CTX.fill();
      CTX.stroke();
      CTX.closePath();
  }
}

class Vector {
  constructor(x, y, z) {
      this.x = x;
      this.y = y;
      this.z = z;
  }

  add(v) {
      this.x += v.x;
      this.y += v.y;
      this.z += v.z;
  }

  scale(n) {
      this.x *= n;
      this.y *= n;
      this.z *= n;
  }
}

function to2d(v) {
  const X_COORD = v.x - XO,
      Y_COORD = v.y - YO,
      PX = X_COORD / v.z,
      PY = Y_COORD / v.z;
  return [PX + XO, PY + YO];
}

function render() {
  for (let i = 0; i < PARTICLES.length; i++) {
      PARTICLES[i].render();
  }
}

function loop() {
  requestAnimationFrame(loop);

  // Clear and render background
  CTX.clearRect(0, 0, W, H);
  //const backgroundImage = new Image();
  // backgroundImage.src = "image/Dotted.svg";
  // backgroundImage.onload = () => {
  // 	CTX.globalAlpha = 1;
  // 	CTX.drawImage(backgroundImage, 0, 0, W, H);
  // };

  // Semi-transparent overlay for sparkle effect
  // CTX.fillStyle = "rgba(0, 0, 0, 0.15)";
  // CTX.fillRect(0, 0, W, H);

  // Render particles
  render();

  // Ensure Three.js renders globe properly
  if (typeof world !== "undefined") {
      world.renderer.render(world.scene, world.camera);
  }
}

function createParticles() {
  for (let i = 0; i < NUM_PARTICLES; i++) {
      const X = Math.random() * W,
          Y = Math.random() * H,
          Z = Math.random() * MAX_Z;
      PARTICLES.push(new Particle(X, Y, Z));
  }
}

function init() {
  CANVAS.width = W;
  CANVAS.height = H;
  createParticles();
  loop();
}
init();
  });