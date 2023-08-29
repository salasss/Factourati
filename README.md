Gestionnaire de Produits et Factures
Ce projet est une application web de gestion de produits et de factures développée en utilisant le framework Laravel. Il permet aux utilisateurs de gérer facilement leur inventaire de produits ainsi que de générer et suivre des factures pour leurs clients.

Fonctionnalités principales
Gestion des Produits : Ajoutez, modifiez et supprimez des produits. Chaque produit peut inclure un nom, une famille, un prix HT et une description.

Génération de Factures : Créez des factures pour vos clients en ajoutant des produits à chaque facture. Les détails tels que le numéro de facture, la date, la date d'échéance, la TVA et le total sont pris en charge.

Visualisation des Clients : Affichez une liste de clients et leurs informations telles que le nom, le prénom, l'e-mail, le téléphone et l'entreprise.

Gestion des Catégories : Gérez les catégories auxquelles vos produits appartiennent en ajoutant, modifiant ou supprimant des catégories.

Authentification et Autorisation : Mise en place d'un système d'authentification pour les utilisateurs. Les utilisateurs doivent être connectés pour accéder aux fonctionnalités de gestion.

Comment utiliser ce projet
Cloner le référentiel sur votre machine locale.
Exécutez les commandes composer install et npm install pour installer les dépendances.
Copiez le fichier .env.example et renommez-le en .env. Configurez les informations de base de données et d'autres variables d'environnement nécessaires.
Exécutez les commandes php artisan key:generate pour générer une clé d'application et php artisan migrate pour exécuter les migrations de base de données.
Utilisez php artisan serve pour lancer l'application localement.
Captures d'écran
