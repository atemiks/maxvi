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
<div class="E11ds-landing">
    <section
        class="E11ds-intro"
        style="
            background-image: url('<?= $folder ?>/images/section-intro/E11ds-intro-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E11ds-media-container col-xs-12">
                    <figure class="E11ds-intro-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/E11ds-intro-phone-front.png"
                            class="E11ds-intro-media"
                            width="572"
                            height="1428"
                            alt="Мобильный телефон Maxvi E11ds"
                        />
                    </figure>
                </div>

                <div
                    class="E11ds-typography-container col-xs-12 col-sm-6"
                >
                    <img
                        class="E11ds-intro-logo"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        width="500"
                        height="85"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        aria-hidden="true"
                        alt="Логотип Maxvi"
                    />

                    <div
                        class="E11ds-intro-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        E11ds
                    </div>
                </div>

                <div
                    class="E11ds-typography-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <div
                        class="E11ds-intro-description"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        СТИЛЬНЫЙ
                        <br />
                        И ПРАКТИЧНЫЙ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E11ds-screen"
        style="
            background-image: url('<?= $folder ?>/images/section-screen/E11ds-screen-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E11ds-media-container col-xs-12">
                    <figure
                        class="E11ds-screen-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/E11ds-screen-phone-front.png"
                            class="E11ds-screen-media"
                            width="1865"
                            height="526"
                            alt="Мобильный телефон Maxvi E11ds"
                        />
                    </figure>
                </div>

                <div
                    class="E11ds-typography-container col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3"
                >
                    <div class="E11ds-screen-title">ДИСПЛЕЙ 2.8”</div>

                    <div class="E11ds-screen-subtitle">
                        Просматривайте фото
                        <br />
                        и видео с комфортом
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="E11ds-presentation section-dark">
        <div class="E11ds-presentation-timeline">
            <div class="E11ds-presentation-bg">
                <div
                    class="E11ds-presentation-bg-layer"
                    data-aos="fade-right"
                    data-aos-duration="800"
                    data-aos-anchor=".E11ds-presentation-bg"
                    data-aos-anchor-placement="top-center"
                ></div>
                <div
                    class="E11ds-presentation-bg-layer"
                    data-aos="fade-left"
                    data-aos-duration="800"
                    data-aos-anchor=".E11ds-presentation-bg"
                    data-aos-anchor-placement="top-center"
                ></div>
            </div>

            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="E11ds-media-container col-xs-12 col-sm-5"
                    >
                        <figure class="E11ds-dock-figure">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-dock/E11ds-dock-phone-side.png"
                                class="E11ds-dock-media"
                                width="892"
                                height="1428"
                                alt="Мобильный телефон Maxvi E11ds"
                            />
                        </figure>

                        <figure class="E11ds-connector-figure">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-connector/E11ds-connector-phone-back.png"
                                class="E11ds-connector-media"
                                width="894"
                                height="1400"
                                alt="Мобильный телефон Maxvi E11ds"
                            />
                        </figure>
                    </div>

                    <div
                        class="E11ds-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                    >
                        <div class="E11ds-dock-title">
                            <div
                                data-aos="fade-left"
                                data-aos-duration="500"
                            >
                                ДОК-СТАНЦИЯ
                            </div>
                        </div>

                        <div class="E11ds-dock-subtitle">
                            <div
                                data-aos="fade-left"
                                data-aos-duration="500"
                            >
                                УДОБНО СТАВИТЬ
                                <br />
                                НА ЗАРЯДКУ
                            </div>
                        </div>

                        <div class="E11ds-connector-title">
                            РАЗЪЁМ
                            <br />
                            TYPE-C
                        </div>

                        <div class="E11ds-connector-sketch">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-connector/E11ds-connector-phone-bottom.png"
                                class="E11ds-connector-sketch-media"
                                width="684"
                                alt="Мобильный телефон Maxvi E11ds"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E11ds-design"
        style="
            background-image: url('<?= $folder ?>/images/section-design/E11ds-design-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E11ds-media-container col-xs-12">
                    <figure class="E11ds-design-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/E11ds-design-phone-side.png"
                            class="E11ds-design-media"
                            width="1139"
                            height="894"
                            alt="Мобильный телефон Maxvi E11ds"
                        />
                    </figure>
                </div>

                <div
                    class="E11ds-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <div
                        class="E11ds-design-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ПРОЧНЫЙ КОРПУС
                        <br />
                        С МЕТАЛЛИЧЕСКОЙ
                        <br />
                        РАМКОЙ
                    </div>
                </div>

                <div
                    class="E11ds-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="E11ds-design-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ПОКРЫТИЕ
                        <br />
                        SOFT TOUCH
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="E11ds-battery section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E11ds-media-container col-xs-12">
                    <figure
                        class="E11ds-battery-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/E11ds-battery-phone-front.png"
                            class="E11ds-battery-media"
                            width="1585"
                            height="1402"
                            alt="Мобильный телефон Maxvi E11ds"
                        />
                    </figure>
                </div>

                <div
                    class="E11ds-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="E11ds-battery-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        АККУМУЛЯТОР
                        <br />
                        <span class="text-lead">1500&nbsp;mAh</span>
                    </div>
                </div>

                <div
                    class="E11ds-typography-container col-xs-12 col-sm-4 col-sm-offset-8"
                >
                    <div class="E11ds-battery-sketch">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/E11ds-battery-icon-battery.svg"
                            class="E11ds-battery-sketch-media"
                            width="362"
                            height="691"
                            alt="Аккумулятор мобильного телефона Maxvi E11ds"
                        />

                        <div class="E11ds-battery-sketch-fill"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E11ds-charging"
        style="
            background-image: url('<?= $folder ?>/images/section-charging/E11ds-charging-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E11ds-typography-container col-xs-12 col-sm-8"
                >
                    <div
                        class="E11ds-charging-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <span class="text-lead">ИНДИКАЦИЯ</span>
                        <br />
                        ВО ВРЕМЯ ЗАРЯДКИ
                    </div>
                </div>

                <div
                    class="E11ds-media-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <figure
                        class="E11ds-charging-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-charging/E11ds-charging-phone-side.png"
                            class="E11ds-charging-media"
                            width="937px"
                            height="1409"
                            alt="Мобильный телефон Maxvi E11ds"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>