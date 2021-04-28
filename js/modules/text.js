// import * as p5 from './p5.js';
// import fonts from '/fonts/Manrope-Bold.ttf'

// let font; let points;
// let points1, points2, points3, points4, points5;
// let array = new Array;
// function setup(setup) {
//     setup.preload = () => {
//         font = setup.loadFont(fonts);
//     }
//     setup.setup = () => {
//         let cnv = setup.createCanvas(window.innerWidth, window.innerHeight)
//         cnv.position(0,200,'absolute')
//         myFunc(points1, 'L', 0)
//         myFunc(points2, 'o', 80)
//         myFunc(points3, 'r', 160)
//         myFunc(points4, 'e', 220)
//         myFunc(points5, 'm', 300)
//         function myFunc(value, letter, x) {
//             value = font.textToPoints(letter, x, 100, 100, {
//                 sampleFactor: 2,
//                 simplifyThreshold: 0
//             })
//             array.push(value)
//         }
//     }
//     setup.draw = () => {
//         setup.background('#ffffff')
//         setup.fill('#000000')
//         setup.noStroke()
//         array.forEach(points => {
//             points.forEach(x => {
//                 const distance = setup.createVector(x.x - setup.mouseX, x.y - setup.mouseY);
//                 const distortion = distance.mult(8/ distance.mag())
//                 setup.circle(x.x + distortion.x, x.y + distortion.y, 1)
//             })
//             setup.fill('#000')
//             setup.noStroke()
//             setup.beginShape()
//             points.forEach(x => {
//                 const distance = setup.createVector(x.x - setup.mouseX, x.y - setup.mouseY);
//                 const distortion = distance.mult(8/ distance.mag())
//                 setup.vertex(x.x + distortion.x, x.y + distortion.y)
//             })
//             setup.endShape()
//         })
//     }
// }

// const p = new p5(setup);
