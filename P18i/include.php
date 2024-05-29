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
<div class="P18i-landing">
    <section
        class="P18i-screen section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-screen/P18i-screen-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P18i-typography-container col-xs-12 col-sm-7"
                >
                    <div
                        class="P18i-screen-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        БОЛЬШОЙ
                        <br />
                        ЭКРАН 2.8"
                    </div>

                    <div
                        class="P18i-screen-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        Просматривайте изображения
                        <br />
                        и видео с комфортом
                    </div>
                </div>

                <div
                    class="P18i-media-container col-xs-12 col-sm-5 col-md-4 col-md-offset-1"
                >
                    <figure class="P18i-screen-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/P18i-screen-phone-side.png"
                            class="P18i-screen-media"
                            width="592"
                            height="1542"
                            alt="Мобильный телефон Maxvi P18i"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P18i-case section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-case/P18i-case-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P18i-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <div
                        class="P18i-case-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor-placement="top-center"
                    >
                        <div class="P18i-case-title-line"></div>

                        КОРПУС
                        <br />
                        ПОВЫШЕННОЙ
                        <br />
                        ПРОЧНОСТИ
                    </div>

                    <div
                        class="P18i-case-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor-placement="top-center"
                    >
                        Металлическая рамка обеспечит
                        <br />
                        дополнительную защиту
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P18i-sim"
        style="
            background-image: url('<?= $folder ?>/images/section-sim/P18i-sim-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="P18i-media-container col-xs-8 col-sm-12">
                    <figure class="P18i-sim-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-sim/P18i-sim-phone-front.png"
                            class="P18i-sim-media"
                            width="577"
                            height="1378"
                            alt="Мобильный телефон Maxvi P18i"
                        />

                        <div
                            class="P18i-sim-layer-sim"
                            style="
                                background-image: url('<?= $folder ?>/images/section-sim/P18i-sim.svg');
                            "
                        ></div>
                        <div
                            class="P18i-sim-layer-sim"
                            style="
                                background-image: url('<?= $folder ?>/images/section-sim/P18i-sim.svg');
                            "
                        ></div>
                        <div
                            class="P18i-sim-layer-sim"
                            style="
                                background-image: url('<?= $folder ?>/images/section-sim/P18i-sim.svg');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="P18i-typography-container col-xs-12 col-sm-4"
                >
                    <div
                        class="P18i-sim-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        3 SIM
                        <br />
                        КАРТЫ
                    </div>
                </div>

                <div
                    class="P18i-typography-container col-xs-12 col-sm-4 col-sm-offset-4"
                >
                    <div
                        class="P18i-sim-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        Уменьшайте расходы,
                        <br />
                        управляя тарифными
                        <br />
                        планами различных
                        <br />
                        мобильных операторов
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P18i-battery"
        style="
            background-image: url('<?= $folder ?>/images/section-battery/P18i-battery-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P18i-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="P18i-battery-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ЁМКАЯ
                        <br />
                        БАТАРЕЯ
                    </div>

                    <div
                        class="P18i-battery-capacity"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <span class="text-lead">3200</span>
                        mAh
                    </div>

                    <div
                        class="P18i-battery-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        POWERBANK

                        <span
                            class="P18i-battery-subtitle-icon"
                            style="
                                background-image: url('<?= $folder ?>/images/section-battery/P18i-battery-icon-power.svg');
                            "
                        ></span>
                    </div>
                </div>

                <div
                    class="P18i-media-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <figure
                        class="P18i-battery-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/P18i-battery-phone-side.png"
                            class="P18i-battery-media"
                            width="1500"
                            height="644"
                            alt="Мобильный телефон Maxvi P18i"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P18i-flashlight section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-flashlight/P18i-flashlight-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="P18i-media-container col-xs-12 col-sm-9">
                    <figure class="P18i-flashlight-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-flashlight/P18i-flashlight-phone-side.png"
                            class="P18i-flashlight-media"
                            width="1012"
                            height="1047"
                            alt="Мобильный телефон Maxvi P18i"
                        />

                        <div
                            data-aos="fade-in"
                            data-aos-duration="800"
                            data-aos-anchor=".P18i-flashlight-figure"
                            class="P18i-flashlight-layer-flashlight"
                            style="
                                background-image: url('<?= $folder ?>/images/section-flashlight/P18i-flashlight.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="P18i-typography-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <div
                        class="P18i-flashlight-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ЯРКИЙ ФОНАРИК
                    </div>

                    <div
                        class="P18i-flashlight-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        <div
                            data-aos="fade-in"
                            data-aos-duration="500"
                            data-aos-delay="500"
                            data-aos-anchor=".P18i-flashlight-subtitle"
                            data-aos-anchor-placement="bottom-bottom"
                            class="P18i-flashlight-subtitle-line"
                        ></div>

                        С УДОБНЫМ ПЕРЕКЛЮЧАТЕЛЕМ
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>