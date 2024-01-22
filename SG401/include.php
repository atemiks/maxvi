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
<div class="SG401-landing">
    <section class="SG401-size" style="
            background-image: url('<?= $folder ?>/images/section-size/SG401-size-bg.png');
        ">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SG401-typography-container col-xs-12 col-sm-4 col-sm-offset-1">
                    <div class="SG401-size-title" data-aos="fade-right" data-aos-duration="500">
                        ОБЪЁМ
                        <br />
                        0,7&nbsp;л
                    </div>
                </div>

                <div class="SG401-media-container col-xs-12 col-sm-6">
                    <figure class="SG401-size-figure">
                        <div class="layer layer-base"></div>
                        <div class="layer layer-press"></div>
                        <div class="layer layer-cap"></div>
                        <div class="layer layer-sieve"></div>
                        <div class="layer layer-bowl"></div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="SG401-power">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SG401-typography-container col-xs-12">
                    <div class="SG401-power-title" data-aos="fade-left" data-aos-duration="500">
                        МОЩНОСТЬ
                        <br />
                        <span class="text-lead">40W</span>
                    </div>
                </div>

                <div class="SG401-media-container col-xs-12 col-sm-6 col-md-7">
                    <figure class="SG401-power-figure">
                        <img loading="lazy" src="<?= $folder ?>/images/section-power/SG401-power-juicer-side.png" class="SG401-power-media" width="690" height="670" alt="Соковыжималка Maxvi SG401" />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="SG401-rotation">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SG401-media-container col-xs-12 col-sm-8 col-sm-offset-2">
                    <figure class="SG401-rotation-figure">
                        <div class="layer layer-juicer"></div>
                        <div class="layer layer-blades"></div>
                        <div class="layer layer-cap"></div>
                    </figure>
                </div>

                <div class="SG401-typography-container col-xs-12 col-sm-7">
                    <div class="SG401-rotation-title" data-aos="fade-up" data-aos-duration="500" data-aos-anchor-placement="center-bottom">
                        РЕВЕРСИВНОЕ ВРАЩЕНИЕ
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>