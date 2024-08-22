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
    class="B210-landing"
    style="background-image: url('<?= $folder ?>/images/B201-landing-bg.jpg')"
>
    <section class="B210-intro section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="B210-media-container col-xs-12">
                    <figure class="B210-intro-figure">
                        <div
                            class="B210-intro-layer layer-1"
                            data-aos="fade-right"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-intro/B210-intro-phone-front.png"
                                class="B210-intro-media"
                                width="638"
                                height="1106"
                                alt="Мобильный телефон Maxvi B210"
                            />
                        </div>

                        <div
                            class="B210-intro-layer layer-2"
                            data-aos="fade-left"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-intro/B210-intro-phone-back.png"
                                class="B210-intro-media"
                                width="535"
                                height="1024"
                                alt="Мобильный телефон Maxvi B210"
                            />
                        </div>
                    </figure>
                </div>

                <div
                    class="B210-typography-container col-xs-12 col-sm-6 col-sm-offset-3"
                >
                    <img
                        class="B210-intro-logo"
                        src="<?= $folder ?>/images/logo-maxvi.svg"
                        width="642"
                        height="110"
                        data-aos="fade-right"
                        data-aos-duration="500"
                        aria-hidden="true"
                        alt="Логотип Maxvi"
                    />

                    <div
                        class="B210-intro-model"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        B201
                    </div>
                </div>

                <div
                    class="B210-typography-container col-xs-12 col-sm-8 col-sm-offset-4"
                >
                    <div
                        class="B210-intro-description"
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

    <section class="B210-presentation">
        <div class="B210-presentation-squoosh"></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B210-typography-container col-xs-12 col-sm-7"
                >
                    <div class="B210-keyboard-block">
                        <div class="B210-keyboard-title">
                            КЛАВИАТУРА
                            <br />
                            <b>
                                С БОЛЬШИМИ
                                <br />
                                КЛАВИШАМИ
                            </b>
                        </div>

                        <div class="B210-keyboard-description">
                            Пользуйтесь
                            <br />
                            с комфортом
                        </div>
                    </div>

                    <div class="B210-sos-block">
                        <div class="B210-sos-title">
                            ФУНКЦИЯ
                            <b class="text-danger">SOS</b>
                        </div>

                        <div class="B210-sos-description">
                            Поможет
                            <br />
                            в экстренных
                            <br />
                            ситуациях
                        </div>
                    </div>

                    <div class="B210-screen-block">
                        <div class="B210-screen-title">
                            ДИСПЛЕЙ
                            <b>2,0"</b>
                        </div>

                        <div class="B210-screen-description">
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

                <div class="B210-media-container col-xs-12 col-sm-5">
                    <figure
                        class="B210-presentation-figure"
                        data-animation="keyboard"
                    >
                        <div
                            class="B210-presentation-layer"
                            data-aos="fade-left"
                            data-aos-duration="800"
                        >
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/section-presentation/B201-presentation-phone-front.png"
                                class="B210-presentation-media"
                                width="648"
                                height="1200"
                                alt="Мобильный телефон Maxvi B210"
                            />

                            <div class="B210-presentation-screen">
                                <div
                                    class="B210-presentation-screen-slide"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-06.jpg');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-screen-slide"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-05.jpg');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-screen-slide"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-04.jpg');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-screen-slide"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-03.jpg');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-screen-slide"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-02.jpg');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-screen-slide"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/screen/B201-presentation-phone-screen-media-01.jpg');
                                    "
                                ></div>
                            </div>

                            <div class="B210-presentation-keyboard">
                                <div
                                    class="B210-presentation-key B210-presentation-key-sos"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-sos.png');
                                    "
                                ></div>

                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-01.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-02.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-03.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-04.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-05.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-06.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-07.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-08.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-09.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-star.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
                                    style="
                                        background-image: url('<?= $folder ?>/images/section-presentation/keyboard/B201-presentation-phone-key-00.png');
                                    "
                                ></div>
                                <div
                                    class="B210-presentation-key"
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
    </section>

    <section class="B210-battery">
        <div class="B210-battery-squoosh"></div>

        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="B210-media-container col-xs-12 col-sm-6">
                    <figure class="B210-battery-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-battery/B201-battery-phone-front.png"
                            class="B210-battery-media"
                            width="764"
                            height="1362"
                            alt="Мобильный телефон Maxvi B210"
                        />
                    </figure>
                </div>

                <div
                    class="B210-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <div
                        class="B210-battery-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        МОЩНАЯ АКБ
                        <br />
                        <b>1800 mAh</b>
                    </div>

                    <div
                        class="B210-battery-description"
                        data-aos="fade-right"
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

    <section class="B210-slots section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div class="B210-media-container col-xs-12">
                    <figure
                        class="B210-slots-figure"
                        data-aos="fade-left"
                        data-aos-duration="800"
                    >
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/B201-slots-phone-side.png"
                            class="B210-slots-media"
                            width="1524"
                            height="578"
                            alt="Мобильный телефон Maxvi B210"
                        />

                        <div
                            class="B210-slots-connector"
                            style="
                                background-image: url('<?= $folder ?>/images/section-slots/B201-slots-phone-connector-zoom.png');
                            "
                        ></div>
                    </figure>
                </div>

                <div
                    class="B210-typography-container col-xs-12 col-sm-7"
                >
                    <div
                        class="B210-slots-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        <span class="text-lead">2 SIM</span>
                        <br />
                        + КАРТА ПАМЯТИ
                    </div>

                    <div class="B210-slots-cards">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/B201-slots-icon-SIM.svg"
                            class="B210-slots-cards-SIM"
                            width="194"
                            height="315"
                            alt="SIM карта"
                        />

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/B201-slots-icon-SIM-alt.svg"
                            class="B210-slots-cards-SIM"
                            width="194"
                            height="315"
                            alt="SIM карта"
                        />

                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-slots/B201-slots-icon-SD.svg"
                            class="B210-slots-cards-SD"
                            width="246"
                            height="280"
                            alt="Карта памяти microSD"
                        />
                    </div>
                </div>

                <div
                    class="B210-typography-container col-xs-12 col-sm-7 col-sm-offset-5"
                >
                    <div
                        class="B210-slots-subtitle"
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

    <section class="B210-camera section-dark">
        <div class="container">
            <div class="content-wrapper row d-flex">
                <div
                    class="B210-typography-container col-xs-12 col-sm-4"
                >
                    <div
                        class="B210-camera-title"
                        data-aos="fade-right"
                        data-aos-duration="500"
                    >
                        КАМЕРА
                    </div>

                    <div
                        class="B210-camera-description"
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

                <div class="B210-media-container col-xs-12 col-sm-8">
                    <figure class="B210-camera-figure">
                        <img
                            loading="lazy"
                            src="<?= $folder ?>/images/section-camera/B201-camera-phone-front.png"
                            class="B210-camera-media"
                            width="1098"
                            height="1098"
                            alt="Мобильный телефон Maxvi B210"
                        />
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
