<?php
session_start();
if (!isset($_SESSION['user_email'])) { header("Location: index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excellence Business | Vin Mince & Jus Naturels</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo">EXCELLENCE <span>BUSINESS</span></div>
</header>

<section class="hero">
    <div class="hero-text">
        <h1>Le Secret d'une Silhouette Parfaite</h1>
        <p>Ne rêvez plus de votre corps idéal, créez-le avec le Vin Mince Excellence. Une solution naturelle, efficace et savoureuse conçue pour votre bien-être à Bukavu.</p>
        <a href="#commander" class="btn-hero">Je commence ma transformation</a>
    </div>
</section>

<!--naviguer moyenant ces boutom-->
<nav class="navbar">
    <ul class="nav-links">
        <li><a href="produits"> Produits</a></li>
        <li><a href="apropos">Apropos</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="location">localisation</a></li>
    </ul>
</nav>

<section class="motivation-text">
    <h2>Pourquoi choisir l'Excellence ?</h2>
    <p>Nos produits ne sont pas de simples boissons. Ce sont des alliés pour votre santé. Chaque gorgée de notre Jus Excellence vous apporte l'énergie nécessaire pour affronter vos journées avec force et éclat.</p>
</section>

<div class="gallery">
    <div class="card">
        <img src="6.jpeg" alt="Vin Mince">
        <h3 class="fade-in typewriter">Vin Mince Excellence</h3>
        <p class="fade-in">Éliminez les toxines et affinez votre taille naturellement.</p>
    </div>
    <div class="card">
        <img src="5.jpeg" alt="Jus Naturel">
        <h3 class="fade-in">Jus Excellence</h3>
        <p class="fade-in">Le goût pur du fruit, sans additifs chimiques.</p>
    </div>
</div>

<section class="arguments-supplementaires">
    <h1>Redécouvrez Votre Corps avec l'Excellence</h1>
    <p style="text-align: center; max-width: 800px; margin: 20px auto; padding: 0 20px;">
        Pourquoi choisir entre santé et plaisir ? Le <strong>Vin Mince Excellence</strong> est bien plus qu'une boisson : c'est votre partenaire quotidien pour brûler les graisses, affiner votre silhouette et retrouver une énergie débordante sans produits chimiques.
        <br><br>
        <strong>Rejoignez des centaines de clients satisfaits à Bukavu qui ont déjà transformé leur vie !</strong>
    </p>

    <section class="arguments-vente">
        <div class="argument-card">
            <h3>Éclat Naturel</h3>
            <p>Nos Jus Excellence purifient votre sang et redonnent de l'éclat à votre peau grâce aux vitamines extraites de nos meilleurs fruits locaux.</p>
        </div>
        <div class="argument-card">
            <h3>Brûle-Graisse Actif</h3>
            <p>Le Vin Mince agit directement sur les zones rebelles. Une cure naturelle pour une perte de poids saine et durable, sans effet "yoyo".</p>
        </div>
        <div class="argument-card">
            <h3>Vitalité de Fer</h3>
            <p>Dites adieu à la fatigue matinale. Nos cures renforcent votre système immunitaire pour une protection maximale toute l'année.</p>
        </div>
    </section>
</section>

<div class="motivation-finale">
    <h2 class="fade-in typewriter">Le meilleur moment pour prendre soin de soi, c'est MAINTENANT.</h2>
    <p class="fade-in">Ne remettez pas votre santé à demain. Chaque bouteille d'Excellence est une étape de plus vers la meilleure version de vous-même.</p>
    
    <div class="stock-alert">
        <div class="stock-bar">
            <div id="stock-progress" class="stock-progress"></div>
        </div>
        <p id="stock-text">Attention : Plus que <strong>12</strong> bouteilles de Vin Mince en stock à Bukavu !</p>
         <img src="9.jpeg" alt="">
    </div>
    <p><em>Livraison rapide disponible partout à Bukavu </em></p>
</div>

<section class="faq-section">
    <h2 class="section-title">Questions Fréquentes</h2>
    <div class="faq-container">
        <div class="faq-item">
            <button class="faq-question">Quelle est la durée d'une cure de Vin Mince ? <span>+</span></button>
            <div class="faq-answer">
                <p>Pour des résultats visibles et durables, nous recommandons une cure de 14 à 21 jours consécutifs.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Vos jus contiennent-ils du sucre ajouté ? <span>+</span></button>
            <div class="faq-answer">
                <p>Absolument pas. Le seul sucre présent est le fructose naturel du fruit.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Comment se passe la livraison à Bukavu ? <span>+</span></button>
            <div class="faq-answer">
                <p>Livraison à domicile ou bureau dans un délai de 2h à 6h partout dans la ville après paiement.</p>
            </div>
        </div>
    </div>
</section>

<section class="tarifs">
    <h2>Nos Offres Spéciales</h2>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Qualité Or</th>
                    <th>Qualité Argent</th>
                    <th>Format Éco</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vin Mince</td>
                    <td>10$ (28.500 FC)</td>
                    <td>8$ (22.800 FC)</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Jus Naturel</td>
                    <td>6$ (17.100 FC)</td>
                    <td>5$ (14.250 FC)</td>
                    <td>5.000 FC</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section id="commander" class="order-section">
    <h2 style="text-align: center;">Passez votre commande</h2>
    <form id="orderForm">
        <input type="text" id="clientName" placeholder="Votre Nom et Prénom" required>
        <select id="clientProduct" required>
            <option value="">Sélectionnez votre choix...</option>
            <option value="Vin Mince Or (10$)">Vin Mince Or - 10$</option>
            <option value="Vin Mince Argent (8$)">Vin Mince Argent - 8$</option>
            <option value="Jus Premium (6$)">Jus Premium - 6$</option>
            <option value="Pack Promo (5000 FC)">Pack Promo - 5.000 FC</option>
        </select>
        <button type="submit">Commander sur WhatsApp</button>
    </form>
</section>

<footer>
    <p><strong>EXCELLENCE BUSINESS - RDC</strong></p>
    <p>Paiements Airtel Money : +243 972105874 | +243 849609819</p>
</footer>

<script src="script.js"></script>
</body>
</html>