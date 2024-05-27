<?php

/**
 * Bitrix vars
 *
 * @var array $templateFolder
 * @var array $arParams
 * @var CMain $APPLICATION
 * @var CUser $USER
 */

$folder = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])) . '/files/';

// Bootstrap 3.4.1
$this->addExternalCss("https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css");

//AOS
$this->addExternalCss(SITE_TEMPLATE_PATH . "/css/aos.css");
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/aos.js');

//Styles
$this->addExternalCss($folder . "css/style.css");
$this->addExternalCss($folder . "css/style-responsive.css");

//parallax
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/parallax.min.js');

// Анимация
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap-3.12.2.min.js');
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="P18i-landing">
    <section class="P18i-design">
        <div class="P18i-design-gradient"></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P18i-media-container col-xs-10 col-sm-6 col-xs-offset-2 col-sm-offset-3"
                >
                    <figure class="P18i-design-figure">
                        <img
                            loading="lazy"
                            data-aos="fade-in"
                            data-aos-delay="800"
                            data-aos-anchor=".P18i-design-phone-front"
                            src="<?= $folder ?>/images/section-design/P18i-design-phone-side.png"
                            class="P18i-design-media P18i-design-phone-side"
                            width="399"
                            height="742"
                            alt="Мобильный телефон Maxvi P18i"
                        />

                        <img
                            loading="lazy"
                            data-aos="zoom-in"
                            data-aos-duration="800"
                            src="<?= $folder ?>/images/section-design/P18i-design-phone-front.png"
                            class="P18i-design-media P18i-design-phone-front"
                            width="399"
                            height="742"
                            alt="Мобильный телефон Maxvi P18i"
                        />
                    </figure>
                </div>

                <div
                    class="P18i-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="P18i-design-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        P18i UP
                    </div>

                    <div
                        class="P18i-design-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        УДОБНЫЙ
                        <br />
                        И СТИЛЬНЫЙ
                    </div>
                </div>

                <div
                    class="P18i-typography-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <div
                        class="P18i-design-block"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".P18i-design-figure"
                    >
                        ЭРГОНОМИЧНЫЙ
                        <br />
                        ДИЗАЙН

                        <div
                            class="P18i-design-block-line"
                            data-aos="fade-in"
                            data-aos-duration="300"
                            data-aos-delay="500"
                        ></div>
                    </div>

                    <div
                        class="P18i-design-block"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".P18i-design-figure"
                    >
                        ДИСПЛЕЙ 2.0"

                        <div
                            class="P18i-design-block-line"
                            data-aos="fade-in"
                            data-aos-duration="300"
                            data-aos-delay="500"
                        ></div>
                    </div>

                    <div
                        class="P18i-design-block"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".P18i-design-figure"
                    >
                        БОЛЬШАЯ
                        <br />
                        КЛАВИАТУРА

                        <div
                            class="P18i-design-block-line"
                            data-aos="fade-in"
                            data-aos-duration="300"
                            data-aos-delay="500"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="P18i-dock">
        <div class="P18i-dock-gradient"></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="P18i-media-container col-xs-12 col-sm-7">
                    <figure
                        class="P18i-dock-animation"
                        data-aos="fade-in"
                        data-aos-duration="0"
                    >
                        <div
                            class="P18i-dock-animation-layer"
                            style="
                                background-image: url('<?= $folder ?>/images/section-dock/animation/P18i-dock-back.png');
                            "
                        ></div>

                        <img
                            loading="lazy"
                            data-aos="fade-down"
                            data-aos-easing="linear"
                            data-aos-duration="800"
                            data-aos-delay="300"
                            data-aos-anchor=".P18i-dock-animation"
                            data-aos-anchor-placement="top-center"
                            src="<?= $folder ?>/images/section-dock/animation/P18i-dock-phone.png"
                            class="P18i-dock-animation-layer P18i-dock-animation-phone"
                            width="708"
                            height="1502"
                            alt="Мобильный телефон Maxvi P18i"
                        />

                        <div
                            class="P18i-dock-animation-layer"
                            style="
                                background-image: url('<?= $folder ?>/images/section-dock/animation/P18i-dock-front.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="P18i-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <div
                        class="P18i-dock-title"
                        data-aos="fade-in"
                        data-aos-duration="500"
                    >
                        ДОК-СТАНЦИЯ
                    </div>

                    <div
                        class="P18i-dock-subtitle"
                        data-aos="fade-in"
                        data-aos-duration="500"
                    >
                        СТАВЬТЕ ТЕЛЕФОН НА ЗАРЯДКУ
                        <br />
                        БЕЗ МАЛЕЙШИХ ЗАТРУДНЕНИЙ
                    </div>
                </div>

                <div
                    class="P18i-media-container col-xs-12 col-sm-5 col-sm-offset-6"
                >
                    <figure class="P18i-dock-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-dock/P18i-dock-phone-side.png"
                            class="P18i-dock-media"
                            width="1148"
                            height="451"
                            alt="Мобильный телефон Maxvi P18i"
                        />

                        <figcaption
                            class="P18i-dock-figcaption"
                            data-aos="fade-left"
                            data-aos-duration="500"
                            data-aos-anchor=".P18i-dock-figure"
                        >
                            <div
                                class="P18i-dock-figcaption-line"
                                data-aos="fade-in"
                                data-aos-duration="300"
                                data-aos-delay="500"
                                data-aos-anchor=".P18i-dock-figcaption"
                            ></div>

                            ТОКОСЪЁМНЫЕ ЭЛЕМЕНТЫ
                            <br />
                            ДЛЯ НАДЁЖНОЙ СТЫКОВКИ
                            <br />
                            И УСТОЙЧИВОСТИ
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P18i-battery"
        style="
            background-image: url('<?= $folder ?>/images/section-battery/P18i-battery-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P18i-media-container col-xs-12 col-sm-6 col-md-8"
                >
                    <figure
                        class="P18i-battery-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <div
                            class="P18i-battery-lightning"
                            style="
                                background-image: url('<?= $folder ?>/images/section-battery/P18i-battery-lightning.png');
                            "
                        ></div>


                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/P18i-battery-phone-back.png"
                            class="P18i-battery-media"
                            width="790"
                            height="1320"
                            alt="Мобильный телефон Maxvi P18i"
                        />
                    </figure>
                </div>

                <div
                    class="P18i-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <div
                        class="P18i-battery-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ЁМКАЯ БАТАРЕЯ
                    </div>

                    <div
                        class="P18i-battery-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        <span class="text-lead">1600</span>
                        mAh
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="P18i-speaker section-dark">
        <video
            class="P18i-speaker-video"
            poster="<?= $folder ?>/images/section-speaker/P18i-speaker-video-poster.jpg"
            autoplay
            muted
            playsinline
            loop
        >
            <source
                src="<?= $folder ?>/images/section-speaker/P18i-speaker-video.mp4"
                type="video/mp4"
            />
        </video>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="P18i-media-container col-xs-12 col-sm-11">
                    <figure class="P18i-speaker-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-speaker/P18i-speaker-phone-back.png"
                            class="P18i-speaker-media"
                            width="1003"
                            height="1113"
                            alt="Мобильный телефон Maxvi P18i"
                        />
                    </figure>
                </div>

                <div
                    class="P18i-typography-container col-xs-12 col-sm-5 col-sm-offset-7"
                >
                    <div
                        class="P18i-speaker-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ГРОМКИЙ
                        <br />
                        ДИНАМИК
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P18i-sos section-dark"
        style="
            background-image: url('/<?= $folder ?>/images/section-sos/P18i-sos-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="P18i-media-container col-xs-12">
                    <figure class="P18i-sos-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-sos/P18i-sos-phone-front.png"
                            class="P18i-sos-media"
                            width="612"
                            height="1262"
                            alt="Мобильный телефон Maxvi P18i"
                        />
                    </figure>
                </div>

                <div
                    class="P18i-typography-container col-xs-9 col-sm-4"
                >
                    <div
                        class="P18i-sos-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ФУНКЦИЯ
                        <br />
                        <span class="text-lead">SOS</span>
                    </div>
                </div>

                <div
                    class="P18i-typography-container col-xs-9 col-sm-4 col-sm-offset-8"
                >
                    <div
                        class="P18i-sos-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ПОМОЖЕТ
                        <br />
                        В ЭКСТРЕННЫХ
                        <br />
                        СИТУАЦИЯХ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P18i-camera"
        style="
            background-image: url('/<?= $folder ?>/images/section-camera/P18i-camera-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P18i-typography-container col-xs-9 col-sm-5 col-md-offset-1"
                >
                    <div
                        class="P18i-camera-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        КАМЕРА
                    </div>

                    <div
                        class="P18i-camera-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        Снимайте лучшие
                        <br />
                        моменты
                    </div>
                </div>

                <div
                    class="P18i-media-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <figure
                        class="P18i-camera-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-camera/P18i-camera-phone-back.png"
                            class="P18i-camera-media"
                            width="1119"
                            height="1533"
                            alt="Мобильный телефон Maxvi P18i"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>