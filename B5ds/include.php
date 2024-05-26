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
<div class="B5ds-landing">
    <section class="B5ds-design">
        <div class="B5ds-design-gradient"></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B5ds-media-container col-xs-10 col-sm-6 col-xs-offset-2 col-sm-offset-3"
                >
                    <figure class="B5ds-design-figure">
                        <img
                            loading="lazy"
                            data-aos="fade-in"
                            data-aos-delay="800"
                            data-aos-anchor=".B5ds-design-phone-front"
                            src="<?= $folder ?>/images/section-design/B5ds-design-phone-side.png"
                            class="B5ds-design-media B5ds-design-phone-side"
                            width="399"
                            height="742"
                            alt="Мобильный телефон Maxvi B5ds"
                        />

                        <img
                            loading="lazy"
                            data-aos="zoom-in"
                            data-aos-duration="800"
                            src="<?= $folder ?>/images/section-design/B5ds-design-phone-front.png"
                            class="B5ds-design-media B5ds-design-phone-front"
                            width="399"
                            height="742"
                            alt="Мобильный телефон Maxvi B5ds"
                        />
                    </figure>
                </div>

                <div
                    class="B5ds-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="B5ds-design-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        B5ds UP
                    </div>

                    <div
                        class="B5ds-design-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        УДОБНЫЙ
                        <br />
                        И СТИЛЬНЫЙ
                    </div>
                </div>

                <div
                    class="B5ds-typography-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <div
                        class="B5ds-design-block"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".B5ds-design-figure"
                    >
                        ЭРГОНОМИЧНЫЙ
                        <br />
                        ДИЗАЙН

                        <div
                            class="B5ds-design-block-line"
                            data-aos="fade-in"
                            data-aos-duration="300"
                            data-aos-delay="500"
                        ></div>
                    </div>

                    <div
                        class="B5ds-design-block"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".B5ds-design-figure"
                    >
                        ДИСПЛЕЙ 2.0"

                        <div
                            class="B5ds-design-block-line"
                            data-aos="fade-in"
                            data-aos-duration="300"
                            data-aos-delay="500"
                        ></div>
                    </div>

                    <div
                        class="B5ds-design-block"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".B5ds-design-figure"
                    >
                        БОЛЬШАЯ
                        <br />
                        КЛАВИАТУРА

                        <div
                            class="B5ds-design-block-line"
                            data-aos="fade-in"
                            data-aos-duration="300"
                            data-aos-delay="500"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="B5ds-dock">
        <div class="B5ds-dock-gradient"></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="B5ds-media-container col-xs-12 col-sm-7">
                    <figure
                        class="B5ds-dock-animation"
                        data-aos="fade-in"
                        data-aos-duration="0"
                    >
                        <div
                            class="B5ds-dock-animation-layer"
                            style="
                                background-image: url(/<?= $folder ?>/images/section-dock/animation/B5ds-dock-back.png);
                            "
                        ></div>

                        <img
                            loading="lazy"
                            data-aos="fade-down"
                            data-aos-easing="linear"
                            data-aos-duration="800"
                            data-aos-delay="300"
                            data-aos-anchor=".B5ds-dock-animation"
                            data-aos-anchor-placement="top-center"
                            src="<?= $folder ?>/images/section-dock/animation/B5ds-dock-phone.png"
                            class="B5ds-dock-animation-layer B5ds-dock-animation-phone"
                            width="708"
                            height="1502"
                            alt="Мобильный телефон Maxvi B5ds"
                        />

                        <div
                            class="B5ds-dock-animation-layer"
                            style="
                                background-image: url(/<?= $folder ?>/images/section-dock/animation/B5ds-dock-front.png);
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="B5ds-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <div
                        class="B5ds-dock-title"
                        data-aos="fade-in"
                        data-aos-duration="500"
                    >
                        ДОК-СТАНЦИЯ
                    </div>

                    <div
                        class="B5ds-dock-subtitle"
                        data-aos="fade-in"
                        data-aos-duration="500"
                    >
                        СТАВЬТЕ ТЕЛЕФОН НА ЗАРЯДКУ
                        <br />
                        БЕЗ МАЛЕЙШИХ ЗАТРУДНЕНИЙ
                    </div>
                </div>

                <div
                    class="B5ds-media-container col-xs-12 col-sm-5 col-sm-offset-6"
                >
                    <figure class="B5ds-dock-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-dock/B5ds-dock-phone-side.png"
                            class="B5ds-dock-media"
                            width="1148"
                            height="451"
                            alt="Мобильный телефон Maxvi B5ds"
                        />

                        <figcaption
                            class="B5ds-dock-figcaption"
                            data-aos="fade-left"
                            data-aos-duration="500"
                            data-aos-anchor=".B5ds-dock-figure"
                        >
                            <div
                                class="B5ds-dock-figcaption-line"
                                data-aos="fade-in"
                                data-aos-duration="300"
                                data-aos-delay="500"
                                data-aos-anchor=".B5ds-dock-figcaption"
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
        class="B5ds-battery"
        style="
            background-image: url('<?= $folder ?>/images/section-battery/B5ds-battery-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B5ds-media-container col-xs-12 col-sm-6 col-md-8"
                >
                    <figure
                        class="B5ds-battery-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <div
                            class="B5ds-battery-lightning"
                            style="
                                background-image: url('<?= $folder ?>/images/section-battery/B5ds-battery-lightning.png');
                            "
                        ></div>


                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/B5ds-battery-phone-back.png"
                            class="B5ds-battery-media"
                            width="790"
                            height="1320"
                            alt="Мобильный телефон Maxvi B5ds"
                        />
                    </figure>
                </div>

                <div
                    class="B5ds-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <div
                        class="B5ds-battery-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ЁМКАЯ БАТАРЕЯ
                    </div>

                    <div
                        class="B5ds-battery-subtitle"
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

    <section class="B5ds-speaker section-dark">
        <video
            class="B5ds-speaker-video"
            poster="<?= $folder ?>/images/section-speaker/B5ds-speaker-video-poster.jpg"
            autoplay
            muted
            playsinline
            loop
        >
            <source
                src="<?= $folder ?>/images/section-speaker/B5ds-speaker-video.mp4"
                type="video/mp4"
            />
        </video>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="B5ds-media-container col-xs-12 col-sm-11">
                    <figure class="B5ds-speaker-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-speaker/B5ds-speaker-phone-back.png"
                            class="B5ds-speaker-media"
                            width="1003"
                            height="1113"
                            alt="Мобильный телефон Maxvi B5ds"
                        />
                    </figure>
                </div>

                <div
                    class="B5ds-typography-container col-xs-12 col-sm-5 col-sm-offset-7"
                >
                    <div
                        class="B5ds-speaker-title"
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
        class="B5ds-sos section-dark"
        style="
            background-image: url('/<?= $folder ?>/images/section-sos/B5ds-sos-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="B5ds-media-container col-xs-12">
                    <figure class="B5ds-sos-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-sos/B5ds-sos-phone-front.png"
                            class="B5ds-sos-media"
                            width="612"
                            height="1262"
                            alt="Мобильный телефон Maxvi B5ds"
                        />
                    </figure>
                </div>

                <div
                    class="B5ds-typography-container col-xs-9 col-sm-4"
                >
                    <div
                        class="B5ds-sos-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ФУНКЦИЯ
                        <br />
                        <span class="text-lead">SOS</span>
                    </div>
                </div>

                <div
                    class="B5ds-typography-container col-xs-9 col-sm-4 col-sm-offset-8"
                >
                    <div
                        class="B5ds-sos-subtitle"
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
        class="B5ds-camera"
        style="
            background-image: url('/<?= $folder ?>/images/section-camera/B5ds-camera-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B5ds-typography-container col-xs-9 col-sm-5 col-md-offset-1"
                >
                    <div
                        class="B5ds-camera-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        КАМЕРА
                    </div>

                    <div
                        class="B5ds-camera-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        Снимайте лучшие
                        <br />
                        моменты
                    </div>
                </div>

                <div
                    class="B5ds-media-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <figure
                        class="B5ds-camera-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-camera/B5ds-camera-phone-back.png"
                            class="B5ds-camera-media"
                            width="1119"
                            height="1533"
                            alt="Мобильный телефон Maxvi B5ds"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>