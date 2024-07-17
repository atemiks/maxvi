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
<div class="E5-landing">
    <section class="E5-intro section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E5-media-container col-xs-12 col-sm-6 col-md-7 col-sm-offset-6 col-md-offset-5"
                >
                    <figure class="E5-intro-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/E5-intro-media-phone-front.png"
                            class="E5-intro-media"
                            width="842"
                            height="1296"
                            alt="Мобильный телефон Maxvi E5"
                        />
                    </figure>
                </div>

                <div class="E5-typography-container col-xs-12 col-sm-7">
                    <img
                        class="E5-intro-logo"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        width="492"
                        height="84"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        aria-hidden="true"
                        alt="Логотип Maxvi"
                    />

                    <div
                        class="E5-intro-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        E5 UP
                    </div>

                    <div
                        class="E5-intro-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <span class="text-tight">ФУНКЦИОНАЛЬНАЯ</span>
                        <br />
                        РАСКЛАДУШКА
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="E5-animation">
        <section
            class="E5-screen"
            style="
                background-image: url('<?= $folder ?>/images/section-screen/E5-screen-bg.jpg');
            "
        >
            <div class="E5-screen-bg">
                <div
                    class="E5-screen-bg-layer"
                    style="
                        background-image: url('<?= $folder ?>/images/section-screen/bg/E5-screen-bg-layer-01.png');
                    "
                ></div>
                <div
                    class="E5-screen-bg-layer"
                    style="
                        background-image: url('<?= $folder ?>/images/section-screen/bg/E5-screen-bg-layer-02.png');
                    "
                ></div>
                <div
                    class="E5-screen-bg-layer"
                    style="
                        background-image: url('<?= $folder ?>/images/section-screen/bg/E5-screen-bg-layer-03.png');
                    "
                ></div>
                <div
                    class="E5-screen-bg-layer"
                    style="
                        background-image: url('<?= $folder ?>/images/section-screen/bg/E5-screen-bg-layer-04.png');
                    "
                ></div>
            </div>

            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="E5-media-container col-xs-12 col-sm-6 col-md-5 col-md-offset-1"
                    >
                        <figure class="E5-phone">
                            <div class="E5-phone-layer">
                                <div class="E5-phone-block">
                                    <canvas
                                        class="E5-phone-canvas"
                                        width="602"
                                        height="1911"
                                    ></canvas>

                                    <div class="E5-phone-buttons">
                                        <div
                                            class="E5-phone-buttons-sos aos-init"
                                            style="
                                                background-image: url('<?= $folder ?>/images/phone/buttons/E5-phone-button-sos.png');
                                            "
                                        ></div>
                                        <div
                                            class="E5-phone-buttons-fm aos-init"
                                            style="
                                                background-image: url('<?= $folder ?>/images/phone/buttons/E5-phone-button-fm.png');
                                            "
                                        ></div>
                                        <div
                                            class="E5-phone-buttons-call aos-init"
                                            style="
                                                background-image: url('<?= $folder ?>/images/phone/buttons/E5-phone-button-call.png');
                                            "
                                        ></div>
                                    </div>
                                </div>

                                <div class="E5-phone-dock">
                                    <div
                                        class="E5-phone-dock-layer layer-1"
                                        style="
                                            background-image: url('<?= $folder ?>/images/phone/dock/E5-screen-dock.png');
                                        "
                                    ></div>
                                    <div
                                        class="E5-phone-dock-layer layer-2"
                                        style="
                                            background-image: url('<?= $folder ?>/images/phone/dock/E5-screen-dock-front.png');
                                        "
                                    ></div>

                                    <div class="E5-phone-indicators">
                                        <div
                                            class="E5-phone-indicators-layer E5-phone-indicators-red aos-init"
                                            style="
                                                background-image: url('<?= $folder ?>/images/phone/indicators/E5-indicator-red.png');
                                            "
                                        ></div>
                                        <div
                                            class="E5-phone-indicators-layer E5-phone-indicators-green aos-init"
                                            style="
                                                background-image: url('<?= $folder ?>/images/phone/indicators/E5-indicator-green.png');
                                            "
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>

                    <div
                        class="E5-typography-container col-xs-12 col-sm-offset-6 col-sm-5"
                    >
                        <div
                            class="E5-screen-title"
                            data-aos="fade-left"
                            data-aos-duration="500"
                        >
                            ДИСПЛЕЙ
                            <br />
                            <span class="text-lead">2,8"</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="E5-dock section-dark"
            style="
                background-image: url('<?= $folder ?>/images/section-dock/E5-dock-bg.jpg');
            "
        >
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="E5-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                    >
                        <div class="E5-dock-title aos-init">
                            ДОК-СТАНЦИЯ
                        </div>

                        <div class="E5-dock-subtitle aos-init">
                            С ТОКОСЪЁМНЫМИ
                            <br />
                            ЭЛЕМЕНТАМИ
                        </div>

                        <figure class="E5-dock-sketch aos-init">
                            <div class="E5-dock-sketch-inner">
                                <img
                                    src="<?= $folder ?>/images/section-dock/E5-dock-media-phone-side.png"
                                    alt=""
                                    class="E5-dock-sketch-media"
                                />
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="E5-sos section-dark">
            <div
                class="E5-sos-bg"
                style="
                    background-image: url('<?= $folder ?>/images/section-sos/E5-sos-bg.jpg');
                "
            ></div>

            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="E5-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                    >
                        <div class="E5-sos-title aos-init">
                            КНОПКА
                            <b>SOS</b>
                        </div>

                        <div class="E5-sos-subtitle aos-init">
                            ПОМОЖЕТ ВАМ
                            <br />
                            В ЭКСТРЕННОЙ СИТУАЦИИ
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="E5-fm section-dark">
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="E5-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                    >
                        <div class="E5-fm-title aos-init">
                            КНОПКА
                            <br />
                            <b>FM-РАДИО</b>
                        </div>

                        <div class="E5-fm-subtitle aos-init">
                            ВКЛЮЧАЙТЕ И ВЫКЛЮЧАЙТЕ
                            <br />
                            РАДИО, НЕ ОТКРЫВАЯ ТЕЛЕФОН
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="E5-call section-dark">
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="E5-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                    >
                        <div class="E5-call-title aos-init">
                            КНОПКА
                            <br />
                            <b>
                                ПРИЁМА
                                <br class="E5-call-title-br" />
                                ВЫЗОВА
                            </b>
                        </div>

                        <div class="E5-call-subtitle aos-init">
                            ОТВЕЧАЙТЕ НА ЗВОНКИ,
                            <br />
                            НЕ ОТКРЫВАЯ ТЕЛЕФОН
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="E5-indicator section-dark">
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="E5-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                    >
                        <div class="E5-indicator-title aos-init">
                            АКТИВНАЯ
                            <br />
                            ИНДИКАЦИЯ
                        </div>

                        <div class="E5-indicator-subtitle aos-init">
                            ПОКАЖЕТ ИНФОРМАЦИЮ
                            <br />
                            О ЗАРЯДКЕ АККУМУЛЯТОРА
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="E5-material section-dark"
            style="
                background-image: url('<?= $folder ?>/images/section-material/E5-material-bg.jpg');
            "
        >
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="E5-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                    >
                        <div class="E5-material-title aos-init">
                            ПОКРЫТИЕ
                            <br />
                            SOFT TOUCH
                        </div>

                        <div class="E5-material-subtitle aos-init">
                            КОМФОРТ И ПРАКТИЧНОСТЬ
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section
        class="E5-connector section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-connector/E5-connector-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E5-media-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <figure class="E5-connector-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-connector/E5-connector-media-phone-back.png"
                            class="E5-connector-media"
                            width="938"
                            height="1398"
                            alt="Мобильный телефон Maxvi E5"
                        />

                        <div
                            class="E5-connector-figure-usb"
                            style="
                                background-image: url('<?= $folder ?>/images/section-connector/E5-connector-USB-side-glow.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div class="E5-typography-container col-xs-12 col-sm-4">
                    <div
                        class="E5-connector-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        РАЗЪЁМ
                        <br />
                        TYPE-C
                    </div>

                    <figure class="E5-connector-sketch">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-connector/E5-connector-media-phone-side.png"
                            class="E5-connector-sketch-media"
                            width="771"
                            height="270"
                            alt="Мобильный телефон Maxvi E5"
                        />

                        <div
                            class="E5-connector-sketch-usb"
                            style="
                                background-image: url('<?= $folder ?>/images/section-connector/E5-connector-USB-glow.png');
                            "
                        ></div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E5-case section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-case/E5-case-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E5-media-container col-xs-12 col-sm-6 col-md-7 col-sm-offset-5 col-md-offset-4"
                >
                    <figure class="E5-case-figure">
                        <div
                            class="E5-case-layer layer-1"
                            style="
                                background-image: url('<?= $folder ?>/images/section-case/E5-case-media-phone-back.png');
                            "
                        ></div>
                        <div
                            class="E5-case-layer layer-2"
                            data-aos="slide-right-and-out"
                            data-aos-anchor=".E5-case-figure"
                            style="
                                background-image: url('<?= $folder ?>/images/section-case/E5-case-media-phone-case.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div class="E5-typography-container col-xs-12 col-sm-8">
                    <div
                        class="E5-case-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        МЕТАЛЛИЧЕСКАЯ
                        <br />
                        РАМКА КОРПУСА
                    </div>

                    <div
                        class="E5-case-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ПРОЧНОСТЬ И ДОЛГОВЕЧНОСТЬ
                        <br />
                        ВАШЕГО ТЕЛЕФОНА
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="E5-slots">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E5-media-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <figure
                        class="E5-slots-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/E5-slots-phone-front.png"
                            class="E5-slots-media"
                            width="1171"
                            height="818"
                            alt="Мобильный телефон Maxvi E5"
                        />

                        <div class="E5-slots-parallax">
                            <div
                                data-depth="0.2"
                                class="E5-slots-parallax-layer"
                            >
                                <img
                                    loading="lazy"
                                    src="<?= $folder ?>/images/section-slots/E5-slots-SIM-to-left.svg"
                                    class="E5-slots-parallax-media SIM1"
                                    width="304"
                                    height="284"
                                    alt="SIM карта"
                                />
                            </div>

                            <div
                                data-depth="0.1"
                                class="E5-slots-parallax-layer"
                            >
                                <img
                                    loading="lazy"
                                    src="<?= $folder ?>/images/section-slots/E5-slots-SIM-to-right.svg"
                                    class="E5-slots-parallax-media SIM2"
                                    width="304"
                                    height="284"
                                    alt="SIM карта"
                                />
                            </div>

                            <div
                                data-depth="0.1"
                                class="E5-slots-parallax-layer"
                            >
                                <img
                                    loading="lazy"
                                    src="<?= $folder ?>/images/section-slots/E5-slots-SD.svg"
                                    class="E5-slots-parallax-media SD"
                                    width="224"
                                    height="254"
                                    alt="Карта памяти microSD"
                                />
                            </div>
                        </div>
                    </figure>
                </div>

                <div
                    class="E5-typography-container col-xs-12 col-sm-5 col-md-4"
                >
                    <div
                        class="E5-slots-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        2SIM
                    </div>

                    <div
                        class="E5-slots-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        +
                        <br />
                        КАРТА
                        <br />
                        ПАМЯТИ
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>