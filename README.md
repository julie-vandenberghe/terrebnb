### Terrebnb
Projet réalisé en TP pendant la formation M2i.



## Récupérer un projet Laravel existant
1. Le récupérer depuis Git Hub :

```bash
cd projects/
git clone git@github.com:USERNAME/REPOSITORY.git my-project
cd my-project
```

2. Installer composer (pour créer dossier vendor) :
```bash
composer install
```

3. Créer le fichier .env :
```bash
php -r "file_exists('.env') || copy('.env.example', '.env');"
```

Attention, ne pas oublier de bien configurer le fichier .env en fonction de la config (DB_PORT, DB_DATABASE, DB_PASSWORD...).

4. Générer une clé (app_key) pour l'application Laravel :
```bash
php artisan key:generate
```

5. Pour la base de données, on peut lancer les migrations (et le seeder) :

```bash
php artisan migrate
php artisan migrate:fresh --seed
```

# Fonctionnalités
## Base de données
Un logement contient :
- Un titre
- Un slug
- Un contenu pouvant être saisi en markdown
- Une image
- Un état (activé ou non)

Une factory et un seeder ont été crée pour remplir facilement la base de données. 
Le modèle est lié à un autre modèle, un Tag. @todo

## Routes
### Home ⇒ Affiche 4 logements
On affiche les 4 logements les plus récents de notre CRUD et seulement ceux qui sont actifs.

### Index ⇒  Listing des logements 
On affiche l’ensemble des ressources de notre base de données. 
- La date de création est formatée comme tel “Jeudi 15 septembre 2022 à 10h30” et “Il y a 2 heures”.
- Vous devrez également afficher uniquement les ressources activées et un extrait du contenu (il faudra tronquer la chaine avec le helper Str de Laravel et afficher 10 mots). @todo
- Si aucune ressource n’est présente, on affichera un message “Il n’y a pas de ressources”. @todo

### Show ⇒ Détail d’un logement 
On affiche le détail de la ressource, donc tous les champs. 
- La page est accessible grâce au slug et à l’id, par exemple `/article/1-mon-article`.

### Create ⇒ Affiche un formulaire permettant de créer un logement 
- Le titre doit être unique et non vide. 
- Le contenu peut être saisi en markdown dans un textarea et doit faire 50 caractères minimum et 1000 maximum. 
- L’image est obligatoire et doit être une URL. 
- L’état est une checkbox devant représenter un booléen (cochée, c’est disponible et non cochée, c’est false). 
- Si tout est ok, on redirige vers la liste avec un message de succès.
- Sinon on affiche les messages d’erreurs. 
- On pourra avoir une liste de checkboxes avec les tags à associer à la ressource. @todo

### Delete ⇒ Supprime un logement ressource et redirige vers la liste des logements.
- On vérifie que l'id existe, sinon on affiche une 404.


