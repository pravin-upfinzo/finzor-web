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