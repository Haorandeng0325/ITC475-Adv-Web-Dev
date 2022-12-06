let selectedCarsAry = []
let timer = null
let t = null
const startBtn = document.querySelector('#startBtn')
const cars = document.querySelector('.cars')
const num = document.querySelector('.num')
const redlight = document.querySelector('.redlight')
const greenlight = document.querySelector('.greenlight')
const gameplace = document.querySelector('.gameplace')
const result = document.querySelector('.result')
let car = result.querySelector('.car')

let n = 0

function initCar() {
  let html = ''
  for (const car of selectedCarsAry) {
      console.log(car)
      html += `<img src="./img/${car.img}.png" alt="${car.name}" data-speed="${car.speed}" data-img="${car.img}">`
  }
  gameplace.innerHTML = html

}

function hide(ele) {
  ele.style.display = 'none'
}
function show(ele) {
  ele.style.display = 'block'
}

function html(ele, text) {
  ele.innerHTML = text
}

function hideCars() {
  cars.style.left = '-9999px'
  cars.style.top = '-9999px'
}

function showCars() {
  cars.style.left = '50%'
  cars.style.top = '50%'
  const divs = cars.querySelectorAll('div')
  for (let i = 0; i < divs.length; i++) {
    divs[i].className = ''
  }
}


cars.addEventListener('click', function(e) {
  const target = e.target
  if (target.tagName === 'IMG') {
    selectedCarsAry.push({name:target.alt, img: target.dataset.src, speed: Math.floor(Math.random() * 20) + 10})
    target.parentNode.className = 'active'
  }
  e.stopPropagation()
})


function reset() {
    n = 0
    selectedCarsAry = []
    clearInterval(timer)
    clearInterval(t)
    gameplace.innerHTML = ''
    show(redlight)
    hide(greenlight)
    hide(result)

    html(num, '')
    showCars()

}


result.addEventListener('click', function(e) {
    if (e.target.tagName === "SPAN") {
        reset()
    }
})

startBtn.addEventListener('click', function(e) {
  if (selectedCarsAry.length < 2) {
      alert('You must select 2 cars to start the game.')
      return
  }

  if (selectedCarsAry.length > 2) {
      alert('Only 2 cars can be selected, please select again.')
      selectedCarsAry = []
      const divs = cars.querySelectorAll('div')
      for (let i = 0; i < divs.length; i++) {
        divs[i].className = ''
      }
      return
  }
  // hide cars
  hideCars()

  // init selected car
  initCar()



  // 倒计时
  timer = setInterval(function() {
      n++
      if (n === 4) {
          clearInterval(timer)
          html(num, 'BEGIN!')
          setTimeout(function() {
              html(num, '')
          }, 500)
          hide(redlight)
          show(greenlight)

          const imgs = gameplace.querySelectorAll('img')
         
          t = setInterval(function(){
              if (imgs[0].offsetLeft >= 1050) {
                  imgs[0].style.left = '1050px'
                  show(result)
                  car.src = './img/' + imgs[0].dataset.img + '.png'
                  fetch('action.php', {
                    method: 'post',
                    headers: {
                      'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'winner=' + imgs[0].alt
                  }).then(res => {
                    console.log(res)
                  })
                  clearInterval(t)
              }
              if (imgs[1].offsetLeft >= 1050) {
                  imgs[1].style.left = '1050px'
                  show(result)
                 
                  car.src = './img/' +  imgs[1].dataset.img + '.png'
                  fetch('action.php', {
                    method: 'post',
                    headers: {
                      'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'winner=' + imgs[1].alt
                  }).then(res => {
                    console.log(res)
                  })
                  clearInterval(t)
              }
              imgs[0].style.left =  imgs[0].offsetLeft + parseInt(imgs[0].getAttribute('data-speed')) + 'px'
              imgs[1].style.left =  imgs[1].offsetLeft + parseInt(imgs[1].getAttribute('data-speed')) + 'px'

          }, 30)


      } else {
          html(num, n)
      }
      

  }, 1000)


  e.stopPropagation()
})
