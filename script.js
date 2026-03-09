/**
 * * Тема: Разработка AI-ботов
 * Домен: <?= $fullDomain ?>
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. ИНИЦИАЛИЗАЦИЯ AOS (Анимации при скролле) ---
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50
    });

    // --- 2. МОБИЛЬНОЕ МЕНЮ ---
    const burger = document.getElementById('burger');
    const closeMenu = document.getElementById('closeMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuLinks = document.querySelectorAll('.mobile-menu__list a');

    const toggleMenu = () => {
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    if (burger) burger.addEventListener('click', toggleMenu);
    if (closeMenu) closeMenu.addEventListener('click', toggleMenu);
    
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        });
    });

    // --- 3. СКРОЛЛ ХЕДЕРА ---
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // --- 4. THREE.JS: ЦИФРОВОЙ РАЗУМ (HERO SECTION) ---
    const initDigitalMind = () => {
        const container = document.getElementById('digital-mind-canvas');
        if (!container || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 1000);
        camera.position.z = 2.2;

        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(container.offsetWidth, container.offsetHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        container.appendChild(renderer.domElement);

        // Геометрия сферы
        const geometry = new THREE.IcosahedronGeometry(1, 4);
        
        // Точки (частицы)
        const pointsMaterial = new THREE.PointsMaterial({
            color: 0xa855f7,
            size: 0.015,
            transparent: true,
            opacity: 0.8,
            blending: THREE.AdditiveBlending
        });
        const points = new THREE.Points(geometry, pointsMaterial);
        scene.add(points);

        // Сетка (связи)
        const wireMaterial = new THREE.MeshBasicMaterial({
            color: 0xa855f7,
            wireframe: true,
            transparent: true,
            opacity: 0.1
        });
        const wireframe = new THREE.Mesh(geometry, wireMaterial);
        scene.add(wireframe);

        // Интерактив мыши
        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX - window.innerWidth / 2) / 1000;
            mouseY = (e.clientY - window.innerHeight / 2) / 1000;
        });

        const animate = () => {
            requestAnimationFrame(animate);
            points.rotation.y += 0.0015;
            points.rotation.x += 0.0008;
            wireframe.rotation.y += 0.0015;
            wireframe.rotation.x += 0.0008;

            // Плавное следование за мышью
            scene.rotation.y += 0.05 * (mouseX - scene.rotation.y);
            scene.rotation.x += 0.05 * (mouseY - scene.rotation.x);

            renderer.render(scene, camera);
        };
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = container.offsetWidth / container.offsetHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.offsetWidth, container.offsetHeight);
        });
    };

    // Динамическая загрузка Three.js для оптимизации
    const script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js';
    script.onload = initDigitalMind;
    document.head.appendChild(script);

    // --- 5. ВАЛИДАЦИЯ ФОРМЫ И КАПЧА ---
    const contactForm = document.getElementById('contactForm');
    const phoneInput = document.getElementById('phoneInput');
    const captchaLabel = document.getElementById('captchaQuestion');
    
    // Ограничение ввода телефона (только цифры и +)
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^\d+]/g, '');
        });
    }

    // Генерация математической капчи
    const n1 = Math.floor(Math.random() * 10) + 1;
    const n2 = Math.floor(Math.random() * 10) + 1;
    const correctSum = n1 + n2;
    if (captchaLabel) captchaLabel.innerText = `${n1} + ${n2} = `;

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAnswer = parseInt(document.getElementById('captchaAnswer').value);

            if (userAnswer !== correctSum) {
                alert('Пожалуйста, решите пример правильно.');
                return;
            }

            const btn = contactForm.querySelector('button');
            const originalText = btn.innerText;
            btn.innerText = 'Отправка...';
            btn.disabled = true;

            // Имитация AJAX-запроса
            setTimeout(() => {
                document.getElementById('formSuccess').classList.add('active');
                contactForm.reset();
                btn.innerText = originalText;
                btn.disabled = false;
            }, 1500);
        });
    }

    // --- 6. COOKIE POPUP ---
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (cookiePopup && !localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 3000);
    }

    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('cookiesAccepted', 'true');
            cookiePopup.classList.remove('active');
        });
    }

    // --- 7. MICRO-ANIMATIONS (Anime.js) ---
    // Логотип
    const logo = document.querySelector('.logo');
    if (logo) {
        logo.addEventListener('mouseenter', () => {
            anime({
                targets: '.logo__icon',
                rotate: '1turn',
                scale: [1, 1.2, 1],
                duration: 1000,
                easing: 'easeInOutQuart'
            });
        });
    }

    // Карточки решений (подсветка номера)
    const solutionCards = document.querySelectorAll('.solution-card');
    solutionCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            anime({
                targets: card.querySelector('.solution-card__number'),
                translateY: [-5, 0],
                opacity: [0.05, 0.2],
                duration: 500,
                easing: 'easeOutQuad'
            });
        });
    });

    // --- 8. ПЛАВНЫЙ СКРОЛЛ ДЛЯ ВСЕХ ССЫЛОК ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 70,
                    behavior: 'smooth'
                });
            }
        });
    });
});