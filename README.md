# Projet RECIDIVISTE

## Présentation du projet
RECIDIVISTE est un projet de site web pour une brasserie artisanale fictive. Ce site a pour objectif de proposer une plateforme complète permettant de gérer les produits, les commandes, les utilisateurs, ainsi que les finances de la brasserie. Il est conçu pour répondre aux besoins des différents acteurs : clients, brasseurs, caissiers, et administrateurs.

---

## Présentation de la structure de données
La base de données est construite en MySQL et contient les tables suivantes :
- **`utilisateurs`** : Gère les informations des utilisateurs (nom, email, rôle, mot de passe hashé).
- **`produits`** : Contient les informations sur les bières (nom, description, prix, stock).
- **`commandes`** : Enregistre les commandes des clients (id client, produits commandés, total, date).
- **`ventes`** : Suivi des ventes réalisées par les caissiers.
- **`finances`** : Gestion des transactions financières (recettes, dépenses, date).
- **`logs`** : Historique des actions effectuées par les utilisateurs.

  ![image](https://github.com/user-attachments/assets/0ab81147-6b13-4d1b-a6b3-1aff0a570d02)


---

## Présentation de la structure du programme
Le projet est structuré en plusieurs fichiers PHP et HTML, chacun correspondant à une fonctionnalité spécifique :
- **Frontend** :
  - `index.html` : Page d'accueil.
  - `produit.php` : Affichage des produits.
  - `panier.php` : Gestion du panier.
  - `contact.php` : Formulaire de contact.
- **Backend** :
  - `connexion.php` : Gestion de la connexion pour les utilisateurs professionnels.
  - `connexion_compte_client.php` : Connexion pour les clients.
  - `admin.php` : Interface administrateur.
  - `caissier.php` : Interface caissier.
  - `brasseur.php` : Interface brasseur.
  - `finance.php` : Gestion financière.
  - `view_logs.php` : Visualisation des logs.
- **Scripts annexes** :
  - `hash.php` : Génération de hash pour les mots de passe.
  - `config_admin.php` : Configuration de la connexion à la base de données.
 
Arborescence du dossier `src/`

```bash
src/
├── acces_refuser.php              # Page d'accès refusé
├── admin.php                      # Interface de gestion admin
├── ajouter.php                    # Ajout de produits (admin)
├── ajouter_panier.php            # Ajout d'articles au panier
├── auth_check.php                # Vérification des droits d'accès
├── brasseur.php                  # Page dynamique pour les brasseurs (WIP)
├── brasseurs2.html               # Présentation statique brasseur 1
├── brasseurs3.html               # Présentation statique brasseur 2
├── brasseurs4.html               # Présentation statique brasseur 3
├── caissier.php                  # Interface caissier
├── config_admin.php              # Configuration des droits admin
├── connexion.php                 # Connexion utilisateur générique
├── connexion_admin.php          # Connexion spécifique admin
├── contact.php                   # Page de contact
├── deconnexion.php              # Script de déconnexion
├── hash.php                      # Fichier de hachage des mots de passe
├── if0_38342553_db_bts (...)     # Dossier ou fichier lié à la BDD (à préciser)
├── index.html                    # Page d'accueil avec redirection par rôle
├── logout.php                    # Déconnexion (ancien ou alternative ?)
├── logs.tkt                      # Ancien fichier de logs (temporaire)
├── logs.txt                      # Journal des connexions/déconnexions
├── page_v.html                   # Vue publique simplifiée (visiteur)
├── panier.php                    # Page panier utilisateur
├── produit.php                   # Affichage des produits depuis BDD
├── update_panier.php            # Mise à jour du panier
└── view_logs.php                # Visualisation des logs en temps réel


---

## Présentation des fonctionnalités du programme
Voici les fonctionnalités principales du programme. Les fonctionnalités **réalisées par nos soins** sont mises en **gras** et en couleur.

### Fonctionnalités générales
- **Page d'accueil** : Présentation de la brasserie et des liens vers les différentes sections.
- **Catalogue de produits** : Liste des bières disponibles avec descriptions, prix et options d'achat.
- **Panier** : Gestion des articles ajoutés au panier et validation des commandes.

### Fonctionnalités spécifiques
- **Connexion et rôles** :
  - Connexion pour différents types d'utilisateurs (admin, direction, brasseur, caissier, client).
  - Redirection vers des interfaces spécifiques selon le rôle.
- **Interface administrateur** :
  - **Gestion des utilisateurs** (ajout, suppression, modification des rôles).  
    ***(Réalisé par nos soins)***  
  - **Visualisation et gestion des logs d'activité**.  
    ***(Réalisé par nos soins)***  
  - **Accès au bilan financier**.  
    ***(Réalisé par nos soins)***
- **Interface caissier** :
  - Gestion des ventes et des clients.
  - Enregistrement des transactions.
- **Interface brasseur** :
  - **Outils de brassage pour calculer les ingrédients nécessaires**.  
    ***(Réalisé par nos soins)***  
  - Gestion des stocks de matières premières.
- **Bilan financier** :
  - Suivi des recettes et des dépenses.
  - Graphiques des ventes par produit.
  - Ajout de transactions financières.
- **Contact** :
  - Formulaire de contact pour les visiteurs.

---




---

## Sources
Voici les principales ressources utilisées pour le développement du projet :
- Documentation officielle PHP : [https://www.php.net/](https://www.php.net/)
- Documentation MySQL : [https://dev.mysql.com/doc/](https://dev.mysql.com/doc/)
- Framework CSS W3.CSS : [https://www.w3schools.com/w3css/](https://www.w3schools.com/w3css/)
- Icônes Font Awesome : [https://fontawesome.com/](https://fontawesome.com/)
- Tutoriels OpenClassrooms : [https://openclassrooms.com/](https://openclassrooms.com/)
- Stack Overflow pour la résolution de problèmes spécifiques : [https://stackoverflow.com/](https://stackoverflow.com/)
- Pedagogeek : [https://pedagogeek.fr/](https://pedagogeek.fr/)

---


