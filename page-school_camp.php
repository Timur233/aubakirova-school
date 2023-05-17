<?php
/*
    Template Name: Summer Cump (Лагерь)
    Template Post Type: post, page, product
*/

get_header(null, array(
    'header_color_class' => 'main-header--white'
));

include('widgets/breadcrumbs.php');

?>

<section id="summer-cump" class="section summer-cump">
    <div class="container">
        <div class="flex summer-cump__block" style="align-items: center">
            <div class="flex__6 summer-cump__item summer-cump__item--left cump-item">
                <h3 class="cump-page__title">Смена в нашем лагере - это индустрия.</h3>
                <div class="cump-item__content">
                    <p>За две недели дети познакомятся с миром кино и узнают про профессии, которые работают в этой
                        сфере. </p>
                    <p>Во время смены ребята посетят мастер-классы от профессионалов своего дела. </p>
                    <p>Актёры, продюсеры, монтажёры, гримёры, художники по свету поделятся с ребятами секретами
                        мастерства. </p>
                    <p>Каждый сможет попробовать себя в любой роли, а конечным продуктом смены будут фильмы от всех
                        отрядов. </p>
                    <span class="accent">Сними кино своего лета</span>
                </div>
            </div>
            <div class="flex__6 summer-cump__item summer-cump__item--right">
                <iframe class="summer-cump__video" src="https://www.youtube.com/embed/fnuu1F6F_jk"
                    title="YouTube video player" frameborder="0" allow="
                        accelerometer; 
                        autoplay; 
                        clipboard-write; 
                        encrypted-media; 
                        gyroscope; 
                        picture-in-picture; 
                        web-share
                    " allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>

<section id="included" class="section section-included section--gray included">
    <div class="container">
        <div class="flex included__flex">
            <div class="flex__12 included__content" style="text-align: center">
                <h2 class="cump-page__title">Что входит?</h2>
                <br>
                <div class="flex">
                    <div class="flex__3 included-benefit">
                        <img src="https://playroom.qodeinteractive.com/wp-content/uploads/2020/06/h2-img-5.png" alt="">
                        <span class="included-benefit__title">4 разовое питание</span>
                    </div>
                    <div class="flex__3 included-benefit">
                        <img src="https://playroom.qodeinteractive.com/wp-content/uploads/2020/06/h2-img-8.png" alt="">
                        <span class="included-benefit__title">Развитие творческих навыков</span>
                    </div>
                    <div class="flex__3 included-benefit">
                        <img src="https://playroom.qodeinteractive.com/wp-content/uploads/2020/06/h2-img-7.png" alt="">
                        <span class="included-benefit__title">Развитие культуры и эмпатии</span>
                    </div>
                    <div class="flex__3 included-benefit">
                        <img src="https://playroom.qodeinteractive.com/wp-content/uploads/2020/06/h2-img-6.png" alt="">
                        <span class="included-benefit__title">Развитие компетентности </span>
                    </div>
                    <div class="flex__3 included-benefit">
                        <img src="https://playroom.qodeinteractive.com/wp-content/uploads/2020/06/h2-img-6.png" alt="">
                        <span class="included-benefit__title">Развитие креативности</span>
                    </div>
                    <div class="flex__3 included-benefit">
                        <img src="https://playroom.qodeinteractive.com/wp-content/uploads/2020/06/h2-img-7.png" alt="">
                        <span class="included-benefit__title">Развитие критического мышления</span>
                    </div>
                    <div class="flex__3 included-benefit">
                        <img src="https://playroom.qodeinteractive.com/wp-content/uploads/2020/06/h2-img-7.png" alt="">
                        <span class="included-benefit__title">Развитие Коммуникативных навыков</span>
                    </div>
                    <div class="flex__3 included-benefit">
                        <img src="https://playroom.qodeinteractive.com/wp-content/uploads/2020/06/h2-img-8.png" alt="">
                        <span class="included-benefit__title">Атмосфера доброты и взаимоуважения</span>
                    </div>
                </div>
                <button class="btn">Оставить заявку</button>
            </div>
        </div>
    </div>
</section>

<section id="gallery-cump" class="section gallery-cump">
    <div class="container">
        <h2 class="cump-page__title">Фотогалерея </h2>
        <br>
        <div class="cump-gallery__block">
            <div class="cump-gallery swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="cump-gallery__img" src="https://icdn.lenta.ru/images/2020/07/27/18/20200727180858899/preview_53a29ff7637f99d2bcafb43443aaf709.png" alt="Секция футбола"
                            title="Секция футбола">
                    </div>
                    <div class="swiper-slide">
                        <img class="cump-gallery__img" src="https://media.istockphoto.com/id/481495699/ru/%D1%84%D0%BE%D1%82%D0%BE/%D0%BF%D0%BE%D0%B4%D1%82%D1%8F%D0%B3%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F.jpg?s=612x612&w=0&k=20&c=KxKseeladASJlaThdpOq-Q8foYiHDAnMQCeHPCZYgJY=" alt="Языки"
                            title="Языки">
                    </div>
                    <div class="swiper-slide">
                        <img class="cump-gallery__img" src="https://traveling.by/files/tours/2022/03/ab797da910f3759131d341490091768c-thumb-600x390-crop.jpg" alt="Горный туризм"
                            title="Горный туризм">
                    </div>
                </div>
            </div>
            <div class="cump-gallery__button cump-gallery__button--prev">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.08 73.87">
                    <g data-name="Слой 2">
                        <path fill="none" stroke="#333" stroke-miterlimit="22.93" stroke-width="4"
                            d="M1.07 1.07l35.86 35.86L1.07 72.79" />
                    </g>
                </svg>
            </div>
            <div class="cump-gallery__button cump-gallery__button--next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.08 73.87">
                    <g data-name="Слой 2">
                        <path fill="none" stroke="#333" stroke-miterlimit="22.93" stroke-width="4"
                            d="M1.07 1.07l35.86 35.86L1.07 72.79" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="cump-gallery__desc">
            <p><b>Мы выстраиваем педагогическую работу по концепции <span class="accent">4К</span>:</b></p>
            <ul class="cump-gallery__k-list">
                <li>Компетентность</li>
                <li>Креативность, </li>
                <li>Критическое мышление, </li>
                <li>Коммуникативность</li>
            </ul>

            <p>Мы создаём сообщество равноценных личностей, меняющих жизнь к лучшему!<br>
            Мы развиваем очень важные качества, доброту и взаимоуважение, творчество, культуру и эмпатию!</p>
        </div>
