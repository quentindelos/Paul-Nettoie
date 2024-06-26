<?php
session_start();
require_once('includes/AccessDB.php');


if(isset($_POST['send'])){
    require('includes/PHPMailer-Files/script.php');
    $subject = "Reception d'un mail";
    $message = "Nous avons bien reçu votre demande. Merci de patienter.";
    $email = htmlspecialchars($_POST['email']);
    sendMail($email, $subject, $message);
}
?>

<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="shortcut icon" href="styles/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paul'Nettoie</title>
</head>
<body>
<!-- ------------------ Header ------------------ -->
<div class="openBar">
        <i class="fas fa-bars" onclick="openmenu()"></i>
    </div>
    <div id="header" onclick="closemenu()">
        <div class="container">
            <nav>
                <h1 class="logo"><u><a href="/"><span>Paul</span>'Nettoie</a></u></h1>
                <ul id="sidemenu">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#about">Présentation</a></li>
                    <li><a href="#knowledge">Prestations</a></li>
                    <li><a href="#portfolio">Réalisations</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="btnscroll">
        <a href="#" title="Remonte en haut de la page">
            <i class="fa-solid fa-angles-up"></i>
        </a>
    </div>
<!-- ------------------ Présentation ------------------ -->
    <div id="about" onclick="closemenu()">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="styles/images/presentation.jpg" alt="photo de Quentin Delos">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">Qui sommes-nous ?</h1>
                    <br>
                    <p>Bonjour, je m'appelle Jean Dupont. Depuis mon enfance, j'ai toujours eu une passion pour aider les autres et contribuer à leur bien-être. Ayant grandi dans une famille où le service aux autres était valorisé, j'ai appris l'importance de rendre la vie des gens plus agréable et plus facile. Mon parcours professionnel m'a conduit à explorer divers domaines, mais c'est dans les prestations de services aux personnes que j'ai trouvé ma véritable vocation.</p>
                    <br>
                    <p>Mon objectif est de fournir des services de qualité qui répondent aux besoins spécifiques de chaque client. Que ce soit pour le jardinage, le nettoyage ou le débarras, je m'engage à offrir un travail soigné et personnalisé. J'aime savoir que je peux faire une différence dans la vie quotidienne de mes clients, leur apporter un peu de répit et leur permettre de profiter pleinement de leur temps libre.</p>
                    <br>
                    <p>Chaque jour, je m'efforce d'améliorer mes compétences et de m'adapter aux nouvelles attentes, toujours avec le sourire et une attitude positive. J'espère avoir l'opportunité de travailler avec vous et de vous montrer combien les petites attentions peuvent faire une grande différence.</p>
                </div>
            </div>
        </div>
    </div>
<!-- ------------------ Prestations ------------------ -->
    <div id="knowledge" onclick="closemenu()">
        <div class="container">
            <h1 class="sub-title">Prestations</h1>
            <div class="knowledge-list">
                <div>
                    <i class="fas fa-seedling"></i>
                    <h2>Jardinage</h2>
                    <hr><br>
                        <ul>
                            <li>Entretien de jardins</li>
                            <li>Taille de haies</li>
                            <li>Tonte de pelouse</li>
                        </ul>
                </div>
                <div>
                    <i class="fas fa-broom"></i>
                    <h2>Nettoyage</h2>
                    <hr><br>
                        <ul>
                            <li>Maisons</li>
                            <li>Appartements</li>
                            <li>Bureaux</li>
                        </ul>
                </div>
                <div>
                    <i class="fa-solid fa-truck"></i>
                    <h2>Débarras</h2>
                    <hr><br>
                        <ul>
                            <li>Greniers</li>
                            <li>Caves</li>
                            <li>Garages</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
