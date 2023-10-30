//  document.addEventListener('DOMContentLoaded', function() {


 var jqueryScript = document.createElement('script');
 jqueryScript.src = 'https:cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js';
 jqueryScript.type = 'text/javascript';
 document.head.appendChild(jqueryScript);
 console.log('Script cargado');

 var particlesScript = document.createElement('script');
 particlesScript.src = 'https:cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js';
 particlesScript.type = 'text/javascript';
 document.head.appendChild(particlesScript);
 console.log('Script cargado');

 var parallaxScript = document.createElement('script');
 parallaxScript.src = 'https:matthew.wagerfield.com/parallax/deploy/jquery.parallax.js';
 parallaxScript.type = 'text/javascript';
 document.head.appendChild(parallaxScript);
 console.log('Script cargado');




('#parallax').parallax({  /* $('#parallax').parallax({ */
    invertX: true,
    invertY: true,
    scalarX: 15,
    frictionY: .1
});


particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 120,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 5
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": "grab"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 140,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});

// });