<?php

/**
 * Bitrix vars
 *
 * @var array $templateFolder
 * @var array $arParams
 * @var CMain $APPLICATION
 * @var CUser $USER
 */

$folder = substr(DIR, strlen($_SERVER['DOCUMENT_ROOT'])) . '/files/';

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
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap.min.js');
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="B231ds-landing">
    <section class="B231ds-screen">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B231ds-typography-container col-xs-12 col-sm-7"
                >
                    <div
                        class="B231ds-screen-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ДИСПЛЕЙ 2.31"
                    </div>

                    <div
                        class="B231ds-screen-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        Просматривайте
                        <br />
                        изображения и видео
                        <br />
                        на большом экране
                    </div>
                </div>

                <div
                    class="B231ds-media-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <figure class="B231ds-screen-figure">
                        <video
                            class="B231ds-screen-video"
                            poster="<?= $folder ?>/images/section-screen/B231ds-screen-video-poster.jpg"
                            autoplay
                            muted
                            playsinline
                            loop
                        >
                            <source
                                src="<?= $folder ?>/images/section-screen/B231ds-screen-video.mp4"
                                type="video/mp4"
                            />
                        </video>

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/B231ds-screen-phone-front.png"
                            class="B231ds-screen-media"
                            width="465"
                            height="930"
                            alt="Мобильный телефон Maxvi B231ds"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="B231ds-dock">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B231ds-media-container col-xs-12 col-sm-6 col-lg-5"
                >
                    <figure class="B231ds-dock-figure">
                        <div
                            class="B231ds-dock-layer layer-back"
                            style="
                                background-image: url('<?= $folder ?>/images/section-dock/B231ds-dock-back.png');
                            "
                        ></div>

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-dock/B231ds-dock-phone.png"
                            class="B231ds-dock-media"
                            width="462"
                            height="685"
                            alt="Мобильный телефон Maxvi B231ds"
                        />

                        <div
                            class="B231ds-dock-layer layer-front"
                            style="
                                background-image: url('<?= $folder ?>/images/section-dock/B231ds-dock-front.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="B231ds-typography-container col-xs-12 col-sm-7 col-sm-offset-5 col-lg-6 col-lg-offset-1"
                >
                    <div
                        class="B231ds-dock-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        <span class="text-lead">ДОК-СТАНЦИЯ</span>
                        <br />
                        В КОМПЛЕКТЕ
                    </div>

                    <div
                        class="B231ds-dock-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        Минимизируйте сложности
                        <br />
                        с зарядкой
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="B231ds-sos section-dark">
        <div class="B231ds-sos-spot B231ds-sos-spot--left"></div>
        <div class="B231ds-sos-spot B231ds-sos-spot--right"></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B231ds-typography-container col-xs-12 col-sm-5"
                >
                    <div
                        class="B231ds-sos-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        КНОПКА
                        <br />
                        <span class="text-lead">SOS</span>
                    </div>

                    <div
                        class="B231ds-sos-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        Вызов экстренной помощи
                    </div>
                </div>

                <div class="B231ds-media-container col-xs-12 col-sm-7">
                    <figure
                        class="B231ds-sos-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-sos/B231ds-sos-phone-back.png"
                            class="B231ds-sos-media"
                            width="448"
                            height="1362"
                            alt="Мобильный телефон Maxvi B231ds"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="B231ds-keyboard">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B231ds-media-container col-xs-6 col-md-7"
                >
                    <figure
                        class="B231ds-keyboard-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                        data-aos-anchor=".B231ds-keyboard"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-keyboard/B231ds-keyboard-phone-front.png"
                            class="B231ds-keyboard-media"
                            width="686"
                            height="1404"
                            alt="Мобильный телефон Maxvi B231ds"
                        />
                    </figure>
                </div>

                <div
                    class="B231ds-typography-container col-xs-7 col-sm-6 col-md-5 col-xs-offset-5 col-sm-offset-0"
                >
                    <div
                        class="B231ds-keyboard-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        УДОБНАЯ
                        <br />
                        <b>КЛАВИАТУРА</b>
                    </div>

                    <div
                        class="B231ds-keyboard-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor-placement="bottom-bottom"
                    >
                        Для комфортного
                        <br />
                        использования
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>