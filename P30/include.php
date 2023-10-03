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
<div class="P30-landing">
    <section
        class="P30-design section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-design/P30-design-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P30-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="P30-design-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        СТИЛЬНЫЙ
                        <br />
                        ДИЗАЙН
                    </div>

                    <div
                        class="P30-design-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        data-aos-delay="100"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/logo-maxvi.svg"
                            class="P30-design-logo"
                            width="230"
                            height="40"
                            alt="Maxvi"
                        />
                        <br />
                        P30
                    </div>
                </div>

                <div class="P30-media-container col-xs-12 col-sm-6">
                    <figure class="P30-design-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/P30-design-phone-back.png"
                            class="P30-design-media layer-1"
                            width="251"
                            height="644"
                            alt="Мобильный телефон Maxvi P30 черного цвета"
                            data-depth="0.1"
                        />
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/P30-design-phone-front.png"
                            class="P30-design-media layer-2"
                            width="402"
                            height="660"
                            alt="Мобильный телефон Maxvi P30 черного цвета"
                            data-depth="0.2"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P30-speaker section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-speaker/P30-speaker-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P30-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="P30-speaker-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ГРОМКИЙ
                        <br />
                        ДИНАМИК
                    </div>
                </div>

                <div class="P30-media-container col-xs-12 col-sm-6">
                    <figure class="P30-speaker-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-speaker/P30-speaker-phone-back.png"
                            class="P30-speaker-media"
                            width="430"
                            height="1019"
                            alt="Мобильный телефон Maxvi P30 синего цвета"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P30-camera section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-camera/P30-camera-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P30-typography-container col-xs-12 col-sm-4 col-sm-offset-8"
                >
                    <div
                        class="P30-camera-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        КАМЕРА
                        <br />
                        0.3&nbsp;mPx
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="P30-video section-dark">Видео</section>
</div>
