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
    <section
        class="KT721P-power"
        style="
            background-image: url('<?= $folder ?>/images/section-power/KT721P-power-bg-2160.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT721P-typography-container col-xs-12 col-sm-10"
                >
                    <div
                        class="KT721P-power-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        МОЩНОСТЬ
                        <br />
                        <span class="KT721P-power-value">
                            650&nbsp;Вт
                        </span>
                    </div>
                </div>

                <div
                    class="KT721P-media-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <figure
                        class="KT721P-power-figure"
                        data-aos="KT721P-power-head"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-power/KT721P-power-toaster-front.png"
                            class="KT721P-power-media"
                            width="585"
                            height="579"
                            alt="Тостер Maxvi KT721P черного цвета"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section
        class="KT721P-mode"
        style="
            background-image: url('<?= $folder ?>/images/section-mode/KT721P-mode-bg-2160.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT721P-typography-container col-xs-12 col-sm-10 col-lg-8"
                >
                    <div
                        class="KT721P-mode-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        6 УРОВНЕЙ
                        <br />
                        <span class="text-mark">НАГРЕВА</span>
                    </div>
                </div>

                <div
                    class="KT721P-media-container col-xs-12 col-sm-7 col-lg-6 col-sm-offset-5 col-lg-offset-6"
                >
                    <figure class="KT721P-mode-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-mode/KT721P-mode-toaster-front.png"
                            class="KT721P-mode-media"
                            width="514"
                            height="592"
                            alt="Тостер Maxvi KT721P белого цвета"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="KT721P-pallet section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT721P-media-container col-xs-12 col-sm-6 col-md-4"
                >
                    <figure class="KT721P-pallet-figure"></figure>
                </div>

                <div
                    class="KT721P-typography-container col-xs-12 col-sm-10 col-sm-offset-2"
                >
                    <div
                        class="KT721P-pallet-title"
                        data-aos="fade-left"
                    >
                        ВЫДВИЖНОЙ
                        <br />
                        ПОДДОН
                    </div>

                    <div
                        class="KT721P-pallet-subtitle"
                        data-aos="fade-left"
                    >
                        ДЛЯ СБОРА
                        <br />
                        КРОШЕК
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="KT721P-design"
        style="
            background-image: url('<?= $folder ?>/images/section-design/KT721P-design-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT721P-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="KT721P-design-title"
                        data-aos-duration="800"
                    >
                        СТИЛЬНЫЙ
                        <br />
                        <b>ДИЗАЙН</b>
                    </div>
                </div>

                <div
                    class="KT721P-media-container col-xs-12 col-sm-9 col-md-8 col-sm-offset-3 col-md-offset-4"
                >
                    <figure class="KT721P-design-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/KT721P-design-toaster-front-black.png"
                            class="KT721P-design-media layer-1"
                            width="588"
                            height="574"
                            alt="Тостер Maxvi KT721P черного цвета"
                        />

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/KT721P-design-toaster-front-white.png"
                            class="KT721P-design-media layer-2"
                            width="638"
                            height="622"
                            alt="Тостер Maxvi KT721P белого цвета"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
