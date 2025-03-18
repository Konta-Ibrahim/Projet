<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - [Votre Nom]</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Base Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
            scroll-behavior: smooth;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        header {
            background: linear-gradient(90deg, #0066cc, #004080);
            color: #fff;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 1.8rem;
            text-transform: uppercase;
            font-weight: 700;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav ul li a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        /* About Section */
        #about {
            padding: 120px 0 60px;
            text-align: center;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 20px auto;
            border: 4px solid #004080;
        }

        #about p {
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.8;
        }

        /* Projects Section */
        #projects {
            background: #f4f4f4;
            padding: 60px 0;
        }

        .project {
            display: flex;
            align-items: center;
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .project h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .project p {
            font-size: 1rem;
            color: #555;
        }

        /* Contact Section */
        #contact {
            padding: 60px 0;
            background: #fff;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        form label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input, form textarea {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        form button {
            background: #004080;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        form button:hover {
            background: #0066cc;
        }

        /* Footer */
        footer {
            text-align: center;
            background: #004080;
            color: #fff;
            padding: 20px 0;
        }

        footer p {
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .project {
                flex-direction: column;
                text-align: center;
            }

            header .container {
                flex-direction: column;
                gap: 10px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Mon Portfolio</h1>
            <nav>
                <ul>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#projects">Projets</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2>À propos de moi</h2>
            <img src="assets/images/profile.jpg" alt="Ma photo de profil" class="profile-img">
            <p>Je suis un développeur web passionné, spécialisé dans la création de solutions modernes et interactives. Mon objectif est de transformer des idées en expériences numériques attrayantes.</p>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2>Mes Projets</h2>
            <div class="project">
                <h3>Projet 1</h3>
                <p>Un site web e-commerce complet avec gestion des utilisateurs et interface réactive.</p>
            </div>
            <div class="project">
                <h3>Projet 2</h3>
                <p>Application de gestion de stock avec des fonctionnalités avancées pour les entreprises.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contactez-moi</h2>
            <form action="contact.php" method="POST">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Votre Nom. Tous droits réservés.</p>
    </footer>
</body>
</html>
