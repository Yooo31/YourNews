# YourNews

## Installation

git, php et mysql sont requis

**Installer le projet**

```sh
git clone git@github.com:Yooo31/YourNews.git
```

## Création de la BDD

**Se connecter à MySql**

```sh
mysql -u root_user_name -p
```

**Créer la table**

```sh
CREATE DATABASE nom_bdd DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
```

**Créer un utilisateur spécifique à la BDD**

```sh
CREATE USER 'user_name'@'localhost' IDENTIFIED BY 'user_pass';
GRANT ALL PRIVILEGES ON nom_bdd.* TO 'user_name'@'%';
FLUSH PRIVILEGES;
```

## Remplir la BDD

**Faire les migrations**

```sh
bash script/migrate.sh
```

**Faire les seeds**

```sh
bash script/seed.sh
```