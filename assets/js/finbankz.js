
// Json Lottie
document.addEventListener("DOMContentLoaded", function () {
    // Load the Lottie animation
    document.querySelectorAll(".finbankz-corenexus").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/finbankz-corenexus.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".finbankz-mobfinz").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/finbankz-mobfinz.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".finbankz-neo").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/finbankz-neo.json", // Path to the Lottie JSON file
        });
    });
    // Load the Lottie animation
    document.querySelectorAll(".finbankz-webvault").forEach((container) => {
        lottie.loadAnimation({
            container: container, // HTML container for the animation
            renderer: "svg", // Render as SVG
            loop: true, // Animation will loop continuously
            autoplay: true, // Animation will play automatically
            path: "./assets/json/product-inner-page/finbankz-webvault.json", // Path to the Lottie JSON file
        });
    });
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