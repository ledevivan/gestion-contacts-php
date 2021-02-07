### training sur php avec la gestion de contacts
Ce projet git est là pour s'entrainer en PHP ,( pour la compréhension du code procedural )
pour un projet plus sérieux il faudrait s'orienté vers le code PHP orienté object, l'utlisation de composer,
les normes PSR et les design pattern déjà implémenté dans certain framework PHP . Enfin selon moi pour pouvoir être productif
et travaillé avec d'autre développeur PHP il faudra choisir un framework et le maitrisé.

### installation

* Lancer son terminal
  * créer la bd : 
    * première façon : `mysql -u root -p -e  "create database contacts"`
    * deuxième façon : `php cmd/db.php` et choisir 1
  * Créer les tables : `php cmd/db.php` et choisir 2
  * Insérer les enregistrements de test : `php cmd/db.php` et choisir 3` 
  * Démarrer le server` php -S 127.0.0.2:80 -t webroot `
  * Ouvrir le navigateur sur l'URL sur l'URL `http://127.0.0.2`
  
Note : le fichier bd.sql contient tout le code sql de la bd

Démonstration en ligne : http://gestion-contacts.epizy.com 

Compte de démonstration : login et mot de passe admin et admin
