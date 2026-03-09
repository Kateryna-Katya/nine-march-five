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
            <h1 data-aos="fade-up">Отказ от ответственности (Дисклеймер)</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                <strong>Общая информация:</strong> Все материалы, кейсы и технические сведения,
                опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно
                информационно-ознакомительный характер. Они представляют собой авторский взгляд на 
                <strong>технологии нового поколения</strong> и не должны рассматриваться как 
                персональная инвестиционная рекомендация, профессиональный юридический совет или 
                публичная оферта.
            </p>

            <p data-aos="fade-up">
                <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> стремится 
                предоставлять актуальные данные о разработке AI-ассистентов, однако мы не даем 
                никаких явных или подразумеваемых гарантий относительно точности или полноты 
                информации. Упоминания <strong>программ пассивного дохода</strong> или 
                эффективности конкретных ботов являются примерами реализации и не гарантируют 
                аналогичных результатов для каждого пользователя. Ваши итоги зависят от 
                рыночных условий в <strong>Италии и ЕС</strong>, а также от корректности 
                интеграции цифровой инфраструктуры.
            </p>

            <p data-aos="fade-up">
                <strong>Ограничение ответственности:</strong> Администрация <strong><?= $fullDomain ?></strong> 
                и её эксперты не несут ответственности за любые прямые или косвенные убытки, 
                возникшие в результате использования предложенных <strong>решений, которые меняют 
                правила игры</strong>. Вся ответственность за внедрение автоматизации и 
                использование <strong>AI-инструментов для реальных задач</strong> лежит 
                исключительно на пользователе. Мы рекомендуем всегда <strong>оценить перспективы 
                проекта</strong> перед началом масштабной разработки.
            </p>

            <p data-aos="fade-up">
                <strong>Предупреждение о рисках:</strong> Любая стратегия роста на базе инноваций 
                сопряжена с техническими и рыночными рисками. Перед принятием важных 
                стратегических решений мы настоятельно советуем провести собственное 
                исследование и получить <strong>бесплатную консультацию по всем вопросам</strong> 
                у наших специалистов или независимых экспертов.
            </p>

            <p data-aos="fade-up">
                <strong>Подтверждение пользователя:</strong> Продолжая работу с платформой 
                <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, 
                вы действуете осознанно и принимаете условия данного отказа от ответственности в полном объеме.
            </p>

            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid var(--glass-border);">
                <p style="font-size: 0.9rem; color: var(--text-muted);">Последнее обновление: Март 2026</p>
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