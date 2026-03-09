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
            <h1 data-aos="fade-up">Политика возврата средств</h1>
            
            <h2 data-aos="fade-up">Условия для оформления возврата</h2>
            <p data-aos="fade-up" data-aos-delay="100">
                Мы стремимся предоставлять <strong>решения, которые меняют правила игры</strong>, и гарантируем 
                <strong>экспертную поддержку на всех этапах</strong>. Вы можете претендовать на полный или 
                частичный возврат средств в следующих ситуациях:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание предоставленной 
                    консультации или экспертного материала существенно отличается от программы, заявленной 
                    на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности:</strong> При возникновении критических проблем в работе 
                    <strong>цифровой инфраструктуры</strong> платформы <strong><?= $fullDomain ?></strong>, 
                    которые делают доступ к материалам невозможным и не были устранены в разумные сроки.
                </li>
                <li>
                    <strong>«Период охлаждения» (Право ЕС):</strong> Если вы решили отказаться от услуг в течение 
                    14 (четырнадцати) календарных дней с момента оплаты, при условии, что вы еще не получили 
                    доступ к значительному объему материалов.
                </li>
            </ul>

            <h2 data-aos="fade-up">Процедура запроса</h2>
            <p data-aos="fade-up">
                Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, 
                пожалуйста, выполните следующие шаги:
            </p>
            <ol class="custom-list" data-aos="fade-up">
                <li>Отправьте письмо на наш официальный email: <a href="mailto:hello@<?= $fullDomain ?>" style="color: var(--accent);">hello@<?= $fullDomain ?></a>.</li>
                <li>В теме письма укажите: «Запрос на возврат средств (<?= $domainTitle ?>)».</li>
                <li>Укажите ваши данные: имя, фамилию и email, использованный при регистрации.</li>
                <li>Подробно опишите причину запроса, чтобы мы могли <strong>оценить перспективы проекта</strong> и улучшить наш сервис.</li>
                <li>Наша поддержка свяжется с вами для уточнения деталей в течение 3-х рабочих дней.</li>
            </ol>

            <h2 data-aos="fade-up">Сроки и способ возврата</h2>
            <p data-aos="fade-up">
                После одобрения запроса возврат денежных средств производится в течение 7–14 рабочих дней. 
                Средства возвращаются тем же способом, которым была совершена оплата. Обратите внимание, что 
                фактический срок зачисления может зависеть от регламента работы вашего банка в 
                <strong>Италии</strong> или стране вашего пребывания.
            </p>

            <h2 data-aos="fade-up">Исключения и ограничения</h2>
            <p data-aos="fade-up">Возврат средств не может быть осуществлен, если:</p>
            <ul data-aos="fade-up">
                <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                <li>Вы уже просмотрели или скачали более 50% материалов программы/курса.</li>
                <li>Проблемы с доступом вызваны техническими неполадками на стороне пользователя.</li>
                <li>Были нарушены условия Пользовательского соглашения <strong><?= $domainTitle ?></strong>.</li>
            </ul>

            <h2 data-aos="fade-up">Свяжитесь с нами</h2>
            <p data-aos="fade-up">
                По всем вопросам, связанным с условиями консультаций или <strong>стратегиями роста на базе инноваций</strong>, 
                пожалуйста, обращайтесь в нашу службу поддержки:
                <br><br>
                <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+390697639628">+39 06 9763 9628</a><br>
                <strong>Адрес:</strong> Via del Corso, 18, 00186 Roma RM, Italy
            </p>

            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid var(--glass-border);">
                <p style="font-size: 0.9rem; color: var(--text-muted);">Обновлено: Март 2026</p>
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