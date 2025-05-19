# Variables
$projectName = "R209"
$dbName = "R209DN"
$dbUser = "root"
$dbPass = ""   # mets ton mot de passe ici si tu en as un
$dbHost = "127.0.0.1"
$dbPort = "3306"

# Construire l'URL DB
if ($dbPass -eq "") {
    $dbUrl = "mysql://${dbUser}@${dbHost}:${dbPort}/${dbName}"
} else {
    $dbUrl = "mysql://${dbUser}:${dbPass}@${dbHost}:${dbPort}/${dbName}"
}

# 1. Création projet Symfony webapp
Write-Host "`n[Étape 1] Création du projet Symfony webapp $projectName..."
symfony new $projectName --webapp
Set-Location $projectName

# 2. Modifier le fichier .env pour la base de données
Write-Host "`n[Étape 2] Configuration de la base de données dans .env..."
(Get-Content .env) -replace '^DATABASE_URL=.*', "DATABASE_URL=`"$dbUrl`"" | Set-Content .env
Write-Host "DATABASE_URL configuré dans .env : $dbUrl"

# 3. Création de la base de données
Write-Host "`n[Étape 3] Création de la base de données $dbName..."
symfony console doctrine:database:create

# 4. Création de l'entité User (réponses à entrer dans le terminal)
Write-Host "`n[Étape 4] Création de l'entité User..."
Write-Host "⚠️  Dans la console, réponds comme suit aux questions :"
Write-Host "  - Nom de la classe : User"
Write-Host "  - Veux-tu stocker les utilisateurs en base ? (yes) : oui"
Write-Host "  - Quelle propriété est utilisée comme identifiant ? (email) : email"
Write-Host "  - L'utilisateur doit-il avoir un mot de passe ? (yes) : oui"
Write-Host "  - Veux-tu un champ 'username' ? (yes/no) : non"
Write-Host "Appuie sur Entrée pour continuer et répondre aux questions dans la console..."
symfony console make:user

# 5. Création migration initiale
Write-Host "`n[Étape 5] Création de la migration initiale..."
symfony console make:migration

# 6. Exécution de la migration initiale
Write-Host "`n[Étape 6] Exécution de la migration initiale (valide avec 'yes')..."
symfony console doctrine:migrations:migrate

# 7. Création de l'authentification (login form)
Write-Host "`n[Étape 7] Création de l'authentification..."
Write-Host "⚠️  Dans la console, choisis :"
Write-Host "  - Style d'authentification : 1 (login form authenticator)"
Write-Host "  - Nom de la classe authenticator : laisse par défaut (AppCustomAuthenticator) ou choisis un nom"
Write-Host "  - Nom du contrôleur : laisse par défaut (SecurityController) ou choisis un nom"
Write-Host "Appuie sur Entrée et réponds aux questions dans la console..."
symfony console make:security

# 8. Création du contrôleur DashboardController
Write-Host "`n[Étape 8] Création du contrôleur DashboardController..."
symfony console make:controller DashboardController

# 9. Création du formulaire d'inscription utilisateur
Write-Host "`n[Étape 9] Création du formulaire d'enregistrement utilisateur..."
Write-Host "⚠️  Dans la console, sélectionne la classe User quand demandé."
Write-Host "  - Nom associé à l’email : Hugo (ou autre)"
Write-Host "  - Authentifier après inscription ? yes"
Write-Host "  - Route de redirection après inscription ? tape : app_dashboard"
Write-Host "  - Tests PHPUnit ? no"
Write-Host "Appuie sur Entrée et réponds aux questions dans la console..."
symfony console make:registration-form

# 10. Installer le bundle de vérification email nécessaire
Write-Host "`n[Étape 10] Installation du bundle symfonycasts/verify-email-bundle..."
composer require symfonycasts/verify-email-bundle

# 11. Générer et exécuter la migration pour le champ isVerified ajouté par le formulaire d'inscription
Write-Host "`n[Étape 11] Génération et exécution de la migration pour le champ isVerified..."
symfony console make:migration
symfony console doctrine:migrations:migrate

# ... Toutes les étapes précédentes inchangées (1 à 11)

# 12. Création des entités métier avec instructions détaillées
# Création de l'entité Note (sans relation)
Write-Host "`nCréation de l'entité Note (sans relation)"
Write-Host "👉 Réponds :"
Write-Host "  - titre : string (255)"
Write-Host "  - description : text"
Write-Host "  - createdAt : datetime_immutable"
Write-Host "  - endAt : datetime_immutable"
Write-Host "  - priorite : integer"
Read-Host "Appuie sur Entrée pour commencer Note"
symfony console make:entity Note

