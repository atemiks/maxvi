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
<div class="KE2041G-landing">
    <section class="KE2041G-size">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE2041G-typography-container col-xs-12 col-sm-8 col-md-6">
                    <div class="KE2041G-model" data-aos="fade-right" data-aos-duration="500">
                        KE2041G
                    </div>

                    <div class="KE2041G-title" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100">
                        <span class="text-lead">
                            <span class="text-value">2</span> ЛИТРА
                        </span> <br>
                        ХВАТИТ <br>
                        НА ВСЕХ
                    </div>
                </div>

                <div class="KE2041G-media-container col-xs-12 col-sm-9 col-sm-offset-3">
                    <figure class="KE2041G-media-figure" data-aos="fade-left" data-aos-duration="800">
                        <img loading="lazy" src="<?= $folder ?>images/section-size/KE2041G-size-kettle-front.png"
                            width="1855" height="1189" alt="Электрочайник Maxvi KE2041G" class="KE2041G-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="KE2041G-design">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE2041G-media-container col-xs-12 col-sm-6">
                    <figure class="KE2041G-media-figure" data-aos="fade-right" data-aos-duration="800">
                        <img loading="lazy" src="<?= $folder ?>images/section-design/KE2041G-design-kettle-front.png"
                            width="631" height="944" alt="Электрочайник Maxvi KE2041G" class="KE2041G-media">
                    </figure>
                </div>

                <div class="KE2041G-typography-container col-xs-12 col-sm-6">
                    <div class="KE2041G-title" data-aos="fade-left" data-aos-duration="500">
                        КОРПУС
                        <span>ИЗ <br> ЗАКАЛЕННОГО <br> СТЕКЛА</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KE2041G-led section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE2041G-typography-container col-xs-12 col-sm-6">
                    <div class="KE2041G-title" data-aos="fade-right" data-aos-duration="500">
                        LED ПОДСВЕТКА <br>
                        <span>при включении <br> чайника</span>
                    </div>
                </div>

                <div class="KE2041G-media-container col-xs-12 col-sm-11 col-md-10 col-sm-offset-1 col-md-offset-2">
                    <figure class="KE2041G-media-figure" data-aos="fade-left" data-aos-duration="800">
                        <img loading="lazy" src="<?= $folder ?>images/section-led/KE2041G-led-kettle-front.png" width="1202"
                            height="1232" alt="Электрочайник Maxvi KE2041G" class="KE2041G-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
