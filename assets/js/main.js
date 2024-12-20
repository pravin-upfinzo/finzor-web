gsap.registerPlugin(ScrollTrigger);
// 1. Fade out the main text
gsap.to(".texts", {
  opacity: 0, // Fade out the main text
  duration: 1,
  scrollTrigger: {
    trigger: ".features_posibilityies", // Trigger animation when the container enters the viewport
    start: "top 80%", // Start the fade-out when the container reaches 80% of the viewport
    end: "top 40%", // End the fade-out when the container reaches 50% of the viewport
    scrub: true, // Scrub smoothly as you scroll
    markers: false, // Optional: set to true if you want to see scroll trigger markers
  },
});

// 2. Animate the inner text split from left and right
gsap.fromTo(
  ".inner-text .left",
  {
    opacity: 0,
    x: "0", // Starting from off-screen to the left
  },
  {
    opacity: 1,
    x: "-5vw", // Move to the center
    duration: 1,
    scrollTrigger: {
      trigger: ".features_posibilityies",
      start: "top 60%", // Start showing the inner text when the container reaches 60% of the viewport
      end: "top 0%", // End the inner text animation when the container reaches 40% of the viewport
      scrub: true, // Scrub smoothly with scroll
      markers: false, // Optional: set to true for scroll trigger markers
    },
  }
);

gsap.fromTo(
  ".inner-text .right",
  {
    opacity: 0,
    x: "0", // Starting from off-screen to the right
  },
  {
    opacity: 1,
    x: "5vw", // Move to the center
    duration: 1,
    scrollTrigger: {
      trigger: ".features_posibilityies",
      start: "top 60%", // Start showing the right text when the container reaches 60% of the viewport
      end: "top 0%", // End when the container is near the top
      scrub: true, // Smoothly scrub
      markers: false, // Optional: set to true for scroll trigger markers
    },
  }
);
gsap.fromTo(
  ".inner-text .dd",
  {
    opacity: 0,
    x: "0", // Starting from off-screen to the right
  },
  {
    opacity: 1,
    x: "0", // Move to the center
    duration: 1,
    scrollTrigger: {
      trigger: ".features_posibilityies",
      start: "top 60%", // Start showing the right text when the container reaches 60% of the viewport
      end: "top 0%", // End when the container is near the top
      scrub: true, // Smoothly scrub
      markers: false, // Optional: set to true for scroll trigger markers
    },
  }
);

// Aboutus
TweenLite.fromTo(
  ".fz_core_text img",
  {
    opacity: 0.5,
    scale: 0.7,
    rotateX: "10deg",
  },
  {
    opacity: 1,
    scale: 1,
    rotateX: "0deg",
    scrollTrigger: {
      trigger: ".fz_core_text img",
      start: "top bottom",
      end: "bottom bottom-=10%",
      scrub: 1,
    },
  }
);
// product intro
let textElem = document.querySelector('.text')
gsap.to(".typing_text", {
  text: {
    value: textElem.innerText
  },
  scrollTrigger: {
    trigger: ".dd",
    start: "bottom bottom",
    end: "center center",
    scrub: 1,
    markers: false
  }
});
// Product
let sections = gsap.utils.toArray(".fz_product_panel");
let mobile_view = gsap.matchMedia();

mobile_view.add("(min-width: 1200px)", () => {
  gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: ".panels-container",
      pin: true,
      scrub: 2,
      // snap: {
      //   snapTo: 1 / (sections.length - 1),
      //   duration: { min: 0.1, max: 3 },
      // },
      snap: (progress) => {
        // Custom starting snap position
        if (progress < 0.1) return 0; // Start from the first panel
        return Math.round(progress * (sections.length - 1)) / (sections.length - 1);
        },
      end: () =>
        "+=" + document.querySelector("#panels-container").offsetWidth * 8,
    },
  });
});

/* Feature */
let sm = gsap.matchMedia();

