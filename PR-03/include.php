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
//$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/parallax.min.js');

// Анимация
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/gsap.min.js');
$this->addExternalJS(SITE_TEMPLATE_PATH . '/js/gsap3/ScrollTrigger.js');

//Scripts
$this->addExternalJS($folder . 'js/main.js');

?>
<div class="PR03-landing">
    <section class="PR03-intro">
        <div class="PR03-intro-container container">
            <div class="PR03-intro-content content-wrapper row">
                <div
                    class="PR03-intro-media-container col-xs-12 col-sm-6"
                >
                    <figure class="PR03-intro-figure">
                        <img
                            src="<?= $folder ?>/images/section-intro/PR03-intro-fm-front.png"
                            width="612"
                            height="775"
                            alt="Черный компактный AM/FM радиоприёмник Maxvi PR 03"
                            class="PR03-intro-media"
                        />
                    </figure>
                </div>

                <div
                    class="PR03-intro-fm-container col-xs-12 col-sm-5 col-md-4 col-sm-offset-7 col-md-offset-8"
                >
                    <div class="PR03-intro-block PR03-intro-fm">
                        <div class="PR03-intro-model">
                            <img
                                loading="lazy"
                                src="<?= $folder ?>/images/logo-maxvi.svg"
                                width="133"
                                height="22"
                                alt="Логотип Maxvi"
                                class="PR03-intro-logo"
                            />
                            <br />
                            PR-03
                        </div>

                        <div class="PR03-intro-title">
                            КОМПАКТНЫЙ
                            <br />
                            AM/FM
                            <br />
                            РАДИОПРИЁМНИК
                        </div>
                    </div>
                </div>

                <div
                    class="PR03-intro-antenna-container PR03-typography-container col-xs-12 col-sm-6"
                >
                    <div class="PR03-intro-block PR03-intro-antenna">
                        <div class="PR03-intro-title">
                            СКЛАДНАЯ
                            <br />
                            ТЕЛЕСКОПИЧЕСКАЯ
                            <br />
                            АНТЕННА
                        </div>

                        <div class="PR03-intro-subtitle">
                            для лучшего приёма сигнала
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="PR03-controls">
        <div class="PR03-controls-container container">
            <div class="PR03-controls-content content-wrapper row">
                <div
                    class="PR03-media-container col-xs-12 col-sm-4 col-sm-offset-2"
                >
                    <figure class="PR03-controls-figure">
                        <img
                            loading="lazy"
                            src="files/images/section-controls/PR03-controls-fm-front.png"
                            width="1058"
                            height="504"
                            alt="Механическая настройка станций и регулировка громкости в FM/AM радиоприёмнике Maxvi PR 03"
                            class="PR03-controls-media"
                        />
                    </figure>
                </div>

                <div
                    class="PR03-typography-container col-xs-12 col-sm-6"
                >
                    <div class="PR03-controls-block">
                        <div class="PR03-title">
                            МЕХАНИЧЕСКАЯ НАСТРОЙКА
                            <br />
                            СТАНЦИЙ И РЕГУЛИРОВКА
                            <br />
                            ГРОМКОСТИ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
