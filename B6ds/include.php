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
<div class="B6ds-landing">
    <section
        class="B6ds-screen section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-screen/B6ds-screen-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B6ds-typography-container col-xs-12 col-sm-7 col-lg-8"
                >
                    <div
                        class="B6ds-screen-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        БОЛЬШОЙ
                        <br />
                        ЭКРАН
                        <b class="text-lead">2.22"</b>
                    </div>
                </div>

                <div
                    class="B6ds-media-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <figure class="B6ds-screen-figure">
                        <video
                            class="B6ds-screen-video"
                            poster="<?= $folder ?>/images/section-screen/B6ds-screen-video-poster.jpg"
                            autoplay
                            muted
                            playsinline
                            loop
                        >
                            <source
                                src="<?= $folder ?>/images/section-screen/B6ds-screen-video.mp4"
                                type="video/mp4"
                            />
                        </video>

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-screen/B6ds-screen-phone-front.png"
                            class="B6ds-screen-media"
                            width="465"
                            height="930"
                            alt="Мобильный телефон Maxvi B6ds"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="B6ds-case"
        style="
            background-image: url('<?= $folder ?>/images/section-case/B6ds-case-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B6ds-typography-container col-xs-5 col-sm-4"
                >
                    <div
                        class="B6ds-case-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        КОРПУС
                        <br />
                        ПОВЫШЕННОЙ
                        <br />
                        ПРОЧНОСТИ
                    </div>

                    <div
                        class="B6ds-case-subtitle B6ds-case-subtitle--left"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        МЕТАЛЛИЧЕСКАЯ
                        <br />
                        РАМКА

                        <div class="B6ds-case-subtitle-line"></div>
                    </div>
                </div>

                <div
                    class="B6ds-media-container col-xs-7 col-sm-4 col-xs-offset-5 col-sm-offset-0"
                >
                    <figure class="B6ds-case-figure" data-aos="rotate">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-case/B6ds-case-phone-front.png"
                            class="B6ds-case-media"
                            width="365"
                            height="1300"
                            alt="Мобильный телефон Maxvi B6ds"
                        />
                    </figure>
                </div>

                <div
                    class="B6ds-typography-container col-xs-5 col-sm-4"
                >
                    <div
                        class="B6ds-case-subtitle B6ds-case-subtitle--right"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ЗАЩИТНОЕ СТЕКЛО
                        <br />
                        УВЕЛИЧЕННОЙ
                        <br />
                        ТОЛЩИНЫ

                        <div class="B6ds-case-subtitle-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="B6ds-battery section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-battery/B6ds-battery-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B6ds-media-container col-xs-12 col-sm-6 col-lg-6"
                >
                    <figure
                        data-aos="fade-fill"
                        class="B6ds-battery-figure"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/icon-battery.svg"
                            class="B6ds-battery-media"
                            width="446"
                            height="972"
                            alt="Батарея мобильного телефона Maxvi B6ds"
                        />

                        <figcaption class="B6ds-battery-figcaption">
                            <div class="B6ds-battery-value">100%</div>
                        </figcaption>
                    </figure>
                </div>

                <div
                    class="B6ds-typography-container col-xs-12 col-sm-6 col-lg-6"
                >
                    <div
                        class="B6ds-battery-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ЁМКАЯ
                        <br />
                        БАТАРЕЯ
                    </div>

                    <div
                        class="B6ds-battery-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        1450
                        <small>mAh</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="B6ds-dock">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="B6ds-media-container col-xs-12 col-sm-4">
                    <figure class="B6ds-dock-figure">
                        <div class="B6ds-dock-animation"></div>
                    </figure>
                </div>

                <div
                    class="B6ds-typography-container col-xs-12 col-sm-9 col-sm-offset-3"
                >
                    <div
                        class="B6ds-dock-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ДОК-СТАНЦИЯ
                        <br />
                        В КОМПЛЕКТЕ
                    </div>

                    <div
                        class="B6ds-dock-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        Быстрое и комфортное
                        <br />
                        использование зарядки
                    </div>

                    <div
                        class="B6ds-dock-type-C"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        <figure
                            class="B6ds-dock-type-C-media"
                            data-aos="fade-in"
                            data-aos-anchor=".B6ds-dock-type-C"
                            data-aos-delay="300"
                            style="
                                background-image: url('<?= $folder ?>/images/section-dock/icon-type-c.svg');
                            "
                        ></figure>
                        <div
                            data-aos="fade-in"
                            data-aos-anchor=".B6ds-dock-type-C"
                            data-aos-delay="300"
                        >
                            Type-C
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="B6ds-sim section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B6ds-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="B6ds-sim-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        2 SIM
                    </div>
                </div>

                <div
                    class="B6ds-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="B6ds-sim-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        Удобное распределение
                        <br />
                        звонков и расходов
                    </div>
                </div>

                <div class="B6ds-media-container col-xs-12">
                    <figure class="B6ds-sim-figure">
                        <div
                            class="B6ds-sim-layer layer-1"
                            style="
                                background-image: url('<?= $folder ?>/images/section-sim/icon-sim.svg');
                            "
                        ></div>

                        <div
                            class="B6ds-sim-layer layer-2"
                            style="
                                background-image: url('<?= $folder ?>/images/section-sim/icon-sim.svg');
                            "
                        ></div>

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-sim/B6ds-sim-phone-back.png"
                            class="B6ds-sim-media"
                            width="448"
                            height="1362"
                            alt="Мобильный телефон Maxvi B6ds"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>