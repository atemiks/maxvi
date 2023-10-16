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
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap.min.js');
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="E10-landing">
    <section
        class="E10-design"
        style="
            background-image: url('<?= $folder ?>/images/section-design/E10-design-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E10-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="E10-design-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        БРУТАЛЬНЫЙ
                        <br />
                        ДИЗАЙН
                    </div>

                    <div
                        class="E10-design-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        data-aos-delay="100"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/logo-maxvi.svg"
                            class="E10-design-logo"
                            width="230"
                            height="40"
                            alt="Maxvi"
                        />
                        <br />
                        E10
                    </div>
                </div>

                <div
                    class="E10-media-container col-xs-12 col-sm-4 col-sm-offset-2"
                >
                    <figure class="E10-design-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/E10-design-phone-front.png"
                            class="E10-design-media layer-1"
                            width="304"
                            height="601"
                            alt="Мобильный телефон Maxvi E10 оранжевого цвета"
                            data-depth="0.2"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="E10-screen">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E10-media-container col-xs-12 col-sm-4">
                    <figure class="E10-screen-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/E10-screen-phone-front.png"
                            class="E10-screen-media"
                            width="575"
                            height="1223"
                            alt="Мобильный телефон Maxvi E10"
                            data-depth="0.2"
                        />
                    </figure>
                </div>

                <div
                    class="E10-typography-container col-xs-12 col-sm-4"
                >
                    <div
                        class="E10-screen-title"
                        data-aos="fade-up"
                        data-aos-duration="500"
                    >
                        ДВА
                        <br />
                        ЭКРАНА
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="E10-battery section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-battery/E10-battery-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="E10-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="E10-battery-title"
                        data-aos="fade-right"
                    >
                        ЁМКИЙ
                        <br />
                        АККУМУЛЯТОР
                        <br />
                        <span class="text-large">2000</span>
                        <span class="text-small">mAh</span>
                    </div>
                </div>

                <div class="E10-media-container col-xs-12 col-sm-6">
                    <figure
                        class="E10-battery-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/E10-battery-phone-back.png"
                            class="E10-battery-media"
                            width="572"
                            height="958"
                            alt="Мобильный телефон Maxvi E10"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="E10-colors">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="E10-typography-container col-xs-12">
                    <div class="E10-colors-title">ВЫБЕРИ СВОЙ ЦВЕТ</div>
                </div>

                <div
                    class="E10-media-container col-xs-12 col-sm-4 col-sm-offset-4"
                >
                    <figure
                        class="E10-colors-figure E10-colors-figure--red"
                        data-aos="fade-left"
                        data-aos-anchor=".E10-colors-figure--black"
                        data-aos-delay="600"
                        data-aos-duration="800"
                    >
                        <a
                            class="E10-colors-link"
                            data-fancybox="E10-gallery"
                            data-href="<?= $folder ?>/images/section-colors/E10-colors-phone-red-back-vertical.png"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-colors/E10-colors-phone-red-back.png"
                                class="E10-colors-media"
                                width="428"
                                height="581"
                                alt="Мобильный телефон Maxvi E10 красного цвета"
                            />
                        </a>

                        <figcaption>КРАСНЫЙ</figcaption>
                    </figure>

                    <figure
                        class="E10-colors-figure E10-colors-figure--black"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <a
                            class="E10-colors-link"
                            data-fancybox="E10-gallery"
                            data-href="<?= $folder ?>/images/section-colors/E10-colors-phone-black-back-vertical.png"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-colors/E10-colors-phone-black-back.png"
                                class="E10-colors-media"
                                width="428"
                                height="581"
                                alt="Мобильный телефон Maxvi E10 черного цвета"
                            />
                        </a>

                        <figcaption>ЧЕРНЫЙ</figcaption>
                    </figure>

                    <figure
                        class="E10-colors-figure E10-colors-figure--orange"
                        data-aos="fade-right"
                        data-aos-anchor=".E10-colors-figure--black"
                        data-aos-delay="600"
                        data-aos-duration="800"
                    >
                        <a
                            class="E10-colors-link"
                            data-fancybox="E10-gallery"
                            data-href="<?= $folder ?>/images/section-colors/E10-colors-phone-orange-back-vertical.png"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-colors/E10-colors-phone-orange-back.png"
                                class="E10-colors-media"
                                width="428"
                                height="581"
                                alt="Мобильный телефон Maxvi E10 оранжевого цвета"
                            />
                        </a>

                        <figcaption>ОРАНЖЕВЫЙ</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
