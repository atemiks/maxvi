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
<div class="RT01-landing">
    <section class="RT01-intro section-dark">
        <div class="RT01-intro-bg" style="
                background-image: url('<?= $folder ?>/images/section-intro/RT01-intro-bg.jpg');
            "></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="RT01-typography-container col-xs-12 col-sm-6">
                    <div class="RT01-intro-title">
                        <span class="text-lead">RT-01</span>
                        СТАЦИОНАРНЫЙ
                        <br />
                        СОТОВЫЙ
                        <br />
                        ТЕЛЕФОН
                    </div>

                    <div class="RT01-screen-title">
                        ЭКРАН
                        <br />
                        <span class="text-lead">2.2’’</span>
                    </div>
                </div>

                <div class="RT01-media-container col-xs-12 col-sm-offset-5 col-sm-7">
                    <figure class="RT01-intro-figure">
                        <img loading="lazy" src="<?= $folder ?>/images/section-intro/RT01-intro-phone-front.png" class="RT01-intro-media" width="650" height="728" alt="Стационарный сотовый телефон Maxvi RT01" />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="RT01-antenna">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="RT01-typography-container col-xs-12 col-sm-6 col-lg-5">
                    <div class="RT01-antenna-title">
                        СКЛАДНАЯ
                        <br />
                        АНТЕННА
                    </div>

                    <div class="RT01-antenna-subtitle">
                        УСИЛИВАЕТ ПРИЁМ
                        <br />
                        СИГНАЛА ДАЖЕ В
                        <br />
                        ОТДАЛЁННЫХ
                        <br />
                        РАЙОНАХ
                    </div>
                </div>

                <div class="RT01-media-container col-xs-12 col-sm-11 col-sm-offset-1">
                    <figure class="RT01-antenna-figure">
                        <img loading="lazy" src="<?= $folder ?>/images/section-antenna/RT01-antenna-phone-side.png" class="RT01-antenna-media" width="1022" height="702" alt="Стационарный сотовый телефон Maxvi RT01" />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="RT01-sim">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="RT01-typography-container col-xs-12">
                    <div class="RT01-sim-title" data-aos="fade-up">
                        2 SIM-КАРТЫ
                    </div>

                    <div class="RT01-sim-subtitle" data-aos="fade-up">
                        УДОБНО РАЗДЕЛЯТЬ
                        <br />
                        РАБОЧИЕ И ЛИЧНЫЕ ЗВОНКИ
                    </div>
                </div>

                <div class="RT01-media-container col-xs-12">
                    <figure class="RT01-sim-figure" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-anchor=".RT01-sim-subtitle">
                        <div class="RT01-sim-parallax">
                            <div class="RT01-sim-layer" data-depth="0.1">
                                <div class="RT01-sim-back" style="
                                        background-image: url('<?= $folder ?>/images/section-sim/sim-back.png');
                                    "></div>
                            </div>

                            <img loading="lazy" src="<?= $folder ?>/images/section-sim/RT01-sim-phone-front.png" class="RT01-sim-media" width="1130" height="1006" alt="Стационарный сотовый телефон Maxvi RT01" />

                            <div class="RT01-sim-layer" data-depth="0.2">
                                <div class="RT01-sim-front" style="
                                        background-image: url('<?= $folder ?>/images/section-sim/sim-front.png');
                                    "></div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="RT01-battery">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="RT01-typography-container col-xs-12 col-lg-10">
                    <div class="RT01-battery-title">
                        ВСТРОЕННАЯ БАТАРЕЯ
                        <br />
                        1000 mAh
                    </div>

                    <div class="RT01-battery-subtitle">
                        ОСТАВАЙТЕСЬ НА СВЯЗИ,
                        <br />
                        ДАЖЕ ЕСЛИ НЕТ ИСТОЧНИКА
                        <br />
                        ЭЛЕКТРИЧЕСТВА
                    </div>
                </div>

                <div class="RT01-media-container col-xs-12">
                    <figure class="RT01-battery-figure">
                        <img loading="lazy" src="<?= $folder ?>/images/section-battery/RT01-battery-phone-front.png" class="RT01-battery-media" width="1090" height="813" alt="Стационарный сотовый телефон Maxvi RT01" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>