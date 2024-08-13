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
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/parallax.min.js');

// Анимация
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap-3.12.2.min.js');
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="P99-landing">
    <section
        class="P99-intro"
        style="
            background-image: url('<?= $folder ?>/images/section-intro/P99-intro-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P99-media-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <figure
                        class="P99-intro-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/P99-intro-phone-front.png"
                            class="P99-intro-media"
                            width="893"
                            height="1285"
                            alt="Мобильный телефон Maxvi P99"
                        />
                    </figure>
                </div>

                <div
                    class="P99-typography-container col-xs-10 col-sm-5"
                >
                    <img
                        class="P99-intro-logo"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        width="500"
                        height="86"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        aria-hidden="true"
                        alt="Логотип Maxvi"
                    />

                    <div
                        class="P99-intro-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        P99
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P99-screen section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-screen/P99-screen-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P99-media-container col-xs-12 col-sm-11 col-sm-offset-1"
                >
                    <figure class="P99-screen-figure" data-aos="flash">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/P99-screen-phone-front.png"
                            class="P99-screen-media"
                            width="744"
                            height="1330"
                            alt="Мобильный телефон Maxvi P99"
                        />

                        <div class="P99-screen-flash"></div>
                    </figure>
                </div>

                <div
                    class="P99-typography-container col-xs-12 col-sm-5"
                >
                    <div
                        class="P99-screen-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        БОЛЬШОЙ
                        <br />
                        ЭКРАН
                        <b class="text-lead">2.0”</b>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="P99-battery">
        <div
            class="P99-battery-bg"
            data-aos="fade-in"
            data-aos-delay="800"
            data-aos-anchor=".P99-battery"
            style="
                background-image: url('<?= $folder ?>/images/section-battery/P99-battery-bg.jpg');
            "
        ></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P99-media-container col-xs-12 col-sm-10 col-lg-9 col-sm-offset-2 col-lg-offset-3"
                >
                    <figure class="P99-battery-figure">
                        <div
                            class="P99-battery-layer"
                            data-aos="fade-left"
                            data-aos-duration="800"
                            data-aos-anchor=".P99-battery"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-battery/P99-battery-phone-side.png"
                                class="P99-battery-media"
                                width="1433"
                                height="578"
                                alt="Мобильный телефон Maxvi P99"
                            />

                            <div class="P99-battery-usb">
                                <div
                                    class="P99-battery-usb-layer"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-battery/P99-battery-usb-flash.png');
                                    "
                                ></div>
                            </div>
                        </div>
                    </figure>
                </div>

                <div
                    class="P99-typography-container P99-typography-container-left col-xs-12 col-sm-6"
                >
                    <div
                        class="P99-battery-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        data-aos-anchor=".P99-battery"
                    >
                        КОМПАКТНЫЙ
                        <br />
                        И МОЩНЫЙ
                    </div>

                    <div class="P99-battery-icons">
                        <img
                            aria-hidden="true"
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/P99-battery-icon-powerbank.svg"
                            class="P99-battery-icon P99-battery-icon-powerbank"
                            width="300"
                            height="230"
                            alt="Powebank"
                        />

                        <img
                            aria-hidden="true"
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/P99-battery-icon-battery.svg"
                            class="P99-battery-icon P99-battery-icon-battery"
                            width="300"
                            height="154"
                            alt="Батарея"
                        />
                    </div>
                </div>

                <div
                    class="P99-typography-container P99-typography-container-right col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <div
                        class="P99-battery-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".P99-battery"
                    >
                        POWER BANK
                    </div>

                    <div
                        class="P99-battery-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".P99-battery"
                    >
                        БАТАРЕЯ
                        <b class="text-lead">2500 mAh</b>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="P99-connector">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P99-typography-container col-xs-12 col-sm-7"
                >
                    <div class="P99-connector-title">
                        СОВРЕМЕННЫЙ
                        <br />
                        И АКТУАЛЬНЫЙ
                        <br />
                        РАЗЪЁМ
                    </div>

                    <div class="P99-connector-subtitle">TYPE-C</div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="P99-slots"
        style="
            background-image: url('<?= $folder ?>/images/section-slots/P99-slots-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="P99-media-container col-xs-10 col-sm-8">
                    <figure class="P99-slots-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/P99-slots-phone-front.png"
                            class="P99-slots-media"
                            width="786"
                            height="1663"
                            alt="Мобильный телефон Maxvi P99"
                        />

                        <div
                            class="P99-slots-cards"
                            data-aos="fade-right"
                            data-aos-duration="800"
                            data-aos-anchor=".P99-slots-title"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-slots/P99-slots-icon-sim.svg"
                                class="P99-slots-cards-SIM"
                                width="138"
                                height="224"
                                alt="SIM-карта"
                            />

                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-slots/P99-slots-icon-sim-alt.svg"
                                class="P99-slots-cards-SIM"
                                width="138"
                                height="224"
                                alt="SIM-карта"
                            />

                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-slots/P99-slots-icon-sd.svg"
                                class="P99-slots-cards-SD"
                                width="176"
                                height="200"
                                alt="SD карта"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="P99-typography-container col-xs-10 col-sm-5 col-sm-offset-7"
                >
                    <div
                        class="P99-slots-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        2 SIM
                    </div>

                    <div
                        class="P99-slots-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".P99-slots-title"
                    >
                        <span class="text-mark">+</span>
                        <br />
                        КАРТА
                        <br />
                        ПАМЯТИ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="P99-camera" data-aos="midday">
        <div
            class="P99-camera-bg"
            style="
                background-image: url('<?= $folder ?>/images/section-camera/P99-camera-bg.jpg');
            "
        ></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="P99-media-container col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2"
                >
                    <figure
                        class="P99-camera-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                        data-aos-anchor=".P99-camera"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-camera/P99-camera-phone-back.png"
                            class="P99-camera-media"
                            width="744"
                            height="1000"
                            alt="Мобильный телефон Maxvi P99"
                        />
                    </figure>
                </div>

                <div
                    class="P99-typography-container col-xs-12 col-sm-5"
                >
                    <div
                        class="P99-camera-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        КАМЕРА
                    </div>

                    <div
                        class="P99-camera-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        СНИМАЙТЕ
                        <br />
                        ЯРКИЕ МОМЕНТЫ
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>