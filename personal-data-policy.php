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
            <h1 data-aos="fade-up">Политика обработки персональных данных</h1>

            <h2 data-aos="fade-up">1. Общие положения</h2>
            <p data-aos="fade-up" data-aos-delay="100">
                Настоящая политика (далее — «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые инновационной платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), 
                и устанавливает меры по обеспечению безопасности этих данных в рамках создания 
                передовой цифровой инфраструктуры.
            </p>
            <p data-aos="fade-up">
                1.1. Важнейшей целью Оператора является соблюдение прав и свобод человека при
                обработке его персональных данных, включая защиту права на неприкосновенность 
                частной жизни, личную и семейную тайну.
            </p>
            <p data-aos="fade-up">
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            

            <h2 data-aos="fade-up">2. Основные понятия</h2>
            <ul data-aos="fade-up">
                <li><strong>Веб-сайт</strong> — совокупность графических материалов, программ для ЭВМ и баз данных, обеспечивающих доступность ресурсов по адресу <strong><?= $fullDomain ?></strong>.</li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li><strong>Персональные данные</strong> — любая информация, относящаяся к определенному Пользователю.</li>
                <li><strong>Обработка данных</strong> — любое действие с данными, от сбора до уничтожения, с использованием AI-инструментов или без них.</li>
                <li><strong>Безопасность</strong> — защита данных от неправомерного доступа в соответствии с мировыми стандартами.</li>
            </ul>

            <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
            <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Фамилия, имя, отчество;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам Италии / ЕС).</li>
                    </ul>
                </li>
                <li>
                    <strong>Автоматический сбор:</strong>
                    <ul>
                        <li>Обезличенные данные о посетителях (cookie) для анализа пользовательского пути и улучшения работы платформы.</li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки</h2>
            <ul data-aos="fade-up">
                <li>Идентификация для предоставления доступа к экспертным материалам блога.</li>
                <li>Установление обратной связи для обсуждения стратегий роста на базе инноваций.</li>
                <li>Заключение договоров на разработку AI-ассистентов.</li>
                <li>Улучшение качества работы сайта и адаптация контента под запросы европейского рынка.</li>
            </ul>

            <h2 data-aos="fade-up">5. Правовые основания</h2>
            <p data-aos="fade-up">Оператор обрабатывает данные только при наличии:</p>
            <ul data-aos="fade-up">
                <li>Добровольного согласия, выраженного через формы на сайте <strong><?= $domainTitle ?></strong>.</li>
                <li>Настроек браузера, разрешающих использование файлов cookie.</li>
            </ul>

            <h2 data-aos="fade-up">6. Безопасность и хранение</h2>
            <ul data-aos="fade-up">
                <li>Оператор обеспечивает <strong>экспертную поддержку на всех этапах</strong> защиты данных в соответствии с регламентом GDPR.</li>
                <li>Данные никогда не передаются третьим лицам без законных на то оснований.</li>
                <li>Срок обработки неограничен, но согласие может быть отозвано в любой момент через email <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.</li>
            </ul>

            <h2 data-aos="fade-up">7. Заключительные положения</h2>
            <p data-aos="fade-up">
                Актуальная версия Политики <strong><?= $domainTitle ?></strong> всегда доступна по адресу <strong><?= $fullDomain ?>/personal-data-policy.php</strong>.
                По всем вопросам пишите на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
            </p>
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