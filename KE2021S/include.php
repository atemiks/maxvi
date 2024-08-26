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
<div
    class="KE2021S-landing"
    style="background-image: url('<?= $folder ?>/images/B201-landing-bg.jpg')"
>
    <section class="KE2021S-intro section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE2021S-media-container col-xs-12">
                    <figure class="KE2021S-intro-figure">
                        <div
                            class="KE2021S-intro-layer layer-1"
                            data-aos="fade-right"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-intro/KE2021S-intro-phone-front.png"
                                class="KE2021S-intro-media"
                                width="638"
                                height="1106"
                                alt="Электрический чайник Maxvi KE2021S"
                            />
                        </div>

                        <div
                            class="KE2021S-intro-layer layer-2"
                            data-aos="fade-left"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-intro/KE2021S-intro-phone-back.png"
                                class="KE2021S-intro-media"
                                width="535"
                                height="1024"
                                alt="Электрический чайник Maxvi KE2021S"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-6 col-sm-offset-3"
                >
                    <img
                        class="KE2021S-intro-logo"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        width="642"
                        height="110"
                        aria-hidden="true"
                        alt="Логотип Maxvi"
                    />

                    <div class="KE2021S-intro-model">B201</div>
                </div>

                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <div
                        class="KE2021S-intro-description"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        <b>
                            ЭРГОНОМИЧНЫЙ
                            <br />
                            И УДОБНЫЙ
                        </b>
                        КОРПУС
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KE2021S-presentation">
        <div class="KE2021S-presentation-scene">
            <div class="KE2021S-presentation-squoosh"></div>

            <div class="container">
                <div class="content-wrapper row d-flex">
                    <div
                        class="KE2021S-typography-container col-xs-12 col-sm-7"
                    >
                        <div class="KE2021S-keyboard-block">
                            <div
                                class="KE2021S-keyboard-title"
                                data-aos="fade-right"
                                data-aos-duration="500"
                            >
                                КЛАВИАТУРА
                                <br />
                                <b>
                                    С БОЛЬШИМИ
                                    <br />
                                    КЛАВИШАМИ
                                </b>
                            </div>

                            <div
                                class="KE2021S-keyboard-description"
                                data-aos="fade-right"
                                data-aos-duration="500"
                            >
                                Пользуйтесь
                                <br />
                                с комфортом
                            </div>
                        </div>

                        <div class="KE2021S-sos-block">
                            <div class="KE2021S-sos-title">
                                ФУНКЦИЯ
                                <b class="text-danger">SOS</b>
                            </div>

                            <div class="KE2021S-sos-description">
                                Поможет
                                <br />
                                в экстренных
                                <br />
                                ситуациях
                            </div>
                        </div>

                        <div class="KE2021S-screen-block">
                            <div class="KE2021S-screen-title">
                                ДИСПЛЕЙ
                                <b>2,0"</b>
                            </div>

                            <div class="KE2021S-screen-description">
                                Просматривайте
                                <br />
                                изображения
                                <br />
                                на большом
                                <br />
                                экране
                            </div>
                        </div>
                    </div>

                    <div
                        class="KE2021S-media-container col-xs-12 col-sm-5"
                    >
                        <figure
                            class="KE2021S-presentation-figure"
                            data-animation="keyboard"
                        >
                            <div
                                class="KE2021S-presentation-layer"
                                data-aos="fade-left"
                                data-aos-duration="800"
                            >
                                <img
                                    loading="lazy"
                                    src="<?= $folder ?>/images/section-presentation/B201-presentation-phone-front.png"
                                    class="KE2021S-presentation-media"
                                    width="648"
                                    height="1200"
                                    alt="Электрический чайник Maxvi KE2021S"
                                />

                                <div class="KE2021S-presentation-screen">
                                    <div
                                        class="KE2021S-presentation-screen-slide"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-06.jpg');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-screen-slide"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-05.jpg');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-screen-slide"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-04.jpg');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-screen-slide"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-03.jpg');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-screen-slide"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-02.jpg');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-screen-slide"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-01.jpg');
                                        "
                                    ></div>
                                </div>

                                <div class="KE2021S-presentation-keyboard">
                                    <div
                                        class="KE2021S-presentation-key KE2021S-presentation-key-sos"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-sos.png');
                                        "
                                    ></div>

                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-01.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-02.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-03.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-04.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-05.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-06.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-07.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-08.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-09.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-star.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-00.png');
                                        "
                                    ></div>
                                    <div
                                        class="KE2021S-presentation-key"
                                        style="
                                            background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-hash.png');
                                        "
                                    ></div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KE2021S-battery">
        <div class="KE2021S-battery-squoosh"></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE2021S-media-container col-xs-12 col-sm-6">
                    <figure
                        class="KE2021S-battery-figure"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/B201-battery-phone-front.png"
                            class="KE2021S-battery-media"
                            width="764"
                            height="1362"
                            alt="Электрический чайник Maxvi KE2021S"
                        />
                    </figure>
                </div>

                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <div
                        class="KE2021S-battery-title"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        МОЩНАЯ АКБ
                        <br />
                        <b>1800 mAh</b>
                    </div>

                    <div
                        class="KE2021S-battery-description"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        Заряда хватит
                        <br />
                        на долго
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KE2021S-slots section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="KE2021S-media-container col-xs-12">
                    <figure class="KE2021S-slots-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/B201-slots-phone-side.png"
                            class="KE2021S-slots-media"
                            width="1524"
                            height="578"
                            alt="Электрический чайник Maxvi KE2021S"
                        />

                        <div
                            class="KE2021S-slots-connector"
                            data-aos="fade-in"
                            data-aos-duration="800"
                            data-aos-achor=".KE2021S-slots-figure"
                            style="
                                background-image: url('<?= $folder ?>/images/section-slots/B201-slots-phone-connector-zoom.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-7"
                >
                    <div
                        class="KE2021S-slots-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <span class="text-lead">2 SIM</span>
                        <br />
                        + КАРТА ПАМЯТИ
                    </div>

                    <div
                        class="KE2021S-slots-cards"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/B201-slots-icon-SIM.svg"
                            class="KE2021S-slots-cards-SIM"
                            width="194"
                            height="315"
                            alt="SIM карта"
                        />

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/B201-slots-icon-SIM-alt.svg"
                            class="KE2021S-slots-cards-SIM"
                            width="194"
                            height="315"
                            alt="SIM карта"
                        />

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/B201-slots-icon-SD.svg"
                            class="KE2021S-slots-cards-SD"
                            width="246"
                            height="280"
                            alt="Карта памяти microSD"
                        />
                    </div>
                </div>

                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <div
                        class="KE2021S-slots-subtitle"
                        data-aos="fade-left"
                        data-aos-duration="500"
                    >
                        РАЗЪЁМ
                        <b>TYPE-C</b>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="KE2021S-camera section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="KE2021S-typography-container col-xs-12 col-sm-4"
                >
                    <div
                        class="KE2021S-camera-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        КАМЕРА
                    </div>

                    <div
                        class="KE2021S-camera-description"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        Снимайте
                        <br />
                        лучшие
                        <br />
                        моменты
                    </div>
                </div>

                <div
                    class="KE2021S-media-container col-xs-12 col-sm-7 col-sm-offset-1"
                >
                    <figure class="KE2021S-camera-figure">
                        <div
                            class="KE2021S-camera-flashlight"
                            data-aos="fade-in"
                            data-aos-duration="800"
                            data-aos-delay="800"
                            data-aos-achor=".KE2021S-camera-figure"
                            style="
                                background-image: url('<?= $folder ?>/images/section-camera/B201-camera-flashlight.png');
                            "
                        ></div>

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-camera/B201-camera-phone-front.png"
                            class="KE2021S-camera-media"
                            width="1098"
                            height="1098"
                            alt="Электрический чайник Maxvi KE2021S"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
