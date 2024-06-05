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
<div class="X10i-landing">
    <section class="X10i-design section-dark">
        <div
            class="X10i-design-bg"
            data-aos="fade-out"
            data-aos-duration="800"
        ></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="X10i-typography-container col-xs-12 col-sm-5"
                >
                    <img
                        class="X10i-design-logo"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        width="75"
                        height="448"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        aria-hidden="true"
                        alt="Логотип Maxvi"
                    />

                    <div
                        class="X10i-design-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        X10i
                    </div>

                    <div
                        class="X10i-design-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        СТИЛЬНЫЙ
                        <br />
                        БЕСТСЕЛЛЕР
                    </div>
                </div>

                <div class="X10i-media-container col-xs-12 col-sm-7">
                    <figure
                        class="X10i-design-figure"
                        data-aos="fade-in"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/X10i-design-phone-front.png"
                            class="X10i-design-media layer-1"
                            width="391"
                            height="1071"
                            alt="Мобильный телефон Maxvi X10i"
                        />

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/X10i-design-phone-side.png"
                            class="X10i-design-media layer-2"
                            width="97"
                            height="1041px"
                            alt="Мобильный телефон Maxvi X10i"
                        />

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/X10i-design-phone-back.png"
                            class="X10i-design-media layer-3"
                            width="296"
                            height="1084"
                            alt="Мобильный телефон Maxvi X10i"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="X10i-screen section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-screen/X10i-screen-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="X10i-media-container col-xs-12">
                    <figure class="X10i-screen-figure">
                        <div
                            class="X10i-screen-phone"
                            style="
                                background-image: url('<?= $folder ?>/images/section-screen/X10i-screen-phone-front.png');
                            "
                        ></div>

                        <div class="X10i-screen-display">
                            <div
                                class="X10i-screen-media"
                                style="
                                    background-image: url('<?= $folder ?>/images/section-screen/X10i-screen-media.jpg');
                                "
                            ></div>
                        </div>

                        <div class="X10i-screen-layers">
                            <div
                                class="X10i-screen-layer"
                                style="
                                    background-image: url('<?= $folder ?>/images/section-screen/X10i-screen-layer-01.png');
                                "
                            ></div>
                            <div
                                class="X10i-screen-layer"
                                style="
                                    background-image: url('<?= $folder ?>/images/section-screen/X10i-screen-layer-02.png');
                                "
                            ></div>
                        </div>
                    </figure>
                </div>

                <div
                    class="X10i-typography-container col-xs-12 col-sm-5"
                >
                    <div
                        class="X10i-screen-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ДИСПЛЕЙ
                        <br />
                        <span class="text-lead">2,8"</span>
                    </div>

                    <div
                        class="X10i-screen-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ПРОСМАТРИВАЙТЕ
                        <br />
                        ИЗОБРАЖЕНИЯ И ВИДЕО
                        <br />
                        С КОМФОРТОМ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="X10i-case section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-case/X10i-case-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="X10i-typography-container col-xs-12 col-sm-5"
                >
                    <div class="X10i-case-title">
                        ПРАКТИЧНОСТЬ
                        <br />
                        И ДОЛГОВЕЧНОСТЬ
                    </div>
                </div>

                <div
                    class="X10i-typography-container col-xs-12 col-sm-5 col-sm-offset-2"
                >
                    <div class="X10i-case-block">
                        <div class="X10i-case-block-title">
                            ЗАЩИТНОЕ СТЕКЛО
                            <br />
                            УВЕЛИЧЕННОЙ
                            <br />
                            ТОЛЩИНЫ
                        </div>

                        <div class="X10i-case-block-title">
                            МЕТАЛЛИЧЕСКИЙ
                            <br />
                            КОРПУС
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="X10i-battery section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="X10i-media-container col-xs-12">
                    <figure class="X10i-battery-figure">
                        <div
                            class="X10i-battery-figure-oas"
                            data-aos="fade-right"
                            data-aos-duration="800"
                        >
                            <div
                                class="X10i-battery-figure-shadow"
                            ></div>

                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-battery/X10i-battery-phone-side.png"
                                class="X10i-battery-media"
                                width="1510"
                                height="582"
                                alt="Мобильный телефон Maxvi X10i"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="X10i-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="X10i-battery-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        БАТАРЕЯ
                        <br />
                        <span class="text-lead">1600</span>
                        <span class="text-small">mAh</span>
                    </div>
                </div>

                <div
                    class="X10i-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="X10i-battery-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ЗАРЯДА ХВАТИТ
                        <br />
                        НАДОЛГО
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="X10i-connector section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="X10i-typography-container col-xs-12 col-sm-4"
                >
                    <div
                        class="X10i-connector-title"
                        data-aos="fade-in"
                        data-aos-duration="500"
                        data-aos-anchor-placement="top-bottom"
                    >
                        РАЗЪЁМ
                        <br />
                        <span class="text-lead">TYPE-C</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
