<!DOCTYPE html>
<html lang="ru">
<head>
  <title>UMC</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- build:css css/vendor.css-->
  <link rel="stylesheet" href="css/fonts.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="css/animate.css">
  <!-- endbuild-->
  <!-- build:css css/main.css-->
  <link rel="stylesheet" href="css/main.css"/>
  <!-- endbuild-->
</head>
<body> 
  <div class="wraper">
    <div class="menu__parent">
      <div class="menu-container">
        <div class="menu-sliders"></div>
        <div class="menu-sliders"></div>
        <div class="menu-sliders"></div>
        <div class="menu">
          <ul>
            <li>
              <a href="#mvp" class="main-menu-link main-menu-link-mob">О нас</a>
            </li>
            <li>
              <a href="#header__btn" class="main-menu-link main-menu-link-mob">White Paper</a>
            </li>
            <li>
              <a href="#command" class="main-menu-link main-menu-link-mob">Команда</a>
            </li>
            <li>
              <a href="#partner"  class="main-menu-link main-menu-link-mob">Media</a>
            </li>
            <li>
              <a href=".news"  class="main-menu-link main-menu-link-mob">Blog</a>
            </li>
            <li>
             <a href="#" class=" menu-sliders__btn">
              <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/home-icon.svg') ?>
            КАБИНЕТ</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="nav">
    <div class="nav__bg">
      <img src="#" data-src="img/svg/bg/stars.png" alt="">
    </div> 
    <div class="nav__bg2">
      <img src="#" data-src="img/svg/bg/stars2.png" alt="">
    </div>
    <div class="menu__lang">
      <div class="main-nav">
        <ul>
          <li> <a href="">EN</a></li>
          <li><a href=""> RU</a></li>
        </ul>
      </div>
      </div>
      <div class="nav__ellipse">
       <img src="#" data-src="img/svg/bg/ellipse.svg" alt="">
     </div>
     <div class="nav__ellipse1">
       <img  src="#" data-src="img/svg/bg/ellipse1.svg" alt="">
     </div>
     <div class="nav__ellipse2">
       <img  src="#" data-src="img/svg/bg/ellipse2.svg" alt="">
     </div>
     <div class="container">
       <div class="row">
        <div class="nav__items">

         <div class="nav__logo">
           <!-- <img src="#" data-src="img/svg/UMC_icons/umc-logo.svg" alt="logo" class=""> -->
                 <?php include('img/svg/UMC_icons/umc-logo.svg') ?>
         </div>
         <div class="nav__lang">
          <button class="nav__lang__btn">
           <img class="" src="#" data-src="img/united_states.png" alt="">
           <span class="nav__lang__span">EN</span>
         </button>
         <ul class="nav__lang__btn__hidden">
           <li> <img class="" src="img/united_states.png" alt=""><a href=""> EN</a></li>
           <li><img class="" src="img/ru-flag.png" alt=""><a href=""> RU</a></li>
         </ul>
       </div>
       <div class="nav__parent__humburger">
         <div class="nav__humburger">
          <span class="nav__humburger__span" ></span>
          <span class="nav__humburger__span" ></span>
          <span class="nav__humburger__span" ></span>
        </div>
      </div>
      <div class="nav__menu">
       <a href="#mvp" class="nav__menu__item main-menu-link" >О нас</a>
       <a href="#header__btn" class="nav__menu__item main-menu-link" >White Paper</a>
       <a href="#command" class="nav__menu__item main-menu-link" >Команда</a>
       <a href="#partner" class="nav__menu__item main-menu-link">Media</a>
       <a href=".news" class="nav__menu__item">Blog</a>
     </div>
     <a href="#" class="nav__btn">ПОЛУЧИТЬ ТОКЕНЫ</a>
     <a href="#" class="nav__btn__home">
      <?php include('img/svg/UMC_DESIGN_ELEMENTS/home-icon.svg') ?>
    КАБИНЕТ</a>
  </div>
</div>
</div>
</div>
<header class="header">
 <div class="container">
   <div class="row">
     <div class="header__left wow bounceInLeft">
       <p class="header__left__title">Революция  маркетинга <span class="header__left__subtitle">в мессенджерах началась! </span></p>

       <div class="header__left__counter">
        <div class="header__left__counter__title">
         <span class="header__left__counter__title__text">
           pre-sale
         </span>
       </div>
       <div class="header__left__counter__clock" id="clockdiv">
        <div>
          <span class="days header__left__counter__clock__span"></span>
          <div class="header__left__counter__clock__smalltext">days</div>
        </div>
        <div>
          <span class="header__left__counter__clock__span">:</span>
        </div>
        <div>
          <span class="hours header__left__counter__clock__span"></span>
          <div class="header__left__counter__clock__smalltext">hour</div>
        </div>
        <div>
          <span class="header__left__counter__clock__span">:</span>
        </div>
        <div>
          <span class="minutes header__left__counter__clock__span"></span>
          <div class="header__left__counter__clock__smalltext">minutes</div>
        </div>
        <div>
          <span class="header__left__counter__clock__span">:</span>
        </div>
        <div>
          <span class="seconds header__left__counter__clock__span"></span>
          <div class="header__left__counter__clock__smalltext">seconds</div>
        </div>
      </div>

      <div class="header__left__counter__prog">
        <div class="header__left__counter__prog__span">
          <span class="header__left__counter__prog__span__ft" ></span>
          <span class="header__left__counter__prog__span__sc" ></span>
          <span class="header__left__counter__prog__span__th" ></span>
          <span class="header__left__counter__prog__span__fo" ></span>
        </div>
        <div class="header__left__counter__prog__rod">
          <div class="header__left__counter__prog__div">
            <div class="header__left__counter__prog__num">
              32%
            </div>
            <img class="header__left__counter__prog__div__img" src="img/svg/UMC_DESIGN_ELEMENTS/uranus.svg" alt="">
          </div>
        </div>
      </div>

      <div class="header__left__counter__info">
        <div class="row">
          <div class="header__left__counter__info__r">
            SOFT CUP: <span>2 MLN USD</span> 
          </div>
          <div class="header__left__counter__info__l">
            HARD CUP: <span>100 MLN USD</span> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header__right">
   <div class="header__right__logs">
     <div class="row">
       <div class="header__right__logs__item">
         <img src="#" data-src="img/ico_bench.png" alt=""  class="header__right__logs__item__img ">
         <div class="header__right__logs__item__info">
           <span>5/5</span><img class="" src="#" data-src="img/svg/UMC_icons/star.svg" alt=""></div>
         </div>
         <div class="header__right__logs__item">
           <img src="#" data-src="img/ico_bench.png" alt="" class="header__right__logs__item__img ">
           <div class="header__right__logs__item__info">
             <span>3.6/5</span><img class="" src="#" data-src="img/svg/UMC_icons/star.svg" alt="" ></div>
           </div>
           <div class="header__right__logs__item">
             <img src="#" data-src="img/ico_bench.png" alt=""  class="header__right__logs__item__img ">
             <div class="header__right__logs__item__info">
               <span>4.7/5</span><img class="" src="#" data-src="img/svg/UMC_icons/star.svg" alt=""></div>
             </div>
             <div class="header__right__logs__item">
               <img src="#" data-src="img/ico_bench.png" alt=""  class="header__right__logs__item__img ">
               <div class="header__right__logs__item__info">
                 <span>4.9/5</span><img class="" src="#" data-src="img/svg/UMC_icons/star.svg" alt=""></div>
               </div>
             </div>
           </div>
           <div class="header__right__invysting">
            <div class="row">
             <div class="header__right__invysting__text">
               <p class="header__right__invysting__text__sub">СОБРАНО ИНВЕСТИЦИЙ:</p>
               <span>32425 USD</span>
               <div class="header__right__invysting__text__profile">
                 <img class="" src="#" data-src="img/svg/UMC_icons/profile.svg" alt=""><span>234</span>
               </div>
             </div>

             <div class="header__btn__item__r header__btn__item__r__mob">
               <a href="#">
                 ПОЛУЧИТЬ ТОКЕНЫ
               </a>
             </div>
             <div class="header__btn__item__l header__btn__item__l__mob">
               <a href="#">
                 СМОТРЕТЬ ВИДЕО 
                 <?php include('img/svg/polygon.svg') ?>
               </a>
             </div>

             <div class="header__right__invysting__img" data-wow-duration=".5s">
              <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/phone_new.svg') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="header__btn" id="header__btn">
  <div class="header__btn__line"></div>
  <div class="header__btn__line2"></div>
  <div class="header__ellipse3">
   <img  src="#" data-src="img/svg/bg/ellipse3.svg" alt="">
 </div>
 <div class="header__ellipse91">
   <img  src="#" data-src="img/svg/bg/ellipse91.svg" alt="">
 </div>
 <div class="header__vector">
   <img src="img/svg/bg/vector.svg" alt="">
 </div>
 <div class="container">
  <div class="row wow pulse">
   <div class="header__btn__item__r">
     <a href="#">
       ПОЛУЧИТЬ ТОКЕНЫ
     </a>
   </div>
   <div class="header__btn__item">
    <a href="#" download="" class="header__btn__item__link">
      <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/whitepaper.svg') ?>
      <span class="header__btn__item__link__span"> Whitepaper</span>
    </a>
  </div>

  <div class="header__btn__item">
    <a href="#" download="" class="header__btn__item__link">
      <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/onepager.svg') ?>

      <span class="header__btn__item__link__span">ONEPAGER </span>
    </a>
  </div>

  <div class="header__right__logs header__right__logs__mob">
   <div class="header__right__logs__item">
     <img src="#" data-src="img/ico_bench.png" alt=""  class="header__right__logs__item__img ">
     <div class="header__right__logs__item__info">
       <span>5/5</span><img class="" src="#" data-src="img/svg/UMC_icons/star.svg" alt=""></div>
     </div>
     <div class="header__right__logs__item">
       <img src="#" data-src="img/ico_bench.png" alt="" class="header__right__logs__item__img ">
       <div class="header__right__logs__item__info">
         <span>3.6/5</span><img class="" src="#" data-src="img/svg/UMC_icons/star.svg" alt="" ></div>
       </div>
       <div class="header__right__logs__item">
         <img src="#" data-src="img/ico_bench.png" alt=""  class="header__right__logs__item__img ">
         <div class="header__right__logs__item__info">
           <span>4.7/5</span><img class="" src="#" data-src="img/svg/UMC_icons/star.svg" alt=""></div>
         </div>
         <div class="header__right__logs__item">
           <img src="#" data-src="img/ico_bench.png" alt=""  class="header__right__logs__item__img ">
           <div class="header__right__logs__item__info">
             <span>4.9/5</span><img class="" src="#" data-src="img/svg/UMC_icons/star.svg" alt=""></div>
           </div>
         </div>


         <div class="header__btn__item__l">
           <a href="#">
             СМОТРЕТЬ ВИДЕО <img class="" src="#" data-src="img/svg/polygon.svg" alt="">
           </a>
         </div>
       </div>
       <div class="header__btn__mouse">
        <div class="header__btn__mouse__item">
          <span>Узнай новые</span><a href="#" class="click">
            <?php include_once('img/svg/UMC_icons/mouse.svg')  ?>
          </a><span>Особенности</span></div>
          <div class="header__btn__mouse__item">
           <a href="#" class="click"> <img class="mouse-click" src="#" data-src="img/svg/shape1.svg" alt=""></a>
         </div>
         <div class="header__btn__mouse__item">
           <a href="#" class="click"> <img class="mouse-click" src="#" data-src="img/svg/shape.svg" alt=""></a>
         </div>
       </div>
     </div>

   </div>
   <section class="video">
    <div class="container">
      <div class="video__fr">
        <div class="video__fr__text">
         <h2>Уникальные <span>ОСОБЕННОСТИ</span> UMC</h2>
       </div>
       <div class="video__fr__img wow bounceInRight">
        <img src="#" data-src="img/v_photo.jpg" alt="" class="video__fr__img__img ">
        <span class="video__fr__img__span">Начать просмотр</span>
        <a href="#"><span></span></a>
      </div>
    </div>
    <div class="video__sc">
      <div class="video__sc__img wow bounceInLeft">
        <img src="#" data-src="img/v_photo2.jpg" alt="" class="video__sc__img__img ">
        <span class="video__sc__img__span">Начать просмотр</span>
        <a href="#"><span></span></a>
      </div>
      <div class="video__sc__text">
       <div class="video__sc__text__text">

        Платформа UMC на базе смарт-контрактов работает с использованием высокоскоростного искусственного интеллекта. Делает рекламу в мессенджерах эффективной, надежной и максимально удобной. Все действия можно будет выполнять быстро и непринужденно через дружелюбный интерфейс.
      </div>
      <div class="video__sc__text__btn">
       <a href="#" class="btn__p">
         СМОТРЕТЬ ВИДЕО 
         <?php include('img/svg/polygon.svg') ?>
       </a>
     </div>
   </div>
 </div>
