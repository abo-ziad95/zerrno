$(document).ready(function(){


// $('.new__item__items__item__ft').trigger('hover')

$('.nav__humburger').click(function(){

  if($(".menu__lang").hasClass("active")){
    $(".menu__lang").removeClass("active")
  }
  $('.nav__humburger').toggleClass('nav__menu__humburger__open');
  $('body').toggleClass('menu-open');
})
//////////////////////////////////////////////////////////////////////////
$('.problem__items__item__img').hover(function(){
  $(this).parent().find('.problem__items__item__text__sub').slideToggle(500)
}) 
$(document).on('click touch', '.problem__items__item__img__mob', function(){
  $('.problem__items__item__mob').removeClass('problem__items__item__mob__active')
  $('.problem__items__item__text__sub').removeAttr('style')
  $(this).parent().find('.problem__items__item__text__sub').slideToggle(500)
})
/////////////////////////////////////////////////////////////////////////////
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

function initializeClock(id, endtime) {
  var clock = $("#"+id);
  var daysSpan = $('.days');
  var hoursSpan = $('.hours') ;
  var minutesSpan = $('.minutes') ;
  var secondsSpan = $('.seconds') 
  
  var time = getTimeRemaining(endtime)

  if(time.seconds === -1){
    return
  }

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.html(t.days);
    hoursSpan.html(('0' + t.hours).slice(-2));
    minutesSpan.html(('0' + t.minutes).slice(-2));
    secondsSpan.html(('0' + t.seconds).slice(-2));

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline="july 20 2018 11:45:00 GMT+0300"; //for Ukraine
initializeClock('clockdiv', deadline);

////////////////////////////////////////////////////////////
var myLazyLoad = new LazyLoad();
//////////////////////////////////////////////////////////////////////
    $(document).on('click','.click', function(e){
    e.preventDefault()
    $('html, body').animate({scrollTop: $('.video').offset().top}, 500)
  })
////////////////////////////////////////////////////////
$(document).on('click','.btn__command', function(e){
  e.preventDefault()
  let command = $('.command__items__hidden')
  command.toggleClass('command__items__open')
  command.slideToggle(700, function(){
    if(command.hasClass('command__items__open')){
      $('.btn__command').text('Скрыть команду')
    }else{
      $('.btn__command').text('Открыть всю команду')
    }
  })
})

//////////////////////////////////////////////
$(document).on('click','.nav__lang__btn', function() {
  if ($(window).outerWidth() <= 1024) {
    if(  $('.nav__humburger').hasClass('nav__menu__humburger__open') || $('body').hasClass('menu-open')){
      $('.nav__humburger').removeClass('nav__menu__humburger__open')
      $('body').removeClass('menu-open');
    }
  $(".menu__lang").toggleClass("active");
  } else {
    $('.nav__lang__btn__hidden').slideToggle(300)
        $('.nav__lang').toggleClass('nav__lang__btn__op')

  }
})

//////////////////////////////////////////////

$(document).on('click','.road__map__item__lastspan', function(){
    let data = $(this).data('name')
  if($('.road__map__item__span').hasClass('road__map__item__span__active') || $('.road__map__item__lastspan').hasClass('road__map__item__lastspan__active')){
    $('.road__map__item__span').removeClass('road__map__item__span__active')
    $('.road__map__item__lastspan').removeClass('road__map__item__lastspan__active')
  }
    $(this).addClass('road__map__item__lastspan__active')
  if($('.road__items').hasClass('road__items__active')){
    $('.road__items').removeClass('road__items__active')
  }
  $(data).toggleClass('road__items__active')
})
$(document).on('click','.road__map__item__span', function(){
  let data = $(this).data('name')
  if($('.road__map__item__span').hasClass('road__map__item__span__active') || $('.road__map__item__lastspan').hasClass('road__map__item__lastspan__active')){
    $('.road__map__item__span').removeClass('road__map__item__span__active')
    $('.road__map__item__lastspan').removeClass('road__map__item__lastspan__active')
  }
  $(this).addClass('road__map__item__span__active')
  if($('.road__items').hasClass('road__items__active')){
    $('.road__items').removeClass('road__items__active')
  }
  $(data).toggleClass('road__items__active')
})




////////////////////////////////////////////////////////////////////////
$('.new__item__items__item').hover(function(){
  $('.new__item__items__item').removeClass('new_active')
  let data = $(this).data('name')
  $('.new__item__items__item__ft__text').removeClass('new__item__items__item__active');
  $(data).toggleClass('new__item__items__item__active')
  $(this).addClass('new_active')
})

///////////////////////////////////////////////////////////////////

var slideFunc = function (title, subtitle){
  $(title).on('click', function(){
    $(subtitle).slideToggle(500)
  })
};
slideFunc('.road__map__mob__items__title__ft', '.road__map__mob__items__subtitle__ft');
slideFunc('.road__map__mob__items__title__sc', '.road__map__mob__items__subtitle__sc');
slideFunc('.road__map__mob__items__title__th', '.road__map__mob__items__subtitle__th');
slideFunc('.road__map__mob__items__title__fo', '.road__map__mob__items__subtitle__fo');

////////////////////////////////////////////////////////
$(document).on('click','.anser__ites', function(){
  let data = $(this).data('name')
  let span = $(this).attr('data-atribute')
  $(data).slideToggle(500)
  $(span).toggleClass('anser__items__item__btn__span__active')
  if($(this).find('.anser__items__item__btn__span').hasClass('anser__items__item__btn__span__active')){
    $(span).text('-')
  }else{
    $(span).text('+')
  }
})

///////////////////////////////////////////////////////
  $('.note__slider').slick({
    autoplay: true,
    swipeToSlide: true,
    vertical: false,
    arrows: false,
    centerMode: false,
    slidesToShow: 1,
    centerPadding: 0,
    adaptiveHeight: true
  })
  $('.phone__slider2').slick({
    autoplay: true,
    swipeToSlide: true,
    vertical: false,
    arrows: false,
    centerMode: false,
    slidesToShow: 1,
    centerPadding: 0,
    adaptiveHeight: true
  })
  //////////////////////////////////////////////////////////////////
  $(document).on("click",".main-menu-link", function (e) {
  e.preventDefault();
  if($('.nav__humburger').hasClass('nav__menu__humburger__open') && $('body').hasClass('menu-open')){
    $('.nav__humburger').toggleClass('nav__menu__humburger__open');
    $('body').toggleClass('menu-open')
  }
  var id  = $(this).attr('href'),
      top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 1500);
});

  })