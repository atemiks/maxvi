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
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap-3.12.2.min.js');
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="KS102P-landing">
    <section
        class="KS102P-intro"
        style="
            background-image: url('<?= $folder ?>/images/section-intro/KS102P-intro-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KS102P-media-container col-xs-12 col-sm-8">
                    <figure
                        class="KS102P-intro-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/KS102P-intro-scales-front.png"
                            class="KS102P-intro-media"
                            width="1240"
                            height="1162"
                            alt="Кухонные весы Maxvi KS102P"
                        />
                    </figure>
                </div>

                <div
                    class="KS102P-typography-container col-xs-12 col-sm-5 col-sm-offset-7"
                >
                    <img
                        class="KS102P-intro-logo"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        width="546"
                        height="94"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        aria-hidden="true"
                        alt="Логотип Maxvi"
                    />

                    <div
                        class="KS102P-intro-model"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        KS102P
                    </div>

                    <div
                        class="KS102P-intro-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        НЕЗАМЕНИМЫЙ
                        <br />
                        ПОМОЩНИК
                        <br />
                        НА КУХНЕ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="KS102P-accuracy"
    >
        <div class="KS102P-accuracy-bg"></div>
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KS102P-media-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <figure class="KS102P-accuracy-figure">
                        <div class="scales">
                            <div
                                class="scales-dock"
                                style="
                                    background-image: url('<?= $folder ?>/images/scales/scales-layer-dock.png');
                                "
                            >
                                <div
                                    class="scales-display"
                                    style="
                                        background-image: url('<?= $folder ?>/images/scales/scales-layer-display.png');
                                    "
                                ></div>
                            </div>

                            <div
                                class="scales-bowl"
                                data-aos="slide-down"
                                data-aos-duration="800"
                                data-aos-anchor-placement="top-center"
                                style="
                                    background-image: url('<?= $folder ?>/images/scales/scales-layer-bowl.png');
                                "
                            ></div>

                            <div
                                class="scales-fruits"
                                style="
                                    background-image: url('<?= $folder ?>/images/scales/scales-layer-fruits.png');
                                "
                            ></div>
                        </div>
                    </figure>
                </div>

                <div
                    class="KS102P-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="KS102P-accuracy-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <b class="text-selected">ТОЧНОСТЬ</b>
                        <br />
                        ВЗВЕШИВАНИЯ
                    </div>

                    <div
                        class="KS102P-accuracy-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        1 ГРАММ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="KS102P-bowl"
        style="
            background-image: url('<?= $folder ?>/images/section-bowl/KS102P-bowl-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KS102P-typography-container col-xs-12 col-sm-6"
                >
                    <div class="KS102P-bowl-title">
                        <b class="text-selected">ЧАША</b>
                        <br />
                        В&nbsp;КОМПЛЕКТЕ
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>