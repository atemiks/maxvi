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
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/parallax.min.js');

// Анимация
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap.min.js');
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="GSP01-landing">
    <section class="GSP01-intro section-dark">
        <div class="container">
            <div class="GSP01-intro-clouds">
                <div class="GSP01-intro-cloud" data-depth="0.25"></div>
                <div class="GSP01-intro-cloud" data-depth="0.1"></div>
                <div class="GSP01-intro-cloud" data-depth="0.3"></div>
            </div>

            <div class="content-wrapper row d-flex">
                <div class="GSP01-typography-container col-xs-12">
                    <div class="GSP01-intro-title" data-typing-animation>
                        ПОРТАТИВНАЯ ИГРОВАЯ КОНСОЛЬ
                    </div>

                    <div class="GSP01-intro-model" data-typing-animation data-typing-animation-delay="1400">
                        GSP-01
                    </div>

                    <button type="button" class="GSP01-intro-cta" data-target=".GSP01-screen">
                        Start
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="GSP01-screen section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="GSP01-typography-container col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="GSP01-screen-title" data-aos="fade-up" data-aos-duration="500">
                        БОЛЬШОЙ ЭКРАН
                        <br />
                        2.8’’
                    </div>
                </div>

                <div class="GSP01-media-container col-xs-12">
                    <figure class="GSP01-screen-figure" data-aos="fade-up" data-aos-duration="800">
                        <img loading="lazy" src="<?= $folder ?>/images/section-screen/GSP01-screen-console-front.png" class="GSP01-screen-media" width="999" height="1363" alt="Портативная игровая консоль Maxvi GSP01" />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="GSP01-kit section-dark">
        <div class="container">
            <div class="GSP01-kit-clouds">
                <div class="GSP01-kit-cloud" data-depth="0.3"></div>
                <div class="GSP01-kit-cloud" data-depth="0.2"></div>
                <div class="GSP01-kit-cloud" data-depth="0.1"></div>
                <div class="GSP01-kit-cloud" data-depth="0.3"></div>
            </div>

            <div class="GSP01-kit-islands">
                <div class="content-wrapper row d-flex" data-depth="0.25">
                    <div class="GSP01-typography-container col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                        <div class="GSP01-kit-island">
                            <div class="GSP01-kit-island-title">
                                <span class="text-lead">500</span>
                                <br />
                                РЕТРО ИГР
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-wrapper row d-flex" data-depth="0.2">
                    <div class="GSP01-media-container col-xs-12">
                        <figure class="GSP01-kit-figure">
                            <img loading="lazy" src="<?= $folder ?>/images/section-kit/GSP01-kit-joystick-front.png" class="GSP01-kit-media" width="1004" height="625" alt="Портативная игровая консоль Maxvi GSP01" />

                            <div class="GSP01-kit-island">
                                <div class="GSP01-kit-island-title">
                                    ВТОРОЙ
                                    <br />
                                    ДЖОЙСТИК
                                    <br />
                                    В КОМПЛЕКТЕ
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="GSP01-battery section-dark" style="
            background-image: url('<?= $folder ?>/images/section-battery/GSP01-battery-bg.svg');
        ">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="GSP01-typography-container col-xs-12 col-sm-10 col-lg-8 col-sm-offset-1 col-lg-offset-2">
                    <div class="GSP01-battery-title" data-aos="fade-up" data-aos-duration="500" data-text="АВТОНОМНОСТЬ">
                        АВТОНОМНОСТЬ
                    </div>

                    <div class="GSP01-battery-subtitle" data-aos="fade-up" data-aos-duration="500" data-text="НАСЛАЖДАЙТЕСЬ ИГРАМИ В&nbsp;ЛЮБОМ МЕСТЕ">
                        НАСЛАЖДАЙТЕСЬ ИГРАМИ В&nbsp;ЛЮБОМ МЕСТЕ
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>