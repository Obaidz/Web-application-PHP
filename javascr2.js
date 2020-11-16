

function $(e) { return document.querySelector(e); }

var next = $('.next');
var prev = $('.prev');
var index = 0;

var randomText = [
  {
    title: "Boxing Lessons <?php $class1 = 'Boxing'; ?>",
    desc: "We offer classes for all age groups in boxing. Take the chance to learn with Conor McGregor the Ultimate Fighting Champion. Our kids class is from ages 5-13 on Fridays from 1pm-2pm. Our teen class for ages 14-17 is on Thursdays from 1pm-2pm. The adult class is from 18 and up on Thusdays from 7pm-8pm <br><div class='ab'><button id='followD' type='button'><a href='boxing.php'> Join </a></button></div>"
    
},
  {
    title: "<?php $class2 ='Swim Lessons'; ?> Swim Lessons",
    desc: "<?php $des2 = 'Learn from Michael Phelps in our state of the art swimming pool. Teaching areas in the pool are in shallow depths of 1-1/2 meters. Our lessons are designed to make learning to swim fun. Our kids class is from ages 5-13 on Fridays from 2pm-3pm. Our teen class for ages 14-17 is on Thursdays from 2pm-3pm. The adult class is from 18 and up on Wednesdays from 7pm-8pm.';?> Learn from Michael Phelps in our state of the art swimming pool. Teaching areas in the pool are in shallow depths of 1-1/2 meters. Our lessons are designed to make learning to swim fun. Our kids class is from ages 5-13 on Fridays from 2pm-3pm. Our teen class for ages 14-17 is on Thursdays from 2pm-3pm. The adult class is from 18 and up on Wednesdays from 7pm-8pm. <br><div class='ab'><button id='followD' type='button'><a href='swim.php'> Join </a></button></div>"
  },
  {
    title: "<?php  $class3 = 'Yoga Class'; ?> Yoga Class",
    desc: "<?php $des3 = 'Our trainers are ready and waiting to help you change your lifestyle for good. Challenge your strength and destress with our yoga classes. Yoga has the power to strengthen and heal your mind. Our adult class is offered on Tuesdays from 7-8pm.'; ?> Our trainers are ready and waiting to help you change your lifestyle for good. Challenge your strength and destress with our yoga classes. Yoga has the power to strengthen and heal your mind. Our adult class is offered on Tuesdays from 7-8pm. <br><div class='ab'><button id='followD' type='button'><a href='yoga.php'> Join </a></button></div>"
  },
  {
    title: "<?php $class4 = 'Spin Class'; ?> Spin Class",
    desc: "<?php $des4 = 'A healthy body makes for a healthy life. Cycling can build your leg muscle in a fun way. Our cycle instructors vary the pace and music to keep everyone engaged and having fun.'; ?> A healthy body makes for a healthy life. Cycling can build your leg muscle in a fun way. Our cycle instructors vary the pace and music to keep everyone engaged and having fun. <br><div class='ab'><button id='followD' type='button'><a href='spin.php'> Join </a></button></div>" 
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
