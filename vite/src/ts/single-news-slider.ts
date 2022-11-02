import Swiper, { Navigation, Autoplay } from 'swiper';

export default class NewsSlider {
    sliderElement: HTMLElement;
    sliderBlock: HTMLElement;
    sliderPerView: number;

    constructor() {
        this.sliderElement = <HTMLElement>document.querySelector('.single-news-swiper');
        this.sliderBlock = <HTMLElement>document.querySelector('.single-news-swiper__block');
        this.sliderPerView = 1;

        if (!this.sliderElement) { return }

        this.sliderPerView = this.sliderElement.getAttribute('data-slides-per-view') ? 
            parseInt(<string>this.sliderElement.getAttribute('data-slides-per-view')) : 1;        
        
        this.init();
    }

    public init(): void {
        const breakpoints = this.calcBreakPoints();

        console.log(breakpoints);
        

        if (this.sliderPerView === 1) { 
            this.sliderBlock.style.maxWidth = '700px';
        } else {
            this.sliderBlock.style.width = '100%';
        }

        this.initSwiper(this.sliderPerView, breakpoints);
    }

    public calcBreakPoints(): any {
        if (this.sliderPerView === 1) { 
            return {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 16,
                },
            } 
        }

        return {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: Math.round(this.sliderPerView / 2),
            },
            860: {
                slidesPerView: this.sliderPerView
            }
        }
    }

    public initSwiper(sliderPerView: number, breakpoints: any): void {
        Swiper.use([Navigation, Autoplay]);

        new Swiper('.single-news-swiper', {
            loop: false,
            slidesPerView: sliderPerView,
            spaceBetween: 16,
            breakpoints,
            navigation: {
              nextEl: '.single-news-swiper__button-next',
            },
        });
    }
}