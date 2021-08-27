# Exercice Liste chevaux

repo git afin de partager l'exercice demander par Equideclic

## Pour commencer

Avant de pouvoir utiliser ce projet veuillez réaliser les étape suivante.

    1 - Ouvrir MAMP ou autre environnement de serveur locale
    2 - Dans phpMyAdmin crée une base de donné vide
    3 - Dans le dossier Backend, renommer le fichier .env.example en .env
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

## Information complementaire

    Temp éstimé a travailler sur le Frontend : 1h30
    Temp réellement travaillé sur le Frontend: 4h00

    Temp éstimé a travailler sur le Backend : 4h00
    Temp réellement travaillé sur le Backend: 2h30

    Temp total éstimé : 5h30
    Temp total réelement travaillé: 6h30



    Le fait de n'avoir pas ajouté d'uuid a chaque cheval pour les rendre unique en bdd est un choix car
    vue que cela na pas été fourni dans l'exercice je me suis dit qu'il fallait peut etre faire sans.

#### Créer par Sacha RABIN

#### image utilisé

cheval: <a href="https://www.freepik.com/photos/nature">Nature photo created by montypeter - www.freepik.com</a>