<!-- ------------------ Réalisations ------------------ -->
    <div id="portfolio" onclick="closemenu()">
        <div class="container">
            <h1 class="sub-title">Réalisations</h1>
            <div class="work-list">
                <div class="work">
                    <img src="styles/images/prestation1.jpg" alt="image de ma guitare">
                    <div class="layer">
                        <h3>Guitare</h3>
                        <p>Passioné de rock et de metal.<br>Je me suis mis à la guitare en 2022.</p>
                    </div>
                </div>
                <div class="work">
                    <img src="styles/images/prestation2.jpg" alt="Creality Ender 3 V2 custom">
                    <div class="layer">
                        <h3 title="Conception assistée par ordinateur">C.A.O</h3>
                        <p>Comme le bricolage, la Conception Assistée par Ordinateur fait partie de mes passe-temps. J'aime créer mon projet de A à Z et.</p>
                    </div>
                </div>
                <div class="work">
                    <img src="styles/images/prestation3.jpg" alt="Salle de fitness">
                    <div class="layer">
                        <h3>Sport</h3>
                        <p>J'ai commencé par du foot, puis rapidement je me suis mis aux arts martiaux.<br>J'ai enchainé avec le karaté pour ensuite faire la boxe Thaïlandaise.<br>Récemment, je suis inscrit dans une salle de musculation.</p>
                    </div>
                </div>
                <div class="work">
                    <img src="styles/images/prestation4.jpg" alt="106 S16 noire">
                    <div class="layer">
                        <h3>Peugeot 106 S16</h3>
                        <p>J'ai acheté une 106 S16 que je répare pour la remettre en superbe état.<br>N'ayant aucune formation en mécanique j'apprends au fur et à mesure sur internet et sur des forums.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="work-list">
                <div class="work">
                    <img src="styles/images/prestation5.jpg" alt="image de ma guitare">
                    <div class="layer">
                        <h3>Guitare</h3>
                        <p>Passioné de rock et de metal.<br>Je me suis mis à la guitare en 2022.</p>
                    </div>
                </div>
                <div class="work">
                    <img src="styles/images/prestation6.jpg" alt="Creality Ender 3 V2 custom">
                    <div class="layer">
                        <h3 title="Conception assistée par ordinateur">C.A.O</h3>
                        <p>Comme le bricolage, la Conception Assistée par Ordinateur fait partie de mes passe-temps. J'aime créer mon projet de A à Z et.</p>
                    </div>
                </div>
                <div class="work">
                    <img src="styles/images/prestation7.jpg" alt="Salle de fitness">
                    <div class="layer">
                        <h3>Sport</h3>
                        <p>J'ai commencé par du foot, puis rapidement je me suis mis aux arts martiaux.<br>J'ai enchainé avec le karaté pour ensuite faire la boxe Thaïlandaise.<br>Récemment, je suis inscrit dans une salle de musculation.</p>
                    </div>
                </div>
                <div class="work">
                    <img src="styles/images/prestation8.jpg" alt="106 S16 noire">
                    <div class="layer">
                        <h3>Peugeot 106 S16</h3>
                        <p>J'ai acheté une 106 S16 que je répare pour la remettre en superbe état.<br>N'ayant aucune formation en mécanique j'apprends au fur et à mesure sur internet et sur des forums.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ------------------ Contact ------------------ -->
    <div id="contact" onclick="closemenu()">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contactez-nous</h1>
                    <p><a href="mailto:contact@paul-nettoie.fr" target="_blank" title="Clique pour m'envoyer un mail directement"><i class="fa-solid fa-envelope"></i>contact@paul-nettoie.fr</a></p>
                    <p><a href="tel:+33783667334" title="Mon téléphone portable pro"><i class="fa-solid fa-phone-volume"></i>07 83 66 73 34</a></p>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/delosquentin" target="_blank" title="Mon profil Linkedin"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/quentin.pdf" target="_blank" title="Mon profil Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/quentin.deIos" target="_blank" title="Mon profil Facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.youtube.com/@quentin_delos" target="_blank" title="Ma chaine YouTube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <div class="downloadPdf">
                        <a href="/src/CV_Quentin_DELOS.pdf" download class="btn" title="Clique pour télécharger la brochure des services">Télécharger la brochure des services<i class="fa-solid fa-file-pdf"></i></a>
                    </div>
                </div>
                <div class="contact-right">
                    <form method="POST">
                        <input type="text" name="name" placeholder="Votre nom, prénom" maxlength="50" required>
                        <input type="email" name="email" placeholder="Votre email" maxlength="90" required>
                        <textarea type="text" rows="6" name="message" placeholder="Votre message" maxlength="1000" required></textarea>
                        <button type="submit" name="send" class="btn">Envoyer un message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- ------------------ Footer ------------------ -->
    <div class='footer' onclick='closemenu()'>
        <p>Made by Quentin Delos</p>
        <p>&copy; 2024 Prestations de Services aux Personnes. Tous droits réservés.</p>
    </div>
    <script src="scripts/index.js"></script>
</body>
</html>