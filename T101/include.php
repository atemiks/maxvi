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
<div class="T101-landing">
    <section class="T101-screen section-dark">
        <video class="T101-screen-background"
            poster="<?= $folder ?>images/section-screen/T101-screen-video-landscape-poster.jpg" autoplay muted loop
            playsinline>
            <source src="<?= $folder ?>images/section-screen/T101-screen-video-landscape.mp4" type="video/mp4">
        </video>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="T101-typography-container col-xs-12 col-sm-6">
                    <div class="T101-title" data-aos="fade-right" data-aos-duration="500">
                        БОЛЬШОЙ <br>
                        ЭКРАН <br>
                        <span class="text-lead">2.8’’</span>
                    </div>
                    <div class="T101-subtitle" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100">
                        НАСЛАЖДАЙТЕСЬ <br>
                        КРАСОЧНЫМИ ФОТО И <br>
                        ВИДЕО
                    </div>
                </div>

                <div class="T101-media-container col-xs-12 col-sm-6">
                    <figure class="T101-media-figure">
                        <video class="T101-media-video"
                            poster="<?= $folder ?>images/section-screen/T101-screen-video-portrait-poster.jpg" autoplay
                            muted loop playsinline>
                            <source src="<?= $folder ?>images/section-screen/T101-screen-video-portrait.mp4"
                                type="video/mp4">
                        </video>
                        <img loading="lazy" src="<?= $folder ?>images/section-screen/T101-screen-phone-front.png"
                            width="490" height="1214" alt="Мобильный телефон Maxvi T101" class="T101-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="T101-powerbank section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="T101-typography-container col-xs-12 col-sm-8">
                    <div class="T101-title" data-aos="fade-up" data-aos-duration="500">
                        ВКЛЮЧЕНИЕ <br>
                        <span class="text-lead">POWERBANK</span> <br>
                        ОДНИМ НАЖАТИЕМ КНОПКИ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="T101-battery section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="T101-media-container col-xs-12 col-sm-6">
                    <figure class="T101-media-figure" data-aos="fade-right" data-aos-duration="800">
                        <img loading="lazy" src="<?= $folder ?>images/section-battery/T101-battery-media.png" width="492"
                            height="291" alt="Батарея на 4000 mAh для мобильного телефона Maxvi T101"
                            class="T101-media">
                    </figure>
                </div>

                <div class="T101-typography-container col-xs-12 col-sm-4 col-sm-offset-4">
                    <div class="T101-title" data-aos="fade-up" data-aos-duration="500">
                        БАТАРЕЯ <br>
                        <span class="text-lead">4000</span> <br>
                        <span class="text-small">mAh</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="T101-sim section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="T101-typography-container col-xs-12 col-sm-6">
                    <div class="T101-title" data-aos="fade-right" data-aos-duration="500"
                        data-aos-anchor-placement="center-bottom">
                        2 SIM—КАРТЫ
                    </div>

                    <div class="T101-subtitle" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100"
                        data-aos-anchor-placement="center-bottom">
                        ОПТИМИЗИРУЙТЕ <br>
                        СВОИ РАСХОДЫ
                    </div>
                </div>

                <div class="T101-media-container col-xs-12 col-sm-7 col-sm-offset-5">
                    <figure class="T101-media-figure" data-aos="fade-left" data-aos-duration="800">
                        <img loading="lazy" src="<?= $folder ?>images/section-sim/T101-sim-phone-back.png" width="1316"
                            height="486" alt="Мобильный телефон Maxvi T101 с двумя SIM картами" class="T101-media">
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
