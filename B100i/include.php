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
<div class="B100i-landing">
    <section
        class="B100i-intro"
        style="
            background-image: url('<?= $folder ?>/images/section-intro/B100i-intro-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="B100i-media-container col-xs-12">
                    <figure
                        class="B100i-intro-figure"
                        data-aos="fade-up-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/B100i-intro-phone-front.png"
                            width="777"
                            height="638"
                            alt="Мобильный телефон Maxvi B100i"
                            class="B100i-intro-media"
                        />
                    </figure>
                </div>

                <div class="B100i-typography-container col-xs-12">
                    <div class="row">
                        <div
                            class="col-xs-12 col-sm-4 col-md-3 col-sm-offset-2"
                        >
                            <div
                                class="B100i-intro-model"
                                data-aos="fade-down-right"
                                data-aos-duration="500"
                            >
                                <img
                                    loading="lazy"
                                    src="<?= $folder ?>/images/logo-maxvi.svg"
                                    width=""
                                    height=""
                                    alt="Maxvi"
                                    class="B100i-intro-logo"
                                />
                                <br />
                                B100i
                            </div>
                        </div>
                    </div>
                </div>

                <div class="B100i-typography-container col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div
                                class="B100i-intro-subtitle"
                                data-aos="fade-down-right"
                                data-aos-duration="500"
                            >
                                <b>САМЫЙ</b>
                                <br
                                    class="B100i-intro-subtitle-break"
                                />
                                ДОСТУПНЫЙ
                                <br
                                    class="B100i-intro-subtitle-break"
                                />
                                ПО ЦЕНЕ В СВОЕМ
                                <br
                                    class="B100i-intro-subtitle-break"
                                />
                                СЕГМЕНТЕ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="B100i-screen"
        style="
            background-image: url('<?= $folder ?>/images/section-screen/B100i-screen-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B100i-media-container col-xs-12 col-sm-7 col-lg-6"
                >
                    <figure
                        class="B100i-screen-figure"
                        data-aos="fade-up"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/B100i-screen-phone-front.png"
                            width="488"
                            height="1066"
                            alt="Мобильный телефон Maxvi B100i"
                            class="B100i-screen-media"
                        />
                    </figure>
                </div>

                <div
                    class="B100i-typography-container col-xs-12 col-sm-5 col-lg-6"
                >
                    <div
                        class="B100i-screen-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ДИСПЛЕЙ
                        <br />
                        <b>1.77"</b>
                    </div>

                    <div
                        class="B100i-screen-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        КОМФОРТНЫЙ
                        <br />
                        ПРОСМОТР
                        <br />
                        ИЗОБРАЖЕНИЙ
                        <br />
                        И&nbsp;ТЕКСТА
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="B100i-sos">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B100i-typography-container col-xs-12 col-sm-5 col-lg-6"
                >
                    <div
                        class="B100i-sos-title"
                        data-aos="fade-up"
                        data-aos-duration="500"
                    >
                        КНОПКА SOS
                    </div>
                    <div
                        class="B100i-sos-subtitle"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="500"
                    >
                        БЫСТРАЯ АКТИВАЦИЯ ФУНКЦИИ ВЫЗОВА ЭКСТРЕННОЙ
                        ПОМОЩИ
                    </div>
                </div>

                <div
                    class="B100i-media-container col-xs-12 col-sm-7 col-lg-6"
                >
                    <figure
                        class="B100i-sos-figure"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-sos/B100i-sos-phone-back.png"
                            width="634"
                            height="1384"
                            alt="Мобильный телефон Maxvi B100i"
                            class="B100i-sos-media"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="B100i-keyboard section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B100i-media-container col-xs-12 col-sm-8 col-lg-6"
                >
                    <figure
                        class="B100i-keyboard-figure"
                        data-aos="fade-right"
                        data-aos-delay="100"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-keyboard/B100i-keyboard-phone-front.png"
                            width="1348"
                            height="652"
                            alt="Мобильный телефон Maxvi B100i"
                            class="B100i-keyboard-media"
                        />
                    </figure>
                </div>

                <div
                    class="B100i-typography-container col-xs-12 col-sm-4 col-lg-6"
                >
                    <div
                        class="B100i-keyboard-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        УДОБНАЯ
                        <br />
                        КЛАВИАТУРА
                    </div>
                    <div
                        class="B100i-keyboard-subtitle"
                        data-aos="fade-left"
                        data-aos-delay="100"
                        data-aos-duration="500"
                    >
                        С&nbsp;КРУПНЫМИ
                        <br />
                        ЦИФРАМИ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="B100i-fm"
        style="
            background-image: url('<?= $folder ?>/images/section-fm/B100i-fm-bg-right.jpg'),
                url('<?= $folder ?>/images/section-fm/B100i-fm-bg-left.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B100i-media-container col-xs-12 col-sm-5 col-sm-offset-6"
                >
                    <figure
                        data-aos="fade-left"
                        data-aos-duration="800"
                        class="B100i-fm-figure"
                    >
                        <div id="B100i-fm-parallax">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-fm/B100i-fm-phone-front.png"
                                width="426"
                                height="742"
                                alt="Мобильный телефон Maxvi B100i"
                                class="B100i-fm-media"
                                data-depth="0.1"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="B100i-typography-container col-xs-12 col-sm-4 col-sm-offset-1 col-md-offset-2 col-lg-6 col-lg-offset-0"
                >
                    <div
                        class="B100i-fm-title B100i-large-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        FM - РАДИО
                    </div>
                    <div
                        class="B100i-fm-subtitle"
                        data-aos="fade-right"
                        data-aos-delay="100"
                        data-aos-duration="500"
                    >
                        ЛЮБИМЫЕ
                        <br />
                        РАДИОСТАНЦИИ
                        <br />
                        ВСЕГДА&nbsp;С&nbsp;СОБОЙ
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>