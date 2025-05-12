#  TP Laravel – Gestion de Livres et Avis

Ce projet est une application Laravel permettant de gérer une liste de livres et les avis des utilisateurs. Il s'agit d'un TP pour consolider les notions de migrations, Eloquent, relations, affichage dynamique et formulaires.

##  Fonctionnalités

- Affichage de la liste des livres
- Page de détails d’un livre avec ses avis
- Ajout d’un avis par un utilisateur enregistré
- Relations entre Livres, Avis et Utilisateurs
- Pagination, validation et affichage dynamique

##  Modèles & Migrations

###  books
| Champ         | Type       |
|--------------|------------|
| id           | bigint     |
| titre        | text       |
| author       | text     |
| description  | text       |
| published_at | date       |
| timestamps   | created_at / updated_at |

###  reviews
| Champ     | Type    |
|-----------|---------|
| id        | bigint  |
| book_id   | foreign |
| user_id   | foreign |
| rating    | integer |
| comment   | text    |
| timestamps| created_at / updated_at |

###  users
| Champ | Type   |
|-------|--------|
| id    | bigint |
| name  | string |
| email | string |

##  Installation


git clone https://github.com/CISSEDAOUDA/DaoudaCiss-
cd tp-laravel-livres-avis
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