sm.add("(min-width: 1200px)", () => {
  gsap.registerPlugin(ScrollToPlugin);

  /* CARD ANIMATION */

  const images = gsap.utils.toArray(".panel__card");
  const listItems = gsap.utils.toArray(".panel__options span");
  const endTime = 500 * images.length;

  gsap.set(".panel__stack", {
    height: () => {
      const offset = 20; // same as CSS on line 203 --spacer
      const cards = document.querySelectorAll(".panel__card"); // get all cards
      const height = cards[0].offsetHeight; // get the height of the card
      return height + cards.length * offset; // cacludate how heigh the container should be height of card + offset times number of cards.
    },
  });

  let tl = gsap.timeline({
    //  yes, we can add it to an entire timeline!
    scrollTrigger: {
      trigger: ".panel",
      fastScrollEnd: true,
      pin: true, // pin the trigger element while active
      start: "50% 370px", // when the top of the trigger hits the top of the viewport
      //end: () => `${window.innerHeight * 5} 10%`, // end after scrolling 500px beyond the start
      end: `'+=${endTime}px'`,
      pinSpacing: true,
      scrub: 0.2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
      markers: false,
      onUpdate: (self) => {
        const progress = self.progress; // progress value between 0 and 1
        const activeIndex = Math.floor(progress * images.length); // determine active index
        images.forEach((image, index) => {
          if (index === activeIndex) {
            image.classList.add("active");
          } else {
            image.classList.remove("active");
          }
        });

        listItems.forEach((item, index) => {
          if (index === activeIndex) {
            item.classList.add("active");
          } else {
            item.classList.remove("active");
          }
        });
      },
    },
  });
  // Example animations for cards
  images.forEach((image, index) => {
    //tl.to(image, { y: -50, opacity: 1, duration: 0.5 }, index * 0.5);
  });

  /* FOR LARGE DEVICE */

  // add animations and labels to the timeline

  tl.set(".panel__options > span:nth-child(1)", {
    borderBottom: "2px solid #3EAB90",
  });

  tl.to(
    ".panel__card--one",
    { scale: 0.95, duration: 0.3, transformOrigin: "top" },
    "b"
  );

  // second card move

  tl.set(".panel__options > span:nth-child(1)", {
    borderBottom: "2px solid transparent",
  });

  tl.set(".panel__options > span:nth-child(2)", {
    borderBottom: "2px solid #3EAB90",
  });

  tl.from(".panel__card--two", { y: () => window.innerHeight });

  tl.to(
    ".panel__card--two",
    { scale: 0.95, duration: 0.3, transformOrigin: "top" },
    "c"
  );

  tl.to(
    ".panel__card--one",
    { scale: 0.9, duration: 0.3, transformOrigin: "top" },
    "c"
  );

  // third card move

  tl.set(".panel__options > span:nth-child(2)", {
    borderBottom: "2px solid transparent",
  });

  tl.set(".panel__options > span:nth-child(3)", {
    borderBottom: "2px solid #3EAB90",
  });

  tl.from(".panel__card--three", { y: () => window.innerHeight });

  tl.to(
    ".panel__card--one",
    { scale: 0.85, duration: 0.3, transformOrigin: "top" },
    "d"
  );

  tl.to(
    ".panel__card--two",
    { scale: 0.9, duration: 0.3, transformOrigin: "top" },
    "d"
  );

  tl.to(
    ".panel__card--three",
    { scale: 0.95, duration: 0.3, transformOrigin: "top" },
    "d"
  );

  // fourth card move

  tl.set(
    ".panel__options > span:last-child",
    { borderBottom: "2px solid #3EAB90" },
    "f"
  );
  tl.set(
    ".panel__options > span:nth-child(3)",
    { borderBottom: "2px solid transparent" },
    "f"
  );

  tl.from(".panel__card--four", { y: () => window.innerHeight });

  tl.set(
    ".panel__options > span:last-child",
    { borderBottom: "2px solid #3EAB90" },
    "e"
  );
  tl.set(
    ".panel__options > span:nth-child(3)",
    { borderBottom: "2px solid transparent" },
    "e"
  );

  function gotSeek(id) {
    gsap.to(window, {
      duration: 0.3,
      scrollTo: { y: tl.scrollTrigger.labelToScroll(id) + 10 },
      ease: Power2.easeOut,
    });
    tl.tweenTo(id, {
      duration: 0.3,
      onComplete: function () {},
      ease: Power2.easeOut,
    });
  }

  const links = gsap.utils.toArray(".panel__options span");

  links.forEach((link) => {
    link.addEventListener("click", () => {
      gotSeek(link.dataset.target);
    });
  });
});

// Counter
// var counted = 0;
// $(window).scroll(function() {

// 	var oTop = $('#counter').offset().top - window.innerHeight;
// 	if (counted == 0 && $(window).scrollTop() > oTop) {
// 		$('.count').each(function() {
// 		var $this = $(this),
// 			countTo = $this.attr('data-count');
// 		$({
// 			countNum: $this.text()
// 		}).animate({
// 			countNum: countTo
// 			},

// 			{

// 			duration: 2000,
// 			easing: 'swing',
// 			step: function() {
// 				$this.text(Math.floor(this.countNum));
// 			},
// 			complete: function() {
// 				$this.text(this.countNum);
// 				//alert('finished');
// 			}

// 			});
// 		});
// 		counted = 1;
// 	}

// });

function animateCounter(counter) {
  const targetValue = parseInt(counter.dataset.value, 10);
  let current = 0;
  const increment = Math.ceil(targetValue / 100);
  const duration = 2000; // Duration in ms
  const interval = 10;

  // Reset the counter to 0 before animating
  counter.textContent = "0";

  function updateCount() {
    current += increment;
    if (current > targetValue) current = targetValue;
    counter.textContent = current.toLocaleString();
    if (current < targetValue) {
      requestAnimationFrame(updateCount);
    }
  }
  updateCount();
}

// Intersection Observer to trigger animation on visibility
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        document.querySelectorAll(".js-count-up").forEach((counter) => {
          animateCounter(counter);
        });
      }
    });
  },
  { threshold: 0.5 }
); // Trigger when 50% of section is visible

// Observe the target section
observer.observe(document.querySelector("#counter-section"));

// Testimonial
const testimonial_items = document.querySelectorAll(".fz_testimonial_item");

function clearActiveImage() {
  testimonial_items.forEach(function (item) {
    item.classList.remove("active");
  });
}

testimonial_items.forEach(function (item, index) {
  item.onclick = function () {
    event.stopPropagation(); //important to not call the clearActiveImage() on every click
    if (testimonial_items[index].classList.contains("active")) {
      testimonial_items[index].classList.remove("active");
    } else {
      clearActiveImage(index);
      testimonial_items[index].classList.add("active");
    }
  };
});

// window.addEventListener("click", () => {
//   clearActiveImage()
// })

// Audio
document.addEventListener("DOMContentLoaded", function () {
  const audio = document.getElementById("sectionAudio");
  const targetSection = document.getElementById("targetSection");
  // Create an Intersection Observer
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        audio.play().catch((error) => {
          console.log("Audio playback was blocked by the browser:", error);
        });
      } else {
        audio.pause(); // Pause audio when the section is out of view
      }
    });
  });

  // Observe the target section
  observer.observe(targetSection);
});

// Banner script
const CANVAS = document.getElementsByTagName("canvas")[0],
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
