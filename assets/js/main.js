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

gsap.registerPlugin(ScrollTrigger);
let sections = gsap.utils.toArray(".fz_product_panel");
gsap.to(sections, {
	xPercent: -100 * (sections.length - 1),
	ease: "none",
	scrollTrigger: {
		trigger: ".panels-container",
		pin: true,
		scrub: 2,
		snap: {
			snapTo: 1 / (sections.length - 1),
			duration: {min: 0.1, max: 3}
		},
		end: () => "+=" + document.querySelector("#panels-container").offsetWidth * 10
	}
});

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
		const X_VEL = 0, Y_VEL = 0, Z_VEL = -Z_SPD;
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
			R = (MAX_Z - this.pos.z) / MAX_Z * MAX_R;

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
	const backgroundImage = new Image();
	backgroundImage.src = "image/Dotted.svg";
	backgroundImage.onload = () => {
		CTX.globalAlpha = 1;
		CTX.drawImage(backgroundImage, 0, 0, W, H);
	};

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
		const X = Math.random() * W, Y = Math.random() * H, Z = Math.random() * MAX_Z;
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


// globe 

class World {
	renderer;
	scene;
	camera;
	molecule;

	constructor() {
		this.build();

		window.addEventListener("resize", this.resize.bind(this));

		this.animate = this.animate.bind(this);
		this.animate();
	}

	build() {
		this.scene = new THREE.Scene();
		this.camera = new THREE.PerspectiveCamera(
			75,
			window.innerWidth / window.innerHeight,
			0.1,
			1000
		);
		this.camera.position.z = 3;

		this.renderer = new THREE.WebGLRenderer({
			alpha: true, // Ensures transparency
			antialias: true,
		});
		this.renderer.setPixelRatio(window.devicePixelRatio);
		this.renderer.setSize(window.innerWidth, window.innerHeight);

		// Attach Three.js canvas to a specific container
		const globeContainer = document.querySelector(".globe-container");
		globeContainer.appendChild(this.renderer.domElement);

		this.molecule = new Molecule();
		this.scene.add(this.molecule);
	}


	resize() {
		const w = window.innerWidth;
		const h = window.innerHeight;
		this.camera.aspect = w / h;
		this.camera.updateProjectionMatrix();
		this.renderer.setSize(w, h);
	}

	animate() {
		requestAnimationFrame(this.animate);

		const time = performance.now() * 0.001;

		this.molecule.animate(time);

		this.renderer.render(this.scene, this.camera);
	}
}

class Molecule extends THREE.Object3D {
	material;
	geometry;
	mesh;
	radius = 1.3;
	detail = 40;
	particleSizeMin = 0.01;
	particleSizeMax = 0.08;

	constructor() {
		super();

		this.build();
	}

	build() {
		this.dot();

		this.geometry = new THREE.IcosahedronBufferGeometry(1, this.detail);

		this.material = new THREE.PointsMaterial({
			map: this.dot(),
			blending: THREE.AdditiveBlending,
			color: 0x67CBAF,
			depthTest: false
		});

		this.setupShader(this.material);

		this.mesh = new THREE.Points(this.geometry, this.material);
		this.add(this.mesh);
	}

	dot(size = 32, color = "#3EAB90") {
		const sizeH = size * 0.5;

		const canvas = document.createElement("canvas");
		canvas.width = canvas.height = size;

		const ctx = canvas.getContext("2d");

		const circle = new Path2D();
		circle.arc(sizeH, sizeH, sizeH, 0, 2 * Math.PI);

		ctx.fillStyle = color;
		ctx.fill(circle);

		// debug canvas
		// canvas.style.position = "fixed"
		// canvas.style.top = 0
		// canvas.style.left = 0
		// document.body.appendChild(canvas)

		return new THREE.CanvasTexture(canvas);
	}

	setupShader(material) {
		material.onBeforeCompile = (shader) => {
			shader.uniforms.time = { value: 0 };
			shader.uniforms.radius = { value: this.radius };
			shader.uniforms.particleSizeMin = { value: this.particleSizeMin };
			shader.uniforms.particleSizeMax = { value: this.particleSizeMax };
			shader.vertexShader =
				"uniform float particleSizeMax;\n" + shader.vertexShader;
			shader.vertexShader =
				"uniform float particleSizeMin;\n" + shader.vertexShader;
			shader.vertexShader = "uniform float radius;\n" + shader.vertexShader;
			shader.vertexShader = "uniform float time;\n" + shader.vertexShader;
			shader.vertexShader =
				document.getElementById("webgl-noise").textContent +
				"\n" +
				shader.vertexShader;
			shader.vertexShader = shader.vertexShader.replace(
				"#include <begin_vertex>",
				`
			vec3 p = position;
			float n = snoise( vec3( p.x*.6 + time*0.2, p.y*0.4 + time*0.3, p.z*.2 + time*0.2) );
			p += n *0.4;
  
			// constrain to sphere radius
			float l = radius / length(p);
			p *= l;
			float s = mix(particleSizeMin, particleSizeMax, n);
			vec3 transformed = vec3( p.x, p.y, p.z );
		  `
			);
			shader.vertexShader = shader.vertexShader.replace(
				"gl_PointSize = size;",
				"gl_PointSize = s;"
			);

			material.userData.shader = shader;
		};
	}

	animate(time) {
		this.mesh.rotation.set(0, time * 0.2, 0);
		if (this.material.userData.shader)
			this.material.userData.shader.uniforms.time.value = time;
	}
}

new World();
