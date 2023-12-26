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
<div class="KT822S-landing">
    <section
        class="KT822S-power"
        style="
            background-image: url('<?= $folder ?>/images/section-power/KT822S-power-stripe.png'),
                url('<?= $folder ?>/images/section-power/KT822S-power-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT822S-media-container col-xs-12 col-sm-8 col-md-6"
                >
                    <figure
                        class="KT822S-power-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-power/KT822S-power-toaster-front.png"
                            class="KT822S-power-media layer-1"
                            width="700"
                            height="712"
                            alt="Тостер Maxvi KT822S"
                        />

                        <div
                            class="KT822S-power-media KT822S-power-media--heat"
                            style="
                                background-image: url('<?= $folder ?>/images/section-power/KT822S-power-toaster-heat.png');
                            "
                            data-aos="fade-in"
                            data-aos-delay="500"
                            data-aos-duration="800"
                            data-aos-anchor=".KT822S-power-figure"
                        ></div>
                    </figure>
                </div>

                <div
                    class="KT822S-typography-container col-xs-12 col-sm-8 col-md-6 col-sm-offset-4 col-md-offset-6"
                >
                    <div
                        class="KT822S-power-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        МОЩНОСТЬ
                        <br />
                        <span class="text-lead">800&nbsp;ВТ</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="KT822S-levels section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-levels/KT822S-levels-bg-left.jpg'),
                url('<?= $folder ?>/images/section-levels/KT822S-levels-bg-right.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KT822S-media-container col-xs-12">
                    <figure class="KT822S-levels-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-levels/KT822S-levels-toaster-front.png"
                            class="KT822S-levels-media"
                            width="710"
                            height="911"
                            alt="Тостер Maxvi KT822S"
                        />
                    </figure>
                </div>

                <div
                    class="KT822S-typography-container col-xs-12 col-sm-6 col-sm-offset-3"
                >
                    <div
                        class="KT822S-levels-title"
                        data-aos="fade-down-bounce"
                        data-aos-duration="500"
                    >
                        6 УРОВНЕЙ
                        <br />
                        <span class="text-mark">ОБЖАРКИ</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="KT822S-design section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-design/KT822S-design-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KT822S-media-container col-xs-12 col-sm-10 col-sm-offset-2"
                >
                    <figure
                        class="KT822S-design-figure"
                        data-aos="fade-down-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-design/KT822S-design-toaster-side.png"
                            class="KT822S-levels-media"
                            width="974"
                            height="680"
                            alt="Тостер Maxvi KT822S"
                        />
                    </figure>
                </div>

                <div
                    class="KT822S-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="KT822S-design-title"
                        data-aos="fade-up-right"
                        data-aos-duration="500"
                    >
                        СТИЛЬНЫЙ
                        <br />
                        КОРПУС
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
