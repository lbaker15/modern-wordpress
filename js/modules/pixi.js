import disp from '/images/displacement1.jpg';
import image1 from '/images/fashion1.jpg';
import image2 from '/images/fashion2.jpg';
import image3 from '/images/fashion3.jpg';
let images = [image1, image2, image3]

const sections = document.querySelectorAll("#canvas")

sections.forEach((section, i) => {
  // console.log(Array.from(section.childNodes)[1].src )
  let originalImageSource;
  if (Array.from(section.childNodes)[1].src) {
    originalImageSource = Array.from(section.childNodes)[1].src;
  } else {
    originalImageSource = image2;
  }
  let _w = window.innerWidth; let _h = window.innerHeight;
  // set up a pixi application
  let app;
  if (section.parentElement === document.querySelector('.imageC')) {
    app = new PIXI.Application({
      width: 750,
      height: 500,
      transparent: true
    })
  } else {
    app = new PIXI.Application({
      width: 350,
      height: 500,
      transparent: true
    })
  }
  // app.renderer.view.style.borderRadius = 100
  // console.log(app.renderer.view.style.borderRadius)
  // add the pixi application to the section tag
  section.appendChild(app.view)
  
  // make a new image
  let image = null
  let displacementImage = null

  // make a new loader
  const loader = new PIXI.loaders.Loader()
  
  // load in our image
  loader.add("image", originalImageSource)
  loader.add("displacement", disp)
  loader.load((loader, resources) => {
    // once the image has loaded, now do things
    image = new PIXI.Sprite(resources.image.texture)
    
    image.x = app.renderer.screen.width/2;
    image.y = app.renderer.screen.height/2;
    image.width = app.renderer.screen.width + 50;
    image.height = app.renderer.screen.height + 50;
    image.interactive = true;
    
    image.anchor.x = 0.5
    image.anchor.y = 0.5

    displacementImage = new PIXI.Sprite(resources.displacement.texture)
    displacementImage.width = section.offsetWidth/0.8;
    displacementImage.height = section.offsetHeight/0.8;
    displacementImage.texture.baseTexture.wrapMode = PIXI.WRAP_MODES.REPEAT
    
    // add the image to the app
    app.stage.addChild(image)
  })
  
  let currentX = 0
  let aimX = 0
  let currentY = 0
  let aimY = 0
  
  section.addEventListener('mouseover', () => {
      app.stage.addChild(displacementImage)
      image.filters = [
        new PIXI.filters.DisplacementFilter(displacementImage, 40),
      ]
  })
  section.addEventListener('mouseout', () => {
    app.stage.removeChild(displacementImage)
    image.filters = []
    currentX = 0
    aimX = 0
    currentY = 0
    aimY = 0
  })

  // now i want to listen to mousemove
  section.addEventListener("mousemove", function (event) {
    let values = section.getBoundingClientRect();
    let {left, width, top, height, x} = values;
    aimX = ( (left + width/2) - (event.clientX)) / 1.5
    aimY = ( (top + height/2) - event.clientY) / 1.5
  })
  
  // lets make an animation in Javascript
  let scroll = false;
  const animate = function () {
    const diffX = (aimX - currentX)/3;
    const diffY = (aimY - currentY)/3;
    currentX = currentX + (diffX * 0.05)
    currentY = currentY + (diffY * 0.05)
    // console.log(diffX, currentX)
    if (displacementImage) {
      displacementImage.x = currentX
      displacementImage.y = displacementImage.y + 1 + (diffY * 0.01)
    }
    requestAnimationFrame(animate)
  }
  animate()
  if (section.parentElement === document.querySelector('.imageC')) {
    let timer;
    window.addEventListener('scroll', (e) => {
      scroll = true;
      clearTimeout(timer)
      app.stage.addChild(displacementImage)
      image.filters = [
        new PIXI.filters.DisplacementFilter(displacementImage, 10),
      ]
      aimX = window.scrollY*5; aimY = window.scrollY*5;
      console.log(window.scrollY)
      timer = setTimeout(() => {
        app.stage.removeChild(displacementImage)
        image.filters = []
      }, 2000)
    })

  }
})

