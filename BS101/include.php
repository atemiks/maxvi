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
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap-3.12.2.min.js');
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="BS101-landing">
    <section
        class="BS101-intro"
        style="
            background-image: url('<?= $folder ?>/images/section-intro/BS101-intro-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="BS101-media-container col-xs-12 col-sm-11 col-sm-offset-1"
                >
                    <figure
                        class="BS101-intro-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/BS101-intro-scales-front.png"
                            class="BS101-intro-media"
                            width="1159"
                            height="750"
                            alt="Умные весы Maxvi BS101"
                        />

                        <div
                            class="BS101-intro-media-display"
                            style="
                                background-image: url('<?= $folder ?>/images/section-intro/BS101-intro-scales-display.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="BS101-typography-container col-xs-8 col-sm-6 col-md-5 col-xs-offset-4 col-sm-offset-6 col-md-offset-7"
                >
                    <img
                        class="BS101-intro-logo"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        width="94"
                        height="547"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        aria-hidden="true"
                        alt="Логотип Maxvi"
                    />

                    <div
                        class="BS101-intro-model"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        BS101
                    </div>

                    <div
                        class="BS101-intro-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        УМНЫЕ ВЕСЫ
                    </div>

                    <div
                        class="BS101-intro-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        Надёжный помощник
                        <br />
                        на пути к красоте
                        <br />
                        и здоровью.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="BS101-wireless">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="BS101-media-container col-xs-12 col-sm-4">
                    <figure
                        class="BS101-wireless-phone"
                        data-aos="fade-right"
                        data-aos-duration="800"
                        data-aos-anchor=".BS101-wireless"
                    >
                        <div class="BS101-wireless-phone-slide">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-wireless/slides/BS101-wireless-slide-05.png"
                                alt=""
                            />
                        </div>
                        <div class="BS101-wireless-phone-slide">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-wireless/slides/BS101-wireless-slide-04.png"
                                alt=""
                            />
                        </div>
                        <div class="BS101-wireless-phone-slide">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-wireless/slides/BS101-wireless-slide-03.png"
                                alt=""
                            />
                        </div>
                        <div class="BS101-wireless-phone-slide">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-wireless/slides/BS101-wireless-slide-02.png"
                                alt=""
                            />
                        </div>
                        <div class="BS101-wireless-phone-slide">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-wireless/slides/BS101-wireless-slide-01.png"
                                alt=""
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="BS101-media-container col-xs-12 col-sm-4 col-sm-offset-8"
                >
                    <figure
                        class="BS101-wireless-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                        data-aos-anchor=".BS101-wireless"
                    >
                        <img
                            loading="lazy"
                            class="BS101-wireless-media"
                            src="<?= $folder ?>/images/section-wireless/BS101-wireless-scales-side.png"
                            width="595"
                            height="1188"
                            alt="Умные весы Maxvi BS101"
                        />
                    </figure>
                </div>

                <div
                    class="BS101-typography-container col-xs-12 col-sm-6 col-sm-offset-3"
                >
                    <div
                        class="BS101-wireless-title"
                        data-aos="fade-up"
                        data-aos-duration="500"
                        data-aos-delay="500"
                        data-aos-anchor=".BS101-wireless"
                    >
                        <span
                            class="BS101-wireless-title-icon"
                            style="
                                background-image: url('<?= $folder ?>/images/section-wireless/BS101-wireless-icon-bluetooth.svg');
                            "
                        ></span>

                        ПОДДЕРЖКА
                        <br />
                        <b>IOS и Android</b>
                    </div>

                    <div
                        class="BS101-wireless-subtitle"
                        data-aos="fade-up"
                        data-aos-duration="500"
                        data-aos-delay="600"
                        data-aos-anchor=".BS101-wireless"
                    >
                        Отслеживайте
                        <br />
                        прогресс в своём
                        <br />
                        смартфоне
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="BS101-biometric"
        style="
            background-image: url('<?= $folder ?>/images/section-biometric/BS101-biometric-bg.jpg');
        "
    >
        <figure class="BS101-biometric-figure">
            <div class="BS101-biometric-slider">
                <div class="BS101-biometric-slide">
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-01.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-02.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-03.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-04.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-05.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-06.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-07.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                </div>
                <div class="BS101-biometric-slide">
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-01.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-02.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-03.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-04.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-05.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-06.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-07.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                </div>
            </div>

            <div class="BS101-biometric-slider">
                <div class="BS101-biometric-slide">
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-08.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-09.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-10.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-11.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-12.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-13.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-14.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-15.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                </div>
                <div class="BS101-biometric-slide">
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-08.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-09.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-10.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-11.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-12.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-13.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-14.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/section-biometric/icons/BS101-biometric-icon-15.svg"
                        alt=""
                        class="BS101-biometric-slide-media"
                    />
                </div>
            </div>
        </figure>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="BS101-typography-container col-xs-12 col-sm-10"
                >
                    <div
                        class="BS101-biometric-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        15 БИОМЕТРИЧЕСКИХ
                        <br />
                        ПОКАЗАТЕЛЕЙ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="BS101-screen section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-screen/BS101-screen-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="BS101-media-container col-xs-12 col-sm-9 col-sm-offset-3"
                >
                    <figure class="BS101-screen-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/BS101-screen-scales-front.png"
                            class="BS101-screen-media"
                            width="1800"
                            height="1185"
                            alt="Умные весы Maxvi BS101"
                        />
                    </figure>
                </div>

                <div
                    class="BS101-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <div
                        class="BS101-screen-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        LCD-ДИСПЛЕЙ
                    </div>

                    <div
                        class="BS101-screen-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-delay="100"
                    >
                        УДОБНО ИСПОЛЬЗОВАТЬ
                        <br />
                        ПРИ ЛЮБОМ ОСВЕЩЕНИИ
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>