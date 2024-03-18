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
<div class="B21ds-landing">
    <section class="B21ds-dock section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B21ds-media-container col-xs-12 col-sm-6 col-lg-8"
                >
                    <figure
                        class="B21ds-dock-figure"
                        style="
                            background-image: url('<?= $folder ?>/images/section-dock/B21ds-dock-media-bg.png');
                        "
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-dock/B21ds-dock-phone-front.png"
                            class="B21ds-dock-media"
                            width="436"
                            height="1021"
                            alt="Мобильный телефон Maxvi B21ds"
                        />
                    </figure>
                </div>

                <div
                    class="B21ds-typography-container col-xs-12 col-sm-6 col-lg-5 col-lg-offset-7"
                >
                    <div
                        class="B21ds-dock-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        <b>ДОК-СТАНЦИЯ</b>
                        <br />
                        В КОМПЛЕКТЕ
                    </div>

                    <div
                        class="B21ds-dock-subtitle"
                        data-aos="fade-in"
                        data-aos-duration="500"
                    >
                        СТАВЬТЕ НА ЗАРЯДКУ
                        <br />
                        БЕЗ МАЛЕЙШИХ ЗАТРУДНЕНИЙ!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="B21ds-screen section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B21ds-typography-container col-xs-12 col-sm-6 col-lg-5 col-lg-offset-1"
                >
                    <div
                        class="B21ds-screen-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        БОЛЬШОЙ
                        <br />
                        ЭКРАН 2.4”
                    </div>

                    <div
                        class="B21ds-screen-subtitle"
                        data-aos="fade-in"
                        data-aos-duration="500"
                    >
                        НАСЛАЖДАЙТЕСЬ КОМФОРТНЫМ
                        <br />
                        ПРОСМОТРОМ МЕДИАФАЙЛОВ
                    </div>
                </div>

                <div
                    class="B21ds-media-container col-xs-12 col-sm-7 col-sm-offset-5 col-md-8 col-md-offset-4 col-lg-7 col-lg-offset-5"
                >
                    <figure
                        class="B21ds-screen-figure"
                        style="
                            background-image: url('<?= $folder ?>/images/section-screen/B21ds-screen-media-bg.png');
                        "
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/B21ds-screen-phone-front.png"
                            class="B21ds-screen-media"
                            width="724"
                            height="1686"
                            alt="Мобильный телефон Maxvi B21ds"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="B21ds-battery section-dark">
        <video
            class="B21ds-battery-video"
            poster="<?= $folder ?>/images/section-battery/B21ds-battery-video-poster.jpg"
            autoplay
            muted
            playsinline
            loop
        >
            <source
                src="<?= $folder ?>/images/section-battery/B21ds-battery-video.mp4"
                type="video/mp4"
            />
        </video>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B21ds-typography-container col-xs-12 col-sm-6 col-lg-offset-1"
                >
                    <div class="B21ds-battery-title">
                        <figure
                            class="B21ds-battery-icon"
                            style="
                                background-image: url('<?= $folder ?>/images/section-battery/B21ds-battery-icon.svg');
                            "
                        ></figure>

                        <span>
                            <b>
                                МОЩНАЯ
                                <br />
                                БАТАРЕЯ
                            </b>
                            <br />
                            2300 mAh
                        </span>
                    </div>
                </div>

                <div
                    class="B21ds-media-container col-xs-12 col-sm-6 col-lg-5 col-lg-offset-7"
                >
                    <figure class="B21ds-battery-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/B21ds-battery-phone-front.png"
                            class="B21ds-battery-media"
                            width="630"
                            height="930"
                            alt="Мобильный телефон Maxvi B21ds"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="B21ds-sos">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B21ds-typography-container col-xs-12 col-sm-4 col-lg-3 col-lg-offset-1"
                >
                    <div class="B21ds-sos-title">
                        КНОПКА
                        <br />
                        <span class="text-lead">SOS</span>
                    </div>
                </div>

                <div
                    class="B21ds-media-container col-xs-12 col-sm-8"
                >
                    <figure
                        class="B21ds-sos-figure"
                        style="
                            background-image: url('<?= $folder ?>/images/section-sos/B21ds-sos-media-bg.png');
                        "
                    >
                        <img
                            loading="lazy"
                            data-aos="fade-left"
                            data-aos-duration="800"
                            src="<?= $folder ?>/images/section-sos/B21ds-sos-phone-front.png"
                            class="B21ds-sos-media"
                            width="614"
                            height="1398"
                            alt="Мобильный телефон Maxvi B21ds"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="B21ds-speaker section-dark">
        <video
            class="B21ds-speaker-video"
            poster="<?= $folder ?>/images/section-speaker/B21ds-speaker-video-poster.jpg"
            autoplay
            muted
            playsinline
            loop
        >
            <source
                src="<?= $folder ?>/images/section-speaker/B21ds-speaker-video.mp4"
                type="video/mp4"
            />
        </video>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B21ds-media-container col-xs-12 col-sm-7 col-lg-8"
                >
                    <figure
                        class="B21ds-speaker-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-speaker/B21ds-speaker-phone-back.png"
                            class="B21ds-speaker-media"
                            width="900"
                            height="2098"
                            alt="Мобильный телефон Maxvi B21ds"
                        />
                    </figure>
                </div>

                <div
                    class="B21ds-typography-container col-xs-12 col-sm-5 col-md-5 col-lg-4"
                >
                    <div
                        class="B21ds-speaker-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        <b class="text-lead">ГРОМКИЙ</b>
                        <br />
                        ДИНАМИК
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>