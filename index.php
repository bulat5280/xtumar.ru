<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesignPro - Премиальные дизайн-ресурсы</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 2rem;
            font-weight: 800;
            color: white;
            text-decoration: none;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #4ecdc4;
            transform: translateY(-2px);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #4ecdc4;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: float 20s infinite linear;
        }

        @keyframes float {
            0% { transform: translate(-50px, -50px) rotate(0deg); }
            100% { transform: translate(-50px, -50px) rotate(360deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 900;
            color: white;
            margin-bottom: 1rem;
            line-height: 1.2;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.5rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        /* Sections */
        .section {
            padding: 5rem 0;
            background: white;
            margin: 2rem 0;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1);
        }

        .section h2 {
            font-size: 3rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 2.5rem;
            border-radius: 20px;
            color: white;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            animation: sparkle 10s infinite linear;
        }

        @keyframes sparkle {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .service-card:nth-child(2) {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .service-card:nth-child(3) {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }

        .service-card:nth-child(4) {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        }

        .service-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        }

        .service-card h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            z-index: 2;
        }

        .service-card p {
            font-size: 1rem;
            opacity: 0.9;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .price {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1rem;
            position: relative;
            z-index: 2;
        }

        .price-note {
            font-size: 0.9rem;
            opacity: 0.8;
            position: relative;
            z-index: 2;
        }

        /* Rules Section */
        .rules-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .rule-item {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 2rem;
            border-radius: 15px;
            color: white;
            border-left: 5px solid #4ecdc4;
            transition: all 0.3s ease;
        }

        .rule-item:hover {
            transform: translateX(10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .rule-item h4 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
        }

        .rule-item h4::before {
            content: '✓';
            background: #4ecdc4;
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 0.9rem;
            font-weight: bold;
        }

        /* Contact Section */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .contact-item {
            text-align: center;
            padding: 2rem;
            background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);
            border-radius: 20px;
            color: white;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .contact-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }

        .contact-item h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .contact-item a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .contact-item a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background: rgba(0,0,0,0.9);
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .section h2 {
                font-size: 2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .rules-list {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Loading animation */
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-in forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<?php
// Данные для сайта
$company_name = "xTumar";
$company_description = "Мы создаем премиальные дизайн-ресурсы для современных брендов";

$services = [
    [
        'title' => 'Логотипы и Айдентика',
        'description' => 'Уникальные логотипы и полная система фирменного стиля для вашего бренда',
        'price' => 'от 15 000₽',
        'note' => 'Включает 3 концепта'
    ],
    [
        'title' => 'Веб-дизайн',
        'description' => 'Современные и функциональные дизайны сайтов с фокусом на пользовательский опыт',
        'price' => 'от 25 000₽',
        'note' => 'Адаптивный дизайн'
    ],
    [
        'title' => 'Упаковка и Полиграфия',
        'description' => 'Дизайн упаковки, визиток, брошюр и другой печатной продукции',
        'price' => 'от 8 000₽',
        'note' => 'Готово к печати'
    ],
    [
        'title' => 'Графические шаблоны',
        'description' => 'Готовые шаблоны для социальных сетей, презентаций и маркетинговых материалов',
        'price' => 'от 3 000₽',
        'note' => 'Редактируемые файлы'
    ]
];

$rules = [
    [
        'title' => 'Оплата и сроки',
        'description' => 'Оплата производится в два этапа: 50% предоплата, 50% после утверждения финального дизайна. Стандартные сроки выполнения 5-10 рабочих дней.'
    ],
    [
        'title' => 'Правки и доработки',
        'description' => 'В стоимость включено до 3 раундов правок. Дополнительные правки оплачиваются отдельно по тарифу 1500₽/час.'
    ],
    [
        'title' => 'Передача файлов',
        'description' => 'Готовые файлы передаются в форматах AI, PSD, PNG, JPG. Исходники остаются у клиента после полной оплаты проекта.'
    ],
    [
        'title' => 'Авторские права',
        'description' => 'После полной оплаты все права на дизайн переходят к клиенту. Мы оставляем право использовать работы в портфолио.'
    ],
    [
        'title' => 'Отмена заказа',
        'description' => 'При отмене заказа заказчиком предоплата не возвращается. При отмене по вине исполнителя - полный возврат средств.'
    ],
    [
        'title' => 'Гарантии качества',
        'description' => 'Мы гарантируем высокое качество работ и соблюдение всех технических требований для дальнейшего использования.'
    ]
];

$contacts = [
    'email' => 'zgumeenik@proton.me'
];
?>

<!-- Header -->
<header>
    <nav class="container">
        <a href="#" class="logo"><?php echo $company_name; ?></a>
        <ul class="nav-links">
            <li><a href="#about">О нас</a></li>
            <li><a href="#services">Услуги</a></li>
            <li><a href="#rules">Правила</a></li>
            <li><a href="#contact">Контакты</a></li>
        </ul>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content fade-in">
        <h1><?php echo $company_name; ?></h1>
        <p><?php echo $company_description; ?></p>
        <a href="#services" class="cta-button">Посмотреть услуги</a>
    </div>
</section>

<div class="container">
    <!-- About Section -->
    <section id="about" class="section fade-in">
        <h2>О нашем проекте</h2>
        <div style="max-width: 800px; margin: 0 auto; text-align: center; font-size: 1.2rem; line-height: 1.8; color: #555;">
            <p style="margin-bottom: 2rem;">
                <strong>DesignPro</strong> — это команда талантливых дизайнеров, которая специализируется на создании премиальных дизайн-ресурсов для современного бизнеса. Мы объединяем креативность с функциональностью, создавая решения, которые не только красивы, но и эффективны.
            </p>
            <p style="margin-bottom: 2rem;">
                Наша миссия — помочь брендам выделиться в конкурентной среде через уникальный и запоминающийся визуальный язык. Мы работаем с компаниями любого размера: от стартапов до крупных корпораций.
            </p>
            <p>
                За 5 лет работы мы реализовали более <strong>500 проектов</strong> и помогли десяткам брендов найти свой уникальный стиль. Наша команда постоянно следит за трендами в дизайне и использует только самые современные инструменты и технологии.
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section fade-in">
        <h2>Наши услуги</h2>
        <div class="services-grid">
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                    <div class="price"><?php echo $service['price']; ?></div>
                    <div class="price-note"><?php echo $service['note']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Rules Section -->
    <section id="rules" class="section fade-in">
        <h2>Правила работы</h2>
        <div class="rules-list">
            <?php foreach ($rules as $rule): ?>
                <div class="rule-item">
                    <h4><?php echo $rule['title']; ?></h4>
                    <p><?php echo $rule['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section fade-in">
        <h2>Контакты</h2>
        <div class="contact-info">
            <div class="contact-item">
                <span class="contact-icon">📧</span>
                <h4>Email</h4>
                <a href="mailto:<?php echo $contacts['email']; ?>"><?php echo $contacts['email']; ?></a>
            </div>
        </div>
    </section>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; 2025 <?php echo $company_name; ?>. Все права защищены.</p>
        <p>Создаем дизайн, который работает на ваш успех</p>
    </div>
</footer>

<script>
    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add scroll effect to header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(20px)';
        } else {
            header.style.background = 'rgba(255, 255, 255, 0.1)';
            header.style.backdropFilter = 'blur(10px)';
        }
    });

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.8s ease';
        observer.observe(el);
    });
</script>
</body>
</html>
