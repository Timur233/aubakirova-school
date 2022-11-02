import './scss/main.scss';
import { RandomElements } from './ts/slider';
import Accorion from './ts/accordion';
import OurTeam from './ts/our-team';
import MobileMenu from './ts/mobile-menu';
import NewsSlider from './ts/single-news-slider';
import CallBackForm from './ts/callback-form';
import Swiper, { Navigation, Autoplay } from 'swiper';
import 'swiper/css';

console.log('%cDeveloper Iskandarov Timur 👋', 'color:#fff; background-color:#333; padding: 8px 15px; font-size: 12px; border-radius: 2px; text-align:center');

Swiper.use([Navigation, Autoplay]);

new Swiper('.news-swiper', {
  loop: true,
  slidesPerView: 3,
  spaceBetween: 32, 
  navigation: {
    nextEl: '.swiper-button-next',
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 16,
    },
    520: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    840: {
      slidesPerView: 3
    }
  }
});

new Swiper('.lessons__swiper', {
  loop: true,
  slidesPerView: 6,
  spaceBetween: 16,
  autoplay: {
    delay: 2500,
  },
  navigation: {
    nextEl: '.swiper-button-next',
  },
  breakpoints: {
    0: {
      slidesPerView: 2.2,
      spaceBetween: 12,
    },
    520: {
      slidesPerView: 3.4,
      spaceBetween: 16
    },
    768: {
      slidesPerView: 4.4,
      spaceBetween: 16
    },
    840: {
      slidesPerView: 6,
      spaceBetween: 16
    }
  }
});

new Accorion('.faq__item');

new RandomElements('.slider__el--moved');

new OurTeam('.team-grid__item');

new NewsSlider();

new MobileMenu();

new CallBackForm('.callback__form');