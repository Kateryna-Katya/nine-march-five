<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Инновационная разработка AI-ассистентов
    </title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=%2250%22 cy=%2250%22 r=%2245%22 fill=%22none%22 stroke=%22%23a855f7%22 stroke-width=%228%22/><path d=%22M30 50 L50 70 L70 30%22 fill=%22none%22 stroke=%22%23a855f7%22 stroke-width=%228%22 stroke-linecap=%22round%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#tech" class="nav__link">Технологии</a></li>
                    <li><a href="./#cases" class="nav__link">Проекты</a></li>
                    <li><a href="./#solutions" class="nav__link">AI-Решения</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--primary">Связаться</a>
                <button class="burger" aria-label="Menu" id="burger">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Контактная информация</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Мы обеспечиваем <strong>экспертную поддержку на всех этапах</strong> разработки — от концепции до запуска вашего AI-ассистента. 
                Свяжитесь с командой <strong><?= $domainTitle ?></strong>, чтобы переосмыслить подход к развитию вашего бизнеса. 
                Наши специалисты в Риме готовы ответить на ваши вопросы по будням с 09:00 до 18:00 (CET).
            </p>

            <div class="contact-cards">
                <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card__icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h2>Пишите нам</h2>
                    <p>Для запросов на разработку, консалтинг и оценки перспектив проекта:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a>
                </div>

                <div class="contact-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card__icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h2>Звоните</h2>
                    <p>Прямая линия поддержки и консультаций по технологиям нового поколения:</p>
                    <a href="tel:+390697639628" class="contact-link">+39 06 9763 9628</a>
                </div>

                <div class="contact-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="contact-card__icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h2>Наш офис</h2>
                    <p>Центральный офис разработки цифровой инфраструктуры в Италии:</p>
                    <address class="contact-address">
                        Via del Corso, 18,<br>
                        00186 Roma RM,<br>
                        Italy
                    </address>
                </div>
            </div>

            <div class="contact-extra" data-aos="fade-up" data-aos-delay="500">
                <p>
                    Доступ к платформе открыт для всех стран ЕС. 
                    Вы также можете <a href="./#contact">запросить доступ</a> через форму на главной странице для моментальной связи.
                </p>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo footer__logo">
                        <span class="logo__icon"></span>
                        <span class="logo__text">
                            <?= $domainTitle ?>
                        </span>
                    </a>
                    <p class="footer__description">
                        Передовая цифровая инфраструктура для создания интеллектуальных систем. Мы строим будущее,
                        которое работает на вас.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__list">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#tech">Технологии</a></li>
                        <li><a href="./#cases">Проекты</a></li>
                        <li><a href="./#blog">Блог</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__contacts">
                        <li>
                            <span class="footer__label">Телефон:</span>
                            <a href="tel:+390697639628">+39 06 9763 9628</a>
                        </li>
                        <li>
                            <span class="footer__label">Email:</span>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a>
                        </li>
                        <li>
                            <span class="footer__label">Адрес:</span>
                            <span>Via del Corso, 18, 00186 Roma RM, Italy</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy; 2026
                    <?= $domainTitle ?>. Все права защищены. Предложение активно в странах ЕС.
                </p>
            </div>
        </div>
    </footer>
<div class="mobile-menu" id="mobileMenu">
    <button class="mobile-menu__close" id="closeMenu">&times;</button>
    <ul class="mobile-menu__list">
        <li><a href="./#hero">Главная</a></li>
        <li><a href="./#tech">Технологии</a></li>
        <li><a href="./#cases">Проекты</a></li>
        <li><a href="./#solutions">AI-Решения</a></li>
        <li><a href="./#blog">Блог</a></li>
        <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
    </ul>
</div>

<div class="cookie-popup" id="cookiePopup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button class="btn btn--primary btn--sm" id="acceptCookies">Принять</button>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>