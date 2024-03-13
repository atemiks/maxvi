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
<div class="C40-landing">
    <section class="C40-presentation">
        <section
            class="C40-design"
            style="
                background-image: url('<?= $folder ?>/images/section-design/C40-design-bg.jpg');
            "
        >
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="C40-typography-container col-xs-12 col-sm-6"
                    >
                        <div
                            class="C40-design-title"
                            data-aos="fade-right"
                            data-aos-duration="500"
                        >
                            СТИЛЬНЫЙ
                            <br />
                            <b>ДИЗАЙН</b>
                        </div>
                    </div>

                    <div
                        class="C40-media-container col-xs-12 col-sm-7 col-sm-offset-5"
                    >
                        <figure class="C40-design-figure">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-design/C40-design-phone-back.png"
                                class="C40-design-media C40-design-media-back"
                                width="650"
                                height="728"
                                alt="Мобильный телефон Maxvi C40"
                            />

                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-design/C40-design-phone-front.png"
                                class="C40-design-media C40-design-media-front"
                                width="650"
                                height="728"
                                alt="Мобильный телефон Maxvi C40"
                            />
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="C40-case">
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="C40-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                    >
                        <div
                            class="C40-case-title"
                            data-aos="fade-in"
                            data-aos-duration="500"
                        >
                            ЭРГОНОМИЧНЫЙ
                            <br />
                            <b>КОРПУС</b>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="C40-keyboard"
            style="
                background-image: url('<?= $folder ?>/images/section-keyboard/C40-keyboard-bg.jpg');
            "
        >
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="C40-typography-container col-xs-12 col-sm-6"
                    >
                        <div
                            class="C40-keyboard-title"
                            data-aos="fade-right"
                            data-aos-duration="500"
                        >
                            УДОБНАЯ
                            <br />
                            <b>КЛАВИАТУРА</b>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section
        class="C40-camera"
        style="
            background-image: url('<?= $folder ?>/images/section-camera/C40-camera-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="C40-typography-container col-xs-12 col-sm-6 col-md-5 col-md-offset-1"
                >
                    <div
                        class="C40-camera-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <span class="text-primary">КАМЕРА</span>
                        <br />
                        0.3 MPX
                    </div>
                </div>

                <div
                    class="C40-media-container col-xs-12 col-sm-6 col-md-5"
                >
                    <figure
                        class="C40-camera-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-camera/C40-camera-phone-back.png"
                            class="C40-camera-media"
                            width="455"
                            height=""
                            alt="Мобильный телефон Maxvi C40"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>