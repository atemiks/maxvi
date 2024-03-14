<?php

/**
 * Bitrix vars
 *
 * @var array $templateFolder
 * @var array $arParams
 * @var CMain $APPLICATION
 * @var CUser $USER
 */

$folder = substr(DIR, strlen($_SERVER['DOCUMENT_ROOT'])) . '/files/';

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
<div class="T20-landing">
    <section
        class="T20-intro section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-intro/T20-intro-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="T20-typography-container col-xs-12 col-sm-5 col-sm-offset-4 col-md-6"
                >
                    <div class="T20-intro-title">T20</div>

                    <div class="T20-intro-subtitle">
                        Адаптирован под требования 76-ФЗ для
                        военнослужащих ВС&nbsp;РФ
                    </div>

                    <div class="T20-intro-features">
                        <ul class="T20-intro-features-list">
                            <li>
                                <figure
                                    class="T20-intro-features-icon"
                                    data-aos="fade-up"
                                    data-aos-duration="300"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-intro/icon-camera.svg');
                                    "
                                ></figure>
                            </li>

                            <li>
                                <figure
                                    class="T20-intro-features-icon"
                                    data-aos="fade-up"
                                    data-aos-duration="300"
                                    data-aos-delay="100"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-intro/icon-microphone.svg');
                                    "
                                ></figure>
                            </li>

                            <li>
                                <figure
                                    class="T20-intro-features-icon"
                                    data-aos="fade-up"
                                    data-aos-duration="300"
                                    data-aos-delay="200"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-intro/icon-internet.svg');
                                    "
                                ></figure>
                            </li>

                            <li>
                                <figure
                                    class="T20-intro-features-icon"
                                    data-aos="fade-up"
                                    data-aos-duration="300"
                                    data-aos-delay="300"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-intro/icon-bluetooth.svg');
                                    "
                                ></figure>
                            </li>

                            <li>
                                <figure
                                    class="T20-intro-features-icon"
                                    data-aos="fade-up"
                                    data-aos-duration="300"
                                    data-aos-delay="400"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-intro/icon-sd-card.svg');
                                    "
                                ></figure>
                            </li>
                        </ul>

                        <p
                            class="T20-intro-features-hint"
                            data-aos="fade-up"
                            data-aos-duration="300"
                            data-aos-delay="400"
                        >
                            без камеры | без диктофона | без выхода в
                            интернет | без Bluetooth | без поддержки
                            карт памяти
                        </p>
                    </div>
                </div>

                <div
                    class="T20-media-container col-xs-12 col-sm-3 col-sm-offset-9"
                >
                    <figure class="T20-intro-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/T20-intro-phone-front.png"
                            class="T20-intro-media"
                            width="242"
                            height=""
                            alt="Мобильный телефон Maxvi T20"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="T20-screen">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="T20-media-container col-xs-12 col-sm-6">
                    <figure
                        class="T20-screen-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/T20-screen-phone-front.png"
                            class="T20-screen-media"
                            width="242"
                            height=""
                            alt="Мобильный телефон Maxvi T20"
                        />

                        <span
                            class="T20-screen-size"
                            data-aos="zoom-in"
                            data-aos-delay="600"
                        >
                            2.4''
                        </span>
                    </figure>
                </div>

                <div
                    class="T20-typography-container col-xs-12 col-sm-6 col-md-5 col-lg-4"
                >
                    <div
                        class="T20-screen-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        Большой
                        <br />
                        экран
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="T20-battery">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="T20-typography-container col-xs-12 col-sm-11"
                >
                    <div
                        class="T20-battery-title"
                        data-aos="fade-up"
                        data-aos-duration="500"
                    >
                        Батарея 2000 mAh и встроенный Power Bank
                    </div>

                    <div
                        class="T20-battery-subtitle"
                        data-aos="fade-up"
                        data-aos-duration="500"
                    >
                        Длительная автономная работа и подзарядка
                        внешних устройств в&nbsp;нужный момент
                    </div>
                </div>

                <div class="T20-media-container col-xs-12">
                    <figure
                        class="T20-battery-figure"
                        data-aos="fade-up"
                        data-aos-duration="800"
                    >
                        <div class="T20-battery-parallax">
                            <img
                                loading="lazy"
                                data-depth="0.2"
                                src="<?= $folder ?>/images/section-battery/T20-battery-phone-back.png"
                                class="T20-battery-media"
                                width="242"
                                height=""
                                alt="Мобильный телефон Maxvi T20"
                            />
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="T20-case section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-case/T20-case-bg.jpeg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="T20-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="T20-case-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        Корпус
                        <br />
                        повышенной
                        <br />
                        прочности
                    </div>

                    <div
                        class="T20-case-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        data-aos-anchor-placement="bottom-bottom"
                    >
                        Надёжный помощник в экстремальных условиях
                    </div>
                </div>

                <div
                    class="T20-media-container col-xs-12 col-sm-6 col-md-5"
                >
                    <figure
                        class="T20-case-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src=""
                            class="T20-case-media"
                            width="455"
                            height=""
                            alt="Мобильный телефон Maxvi T20"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>