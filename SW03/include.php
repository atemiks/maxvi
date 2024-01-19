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
<div class="SW03-landing">
    <section class="SW03-intro section-dark" style="
            background-image: url('<?= $folder ?>/images/section-intro/SW03-intro-bg.jpg'),
                linear-gradient(to bottom, #60a4ac, #5ba1ac);
        ">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SW03-media-container col-xs-4 col-sm-4 col-xs-offset-6 col-sm-offset-4">
                    <figure class="SW03-intro-figure" data-aos="fade-left" data-aos-duration="800">
                        <img loading="lazy" src="<?= $folder ?>/images/section-intro/SW03-into-watch-front.png" class="SW03-intro-media" width="301" height="1119" alt="Умные часы Maxvi SW03" />
                    </figure>
                </div>

                <div class="SW03-typography-container col-xs-8 col-sm-4">
                    <div class="SW03-intro-title" data-aos="fade-left" data-aos-duration="500">
                        SMART-ЧАСЫ
                        <br />
                        <img loading="lazy" src="<?= $folder ?>/images/logo-maxvi.svg" class="SW03-intro-logo" width="246" height="42" alt="Maxvi" />
                        <br />
                        <span class="text-lead">SW-03</span>
                    </div>

                    <div class="SW03-intro-subtitle" data-aos="fade-left" data-aos-duration="500">
                        Для активных и&nbsp;целеустремлённых
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="SW03-screen">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SW03-typography-container col-xs-12 col-sm-6 col-md-5">
                    <div class="SW03-screen-title" data-aos="fade-right" data-aos-duration="500">
                        БОЛЬШОЙ ИНОФРМАТИВНЫЙ
                        <span class="text-lead">ЭКРАН 1.83’’</span>
                    </div>
                </div>

                <div class="SW03-media-container col-xs-12 col-sm-6 col-md-7">
                    <figure class="SW03-screen-figure" data-aos="fade-left" data-aos-duration="800">
                        <img loading="lazy" data-depth="0.1" src="<?= $folder ?>/images/section-screen/SW03-screen-watch-front.png" class="SW03-screen-media" width="615" height="664" alt="Умные часы Maxvi SW03" />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="SW03-pedometer" style="
            background-image: url('<?= $folder ?>/images/section-pedometer/SW03-pedometer-bg.jpg');
        ">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SW03-typography-container col-xs-12 col-sm-5 col-sm-offset-7">
                    <div class="SW03-pedometer-title" data-aos="fade-left" data-aos-duration="500">
                        <div data-depth="0.1">
                            <span class="text-lead">ШАГОМЕР</span>
                            <br />
                            СЧИТАЙТЕ
                            <br />
                            ШАГИ И КАЛОРИИ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="SW03-sync">
        <div class="SW03-sync-bg" data-depth="0.02" style="
                background-image: url('<?= $folder ?>/images/section-sync/SW03-sync-media.png');
            "></div>

        <div data-depth="0.03" class="container">
            <div class="content-wrapper row d-flex">
                <div class="SW03-typography-container col-xs-12 col-sm-6 col-sm-offset-6">
                    <div class="SW03-sync-title" data-aos="fade-left" data-aos-duration="500">
                        СИНХРОНИЗАЦИЯ С&nbsp;МОБИЛЬНЫМ ТЕЛЕФОНОМ
                    </div>

                    <div class="SW03-sync-subtitle" data-aos="fade-left" data-aos-duration="500">
                        СЛЕДИТЕ ЗА ЗДОРОВЬЕМ, ТРЕНЕРОВКАМИ И УПРАВЛЯЙТЕ
                        УВЕДОМЛЕНИЯМИ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="SW03-case">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SW03-typography-container col-xs-12 col-sm-6 col-md-5">
                    <div class="SW03-case-title" data-aos="fade-right" data-aos-duration="500">
                        КОРПУС С МЕТАЛЛИЧЕСКИМИ ВСТАВКАМИ
                    </div>

                    <div class="SW03-case-subtitle" data-aos="fade-right" data-aos-duration="500">
                        БОЛЕЕ ПРОЧЕН И ДОЛГОВЕЧЕН
                    </div>
                </div>

                <div class="SW03-media-container col-xs-12 col-sm-6 col-md-7">
                    <figure class="SW03-case-figure" data-aos="fade-left" data-aos-duration="800">
                        <img loading="lazy" data-depth="0.1" src="<?= $folder ?>/images/section-case/SW03-case-watch-front.png" class="SW03-case-media" width="647" height="702" alt="Умные часы Maxvi SW03" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>