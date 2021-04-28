import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger)
let blocks = Array.from(document.querySelectorAll('.wp-block-image'));

blocks.forEach(block => {
    gsap.fromTo(block, {opacity: 0, y: 150}, {
        scrollTrigger: {
            trigger: block,
            start: 'top 70%',
            end: 'top 10%',
            scrub: 2,
            toggleActions: 'restart none none reverse'
        },
        opacity: 1,
        y: 0
    })
})