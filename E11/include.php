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
<div class="E11-landing">
    <section class="E11-intro">
        <div class="E11-intro-shadow">
            <div class="E11-intro-bg"></div>
        </div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E11-media-container col-xs-12 col-sm-6 col-md-6 col-sm-offset-6 col-md-offset-5"
                >
                    <figure class="E11-intro-figure">
                        <div class="E11-intro-layer layer-1">
                            <div
                                data-parallax
                                class="E11-intro-parallax"
                            >
                                <div
                                    class="E11-intro-layer"
                                    data-depth="0.3"
                                >
                                    <div
                                        class="E11-intro-aos"
                                        data-aos="fade-left"
                                        data-aos-duration="800"
                                        data-aos-anchor=".E11-intro-figure"
                                    >
                                        <img
                                            loading="lazy"
                                            src="<?= $folder ?>/images/section-intro/E11-intro-phone-front.png"
                                            class="E11-intro-media layer-1"
                                            width="379"
                                            height="1220"
                                            alt="Мобильный телефон Maxvi E11"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="E11-intro-layer layer-2">
                            <div
                                data-parallax
                                class="E11-intro-parallax"
                            >
                                <div
                                    class="E11-intro-layer"
                                    data-depth="0.2"
                                >
                                    <div
                                        class="E11-intro-aos"
                                        data-aos="fade-left"
                                        data-aos-duration="800"
                                        data-aos-anchor=".E11-intro-figure"
                                    >
                                        <img
                                            loading="lazy"
                                            src="<?= $folder ?>/images/section-intro/E11-intro-phone-back.png"
                                            class="E11-intro-media layer-2"
                                            width="377"
                                            height="1182"
                                            alt="Мобильный телефон Maxvi E11"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>

                <div
                    class="E11-typography-container col-xs-12 col-sm-6"
                >
                    <img
                        class="E11-intro-logo"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        width="75"
                        height="448"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        aria-hidden="true"
                        alt="Логотип Maxvi"
                    />

                    <div
                        class="E11-intro-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        E11
                    </div>

                    <div
                        class="E11-intro-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        СТИЛЬНЫЙ
                        <br />
                        И НАДЁЖНЫЙ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E11-screen section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-screen/E11-screen-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E11-typography-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <div
                        class="E11-screen-title"
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

    <section class="E11-case">
        <div class="E11-case-shadow">
            <div
                class="E11-case-bg"
                style="
                    background-image: url('<?= $folder ?>/images/section-case/E11-case-bg.jpg');
                "
            ></div>
        </div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E11-media-container col-xs-12 col-sm-5 col-sm-offset-7"
                >
                    <figure class="E11-case-figure">
                        <div
                            class="E11-case-figure-aos"
                            data-aos="fade-left"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-case/E11-case-phone-front.png"
                                class="E11-case-media"
                                width="490"
                                height="1219"
                                alt="Мобильный телефон Maxvi E11"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="E11-typography-container col-xs-10 col-sm-10 col-xs-offset-2 col-sm-offset-0"
                >
                    <div
                        class="E11-case-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ПРОЧНЫЙ
                        <br />
                        И ДОЛГОВЕЧНЫЙ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E11-material"
        style="
            background-image: url('<?= $folder ?>/images/section-material/E11-material-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E11-typography-container col-xs-12 col-sm-7"
                >
                    <div
                        class="E11-material-block E11-material-block--left"
                    >
                        <div class="E11-material-title">
                            ПОКРЫТИЕ
                            <br />
                            SOFT TOUCH

                            <div class="E11-material-line"></div>
                        </div>

                        <div class="E11-material-subtitle">
                            МЯГКОСТЬ
                            <br />
                            ПРИКОСНОВЕНИЯ
                            <br />
                            И ПРАКТИЧНОСТЬ
                        </div>
                    </div>
                </div>

                <div
                    class="E11-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <div
                        class="E11-material-block E11-material-block--right"
                    >
                        <div class="E11-material-title">
                            ПЕРЕДНЯЯ ПАНЕЛЬ
                            <br />
                            ИЗ МЕТАЛЛА

                            <div class="E11-material-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E11-camera"
        style="
            background-image: url('<?= $folder ?>/images/section-camera/E11-camera-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E11-media-container col-xs-12 col-sm-4 col-sm-offset-5"
                >
                    <figure class="E11-camera-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-camera/E11-camera-phone-front.png"
                            class="E11-camera-media"
                            width="526"
                            height="1865"
                            alt="Мобильный телефон Maxvi E11"
                        />

                        <div class="E11-camera-screen">
                            <video
                                class="E11-camera-video"
                                poster="<?= $folder ?>/images/section-camera/E11-camera-video-poster.jpg"
                                autoplay
                                muted
                                playsinline
                                loop
                            >
                                <source
                                    src="<?= $folder ?>/images/section-camera/E11-camera-video.mp4"
                                    type="video/mp4"
                                />
                            </video>
                        </div>
                    </figure>
                </div>

                <div
                    class="E11-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="E11-camera-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        КАМЕРА
                    </div>

                    <div
                        class="E11-camera-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ВСЕГДА С СОБОЙ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="E11-connector">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E11-media-container col-xs-12">
                    <figure class="E11-connector-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-connector/E11-connector-phone-side.png"
                            class="E11-connector-media"
                            width="1177"
                            height="471"
                            alt="Мобильный телефон Maxvi E11"
                        />

                        <div
                            class="E11-connector-usb"
                            style="
                                background-image: url('<?= $folder ?>/images/section-connector/E11-connector-usb.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="E11-typography-container col-xs-12 col-sm-4"
                >
                    <div
                        class="E11-connector-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        РАЗЪЁМ
                        <br />
                        <span class="text-lead">TYPE-C</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="E11-slots section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E11-media-container col-xs-10 col-sm-6 col-xs-offset-2 col-sm-offset-5 col-lg-offset-4"
                >
                    <figure class="E11-slots-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/E11-slots-phone-front.png"
                            class="E11-slots-media"
                            width="703"
                            height="1328"
                            alt="Мобильный телефон Maxvi E11"
                        />

                        <div
                            class="E11-slots-layers"
                            data-aos="fade-left"
                            data-aos-duration="800"
                        >
                            <img
                                aria-hidden="true"
                                class="E11-slots-SIM"
                                src="<?= $folder ?>/images/section-slots/E11-slots-SIM.svg"
                                width="260"
                                height="159"
                                alt="SIM карта"
                            />
                            <img
                                aria-hidden="true"
                                class="E11-slots-SIM"
                                src="<?= $folder ?>/images/section-slots/E11-slots-SIM.svg"
                                width="260"
                                height="159"
                                alt="SIM карта"
                            />

                            <img
                                aria-hidden="true"
                                class="E11-slots-SD"
                                src="<?= $folder ?>/images/section-slots/E11-slots-SD.svg"
                                width="281"
                                height="318"
                                alt="Карта памяти microSD"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="E11-typography-container col-xs-12 col-sm-4"
                >
                    <div
                        class="E11-slots-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        КАРТА
                        <br />
                        ПАМЯТИ
                        <br />
                        <span class="text-light">+</span>
                    </div>

                    <div
                        class="E11-slots-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        2SIM
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
