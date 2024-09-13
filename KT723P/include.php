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

<div class="KT723P-landing">
    <section class="KT723P-intro section-dark">
        <div
            class="KT723P-intro-bg"
            data-aos="fade-in"
            data-aos-duration="800"
            data-aos-achor=".KT723P-intro"
            style="
                background-image: url('<?= $folder ?>/images/section-intro/KT723P-intro-bg.jpg');
            "
        ></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT723P-media-container col-xs-12 col-sm-8 col-md-7 col-sm-offset-4 col-md-offset-5"
                >
                    <figure class="KT723P-intro-figure">
                        <div
                            class="KT723P-intro-figure-aos"
                            data-aos="fade-left"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-intro/KT723P-intro-toaster-side.png"
                                class="KT723P-intro-media"
                                width="1209"
                                height="1162"
                                alt="Тостер Maxvi KT723P"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="KT723P-typography-container col-xs-12 col-sm-5"
                >
                    <img
                        loading="lazy"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        class="KT723P-intro-logo"
                        width="660"
                        height="112"
                        alt="Maxvi"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    />

                    <div
                        class="KT723P-intro-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ТОСТЕР
                    </div>

                    <div
                        class="KT723P-intro-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        KT723P
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KT723P-power section-dark">
        <div
            class="KT723P-power-bg"
            data-aos="fade-in"
            data-aos-duration="800"
            data-aos-achor=".KT723P-power"
            style="
                background-image: url('<?= $folder ?>/images/section-power/KT723P-power-bg.jpg');
            "
        ></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT723P-typography-container col-xs-12 col-sm-5"
                >
                    <div class="KT723P-power-title">МОЩНОСТЬ</div>

                    <div class="KT723P-power-value">700&nbsp;W</div>
                </div>
            </div>
        </div>
    </section>

    <section class="KT723P-levels">
        <div
            class="KT723P-levels-bg"
            style="
                background-image: url('<?= $folder ?>/images/section-levels/KT723P-levels-bg.jpg');
            "
        ></div>

        <div class="KT723P-levels-scene">
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="KT723P-media-container col-xs-12 col-sm-6"
                    >
                        <figure class="KT723P-levels-figure">
                            <div class="KT723P-levels-aos">
                                <div
                                    class="KT723P-levels-figure-aos"
                                    data-aos="fade-right"
                                    data-aos-duration="800"
                                >
                                    <img
                                        loading="lazy"
                                        src="<?= $folder ?>/images/section-levels/KT723P-levels-toaster-front.png"
                                        class="KT723P-levels-media"
                                        width="937"
                                        height="1164"
                                        alt="Тостер Maxvi KT723P"
                                    />
                                </div>
                            </div>
                        </figure>
                    </div>

                    <div
                        class="KT723P-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                    >
                        <div class="KT723P-levels-block">
                            <div
                                class="KT723P-levels-title"
                                data-aos="fade-left"
                                data-aos-duration="500"
                                data-aos-achor=".KT723P-levels"
                            >
                                <span class="text-lead">6</span>
                                УРОВНЕЙ

                                <div
                                    class="KT723P-levels-title-line"
                                ></div>
                            </div>

                            <div
                                class="KT723P-levels-subtitle"
                                data-aos="fade-left"
                                data-aos-duration="500"
                                data-aos-achor=".KT723P-levels"
                            >
                                ОБЖАРКИ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KT723P-poweroff">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT723P-media-container col-xs-12 col-sm-6 col-sm-offset-6"
                >
                    <figure class="KT723P-poweroff-figure"></figure>
                </div>

                <div
                    class="KT723P-typography-container col-xs-12 col-sm-7"
                >
                    <div class="KT723P-poweroff-block">
                        <div class="KT723P-poweroff-title">
                            КНОПКА

                            <div
                                class="KT723P-poweroff-title-line"
                            ></div>
                        </div>

                        <div class="KT723P-poweroff-subtitle">
                            ВЫКЛЮЧЕНИЯ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KT723P-pallet">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KT723P-media-container col-xs-12">
                    <figure
                        class="KT723P-pallet-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                        data-aos-anchor-placement="bottom-bottom"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-pallet/KT723P-pallet.png"
                            class="KT723P-pallet-media KT723P-pallet-media-pallet"
                            width="810"
                            height="338"
                            alt="Тостер Maxvi KT723P"
                        />

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-pallet/KT723P-pallet-toaster-up.png"
                            class="KT723P-pallet-media KT723P-pallet-media-toaster"
                            width="1148"
                            height="655"
                            alt="Поддон Maxvi KT723P"
                        />
                    </figure>
                </div>

                <div class="KT723P-typography-container col-xs-12">
                    <div
                        class="KT723P-pallet-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <span class="text-lead">ПОДДОН</span>
                        <br class="KT723P-pallet-title-breakpoint" />
                        ДЛЯ КРОШЕК
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>