
$(document).ready(function () {
    

  $("#owl-carousel").owlCarousel({
    loop: true, /* Allows infinite scrolling */
    margin: 32, /* Adds spacing between cards */
    nav: true, /* Shows previous and next arrows */
    dots: false,
    autoplay: false,
    smartSpeed: 2000,
    center:true,
    autoplayTimeout: 4000,
    navText: [
      '<span class="custom-prev"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg></span>',
      '<span class="custom-next"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg></span>'
    ],
    responsive: {
    0: {
      items: 1, 
      center:false,
      /* Shows 1 card on small screens */
    },
    768: {
      items: 2,
      center:false,
       /* Shows 2 cards on medium screens */
    },
    1024: {
      items: 3, /* Shows 3 cards on large screens */
    },
    },
  });
});

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
  ".fz_core_text",
  {
    opacity: 0.5,
    y: 200,
    scale: 0.7,
    //rotateX: "10deg",
  },
  {
    opacity: 1,
    y: 0,
    scale: 1,
    //rotateX: "0deg",
    scrollTrigger: {
      trigger: ".fz_core_text",
      start: "top bottom",
      end: "bottom bottom",
      scrub: 1,
    },
  }
);
// product intro
let textElem = document.querySelector(".product_intro_text");
gsap.to(".typing_text", {
  text: {
    value: textElem.innerText,
  },
  scrollTrigger: {
    trigger: ".dd",
    start: "bottom bottom",
    end: "center center",
    scrub: 1,
    markers: false,
  },
});

// Hash Transition

gsap.registerPlugin(Flip, ScrollTrigger);

const bar = document.querySelector(".hash_bar");
const bar_sections = gsap.utils.toArray(".hash_tag_con");
const contents = gsap.utils.toArray(".hash_content");
let flipTween;
let hash_sm = gsap.matchMedia();
let onStart_font_size = '', onComplete_font_size = '';

hash_sm.add("(min-width: 1200px)", () => {
  onStart_font_size = '8rem'
  onComplete_font_size = '60px';
});

// Flip animation for snapping effect
const doFlip = (target) => {
  flipTween && flipTween.kill();
  const state = Flip.getState(bar);
  target.appendChild(bar);
  flipTween = flipTween = Flip.from(state, { 
    duration: 1, 
    ease: "power1.inOut",
    rotationY: "+=360", // Apply a 3D rotation around the Y-axis
    transformPerspective: 10000, // Ensure proper 3D perspective
    onStart: () => {
      // Add color change on start
      gsap.to(bar, { color: "#f7c35f", duration: 1, fontSize: onStart_font_size? onStart_font_size : "5rem",  }); // Change color to red
    },
    onComplete: () => {
      // Reset color after animation completes
      gsap.to(bar, { color: "#3eab90", duration: 1, fontSize: onComplete_font_size ? onComplete_font_size : '30px', }); // Change back to blue
    }
  });
};

// Smoothly move the bar strictly downward while scrolling
bar_sections.forEach((section, i) => {
  const scrollTrigger = ScrollTrigger.create({
    trigger: section,
    start: "top 80%",
    end: "bottom 80%",
    id: i + 1,
    // markers: { indent: 150 * i }, // Debugging markers
    onEnter: () => doFlip(contents[i]),
    onEnterBack: () => doFlip(contents[i]),
    
  });
});


// Product

const details = gsap.utils.toArray(".fz_product_panel");
const photos = gsap.utils.toArray(".fz_product_image");

gsap.set(photos, { opacity: 0, scale: 0.1 }); // Set initial scale and opacity

const allPhotos = gsap.utils.toArray(".fz_product_image");

// Create matchMedia instance
let mm = gsap.matchMedia();

