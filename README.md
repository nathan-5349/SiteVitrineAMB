# 🏸 Club Mayenne Badminton

Site vitrine du **Club Mayenne Badminton**.

Ce projet a pour objectif de présenter le club, ses actualités, ses activités et les informations utiles aux adhérents et aux personnes souhaitant découvrir le badminton au sein du club.

---

## 📋 Présentation

Le site permet notamment de consulter :

* 🏸 Les informations sur le club
* 📰 Les actualités
* 📅 Les événements et informations importantes
* 👥 Les informations concernant les entraînements et les inscriptions
* 📍 Les informations pratiques et les coordonnées du club
* 📞 Les moyens de contact

Une interface d'administration permet également de gérer les contenus du site.

---

## 🛠️ Technologies utilisées

Le projet utilise principalement :

* **PHP** — développement côté serveur
* **MySQL** — gestion des données
* **HTML / CSS** — structure et mise en forme du site
* **JavaScript** — interactions côté client
* **Apache** — serveur web local
* **WAMP** — environnement de développement local

---

## 📁 Structure du projet

```text
BadmintonAMB/
│
├── admin/              # Interface d'administration
│
├── api/                # Gestion des échanges avec la base de données
│
├── database/           # Scripts de création et de données de la base
│
├── public/             # Site vitrine accessible aux visiteurs
│
└── technique/          # Tests et documentation technique
```

---

## 💻 Installation

Pour lancer le projet en local, il est recommandé d'utiliser **WAMP**.

### 1. Installer WAMP

Installer WAMP sur votre ordinateur et démarrer les services :

* Apache
* MySQL

### 2. Placer le projet

Placer le projet dans le dossier :

```text
C:\wamp64\www\
```

Par exemple :

```text
C:\wamp64\www\BadmintonAMB
```

### 3. Configurer la base de données

Créer une base de données nommée :

```text
club_badminton
```

Les scripts SQL nécessaires se trouvent dans le dossier :

```text
database/
```

Importer le fichier `structure.sql`, puis si nécessaire `exemple.sql` pour ajouter des données de démonstration.

### 4. Configurer la connexion

La connexion à la base de données est définie dans :

```text
api/db-connect.php
```

Adapter les paramètres à votre environnement local si nécessaire.

---

## 🚀 Lancement

Une fois Apache et MySQL démarrés, le site est accessible à l'adresse :

```text
http://localhost/BadmintonAMB/public/
```

L'interface d'administration est accessible à :

```text
http://localhost/BadmintonAMB/admin/
```

---

## 🎯 Objectif du projet

Ce projet est un **site vitrine pour un club de badminton**.

L'objectif est de proposer un site simple, clair et accessible permettant au club de :

* présenter son activité ;
* informer ses adhérents ;
* publier ses actualités ;
* communiquer les informations pratiques ;
* faciliter la prise de contact ;
* gérer facilement les contenus du site.

---

## 📌 État du projet

Projet en cours de développement.

Les fonctionnalités et contenus sont susceptibles d'évoluer au fur et à mesure de l'avancement du projet.

---

## 🏸 Club Mayenne Badminton

Projet réalisé pour le **Club Mayenne Badminton**.
Par le développeur Junior : **Nathan Dubois**.
