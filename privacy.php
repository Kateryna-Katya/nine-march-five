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
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг 
                в сфере разработки AI-решений и консалтинга, так и для других взаимодействий в электронном
                формате, а также при участии клиентов в экспертных программах, обеспечивая 
                <strong>экспертную поддержку на всех этапах</strong> сотрудничества.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения. Эти изменения имеют приоритет над текущими пунктами. Наши услуги могут содержать 
                ссылки на ресурсы третьих лиц (например, API нейросетей или платежные шлюзы), которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за соблюдение
                конфиденциальности сторонними компаниями. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает персональные данные исключительно для предоставления 
                высокотехнологичных услуг: доступа к аналитической платформе, участия в стратегических сессиях 
                и внедрения инноваций. Для предотвращения утечки данных мы используем <strong>передовую цифровую инфраструктуру</strong> 
                и современные протоколы шифрования.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных составляет 75 лет. В остальных случаях компания 
                хранит данные клиента до завершения своей деятельности или до момента официального отзыва согласия.
            </p>

            <p data-aos="fade-up">
                Уничтожение или обезличивание данных осуществляется для исключения возможности их дальнейшей обработки, 
                если цель сбора была достигнута или по вашему запросу.
            </p>

            <h2 data-aos="fade-up">Техническая информация:</h2>
            <ul data-aos="fade-up">
                <li>Время доступа и IP-адрес;</li>
                <li>Источники обращения на ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>Посещаемые страницы и просмотры интерактивных блоков (включая 3D-визуализации);</li>
                <li>Техническая информация, предоставляемая браузером;</li>
                <li>Номер телефона (при совершении звонка по нашим итальянским контактам).</li>
            </ul>

            <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
            <ul data-aos="fade-up">
                <li>Сведения о запросах, отправленных через формы «Быстрый старт» или «Запросить доступ»;</li>
                <li>Данные о полученных консультациях по внедрению AI-инструментов;</li>
                <li>Произведенные платежи и иная финансовая информация в рамках законодательства Италии и ЕС.</li>
            </ul>

            

            <h2 data-aos="fade-up">Цели обработки:</h2>
            <ul data-aos="fade-up">
                <li>Предоставление экспертных услуг по автоматизации и AI-консалтингу;</li>
                <li>Учет пожеланий при разработке новых <strong>решений, которые меняют правила игры</strong>;</li>
                <li>Информирование о новых материалах в блоге и обновлениях платформы;</li>
                <li>Обеспечение оперативной технической поддержки.</li>
            </ul>

            <h2 data-aos="fade-up">Передача данных третьим лицам:</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> не передает данные клиентов сторонним лицам, за исключением случаев:
                прямого согласия пользователя, требования компетентных органов <strong>Италии</strong> или 
                в рамках процедур стратегического слияния компании.
            </p>

            <h2 data-aos="fade-up">Использование файлов cookie</h2>
            <p data-aos="fade-up">
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки 
                региона Италия), чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. 
                Вы можете в любое время отключить Cookies в настройках своего браузера.
            </p>

            <h2 data-aos="fade-up">Права пользователя (GDPR)</h2>
            <p data-aos="fade-up">
                Вы имеете право на редактирование, экспорт или полное удаление своих данных. Для реализации прав, 
                пожалуйста, свяжитесь с нашей командой по адресу: 
                <a href="mailto:hello@<?= $fullDomain ?>" style="color: var(--accent);">hello@<?= $fullDomain ?></a>.
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