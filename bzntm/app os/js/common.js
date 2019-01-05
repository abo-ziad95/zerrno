
var sliding = false
var slideIndex = 0
var slideIndex2 = 0
var commonSlide


////////////////////////////////////////////////////////////////
if($('.soc-wrap').hasClass('privecy')){
  $('.soc-wrap-img, .soc-wrap-img-sc, .soc-wrap-img-th, .soc-wrap-img-ft, .main-white-wave-decr1, .main-white-wave-decr').addClass('translateY')
  $('.soc-fill').addClass('black')

}
function Carousel(setting) {
  swipe_det = new Object();
  swipe_det.sX = 0;
  swipe_det.sY = 0;
  swipe_det.eX = 0;
  swipe_det.eY = 0;
    var min_x = 20; //min x swipe for horizontal swipe
    var max_x = 40; //max x difference for vertical swipe
    var min_y = 40; //min y swipe for vertical swipe
    var max_y = 50; //max y difference for horizontal swipe
    var direc = '';
    ele = document.querySelector('.js-carousel__wrap');
    /* Scope privates methods and properties */
    let privates = {};

    /* Privates properties */
    privates.setting = setting;

    privates.sel = {
      'main': document.querySelector(privates.setting.main),
      'wrap': document.querySelector(privates.setting.wrap),
      'children': document.querySelector(privates.setting.wrap).children,
      'prev': document.querySelector(privates.setting.prev),
      'next': document.querySelector(privates.setting.next),
    };

    privates.opt = {
      'position': 0,
      'max_position': document.querySelector(privates.setting.wrap).children.length
    };


    for (var i = 0; i < privates.sel.children.length; i++) {
      if (i == 0) {
        $('.slider__controls').append('<div data-img="' + i + '" class="slider__btn js-slider-btn slider__btn--active">');
      } else {

        $('.slider__controls').append('<div data-img="' + i + '" class="slider__btn js-slider-btn">');
      }

    }

    var btn = document.querySelectorAll(privates.setting.btn)
    var _self = this

    btn.forEach(function(element, index) {
      $(element).click((e) => {
        $('.js-slider-btn').removeClass('slider__btn--active')
        $(element).addClass('slider__btn--active')
        let data = $(element).data('img')
        _self.scroll_slide(data)
      })
    });

    wheel = true
    privates.sel.wrap.addEventListener('wheel', (e) => {
      var speed = e.deltaY
      if (wheel) {
        wheel = false;
        if (e.deltaY > 0 && speed <= 120) {
          this.next_slide();
          this.removeactive()
        } else if (e.deltaY < 0 && speed >= -120) {
          this.prev_slide();
          this.removeactive()

        }
        setTimeout(function() {
          wheel = true;
        }, 100);
      }else{
        e.preventDefault()
      }

    })

    this.removeactive = () => {
      btn.forEach(function(element, index) {
        let data = $(element).data('img')
        if (privates.opt.position === data) {
          $('.js-slider-btn').removeClass('slider__btn--active')
          $(element).addClass('slider__btn--active')
        }
      });
    }

    this.prev_slide = () => {
      --privates.opt.position;

      if (privates.opt.position < 0) {
        privates.sel.wrap.classList.add('s-notransition');
        privates.opt.position = 0;
        sliding = true
      }else{
        privates.sel.wrap.style["transform"] = `translateX(-${privates.opt.position}00%)`;
        sliding = false
      }

        // removetab(privates.opt.position)
      };


    // Next slide
    this.next_slide = () => {
      ++privates.opt.position;

      if (privates.opt.position >= privates.opt.max_position) {
        privates.opt.position = privates.opt.max_position - 1;
        sliding = true
      }else{
        privates.sel.wrap.style["transform"] = `translateX(-${privates.opt.position}00%)`;
        sliding = false
      }

    };


    this.scroll_slide = (index) => {
      privates.opt.position = +index

      privates.sel.wrap.style["transform"] = `translateX(-${privates.opt.position}00%)`;
      slideIndex2 = +(index + 1)
    };

    ele.addEventListener('touchstart', function(e) {
      var t = e.touches[0];
      swipe_det.sX = t.screenX;
      swipe_det.sY = t.screenY;
    }, false);

    ele.addEventListener('touchmove', function(e) {
      // e.preventDefault();
      var t = e.touches[0];
      swipe_det.eX = t.screenX;
      swipe_det.eY = t.screenY;
    }, false);


    ele.addEventListener('touchend', function(e) {
        //horizontal detection
        if (
          ((swipe_det.eX - min_x > swipe_det.sX) || (swipe_det.eX + min_x < swipe_det.sX)) 
          && 
          ((swipe_det.eY < swipe_det.sY + max_y) && (swipe_det.sY > swipe_det.eY - max_y))
          ) 
        {
          if (swipe_det.eX > swipe_det.sX) {
            direc = 'r';
          } else {
            direc = 'l';
          }

        }


          if ((((swipe_det.eY - min_y > swipe_det.sY) || (swipe_det.eY + min_y < swipe_det.sY)) && ((swipe_det.eX < swipe_det.sX + max_x) && (swipe_det.sX > swipe_det.eX - max_x)))) {
          if(swipe_det.eY > swipe_det.sY) direc = "d";
          else direc = "u";
        }


        if(direc === 'l'){
          _self.next_slide()
          _self.removeactive()

        }else if(direc === 'r'){
         _self.prev_slide()
         _self.removeactive()
       }
     }, false);
  }


  new Carousel({
    "main": ".js-carousel",
    "wrap": ".js-carousel__wrap",
    "prev": ".js-carousel__prev",
    "next": ".js-carousel__next",
    "btn": ".js-slider-btn",
  });


