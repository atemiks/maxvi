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
<div class="PS04-landing">
    <section
        class="PS04-intro section-dark"
        style="
            background-image: url('<?= $folder ?>/images/section-intro/PS04-intro-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="PS04-typography-container col-xs-12">
                    <div
                        class="PS04-intro-title"
                        data-aos="fade-down"
                        data-aos-duration="500"
                    >
                        ПОРТАТИВНАЯ КОЛОНКА
                    </div>

                    <div
                        class="PS04-intro-model"
                        data-aos="fade-down"
                        data-aos-delay="100"
                        data-aos-duration="500"
                    >
                        <img
                            loading="lazy"
                            class="PS04-intro-logo"
                            src="<?= $folder ?>/images/logo-maxvi.svg"
                            width="244"
                            height="40"
                            alt="Maxvi"
                        />
                        PS-04
                    </div>
                </div>

                <div class="PS04-media-container col-xs-12">
                    <figure
                        class="PS04-intro-figure"
                        data-aos="fade-up"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/PS04-intro-speaker-front.png"
                            class="PS04-intro-media"
                            width="1036"
                            height="515"
                            alt="Портативная колонка Maxvi PS04"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="PS04-sound section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="PS04-typography-container col-xs-12 col-sm-5"
                >
                    <div
                        class="PS04-sound-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        20 Ватт
                        <br />
                        ЧИСТОГО
                        <br />
                        ЗВУКА
                    </div>

                    <div
                        class="PS04-sound-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        ПОДКЛЮЧЕНИЕ
                        <br />
                        ПО&nbsp;BLUETOOTH,
                        <br />
                        <b>
                            ВСТРОЕННЫЙ
                            <br />
                            АККУМУЛЯТОР
                            <br />
                            4500 мАч
                        </b>
                    </div>
                </div>

                <div
                    class="PS04-media-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <figure
                        class="PS04-sound-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-sound/PS04-sound-speaker-front.png"
                            class="PS04-sound-media"
                            width="794"
                            height="513"
                            alt="Портативная колонка Maxvi PS04"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="PS04-controller">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="PS04-media-container col-xs-12">
                    <figure class="PS04-controller-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-controller/PS04-controller-speaker-front.png"
                            class="PS04-controller-media"
                            width="1171"
                            height="1080"
                            alt="Портативная колонка Maxvi PS04"
                        />
                    </figure>
                </div>

                <div
                    class="PS04-typography-container col-xs-12 col-sm-4 col-sm-offset-8"
                >
                    <div
                        class="PS04-controller-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        ПУЛЬТ
                        <br />
                        УПРАВЛЕНИЯ
                        <br />
                        В КОМПЛЕКТЕ
                    </div>

                    <div
                        class="PS04-controller-description"
                        data-aos="fade-left"
                        data-aos-anchor-placement="bottom-bottom"
                        data-aos-delay="100"
                        data-aos-duration="500"
                    >
                        Выбирайте звуковые эффекты, созвучные
                        Вашему&nbsp;настроению
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