</div>
</section>
<section class="new">
  <div class="container">
    <div class="new__row">
      <div class="new__item">
        <div class="new__item__items">
          <div class="new__item__items__item new__item__items__item__ft new_active" data-name=".new__item__items__item__ft__text__ft">
            <span></span>
            <?php include_once('img/svg/UMC_icons/data.svg') ?>
            <div class="new__item__items__item__title">BIG DATA</div>
          </div>
          <div class="new__item__items__item new__item__items__item__sc" data-name=".new__item__items__item__ft__text__sc">
            <span></span>
            <?php include_once('img/svg/UMC_icons/msgg.svg') ?>

            <div class="new__item__items__item__title">MESSENGERS</div>
          </div>
          <div class="new__item__items__item new__item__items__item__th" data-name=".new__item__items__item__ft__text__th">
            <span></span>
            <?php include_once('img/svg/UMC_icons/ux.svg') ?>

            <div class="new__item__items__item__title">UX</div>

          </div>
          <div class="new__item__items__item new__item__items__item__fo" data-name=".new__item__items__item__ft__text__fo">
            <span></span>
            <?php include_once('img/svg/UMC_icons/payment.svg') ?>

            <div class="new__item__items__item__title">PAYMENT</div>
          </div>
        </div>
        <div class="new__item__items__item__ft__text new__item__items__item__ft__text__ft new__item__items__item__active">
          <div class="new__item__items__item__ft__text__title new__item__items__item__ft__text__title__ft">
            <span></span> <p> Big Data Storage 1</p>
          </div>
          <div class="new__item__items__item__ft__text__subtitle">
            Большая база данных для сбора, хранения и анализа гигантских объемов информации. 
            В дальнейшем обработка и вычисления будут вестись через сверхскоростной искусственный интеллект
          </div>
          <a href="" class="btn__p">ИНВЕСТИРОВАТЬ</a>
        </div>
        <div class="new__item__items__item__ft__text new__item__items__item__ft__text__sc">
          <div class="new__item__items__item__ft__text__title new__item__items__item__ft__text__title__sc">
            <span></span> <p> Big Data Storage 2</p>
          </div>
          <div class="new__item__items__item__ft__text__subtitle">
            Большая база данных для сбора, хранения и анализа гигантских объемов информации. 
            В дальнейшем обработка и вычисления будут вестись через сверхскоростной искусственный интеллект
          </div>
          <a href="" class="btn__p">ИНВЕСТИРОВАТЬ</a>
        </div>
        <div class="new__item__items__item__ft__text new__item__items__item__ft__text__th">
          <div class="new__item__items__item__ft__text__title new__item__items__item__ft__text__title__th">
            <span></span> <p> Big Data Storage 3</p>
          </div>
          <div class="new__item__items__item__ft__text__subtitle">
            Большая база данных для сбора, хранения и анализа гигантских объемов информации. 
            В дальнейшем обработка и вычисления будут вестись через сверхскоростной искусственный интеллект
          </div>
          <a href="" class="btn__p">ИНВЕСТИРОВАТЬ</a>
        </div>
        <div class="new__item__items__item__ft__text new__item__items__item__ft__text__fo">
          <div class="new__item__items__item__ft__text__title new__item__items__item__ft__text__title__fo">
            <span></span> <p> Big Data Storage 4</p>
          </div>
          <div class="new__item__items__item__ft__text__subtitle">
            Большая база данных для сбора, хранения и анализа гигантских объемов информации. 
            В дальнейшем обработка и вычисления будут вестись через сверхскоростной искусственный интеллект
          </div>
          <a href="" class="btn__p">ИНВЕСТИРОВАТЬ</a>
        </div>
        <div class="new__item__items__item__sc__text">
          <p class="new__item__items__item__sc__text__title">
            <span>a</span>  PAYMENT TEXT
          </p>
          <div class="new__item__items__item__sc__text__subtitle">
            Большая база данных для сбора, хранения и анализа гигантских об
            <a href="">ИНВЕСТИРОВАТЬ</a>
          </div>
        </div>
        <div class="new__item__items__item__th__text">
          <p class="new__item__items__item__th__text__title">
            <span>a</span>  PAYMENT TEXT
          </p>
          <div class="new__item__items__item__th__text__subtitle">
            Большая база данных для сбора, хранения и анализа гигантских об
            <a href="">ИНВЕСТИРОВАТЬ</a>
          </div>
        </div>
        <div class="new__item__items__item__fo__text">
          <p class="new__item__items__item__fo__text__title">
            <span>a</span>  PAYMENT TEXT
          </p>
          <div class="new__item__items__item__fo__text__subtitle">
            Большая база данных для сбора, хранения и анализа гигантских об
            <a href="">ИНВЕСТИРОВАТЬ</a>
          </div>
        </div>
      </div>
      <div class="new__item wow bounceInRight">
        <h2 class="new__item__title">Новые <span>ТЕХНОЛОГИИ</span></h2>
        <div class="new__item__text">

          Децентрализованная платформа UMC функционирует 
          на основе умных контрактов. Они являются гарантом исполнения любых заключенных соглашений внутри экосистемы.
        </div>
        <div class="new__item__line"></div>
        <div class="new__item__subtext">
          Технически платформа UMC будет реализована на различных платформах-мессенджерах в виде БОТов, а также в виде WEB-площадки. Финансирование реализации проекта осуществляется за счет средств привлекаемых посредством ICO.
        </div>
      </div>
    </div>
  </div>
</section>
<section class="subnew">
  <div class="subnew__ellipse4">
   <img  src="#" data-src="img/svg/bg/ellipse4.svg" alt="">

 </div>
 <div class="container">
  <div class="subnew__row">
    <div class="subnew__item">
      <div class="subnew__item__title subnew__item__title__1"></div>
      <h3 class="subnew__item__subtitle">
        Доступна оплата абсолютно любой рекламы и любых платных услуг в экосистеме UMC. Все финансовые операции в UMC производятся исключительно в токенах UMCC.
      </h3>
    </div>
    <div class="subnew__item">
      <div class="subnew__item__title subnew__item__title__2"></div>
      <div class="subnew__item__subtitle">
        Вы можете находиться в любой точке земного шара и при этом легко и удобно заказывать рекламу. Никаких лишних комиссий, разницы курсов валют!
      </div>
    </div>
    <div class="subnew__item">
      <div class="subnew__item__title subnew__item__title__3"></div>
      <div class="subnew__item__subtitle">
        UMCC – абсолютно прозрачный механизм взаиморасчетов между всеми участниками экосистемы, ценность и востребованность которого потенциально растет.
      </div>
    </div>
  </div>
</div>
</section>
<section class="preemesty">
  <div class="container">
    <h2 class="preemesty__title">
      Преимущества ICO
    </h2>
    <div class="preemesty__subtitle">
      Успейте приобрести токены UMCC на ранних стадиях ICO и получите самые высокие бонусы!
    </div>
    <div class="row">
      <div class="preemesty__item">
        <img class="" src="#" data-src="img/svg/UMC_DESIGN_ELEMENTS/eco.svg" alt="">
        <div class="preemesty__item__ob">
          <div class="preemesty__item__ob__blue preemesty__item__ob__ai wow bounceIn">
            AI
          </div>
          <div class="preemesty__item__ob__white preemesty__item__ob__ico wow bounceIn
          " data-wow-delay="1s">
          ICO
        </div>
        <div class="preemesty__item__ob__blue preemesty__item__ob__mark wow bounceIn
        " data-wow-delay=".1s">
        Биржа реклам
      </div>
      <div class="preemesty__item__ob__white preemesty__item__ob__media wow bounceIn
      " data-wow-delay="1.3s">
      Медиа сеть
    </div>
    <div class="preemesty__item__ob__blue preemesty__item__ob__trade wow bounceIn
    " data-wow-delay="1.5s">
    Per-to-Per Token Trading
  </div>
  <div class="preemesty__item__ob__white preemesty__item__ob__media__sc wow bounceIn
  " data-wow-delay="1.6s">
  Медиа сеть
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__bote wow bounceIn
" data-wow-delay="1.2s">
Разработчики ботов 
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__maneger wow bounceIn
" data-wow-delay=".8s">
Пользователи мессенджеров
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__sale wow bounceIn
" data-wow-delay="1.6s">
Продавцы рекламы
</div>
<div class="preemesty__item__ob__blue preemesty__item__ob__market wow bounceIn
" data-wow-delay=".5s">
BOT Market Place 
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__ico__sc wow bounceIn
" data-wow-delay=".2s">
ICO
</div>
<div class="preemesty__item__ob__blue preemesty__item__ob__mark__sc wow bounceIn" data-wow-delay=".9s">
  Per-to-Per реклама
</div>

</div>
</div>
<div class="preemesty__item preemesty__item__mobtextshow">
  <div class="preemesty__item__title">
    <p>Операционная <span> эко-система</span></p>
  </div>
  <div class="preemesty__item__text">
    Доход платформы UMC будет состоять из комиссионных отчислений за проводимые внутри платформы финансовые операции. Схематичное отображение экосистемы платформы и источников ее доходов представлено на схеме ниже:
  </div>
  <div class="preemesty__item__subtext">
    Внешний круг - клиенты / пользователи платформы. Внутренний - инструменты платформы. Активы в собственности у владельца проекта не предусмотрены. Весь капитал ICO будет направлен на развитие платформы UMС
  </div>
  <a href="#" class="btn__p">ИНВЕСТИРУЙТЕ СЕЙЧАС</a>
</div>
<div class="preemesty__item__mob">
  <div class="preemesty__item__ob">
    <div class="preemesty__item__ob__blue preemesty__item__ob__ai wow bounceIn">
      AI
    </div>
    <div class="preemesty__item__ob__white preemesty__item__ob__ico wow bounceIn
    " data-wow-delay=".2s">
    ICO
  </div>
  <div class="preemesty__item__ob__blue preemesty__item__ob__mark wow bounceIn
  " data-wow-delay="1s">
  Биржа реклам
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__media wow bounceIn
" data-wow-delay=".12s">
Медиа сеть
</div>
<div class="preemesty__item__ob__blue preemesty__item__ob__trade wow bounceIn
" data-wow-delay=".4s">
Per-to-Per Token Trading
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__media__sc wow bounceIn
" data-wow-delay=".5s">
Медиа сеть
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__bote wow bounceIn
" data-wow-delay=".6s">
Разработчики ботов 
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__maneger wow bounceIn
" data-wow-delay="1s">
Пользователи мессенджеров
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__sale wow bounceIn
" data-wow-delay=".3s">
Продавцы рекламы
</div>
<div class="preemesty__item__ob__blue preemesty__item__ob__market wow bounceIn
" data-wow-delay=".7s">
BOT Market Place 
</div>
<div class="preemesty__item__ob__white preemesty__item__ob__ico__sc wow bounceIn
" data-wow-delay=".97s">
ICO
</div>
<div class="preemesty__item__ob__blue preemesty__item__ob__mark__sc wow bounceIn" data-wow-delay=".9s">
  Per-to-Per реклама