////////////////////////////////////////////////////////////////////
function decodeText(i){

    // get nodelist
    var text = document.getElementsByClassName('decode-text')[i];
    // console.log(text)
    // console.log(text);
    // console.log(text.children.length);

    // assign the placeholder array its places
    var state = [];
    for(var i = 0, j = text.children.length; i < j; i++ ){
      state[i] = i;
    }

    // shuffle the array places to get randomness
    var shuffled = shuffle(state);

    for(var i = 0, j = shuffled.length; i < j; i++ ){

      var child = text.children[shuffled[i]];
      classes = child.classList;

        // fire the first one at random times
        var state1Time = Math.round( Math.random() * (2000 - 300) ) ;
        if(classes.contains('text-animation')){ 
          setTimeout(firstStages.bind(null, child), state1Time);
        }
      }


    }

// send the node for later .state changes
function firstStages(child){


  if( child.classList.contains('state-2') ){   
    child.classList.add('state-3');
  } else if( child.classList.contains('state-1') ){
    child.classList.add('state-2')
  } else if( !child.classList.contains('state-1') ){
    child.classList.add('state-1');
    setTimeout(secondStages.bind(null, child), 70);
  }    
}
function secondStages(child){


  if( child.classList.contains('state-1') ){
    child.classList.add('state-2')
    setTimeout(thirdStages.bind(null, child), 70);
  } 
  else if( !child.classList.contains('state-1') )
  {
    child.classList.add('state-1')
  }
}
function thirdStages(child){
  if( child.classList.contains('state-2') ){
    child.classList.add('state-3')
  }

}


function shuffle(array) {


  var currentIndex = array.length, temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
      }
      return array;
    }

// decodeText();


function getoffsetTop(cls){
  var childPos = $(cls).offset();
  var parentPos = $(cls).parent().parent().parent().offset();
  var childOffset = {
    top: childPos.top - parentPos.top ,
    left: childPos.left - parentPos.left
  }
  return childOffset.top

}


