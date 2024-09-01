


```markdown
# Projet Laravel

## Installation des dépendances

Après avoir cloné ce dépôt, vous devez installer les dépendances nécessaires pour faire fonctionner le projet. 

### 1. Installer les dépendances PHP

Assurez-vous d'avoir **Composer** installé sur votre machine. Pour installer les dépendances PHP, exécutez la commande suivante :

```bash
composer install
```

### 2. Installer les dépendances JavaScript

Assurez-vous d'avoir **Node.js** et **npm** installés sur votre machine. Pour installer les dépendances JavaScript, exécutez la commande suivante :

```bash
npm install
```

## Exécution de Vite

Ce projet utilise **Vite** pour la gestion des assets et le développement frontend. Afin que les styles CSS et les autres assets soient correctement chargés, vous devez lancer Vite.

### 1. Démarrer le serveur de développement Vite

Pour démarrer Vite en mode développement, utilisez la commande suivante :

```bash
npm run dev
```

Cela lancera un serveur de développement qui compilera et rechargera automatiquement les fichiers CSS et JavaScript au fur et à mesure que vous les modifiez.

### 2. Compiler pour la production

Lorsque vous êtes prêt à déployer le projet en production, vous pouvez compiler les assets pour un environnement de production avec :

```bash
npm run build
```

Cela génèrera les fichiers optimisés dans le répertoire `public`.

---

Suivez ces étapes pour vous assurer que toutes les dépendances sont installées correctement et que le CSS fonctionne comme prévu grâce à Vite.
```

### Explication :
1. **Composer install** : Télécharge les dépendances PHP définies dans le fichier `composer.json`.
2. **npm install** : Télécharge les dépendances JavaScript définies dans le fichier `package.json`.
3. **npm run dev** : Démarre le serveur Vite pour le développement.
4. **npm run build** : Compile les fichiers pour un déploiement en production.

