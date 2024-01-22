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
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/parallax.min.js');

// Анимация
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap.min.js');
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="SM751S-landing">
    <section class="SM751S-power" style="
            background-image: url('<?= $folder ?>/images/section-power/SM751S-power-bg.jpg');
        ">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SM751S-typography-container col-xs-12 col-sm-10">
                    <div class="SM751S-power-title" data-aos="fade-right" data-aos-duration="500">
                        МОЩНОСТЬ
                        <br />
                        <span class="text-danger">750W</span>
                    </div>
                </div>

                <div class="SM751S-media-container col-xs-12">
                    <figure class="SM751S-power-figure">
                        <img loading="lazy" src="<?= $folder ?>/images/section-power/SM751S-power-sandwichmaker-front.png" class="SM751S-power-media" width="712" height="448" alt="Сэндвичница Maxvi SM751S" />

                        <div class="layer layer-sandwich"></div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="SM751S-material section-dark" style="
            background-image: url('<?= $folder ?>/images/section-material/SM751S-material-bg.jpg');
        ">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SM751S-media-container col-xs-12 col-sm-10">
                    <figure class="SM751S-material-figure">
                        <img loading="lazy" class="SM751S-material-media" src="<?= $folder ?>/images/section-material/SM751S-material-sandwichmaker-front.png" width="755" height="705" alt="Сэндвичница Maxvi SM751S" />
                    </figure>
                </div>

                <div class="SM751S-typography-container col-xs-12 col-sm-10 col-sm-offset-2">
                    <div class="SM751S-material-title" data-aos="fade-left">
                        АНТИПРИГАРНОЕ
                        <br />
                        ПОКРЫТИЕ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="SM751S-indicator">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SM751S-media-container col-xs-8 col-sm-7">
                    <figure class="SM751S-indicator-figure" data-aos="fade-up" data-aos-duration="800">
                        <img loading="lazy" class="SM751S-indicator-media" src="<?= $folder ?>/images/section-indicator/SM751S-indicator-sandwichmaker-front.png" width="744" height="748" alt="Сэндвичница Maxvi SM751S" />

                        <div class="layer layer-indicator">
                            <span class="led led--danger"></span>
                            <span class="led led--success"></span>
                        </div>
                    </figure>
                </div>

                <div class="SM751S-typography-container col-xs-12 col-sm-10 col-sm-offset-2">
                    <div class="SM751S-indicator-title" data-aos="fade-left">
                        <span class="text-danger">ИНДИКАТОР</span>
                        <br />
                        РАБОТЫ
                    </div>

                    <div class="SM751S-indicator-subtitle" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
                        ЭРГОНОМИЧНАЯ
                        <br />
                        НЕНАГРЕВАЮЩАЯСЯ
                        <br />
                        РУЧКА
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>