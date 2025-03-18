<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Ibrahim Konta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 2.5em;
}

header p {
    margin: 5px 0 0;
    font-size: 1.2em;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 20px 0 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1.1em;
}

.section {
    padding: 60px 20px;
    background-color: #fff;
    margin: 20px 0;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    background-color: #f4f4f4;
    margin: 10px 0;
    padding: 10px;
    border-radius: 4px;
}

.job {
    margin-bottom: 20px;
}

.job h3 {
    margin: 0;
    font-size: 1.5em;
}

.job p {
    margin: 5px 0;
}

button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
    font-size: 1em;
}

button:hover {
    background-color: #555;
}

.hidden {
    display: none;
}

.social-links {
    margin-top: 20px;
}

.social-links a {
    color: #333;
    margin: 0 10px;
    font-size: 1.5em;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    margin-top: 40px;
}
</style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Ibrahim Konta</h1>
            <p>Ingénieur en Génie Logiciel</p>
            <nav>
                <ul>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#experience">Expérience</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="about" class="section">
        <div class="container">
            <h2>À propos de moi</h2>
            <p>Je suis un ingénieur en génie logiciel passionné par le développement web et les technologies modernes.</p>
            <button id="moreAbout">En savoir plus</button>
            <p id="extraAbout" class="hidden">J'aime résoudre des problèmes complexes et créer des solutions innovantes qui améliorent la vie des utilisateurs.</p>
        </div>
    </section>

    <section id="skills" class="section">
        <div class="container">
            <h2>Compétences</h2>
            <ul>
                <li>HTML, CSS, JavaScript</li>
                <li>PHP, Python, Java, C, C++</li>
                <li>Frameworks : Angular, React.js, Node.js, Spring Boot</li>
                <li>Bases de données : MySQL, PostgreSQL</li>
                <li>Gestion de projet : Agile, Scrum</li>
            </ul>
        </div>
    </section>

    <section id="experience" class="section">
        <div class="container">
            <h2>Expérience</h2>
            <div class="job">
                <h3>Développeur Full Stack - Startup Tech Innov</h3>
                <p>2023 - Présent</p>
                <p>Conception et développement d’applications web et mobiles.</p>
            </div>
            <div class="job">
                <h3>Gérant - Boutique Familiale</h3>
                <p>2020 - 2023</p>
                <p>Gestion des ventes, comptabilité et relation client.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2>Contact</h2>
            <p>Email : <a href="mailto:kontaibrahim044@gmail.com">kontaibrahim044@gmail.com</a></p>
            <p>Téléphone : +213 779 886 817</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Ibrahim Konta - Tous droits réservés</p>
        </div>
    </footer>

    <script src="script.js"></script>
    <script>

document.getElementById('moreAbout').addEventListener('click', function() {
    const extraAbout = document.getElementById('extraAbout');
    if (extraAbout.classList.contains('hidden')) {
        extraAbout.classList.remove('hidden');
        this.textContent = 'Moins';
    } else {
        extraAbout.classList.add('hidden');
        this.textContent = 'En savoir plus';
    }
});
    </script>
</body>
</html>