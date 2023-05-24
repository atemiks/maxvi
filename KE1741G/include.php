<?php

/**
 * Bitrix vars
 *
 * @var array $templateFolder
 * @var array $arParams
 * @var CMain $APPLICATION
 * @var CUser $USER
 */

 $folder = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])) . '/<?= $folder ?>';

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
<div class="KE1741G-landing">
    <section class="KE1741G-power">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE1741G-typography-container col-xs-12 col-sm-6">
                    <div class="KE1741G-model" data-aos="fade-right" data-aos-duration="500">
                        KE1741G
                    </div>

                    <div class="KE1741G-title" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100">
                        <span class="text-lead">2200 Вт</span> <br>
                        БЫСТРОЕ <br>
                        ЗАКИПАНИЕ <br>
                        ВОДЫ
                    </div>
                </div>

                <div class="KE1741G-media-container col-xs-12 col-sm-8 col-sm-offset-4">
                    <figure class="KE1741G-media-figure">
                        <img loading="lazy" src="<?= $folder ?>images/section-power/KE1741G-power-kettle-front.png"
                            width="920" height="478" alt="Электрочайник Maxvi KE1741G" class="KE1741G-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="KE1741G-size">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE1741G-typography-container col-xs-12 col-sm-6 col-sm-offset-4">
                    <div class="KE1741G-title" data-aos="fade-up" data-aos-duration="500">
                        МАКСИМАЛЬНЫЙ <br>
                        ОБЪЕМ <br>
                        <span class="text-lead">
                            1<span class="text-point">.</span>7L
                        </span>
                    </div>
                </div>

                <div class="KE1741G-media-container col-xs-12">
                    <figure class="KE1741G-media-figure">
                        <img loading="lazy" src="<?= $folder ?>images/section-size/KE1741G-size-kettle-front.png"
                            width="1037" height="1560" alt="Электрочайник Maxvi KE1741G" class="KE1741G-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="KE1741G-led section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE1741G-media-container col-xs-12 col-sm-6">
                    <figure class="KE1741G-media-figure" data-aos="fade-right" data-aos-duration="800">
                        <img loading="lazy" src="<?= $folder ?>images/section-led/KE1741G-led-kettle-front.png" width="1189"
                            height="1307" alt="Электрочайник Maxvi KE1741G" class="KE1741G-media">
                    </figure>
                </div>

                <div class="KE1741G-typography-container col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                    <div class="KE1741G-title" data-aos="fade-left" data-aos-duration="500">
                        МЯГКАЯ <br>
                        LED ПОДСВЕТКА <br>
                        <span>
                            создаёт эффект <br>
                            полноценной <br>
                            иллюминации
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KE1741G-glass"
        style="background-image: url(<?= $folder ?>images/section-glass/KE1741G-glass-fire.png);">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE1741G-typography-container col-xs-12 col-sm-8 col-sm-offset-1">
                    <div class="KE1741G-title" data-aos="fade-right" data-aos-duration="500">
                        <span class="text-lead">
                            ТЕРМОСТОЙКОЕ <br>
                            СТЕКЛО <br>
                        </span>
                        <span>
                            не искажает <br>
                            природных <br>
                            свойств <br>
                            воды
                        </span>
                    </div>
                </div>

                <div class="KE1741G-media-container col-xs-12 col-sm-7 col-sm-offset-5">
                    <figure class="KE1741G-media-figure" data-aos="fade-left" data-aos-duration="800">
                        <img loading="lazy" src="<?= $folder ?>images/section-glass/KE1741G-glass-kettle-front.png"
                            width="876" height="1179" alt="Электрочайник Maxvi KE1741G" class="KE1741G-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