</div>

</div> 
</div>
</div>
</div>
</section>
<section class="bounse">
  <div class="bounse__ellipse5">
   <img  src="#" data-src="img/svg/bg/ellipse5.svg" alt="">
 </div>
 <div class="bounse__shadow">
   <img  src="#" data-src="img/svg/bg/shadow.svg" alt="">
 </div>
 <div class="container">
  <div class="bounse__row">
    <a href="#" class="btn__p bounse__items__mob">ИСПОЛЬЗОВАТЬ БОНУС</a>
    <div class="bounse__items bounse__items__ft">
      <div class="bounse__items__ft__absolute">
        <?php include('img/svg/UMC_DESIGN_ELEMENTS/bounce.svg') ?>
      </div>
      <div class="bounse__items__item">
        <div class="bounse__items__item__img">
          <?php include_once('img/svg/UMC_icons/padlock-unlock.svg') ?> <span>Активно сейчас</span>
        </div>
        <div class="bounse__items__item__text">
          Private sale
        </div>
        <div class="bounse__items__item__subtext ">
          Private sale terms
        </div>
      </div>
      <div class="bounse__items__item">

        <div class="bounse__items__item__img">
          <?php include_once('img/svg/UMC_icons/locked-padlock.svg') ?> 
        </div>
        <div class="bounse__items__item__text">
         PRE ICO
       </div>
       <div class="bounse__items__item__subtext ">
         <span>20% </span><span>15%</span>
       </div>
     </div>
     <div class="bounse__items__item">
      <div class="bounse__items__item__img">
        <?php include('img/svg/UMC_icons/locked-padlock.svg') ?> 
      </div>
      <div class="bounse__items__item__text">
       ICO
     </div>
     <div class="bounse__items__item__subtext">
       <span>10% </span><span>5% </span><span>0%</span>
     </div>
   </div>
 </div>
 <div class="bounse__items bounse__items__sc">
   <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/bounce_desk.svg') ?>

   <div class="bounse__items__sc__text">
     Цена токена: <span>1$</span>
     Биржа: <span>ERC 20</span>
   </div>
 </div>      
 <div class="bounse__items bounse__items__th">
  <h2 class="bounse__items__title">
    Наши <span>Бонусы</span>
  </h2>
  <div class="bounse__items__subtitle">
    Текст про то что вы крутые и даете возможность бонусов впринцепе для всехТекст про то что вы крутые и даете возможность бонусов впринцепе для всехТекст про то что вы крутые и даете возможность бонусов впринцепе для всех
  </div>
  <a href="#" class="btn__p bounse__items__mob__hidden">ИСПОЛЬЗОВАТЬ БОНУС</a>
</div>
</div>
</div>
</section>
<section class="system">
 <div class="system__ellipse6">
   <img  src="#" data-src="img/svg/bg/ellipse6.svg" alt="">
 </div>
 <div class="container">
  <div class="system__row">
    <div class="system__items">
      <div class="system__items__item">
        <div class="system__items__item__img">
          <span>Договоренности</span>

          <?php include_once('img/svg/UMC_icons/doc.svg') ?> 
        </div>
      </div>
      <div class="system__items__item">
        <div class="system__items__item__img">
          <span>Деньги</span>
          <?php include_once('img/svg/UMC_icons/money.svg') ?> 
        </div>
      </div>
      <div class="system__items__item">
        <div class="system__items__item__img">
          <span>Аналитика</span>
          <?php include_once('img/svg/UMC_icons/analytics.svg') ?> 
        </div>
      </div>
      <div class="system__items__item">
        <div class="system__items__item__img">
          <span>Персонал</span>
          <?php include_once('img/svg/UMC_icons/people.svg') ?> 
        </div>
      </div>
      <div class="system__items__item">
        <div class="system__items__item__img">
          <span>Деньги</span>
          <?php include_once('img/svg/UMC_icons/time.svg') ?> 
        </div>
      </div>
      <div class="system__items__item">
        <div class="system__items__item__img">
          <span>Фильтры</span>
          <?php include_once('img/svg/UMC_icons/filter.svg') ?> 
        </div>
      </div>
    </div>
    <div class="system__items">
      <div class="system__items__phone">
        <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/arrow.svg') ?>
        <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/phone_black.svg') ?>
        <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/phone_colored.svg') ?>
        <div class="system__items__phone__logo">
          <span>Все и сразу</span>
          <img class="" src="#" data-src="img/logo.png" alt="">
        </div>
      </div>
    </div>
    <div class="system__items wow shake">
      <h2 class="system__items__title">
        Несовершенствие современной 
        <span>cистемы</span>
      </h2>
      <div class="system__items__text">
        Инструменты SMM (Social Media Marketing) сегодня становятся все более востребованными в мессенджерах. Это обусловлено и рекордным ростом аудитории мессенджеров, и относительной легкостью адаптации инструментов SMM для целей маркетинга в мессенджерах. 
      </div>
      <div class="system__items__subtext">
        Однако даже самые популярные и продвинутые мессенджеры на текущий момент не обладают ни богатой инструментальной функциональностью, ни средствами всесторонней аналитики, ни эргономичным интерфейсом
      </div>
    </div>
  </div>
</div>
</section>
<section class="problem">  
 <div class="problem__ellipse92">
   <img  src="#" data-src="img/svg/bg/ellipse92.svg" alt="">
 </div>
 <div class="problem__ellipse8">
   <img  src="#" data-src="img/svg/bg/ellipse8.svg" alt="">
 </div>
 <div class="container">
  <h4 class="problem__title">
    как мы решаем <span>проблемы рынка</span>
  </h4>
  <div class="problem__row">
    <div class="problem__items wow fadeInRight">
      <div class="problem__items__item problem__items__item__r">
        <!-- <span>Анализ</span> -->
        <div class="problem__items__item__text problem__items__item__text__leftblock">
          <span class="problem__items__item__text__title">Анализ</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__l">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
        <div class="problem__items__item__img problem__items__item__img__r">
          <?php include_once('img/svg/UMC_icons/4.svg') ?>
        </div>
      </div>
      <div class="problem__items__item problem__items__item__r">
        <!-- <span>Время</span> -->
                <div class="problem__items__item__text problem__items__item__text__leftblock__r">
          <span class="problem__items__item__text__title">Время</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__l">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
        <div class="problem__items__item__img problem__items__item__img__r">
          <?php include_once('img/svg/UMC_icons/5.svg') ?>
        </div>
      </div>
      <div class="problem__items__item problem__items__item__r"> 
        <!-- <span>Проверка</span> -->
                <div class="problem__items__item__text problem__items__item__text__leftblock">
          <span class="problem__items__item__text__title">Проверка</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__l">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
        <div class="problem__items__item__img problem__items__item__img__last problem__items__item__img__r">
          <?php include_once('img/svg/UMC_icons/6.svg') ?>
        </div>
      </div>
    </div>
    <div class="problem__items">
     <div class="problem__items__sc">
       <div class="problem__items__sc__img">
         <img class="" src="#" data-src="img/logo.png" alt="">
       </div>
       <div class="problem__items__sc__text">
         Решение актуальных проблем рынка в единой системе
       </div>
     </div>
   </div>
   <div class="problem__items wow fadeInLeft">
    <div class="problem__items__item">
      <div class="problem__items__item__img">
        <?php/ include_once('img/svg/UMC_icons/1.svg') ?>
      </div>
      <!-- <span>Оплата</span> -->
              <div class="problem__items__item__text">
          <span class="problem__items__item__text__title">Оплата</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__r">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
    </div>
    <div class="problem__items__item">
      <div class="problem__items__item__img">
        <?php include_once('img/svg/UMC_icons/2.svg') ?>
      </div>
<!--       <span class="problem__items__item__span">Cамостоятельное изучение статистики, одновременно на разных рес</span> -->
        <div class="problem__items__item__text problem__items__item__text__r">
          <span class="problem__items__item__text__title">Анализ</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__r">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
    </div>
    <div class="problem__items__item">
      <div class="problem__items__item__img">
        <?php include_once('img/svg/UMC_icons/3.svg') ?>
      </div>
      <!-- <span>Затраты</span> -->
              <div class="problem__items__item__text">
          <span class="problem__items__item__text__title">Затраты</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__r">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
    </div>
  </div> 
</div>
<div class="problem__row__mob">
  <div class="problem__items__mob">
   <div class="problem__items__sc">
     <div class="problem__items__sc__img">
       <img class="" src="#" data-src="img/logo.png" alt="">
     </div>
     <div class="problem__items__sc__text">
       Решение актуальных проблем рынка в единой системе
     </div>
   </div>
 </div>
 <div class="problem__items__mob">
  <div class="problem__items__item__mob problem__items__item__mob__active">
    <button class="problem__items__item__img__mob">
      <!-- <img class="" src="#" data-src="img/svg/UMC_icons/1.svg" alt=""> -->
        <?php/ include('img/svg/UMC_icons/1.svg') ?>

    </button>
    <!-- <span>Оплата</span> -->
                      <div class="problem__items__item__text">
          <span class="problem__items__item__text__title">Анализ
</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__r">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
  </div>
  <div class="problem__items__item__mob">
    <button class="problem__items__item__img__mob">
      <!-- <img class="" src="#" data-src="img/svg/UMC_icons/2.svg" alt=""> -->
        <?php/ include('img/svg/UMC_icons/2.svg') ?>

    </button>
    <!-- <span class="problem__items__item__mob">Cамостоятельное изучение статистики, одновременно на разных рес</span> -->
                  <div class="problem__items__item__text">
          <span class="problem__items__item__text__title">Время
</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__r">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
  </div>
  <div class="problem__items__item__mob">
    <button class="problem__items__item__img__mob">
      <!-- <img class="" src="#" data-src="img/svg/UMC_icons/3.svg" alt=""> -->
        <?php/ include('img/svg/UMC_icons/3.svg') ?>

    </button>
    <!-- <span>Затраты</span> -->
                      <div class="problem__items__item__text">
          <span class="problem__items__item__text__title">Проверка
</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__r">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
  </div>
  <div class="problem__items__item__mob">
    <button class="problem__items__item__img__mob">
      <!-- <img class="" src="#" data-src="img/svg/UMC_icons/4.svg" alt=""> -->
        <?php/ include('img/svg/UMC_icons/4.svg') ?>

    </button>
    <!-- <span>Анализ</span> -->
                      <div class="problem__items__item__text">
          <span class="problem__items__item__text__title">Оплата</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__r">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
  </div>
  <div class="problem__items__item__mob">
    <button class="problem__items__item__img__mob">
      <!-- <img class="" src="#" data-src="img/svg/UMC_icons/5.svg" alt=""> -->
        <?php/ include('img/svg/UMC_icons/5.svg') ?>

    </button>
    <!-- <span>Время</span> -->
                      <div class="problem__items__item__text">
          <span class="problem__items__item__text__title">Анализ</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__r">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
  </div>
  <div class="problem__items__item__mob"> 
    <button class="problem__items__item__img__mob">
      <!-- <img class="" src="#" data-src="img/svg/UMC_icons/6.svg" alt="">  -->
        <?php/ include('img/svg/UMC_icons/6.svg') ?>


               </button>
      <!-- <span>Проверка</span> -->
                        <div class="problem__items__item__text">
          <span class="problem__items__item__text__title">Затраты</span>
          <span class="problem__items__item__text__sub problem__items__item__text__sub__r">Cамостоятельное изучение статистики, одновременно на разных рес</span>
        </div>
    </div>
  </div>