# Création de l'entité Tag (sans relation)
Write-Host "`nCréation de l'entité Tag (sans relation)"
Write-Host "👉 Réponds :"
Write-Host "  - nom : string (255)"
Read-Host "Appuie sur Entrée pour commencer Tag"
symfony console make:entity Tag

# Création de l'entité Etat (sans relation)
Write-Host "`nCréation de l'entité Etat (sans relation)"
Write-Host "👉 Réponds :"
Write-Host "  - nom : string (255)"
Write-Host "  - couleur : string (255)"
Read-Host "Appuie sur Entrée pour commencer Etat"
symfony console make:entity Etat

# Création de l'entité VieNote (sans relation)
Write-Host "`nCréation de l'entité VieNote (sans relation)"
Write-Host "👉 Réponds :"
Write-Host "  - updatedAt : datetime"
Read-Host "Appuie sur Entrée pour commencer VieNote"
symfony console make:entity VieNote

# Ajouter relations à Note
Write-Host "`nAjout des relations à Note"
Write-Host "👉 Réponds :"
Write-Host "  - Nom du champ : user"
Write-Host "  - Type : relation"
Write-Host "  - Relation : ManyToOne"
Write-Host "  - Cible : User"
Write-Host "  - InversedBy : notes"
Write-Host "  - Facultatif : non"
Write-Host "---"
Write-Host "  - etat : ManyToOne vers Etat (inversedBy: notes)"
Write-Host "---"
Write-Host "  - tags : ManyToMany vers Tag (inversedBy: notes)"
Read-Host "Appuie sur Entrée pour modifier Note"
symfony console make:entity Note

# Ajouter relation à Tag (ManyToMany vers Note)
Write-Host "`nAjout des relations à Tag"
Write-Host "👉 Réponds :"
Write-Host "  - notes : ManyToMany vers Note"
Write-Host "  - InversedBy : tags"
Read-Host "Appuie sur Entrée pour modifier Tag"
symfony console make:entity Tag

# Ajouter relation à Etat (OneToMany vers Note)
Write-Host "`nAjout de la relation à Etat"
Write-Host "👉 Réponds :"
Write-Host "  - notes : OneToMany vers Note"
Write-Host "  - MappedBy : etat"
Read-Host "Appuie sur Entrée pour modifier Etat"
symfony console make:entity Etat

# Ajouter relation à VieNote (ManyToOne vers User)
Write-Host "`nAjout de la relation à VieNote"
Write-Host "👉 Réponds :"
Write-Host "  - user : ManyToOne vers User"
Write-Host "  - InversedBy : vieNotes"
Read-Host "Appuie sur Entrée pour modifier VieNote"
symfony console make:entity VieNote

# Ajouter les relations inversées dans User
Write-Host "`nAjout des relations à User"
Write-Host "👉 Réponds :"
Write-Host "  - notes : OneToMany vers Note (mappedBy: user)"
Write-Host "  - vieNotes : OneToMany vers VieNote (mappedBy: user)"
Read-Host "Appuie sur Entrée pour modifier User"
symfony console make:entity User


# 13. Génération et exécution de la migration finale
Write-Host "`n[Étape 13] Génération et exécution de la migration finale..."
symfony console make:migration
symfony console doctrine:migrations:migrate


# 14. Génération des CRUD pour chaque entité
Write-Host "`n[Étape 14] Génération automatique des interfaces CRUD pour chaque entité..."

# CRUD pour Note
Write-Host "`n➡️ Génération du CRUD pour l'entité Note..."
symfony console make:crud Note

# CRUD pour Tag
Write-Host "`n➡️ Génération du CRUD pour l'entité Tag..."
symfony console make:crud Tag

# CRUD pour Etat
Write-Host "`n➡️ Génération du CRUD pour l'entité Etat..."
symfony console make:crud Etat

# CRUD pour VieNote
Write-Host "`n➡️ Génération du CRUD pour l'entité VieNote..."
symfony console make:crud VieNote



Write-Host "`n✅ Projet Symfony prêt !"
Write-Host "➡️ Lance le serveur : symfony server:start -d"
Write-Host "➡️ Puis va sur : http://localhost:8000"
Write-Host "Teste : /register et /dashboard"

