<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
echo "Bienvenue, Administrateur " . htmlspecialchars($_SESSION['username']);
?>
<!-- Contenu du tableau de bord admin -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Administrateur</title>
    <link rel="stylesheet" href="admin_dashboard.css">
</head>
<body>
    <div class="container">
        <h1>Tableau de bord Administrateur</h1>
        
        <nav>
            <ul>
                <li><a href="#manage-users">Gérer les utilisateurs</a></li>
                <li><a href="#manage-comments">Valider les commentaires</a></li>
                <li><a href="#reports">Rapports</a></li>
                <li><a href="#settings">Paramètres</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
        
        <section id="manage-users">
            <h2>Gérer les utilisateurs</h2>
            <!-- Formulaire pour ajouter des utilisateurs -->
            <form action="add_user.php" method="post">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" required><br>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" required><br>
                <label for="role">Rôle</label>
                <select name="role">
                    <option value="admin">Admin</option>
                    <option value="employe">Employé</option>
                    <option value="veterinaire">Vétérinaire</option>
                </select><br>
                <input type="submit" value="Ajouter">
            </form>
            <!-- Liste des utilisateurs existants -->
            <table>
                <thead>
                    <tr>
                        <th>Nom d'utilisateur</th>
                        <th>Rôle</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Les utilisateurs seront affichés ici -->
                </tbody>
            </table>
        </section>
        
        <section id="manage-comments">
            <h2>Valider les commentaires</h2>
            <!-- Liste des commentaires à valider -->
            <div class="comment-list">
                <!-- Les commentaires en attente de validation seront affichés ici -->
            </div>
        </section>
        
        <section id="reports">
            <h2>Rapports</h2>
            <!-- Sections pour les rapports -->
            <p>Cette section sera utilisée pour afficher des rapports pertinents pour l'admin.</p>
        </section>
        
        <section id="settings">
            <h2>Paramètres</h2>
            <!-- Formulaire pour modifier les paramètres -->
            <p>Cette section permet de modifier les paramètres de l'application.</p>
        </section>
    </div>
</body>
</html>