</div>
<div class="problem__btn">
  <a href="#" class="btn__p">ИНВЕСТИРУЙТЕ СЕЙЧАС</a></div>
</div>
</section>
<div class="btn wow fadeIn">
  <div class="container">
    <a href="#">
     <div class="btn__span">Подпишись на наш телеграм</div>
     <?php include_once('img/svg/UMC_icons/tg.svg') ?> <span class="btn__img">@UMC_community_EN</span>
   </a>
 </div>
</div>
<section class="mvp" id="mvp">
  <div class="mvp__ellipse8">
   <img  src="#" data-src="img/svg/bg/ellipse8.svg" alt="">

 </div>
 <div class="container">
  <div class="mvp__row wow zoomIn">
    <div class="mvp__items">
      <h2 class="mvp__items__title">
        MVP
      </h2>
      <p class="mvp__items__text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi eaque reiciendis
      </p>
      <p class="mvp__items__subtext">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis mollitia sit corrupti, nesciunt. Nihil, libero, adipisci dolorum deleniti consectetur fugit corporis odio distinctio
      </p>
      <div class="mvp__items__btn">
        <a href="#" class="btn__p">Опробовать</a>
      </div>
    </div>
    <div class="mvp__items">
      <div class="mvp__items__img">
        <div class="note">
          <div class="note__slider">
            <img src="img/v_photo.jpg" alt="">
            <img src="img/v_photo.jpg" alt="">
          </div>
        </div>
        <div class="mvp__items__img__absolute">
          <div class="phone">
            <div class="phone__slider2">
              <img src="img/v_photo.jpg" alt="">
              <img src="img/v_photo.jpg" alt="">
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="mvp__items__btn__mob">
      <a href="#" class="btn__p">Опробовать</a>
    </div>
  </div>
