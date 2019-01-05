//////////////////////////////////map/////////////////
var map;
function initMap() {
  var myLatLng = {lat: 39.656650, lng: -105.080820}
  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 16,
    streetViewControl: false,
    disableDefaultUI: true,
  });
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
  });
}
////////////////////////////////////////////////////
if($(window).outerWidth() > 1024 && $('body section').hasClass('masonry-gallery')){
  $('.gallery .grid').masonry({
  // options...
  itemSelector: '.grid-item',
  // columnWidth: 200
  percentPosition: false,
  gutter: 0,
  horizontalOrder: true
});
  $('.occasion .grid').masonry({
  // options...
  itemSelector: '.grid-item',
  // columnWidth: 200
  percentPosition: false,
  gutter: 0,
  horizontalOrder: true
});
}
if($(window).outerWidth() < 1024){
  $('.gallery-photos').removeClass('grid')
  $('.occasion-photos').removeClass('grid')
}
//////////////////////////////////////////////////
$(document).on('click', '.js-gallery-btn', function(){
  $('.js-gallery-btn').removeClass('active')
  $(this).addClass('active')
  let img = $(this).data('img'),
  number = $(this).data('number'),
  name = $(this).data('name'),
  desc = $(this).data('desc'),
  cost = $(this).data('cost')
  $('.modal-img-image').attr('src', img)
  $('.modal-gallery-photos-item-number').text(number)
  $('.modal-desc-price span').text(cost)
  $('.modal-desc-title').text(name)
  $('.modal-desc-subtitle').text(desc)
  $('body').addClass('hidden')
  $('.modal-wrap').addClass('show')

})
$(document).on('click', '.modal-back', function(){
  $('body').removeClass('hidden')
  
  $('.modal-wrap').removeClass('show')
});
/////////////////////////////////////////////////////
$(document).on('click', '.nav-mob-humburger', function(){
  if($(this).hasClass('open')){
    $(this).removeClass('open')
    $('.nav-mob').removeClass('open')
    $('.header').removeClass('open')
    $('body').removeClass('hidden')
  }else{
    $('body').addClass('hidden')
    $(this).addClass('open')
    $('.nav-mob').addClass('open')
    $('.header').addClass('open')
  }
});
$(document).on('touchend', '.nav-mob-humburger', function(){
  if($(this).hasClass('open')){
    $(this).removeClass('open')
    $('.nav-mob').removeClass('open')
    $('.header').removeClass('open')
    $('body').removeClass('hidden')
  }else{
    $('body').addClass('hidden')
    $(this).addClass('open')
    $('.nav-mob').addClass('open')
    $('.header').addClass('open')
  }
});
////////////////////////////////////////////////////
$(document).on('click', '.modal-arrow', function(){
  var item,
  number,
  name,
  desc,
  cost
  if($(this).hasClass('modal-next-item')){
    item = $('.js-gallery-btn.active').closest('.grid-item').next().find('.js-gallery-btn')
    if($(item).index() === -1){
      item = $('.grid-item:eq(0)').find('.js-gallery-btn')
    }
    number = $(item).data('number'),
    name = $(item).data('name'),
    desc = $(item).data('desc'),
    img = $(item).data('img'),
    cost = $(item).data('cost')
  }else{
    item = $('.js-gallery-btn.active').closest('.grid-item').prev().find('.js-gallery-btn')
    if($(item).index() === -1){
      let index = $('.grid-item').length - 1
      item = $(`.grid-item:eq(${index})`).find('.js-gallery-btn')
    }
    number = $(item).data('number'),
    name = $(item).data('name'),
    desc = $(item).data('desc'),
    img = $(item).data('img')
    cost = $(item).data('cost')
  }
  $('.js-gallery-btn').removeClass('active')
  $(item).addClass('active')
  $('.modal-img-image').attr('src', img)
  $('.modal-gallery-photos-item-number').text(number)
  $('.modal-desc-price span').text(cost)
  $('.modal-desc-title').text(name)
  $('.modal-desc-subtitle').text(desc)
  $('.modal-wrap').addClass('show')
})

$(document).on('click', '.wedding-gallery-wrap-btn', function(){
    $(document).find('.hide').removeClass('hide')
  if($(this).hasClass('wedding-gallery-wrap-next')){
    $(this).addClass('hide')
    $('.wedding-gallery-wrap-counter-span1').addClass('hide')
    $('.wedding-gallery-wrap-img1').addClass('hide')
    $('.wedding-gallery-wrap-counter').addClass('hide')
    $('.wedding-gallery-wrap-counter-text1').addClass('hide')
    $('.wedding-gallery-wrap-img:eq(0)').addClass('hide')
  }else{
    $(this).addClass('hide')
    $('.wedding-gallery-wrap-counter-span2').addClass('hide')
    $('.wedding-gallery-wrap-img2').addClass('hide')
    $('.wedding-gallery-wrap-counter').addClass('hide')
    $('.wedding-gallery-wrap-counter-text2').addClass('hide')
    $('.wedding-gallery-wrap-img:eq(1)').addClass('hide')
  }
})
$(document).on('click', '.index-down-btn', function(){
  $('html, body').animate({ scrollTop: $('.wedding').offset().top }, 500)
})


