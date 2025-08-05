# GuillaumeTel - Documentation de l'Architecture Atomic Design

## Vue d'ensemble

GuillaumeTel est une application de référencement des modèles de langage (LLM) construite avec une architecture **Atomic Design** et un design **Glassmorphism** responsive.

## Table des matières

1. [Architecture Atomic Design](#architecture-atomic-design)
2. [Structure des dossiers](#structure-des-dossiers)
3. [Design System](#design-system)
4. [Composants](#composants)
5. [Guide d'utilisation](#guide-dutilisation)
6. [Responsive Design](#responsive-design)
7. [Performance](#performance)

---

## Architecture Atomic Design

L'architecture Atomic Design de Brad Frost organise l'interface utilisateur en cinq niveaux distincts :

### 🔬 **Atoms** (Atomes)
Les éléments les plus basiques de l'interface, non décomposables.

**Localisation :** `templates/atomic/atoms/`

- **Button** (`button.html.twig`) - Boutons réutilisables avec variantes
- **Input** (`input.html.twig`) - Champs de saisie
- **Heading** (`heading.html.twig`) - Titres avec niveaux hiérarchiques
- **Image** (`image.html.twig`) - Images responsive
- **Icon** (`icon.html.twig`) - Icônes SVG
- **Label** (`label.html.twig`) - Labels de formulaire

### 🧪 **Molecules** (Molécules)
Combinaisons simples d'atomes qui forment des composants fonctionnels.

**Localisation :** `templates/atomic/molecules/`

- **Search Form** (`search-form.html.twig`) - Formulaire de recherche
- **Card** (`card.html.twig`) - Cartes d'information
- **Navigation Item** (`nav-item.html.twig`) - Éléments de navigation
- **Feature Item** (`feature-item.html.twig`) - Éléments de fonctionnalité

### 🦠 **Organisms** (Organismes)
Assemblages complexes de molécules et d'atomes formant des sections distinctes.

**Localisation :** `templates/atomic/organisms/`

- **Header** (`header.html.twig`) - En-tête principal avec navigation
- **Hero** (`hero.html.twig`) - Section héro avec CTA
- **Features** (`features.html.twig`) - Section des fonctionnalités
- **LLM Grid** (`llm-grid.html.twig`) - Grille des modèles de langage
- **Footer** (`footer.html.twig`) - Pied de page

### 📄 **Templates** (Modèles)
Structure de mise en page combinant les organismes.

**Localisation :** `templates/atomic/templates/`

- **Homepage** (`homepage.html.twig`) - Template de la page d'accueil

### 🌐 **Pages**
Instances spécifiques des templates avec du contenu réel.

**Localisation :** `templates/pages/`

- **Home** (`home.html.twig`) - Page d'accueil finale

---

## Structure des dossiers

```
templates/
├── atomic/
│   ├── atoms/               # Éléments de base
│   │   ├── button.html.twig
│   │   ├── input.html.twig
│   │   ├── heading.html.twig
│   │   ├── image.html.twig
│   │   ├── icon.html.twig
│   │   └── label.html.twig
│   ├── molecules/           # Composants simples
│   │   ├── search-form.html.twig
│   │   ├── card.html.twig
│   │   ├── nav-item.html.twig
│   │   └── feature-item.html.twig
│   ├── organisms/           # Sections complexes
│   │   ├── header.html.twig
│   │   ├── hero.html.twig
│   │   ├── features.html.twig
│   │   ├── llm-grid.html.twig
│   │   └── footer.html.twig
│   └── templates/           # Modèles de mise en page
│       └── homepage.html.twig
├── pages/                   # Pages finales
│   └── home.html.twig
└── base.html.twig          # Template de base
```

---

## Design System

### 🎨 **Palette de couleurs**

```css
/* Couleurs principales */
--color-primary: #667eea      /* Bleu primaire */
--color-primary-light: #818cf8 /* Bleu clair */
--color-primary-dark: #4f46e5  /* Bleu foncé */
--color-secondary: #f093fb     /* Rose */
--color-accent: #fbbf24        /* Jaune accent */

/* Glassmorphism */
--glass-bg: rgba(255, 255, 255, 0.1)
--glass-bg-light: rgba(255, 255, 255, 0.15)
--glass-border: rgba(255, 255, 255, 0.2)
--glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37)
```

### 📝 **Typographie**

- **Famille principale :** Inter (lisibilité optimale)
- **Famille des titres :** Poppins (caractère distinctif)
- **Tailles :** Système d'échelle harmonique (xs à 5xl)

### 📏 **Espacements**

Système basé sur une échelle de 0.25rem :
- `--spacing-xs: 0.25rem` (4px)
- `--spacing-sm: 0.5rem` (8px)
- `--spacing-md: 1rem` (16px)
- `--spacing-lg: 1.5rem` (24px)
- `--spacing-xl: 2rem` (32px)

---

## Composants

### 🔘 **Button (Atom)**

Bouton réutilisable avec plusieurs variantes et tailles.

**Props :**
- `text` : Texte du bouton
- `type` : Type HTML (button, submit, reset)
- `variant` : Style (primary, secondary, outline)
- `size` : Taille (small, medium, large)
- `href` : URL si c'est un lien
- `class` : Classes CSS supplémentaires

**Exemple d'utilisation :**
```twig
{% include 'atomic/atoms/button.html.twig' with {
    text: 'Explorer les LLM',
    variant: 'primary',
    size: 'large',
    href: '/llm'
} %}
```

### 🎴 **Card (Molecule)**

Carte d'information avec image, titre et description.

**Props :**
- `title` : Titre de la carte
- `description` : Description
- `image` : URL de l'image
- `imageAlt` : Texte alternatif
- `href` : Lien de la carte

**Exemple d'utilisation :**
```twig
{% include 'atomic/molecules/card.html.twig' with {
    title: 'GPT-4',
    description: 'Le modèle le plus avancé d\'OpenAI...',
    image: 'https://picsum.photos/400/200',
    href: '/llm/gpt-4'
} %}
```

### 🏠 **Header (Organism)**

En-tête principal avec navigation et logo glassmorphism.

**Props :**
- `logo` : Logo personnalisé (optionnel)
- `navigation` : Array des éléments de navigation

**Fonctionnalités :**
- Navigation responsive
- Logo avec gradient
- Effet glassmorphism
- Menu burger sur mobile

---

## Guide d'utilisation

### 🚀 **Créer un nouveau composant**

1. **Identifier le niveau :** Déterminez si c'est un atom, molecule, ou organism
2. **Créer le fichier :** Dans le dossier approprié
3. **Documenter :** Ajoutez un commentaire avec description et props
4. **Implémenter :** Utilisez les variables CSS du design system
5. **Tester :** Vérifiez la responsivité et l'accessibilité

### 📱 **Responsive Design**

L'application utilise une approche **Mobile First** avec des breakpoints :

```css
/* Mobile par défaut */
@media (min-width: 768px) { /* Tablet */ }
@media (min-width: 1024px) { /* Desktop */ }
```

### 🎨 **Glassmorphism**

Tous les composants utilisent l'effet glassmorphism :

```css
.component {
    background: var(--glass-bg);
    backdrop-filter: blur(15px);
    border: 1px solid var(--glass-border);
    box-shadow: var(--glass-shadow);
}
```

---

## Performance

### ⚡ **Optimisations**

1. **Images :** Chargement paresseux avec `loading="lazy"`
2. **Fonts :** Preconnect aux CDN Google Fonts
3. **CSS :** Variables CSS pour la cohérence et la performance
4. **JavaScript :** Chargement asynchrone via Asset Mapper

### 📊 **Métriques cibles**

- **LCP (Largest Contentful Paint) :** < 2.5s
- **CLS (Cumulative Layout Shift) :** < 0.1
- **FID (First Input Delay) :** < 100ms

---

## Maintenance

### 🔧 **Bonnes pratiques**

1. **Cohérence :** Utilisez toujours les variables CSS
2. **Documentation :** Commentez chaque composant
3. **Accessibilité :** Testez avec un lecteur d'écran
4. **Performance :** Optimisez les images et le code

### 🧪 **Tests**

- Tests visuels sur différents navigateurs
- Tests de responsivité mobile/tablet/desktop
- Validation HTML/CSS
- Tests d'accessibilité (WCAG 2.1)

---

## Ressources

- [Atomic Design par Brad Frost](https://bradfrost.com/blog/post/atomic-web-design/)
- [Glassmorphism Design](https://uxdesign.cc/glassmorphism-in-user-interfaces-1f39bb1308c9)
- [Symfony Twig Documentation](https://twig.symfony.com/)
- [CSS Variables Guide](https://developer.mozilla.org/fr/docs/Web/CSS/var)

---

**Dernière mise à jour :** 5 août 2025  
**Version :** 1.0.0  
**Auteur :** Équipe GuillaumeTel