// Add a media query for screens at least 600px wide
mm.add("(min-width: 992px)", () => {
  console.log("desktop");

  ScrollTrigger.create({
    trigger: "#panels-container",
    start: "top top",
    end: "bottom bottom",
    pin: ".fz_product_right"
  });

  details.forEach((detail, index) => {
    let headline = detail.querySelector(".fz_subtitle");
    let animation = gsap.timeline()
      // Zoom in and fade in
      .to(photos[index], { 
        opacity: 1, 
        scale: 1.2, 
        duration: 1, 
        ease: "power1.out" 
      })
      // Fade out smoothly while scrolling further
      .to(photos[index], { 
        opacity: 0, 
        scale: 1.2, // Optional zoom out or maintain scale
        duration: 1, 
        ease: "power1.in" 
      });

    ScrollTrigger.create({
      trigger: headline,
      start: "top bottom", // Adjust the start point as needed
      end: "top -40%", 
      animation: animation,
      scrub: true,
      markers: false
    });
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
// Playstore
gsap.fromTo(".fz_playstore2", {
  opacity: 0.5,
  scale: 0.7,
  rotateX: "10deg",
  x: "50vw",  // Start from the right side (off-screen)
}, {
  opacity: 1,
  scale: 1,
  rotateX: "0deg",
  x: "0vw",  // Move to its original position (center)
  scrollTrigger: {
      trigger: ".play_store_section",
      start: "top bottom",      // Start when the section top reaches the bottom of the viewport
      end: "bottom bottom-=10%",  // End when the section bottom is 10% before the bottom of the viewport
      scrub: 1,                 // Sync the animation with the scroll position
  }
});
// FAQ
TweenLite.fromTo("#accordionExample", {
  opacity: 0.5,
  scale: 0.7,
  rotateX: "10deg",
}, {
  opacity: 1,
  scale: 1,
  rotateX: "0deg",
  scrollTrigger: {
      trigger: "#accordionExample",
      start: "top bottom",
      end: "bottom bottom-=10%",
      scrub: 1,
  }
});
// Developers
let sm1 = gsap.matchMedia();

sm1.add("(min-width: 1200px)", () => {
      // Animation for .fz_intergration (left to center)
      gsap.fromTo(".fz_intergration", {
  opacity: 0.5,
  scale: 0.7,
  rotateX: "10deg",
  x: "-10vw",  // Start from left side (off-screen)
}, {
  opacity: 1,
  scale: 1,
  rotateX: "0deg",
  x: "0vw",  // Move to original position (center)
  scrollTrigger: {
    trigger: ".fz_intergration",
    start: "top bottom",  // Starts when the top of the section reaches the bottom of the viewport
    end: "bottom bottom-=10%",  // Ends when the section bottom is 10% before the bottom
    scrub: 1,  // Syncs animation with scroll position
  }
});

// Bottom to top scroll animation for .fz_api
gsap.fromTo(".fz_api", {
  opacity: 0.5,
  scale: 0.7,
  rotateX: "10deg",
  y: "10vh",  // Start 30% of viewport height below (off-screen)
}, {
  opacity: 1,
  scale: 1,
  rotateX: "0deg",
  y: "0",  // Move to original position (center)
  scrollTrigger: {
    trigger: ".fz_api",
    start: "top bottom",  // Start when the bottom of the element reaches the bottom of the viewport
    end: "bottom bottom-=10%",  // End when the top of the element reaches the top of the viewport
    scrub: 1,  // Sync the animation with scroll position
  }
});

// Animation for .fz_webhook (right to center)
gsap.fromTo(".fz_webhook", {
  opacity: 0.5,
  scale: 0.7,
  rotateX: "10deg",
  x: "10vw",  // Start from right side (off-screen)
}, {
  opacity: 1,
  scale: 1,
  rotateX: "0deg",
  x: "0vw",  // Move to original position (center)
  scrollTrigger: {
    trigger: ".fz_webhook",
    start: "top bottom",  // Starts when the section top reaches the bottom of the viewport
    end: "bottom bottom-=10%",  // Ends when the section bottom is 10% before the bottom
    scrub: 1,  // Syncs animation with scroll position
  }
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

//Typing

const code = `
const finzor = require('finzor')('fz_test_BQokikJOvBi2Hl4olfQ2');
await finzor.paymentIntents.create({
  amount: 2000,
  currency: 'usd'
});
`;

const editor = CodeMirror.fromTextArea(document.getElementById('code'), {
  lineNumbers: true,
  mode: 'javascript',
  theme: 'default',
  readOnly: true
});

const typingSound = document.getElementById('typing-sound');
let index = 0;
let typingInterval;
let isTyping = false;

function playTypingSound() {
  if (typingSound.paused) {
    typingSound.currentTime = 0;
    typingSound.play();
  }
}

function stopTypingSound() {
  typingSound.pause();
  typingSound.currentTime = 0;
}

function startTyping() {
  if (isTyping) return; // Prevent multiple intervals
  isTyping = true;

  playTypingSound();
  typingInterval = setInterval(() => {
    if (index < code.length) {
      editor.setValue(code.slice(0, index));
      index++;
    } else {
      clearInterval(typingInterval);
      typingInterval = null;
      stopTypingSound();

      // Reset index and restart after a short delay
      setTimeout(() => {
        if (isTyping) {
          index = 0;
          startTyping();
        }
      }, 1000); // Adjust delay before restarting
    }
  }, 100); // Adjust typing speed
}

function stopTyping() {
  if (typingInterval) {
    clearInterval(typingInterval); // Stop typing animation
    typingInterval = null;
  }
  stopTypingSound(); // Stop typing sound
  index = 0; // Reset typing index
  editor.setValue(''); // Clear the editor
  isTyping = false; // Mark as not typing
}

// IntersectionObserver to start/stop typing
const observer_1 = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      startTyping(); // Start typing when visible
    } else {
      stopTyping(); // Stop typing when not visible
    }
  });
});

// Observe the container of the CodeMirror editor
observer_1.observe(document.querySelector('#code').closest('div'));
// Testimonial
// const testimonial_items = document.querySelectorAll(".fz_testimonial_item");

// function clearActiveImage() {
//   testimonial_items.forEach(function (item) {
//     item.classList.remove("active");
//   });
// }

// testimonial_items.forEach(function (item, index) {
//   item.onclick = function () {
//     event.stopPropagation(); //important to not call the clearActiveImage() on every click
//     if (testimonial_items[index].classList.contains("active")) {
//       testimonial_items[index].classList.remove("active");
//     } else {
//       clearActiveImage(index);
//       testimonial_items[index].classList.add("active");
//     }
//   };
// });

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
          // console.log("Audio playback was blocked by the browser:", error);
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

//FAQ Active class
$('.accordion-button').on('click', function() {
  // Add 'active' class to the clicked accordion item
  $(this).closest('.accordion-item').toggleClass('active'); 
  
  // Optionally, close other accordion items
  $('.accordion-item').not($(this).closest('.accordion-item')).removeClass('active');
});


// caurosal section

// document.addEventListener("click", function (event) {
//   // Check if the clicked element is a "Read More" button
//   if (event.target.classList.contains("read-more-btn")) {
//     const button = event.target;
//     const text = button.previousElementSibling; // Select the <p> element
//     text.classList.toggle("expanded");

//     // Toggle text and class
//     if (text.classList.contains("expanded")) {
//       button.textContent = "Read less";
//       button.classList.add("less"); // Add "less" class
//     } else {
//       button.textContent = "Read more";
//       button.classList.remove("less"); // Remove "less" class
//     }
//   }
// });

// Lottie animation assets files
document.addEventListener("DOMContentLoaded", function () {
  // Load the Lottie animation
  lottie.loadAnimation({
    container: document.getElementById('lottie-animation'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/Finzor-Dashboard-V2.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('lottie-animation1'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/mouse-down.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('uipizor-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/upizor-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('finops360-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/finops360-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('finzro-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/finzro-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('finlyticz-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/finlyticz-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-core1-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-core1-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-core2-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-core2-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-core3-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-core3-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-pay1-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-pay1-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-pay2-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-pay2-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-pay3-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-pay3-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-neo1-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-neo1-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-neo2-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-neo2-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-neo3-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-neo3-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-upi1-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-upi1-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-upi2-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-upi2-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('feature-upi3-icon'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/feature-upi3-icon.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('api-dev'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/api-dev.json' // Path to the Lottie JSON file
  });
  lottie.loadAnimation({
    container: document.getElementById('faq-animate'), // HTML container for the animation
    renderer: 'svg',      // Render as SVG
    loop: true,           // Animation will loop continuously
    autoplay: true,       // Animation will play automatically
    path: './assets/json/faq-animate.json' // Path to the Lottie JSON file
  });
  document.querySelectorAll('.finbankz-product').forEach((container) => {
    lottie.loadAnimation({
      container: container, // HTML container for the animation
      renderer: 'svg',      // Render as SVG
      loop: true,           // Animation will loop continuously
      autoplay: true,       // Animation will play automatically
      path: './assets/json/product-1.json' // Path to the Lottie JSON file
    });
  });
  document.querySelectorAll('.upizor-product').forEach((container) => {
    lottie.loadAnimation({
      container: container, // HTML container for the animation
      renderer: 'svg',      // Render as SVG
      loop: true,           // Animation will loop continuously
      autoplay: true,       // Animation will play automatically
      path: './assets/json/product-2.json' // Path to the Lottie JSON file
    });
  });
  document.querySelectorAll('.finops360-product').forEach((container) => {
    lottie.loadAnimation({
      container: container, // HTML container for the animation
      renderer: 'svg',      // Render as SVG
      loop: true,           // Animation will loop continuously
      autoplay: true,       // Animation will play automatically
      path: './assets/json/product-3.json' // Path to the Lottie JSON file
    });
  });
  document.querySelectorAll('.finzro-product').forEach((container) => {
    lottie.loadAnimation({
      container: container, // HTML container for the animation
      renderer: 'svg',      // Render as SVG
      loop: true,           // Animation will loop continuously
      autoplay: true,       // Animation will play automatically
      path: './assets/json/product-4.json' // Path to the Lottie JSON file
    });
  });
  document.querySelectorAll('.finlyticz-product').forEach((container) => {
    lottie.loadAnimation({
      container: container, // HTML container for the animation
      renderer: 'svg',      // Render as SVG
      loop: true,           // Animation will loop continuously
      autoplay: true,       // Animation will play automatically
      path: './assets/json/product-5.json' // Path to the Lottie JSON file
    });
  });
});