jQuery(document).ready(function($) {
  $('html').mouseleave(function() {
    $('.modal-subscribe').addClass('open')
    var year = new Date().getFullYear()
  });
  $(document).on('click', '.js-close-subscribe', function(){
    $('.modal-subscribe').removeClass('open')
  })
    $(document).on('click', '.js-subscribe', function(){
    $('.modal-subscribe').removeClass('open')
  })
////////////////////////////////////////////////////////
$('.agenda-info-wrap').scroll(function(){

  var scrollPercent = 100 * ($(this).scrollTop()) / ($('#top-10').height() - $(this).height());
  if(scrollPercent < 28){
    scrollPercent = 28
  }
////////////////////////////////////////////////////////////////////////////////////////////////////
var height = $('.agenda-info-row-ft').height() + $('.agenda-info-row-sc').height() + $('.agenda-info-row-th').height()
var scroll = $(this).scrollTop() + height
if($(this).scrollTop()){

  if(scrollPercent >= 28){
    $('.agenda-info-row-block-time-sircle4').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle4').removeClass('active')
  }

  if(scrollPercent >= 39){
    $('.agenda-info-row-block-time-sircle5').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle5').removeClass('active')
  }

  if(scrollPercent >= 41 ){
    $('.agenda-info-row-block-time-sircle6').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle6').removeClass('active')
  }

  if(scrollPercent >= 54 ){
    $('.agenda-info-row-block-time-sircle7').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle7').removeClass('active')
  }

  if(scrollPercent >= 67){
    $('.agenda-info-row-block-time-sircle8').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle8').removeClass('active')
  }

  if(scrollPercent >= 80 ){
    $('.agenda-info-row-block-time-sircle9').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle9').removeClass('active')
  }

  if(scrollPercent >= 82){
    $('.agenda-info-row-block-time-sircle10').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle10').removeClass('active')
  }

  if(scrollPercent >= 85 ){
    $('.agenda-info-row-block-time-sircle11').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle11').removeClass('active')
  }

  if(scrollPercent >= 87 ){
    $('.agenda-info-row-block-time-sircle12').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle12').removeClass('active')
  }

  if(scrollPercent >= 89){
    $('.agenda-info-row-block-time-sircle13').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle13').removeClass('active')
  }

  if(scrollPercent >= 92){
    $('.agenda-info-row-block-time-sircle14').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle14').removeClass('active')
  }

  if(scrollPercent >= 94){
    $('.agenda-info-row-block-time-sircle15').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle15').removeClass('active')
  }

  if(scrollPercent >= 97 ){
    $('.agenda-info-row-block-time-sircle16').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle16').removeClass('active')
  }

  if(scrollPercent >= 99 ){
    $('.agenda-info-row-block-time-sircle17').addClass('active')
  }else{
    $('.agenda-info-row-block-time-sircle17').removeClass('active')
  }

}

//////////////////////////////////////////////////////////////////////////////////////

let grad = scrollPercent - 6.4
$('.agenda-info-wrap-line').css({
  background: `linear-gradient(to bottom, #08ef85 ${grad}%, white  ${grad}%, white 100%)`
})
 ///////////////////////////////////////////////////////////////////////////////////////
})

  /////////////////////////////////////////
  $('.header-wrap').addClass('translateY')
  ///////////////////////////////////////////

  $(document).on('click touch','.js-get-invite-link', function() {
    $('.get-invite-modal').toggleClass('open');
  });
  $(document).on('click touch','.js-become-sponsor-link', function() {
    $('.become-sponsor-modal').toggleClass('open');
  });
  $(document).on('click touch','.js-contact-us', function() {
    $('.contact-modal').toggleClass('open');
  });
  $(document).on('click touch','.js-close-modal', function() {
    $(this).closest('div').toggleClass('open');
  });

  $('#invite-form').on('submit', function (e) {
    e.preventDefault();

    var data = $(this).serialize();
    var url = '/invite';

    $.ajax({
     type: 'POST',
     data: data,
     url: url,
     cache: false,
     beforeSend: function () {

     },
     success: function (participant) {
      if(participant)
      {
       $('.get-invite-modal').removeClass('open');
       $('.thank-you-modal').toggleClass('open');
     }
   },
   error: function (jqXHR) {
				console.log(jqXHR);//if error

      }
    });
  });

  $('#sponsor-form').on('submit', function (e) {
    e.preventDefault();

    var data = $(this).serialize();
    var url = '/become-sponsor';

    $.ajax({
      type: 'POST',
      data: data,
      url: url,
      cache: false,
      beforeSend: function () {

      },
      success: function (json) {
        if(json)
        {
          $('.become-sponsor-modal').removeClass('open');
          $('.thank-you-modal').toggleClass('open');
        }
      },
      error: function (jqXHR) {
                console.log(jqXHR);//if error

              }
            });
  });

  $('#contact-form').on('submit', function (e) {
    e.preventDefault();

    var data = $(this).serialize();
    var url = '/contact';

        //console.log(data);

        $.ajax({
          type: 'POST',
          data: data,
          url: url,
          cache: false,
          beforeSend: function () {

          },
          success: function (json) {
            if(json)
            {
              $('.contact-modal').removeClass('open');
              $('.thank-you-modal').toggleClass('open');
            }
          },
          error: function (jqXHR) {
                console.log(jqXHR);//if error

              }
            });
      });

/////////////////////////////////////////

setTimeout(
  function() 
  {
    $('.soc-fill').addClass('black')
    $('.right-wrap').children().addClass('text-animate-op')
    $('.img-wrap-statue').addClass('op1')
    $('.main-green-cross-decr-img, .main-greenwhite-cross-decr-img, .main-green-cross-decr1, .main-green-sicrle-decr, .main-green-points').addClass('bounseIn')
  }, 1300);

///////////////////////////////////////////
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(endtime) {
  // var clock = $("#"+id);
  var daysSpan = $('.personal__ticket__counter__count__item__data__days');
  var hoursSpan = $('.personal__ticket__counter__count__item__data__hours') ;
  var minutesSpan = $('.personal__ticket__counter__count__item__data__min') ;
  
  var time = getTimeRemaining(endtime)

  if(time.seconds === -1){
    return
  }

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.html(t.days);
    hoursSpan.html(('0' + t.hours).slice(-2));
    minutesSpan.html(('0' + t.minutes).slice(-2));

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline="july 20 2018 11:45:00 GMT+0300"; //for Ukraine
initializeClock(deadline);
///////////////////////////////////////////////////////////////////////
$('.agenda-info-wrap').scrollbar();

//////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////

$('.agenda-info-wrap').mouseover(function(){
  $('.agenda-title, .agenda-btn, .agenda-btn-item, .agenda-up-wrap, .agenda-info-wrap').addClass('no-wrap')
})


///////////////////////////////////////////////////////////////////////
$(document).on('click', '.personal__btn__button', function(e){
  e.preventDefault()
  $('.personal-buy-ticket-form-wrap, .personal__btn__button').removeClass('active')
  // $('.personal__btn__button').removeClass('active')
  let blockShow = $(this).data('block');
  $(this).addClass('active')
  $('.' + blockShow).addClass('active')
})
/////////////////////////////////////////////////////////////////
$(document).on('click', '.agenda-btn-item', function(){
  let block = '#' + $(this).data('name')
  if($('.agenda-info').hasClass('show')){
    $('.agenda-info').removeClass('show')
  }
  $('.agenda-btn-item').removeClass('active')
  $(this).addClass('active')
  $(block).addClass('show')
})
////////////////////////////////////////////////////////////////
$(document).on('click touchend', '.header-nav-menu', function(e){
  e.preventDefault()
  $('.nav').addClass('active')
  if($(window).outerWidth() <= 1024){
    $.fn.fullpage.setAutoScrolling(true);
  }
})
$(document).on('click touchend', '.mob-close-spans', function(e){
  e.preventDefault()
  $('.nav').removeClass('active')
  if($(window).outerWidth() <= 1024){
    $.fn.fullpage.setAutoScrolling(false);
  }
})

if($(window).outerWidth() <= 1024){
  $('body').removeClass('bg-effect')
    // $.fn.fullpage.destroy('all');
  }


  if($(window).outerWidth() <= 578){
    $('.slide-desk .speakers-slider-slide').removeClass('slide')
    $('.slide-mob .slide-item').addClass('slide')
  }


  $('button.header-nav-btn').on('click', function(e){
    e.preventDefault()
    let href = $(this).data('atribute')
    $('.nav').removeClass('active')
    $('html , body').animate({ scrollTop: $(`#${href}`).offset().top }, 500)
    if($(window).outerWidth() <= 1024){
    $.fn.fullpage.setAutoScrolling(false);
    }
  })

  $(document).on('click', '.sponsors-btn', function(){
    let block = '.' + $(this).data('name')
    let data = $(this).data('name')
    $('.sponsors-slide-wrap').removeClass('active')
    $('.sponsors-media-wrap').removeClass('active')
    $('.sponsors-btn').removeClass('active')
    $(this).addClass('active')
    $(block).addClass('active')
    if(data === 'sponsors-media-wrap'){
      $('.mediapartner-title').addClass('block')
      $('.sponsors-title-info').removeClass('block')
      $('.sponsors-title-mob').removeClass('block-mob')
    }else{
      $('.sponsors-title-info').addClass('block')
      $('.sponsors-title-mob').addClass('block-mob')

      $('.mediapartner-title').removeClass('block')
    }
    sliding = false
    activelenght(data)
  })
///////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////
function activelenght(data){
 // slideIndex = 0
 if(data === undefined){
  commonSlide =  $('.sponsors-slide-wrap.active .sponsors-slide').length - 1
}
if(data === 'sponsors-media-wrap'){
  commonSlide = $('.sponsors-media-wrap.active .b-carousel__item').length - 1
  console.log()
}
if(data === 'sponsors-slide-wrap'){
  commonSlide =  $('.sponsors-slide-wrap.active .sponsors-slide').length - 1
  console.log()
}
}

activelenght()

$(document).on('click', '.sponsors-slide-wrap-absolute-name', function(){
  let data = $(this).data('slide')
  $('.sponsors-slide-wrap-absolute-item').removeClass('active')
  if(data === 'gold'){
    $(this).parent().addClass('active')
    fullpage_api.moveTo('7page', 0);
    slideIndex = 0
  }
  if(data === 'silver'){
    $(this).parent().addClass('active')

    fullpage_api.moveTo('7page', 1);
    slideIndex = 1
  }
  if(data === 'bronze'){
    $(this).parent().addClass('active')
    fullpage_api.moveTo('7page', 2);
    slideIndex = 2
  }
});
////////////////////////////////////////////////////////////////
$('#fullpage').fullpage({
  licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
  scrollHorizontally: true,
  autoScrolling: true,
  responsiveWidth: 1400,
  anchors:['1page', '2page', '3page', '4page', '5page', '6page', '7page', '8page', '9page'],
  scrollOverflow: false,
  lazyLoading: true,
  menu: '.nav-text',
  controlArrows: false,
  slidesNavigation: true,
  responsiveSlides: true,
    // parallax: true,
    // parallaxOptions: { type: 'reveal', percentage: 62, property: 'background'},
    scrollBar: true,
    // scrollHorizontally: true,
    paddingTop: '80px',
    paddingBottom: '80px',
    dragAndMove: true,
    // dragAndMove: 'vertical',
    // fixedElements: '.fidex-footer-section',
    normalScrollElements: '.agenda-info-wrap',
    afterRender: function(){
  // $('.header-wrap').removeClass('hide')
  // $('.header-wrap').addClass('translateY')
  $('.soc-fill').addClass('black')

  $('.slide-counter').addClass('translateY')
  $('.soc-wrap-img, .soc-wrap-img-sc, .soc-wrap-img-th, .soc-wrap-img-ft, .main-white-wave-decr1, .main-white-wave-decr').addClass('translateY')
  // $('.right-wrap').addClass('fadeIn')
  $('.img-wrap-statue').addClass('fadeIn')

  // $('.main-green-cross-decr-img').addClass('bounseIn')
},
onLeave: function(index, nextIndex, direction){
  $('.slide-counter-span-num').addClass('op0')
  $('.agenda-info-wrap-line').addClass('op0')
  if (index.index == 6 && !sliding && $('.sponsors-slide-wrap').hasClass('active')) {
    if (direction == 'down' && slideIndex < commonSlide) {
      if(slideIndex === 0){
        $('.sponsors-slide-wrap-absolute-name').removeClass('active')
        $('.sponsors-slide-wrap-absolute-item').removeClass('active')
        $('.sponsors-slide-wrap-absolute-name-silver').addClass('active')
        $('.sponsors-slide-wrap-absolute-silver').addClass('active')

      }
      if(slideIndex === 1){
        $('.sponsors-slide-wrap-absolute-name').removeClass('active')
        $('.sponsors-slide-wrap-absolute-item').removeClass('active')
        $('.sponsors-slide-wrap-absolute-name-bronze').addClass('active')
        $('.sponsors-slide-wrap-absolute-bronze').addClass('active')   
      }
      slideIndex++
      // _self.slideIndex = slideIndex + 1
     // sliding = true;
     fullpage_api.moveSlideRight();
     return false
   } else if (direction == 'up' && slideIndex > 0) {
    if(slideIndex === 2){
      $('.sponsors-slide-wrap-absolute-name').removeClass('active')
      $('.sponsors-slide-wrap-absolute-item').removeClass('active')
      $('.sponsors-slide-wrap-absolute-silver').addClass('active')
      $('.sponsors-slide-wrap-absolute-name-silver').addClass('active')

      
    }
    if(slideIndex === 1){
      $('.sponsors-slide-wrap-absolute-name').removeClass('active')
      $('.sponsors-slide-wrap-absolute-item').removeClass('active')
      $('.sponsors-slide-wrap-absolute-gold').addClass('active') 
      $('.sponsors-slide-wrap-absolute-name-gold').addClass('active')

    }
    // sliding = true;
    slideIndex--
    fullpage_api.moveSlideLeft();
    return false;
  }
}


if (index.index == 6 && !sliding && $('.sponsors-media-wrap').hasClass('active')) {
  return false
}
  sliding = false

// if (index.index == 6 && !sliding && $('.sponsors-media-wrap').hasClass('active')) {
//       console.log('leave run')
//       console.log(slideIndex2)
//       console.log(commonSlide)
//     if (direction == 'down' && slideIndex2 < commonSlide) {
//       console.log('leave slide down')
//       console.log(slideIndex2)
//       slideIndex2++
//      return false
//    } else if (direction == 'up' && slideIndex2 > 0) {
//     slideIndex2--
//     return false;
//   }
// }
$('.section').find('div.decode-text').children().removeClass('text-animation state-1 state-2 state-3')

$('.bg-effect').removeClass('bg-white')
$('.bg-effect').removeClass('bg-dark')

$('.slide-counter-span-line, .header-nav-menu-span').removeClass('black-bg')

$(' .slide-counter-span, .fidex-footer-section, .header-nav-btn-desk').removeClass('black-text')
$('.soc-fill').removeClass('white')
$('.soc-fill').removeClass('black')
if($(window).outerWidth() >= 1024){
$('.logo-fill-class').removeClass('black')
$('.logo-fill-class').removeClass('white')
}

if($(nextIndex.item).hasClass('home') === true){
  $('.soc-fill').addClass('black')
  $('.bg-effect').addClass('static')
  $('.logo-fill-class').addClass('black')

}
if($(nextIndex.item).hasClass('white-bg') === true){

  $('.bg-effect').removeClass('bg-white')
  $('.bg-effect').removeClass('static')
  $('.bg-effect').removeClass('bg-dark')
  $('.bg-effect').addClass('bg-white')
  $('.soc-fill').addClass('white')
  $(' .slide-counter-span-line').addClass('black-bg')
  $(' .slide-counter-span, .fidex-footer-section , .header-nav-btn-desk').addClass('black-text')
  if($(window).outerWidth() >= 1024){
  $('.header-nav-menu-span').addClass('black-bg')

  $('.logo-fill-class').addClass('white')
  }
  if($(nextIndex.item).find('p').hasClass('title-animate-white')){
    return
  }else{
    $(nextIndex.item).find('p').addClass('title-animate-white')
  }
}
if($(nextIndex.item).hasClass('dark-bg') === true){
  $('.bg-effect').removeClass('bg-white')
  $('.bg-effect').removeClass('bg-dark')
  $('.bg-effect').addClass('bg-dark')
  $('.soc-fill').addClass('black')
  if($(window).outerWidth() >= 1024){
  $('.logo-fill-class').addClass('black')
  }
  $('.agenda-info-wrap-opacite').addClass('no-wrap')
}

if($(nextIndex.item).hasClass('dark-bg') === true){
  if($(nextIndex.item).find('p').hasClass('title-animate-black')){
    return
  }else{
    $(nextIndex.item).find('p').addClass('title-animate-black')
  }
}

},
afterSlideLoad: function(section, origin, destination, direction){
 $('.slide.active .sponsors-slide-item').addClass('active')
},
afterLoad: function(link, index){
  $('.site-footer').removeClass('last')
  //     if($('.agenda-content').children().hasClass('no-wrap')){
    $('.agenda-title, .agenda-btn, .agenda-btn-item, .agenda-up-wrap, .agenda-info-wrap').removeClass('no-wrap')
    let navIndex = index.index + 1
    if(navIndex == 1 && ($(window).outerWidth() >= 1024)){
      $('.fidex-footer-section').hide()
    }
    if((navIndex > 1 && ($(window).outerWidth() >= 1024))){
      $('.fidex-footer-section').show()
    }
    if(($(window).outerWidth() <= 1024)){
      $('.fidex-footer-section').hide()
    }
    if(navIndex == 2){
      $('.what-is').find('p').children().addClass('text-animation')
      $('.what-is-img img').addClass('bounseIn')
      $('.what-is-img span').addClass('bounseIn')
      $('.what-is-img-green-circle3, .what-is-img-green-cross7').addClass('bounseIn')
      // $('.what-is-desc-info span').addClass('text-animate-op')
      $('.what-is-desc-info span').addClass('text-animate-op')
      $('.what-is-desc-item p').addClass('text-animate-op')
      // decodeText(0)
    }
    if(navIndex == 3){
      $('.meeting-info-boxes-box').addClass('bounsIn')
      $('.meeting-info-title span').addClass('text-animation')
      $('.meetting-animation').addClass('bounseIn')
      $('.meeting-info-absolute span').addClass('bounseIn')
      $('.meeting-info-absolute').addClass('bounseIn')
      decodeText(0)
    }
    if(navIndex == 4){
      $('.speakers-title span').addClass('text-animation')
      $('.speakers-animation').addClass('bounseIn')

      decodeText(1)
    }
    if(navIndex == 5){
      $('.agenda-title-span').addClass('text-animation')
      $('.agenda-info-wrap-line').removeClass('op0')
      decodeText(2)
      $('.agenda-info-wrap-opacite').removeClass('no-wrap')
      $('.agenda-animation').addClass('bounseIn')
      $('.agenda-info-wrap-opacite').addClass('bounseIn')
    }
    if(navIndex == 6){
      $('.cards-item').addClass('cards-before-animation')
      $('.cards-item').addClass('cards-item-op-animation')
      $('.cards-img-animation').addClass('cards-img-op-animation')
    }
    if(navIndex == 7){
     $('.slide.active .sponsors-slide-item').addClass('active')

     $('.sponsers-title-spans').addClass('text-animation')
     decodeText(3)
     $('.sponsers-img-op-animation').addClass('sponsers-op-animation')
     $('.sponsors-slide').addClass('sponsers-op-animation')
     $('.sponsors-slide-wrap-absolute').addClass('active')
     $('.sponsors-title-btns').addClass('active')
     // $('.sponsors-slide-item').addClass('active')
   }
   if(navIndex == 8){
    $('.media-title-text-animation').addClass('text-animation')
    decodeText(4)
    $('.media-img-animation').addClass('media-img-op-animation')
    $('.media-slide').addClass('media-slide-op')
  }
  if(navIndex == 9){
    $('.contact-title span').addClass('text-animation')
    decodeText(5)
    $('.fidex-footer-section').hide()
    $('.site-footer').addClass('last')
  }
      // decodeText()
      $('.slide-counter-span-num').text(navIndex)
      $('.slide-counter-span-num').removeClass('op0')

    },

  })





})
