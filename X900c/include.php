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
<div class="X900c-landing">
    <section
        class="X900c-intro"
        style="
            background-image: url('<?= $folder ?>/images/section-intro/X900c-intro-bg.jpg');
        "
    >
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="X900c-typography-container col-xs-12 col-sm-5"
                >
                    <div
                        class="X900c-intro-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-intro/logo-maxvi.svg"
                            class="X900c-intro-logo"
                            width="205"
                            height="35"
                            alt="Maxvi"
                        />
                        X900c
                    </div>

                    <div
                        class="X900c-intro-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        Стильная
                        <br />
                        классика
                    </div>
                </div>

                <div class="X900c-media-container col-xs-12 col-sm-7">
                    <figure
                        class="X900c-intro-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <div class="X900c-intro-parallax">
                            <img
                                data-depth="0.1"
                                loading="lazy"
                                src="<?= $folder ?>/images/section-intro/X900c-intro-phone-front.png"
                                class="X900c-intro-media"
                                width="399"
                                height="742"
                                alt="Мобильный телефон Maxvi X900c"
                            />
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="X900c-contacts">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="X900c-media-container col-xs-12 col-sm-3">
                    <figure
                        class="X900c-contacts-woman"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        style="
                            background-image: url('<?= $folder ?>/images/section-contacts/X900c-contacts-bg.jpg');
                        "
                    ></figure>
                </div>

                <div
                    class="X900c-media-container col-xs-12 col-xs-8 col-sm-4 col-xs-offset-4 col-sm-offset-0"
                >
                    <figure
                        class="X900c-contacts-figure"
                        data-aos="fade-up"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-contacts/X900c-contacts-phone-front.png"
                            class="X900c-contacts-media"
                            width="293"
                            height="707"
                            alt="Мобильный телефон Maxvi X900c"
                        />
                    </figure>
                </div>

                <div
                    class="X900c-typography-container col-xs-12 col-sm-5"
                >
                    <div
                        class="X900c-contacts-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        Фото и мелодия
                        <br />
                        для каждого
                        <br />
                        контакта
                    </div>

                    <div
                        class="X900c-contacts-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        Теперь еще
                        <br />
                        комфортнее звонить
                        <br />
                        и принимать вызовы
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="X900c-screen-and-case-presentation">
        <section class="X900c-screen section-dark">
            <video
                class="X900c-screen-video"
                poster="<?= $folder ?>/images/section-screen/X900c-screen-video-poster.jpg"
                autoplay
                muted
                playsinline
                loop
            >
                <source
                    src="<?= $folder ?>/images/section-screen/X900c-screen-video.mp4"
                    type="video/mp4"
                />
            </video>

            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="X900c-media-container col-xs-12 col-sm-5 col-md-4"
                    >
                        <figure class="X900c-screen-figure">
                            <div
                                class="X900c-screen-aos"
                                data-aos="fade-right"
                                data-aos-duration="800"
                            >
                                <div class="X900c-screen-parallax">
                                    <img
                                        data-depth="0.1"
                                        loading="lazy"
                                        src="<?= $folder ?>/images/section-screen/X900c-screen-phone-front.png"
                                        class="X900c-screen-media"
                                        width="344"
                                        height="765"
                                        alt="Мобильный телефон Maxvi X900c"
                                    />
                                </div>
                            </div>
                        </figure>
                    </div>

                    <div
                        class="X900c-typography-container col-xs-12 col-sm-5 col-md-4 col-sm-offset-2 col-md-offset-4"
                    >
                        <div
                            class="X900c-screen-title"
                            data-aos="fade-left"
                            data-aos-duration="500"
                        >
                            Большой
                            <br />
                            экран
                            <br />
                            <b>2.8’’</b>
                        </div>

                        <div
                            class="X900c-screen-subtitle"
                            data-aos="fade-left"
                            data-aos-duration="500"
                        >
                            Любимые видео
                            <br />
                            и фото всегда
                            <br />
                            с собой
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="X900c-case"
            style="
                background-image: url('<?= $folder ?>/images/section-case/X900c-case-bg.jpg');
            "
        >
            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="X900c-typography-container col-xs-12 col-sm-6"
                    >
                        <div
                            class="X900c-case-title"
                            data-aos="fade-right"
                            data-aos-duration="500"
                        >
                            Корпус с
                            <br />
                            металлической
                            <br />
                            рамкой
                        </div>

                        <div
                            class="X900c-case-subtitle"
                            data-aos="fade-right"
                            data-aos-duration="500"
                        >
                            делает телефон
                            <br />
                            ещё прочнее
                            <br />
                            и долговечнее
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="X900c-battery section-dark">
        <video
            class="X900c-battery-video"
            poster="<?= $folder ?>/images/section-battery/X900c-battery-video-poster.jpg"
            autoplay
            muted
            playsinline
            loop
        >
            <source
                src="<?= $folder ?>/images/section-battery/X900c-battery-video.mp4"
                type="video/mp4"
            />
        </video>

        <div
            class="X900c-powerbank-trigger"
            data-aos="fade-in"
            data-aos-anchor-placement="center-center"
        ></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="X900c-typography-container col-xs-12 col-sm-6"
                >
                    <div
                        class="X900c-battery-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        Ёмкая батарея
                        <br />
                        2500 мАч
                    </div>

                    <div
                        class="X900c-battery-subtitle"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        длительная автономная
                        <br />
                        работа телефона
                    </div>
                </div>

                <div class="X900c-media-container col-xs-12">
                    <figure class="X900c-battery-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/X900c-battery-phone-front.png"
                            class="X900c-battery-media"
                            width="856"
                            height="459"
                            alt="Мобильный телефон Maxvi X900c"
                        />
                    </figure>
                </div>

                <div
                    class="X900c-typography-container col-xs-9 col-sm-7 col-xs-offset-3 col-sm-offset-5"
                >
                    <div
                        class="X900c-powerbank-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".X900c-powerbank-trigger"
                    >
                        Power bank
                        <br />
                        с разъёмом Type–C
                    </div>

                    <div
                        class="X900c-powerbank-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                        data-aos-anchor=".X900c-powerbank-trigger"
                    >
                        делитесь энергией
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>