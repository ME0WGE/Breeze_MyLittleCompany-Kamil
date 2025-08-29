# Breeze_MyLittleCompany

---

## 1. Tables:

-   users : déjà fourni par Breeze (ajouter une colonne pseudo et une relation avec roles).
-   roles : contient les rôles user, modo, admin (relation one-to-many : un rôle → plusieurs users).
-   departements : nom. (it, sales, logistic, hr)
-   employes : nom, prenom, email, departement_id. (créez 12 employés, méthode au choix)
-   profils : photo (URL), lié à un employe.
-   avatars : image (fichier), lié à un user.
-   produits : titre, description, image_url, prix.

#### [ATTENTION NUANCE]

-   ##### la table users = les comptes de connexion (clients, modos, admin).
-   ##### la table employes = les membres de la société (gérés uniquement par l’admin).

---

## 2. Pages:

-   #### front: home, team, contact, product
-   #### back: product(crud), departement(crud), employé (crud), users(crud)

---

## 3. Pages publiques

-   #### Landing page : présentation de la société + liens login et register.
-   #### Team : affiche la liste des employés avec leur département et profil (accessible à tous).
-   #### Contact : formulaire simple de contact (accessible à tous).

---

## 4. Pages avec restrictions

-   #### Produits front :Visible uniquement par les user, modo et admin.
    les visiteurs non connectés n’ont pas accès a cette page du front.

### Backend : Si modo → gestion CRUD uniquement des produits. Voit pas les lien vers les autres crud

### Si admin → gestion complète : produits + département + employés + utilisateurs.
