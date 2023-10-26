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
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/parallax.min.js');

// Анимация
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap.min.js');
// $this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="KT721P-landing">
    <section class="KT721P-screen section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT721P-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="KT721P-screen-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ДИСПЛЕЙ
                        <br />
                        2.8”
                    </div>
                </div>

                <div class="KT721P-media-container col-xs-12 col-sm-6">
                    <figure
                        class="KT721P-screen-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <div
                            class="KT721P-screen-layer layer-1"
                            data-aos="KT721P-screen-out"
                            data-aos-delay="800"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-screen/KT721P-screen-phone-back.png"
                                class="KT721P-screen-media"
                                width="286"
                                height="720"
                                alt="Мобильный телефон Maxvi KT721P черного цвета"
                            />
                        </div>

                        <div
                            class="KT721P-screen-layer layer-2"
                            data-aos="KT721P-screen-zoom"
                            data-aos-delay="800"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-screen/KT721P-screen-phone-front.png"
                                class="KT721P-screen-media"
                                width="286"
                                height="720"
                                alt="Мобильный телефон Maxvi KT721P черного цвета"
                            />

                            <div
                                class="KT721P-screen-screen"
                                data-aos="KT721P-screen-animation"
                                data-aos-delay="1600"
                                data-aos-duration="100"
                            ></div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="KT721P-speaker section-dark">
        <div class="KT721P-speaker-sounds"></div>
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KT721P-media-container col-xs-12 col-sm-6">
                    <figure class="KT721P-speaker-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-speaker/KT721P-speaker-phone-back.png"
                            class="KT721P-speaker-media"
                            width="500px"
                            height="1593"
                            alt="Мобильный телефон Maxvi KT721P"
                            data-depth="0.2"
                        />
                    </figure>
                </div>

                <div
                    class="KT721P-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="KT721P-speaker-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ГРОМКИЙ
                        <br />
                        <strong>ДИНАМИК</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="KT721P-battery section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT721P-media-container col-xs-12 col-sm-6 col-md-4 col-md-offset-2"
                >
                    <figure
                        class="KT721P-battery-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/KT721P-battery-phone-front.png"
                            class="KT721P-battery-media"
                            width="224"
                            height="512"
                            alt="Мобильный телефон Maxvi KT721P"
                        />
                    </figure>
                </div>

                <div
                    class="KT721P-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="KT721P-battery-title"
                        data-aos="fade-left"
                    >
                        МОЩНАЯ
                        <br />
                        БАТАРЕЯ
                        <span class="text-small">4000&nbsp;mAh</span>
                    </div>

                    <div
                        class="KT721P-battery-icon"
                        data-aos="KT721P-battery-animation"
                        data-aos-duration="800"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="124.5 127.67 1117 512.66"
                            width="100%"
                            height="100%"
                            fill="currentColor"
                        >
                            <path
                                d="M1040.5,640.33h-832a84.09,84.09,0,0,1-84-84V211.67a84.09,84.09,0,0,1,84-84h832a84.09,84.09,0,0,1,84,84V556.33A84.09,84.09,0,0,1,1040.5,640.33Zm-832-474.66a46.05,46.05,0,0,0-46,46V556.33a46.05,46.05,0,0,0,46,46h832a46.05,46.05,0,0,0,46-46V211.67a46.05,46.05,0,0,0-46-46Z"
                            />
                            <path
                                d="M1190.5,560.33h-104V207.67h104a51.05,51.05,0,0,1,51,51V509.33A51.05,51.05,0,0,1,1190.5,560.33Zm-66-38h66a13,13,0,0,0,13-13V258.67a13,13,0,0,0-13-13h-66Z"
                            />
                            <path
                                d="M947.83,564.78H301.17a65.08,65.08,0,0,1-65-65V277.11a65.08,65.08,0,0,1,65-65H947.83a65.08,65.08,0,0,1,65,65V499.78A65.08,65.08,0,0,1,947.83,564.78ZM301.17,250.11a27,27,0,0,0-27,27V499.78a27,27,0,0,0,27,27H947.83a27,27,0,0,0,27-27V277.11a27,27,0,0,0-27-27Z"
                            />
                            <rect
                                x="603.83"
                                y="222.22"
                                width="38"
                                height="314.67"
                            />
                            <rect
                                x="418.33"
                                y="231.11"
                                width="38"
                                height="314.67"
                            />
                            <rect
                                x="789.33"
                                y="231.11"
                                width="38"
                                height="314.67"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KT721P-powerbank section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KT721P-media-container col-xs-12">
                    <figure
                        class="KT721P-powerbank-figure"
                        data-aos="fade-down"
                        data-aos-delay="600"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-powerbank/KT721P-powerbank-phone-side.png"
                            class="KT721P-powerbank-media"
                            width="1160"
                            height="419"
                            alt="Мобильный телефон Maxvi KT721P"
                        />

                        <div
                            class="KT721P-powerbank-indicator"
                            data-aos-anchor=".KT721P-powerbank-figure"
                            data-aos="fade-in"
                            data-aos-delay="1000"
                            data-aos-duration="800"
                        >
                            <span
                                data-aos="fade-in"
                                data-aos-anchor=".KT721P-powerbank-indicator"
                                data-aos-delay="1000"
                                data-aos-duration="200"
                            ></span>
                            <span
                                data-aos="fade-in"
                                data-aos-anchor=".KT721P-powerbank-indicator"
                                data-aos-delay="1200"
                                data-aos-duration="200"
                            ></span>
                            <span
                                data-aos="fade-in"
                                data-aos-anchor=".KT721P-powerbank-indicator"
                                data-aos-delay="1400"
                                data-aos-duration="200"
                            ></span>
                        </div>
                    </figure>
                </div>

                

                <div class="KT721P-typography-container col-xs-12">
                    <div
                        class="KT721P-powerbank-title"
                        data-aos="KT721P-powerbank-title"
                        data-aos-anchor=".KT721P-powerbank-indicator"
                        data-aos-duration="800"
                    >
                        POWER BANK
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
