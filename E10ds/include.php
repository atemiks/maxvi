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
<div
    class="E10ds-landing"
    style="background-image: url('<?= $folder ?>/images/E10ds-bg.jpg')"
>
    <section class="E10ds-intro">
        <img
            class="E10ds-intro-logo"
            src="<?= $folder ?>/images/logo-maxvi.svg"
            width="68"
            height=""
            data-aos="fade-right"
            data-aos-duration="500"
            data-aos-delay="300"
            data-aos-anchor=".E10ds-intro-block"
            aria-hidden="true"
            alt="Логотип Maxvi"
        />

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E10ds-media-container col-xs-12">
                    <figure class="E10ds-intro-figure">
                        <div
                            class="E10ds-intro-layer layer-1"
                            data-aos="fade-right"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-intro/E10ds-intro-phone-front-left.png"
                                class="E10ds-intro-media"
                                width="480"
                                height="1588"
                                alt="Мобильный телефон Maxvi E10ds"
                            />
                        </div>

                        <div
                            class="E10ds-intro-layer layer-2"
                            data-aos="fade-left"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-intro/E10ds-intro-phone-front-right.png"
                                class="E10ds-intro-media"
                                width="702"
                                height="1018"
                                alt="Мобильный телефон Maxvi E10ds"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="E10ds-typography-container col-xs-10 col-sm-6 col-sm-offset-3"
                >
                    <div
                        class="E10ds-intro-block"
                        data-aos="fade-right"
                        data-aos-duration="800"
                        data-aos-delay="300"
                    >
                        <div class="E10ds-intro-model">E10ds</div>

                        <div class="E10ds-intro-description">
                            ЯРКИЙ, СТИЛЬНЫЙ,
                            <br />
                            ПРАКТИЧНЫЙ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="E10ds-screen">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E10ds-media-container col-xs-12">
                    <figure class="E10ds-screen-figure">
                        <div class="E10ds-screen-layer layer-1">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-screen/E10ds-screen-phone-left-screen-off.png"
                                class="E10ds-screen-media"
                                width="402"
                                height="1250"
                                alt="Мобильный телефон Maxvi E10ds"
                            />

                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-screen/E10ds-screen-phone-left.png"
                                class="E10ds-screen-media"
                                width="402"
                                height="1250"
                                alt="Мобильный телефон Maxvi E10ds"
                            />
                        </div>

                        <div class="E10ds-screen-layer layer-2">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-screen/E10ds-screen-phone-right-screen-off.png"
                                class="E10ds-screen-media"
                                width="392"
                                height="1278"
                                alt="Мобильный телефон Maxvi E10ds"
                            />

                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-screen/E10ds-screen-phone-right.png"
                                class="E10ds-screen-media"
                                width="392"
                                height="1278"
                                alt="Мобильный телефон Maxvi E10ds"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="E10ds-typography-container col-xs-12 col-sm-6 col-sm-offset-3"
                >
                    <div
                        class="E10ds-screen-title"
                        data-aos="fade-in"
                        data-aos-duration="500"
                    >
                        <span class="text-mark">2 ДИСПЛЕЯ</span>
                        <br />
                        2.8" + 1.77"
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="E10ds-battery">
        <div class="E10ds-battery-bg">
            <video
                class="E10ds-battery-video"
                poster="<?= $folder ?>/images/section-battery/E10ds-battery-video-poster.jpg"
                autoplay
                muted
                playsinline
                loop
            >
                <source
                    src="<?= $folder ?>/images/section-battery/E10ds-battery-video.mp4"
                    type="video/mp4"
                />
            </video>
        </div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E10ds-media-container col-xs-12 col-sm-10 col-md-9 col-sm-offset-2 col-md-offset-3"
                >
                    <figure
                        class="E10ds-battery-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/E10ds-battery-phone-front.png"
                            class="E10ds-battery-media"
                            width="370"
                            height="1522"
                            alt="Мобильный телефон Maxvi E10ds"
                        />
                    </figure>
                </div>

                <div class="E10ds-typography-container col-xs-6">
                    <div
                        class="E10ds-battery-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        МОЩНАЯ
                        <br />
                        БАТАРЕЯ
                    </div>

                    <div
                        class="E10ds-battery-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        2000&nbsp;mAh
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E10ds-dock section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-dock/E10ds-dock-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E10ds-media-container col-xs-7 col-sm-6">
                    <figure class="E10ds-dock-figure">
                        <div
                            class="E10ds-dock-layer layer-dock"
                            style="
                                background-image: url('<?= $folder ?>/images/section-dock/E10ds-dock-layer-dock-part-01.png');
                            "
                        ></div>
                        <div
                            class="E10ds-dock-layer layer-phone"
                            style="
                                background-image: url('<?= $folder ?>/images/section-dock/E10ds-dock-phone-front.png');
                            "
                        ></div>
                        <div
                            class="E10ds-dock-layer layer-dock"
                            style="
                                background-image: url('<?= $folder ?>/images/section-dock/E10ds-dock-layer-dock-part-02.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="E10ds-typography-container col-xs-8 col-sm-7 col-xs-offset-4 col-sm-offset-5"
                >
                    <div class="E10ds-dock-title">ДОК-СТАНЦИЯ</div>

                    <div class="E10ds-dock-subtitle">
                        С ТОКОСЪЁМНЫМИ
                        <br />
                        ЭЛЕМЕНТАМИ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="E10ds-connector">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E10ds-media-container col-xs-12">
                    <figure class="E10ds-connector-figure">
                        <div class="E10ds-connector-layer layer-1">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-connector/E10ds-connector-phone-front.png"
                                class="E10ds-connector-media"
                                width="556"
                                height="1022"
                                alt="Мобильный телефон Maxvi E10ds"
                            />

                            <div
                                class="E10ds-connector-cable"
                                data-aos="fade-up"
                                data-aos-duration="800"
                                data-aos-delay="800"
                                data-aos-anchor=".E10ds-connector"
                                style="
                                    background-image: url('<?= $folder ?>//images/section-connector/E10ds-connector-cable-01.png');
                                "
                            ></div>
                        </div>

                        <div class="E10ds-connector-layer layer-2">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-connector/E10ds-connector-phone-back.png"
                                class="E10ds-connector-media"
                                width="890"
                                height="1228"
                                alt="Мобильный телефон Maxvi E10ds"
                            />

                            <div
                                class="E10ds-connector-cable"
                                data-aos="fade-up"
                                data-aos-duration="800"
                                data-aos-delay="800"
                                data-aos-anchor=".E10ds-connector"
                                style="
                                    background-image: url('<?= $folder ?>//images/section-connector/E10ds-connector-cable-02.png');
                                "
                            ></div>
                        </div>
                    </figure>
                </div>

                <div
                    class="E10ds-typography-container col-xs-12 col-sm-4 col-sm-offset-2 col-md-offset-3"
                >
                    <div
                        class="E10ds-connector-title"
                        data-aos="fade-in"
                        data-aos-duration="500"
                    >
                        РАЗЪЁМ
                        <br />
                        <span class="text-mark">TYPE-C</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E10ds-slots"
        style="
            background-image: url('<?= $folder ?>/images/section-slots/E10ds-slots-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E10ds-typography-container col-xs-10 col-sm-7"
                >
                    <div
                        class="E10ds-slots-block"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <div class="E10ds-slots-title">2 SIM</div>

                        <div class="E10ds-slots-subtitle">
                            +
                            <br />
                            КАРТА
                            <br />
                            ПАМЯТИ
                        </div>
                    </div>
                </div>

                <div
                    class="E10ds-media-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <figure
                        class="E10ds-slots-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/E10ds-slots-phone-front.png"
                            class="E10ds-slots-media"
                            width="574"
                            height=""
                            alt="Мобильный телефон Maxvi E10ds"
                        />

                        <div class="E10ds-slots-cards">
                            <div
                                class="E10ds-slots-cards-layer E10ds-slots-cards-layer-SIM"
                            >
                                <img
                                    loading="lazy"
                                    src="<?= $folder ?>/images/section-slots/E10ds-icon-sim.svg"
                                    class="E10ds-slots-cards-layer-media"
                                    alt="SIM-карта"
                                />
                            </div>

                            <div
                                class="E10ds-slots-cards-layer E10ds-slots-cards-layer-SIM"
                            >
                                <img
                                    loading="lazy"
                                    src="<?= $folder ?>/images/section-slots/E10ds-icon-sim-alt.svg"
                                    class="E10ds-slots-cards-layer-media"
                                    alt="SIM-карта"
                                />
                            </div>

                            <div
                                class="E10ds-slots-cards-layer E10ds-slots-cards-layer-SD"
                            >
                                <img
                                    loading="lazy"
                                    src="<?= $folder ?>/images/section-slots/E10ds-icon-sd.svg"
                                    class="E10ds-slots-cards-layer-media"
                                    alt="SD карта"
                                />
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>