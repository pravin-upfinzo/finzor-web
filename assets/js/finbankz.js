
// Json Lottie
document.addEventListener("DOMContentLoaded", function () {
    // Load the Lottie animation
    // document.querySelectorAll(".finbankz-corenexus").forEach((container) => {
    //     lottie.loadAnimation({
    //         container: container, // HTML container for the animation
    //         renderer: "svg", // Render as SVG
    //         loop: true, // Animation will loop continuously
    //         autoplay: true, // Animation will play automatically
    //         path: "./assets/json/product-inner-page/finbankz-corenexus.json", // Path to the Lottie JSON file
    //     });
    // });
    // // Load the Lottie animation
    // document.querySelectorAll(".finbankz-mobfinz").forEach((container) => {
    //     lottie.loadAnimation({
    //         container: container, // HTML container for the animation
    //         renderer: "svg", // Render as SVG
    //         loop: true, // Animation will loop continuously
    //         autoplay: true, // Animation will play automatically
    //         path: "./assets/json/product-inner-page/finbankz-mobfinz.json", // Path to the Lottie JSON file
    //     });
    // });
    // // Load the Lottie animation
    // document.querySelectorAll(".finbankz-neo").forEach((container) => {
    //     lottie.loadAnimation({
    //         container: container, // HTML container for the animation
    //         renderer: "svg", // Render as SVG
    //         loop: true, // Animation will loop continuously
    //         autoplay: true, // Animation will play automatically
    //         path: "./assets/json/product-inner-page/finbankz-neo.json", // Path to the Lottie JSON file
    //     });
    // });
    // // Load the Lottie animation
    // document.querySelectorAll(".finbankz-webvault").forEach((container) => {
    //     lottie.loadAnimation({
    //         container: container, // HTML container for the animation
    //         renderer: "svg", // Render as SVG
    //         loop: true, // Animation will loop continuously
    //         autoplay: true, // Animation will play automatically
    //         path: "./assets/json/product-inner-page/finbankz-webvault.json", // Path to the Lottie JSON file
    //     });
    // });
    // Load the Lottie animation
    document.querySelectorAll(".upizor-payunity").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/upizor-payunity.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".upizor-upi-switch").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/upizor-upi-switch.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".upizor-flowgate").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/upizor-flowgate.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".finopz-fininvezt").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/finopz-fininvezt.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".finopz-finalease").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/finopz-finalease.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".finopz-finzrec").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/finopz-finzrec.json", // Path to the Lottie JSON file
        });
    });
});

let finbankz_lottie_path = [
    {name:'corenexus', image:'./assets/json/product-inner-page/finbankz-corenexus.json'},
    {name:'mobfinz', image:'./assets/json/product-inner-page/finbankz-mobfinz.json'},
    {name:'neo', image:'./assets/json/product-inner-page/finbankz-neo.json'},
    {name:'webvault', image:'./assets/json/product-inner-page/finbankz-webvault.json'}
]

// Register GSAP ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Select all sections with Lottie animations
const sections = document.querySelectorAll(".finbankz-lottie");

// Loop through each section and set up GSAP + Lottie
sections.forEach((section, index) => {
   const lottieElement = section.querySelector(".finbankz-lottie-animation");
   
   // Initialize Lottie animation
   const animation = lottie.loadAnimation({
     container: lottieElement,
     renderer: "svg",
     loop: true, // Play once per trigger, restart when re-entered
     autoplay: false,
     path: finbankz_lottie_path[index].image,
   });

   // Ensure animation is ready before setting up ScrollTrigger
   animation.addEventListener("DOMLoaded", () => {
     // Create GSAP timeline for smooth transition between sections
     let tl = gsap.timeline({
       scrollTrigger: {
         trigger: section,
         start: "top center",
         end: "bottom center",
         scrub: 1,
        //  markers: true, // Remove in production
         onEnter: () => {
           animation.play();
         },
         onLeave: () => {
           animation.stop();
         },
         onEnterBack: () => {
           animation.play();
         },
         onLeaveBack: () => {
           animation.stop();
         },
       },
     });
   });
 });


 // Animation for .fade-right (left to center)
 gsap.fromTo(
    ".fade-right-hand",
    {
        opacity: 0.5,
        scale: 0.7,
        rotateX: "20deg",
        x: "-20vw", // Start from left side (off-screen)
    },
    {
        opacity: 1,
        scale: 1,
        rotateX: "0deg",
        x: "0vw", // Move to original position (center)
        scrollTrigger: {
            trigger: ".fz_get_in_touch",
            start: "top bottom", // Starts when the top of the section reaches the bottom of the viewport
            end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
            scrub: 1, // Syncs animation with scroll position
        },
    }
);