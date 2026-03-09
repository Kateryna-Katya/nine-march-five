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
            <h1 data-aos="fade-up">Условия использования</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия») представляют собой юридически обязывающий договор между вами 
                (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>. 
                Используя наш сайт и любые связанные с ним <strong>решения, которые меняют правила игры</strong>, 
                вы подтверждаете свое полное согласие с данными Условиями. 
                Если вы не согласны, вы должны немедленно прекратить использование ресурса.
            </p>

            <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
            <p data-aos="fade-up">
                Компания предоставляет Пользователю доступ к ресурсу <strong><?= $fullDomain ?></strong>, 
                включая инновационные материалы, статьи блога о разработке ботов, экспертные консультации 
                и инструменты для создания <strong>цифровой инфраструктуры</strong>. 
                Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с платформой.
            </p>

            <h2 data-aos="fade-up">2. Обязанности и права Пользователя</h2>
            <p data-aos="fade-up">
                Вы обязуетесь использовать сайт исключительно в законных целях. 
                При использовании платформы <strong><?= $domainTitle ?></strong> <strong>запрещается</strong>:
            </p>
            <ul data-aos="fade-up">
                <li>Публиковать или передавать информацию, которая нарушает авторские права или законодательство ЕС.</li>
                <li>Предпринимать действия, направленные на дестабилизацию работы <strong>технологий нового поколения</strong>, внедренных на сайте.</li>
                <li>Использовать сторонние автоматизированные скрипты для сбора данных без нашего письменного разрешения.</li>
                <li>Предоставлять недостоверные данные при запросе <strong>бесплатной консультации по всем вопросам</strong>.</li>
            </ul>

            <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
            <p data-aos="fade-up">
                Весь контент на сайте <strong><?= $fullDomain ?></strong>, включая программный код AI-визуализаций, 
                графику, логотипы и экспертные тексты, является объектом интеллектуальной собственности Компании. 
                Любое копирование или распространение контента без разрешения правообладателя строго запрещено. 
                Мы предоставляем вам доступ к материалам исключительно для личного профессионального развития.
            </p>

            <h2 data-aos="fade-up">4. Ограничение ответственности</h2>
            <p data-aos="fade-up">
                Материалы на сайте предоставляются по принципу «как есть». Мы не даем гарантий, что 
                информация является абсолютно исчерпывающей в условиях динамично меняющегося рынка 
                <strong>Италии и стран ЕС</strong>. Компания не несет ответственности за любые прямые или 
                косвенные убытки, возникшие в результате использования предложенных методологий.
            </p>

            <h2 data-aos="fade-up">5. Изменения в Условиях</h2>
            <p data-aos="fade-up">
                Мы оставляем за собой право обновлять настоящие Условия для отражения изменений в технологиях 
                или законодательстве. Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> 
                после правок означает автоматическое согласие с новой редакцией.
            </p>

            <h2 data-aos="fade-up">6. Разрешение споров</h2>
            <p data-aos="fade-up">
                Все разногласия стороны будут стремиться разрешить путем переговоров. 
                В случае недостижения согласия, спор подлежит рассмотрению в соответствии с действующим 
                законодательством по месту регистрации Компании в <strong>Италии (Рим)</strong>.
            </p>

            <h2 data-aos="fade-up">7. Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы, связанные с нашими <strong>AI-инструментами для реальных задач</strong> 
                или условиями использования, свяжитесь с нами:
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+390697639628">+39 06 9763 9628</a><br>
                <strong>Адрес:</strong> Via del Corso, 18, 00186 Roma RM, Italy
            </p>

            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid var(--glass-border);">
                <p style="font-size: 0.9rem; color: var(--text-muted);">Актуально на: Март 2026</p>
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