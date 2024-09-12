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
<div class="KE2021S-landing">
    <section
        class="KE2021S-intro section-dark"
        data-aos
        data-aos-delay="1200"
    >
        <div
            class="KE2021S-intro-bg"
            data-aos="fade-in"
            data-aos-delay="800"
            data-aos-duration="1200"
            data-aos-achor=".KE2021S-intro"
            style="
                background-image: url('<?= $folder ?>/images/section-intro/KE2021S-intro-bg.jpg');
            "
        ></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KE2021S-media-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <figure
                        class="KE2021S-intro-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/KE2021S-intro-kettle-side.png"
                            class="KE2021S-intro-media"
                            width="1138"
                            height="1102"
                            alt="Электрический чайник Maxvi KE2021S"
                        />
                    </figure>
                </div>

                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-7"
                >
                    <svg
                        class="KE2021S-intro-logo"
                        fill="currentColor"
                        width="72"
                        height="424"
                        viewBox="0 0 131.07001 770.17995"
                        xmlns="http://www.w3.org/2000/svg"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <path
                            d="M128 770.18 10.19 741.11a14.25 14.25 0 0 1-9.88-13.93c.06-8.48 8.94-13.17 13.17-15.4l68.07-34.77 28.82 14.66-62.85 33.29L128 741.48zm-9.3-86.46L10.25 628.01S0 621.86 0 614.78c0-9.19 7.27-13.54 12.61-15.16 6.15 2.48 111.3 57.27 111.3 57.27s6.09 4.6 6.09 11.8c0 7.2-7.33 13.91-11.3 15.03zm-93.92-91.18 33.54 17.39 69.94-14.78v-27.58zm14.3-122.22 91 56.12v32.6L10.7 486.81S.09 479.4.09 469.55c0-9.85 8.31-15 10.61-16.49 2.3-1.49 119.39-72.09 119.39-72.09v34.13L95.2 436.45l.12 54.73-26.59-16.36v-22.75zM.09 381.28v-36.55l40.4-39.63 19.04 18.28zM.22 251.2l129.64 125.5.23-37.85-44.35-43.47 44.35-42.95v-37.96L65.27 277.7.22 214.47zm.85-38.25 108.78-67.77-25.61-15.81-83.17 49.95zm0-146.65V33.42l123 77s7 4.29 7 11.1a11.74 11.74 0 0 1-3.36 7.82c-2.73 2.56-8.7 7.48-8.7 7.48zM.12 26.46V.17l130-.17v26.46z"
                        />
                    </svg>

                    <div
                        class="KE2021S-intro-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ЭЛЕКТРИЧЕСКИЙ
                        <br />
                        ЧАЙНИК
                    </div>

                    <div
                        class="KE2021S-intro-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <span
                            class="text-mark"
                            data-aos
                            data-aos-duration="500"
                            data-aos-delay="500"
                            data-aos-achor=".KE2021S-intro-model"
                        >
                            KE2021S
                        </span>
                    </div>

                    <div
                        class="KE2021S-intro-description"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        УДОБНЫЙ
                        <br />
                        И НАДЁЖНЫЙ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="KE2021S-capacity"
        style="
            background-image: url('<?= $folder ?>/images/section-capacity/KE2021S-capacity-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE2021S-media-container col-xs-12 col-sm-8">
                    <figure
                        class="KE2021S-capacity-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                        data-aos-anchor-placement="center-bottom"
                    >
                        <canvas
                            class="KE2021S-capacity-canvas"
                            width="1460"
                            height="1546"
                        ></canvas>
                    </figure>
                </div>

                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <div
                        class="KE2021S-capacity-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        БОЛЬШОЙ ОБЪЁМ
                    </div>

                    <div
                        class="KE2021S-capacity-value"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        <span class="text-lead">2</span>
                        ЛИТРА
                    </div>

                    <div
                        class="KE2021S-capacity-description"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        СЕМЕЙНЫЙ
                        <br />
                        ФОРМАТ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KE2021S-presentation section-dark">
        <div
            class="KE2021S-presentation-scene"
            style="
                background-image: url('<?= $folder ?>/images/section-presentation/KE2021S-presentation-bg-side-left.jpg'),
                    url('<?= $folder ?>/images/section-presentation/KE2021S-presentation-bg-side-right.jpg');
            "
        >
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="KE2021S-media-container col-xs-11 col-xs-offset-1"
                    >
                        <figure
                            class="KE2021S-presentation-figure"
                            data-animation="power"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-presentation/KE2021S-presentation-kettle-side.png"
                                class="KE2021S-presentation-media"
                                width="1032"
                                height="1000"
                                alt="Электрический чайник Maxvi KE2021S"
                            />

                            <div
                                class="KE2021S-presentation-indicator"
                                style="
                                    background-image: url('<?= $folder ?>/images/section-presentation/KE2021S-presentation-kettle-indicator.png');
                                "
                            ></div>

                            <video
                                class="KE2021S-presentation-steam"
                                poster=""
                                muted
                                playsinline
                            >
                                <source
                                    src="<?= $folder ?>/images/section-presentation/KE2021S-presentation-bg-video.mp4"
                                    type="video/mp4"
                                />
                            </video>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="KE2021S-presentation-content">
                <section class="KE2021S-power">
                    <div class="container">
                        <div class="content-wrapper row d-flex">
                            <div
                                class="KE2021S-typography-container col-xs-12 col-sm-10 col-sm-offset-1"
                            >
                                <div class="KE2021S-power-block">
                                    <div class="KE2021S-power-title">
                                        МОЩНОСТЬ
                                        <span class="text-lead">
                                            1800&nbsp;W
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="KE2021S-indicator">
                    <div class="container">
                        <div class="content-wrapper row d-flex">
                            <div
                                class="KE2021S-typography-container col-xs-12 col-sm-10 col-sm-offset-1"
                            >
                                <div class="KE2021S-indicator-block">
                                    <div
                                        class="KE2021S-indicator-title"
                                    >
                                        ИНДИКАТОР РАБОТЫ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="KE2021S-poweroff">
                    <div class="container">
                        <div class="content-wrapper row d-flex">
                            <div
                                class="KE2021S-typography-container col-xs-12 col-sm-10 col-sm-offset-1"
                            >
                                <div class="KE2021S-poweroff-block">
                                    <div class="KE2021S-poweroff-title">
                                        АВТООТКЛЮЧЕНИЕ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="KE2021S-heating-element">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE2021S-media-container col-xs-12 col-sm-6">
                    <figure
                        class="KE2021S-heating-element-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-heating-element/KE2021S-heating-element-kettle-front.png"
                            class="KE2021S-heating-element-media"
                            width="1084"
                            height="1695"
                            alt="Электрический чайник Maxvi KE2021S"
                        />

                        <div
                            class="KE2021S-heating-element-heat"
                            data-aos
                            data-aos-delay="500"
                            data-aos-anchor-placement="bottom-bottom"
                            style="
                                background-image: url('<?= $folder ?>/images/section-heating-element/KE2021S-heating-element-kettle-heat.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <div
                        class="KE2021S-heating-element-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        СКРЫТЫЙ
                        <br />
                        ЭЛЕМЕНТ
                        <br />
                        НАГРЕВА
                    </div>

                    <div
                        class="KE2021S-heating-element-description"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        СОВРЕМЕННО
                        <br />
                        И БЕЗОПАСНО
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KE2021S-material section-dark">
        <div
            class="KE2021S-material-bg"
            style="
                background-image: url('<?= $folder ?>/images/section-material/KE2021S-material-bg.jpg');
            "
        ></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KE2021S-media-container col-xs-12 col-sm-5 col-sm-offset-7"
                >
                    <figure
                        class="KE2021S-material-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-material/KE2021S-material-kettle-side.png"
                            class="KE2021S-material-media"
                            width="755"
                            height="1261"
                            alt="Электрический чайник Maxvi KE2021S"
                        />
                    </figure>
                </div>

                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-7"
                >
                    <div
                        class="KE2021S-material-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        НЕРЖАВЕЮЩАЯ
                        <br />
                        СТАЛЬ
                    </div>

                    <div
                        class="KE2021S-material-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        СТИЛЬНО
                        <br />
                        И ПРАКТИЧНО
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>