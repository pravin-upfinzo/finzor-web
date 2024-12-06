// gsap.registerPlugin(ScrollTrigger);

// gsap.fromTo(".fz_dashboard_img", 
//     { 
//         width: "30%", 
//         height: "30%", 
//         scale: 1, // Initial scale
//         y: 0, // Initial vertical position
//     }, 
//     { 
//         width: "100vw", // Final width
//         height: "100vh", // Final height
//         scale: 1, // Keep scale at 1 for consistency
//         y: "-10vh", // Center vertically within the viewport
//         transformOrigin: "center center", // Ensure scaling happens from the center
//         duration: 0.2, // Shorter duration for a faster animation
//         ease: "power2.inOut", // Smooth easing function
//         scrollTrigger: {
//             trigger: ".fz_dashboard", // Trigger element
//             start: "top 100%", // Animation starts when the top of the trigger hits the bottom of the viewport
//             end: "bottom bottom", // Animation ends when the bottom of the trigger hits the bottom of the viewport
//             scrub: true, // Smooth animation linked to the scroll
//         }
//     }
// );

/* Feature */


let sm = gsap.matchMedia();

sm.add("(min-width: 1130px)", () => {
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
    }
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
      markers: false
    }
  });

  /* FOR LARGE DEVICE */

  // add animations and labels to the timeline

  tl.set(".panel__options > span:nth-child(1)", {
    borderBottom: "1px solid #3EAB90"
  });

  tl.to(
    ".panel__card--one",
    { scale: 0.95, duration: 0.3, transformOrigin: "top" },
    "b"
  );

  // second card move

  tl.set(".panel__options > span:nth-child(1)", {
    borderBottom: "1px solid transparent"
  });

  tl.set(".panel__options > span:nth-child(2)", {
    borderBottom: "1px solid #3EAB90"
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
    borderBottom: "1px solid transparent"
  });

  tl.set(".panel__options > span:nth-child(3)", {
    borderBottom: "1px solid #3EAB90"
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
    { borderBottom: "1px solid #3EAB90" },
    "f"
  );
  tl.set(
    ".panel__options > span:nth-child(3)",
    { borderBottom: "1px solid transparent" },
    "f"
  );

  tl.from(".panel__card--four", { y: () => window.innerHeight });

  tl.set(
    ".panel__options > span:last-child",
    { borderBottom: "1px solid #3EAB90" },
    "e"
  );
  tl.set(
    ".panel__options > span:nth-child(3)",
    { borderBottom: "1px solid transparent" },
    "e"
  );

  function gotSeek(id) {
    gsap.to(window, {
      duration: 0.3,
      scrollTo: { y: tl.scrollTrigger.labelToScroll(id) + 10 },
      ease: Power2.easeOut
    });
    tl.tweenTo(id, {
      duration: 0.3,
      onComplete: function () {},
      ease: Power2.easeOut
    });
  }

  const links = gsap.utils.toArray(".panel__options span");

  links.forEach((link) => {
    link.addEventListener("click", () => {
      gotSeek(link.dataset.target);
    });
  });
});



$(function() {
            function animationStart() {
                $('#container').addClass('fin');
            }
    
            function resetAnimation() {
                $('#container').removeClass('fin');
                setTimeout(animationStart, 50); // Short delay to allow CSS to reset
            }
    
            // Start the animation immediately
            animationStart();
    
            // Total duration of the animation
            const animationDuration = 7500; // 7.5 seconds
    
            // Use setInterval to reset the animation after it finishes
            setInterval(resetAnimation, animationDuration);
        });
        window.addEventListener('load', function () {
        setTimeout(function () {
          // Hide the loader and show the content
          document.getElementById('loader').style.display = 'none';
          document.getElementById('content').style.display = 'block';
        }, 3000); // Wait for 3 seconds before showing content
      });