</div>
</section>
<section class="command" id="command">
  <div class="command__vector1">
   <img src="img/svg/bg/vector1.svg" alt="">

 </div>
 <div class="container">
  <div class="command__row">
    <h4 class="command__title">
      Наша<span>КОМАНДА</span>
    </h4>
    <span class="command__span"></span>
    <p class="command__text">
     Над проектом Universal Marketing Company работают профессионалы с многолетним опытом в сфере SMM-маркетинга, управления проектами и разработки соответствующего программного обеспечения, в том числе на основе блокчейн.
   </p>
 </div>
 <div class="command__items wow fadeIn">
  <div class="command__row">
    <div class="command__items__item">
      <div class="command__items__item__img">
        <img class="" src="#" data-src="img/comand1.png" alt="">
      </div>
      <div class="command__items__item__social">
       <a href="https://www.linkedin.com/in/sergey-petryk-563056110/" target="_blank"> 

        <?php include('img/svg/UMC_icons/in.svg') ?>

      </a>
      <a href="#"> 

        <?php include('img/svg/UMC_icons/tw.svg') ?></a>
        <a href="#">
          <?php include('img/svg/UMC_icons/f.svg') ?></a>
        </div>
        <div class="command__items__item__name">
          Sergey Petrik
        </div>
        <div class="command__items__item__jop">
         Co-founder / CSO (Chief Sales Officer)
       </div>
       <div class="command__items__item__info">
        Предприниматель. Блокчейн-энтузиаст.
        Основатель сообщества Crypto Time
      </div>
    </div>
    <div class="command__items__item">
      <div class="command__items__item__img">
        <img class="" src="#" data-src="img/command2.png" alt="">
      </div>
      <div class="command__items__item__social">
        <a href="https://www.linkedin.com/in/dmitry-a-kozlovsky/" target="_blank"> 
          <?php include('img/svg/UMC_icons/in.svg') ?>

        </a>
        <a href="#">
          <?php include('img/svg/UMC_icons/tw.svg') ?></a>
          <a href="#">
            <?php include('img/svg/UMC_icons/f.svg') ?></a>
          </div>
          <div class="command__items__item__name">
            Dmitry Kozlovsky
          </div>
          <div class="command__items__item__jop">
            CEO (Chief Executive Officer)
          </div>
          <div class="command__items__item__info">
            Предприниматель. Профессиональный менеджер-практик. Более 13 лет на различных управляющих должностях
          </div>
        </div>
        <div class="command__items__item">
          <div class="command__items__item__img">
            <img class="" src="#" data-src="img/command3.png" alt="">
          </div>
          <div class="command__items__item__social">
            <a href="https://www.linkedin.com/in/blockchainnerd/" target="_blank"> 
              <?php include('img/svg/UMC_icons/in.svg') ?>

            </a>
            <a href="#"> 
              <?php include('img/svg/UMC_icons/tw.svg') ?></a>
              <a href="#"> 
                <?php include('img/svg/UMC_icons/f.svg') ?></a>
              </div>
              <div class="command__items__item__name">
                Grigory Rybalchenko
              </div>
              <div class="command__items__item__jop">
                Co-founder / CIO (Chief Information Officer)
              </div>
              <div class="command__items__item__info">
                Предприниматель. Владелец нескольких компаний, в том числе по ИТ консалтингу и разработкам
              </div>
            </div>
          </div>
        </div>
        <div class="command__items wow fadeIn command__items__hidden">
          <div class="command__row">
            <div class="command__items__item">
              <div class="command__items__item__img">
                <img class="" src="#" data-src="img/comand1.png" alt="">
              </div>
              <div class="command__items__item__social">
               <a href="#"> 
                <?php include('img/svg/UMC_icons/in.svg') ?>

              </a>
              <a href="#"> 
                <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                <a href="#"> 
                  <?php include('img/svg/UMC_icons/f.svg') ?></a>
                </div>
                <div class="command__items__item__name">
                  Sergey Petrik
                </div>
                <div class="command__items__item__jop">
                 Co-founder / CSO (Chief Sales Officer)
               </div>
               <div class="command__items__item__info">
                Предприниматель. Блокчейн-энтузиаст.
                Основатель сообщества Crypto Time
              </div>
            </div>
            <div class="command__items__item">
              <div class="command__items__item__img">
                <img class="" src="#" data-src="img/command2.png" alt="">
              </div>
              <div class="command__items__item__social">
                <a href="#"> 
                  <?php include('img/svg/UMC_icons/in.svg') ?>

                </a>
                <a href="#"> 
                  <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                  <a href="#">
                    <?php include('img/svg/UMC_icons/f.svg') ?></a>
                  </div>
                  <div class="command__items__item__name">
                    Dmitry Kozlovsky
                  </div>
                  <div class="command__items__item__jop">
                    CEO (Chief Executive Officer)
                  </div>
                  <div class="command__items__item__info">
                    Предприниматель. Профессиональный менеджер-практик. Более 13 лет на различных управляющих должностях
                  </div>
                </div>
                <div class="command__items__item">
                  <div class="command__items__item__img">
                    <img class="" src="#" data-src="img/command3.png" alt="">
                  </div>
                  <div class="command__items__item__social">
                    <!--  -->
                    <a href="#"> 
                      <?php include('img/svg/UMC_icons/in.svg') ?>

                    </a>
                    <a href="#"> 
                      <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                      <a href="#">
                        <?php include('img/svg/UMC_icons/f.svg') ?></a>
                      </div>
                      <div class="command__items__item__name">
                        Grigory Rybalchenko
                      </div>
                      <div class="command__items__item__jop">
                        Co-founder / CIO (Chief Information Officer)
                      </div>
                      <div class="command__items__item__info">
                        Предприниматель. Владелец нескольких компаний, в том числе по ИТ консалтингу и разработкам
                      </div>
                    </div>
                    <div class="command__items__item">
                      <div class="command__items__item__img">
                        <img class="" src="#" data-src="img/comand1.png" alt="">
                      </div>
                      <div class="command__items__item__social "> 
                       <a href="#"> 
                        <?php include('img/svg/UMC_icons/in.svg') ?>

                      </a>
                      <a href="#"> 
                        <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                        <a href="#"> 
                          <?php include('img/svg/UMC_icons/f.svg') ?></a>
                        </div>
                        <div class="command__items__item__name">
                          Sergey Petrik
                        </div>
                        <div class="command__items__item__jop">
                         Co-founder / CSO (Chief Sales Officer)
                       </div>
                       <div class="command__items__item__info">
                        Предприниматель. Блокчейн-энтузиаст.
                        Основатель сообщества Crypto Time
                      </div>
                    </div>
                    <div class="command__items__item">
                      <div class="command__items__item__img">
                        <img class="" src="#" data-src="img/command2.png" alt="">
                      </div>
                      <div class="command__items__item__social">
                        <a href="#">
                          <?php include('img/svg/UMC_icons/in.svg') ?>

                        </a>
                        <a href="#"> 
                          <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                          <a href="#"> 

                            <?php include('img/svg/UMC_icons/f.svg') ?></a>
                          </div>
                          <div class="command__items__item__name">
                            Dmitry Kozlovsky
                          </div>
                          <div class="command__items__item__jop">
                            CEO (Chief Executive Officer)
                          </div>
                          <div class="command__items__item__info">
                            Предприниматель. Профессиональный менеджер-практик. Более 13 лет на различных управляющих должностях
                          </div>
                        </div>
                        <div class="command__items__item">
                          <div class="command__items__item__img">
                            <img class="" src="#" data-src="img/command3.png" alt="">
                          </div>
                          <div class="command__items__item__social">
                            <!--  -->
                            <a href="#"> 

                              <?php include('img/svg/UMC_icons/in.svg') ?>

                            </a>
                            <a href="#"> 

                              <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                              <a href="#"> 

                                <?php include('img/svg/UMC_icons/f.svg') ?></a>
                              </div>
                              <div class="command__items__item__name">
                                Grigory Rybalchenko
                              </div>
                              <div class="command__items__item__jop">
                                Co-founder / CIO (Chief Information Officer)
                              </div>
                              <div class="command__items__item__info">
                                Предприниматель. Владелец нескольких компаний, в том числе по ИТ консалтингу и разработкам
                              </div>
                            </div>
                            <div class="command__items__item">
                              <div class="command__items__item__img">
                                <img class="" src="#" data-src="img/comand1.png" alt="">
                              </div>
                              <div class="command__items__item__social ">
                                <a href="">
                                  <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                  <a href="#"> 

                                    <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                    <a href="#"> 

                                      <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                    </div>
                                    <div class="command__items__item__name">
                                      Sergey Petrik
                                    </div>
                                    <div class="command__items__item__jop">
                                     Co-founder / CSO (Chief Sales Officer)
                                   </div>
                                   <div class="command__items__item__info">
                                    Предприниматель. Блокчейн-энтузиаст.
                                    Основатель сообщества Crypto Time
                                  </div>
                                </div>
                                <div class="command__items__item">
                                  <div class="command__items__item__img">
                                    <img class="" src="#" data-src="img/command2.png" alt="">
                                  </div>
                                  <div class="command__items__item__social">
                                    <a href="#"> 

                                      <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                      <a href="#"> 

                                        <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                        <a href="#"> 

                                          <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                        </div>
                                        <div class="command__items__item__name">
                                          Dmitry Kozlovsky
                                        </div>
                                        <div class="command__items__item__jop">
                                          CEO (Chief Executive Officer)
                                        </div>
                                        <div class="command__items__item__info">
                                          Предприниматель. Профессиональный менеджер-практик. Более 13 лет на различных управляющих должностях
                                        </div>
                                      </div>
                                      <div class="command__items__item">
                                        <div class="command__items__item__img">
                                          <img class="" src="#" data-src="img/command3.png" alt="">
                                        </div>
                                        <div class="command__items__item__social">
                                          <!--  -->
                                          <a href="#"> 

                                            <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                            <a href="#"> 

                                              <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                              <a href="#"> 

                                                <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                              </div>
                                              <div class="command__items__item__name">
                                                Grigory Rybalchenko
                                              </div>
                                              <div class="command__items__item__jop">
                                                Co-founder / CIO (Chief Information Officer)
                                              </div>
                                              <div class="command__items__item__info">
                                                Предприниматель. Владелец нескольких компаний, в том числе по ИТ консалтингу и разработкам
                                              </div>
                                            </div>
                                            <div class="command__items__item">
                                              <div class="command__items__item__img">
                                                <img class="" src="#" data-src="img/comand1.png" alt="">
                                              </div>
                                              <div class="command__items__item__social">
                                               <a href="https://www.linkedin.com/in/paul-vlasov-5aa46a159/" target="_blank">

                                                <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                                <a href="#">

                                                  <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                                  <a href="#">

                                                    <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                                  </div>
                                                  <div class="command__items__item__name">
                                                    Pavel Vlasov
                                                  </div>
                                                  <div class="command__items__item__jop">
                                                    CMO (Chief Marketing Officer)
                                                  </div>
                                                  <div class="command__items__item__info">
                                                    Предприниматель. Блокчейн-энтузиаст.
                                                    Основатель сообщества Crypto Time
                                                  </div>
                                                </div>
                                                <div class="command__items__item">
                                                  <div class="command__items__item__img">
                                                    <img class="" src="#" data-src="img/command2.png" alt="">
                                                  </div>
                                                  <div class="command__items__item__social">
                                                    <a href="https://www.linkedin.com/in/viacheslav-varchenko" target="_blank">  
                                                      <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                                      <a href="#"> 
                                                        <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                                        <a href="#"> 
                                                          <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                                        </div>
                                                        <div class="command__items__item__name">
                                                          Vyacheslav Varchenko
                                                        </div>
                                                        <div class="command__items__item__jop">
                                                          Director of Public Relations
                                                        </div>
                                                        <div class="command__items__item__info">
                                                          Предприниматель. Профессиональный менеджер-практик. Более 13 лет на различных управляющих должностях
                                                        </div>
                                                      </div>
                                                      <div class="command__items__item">
                                                        <div class="command__items__item__img">
                                                          <img class="" src="#" data-src="img/command3.png" alt="">
                                                        </div>
                                                        <div class="command__items__item__social">
                                                          <a href="https://www.linkedin.com/in/andrey-dyachok" target="_blank"> 
                                                            <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                                            <a href="#"> 
                                                              <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                                              <a href="#"> 
                                                                <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                                              </div>
                                                              <div class="command__items__item__name">
                                                                Andrey Dyachok
                                                              </div>
                                                              <div class="command__items__item__jop">
                                                                COO (Chief Operating Officer)
                                                              </div>
                                                              <div class="command__items__item__info">
                                                                Предприниматель. Владелец нескольких компаний, в том числе по ИТ консалтингу и разработкам
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="command__btn">
                                                          <a href="#" class="btn__p btn__command">Открыть всю команду</a>
                                                        </div>
                                                      </div>
                                                    </section>
                                                    <section class="exp">
                                                      <div class="exp__ellipse9">
                                                       <img  src="#" data-src="img/svg/bg/ellipse9.svg" alt="">
                                                     </div>
                                                     <div class="container">
                                                      <div class="exp__title">
                                                        <h3>Опыт команды в компаниях:</h3>
                                                      </div>
                                                      <div class="exp__item1">
                                                        <div class="exp__row">
                                                          <img class="" src="#" data-src="img/sap.png" alt="">
                                                          <img class="" src="#" data-src="img/ibm.png" alt="">
                                                          <img class="" src="#" data-src="img/micro.png" alt="">
                                                          <img class="" src="#" data-src="img/1c.png" alt="">
                                                          <img class="" src="#" data-src="img/oracle.png" alt="">
                                                        </div>
                                                      </div>
                                                      <div class="exp__item2">
                                                        <img class="" src="#" data-src="img/goodyear.png" alt="">
                                                        <img class="" src="#" data-src="img/coca.png" alt="">
                                                        <img class="" src="#" data-src="img/tele2.png" alt="">
                                                        <img class="" src="#" data-src="img/carlsberggroup.png" alt="">
                                                      </div>    
                                                    </div>
                                                  </section>
                                                  <section class="ed"> 
                                                    <div class="container">  
                                                      <div class="command__title__sub"> 
                                                        <h3>Эдвайзеры</h3>
                                                      </div>
                                                      <div class="command__items wow zoomIn">
                                                        <div class="command__row">
                                                          <div class="command__items__item">
                                                            <div class="command__items__item__img">
                                                              <img class="" src="#" data-src="img/command4.png" alt="">
                                                            </div>
                                                            <div class="command__items__item__social">
                                                             <a href="#"> 
                                                              <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                                              <a href="#"> 
                                                                <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                                                <a href="#"> 
                                                                  <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                                                </div>
                                                                <div class="command__items__item__name">
                                                                  Irina Heaver
                                                                </div>
                                                                <div class="command__items__item__info">
                                                                  Partner and Head of Corporate and Commercial at Fichte&Co
                                                                </div>
                                                                <div class="command__items__item__logo"> 
                                                                  <img class="" src="#" data-src="img/fichteco.png" alt=""> 
                                                                </div>  
                                                              </div>
                                                              <div class="command__items__item">
                                                                <div class="command__items__item__img">
                                                                  <img class="" src="#" data-src="img/command5.png" alt="">
                                                                </div>
                                                                <div class="command__items__item__social">
                                                                  <a href="#"> 
                                                                    <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                                                    <a href="#"> 
                                                                      <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                                                      <a href="#"> 
                                                                        <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                                                      </div>
                                                                      <div class="command__items__item__name">
                                                                        Nikolay Babenko
                                                                      </div>
                                                                      <div class="command__items__item__info">
                                                                        Co-founder Threefold
                                                                      </div>
                                                                      <div class="command__items__item__logo"> 
                                                                        <img class="" src="#" data-src="img/thr.png" alt=""> 
                                                                      </div> 
                                                                    </div>
                                                                    <div class="command__items__item">
                                                                      <div class="command__items__item__img">
                                                                        <img src="img/command6.png" alt="">
                                                                      </div>
                                                                      <div class="command__items__item__social">
                                                                        <a href="#"> 
                                                                          <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                                                          <a href="#"> 
                                                                            <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                                                            <a href="#"> 
                                                                              <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                                                            </div>
                                                                            <div class="command__items__item__name">
                                                                              Teimur Tmuslim
                                                                            </div>
                                                                            <div class="command__items__item__info">
                                                                              Founder Top Traders
                                                                            </div>
                                                                            <div class="command__items__item__logo"> 
                                                                              <img class="" src="#" data-src="img/top.png" alt=""> 
                                                                            </div> 
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </section>
                                                                  <section class="our">
                                                                    <div class="our__ellipse10">
                                                                     <img src="#" data-src="img/svg/bg/ellipse10.svg" alt="">
                                                                   </div>
                                                                   <div class="container">
                                                                    <h3 class="our__title">
                                                                      МЫ в <span> цифре</span>
                                                                    </h3>
                                                                    <div class="our__items">
                                                                      <div class="our__item wow zoomIn">
                                                                        <div class="our__item__text">Распределение бюджета:
                                                                        </div>
                                                                        <div class="our__item__text">
                                                                          <span class="our__item__text__sercla"></span>
                                                                          <span>41%</span><span>  Маркетинг </span>
                                                                        </div>
                                                                        <div class="our__item__text">
                                                                          <span class="our__item__text__sercla our__item__text__sercla__sc"></span>
                                                                          <span>29%</span><span> Разработка (ЗП, ПО, железо) </span>
                                                                        </div>
                                                                        <div class="our__item__text">
                                                                          <span class="our__item__text__sercla our__item__text__sercla__th"></span>
                                                                          <span>13%</span> <span> Операционные  расходы  </span>
                                                                        </div>
                                                                        <div class="our__item__text">
                                                                          <span class="our__item__text__sercla our__item__text__sercla__fo"></span>
                                                                          <span>10%</span><span> Не классифицируемые  </span>
                                                                        </div>
                                                                        <div class="our__item__text">
                                                                          <span class="our__item__text__sercla our__item__text__sercla__fi"></span>
                                                                          <span>7%</span> <span> услуги </span>
                                                                        </div>
                                                                      </div>
                                                                      <div class="our__item">
                                                                        <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/group.svg') ?>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </section>
                                                                <div class="line"></div>
                                                                <div class="our">
                                                                  <div class="our__ellipse11">
                                                                   <img src="#" data-src="img/svg/bg/ellipse11.svg" alt="">
                                                                 </div>
                                                                 <div class="container">
                                                                  <div class="our__items">
                                                                    <div class="our__item">
                                                                      <?php include_once('img/svg/UMC_DESIGN_ELEMENTS/group-1.svg') ?>
                                                                    </div>
                                                                    <div class="our__item wow fadeIn">
                                                                      <div class="our__item__text">Распределение токенов:
                                                                      </div>
                                                                      <div class="our__item__text">
                                                                        <span class="our__item__text__sercla__sec"></span>
                                                                        <span>64%</span><span>учАСНИКИ tOKEN SALE </span>
                                                                      </div>
                                                                      <div class="our__item__text">
                                                                        <span class="our__item__text__sercla__sec our__item__text__sercla__sec__sc"></span>
                                                                        <span>14%</span> <span>кОМАНДА ПРОЕКТА </span>
                                                                      </div>
                                                                      <div class="our__item__text">
                                                                        <span class="our__item__text__sercla__sec our__item__text__sercla__sec__th"></span>
                                                                        <span>10%</span> <span> рЕЗЕРВ ПЛАТФОРМЫ umc </span>
                                                                      </div>
                                                                      <div class="our__item__text">
                                                                        <span class="our__item__text__sercla__sec our__item__text__sercla__sec__fo"></span>
                                                                        <span>5%</span> <span> мАРКЕТИНГ </span>
                                                                      </div>
                                                                      <div class="our__item__text">
                                                                        <span class="our__item__text__sercla__sec our__item__text__sercla__sec__fi"></span>
                                                                        <span>5%</span>  <span> аДВАЙЗЕРЫ </span>
                                                                      </div>
                                                                      <div class="our__item__text">
                                                                        <span class="our__item__text__sercla__sec our__item__text__sercla__sec__si"></span>
                                                                        <span>2%</span> <span>bOUNTY & aRIDROP </span>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>

                                                              </div>
                                                              <div class="btn__bottom wow zoomIn">
                                                                <div class="container">
                                                                  <div class="btn__bottom__a">
                                                                   <span class="btn__bottom__span">СЛЕДИ ЗА СОЦ. СЕТЯМИ</span>
                                                                   <a href="#">
                                                                    <?php include('img/svg/UMC_icons/tg.svg') ?></a>
                                                                    <a href="#">
                                                                      <?php include('img/svg/UMC_icons/m.svg') ?></a>
                                                                      <a href="#">
                                                                        <?php include('img/svg/UMC_icons/in.svg') ?></a>
                                                                        <a href="#">
                                                                          <?php include('img/svg/UMC_icons/tw.svg') ?></a>
                                                                          <a href="#">
                                                                            <?php include('img/svg/UMC_icons/f.svg') ?></a>
                                                                            <a href="#">
                                                                              <?php include('img/svg/UMC_icons/b.svg') ?></a>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                        <section class="road">
                                                                          <div class="road__ellipse12">
                                                                           <img src="#" data-src="img/svg/bg/ellipse12.svg" alt="">
                                                                         </div>
                                                                         <div class="container">
                                                                          <h4 class="road__title">
                                                                            ROADMAP
                                                                          </h4>
                                                                          <div class="road__subtitle">
                                                                            Более подробную информацию, получите кликнув на квартал 
                                                                          </div>
                                                                          <div class="road__map__mob">
                                                                           <div class="road__map__mob__items wow fadeIn">
                                                                             <div class="road__map__mob__items__title road__map__mob__items__title__ft">
                                                                               <div class="road__map__mob__items__title__absoult road__map__mob__items__title__absoult__s">
                                                                                 <img src="img/svg/i.svg" alt="">
                                                                               </div> 

                                                                               <span>IV кв. 2017 г.</span>
                                                                               <span class="road__map__mob__items__title__w"></span>
                                                                             </div>
                                                                             <div class="road__map__mob__items__subtitle road__map__mob__items__subtitle__ft">
                                                                              Команда и концепция платформы UMC
                                                                              <div class="road__map__mob__items__subtitle__flex">

                                                                                <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Переход на Big Data 2
                                                                                  </span>
                                                                             </div>
                                                                           </div>

                                                                               <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Август-Сентябрь 2018 г.
                                                                                  </span>
                                                                                  <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                   Разработка
                                                                                 </span>
                                                                                 <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                  функциональности
                                                                                </span>
                                                                                <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                 “Обменник”
                                                                               </span>
                                                                             </div>
                                                                           </div>
                                                                            <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Разработка биржи ботов
                                                                                  </span>
                                                                             </div>
                                                                           </div>

                                                                           <div class="road__map__mob__items__subtitle__item">
                                                                             <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                             <div class="road__map__mob__items__subtitle__text">
                                                                               <span class="road__map__mob__items__subtitle__text__title">
                                                                                 Январь-Апрель 2018 г.
                                                                               </span>
                                                                               <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                Разработка Beta 1 первого продукта платформы - Telegram БОТа
                                                                              </span>
                                                                            </div>
                                                                          </div>
                                                                          <div class="road__map__mob__items__subtitle__item">
                                                                           <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                           <div class="road__map__mob__items__subtitle__text">
                                                                             <span class="road__map__mob__items__subtitle__text__title">
                                                                              Начиная с января 2019 г.
                                                                            </span>

                                                                            <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                             Внедрение и развитие Artificial intelligence
                                                                           </span>

                                                                         </div>
                                                                       </div>
                                                                       <div class="road__map__mob__items__subtitle__item">
                                                                         <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                         <div class="road__map__mob__items__subtitle__text">
                                                                           <span class="road__map__mob__items__subtitle__text__title">
                                                                             Май-Июнь 2018 г.
                                                                           </span>
                                                                           <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                            Разработка Beta 2 первого продукта платформы - Telegram БОТа интеграция с фиатными платежными системами
                                                                          </span>
                                                                        </div>
                                                                      </div>
                                                                      <div class="road__map__mob__items__subtitle">
                                                                      Разработка биржи ботов</div>
                                                                      <div class="road__map__mob__items__subtitle__item">
                                                                       <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                       <div class="road__map__mob__items__subtitle__text">
                                                                         <span class="road__map__mob__items__subtitle__text__title">
                                                                          Июль 2018 г
                                                                        </span>
                                                                        <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                         Разработка GM первого продукта платформы - Telegram БОТа (интеграция с blockchain)
                                                                       </span>
                                                                     </div>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                             <div class="road__map__mob__items">
                                                              <div class="road__map__mob__items__title road__map__mob__items__title__sc">
                                                               <div class="road__map__mob__items__title__absoult">
                                                                 <img src="img/svg/ii.svg" alt="">
                                                                 <?php// include_once('') ?>
                                                               </div> 
                                                               <span>I кв. 2018г.</span>
                                                             </div>
                                                             <div class="road__map__mob__items__subtitle road__map__mob__items__subtitle__sc">
                                                              Команда и концепция платформы UMC
                                                           <div class="road__map__mob__items__subtitle__flex">

                                                                                <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Переход на Big Data 2
                                                                                  </span>
                                                                             </div>
                                                                           </div>

                                                                               <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Август-Сентябрь 2018 г.
                                                                                  </span>
                                                                                  <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                   Разработка
                                                                                 </span>
                                                                                 <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                  функциональности
                                                                                </span>
                                                                                <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                 “Обменник”
                                                                               </span>
                                                                             </div>
                                                                           </div>
                                                                            <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Разработка биржи ботов
                                                                                  </span>
                                                                             </div>
                                                                           </div>

                                                                           <div class="road__map__mob__items__subtitle__item">
                                                                             <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                             <div class="road__map__mob__items__subtitle__text">
                                                                               <span class="road__map__mob__items__subtitle__text__title">
                                                                                 Январь-Апрель 2018 г.
                                                                               </span>
                                                                               <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                Разработка Beta 1 первого продукта платформы - Telegram БОТа
                                                                              </span>
                                                                            </div>
                                                                          </div>
                                                                          <div class="road__map__mob__items__subtitle__item">
                                                                           <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                           <div class="road__map__mob__items__subtitle__text">
                                                                             <span class="road__map__mob__items__subtitle__text__title">
                                                                              Начиная с января 2019 г.
                                                                            </span>

                                                                            <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                             Внедрение и развитие Artificial intelligence
                                                                           </span>

                                                                         </div>
                                                                       </div>
                                                                       <div class="road__map__mob__items__subtitle__item">
                                                                         <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                         <div class="road__map__mob__items__subtitle__text">
                                                                           <span class="road__map__mob__items__subtitle__text__title">
                                                                             Май-Июнь 2018 г.
                                                                           </span>
                                                                           <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                            Разработка Beta 2 первого продукта платформы - Telegram БОТа интеграция с фиатными платежными системами
                                                                          </span>
                                                                        </div>
                                                                      </div>
                                                                      <div class="road__map__mob__items__subtitle">
                                                                      Разработка биржи ботов</div>
                                                                      <div class="road__map__mob__items__subtitle__item">
                                                                       <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                       <div class="road__map__mob__items__subtitle__text">
                                                                         <span class="road__map__mob__items__subtitle__text__title">
                                                                          Июль 2018 г
                                                                        </span>
                                                                        <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                         Разработка GM первого продукта платформы - Telegram БОТа (интеграция с blockchain)
                                                                       </span>
                                                                     </div>
                                                                   </div>
                                                                 </div>
                                                            </div>
                                                          </div>
                                                          <div class="road__map__mob__items">
                                                           <div class="road__map__mob__items__title road__map__mob__items__title__th">
                                                             <div class="road__map__mob__items__title__absoult">
                                                               <img src="img/svg/iii.svg" alt="">
                                                               <?php// include_once('') ?>
                                                             </div> 
                                                             <span>II кв. 2018г.</span>
                                                           </div>
                                                           <div class="road__map__mob__items__subtitle road__map__mob__items__subtitle__th">
                                                            Команда и концепция платформы UMC
                                                           <div class="road__map__mob__items__subtitle__flex">

                                                                                <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Переход на Big Data 2
                                                                                  </span>
                                                                             </div>
                                                                           </div>

                                                                               <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Август-Сентябрь 2018 г.
                                                                                  </span>
                                                                                  <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                   Разработка
                                                                                 </span>
                                                                                 <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                  функциональности
                                                                                </span>
                                                                                <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                 “Обменник”
                                                                               </span>
                                                                             </div>
                                                                           </div>
                                                                            <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Разработка биржи ботов
                                                                                  </span>
                                                                             </div>
                                                                           </div>

                                                                           <div class="road__map__mob__items__subtitle__item">
                                                                             <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                             <div class="road__map__mob__items__subtitle__text">
                                                                               <span class="road__map__mob__items__subtitle__text__title">
                                                                                 Январь-Апрель 2018 г.
                                                                               </span>
                                                                               <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                Разработка Beta 1 первого продукта платформы - Telegram БОТа
                                                                              </span>
                                                                            </div>
                                                                          </div>
                                                                          <div class="road__map__mob__items__subtitle__item">
                                                                           <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                           <div class="road__map__mob__items__subtitle__text">
                                                                             <span class="road__map__mob__items__subtitle__text__title">
                                                                              Начиная с января 2019 г.
                                                                            </span>

                                                                            <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                             Внедрение и развитие Artificial intelligence
                                                                           </span>

                                                                         </div>
                                                                       </div>
                                                                       <div class="road__map__mob__items__subtitle__item">
                                                                         <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                         <div class="road__map__mob__items__subtitle__text">
                                                                           <span class="road__map__mob__items__subtitle__text__title">
                                                                             Май-Июнь 2018 г.
                                                                           </span>
                                                                           <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                            Разработка Beta 2 первого продукта платформы - Telegram БОТа интеграция с фиатными платежными системами
                                                                          </span>
                                                                        </div>
                                                                      </div>
                                                                      <div class="road__map__mob__items__subtitle">
                                                                      Разработка биржи ботов</div>
                                                                      <div class="road__map__mob__items__subtitle__item">
                                                                       <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                       <div class="road__map__mob__items__subtitle__text">
                                                                         <span class="road__map__mob__items__subtitle__text__title">
                                                                          Июль 2018 г
                                                                        </span>
                                                                        <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                         Разработка GM первого продукта платформы - Telegram БОТа (интеграция с blockchain)
                                                                       </span>
                                                                     </div>
                                                                   </div>
                                                                 </div>
                                                          </div>
                                                        </div>
                                                        <div class="road__map__mob__items">
                                                         <div class="road__map__mob__items__title road__map__mob__items__title__fo">
                                                           <div class="road__map__mob__items__title__absoult__last">
                                                             <img src="img/svg/iv.svg" alt="">
                                                             <?php// include_once('') ?>
                                                           </div> 
                                                           <span>III кв. 2018г.</span>
                                                         </div>
                                                         <div class="road__map__mob__items__subtitle road__map__mob__items__subtitle__fo">
                                                          Команда и концепция платформы UMC
                                              <div class="road__map__mob__items__subtitle__flex">

                                                                                <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Переход на Big Data 2
                                                                                  </span>
                                                                             </div>
                                                                           </div>

                                                                               <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Август-Сентябрь 2018 г.
                                                                                  </span>
                                                                                  <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                   Разработка
                                                                                 </span>
                                                                                 <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                  функциональности
                                                                                </span>
                                                                                <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                 “Обменник”
                                                                               </span>
                                                                             </div>
                                                                           </div>
                                                                            <div class="road__map__mob__items__subtitle__item">
                                                                                 <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                                 <div class="road__map__mob__items__subtitle__text">
                                                                                   <span class="road__map__mob__items__subtitle__text__title">
                                                                                    Разработка биржи ботов
                                                                                  </span>
                                                                             </div>
                                                                           </div>

                                                                           <div class="road__map__mob__items__subtitle__item">
                                                                             <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                             <div class="road__map__mob__items__subtitle__text">
                                                                               <span class="road__map__mob__items__subtitle__text__title">
                                                                                 Январь-Апрель 2018 г.
                                                                               </span>
                                                                               <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                                Разработка Beta 1 первого продукта платформы - Telegram БОТа
                                                                              </span>
                                                                            </div>
                                                                          </div>
                                                                          <div class="road__map__mob__items__subtitle__item">
                                                                           <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                           <div class="road__map__mob__items__subtitle__text">
                                                                             <span class="road__map__mob__items__subtitle__text__title">
                                                                              Начиная с января 2019 г.
                                                                            </span>

                                                                            <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                             Внедрение и развитие Artificial intelligence
                                                                           </span>

                                                                         </div>
                                                                       </div>
                                                                       <div class="road__map__mob__items__subtitle__item">
                                                                         <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                         <div class="road__map__mob__items__subtitle__text">
                                                                           <span class="road__map__mob__items__subtitle__text__title">
                                                                             Май-Июнь 2018 г.
                                                                           </span>
                                                                           <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                            Разработка Beta 2 первого продукта платформы - Telegram БОТа интеграция с фиатными платежными системами
                                                                          </span>
                                                                        </div>
                                                                      </div>
                                                                      <div class="road__map__mob__items__subtitle">
                                                                      Разработка биржи ботов</div>
                                                                      <div class="road__map__mob__items__subtitle__item">
                                                                       <span class="road__map__mob__items__subtitle__sercle"></span>
                                                                       <div class="road__map__mob__items__subtitle__text">
                                                                         <span class="road__map__mob__items__subtitle__text__title">
                                                                          Июль 2018 г
                                                                        </span>
                                                                        <span class="road__map__mob__items__subtitle__text__subtitle">
                                                                         Разработка GM первого продукта платформы - Telegram БОТа (интеграция с blockchain)
                                                                       </span>
                                                                     </div>
                                                                   </div>
                                                                 </div>
                                                        </div>
                                                      </div>
                                                    </div>


                                                    <div class="road__prosses">
                                                      Этап в процессе
                                                    </div>
                                                    <div class="road__items road__items__ft">
                                                      <div class="road__items__item">
                                                        <div class="road__items__item__top">
                                                         <div class="road__items__item__title">Переход на Big Data 1 </div>
                                                       </div>
                                                       <div class="road__items__item__bottom">
                                                         <div class="road__items__item__title road__items__item__title__st">Разработка биржи ботов <span class="road__items__item__s"></span> </div>
                                                       </div>
                                                     </div>
                                                     <div class="road__items__item">
                                                      <div class="road__items__item__top">
                                                        <div class="road__items__item__title">Август-Сентябрь 2018 г. <span class="road__items__item__s"></span> </div> 
                                                        <span>Разработка
                                                          функциональности 
                                                        “Обменник”</span>
                                                      </div>
                                                      <div class="road__items__item__bottom">
                                                        <div class="road__items__item__title">Январь-Апрель 2018 г. <span class="road__items__item__s"></span> </div>
                                                        <span>Разработка Beta 1 первого продукта платформы - Telegram БОТа</span> 
                                                      </div>
                                                    </div>
                                                    <div class="road__items__item">
                                                      <div class="road__items__item__top">
                                                       <div class="road__items__item__title">Начиная с января 2019 г. <span class="road__items__item__s"></span>   </div>
                                                       <span>Внедрение и развитие Artificial intelligence</span>
                                                     </div>
                                                     <div class="road__items__item__bottom">
                                                      <div class="road__items__item__title">Май-Июнь 2018 г. <span class="road__items__item__s"></span> </div>
                                                      <span> Разработка Beta 2 первого продукта платформы - Telegram БОТа интеграция с фиатными платежными системами  </span>
                                                    </div>
                                                  </div>
                                                  <div class="road__items__item">
                                                    <div class="road__items__item__top">

                                                    </div>
                                                    <div class="road__items__item__bottom">
                                                      <div class="road__items__item__title">Июль 2018 г</div>
                                                      <span class="road__items__item__title__s"> Разработка GM первого продукта платформы - Telegram БОТа (интеграция с blockchain)</span>
                                                    </div>
                                                  </div>
                                                </div>




                                                <div class="road__items road__items__sc road__items__active">
                                                  <div class="road__items__item">
                                                    <div class="road__items__item__top">
                                                     <div class="road__items__item__title">Переход на Big Data 2</div>
                                                   </div>
                                                   <div class="road__items__item__bottom">
                                                     <div class="road__items__item__title road__items__item__title__sc">Разработка биржи ботов <span class="road__items__item__s"></span> </div>
                                                   </div>
                                                 </div>
                                                 <div class="road__items__item">
                                                  <div class="road__items__item__top">
                                                    <div class="road__items__item__title">Август-Сентябрь 2018 г. <span class="road__items__item__s"></span> </div> 
                                                    <span>Разработка
                                                      функциональности 
                                                    “Обменник”</span>
                                                  </div>
                                                  <div class="road__items__item__bottom">
                                                    <div class="road__items__item__title">Январь-Апрель 2018 г. <span class="road__items__item__s"></span> </div>
                                                    <span>Разработка Beta 1 первого продукта платформы - Telegram БОТа</span> 
                                                  </div>
                                                </div>
                                                <div class="road__items__item">
                                                  <div class="road__items__item__top">
                                                   <div class="road__items__item__title">Начиная с января 2019 г. <span class="road__items__item__s"></span>   </div>
                                                   <span>Внедрение и развитие Artificial intelligence</span>
                                                 </div>
                                                 <div class="road__items__item__bottom">
                                                  <div class="road__items__item__title">Май-Июнь 2018 г. <span class="road__items__item__s"></span> </div>
                                                  <span> Разработка Beta 2 первого продукта платформы - Telegram БОТа интеграция с фиатными платежными системами  </span>
                                                </div>
                                              </div>
                                              <div class="road__items__item">
                                                <div class="road__items__item__top">

                                                </div>
                                                <div class="road__items__item__bottom">
                                                  <div class="road__items__item__title">Июль 2018 г</div>
                                                  <span class="road__items__item__title__s"> Разработка GM первого продукта платформы - Telegram БОТа (интеграция с blockchain)</span>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="road__items road__items__th ">
                                              <div class="road__items__item road__items__item__alignr">
                                                <div class="road__items__item__top">
                                                 <div class="road__items__item__title road__items__item__title__th">Переход на Big Data 3</div>
                                               </div>
                                               <div class="road__items__item__bottom">
                                                 <div class="road__items__item__title road__items__item__title__th">
                                                   Разработка биржи ботов
                                                   <!-- <span class="road__items__item__sroad__items__item road__items__item__s road__items__item__s__th"></span> --> 
                                                 </div>
                                               </div>
                                             </div>
                                             <div class="road__items__item road__items__item__alignr">
                                              <div class="road__items__item__top">
                                                <div class="road__items__item__title road__items__item__title__th">Август-Сентябрь 2018 г. <span class="road__items__item__sroad__items__item road__items__item__s road__items__item__s__th"></span> </div> 
                                                <span>Разработка
                                                  функциональности 
                                                “Обменник”</span>
                                              </div>
                                              <div class="road__items__item__bottom">
                                                <div class="road__items__item__title road__items__item__title__th">Январь-Апрель 2018 г. <span class="road__items__item__sroad__items__item road__items__item__s road__items__item__s__th"></span> </div>
                                                <span>Разработка Beta 1 первого продукта платформы - Telegram БОТа</span> 
                                              </div>
                                            </div>
                                            <div class="road__items__item road__items__item__alignr">
                                              <div class="road__items__item__top">
                                               <div class="road__items__item__title road__items__item__title__th">Начиная с января 2019 г. <span class="road__items__item__sroad__items__item road__items__item__s road__items__item__s__th"></span>   </div>
                                               <span>Внедрение и развитие Artificial intelligence</span>
                                             </div>
                                             <div class="road__items__item__bottom">
                                              <div class="road__items__item__title road__items__item__title__th">Май-Июнь 2018 г. <span class="road__items__item__sroad__items__item road__items__item__s road__items__item__s__th"></span> </div>
                                              <span> Разработка Beta 2 первого продукта платформы - Telegram БОТа интеграция с фиатными платежными системами  </span>
                                            </div>
                                          </div>
                                          <div class="road__items__item road__items__item__alignr">
                                            <div class="road__items__item__top">

                                            </div>
                                            <div class="road__items__item__bottom">
                                              <div class="road__items__item__title road__items__item__title__th">Июль 2018 г</div>
                                              <span class="road__items__item__title__s__th"> Разработка GM первого продукта платформы - Telegram БОТа (интеграция с blockchain)</span>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="road__items road__items__fo">
                                          <div class="road__items__item road__items__item__alignr">
                                            <div class="road__items__item__top">
                                             <div class="road__items__item__title road__items__item__title__fo">Переход на Big Data 4</div>
                                           </div>
                                           <div class="road__items__item__bottom">
                                             <div class="road__items__item__title road__items__item__title__fo">Разработка биржи ботов </div>
                                           </div>
                                         </div>
                                         <div class="road__items__item road__items__item__alignr">
                                          <div class="road__items__item__top">
                                            <div class="road__items__item__title road__items__item__title__fo">Август-Сентябрь 2018 г. <span class="road__items__item__s road__items__item__s__fo"></span> </div> 
                                            <span>Разработка
                                              функциональности 
                                            “Обменник”</span>
                                          </div>
                                          <div class="road__items__item__bottom">
                                            <div class="road__items__item__title road__items__item__title__fo">Январь-Апрель 2018 г. <span class="road__items__item__s road__items__item__s__fo"></span> </div>
                                            <span>Разработка Beta 1 первого продукта платформы - Telegram БОТа</span> 
                                          </div>
                                        </div>
                                        <div class="road__items__item road__items__item__alignr">
                                          <div class="road__items__item__top"> 
                                           <div class="road__items__item__title road__items__item__title__fo">Начиная с января 2019 г. <span class="road__items__item__s road__items__item__s__fo"></span>   </div>
                                           <span>Внедрение и развитие Artificial intelligence</span>
                                         </div>
                                         <div class="road__items__item__bottom">
                                          <div class="road__items__item__title road__items__item__title__fo">Май-Июнь 2018 г. <span class="road__items__item__s road__items__item__s__fo"></span> </div>
                                          <span> Разработка Beta 2 первого продукта платформы - Telegram БОТа интеграция с фиатными платежными системами  </span>
                                        </div>
                                      </div>
                                      <div class="road__items__item road__items__item__alignr">
                                        <div class="road__items__item__top">

                                        </div>
                                        <div class="road__items__item__bottom">
                                          <div class="road__items__item__title road__items__item__title__fo">Июль 2018 г</div>
                                          <span class="road__items__item__title__s"> Разработка GM первого продукта платформы - Telegram БОТа (интеграция с blockchain)</span>
                                        </div>
                                      </div>
                                    </div>


                                    <div class="road__map">
                                     <div class="road__map__item"> <span class="road__map__item__span road__map__item__span__ft" data-name=".road__items__ft">
                                      <?php include_once('img/svg/i.svg') ?></span></div>
                                      <div class="road__map__item"> <span class="road__map__item__span road__map__item__span__sc road__map__item__span__active" data-name=".road__items__sc">
                                        <?php include_once('img/svg/ii.svg') ?></span></div>
                                        <div class="road__map__item"> <span class="road__map__item__span road__map__item__span__th" data-name=".road__items__th">
                                          <?php include_once('img/svg/iii.svg') ?></span></div>
                                          <div class="road__map__item"> <span class="road__map__item__lastspan" data-name=".road__items__fo">
                                            <?php include_once('img/svg/iv.svg') ?></span></div>
                                          </div>
                                          <div class="road__text wow zoomIn">
                                            <div class="road__text__item">
                                             <div class="road__text__item__title">
                                              IV кв. 2017 г.
                                            </div>
                                            <div class="road__text__item__text">
                                             Команда и концепция платформы UMC
                                           </div>
                                         </div>
                                         <div class="road__text__item">
                                          <div class="road__text__item__title">
                                            I кв. 2018г.
                                          </div>
                                          <div class="road__text__item__text">
                                           Разработка платформы UMC
                                         </div>
                                       </div>
                                       <div class="road__text__item">
                                        <div class="road__text__item__title">
                                          II кв. 2018г.
                                        </div>
                                        <div class="road__text__item__text">
                                         Масштабирование платформы UMC
                                       </div>
                                     </div>
                                     <div class="road__text__item">
                                      <div class="road__text__item__title">
                                        III кв. 2018г.
                                      </div>
                                      <div class="road__text__item__text">
                                       Провождение ICO
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </section>
                             <section class="news" id="#news">
                              <div class="news__ellipse13">
                               <img src="#" data-src="img/svg/bg/ellipse13.svg" alt="">
                             </div>
                             <div class="container">
                              <h3 class="news__title">
                                новости <span>о нас</span>
                              </h3>
                              <div class="news__row">
                                <div class="news__videoItem wow bounceInLeft">
                                  <div class="news__videoItem__img">
                                    <img class="" src="#" data-src="img/right.png" alt="" >
                                    <span class="news__videoItem__img__span">просмотреть</span>
                                    <a href="#"><span></span></a>
                                  </div>
                                </div>
                                <div class="news__videoItem wow bounceInRight">
                                  <div class="news__videoItem__img">
                                    <img class="" src="#" data-src="img/left.png" alt="">
                                    <span class="news__videoItem__img__span">просмотреть</span>
                                    <a href="#"><span></span></a>
                                  </div>
                                </div>
                              </div>
                              <div class="news__items wow fadeIn">
                                <div class="news__items__item">
                                  <div class="news__items__item__date">
                                    21.03.05
                                  </div>
                                  <div class="news__items__item__logo">
                                    <img class="" src="#" data-src="img/svg/UMC_icons/m.svg" alt="">
                                  </div>
                                  <div class="news__items__item__text">
                                    Доступна оплата абсолютно любой рекламы и любых платных услуг в экосистеме UMC. Все финансовые..
                                    юююоперации в UMC производятся исключительно в токенах UMCC.
                                  </div>
                                  <div class="news__items__item__info">
                                    <a href="#">Читать полностью</a>
                                  </div>
                                </div>
                                <div class="news__items__item">
                                  <div class="news__items__item__date">
                                    21.03.05
                                  </div>
                                  <div class="news__items__item__logo">
                                    <img class="" src="#" data-src="img/svg/UMC_icons/m.svg" alt="">
                                  </div>
                                  <div class="news__items__item__text">
                                   Доступна оплата абсолютно любой рекламы и любых платных услуг в экосистеме UMC. Все финансовые..
                                   юююоперации в UMC производятся исключительно в токенах UMCC.
                                 </div>
                                 <div class="news__items__item__info">
                                  <a href="#">Читать полностью</a>
                                </div>
                              </div>
                              <div class="news__items__item">
                                <div class="news__items__item__date">
                                  21.03.05
                                </div>
                                <div class="news__items__item__logo">
                                  <img class="" src="#" data-src="img/svg/UMC_icons/m.svg" alt="">
                                </div>
                                <div class="news__items__item__text">
                                 Доступна оплата абсолютно любой рекламы и любых платных услуг в экосистеме UMC. Все финансовые..
                                 юююоперации в UMC производятся исключительно в токенах UMCC.
                               </div>
                               <div class="news__items__item__info">
                                <a href="#">Читать полностью</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section id="partner" class="partner">
                        <div class="container">
                          <div class="partner__title">
                           <h3> партнеры</h3>
                         </div>
                         <div class="partner__items wow slideInUp">
                           <a href="#"> <img class="" src="#" data-src="img/search_logo.png" alt=""></a>
                           <a href="#"> <img class="" src="#" data-src="img/logo_en.png" alt=""></a>
                           <a href="#"> <img class="" src="#" data-src="img/icotokennews-logo_2x.png" alt=""></a>
                           <a href="#"> <img class="" src="#" data-src="img/blockchainday.png" alt=""></a>
                           <a href="#"> <img class="" src="#" data-src="img/uk-logo.png" alt=""></a>
                         </div>
                       </div>
                     </section>
                     <section class="anser" id="anser">
                      <div class="container">
                        <div class="anser__title">
                          <h3>Часто задаваемые <span>вопросы</span></h3>
                        </div>
                        <div class="anser__ites" data-name=".anser__items__item__anser__ft" data-atribute=".anser__items__item__btn__span__ft">
                          <div class="anser__items">
                            <div class="anser__items__item">
                             <button class="anser__items__item__btn anser__items__item__btn__ft"> <span class="anser__items__item__btn__span anser__items__item__btn__span__ft">+</span> Как купить токен</button>
                           </div>
                           <div class="anser__items__item anser__items__item__anser__ft">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque sed, odio necessitatibus aperiam, in expedita asperiores magni, aliquid excepturi numquam nam libero quia eos dolorum est officia rem quos!
                          </div>
                        </div>
                      </div>
                      <div class="anser__ites" data-name=".anser__items__item__anser__sc" data-atribute=".anser__items__item__btn__span__sc">
                        <div class="anser__items">
                          <div class="anser__items__item">
                           <button class="anser__items__item__btn anser__items__item__btn__sc"> <span class="anser__items__item__btn__span anser__items__item__btn__span__sc">+</span> Кто мы</button>
                         </div>
                         <div class="anser__items__item anser__items__item__anser__sc">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque sed, odio necessitatibus aperiam, in expedita asperiores magni, aliquid excepturi numquam nam libero quia eos dolorum est officia rem quos!
                        </div>
                      </div>
                    </div>
                    <div class="anser__ites" data-name=".anser__items__item__anser__th" data-atribute=".anser__items__item__btn__span__th">
                      <div class="anser__items">
                        <div class="anser__items__item">
                         <button class="anser__items__item__btn anser__items__item__btn__th"> <span class="anser__items__item__btn__span anser__items__item__btn__span__th">+</span> Как продать токен</button>
                       </div>
                       <div class="anser__items__item anser__items__item__anser__th">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque sed, odio necessitatibus aperiam, in expedita asperiores magni, aliquid excepturi numquam nam libero quia eos dolorum est officia rem quos!
                      </div>
                    </div>
                  </div>
                  <div class="anser__ites" data-name=".anser__items__item__anser__fo" data-atribute=".anser__items__item__btn__span__fo">
                    <div class="anser__items">
                      <div class="anser__items__item">
                       <button class="anser__items__item__btn anser__items__item__btn__fo"> <span class="anser__items__item__btn__span anser__items__item__btn__span__fo">+</span> Как получит бонусы</button>
                     </div>
                     <div class="anser__items__item anser__items__item__anser__fo">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque sed, odio necessitatibus aperiam, in expedita asperiores magni, aliquid excepturi numquam nam libero quia eos dolorum est officia rem quos!
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="followus wow slideInUp">
              <div class="container">
                <form class="followus__item">
                 <span>Подпишись на новости</span> <input class="followus__item__input" type="text" placeholder="Ваш емейл"> 
                 <button class="followus__item__submit" type="submit">Подписаться</button>
               </form>
             </div>
           </div>
            <div class="header__btn__item__r header__btn__item__r__mob">
               <a href="#">
                 ПОЛУЧИТЬ ТОКЕНЫ
               </a>
             </div>
           <footer class="footer">
            <div class="footer__ellipse1113">
              <img src="img/greenellipse.png" alt="">
            </div>
            <div class="footer__ellipse113">
              <img src="img/svg/bg/ellipse113.svg" alt="">
            </div>
            <div class="container">
              <div class="footer__items">
                <div class="footer__items__item">
                  <div class="footer__items__item__logo">
                    <!-- <img class="" src="#" data-src="img/logo.png" alt=""> -->
                 <?php include('img/svg/UMC_icons/umc-logo.svg') ?>

                  </div>
                  <div class="footer__items__item__title">
                    Universal Marketing Company
                  </div>
                  <div class="footer__items__item__subtitle">
                    6th Floor, South Bank House, Barrow Street, Dublin 4 Co. Dublin D04 TR29, Ireland
                  </div>
                  <div class="footer__items__item__text">
                    © UMC 2018
                  </div>
                </div>
                <div class="footer__items__item footer__items__item__l">
                  <div class="footer__items__item__links">
                    <a href="#">Terms of Use</a>
                  </div>
                  <div class="footer__items__item__links">
                    <a href="#">Privacy Policy</a>
                  </div>
                  <div class="footer__items__item__links">
                    <a href="#">FAQ</a>
                  </div>
                  <div class="footer__items__item__links">
                    <a href="#">MVP </a>
                  </div>
                  <div class="footer__items__item__links">
                    <a href="#">Press</a>
                  </div>
                </div>
                <div class="footer__items__item">
                  <div class="footer__items__item__subtitle__s">
                    Resurces:
                  </div>
                  <div class="footer__items__item__img footer__items__item__img__op">
                    <a href="">
                      <?php include('img/svg/UMC_DESIGN_ELEMENTS/onepager.svg') ?>
                    ONEPAGER </a>
                  </div>
                  <div class="footer__items__item__img footer__items__item__img__op">
                   <a href="">
                    <?php include('img/svg/UMC_DESIGN_ELEMENTS/whitepaper.svg') ?>
                  WHITEPAPER</a>
                </div>
              </div>
              <div class="footer__items__item">
                <div class="footer__items__item__social">
                  <div class="footer__items__item__subtitle__s ">
                    Social:
                  </div>
                  <div class="footer__items__item__img">
                   <a href=""> <img class="" src="#" data-src="img/svg/UMC_icons/tg_footer.svg" alt="">
                    <?php// include_once('') ?></a>
                    <a href=""> <img class="" src="#" data-src="img/svg/UMC_icons/in_footer.svg" alt="">
                      <?php// include_once('') ?></a>
                      <a href=""> <img class="" src="#" data-src="img/svg/UMC_icons/tw_footer.svg" alt="">
                        <?php// include_once('') ?></a>
                        <a href=""> <img class="" src="#" data-src="img/svg/UMC_icons/f_footer.svg" alt="">
                          <?php// include_once('') ?></a>
                          <a href=""> <img class="" src="#" data-src="img/svg/UMC_icons/b_footer.svg" alt="">
                            <?php// include_once('') ?></a>
                            <a href=""> <img class="" src="#" data-src="img/svg/UMC_icons/m_footer.svg" alt="">
                              <?php// include_once('') ?></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="footer__footer__text">
                        UMC Technologies Limited 
                      </div>
                      <div class="footer__footer__subtext">
                        RISK DISCLAIMER: The information contained on this website is not investment advice. Investing in token sales is a high-risk endeavor and one for which we strongly advise you to consult with your registered investment advisor.
                      </div>
                    </div>
                  </footer>
                  <div class="networks">
                    <a href="#" class="networks__links">
                      <?php include('img/svg/UMC_icons/tg_network.svg') ?></a>
                      <a href="#" class="networks__links">
                        <?php include_once('img/svg/UMC_icons/in_network.svg') ?></a>
                        <a href="#" class="networks__links">
                          <?php include_once('img/svg/UMC_icons/f_network.svg') ?></a>
                          <a href="#" class="networks__links">
                            <?php include_once('img/svg/UMC_icons/tw_network.svg') ?></a>
                            <a href="#" class="networks__links">
                              <?php include_once('img/svg/UMC_icons/b_network.svg') ?></a>
                              <a href="#" class="networks__links">
                                <?php include_once('img/svg/UMC_icons/m_network.svg') ?></a>
                              </div>
                              <div class="networks__mob">
                                <a href="#" class="networks__mob__links">
                                  <?php include('img/svg/UMC_icons/tg_network.svg') ?></a>
                                </div>
                              </div>
                              <!-- build:js js/vendor.js-->
                              <script src="libs/jquery/dist/jquery.min.js"></script>
                              <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                              <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.7.1/lazyload.min.js"></script>
                              <script src="js/wow.min.js"></script>
                              <script>
                                new WOW().init();
                              </script>
                              <!-- endbuild-->
                              <!-- build:js js/main.js -->
                              <script src="js/main.js"></script>
                              <!-- endbuild -->
                            </body>
                            </html>
