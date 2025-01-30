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

gsap.registerPlugin(ScrollTrigger);

// feature section
let sm1 = gsap.matchMedia();

sm1.add("(min-width: 1200px)", () => {
    // Bottom to top scroll animation for .fade-up
    gsap.fromTo(
        ".fade-up",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "20deg",
            y: "20vh", // Start 30% of viewport height below (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            y: "0", // Move to original position (center)
            scrollTrigger: {
                trigger: ".product_center",
                start: "top bottom", // Start when the bottom of the element reaches the bottom of the viewport
                end: "bottom bottom-=10%", // End when the top of the element reaches the top of the viewport
                scrub: 1, // Sync the animation with scroll position
            },
        }
    );

    // Bottom to top scroll animation for .fade-Down
    gsap.fromTo(
        ".fade-down",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "5deg",
            y: "-10vh", // Start 30% of viewport height below (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            y: "0", // Move to original position (center)
            scrollTrigger: {
                trigger: ".product_center",
                start: "top bottom", // Start when the bottom of the element reaches the bottom of the viewport
                end: "bottom bottom-=10%", // End when the top of the element reaches the top of the viewport
                scrub: 1, // Sync the animation with scroll position
            },
        }
    );

    // Animation for .fade-right (left to center)
    gsap.fromTo(
        ".fade-right",
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
                trigger: ".product_center",
                start: "top bottom", // Starts when the top of the section reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );

    // Animation for .fade-left (right to center)
    gsap.fromTo(
        ".fade-left",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "20deg",
            x: "20vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".product_center",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );

    // Zoom in
    gsap.fromTo(
        ".zoom-in",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "0deg",
            x: "0vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".product_center",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );
    // Zoom in
    gsap.fromTo(
        ".zoom-in_ai_enhance",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "0deg",
            x: "0vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".fz_ai_enhance_sec",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );


    // Zoom in
    gsap.fromTo(
        ".zoom-in-cbs",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "0deg",
            x: "0vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".cbs_sec",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );

    // Zoom in
    gsap.fromTo(
        ".zoom-in-fe",
        {
            opacity: 0.5,
            scale: 0.7,
            rotateX: "0deg",
            x: "0vw", // Start from right side (off-screen)
        },
        {
            opacity: 1,
            scale: 1,
            rotateX: "0deg",
            x: "0vw", // Move to original position (center)
            scrollTrigger: {
                trigger: ".fz_features_sec",
                start: "top bottom", // Starts when the section top reaches the bottom of the viewport
                end: "bottom bottom-=10%", // Ends when the section bottom is 10% before the bottom
                scrub: 1, // Syncs animation with scroll position
            },
        }
    );

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
});

//Product Range

$(document).ready(function () {
    $("#product-range").owlCarousel({
        items: 2,
        margin: 35,
        nav: true /* Shows previous and next arrows */,
        dots: false,
        autoplay: false,
        smartSpeed: 2000,
        autoplayTimeout: 4000,
        navText: [
            '<span class="custom-prev"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg></span>',
            '<span class="custom-next"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100%" height="100%"><path d="M9.293 5.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 12 9.293 6.707a1 1 0 0 1 0-1.414Z"></path></svg></span>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
});

