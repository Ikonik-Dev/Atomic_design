# GuillaumeTel - Guide de Style et Design System

## 🎨 Identité Visuelle

### Logo et Typographie
- **Nom :** GuillaumeTel
- **Concept :** Référence à Guillaume Tell, symbole de précision et d'habileté
- **Application :** Précision dans la sélection des meilleurs LLM

### Palette de Couleurs

#### Couleurs Principales
```css
/* Bleu primaire - Confiance et technologie */
#667eea

/* Bleu clair - Modernité */
#818cf8

/* Rose secondaire - Innovation */
#f093fb

/* Jaune accent - Attention et importance */
#fbbf24
```

#### Glassmorphism
```css
/* Fond glassmorphism */
rgba(255, 255, 255, 0.1)

/* Bordure glassmorphism */
rgba(255, 255, 255, 0.2)

/* Ombre glassmorphism */
0 8px 32px 0 rgba(31, 38, 135, 0.37)
```

## 🔤 Typographie

### Familles de Police
- **Interface :** Inter (Google Fonts)
- **Titres :** Poppins (Google Fonts)
- **Fallback :** -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif

### Échelle Typographique
```css
--font-size-xs: 0.75rem    /* 12px */
--font-size-sm: 0.875rem   /* 14px */
--font-size-base: 1rem     /* 16px */
--font-size-lg: 1.125rem   /* 18px */
--font-size-xl: 1.25rem    /* 20px */
--font-size-2xl: 1.5rem    /* 24px */
--font-size-3xl: 1.875rem  /* 30px */
--font-size-4xl: 2.25rem   /* 36px */
--font-size-5xl: 3rem      /* 48px */
```

## 📐 Système d'Espacement

### Échelle d'Espacement
```css
--spacing-xs: 0.25rem   /* 4px */
--spacing-sm: 0.5rem    /* 8px */
--spacing-md: 1rem      /* 16px */
--spacing-lg: 1.5rem    /* 24px */
--spacing-xl: 2rem      /* 32px */
--spacing-2xl: 3rem     /* 48px */
--spacing-3xl: 4rem     /* 64px */
```

### Utilisation
- **xs** : Espacements fins (padding interne)
- **sm** : Espacement entre éléments proches
- **md** : Espacement standard
- **lg** : Séparation de sections
- **xl** : Marges importantes
- **2xl/3xl** : Séparation de grandes sections

## 🎯 Système de Grille

### Breakpoints Responsive
```css
/* Mobile First */
Base: 320px+

/* Tablet */
@media (min-width: 768px)

/* Desktop */
@media (min-width: 1024px)

/* Large Desktop */
@media (min-width: 1440px)
```

### Container
```css
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem; /* Mobile */
    padding: 0 1.5rem; /* Tablet+ */
}
```

## 🎨 Effets Visuels

### Glassmorphism
```css
.glass-element {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    border-radius: 1rem;
}
```

### Transitions
```css
--transition-fast: 0.15s ease-in-out;
--transition-normal: 0.3s ease-in-out;
--transition-slow: 0.5s ease-in-out;
```

### Ombres
```css
--shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
--shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
--shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
--shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
```

## 🎛️ Composants UI

### Boutons

#### Variantes
- **Primary :** Action principale (fond glassmorphism + couleur primaire)
- **Secondary :** Action secondaire (fond transparent)
- **Outline :** Action tertiaire (bordure uniquement)

#### Tailles
- **Small :** 32px de hauteur
- **Medium :** 40px de hauteur (défaut)
- **Large :** 48px de hauteur

#### États
- **Normal :** État par défaut
- **Hover :** Élévation + effet de brillance
- **Active :** Léger enfoncement
- **Disabled :** Opacité réduite

### Cartes (Cards)

#### Structure
1. **Image :** Ratio 16:9, 200px de hauteur
2. **Contenu :** Padding uniforme de 1.5rem
3. **Titre :** H3, couleur texte claire
4. **Description :** Texte avec opacité 0.8
5. **Action :** Bouton outline small

#### Comportement
- **Hover :** Élévation de 8px
- **Image :** Zoom léger (scale 1.1)
- **Transition :** 0.3s ease-in-out

### Navigation

#### Header
- **Position :** Fixed top
- **Fond :** Glassmorphism avec blur 20px
- **Logo :** Gradient coloré avec text-shadow
- **Navigation :** Masquée sur mobile, visible sur tablet+

#### Items de Navigation
- **Hover :** Fond glassmorphism léger
- **Active :** Fond glassmorphism + couleur accent

## 🌈 Animations

### Animation de Fond
```css
@keyframes bgAnimation {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.8; }
}
```

### Effet de Brillance sur Boutons
```css
.btn::before {
    content: '';
    position: absolute;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.3s ease-in-out;
}

.btn:hover::before {
    left: 100%;
}
```

## 🎨 Éléments Visuels

### Icônes
- **Taille :** 16px (small), 24px (medium), 32px (large)
- **Style :** Outline, stroke-width: 2
- **Couleur :** currentColor (hérite du parent)

### Images
- **Ratio :** 16:9 pour les cartes
- **Chargement :** Lazy loading
- **Placeholder :** Lorem Picsum pour le développement
- **Border-radius :** 0.75rem (12px)

### Formulaires
- **Inputs :** Fond glassmorphism, bordure subtile
- **Placeholder :** Opacité 0.7
- **Focus :** Bordure bleue + box-shadow
- **Validation :** Couleurs rouge/vert avec icônes

## 📱 Responsive Behavior

### Mobile (320px - 767px)
- Navigation hamburger
- Cartes en 1 colonne
- Texte réduit
- Espacement compact

### Tablet (768px - 1023px)
- Navigation visible
- Cartes en 2 colonnes
- Texte standard
- Espacement normal

### Desktop (1024px+)
- Navigation complète
- Cartes en 3 colonnes
- Texte large
- Espacement généreux

## 🎯 Guidelines d'Usage

### Do ✅
- Utiliser les variables CSS définies
- Respecter la hiérarchie typographique
- Maintenir la cohérence des espacements
- Appliquer le glassmorphism aux éléments interactifs
- Optimiser pour la performance

### Don't ❌
- Créer de nouvelles couleurs sans justification
- Ignorer la responsivité
- Surcharger les effets visuels
- Oublier l'accessibilité
- Mélanger les styles d'animation

## 🔧 Outils et Resources

### Développement
- **CSS Variables :** Pour la cohérence
- **Clamp() :** Pour la typographie responsive
- **Grid/Flexbox :** Pour les layouts
- **Custom Properties :** Pour la personnalisation

### Design
- **Figma :** Maquettes et prototypes
- **ColorSpace :** Génération de palettes
- **Google Fonts :** Typographie web
- **Unsplash/Picsum :** Images de développement

---

**Version :** 1.0.0  
**Dernière mise à jour :** 5 août 2025