</section>

<section id="cump-team" class="section section-cump-team section--gray cump-team">
    <div class="container">
        <h2 class="cump-page__title">Команда лагеря</h2>
        <br>
        <div class="flex cump-team__flex">
            <div class="flex__3 cump-team__counselor counselor">
                <img class="counselor__img" src="https://assets.website-files.com/61a8d4883d2409fefabafde4/63501fef09d73b1cd54bd042_WhatsApp%20Image%202022-07-12%20at%204.13.16%20PM.jpeg" alt="">
                <span class="counselor__title">Имя Фамилия</span>
                <div class="counselor__desc">О себе</div>
            </div>
            <div class="flex__3 cump-team__counselor counselor">
                <img class="counselor__img" src="https://camplife.tamu.edu/wp-content/uploads/2020/04/about-circle-1200x1200.png" alt="">
                <span class="counselor__title">Имя Фамилия</span>
                <div class="counselor__desc">О себе</div>
            </div>
            <div class="flex__3 cump-team__counselor counselor">
                <img class="counselor__img" src="https://avatars.mds.yandex.net/i?id=d9b628b93bb903776dc447dde5438549_l-5220476-images-thumbs&n=13" alt="">
                <span class="counselor__title">Имя Фамилия</span>
                <div class="counselor__desc">О себе</div>
            </div>
            <div class="flex__3 cump-team__counselor counselor">
                <img class="counselor__img" src="https://assets.website-files.com/61a8d4883d2409fefabafde4/63501fef09d73b1cd54bd042_WhatsApp%20Image%202022-07-12%20at%204.13.16%20PM.jpeg" alt="">
                <span class="counselor__title">Имя Фамилия</span>
                <div class="counselor__desc">О себе</div>
            </div>
        </div>
    </div>
</section>

<section id="cump-programm" class="section section-cump-programm cump-programm">
    <div class="container">
        <h2 class="cump-page__title">Программа лагеря</h2>
        <br>
        <div class="flex">
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/1c12e749d0cc09ebe96718bddf5727b9.png" alt="">
                <span class="cump-programm-item__title">Экскурсия на съёмочную площадку</span>
            </div>
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/bacb435359b4a5e032ab3334f38686ba.png" alt="">
                <span class="cump-programm-item__title">Мастер-класс от Гримёра</span>
            </div>
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/2ac43aa43bf473f9a9c09b4b608619d3.png" alt="">
                <span class="cump-programm-item__title">Мастер-класс от Гафера</span>
            </div>
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/1cea5345d284f36245a94301b114b27c.png" alt="">
                <span class="cump-programm-item__title">Мастер-класс от Сценариста</span>
            </div>
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/22723bbd4217a0abf6d3e68073c7603d.png" alt="">
                <span class="cump-programm-item__title">Мастер-класс от Продюсера</span>
            </div>
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/8ff953dd97c4405234a04291dee39e0b.png" alt="">
                <span class="cump-programm-item__title">Мастер-класс от Актёра</span>
            </div>
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/0cd340f8348cc821206cc7f888dd43b7.png" alt="">
                <span class="cump-programm-item__title">Поездка в ботанический сад</span>
            </div>
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/2313264d9207f7bb8a64e8c6570112be.png" alt="">
                <span class="cump-programm-item__title">Экскурсия в казахфильм</span>
            </div>
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/f2d9e6d218ef1fea3f30209ba5ac4877.png" alt="">
                <span class="cump-programm-item__title">Съемки фильма отряда</span>
            </div>
            <div class="flex__4 cump-programm__item cump-programm-item">
                <img class="cump-programm-item__img" src="https://school.aubakirova.kz/wp-content/uploads/2023/05/7a05af9edb26eec36db92c1f536adeb3.png" alt="">
                <span class="cump-programm-item__title">Настоящий кастинг</span>
            </div>
        </div>
    </div>
                </section>

<section id="cump-price" class="section section-cump-price section--gray cump-price">
    <div class="container">
        <h2 class="cump-page__title cump-price__title">Летний лагерь в АШЖА это 2 недели настоящего творчества!</h2>
        <div class="cump-price__content">
            <p>За время лагеря ты узнаешь что такое производство кино! Побываешь на съёмочной площадеке, научишься тонкостям производства кино и примешь участие в съёмках фильма своего отряда!</p> 
            <p>Пройдёшь настоящий кастинг, чтобы иметь возможность сниматься в кино в будущем!</p>
            <p class="cump-price__price" >Стоимость от 160 000 тг.</p>
            <div class="cump-price__callback">
                <button class="btn cump-price__callback-button">Оставить заявку</button>
                <a class="cump-price__docs-link" href="#">Юридическая информация</a>
            </div>
        </div>
    </div>
</div>
</section>

<?

// include('widgets/admission/slider.php');

// include('widgets/admission/steps.php');

// include('widgets/admission/faq_docs.php');

// include('widgets/admission/price.php');

// include('widgets/admission/about_price.php');

get_footer();

?>