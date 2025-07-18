<?php include_once './assets/layout/doctype.php' ?>

    <title>Page d'accueil</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header>
        <h1>
            <a href="./">
               Bienvenue sur ma page d'accueil 
            </a>
        </h1>
        <nav>
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#a-propos">À propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section aria-label="Accueil">
            <h2>Accueil</h2>
            <p>HELLO WORLD</p>
            <p>Ceci est la section d'accueil.</p>
        </section>
        <section aria-label="A-propos">
            <h2>À propos</h2>
            <p>Ceci est la section à propos.</p>
        </section>
        <section aria-label="Services">
            <h2>Services</h2>
            <p>Ceci est la section services.</p>
        </section>
        <section aria-label="contact">
            <h2>Contact</h2>
            <p>Ceci est la section contact.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Mon Site Web. Tous droits réservés.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
