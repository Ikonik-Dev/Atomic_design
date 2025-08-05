# GuillaumeTel - Référencement des Modèles de Langage (LLM)

[![Symfony](https://img.shields.io/badge/Symfony-6.4-000000.svg?style=flat&logo=symfony)](https://symfony.com/)
[![Twig](https://img.shields.io/badge/Twig-3.x-green.svg?style=flat&logo=twig)](https://twig.symfony.com/)
[![CSS3](https://img.shields.io/badge/CSS3-Glassmorphism-1572B6.svg?style=flat&logo=css3)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![Atomic Design](https://img.shields.io/badge/Architecture-Atomic%20Design-ff6b6b.svg?style=flat)](#architecture)

## 🎯 À propos du projet

**GuillaumeTel** est une application web moderne de référencement des modèles de langage (LLM) construite avec une architecture **Atomic Design** et un design **Glassmorphism** entièrement responsive.

L'application permet aux utilisateurs de :
- 🔍 **Découvrir** les LLM populaires (GPT-4, Claude, Llama, Gemini, etc.)
- ⚖️ **Comparer** les fonctionnalités et performances
- 📊 **Analyser** les coûts et cas d'usage
- 💡 **Obtenir** des recommandations personnalisées

## 🚀 Démarrage rapide

### 1. Accéder à l'application
L'application est déjà configurée et prête à être utilisée :
```
http://localhost:8000
```

### 2. Fonctionnalités disponibles
- ✅ Page d'accueil avec design glassmorphism
- ✅ Navigation responsive avec logo bien visible
- ✅ Formulaire de recherche interactif
- ✅ Grille de cartes des LLM populaires
- ✅ Architecture Atomic Design complète

## 🏗️ Architecture
7. [Bonnes pratiques](#bonnes-pratiques)

## 🎯 Vue d'ensemble

**GuillaumeTel** est une application web moderne de référencement des modèles de langage (LLM) construite avec Symfony et utilisant une architecture Atomic Design. L'application permet aux utilisateurs de découvrir, comparer et choisir parmi les différents modèles de langage disponibles sur le marché.

### Objectifs de l'application :
- 🔍 **Recherche avancée** : Trouver rapidement le LLM adapté à ses besoins
- 📊 **Comparaisons détaillées** : Comparer les performances et fonctionnalités
- 💡 **Recommandations personnalisées** : Suggestions adaptées au secteur d'activité
- 🎨 **Interface moderne** : Design glassmorphism responsive

## 🧩 Architecture Atomic Design

L'architecture Atomic Design divise l'interface utilisateur en 5 niveaux hiérarchiques :

### 1. **Atoms** (Atomes)
Les éléments les plus basiques de l'interface, indivisibles.

**Localisation :** `templates/atomic/atoms/`

- `button.html.twig` - Boutons réutilisables
- `input.html.twig` - Champs de saisie
- `label.html.twig` - Labels de formulaire
- `heading.html.twig` - Titres (H1-H6)
- `image.html.twig` - Images avec support responsive
- `icon.html.twig` - Icônes SVG

### 2. **Molecules** (Molécules)
Combinaisons d'atomes formant des composants fonctionnels.

**Localisation :** `templates/atomic/molecules/`

- `search-form.html.twig` - Formulaire de recherche
- `card.html.twig` - Carte d'information
- `nav-item.html.twig` - Élément de navigation
- `feature-item.html.twig` - Élément de fonctionnalité

### 3. **Organisms** (Organismes)
Sections complexes combinant plusieurs molécules.

**Localisation :** `templates/atomic/organisms/`

- `header.html.twig` - En-tête avec navigation
- `hero.html.twig` - Section héro
- `features.html.twig` - Section des fonctionnalités
- `llm-grid.html.twig` - Grille des LLM
- `footer.html.twig` - Pied de page

### 4. **Templates** 
Layouts de page combinant les organismes.

**Localisation :** `templates/atomic/templates/`

- `homepage.html.twig` - Template de la page d'accueil

### 5. **Pages**
Pages finales avec contenu spécifique.

**Localisation :** `templates/pages/`

- `homepage.html.twig` - Page d'accueil finale

## 📁 Structure des dossiers

```
templates/
├── atomic/
│   ├── atoms/          # Éléments de base
│   ├── molecules/      # Combinaisons d'atomes
│   ├── organisms/      # Sections complexes
│   └── templates/      # Layouts de page
├── pages/              # Pages finales
└── base.html.twig      # Template de base Symfony
```

## 🎨 Design System

### Couleurs

```css
/* Couleurs principales */
--primary-500: #3b82f6;    /* Bleu principal */
--primary-600: #2563eb;    /* Bleu foncé */

/* Glassmorphism */
--glass-bg-primary: rgba(255, 255, 255, 0.1);
--glass-bg-secondary: rgba(255, 255, 255, 0.05);
--glass-border: rgba(255, 255, 255, 0.2);
```

### Espacement

```css
--spacing-xs: 0.25rem;    /* 4px */
--spacing-sm: 0.5rem;     /* 8px */
--spacing-md: 1rem;       /* 16px */
--spacing-lg: 1.5rem;     /* 24px */
--spacing-xl: 2rem;       /* 32px */
--spacing-2xl: 3rem;      /* 48px */
--spacing-3xl: 4rem;      /* 64px */
```

### Typographie

```css
--font-size-sm: 0.875rem;   /* 14px */
--font-size-base: 1rem;     /* 16px */
--font-size-lg: 1.125rem;   /* 18px */
--font-size-xl: 1.25rem;    /* 20px */
--font-size-2xl: 1.5rem;    /* 24px */
--font-size-3xl: 1.875rem;  /* 30px */
--font-size-4xl: 2.25rem;   /* 36px */
--font-size-5xl: 3rem;      /* 48px */
```

## 🚀 Utilisation

### Créer un nouveau composant

#### 1. Créer un atome

```twig
{# templates/atomic/atoms/mon-atome.html.twig #}
{#
    Atom: Mon Atome
    Description: Description de mon atome
    Props:
    - propriete1: Description de la propriété
    - propriete2: Description de la propriété
#}

<div class="mon-atome {{ class|default('') }}">
    {{ contenu|default('Contenu par défaut') }}
</div>
```

#### 2. Utiliser un composant

```twig
{# Dans une molécule ou un organisme #}
{% include 'atomic/atoms/mon-atome.html.twig' with {
    propriete1: 'valeur1',
    propriete2: 'valeur2',
    class: 'classe-supplementaire'
} %}
```

### Exemples d'utilisation

#### Bouton

```twig
{% include 'atomic/atoms/button.html.twig' with {
    text: 'Cliquez ici',
    variant: 'primary',
    size: 'large',
    href: '/lien'
} %}
```

#### Carte

```twig
{% include 'atomic/molecules/card.html.twig' with {
    title: 'GPT-4',
    description: 'Le modèle le plus avancé d\'OpenAI',
    image: 'https://picsum.photos/400/200',
    href: '/llm/gpt-4'
} %}
```

#### Formulaire de recherche

```twig
{% include 'atomic/molecules/search-form.html.twig' with {
    placeholder: 'Rechercher un LLM...',
    action: '/search'
} %}
```

## 📱 Responsive Design

L'application utilise une approche **Mobile First** avec des breakpoints définis :

```css
/* Mobile First */
.element {
    /* Styles mobile par défaut */
}

/* Tablette */
@media (min-width: 768px) {
    .element {
        /* Styles tablette */
    }
}

/* Desktop */
@media (min-width: 1024px) {
    .element {
        /* Styles desktop */
    }
}
```

## ✨ Glassmorphism

Le design utilise l'effet glassmorphism pour un rendu moderne :

```css
.glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
}
```

## 🎯 Bonnes pratiques

### 1. **Commentaires de composants**
Chaque composant doit avoir un en-tête documenté :

```twig
{#
    Type: Nom du composant
    Description: Description claire
    Props:
    - prop1: Description de la propriété
    - prop2: Description de la propriété
#}
```

### 2. **Nommage des classes CSS**
Utiliser la méthodologie BEM (Block Element Modifier) :

```css
.block {}
.block__element {}
.block--modifier {}
```

### 3. **Variables CSS**
Utiliser les variables CSS pour la cohérence :

```css
.mon-composant {
    padding: var(--spacing-md);
    color: var(--text-primary);
    border-radius: var(--radius-lg);
}
```

### 4. **Accessibilité**
- Utiliser des labels appropriés
- Gérer le focus clavier
- Prévoir les textes alternatifs
- Respecter les contrastes

### 5. **Performance**
- Images lazy loading
- Optimisation des animations
- Réduction des repaint/reflow

## 🔧 Développement

### Installation

```bash
# Cloner le projet
git clone [url-du-repo]

# Installer les dépendances
composer install
npm install

# Construire les assets
npm run build
```

### Commandes utiles

```bash
# Développement avec watch
npm run watch

# Build de production
npm run build

# Lancer le serveur Symfony
symfony server:start
```

## 📝 Contribuer

1. Respecter l'architecture Atomic Design
2. Documenter les nouveaux composants
3. Tester la responsivité
4. Vérifier l'accessibilité
5. Suivre les conventions de nommage

---

**GuillaumeTel** - Votre référence pour naviguer dans l'univers des modèles de langage 🤖
