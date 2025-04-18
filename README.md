# Projet RECIDIVISTE

## Description
RECIDIVISTE est un projet de site web pour une brasserie artisanale fictive. Ce site propose une expérience utilisateur complète, allant de la présentation des produits à la gestion des commandes, en passant par des outils pour les brasseurs, une interface pour les caissiers, et un panneau d'administration pour gérer les utilisateurs et les finances.

## Fonctionnalités principales
### 1. **Page d'accueil**
- Présentation de la brasserie et de ses valeurs.
- Liens vers les différentes sections du site.
- Design responsive et convivial.

### 2. **Catalogue de produits**
- Liste des bières artisanales disponibles avec descriptions, prix et options d'achat.
- Packs promotionnels pour découvrir plusieurs produits à prix réduit.
- Ajout de produits au panier.

### 3. **Panier**
- Gestion des articles ajoutés au panier.
- Validation des commandes.
- Affichage du total des achats.

### 4. **Connexion et rôles**
- Connexion pour différents types d'utilisateurs : admin, direction, brasseur, caissier, client.
- Redirection vers des interfaces spécifiques selon le rôle.

### 5. **Interface administrateur**
- Gestion des utilisateurs (ajout, suppression, modification des rôles).
- Visualisation et gestion des logs d'activité.
- Accès au bilan financier.

### 6. **Interface caissier**
- Gestion des ventes et des clients.
- Enregistrement des transactions.

### 7. **Interface brasseur**
- Outils de brassage pour calculer les ingrédients nécessaires.
- Gestion des stocks de matières premières.

### 8. **Bilan financier**
- Suivi des recettes et des dépenses.
- Graphiques des ventes par produit.
- Ajout de transactions financières.

### 9. **Contact**
- Formulaire de contact pour les visiteurs.

## Structure du projet
### Fichiers principaux
- **`index.html`** : Page d'accueil.
- **`produit.php`** : Catalogue des produits.
- **`panier.php`** : Gestion du panier.
- **`connexion.php`** : Connexion pour les utilisateurs professionnels.
- **`connexion_compte_client.php`** : Connexion pour les clients.
- **`admin.php`** : Interface administrateur.
- **`caissier.php`** : Interface caissier.
- **`brasseur.php`** : Interface brasseur.
- **`finance.php`** : Gestion financière.
- **`contact.php`** : Formulaire de contact.
- **`view_logs.php`** : Visualisation des logs.

### Base de données
- **`if0_38342553_db_bts.sql`** : Script SQL pour la création et le peuplement des tables :
  - `utilisateurs` : Gestion des utilisateurs.
  - `commandes` : Suivi des commandes.
  - `ventes` : Enregistrement des ventes.
  - `finances` : Gestion des transactions financières.

### Fichiers annexes
- **`logs.tkt`** : Fichier de logs pour enregistrer les actions des utilisateurs.
- **`hash.php`** : Génération de hash pour les mots de passe.

## Installation
1. Clonez le dépôt dans votre environnement local.
2. Configurez un serveur local (ex. : WAMP, XAMPP) et placez le projet dans le répertoire `www`.
3. Importez le fichier SQL `if0_38342553_db_bts.sql` dans votre base de données.
4. Configurez les fichiers PHP pour se connecter à votre base de données (modifiez `config_admin.php`).
5. Lancez le serveur et accédez au site via votre navigateur.

## Utilisation
1. **Visiteurs** : Parcourez les produits, ajoutez-les au panier et validez votre commande.
2. **Clients** : Connectez-vous pour accéder à votre compte.
3. **Admins** : Gérez les utilisateurs, les logs et les finances via le panneau d'administration.
4. **Caissiers** : Enregistrez les ventes et gérez les clients.
5. **Brasseurs** : Utilisez les outils de brassage et gérez les stocks.

## Technologies utilisées
- **Frontend** : HTML, CSS (W3.CSS, Font Awesome).
- **Backend** : PHP.
- **Base de données** : MySQL.
- **Scripts** : JavaScript pour les interactions dynamiques.

## Contributions
Les contributions sont les bienvenues. Veuillez soumettre une pull request ou signaler un problème via l'onglet "Issues".

## Auteurs
- **Enzo**
- **Elias**
- **Ilyes**

## Licence
Ce projet est sous licence MIT. Vous êtes libre de l'utiliser, de le modifier et de le distribuer.

---
Merci de soutenir notre mission solidaire en explorant le projet RECIDIVISTE !
![image](https://github.com/user-attachments/assets/c6e3b7f2-3d38-49c8-ba2c-c73dfc7733b9)
