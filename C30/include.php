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
<div class="C30-landing">
    <section class="C30-screen">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="C30-typography-container col-xs-12 col-sm-7"
                >
                    <div
                        class="C30-screen-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ДИСПЛЕЙ
                        <br />
                        1.77"
                    </div>
                </div>

                <div class="C30-media-container col-xs-12 col-sm-5">
                    <figure
                        class="C30-screen-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/C30-screen-phone-front.png"
                            class="C30-screen-media layer-1"
                            width="444"
                            height="1022"
                            alt="Мобильный телефон Maxvi C30"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="C30-sim"
        style="
            background-image: url('<?= $folder ?>/images/section-sim/C30-sim-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="C30-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="C30-sim-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        2 SIM
                    </div>

                    <div
                        class="C30-sim-subtitle"
                        data-aos="fade-right"
                        data-aos-delay="100"
                        data-aos-duration="500"
                    >
                        СЛОТ
                        <br />
                        ДЛЯ КАРТЫ
                        <br />
                        ПАМЯТИ
                    </div>
                </div>

                <div class="C30-media-container col-xs-12 col-sm-6">
                    <figure class="C30-sim-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-sim/C30-sim-phone-front.png"
                            class="C30-sim-media layer-1"
                            width="444"
                            height="1022"
                            alt="Мобильный телефон Maxvi C30"
                        />

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-sim/C30-sim-phone-back.png"
                            class="C30-sim-media layer-2"
                            width="445"
                            height="1022"
                            alt="Мобильный телефон Maxvi C30"
                        />

                        <div class="C30-sim-cards">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-sim/C30-sim-icon.svg"
                                class="C30-sim-card layer-1"
                                width="150"
                                height="90"
                                alt="SIM карта"
                                data-aos="fade-left"
                                data-aos-duration="500"
                            />

                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-sim/C30-sim-icon.svg"
                                class="C30-sim-card layer-2"
                                width="150"
                                height="90"
                                alt="SIM карта"
                                data-aos="fade-left"
                                data-aos-delay="100"
                                data-aos-duration="500"
                            />

                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-sim/C30-sim-sd-card.svg"
                                class="C30-sim-sd-card"
                                width="132"
                                height="172"
                                alt="microSD карта"
                                data-aos="fade-left"
                                data-aos-duration="500"
                                data-aos-delay="200"
                            />
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="C30-keyboard section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="C30-media-container col-xs-12 col-sm-10 col-sm-offset-2"
                >
                    <figure class="C30-keyboard-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-keyboard/C30-keyboard-phone-front.png"
                            class="C30-keyboard-media"
                            width="1588"
                            height="877"
                            alt="Мобильный телефон Maxvi C30"
                        />
                    </figure>
                </div>

                <div
                    class="C30-typography-container col-xs-12 col-sm-10 col-sm-offset-2"
                >
                    <div
                        class="C30-keyboard-title"
                        data-aos="fade-up"
                        data-aos-duration="500"
                    >
                        ЭРГОНОМИЧНАЯ
                        <br />
                        КЛАВИАТУРА
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
