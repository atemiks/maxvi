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
//$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/parallax.min.js');

// Анимация
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap.min.js');
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="T100-landing">
    <section class="T100-powerbank section-dark"
        style="background-image: url(<?= $folder ?>images/section-powerbank/T100-powerbank-bg.jpg);">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="T100-typography-container col-xs-12 col-sm-7 col-lg-6">
                    <div class="T100-subtitle" data-aos="fade-right" data-aos-duration="500">
                        <span class="T100-subtitle-media">
                            <img loading="lazy" src="<?= $folder ?>images/section-powerbank/T100-powerbank-icon.png"
                                class="T100-subtitle-icon" width="54" height="68" alt="Иконка зарядки"
                                aria-hidden="true">
                        </span>
                        <span class="T100-subtitle-content">
                            ВКЛЮЧЕНИЕ <br>
                            <span class="text-lead">POWERBANK</span> <br>
                            ОДНОЙ КНОПКОЙ
                        </span>
                    </div>
                </div>

                <div class="T100-media-container col-xs-12 col-sm-5  col-lg-6">
                    <figure class="T100-media-figure" data-aos="fade-in">
                        <img loading="lazy" src="<?= $folder ?>images/section-powerbank/T100-powerbank-phone-front.png"
                            width="433" height="667" alt="Мобильный телефон Maxvi T100" class="T100-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="T100-ip" style="background-image: url(<?= $folder ?>images/section-ip/T100-ip-bg.jpg);">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="T100-media-container col-xs-12 col-sm-4 col-md-3">
                    <figure class="T100-media-figure">
                        <img loading="lazy" src="<?= $folder ?>images/section-ip/T100-ip-phone-front.png" width="274"
                            height="600" alt="Мобильный телефон Maxvi T100" class="T100-media">
                    </figure>
                </div>

                <div class="T100-typography-container col-xs-12 col-sm-8 col-sm-o">
                    <div class="T100-title" data-aos="fade-right" data-aos-duration="500">
                        ЗАЩИТА ОТ <br>
                        ВЛАГИ И ПЫЛИ <br>
                        IP54
                    </div>

                    <div class="T100-subtitle" data-aos="fade-right" data-aos-duration="500">
                        БЕЗГРАНИЧНЫЙ <br>
                        ОТДЫХ <b>В ЛЮБЫХ <br> УСЛОВИЯХ</b>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="T100-flashlight section-dark"
        style="background-image: url(<?= $folder ?>images/section-flashlight/T100-flashlight-bg.jpg)">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="T100-media-container col-xs-12 col-sm-5">
                    <figure class="T100-media-figure">
                        <img loading="lazy" src="<?= $folder ?>images/section-flashlight/T100-flashlight-phone-back.png"
                            width="589" height="800" alt="Мобильный телефон Maxvi T100" class="T100-media">
                    </figure>
                </div>

                <div class="T100-typography-container col-xs-12 col-sm-6 col-sm-offset-1">
                    <div class="T100-title" data-aos="fade-left" data-aos-duration="500">
                        МОЩНЫЙ <br> ФОНАРИК
                    </div>

                    <div class="T100-description" data-aos="fade-left" data-aos-duration="500">
                        ярко светит в нужный момент
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
