

function $(e) { return document.querySelector(e); }

var next = $('.next');
var prev = $('.prev');
var index = 0;

var randomText = [
  {
    title: "Dublin Fitness Club",
    desc: "For over 10 years Dublin Fitness Club (DFC) Gyms mission has been to enhance the lives of our members so they hit their goals and continue to achieve constant progress.<br> Through a no nonsense approach and a great community we are recognised as the gym that gets results!<br><br> DFC Gyms have raised the standards of the entire fitness industry in Ireland and we are now enhancing it more with our premium clubs!<br><br>Raise your standards and change your life. Take your fitness seriously - we do. Attitude is everything. <h2>-DFC</h2>"
    
},
  {
    title: "State Of The Art",
    desc: "Your workout should always be the high point of your day. Our DFC gym is designed to excite and motivate, with amazing studio classes, innovative training programs, and ample workout space to help you get into your zone and get moving. Feel the energy. Find your gym community. And reach for your best each day.<br> At DFC, we see our clubs as your ultimate daily retreat, where motivation and camaraderie are simply part of your gym membership.<br><br>We have the best training facilities and experience possible to our valued members. Boutique changing rooms equipped with saunas. 20,000 sqft gym floor spread over 2 levels. The best equipment hammer strength & blk box have to offer."
  },
  {
    title: "Our Trainers",
    desc: "Our trainers are ready and waiting to help you change your lifestyle for good. <br><br> Some personal trainers at DFC offer group personal training sessions at a cheaper cost than 1-2-1 training session. We recommend that you speak directly to the personal trainers at your gym to find out if they offer this, and at what cost.<br><br>You think you know your own limits. You don’t. Only a trained professional can tell you when you are working hard enough (or skirting the limits). Our personal trainers will take you to your goals safely and efficiently.With over 7 years experience, we have helped people master the techniques of basic weight training and, over time, utilizing more advanced training techniques to help them build muscle, burn body fat and transform both how they look and their mindset approach to the gym."
  },
  {
    title: "JOIN TODAY!",
 
    desc: "<strong><h2>Membership</h2></strong>  A healthy body makes for a healthy life. Whether the problem is as simple as low energy levels or poor posture or more serious as in obesity, or post accident rehabilitation, a RAW Membership is the place to start.<br><br><div class='ab'><button id='followD' type='button'><a href='registration.php'> Join </a></button></div>" 
  }
];

$('.content__title').innerHTML = randomText[0].title;
$('.content__desc').innerHTML = randomText[0].desc;

next.addEventListener('click', function() {
  if (index >= 0 && index <= 2) {
    toggleView();
    setTimeout(function() {
      $('.content__title').innerHTML = randomText[index].title;
      $('.content__desc').innerHTML = randomText[index].desc;      
    }, 500)
    $('section').classList.remove('view'+index+'--active');
    $('section').classList.add('view'+(index + 1)+'--active');
    index++;
  }
}, false);

prev.addEventListener('click', function() {
  if (index > 0 && index <= 3) {
    toggleView();
    setTimeout(function() {
      $('.content__title').innerHTML = randomText[index].title;
      $('.content__desc').innerHTML = randomText[index].desc;      
    }, 500)
    $('section').classList.remove('view'+(index)+'--active');
    $('section').classList.add('view'+(index - 1)+'--active');
    index--;
  }
}, false)

function toggleView() {
    $('section').classList.add('fade-out');
    setTimeout(function() {
      $('section').classList.remove('fade-out');
    }, 500)
}

let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler')
let dropdownIsOpen = false

// Handle dropdown menues
if (dropdowns.length) {
  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener('click', (event) => {
      let target = document.querySelector('#' + event.target.dataset.dropdown)

      if (target) {
        if (target.classList.contains('show')) {
          target.classList.remove('show')
          dropdownIsOpen = false
        } else {
          target.classList.add('show')
          dropdownIsOpen = true
        }
      }
    })
  })
}

// Handle closing dropdowns if a user clicked the body
window.addEventListener('mouseup', (event) => {
  if (dropdownIsOpen) {
    dropdowns.forEach((dropdownButton) => {
      let dropdown = document.querySelector('#' + dropdownButton.dataset.dropdown)
      let targetIsDropdown = dropdown == event.target

      if (dropdownButton == event.target) {
        return
      }

      if ((!targetIsDropdown) && (!dropdown.contains(event.target))) {
        dropdown.classList.remove('show')
      }
    })
  }
})

// Open links in mobiles
function handleSmallScreens() {
  document.querySelector('.navbar-toggler')
    .addEventListener('click', () => {
    let navbarMenu = document.querySelector('.navbar-menu')

    if (navbarMenu.style.display === 'flex') {
      navbarMenu.style.display = 'none'
      return
    }

    navbarMenu.style.display = 'flex'
  })
}

handleSmallScreens()

