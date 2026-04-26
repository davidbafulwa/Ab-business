<?php
session_start();
$host = "localhost";
$dbname = "inscription_ab";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];
        $email = htmlspecialchars($_POST['email']);

        if ($action == "inscription") {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sexe = $_POST['sexe'];
            $sql = "INSERT INTO utilisateurs (email, password, sexe) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$email, $password, $sexe]);
            echo "<script>alert('Inscription réussie !');</script>";
        } elseif ($action == "connexion") {
            $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
            $stmt->execute([$email]);
            $user_data = $stmt->fetch();
            if ($user_data && password_verify($_POST['password'], $user_data['password'])) {
                $_SESSION['user_email'] = $user_data['email'];
                header("Location: accueil.php");
                exit();
            } else {
                echo "<script>alert('Identifiants incorrects');</script>";
            }
        }
    }
} catch (PDOException $e) { echo "Erreur : " . $e->getMessage(); }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Excellent Business - Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-page">
        <div class="auth-card">
            <h2 id="auth-title">Connexion</h2>
            <form method="POST">
                <input type="hidden" name="action" id="auth-action" value="connexion">
                <input type="email" name="email" placeholder="Votre Email" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <div id="sexe-container" style="display:none;">
                    <select name="sexe">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>
                <button type="submit" class="btn-main">Continuer</button>
            </form>
            <p class="auth-toggle" onclick="toggleAuth()">Créer un compte</p>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>