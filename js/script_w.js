let x, y, v, c, fc, l = 40; ra = [];
let w = "Welcome to my site", wa = w.split("");
let ca = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789!@#$%^&*~`/.,<>?\|]}{[".split("");

//x  | the mouse X axis on page
//y  | the mouse Y axis on page
//v  | the Velocity of letter chosen
//c  | the random Character chosen
//l  | the amount of loops
//w  | the welcoming Word as the header
//wa | the welcoming Word as an Array
//ca | the inital Character Array
//ra | the Random character Array

console.clear()

function scr() {
    for (var a = 0; a < l; a++) {
        (function (i) {
            setTimeout(function () {
                ra = [];
                for (b = 0; b < w.length; b++) {
                    c = ca[Math.floor(Math.random() * ca.length)];
                    ra.push(c)
                }
                if (i + 1 > Math.floor(l * 0.85)) {
                    for (var d = 0; d < w.length; d++) {
                        ra[d] = w[d]
                    };
                } else if (i > Math.floor(l * 0.65)) {
                    for (var d = 0; d < w.length - 1; d++) {
                        ra[d] = w[d]
                    };
                } else if (i > Math.floor(l * 0.45)) {
                    for (var d = 0; d < w.length - 10; d++) {
                        ra[d] = w[d]
                    };
                } else if (i > Math.floor(l * 0.35)) {
                    for (var d = 0; d < w.length - 20; d++) {
                        ra[d] = w[d]
                    };
                } else if (i > Math.floor(l * 0.25)) {
                    for (var d = 0; d < w.length - 30; d++) {
                        ra[d] = w[d]
                    };
                } else if (i > Math.floor(l * 0.2)) {
                    for (var d = 0; d < w.length - 40; d++) {
                        ra[d] = w[d]
                    };
                } else if (i > Math.floor(l * 0.1)) {
                    for (var d = 0; d < w.length - 50; d++) {
                        ra[d] = w[d]
                    };
                };
                document.getElementById("welcome").innerHTML = ra.join("");
            }, Math.floor(a * (2000 / l)))
        })(a);
    }
};

function mse(e) {
    fc = ca[Math.floor(Math.random() * ca.length)];
    x = e.clientX;
    y = e.clientY;
    var el = document.getElementById("letters");
    el.innerHTML = fc;
    el.style.left = x - 2 + "px";
    el.style.top = y - 40 + "px";
};

scr()

