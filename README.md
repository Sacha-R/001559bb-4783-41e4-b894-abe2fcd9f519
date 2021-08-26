# Exercice Liste chevaux

repo git afin de partager l'exercice demander par Equideclic

## Pour commencer

Avant de pouvoir utiliser ce projet veuillez réaliser les étape suivante.

    1 - Ouvrir MAMP ou autre environnement de serveur locale
    2 - Dans PHPmy admin crée une base de donné vide
    3 - Renommer le fichier .env.example en .env dans le dossier Backend
    4 - Dans le .env du dossier Backend renseigner les lignes DB_DATABASE, DB_USERNAME, DB_PASSWORD
    afin d'établir la connection avec la base de donnée.
    5 - éxecution des commandes suivante

Liste des commandes a éxécuter avant de pouvoir lancer le projet:

#### Dans un 1er terminal

```
    -$ cd Backend
    -$ composer install
    -$ php artisan migrate
    -$ php artisan serve
```

#### Dans un 2iem Terminal

```
    -$ cd Frontend
    -$ yarn
    -$ yarn dev
```
