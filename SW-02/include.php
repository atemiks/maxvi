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
//$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/parallax.min.js');

// Анимация
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap.min.js');
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="SW02-landing">
    <section class="SW02-resistant section-dark"
        style="background-image: url('<?= $folder ?>images/section-resistant/SW02-resistant-bg.jpg');">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SW02-media-container col-xs-12 col-sm-6">
                    <figure class="SW02-media-figure" data-aos="fade-right">
                        <img loading="lazy" src="<?= $folder ?>images/section-resistant/SW02-resistant-watch.png"
                            width="509" height="594" alt="Смарт часы Maxvi SW02" class="SW02-media">
                    </figure>
                </div>

                <div class="SW02-typography-container col-xs-12 col-sm-6">
                    <div class="SW02-title" data-aos="fade-left" data-aos-duration="500">
                        <span class="text-lead">ЗАЩИТА</span> <br>
                        ОТ ВЛАГИ И <br>
                        ПЫЛИ <br>
                        <span class="text-lead">IP67</span>
                    </div>

                    <div class="SW02-description" data-aos="fade-left" data-aos-duration="500" data-aos-delay="100">
                        Для активных
                        и неудержимых
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="SW02-screen">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SW02-typography-container col-xs-12 col-sm-8 col-md-6">
                    <div class="SW02-title" data-aos="fade-right" data-aos-duration="500">
                        БОЛЬШОЙ <br>
                        <span>ЭКРАН 1.83’’</span> <br>
                        <span>И</span> ПОВЫШЕННАЯ АВТОНОМНОСТЬ
                    </div>
                </div>

                <div class="SW02-media-container col-xs-12">
                    <figure class="SW02-media-figure">
                        <img loading="lazy" src="<?= $folder ?>images/section-screen/SW02-screen-watch.png" width="1427"
                            height="1430" alt="Смарт часы Maxvi SW02" class="SW02-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="SW02-colors">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SW02-typography-container col-xs-12">
                    <div class="SW02-title" data-aos="fade-up" data-aos-duration="500">
                        <span>ВЫБЕРИ</span> СВОЙ <span>ЦВЕТ</span>
                    </div>
                </div>

                <div class="SW02-media-container col-xs-12">
                    <figure class="SW02-media-figure">
                        <img loading="lazy" src="<?= $folder ?>images/section-colors/SW02-colors-watches.png" width="1850"
                            height="787" alt="Смарт часы Maxvi SW02" class="SW02-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="SW02-fitness section-dark"
        style="background-image: url('<?= $folder ?>images/section-fitness/SW02-fitness-bg.jpg');">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="SW02-typography-container col-xs-12 col-sm-6 col-lg-5">
                    <div class="SW02-title" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom">
                        SW-02
                    </div>

                    <div class="SW02-description" data-aos="fade-right" data-aos-delay="100"
                        data-aos-anchor-placement="bottom-bottom">
                        ЭНЕРГИЧНЫЙ <br>
                        ФИТНЕС-КОМПАНЬОН
                    </div>
                </div>

                <div class="SW02-media-container col-xs-12 col-sm-6 col-lg-offset-1">
                    <figure class="SW02-media-figure" data-aos="fade-left" data-aos-duration="800"
                        data-aos-delay="300">
                        <img loading="lazy" src="<?= $folder ?>images/section-fitness/SW02-fitness-watch.png" width="500"
                            height="587" alt="Смарт часы Maxvi SW02" class="SW02-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
