


////////////////////////////////////////////////////////////////

// - Noel Delgado | @pixelia_me

const nodes = [].slice.call(document.querySelectorAll('.cards-item'), 0);
// console.log(nodes)
const directions  = { 0: 'top', 1: 'right', 2: 'bottom', 3: 'left' };
const classNames = ['in', 'out'].map((p) => Object.values(directions).map((d) => `${p}-${d}`)).reduce((a, b) => a.concat(b));

const getDirectionKey = (ev, node) => {
  const { width, height, top, left } = node.getBoundingClientRect();
  const l = ev.pageX - (left + window.pageXOffset);
  const t = ev.pageY - (top + window.pageYOffset);
  const x = (l - (width/2) * (width > height ? (height/width) : 1));
  const y = (t - (height/2) * (height > width ? (width/height) : 1));
  return Math.round(Math.atan2(y, x) / 1.57079633 + 5) % 4;
}

class Item {
  constructor(element) {
    this.element = element;    
    this.element.addEventListener('mouseover', (ev) => this.update(ev, 'in'));
    this.element.addEventListener('mouseout', (ev) => this.update(ev, 'out'));
  }
  
  update(ev, prefix) {
    this.element.classList.remove(...classNames);
    this.element.classList.add(`${prefix}-${directions[getDirectionKey(ev, this.element)]}`);
  }
}

nodes.forEach(node => new Item(node));
////////////////////////////////////////////////////////////////////
function decodeText(i){

    // get nodelist
    var text = document.getElementsByClassName('decode-text')[i];
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
        var state1Time = Math.round( Math.random() * (2000 - 300) ) + 50;
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
    setTimeout(secondStages.bind(null, child), 100);
  }    
}
function secondStages(child){


  if( child.classList.contains('state-1') ){
    child.classList.add('state-2')
    setTimeout(thirdStages.bind(null, child), 100);
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
  if($('.nav').hasClass('active')){
    return
  }else{
  $('.nav').addClass('active')
  $('body').css('overflow', 'hidden')
  }
})
$(document).on('click touch', '.mob-close-spans', function(e){
  e.preventDefault()
  if($('.nav').hasClass('active')){
  $('.nav').removeClass('active')
  $('body').css('overflow', 'visible')
  }else{
    return
  }
})
if($(window).outerWidth() <= 1024){
  $('body').removeClass('bg-effect')
  // $.fn.fullpage.destroy('all');
}
if($(window).outerWidth() <= 578){
  $('.slide-desk .slide').removeClass('slide')
  $('.slide-mob .slide-item').addClass('slide')
}
////////////////////////////////////////////////////////////////
$('#fullpage').fullpage({
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
    dragAndMove: true,
    paddingBottom: '80px',
    // dragAndMove: 'vertical',
    // fixedElements: '.fidex-footer-section',
    normalScrollElements: '.agenda-info-wrap',
    afterRender: function(){
  // $('.header-wrap').removeClass('hide')
  // $('.header-wrap').addClass('translateY')
  $('.slide-counter').addClass('translateY')
  $('.soc-wrap-img, .soc-wrap-img-sc, .soc-wrap-img-th, .soc-wrap-img-ft, .main-white-wave-decr1, .main-white-wave-decr').addClass('translateY')
  // $('.right-wrap').addClass('fadeIn')
  $('.img-wrap-statue').addClass('fadeIn')
  // $('.main-green-cross-decr-img').addClass('bounseIn')
},
onLeave: function(index, nextIndex, direction){
  $('.section').find('div.decode-text').children().removeClass('text-animation state-1 state-2 state-3')

  $('.bg-effect').removeClass('bg-white')
  $('.bg-effect').removeClass('bg-dark')
  $('.slide-counter-span-line, .header-nav-menu-span').removeClass('black-bg')
  $('.header-nav-btn, .slide-counter-span, .fidex-footer-section').removeClass('black-text')

  if($(nextIndex.item).hasClass('home') === true){
    $('.bg-effect').addClass('static')

  }
  if($(nextIndex.item).hasClass('white-bg') === true){
    $('.bg-effect').removeClass('bg-white')
    $('.bg-effect').removeClass('static')
    $('.bg-effect').removeClass('bg-dark')
    $('.bg-effect').addClass('bg-white')
    $('.header-nav-menu-span, .slide-counter-span-line').addClass('black-bg')
    $('.header-nav-btn, .slide-counter-span, .fidex-footer-section ').addClass('black-text')
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
afterLoad: function(link, index){
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
      $('.meeting-info-absolute img').addClass('bounseIn')
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
      $('.sponsers-title-spans').addClass('text-animation')
      decodeText(3)
      $('.sponsers-img-op-animation').addClass('sponsers-op-animation')
      $('.sponsors-slide').addClass('sponsers-op-animation')
   }
       if(navIndex == 8){
      $('.media-title-text-animation').addClass('text-animation')
      decodeText(4)
      $('.media-img-animation').addClass('media-img-op-animation')
      $('.media-slide').addClass('media-slide-op')
   }
    if(navIndex == 9){
      $('.fidex-footer-section').hide()
   }
      // decodeText()
      $('.slide-counter-span-num').text(navIndex)
    }

  })





})
