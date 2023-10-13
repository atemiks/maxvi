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
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap.min.js');
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="PS05-landing">
    <section class="PS05-design section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="PS05-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="PS05-design-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ПОРТАТИВНАЯ
                        <br />
                        КОЛОНКА
                    </div>

                    <div
                        class="PS05-design-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        data-aos-delay="100"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/logo-maxvi.svg"
                            class="PS05-design-logo"
                            width="250"
                            height="40"
                            alt="Maxvi"
                        />
                        <br />
                        PS-05
                    </div>
                </div>

                <div
                    class="PS05-media-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <figure class="PS05-design-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/PS05-design-speaker-front.png"
                            class="PS05-design-media layer-1"
                            width="746"
                            height="775"
                            alt="Портативная колонка Maxvi PS-05 черного цвета"
                            data-depth="0.1"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="PS05-speakers section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="PS05-typography-container col-xs-12">
                    <div
                        class="PS05-speakers-title"
                        data-aos="fade-down"
                        data-aos-duration="500"
                    >
                        30 Ватт ОБЪЕМНОГО ЗВУКА
                    </div>
                </div>

                <div class="PS05-media-container col-xs-12">
                    <figure
                        class="PS05-speakers-figure"
                        data-aos="fade-up"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-speakers/PS05-speakers-speaker-front.png"
                            class="PS05-speakers-media"
                            width="963"
                            height="482"
                            alt="Портативная колонка Maxvi PS-05 черного цвета"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="PS05-controls section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="PS05-media-container col-xs-12 col-sm-8">
                    <figure
                        class="PS05-controls-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-controls/PS05-controls-speaker-side.png"
                            class="PS05-controls-media"
                            width="613"
                            height="563"
                            alt="Портативная колонка Maxvi PS-05 черного цвета"
                        />
                    </figure>
                </div>

                <div
                    class="PS05-typography-container col-xs-12 col-sm-4"
                >
                    <ul class="PS05-controls-list">
                        <li data-aos="fade-left">
                            <b>УДОБНОЕ УПРАВЛЕНИЕ</b>
                        </li>
                        <li data-aos="fade-left" data-aos-delay="100">
                            <b>BLUETOOTH/AUX</b>
                            ПОДКЛЮЧЕНИЕ
                        </li>
                        <li data-aos="fade-left" data-aos-delay="200">
                            <b>БАТАРЕЯ 4500&nbsp;мАч</b>
                        </li>
                        <li data-aos="fade-left" data-aos-delay="300">
                            <b>USB/microUSB</b>
                            МЕДИАПЛЕЕР
                        </li>
                        <li data-aos="fade-left" data-aos-delay="400">
                            <b>ПОДКЛЮЧЕНИЕ МИКРОФОНА</b>
                            ДЛЯ КАРАОКЕ
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
