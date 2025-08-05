# Guide de Style - GuillaumeTel

## 🎨 Palette de couleurs

### Couleurs principales
- **Primary 500** : `#3b82f6` - Bleu principal
- **Primary 600** : `#2563eb` - Bleu foncé pour les hovers

### Couleurs glassmorphism
- **Glass Primary** : `rgba(255, 255, 255, 0.1)` - Fond principal
- **Glass Secondary** : `rgba(255, 255, 255, 0.05)` - Fond secondaire
- **Glass Border** : `rgba(255, 255, 255, 0.2)` - Bordures

### Couleurs de texte
- **Text Light** : `#ffffff` - Texte principal sur fond sombre
- **Text Muted** : `rgba(255, 255, 255, 0.8)` - Texte secondaire

## 📏 Espacement

### Système d'espacement (basé sur 4px)
- **XS** : `4px` (0.25rem)
- **SM** : `8px` (0.5rem)
- **MD** : `16px` (1rem)
- **LG** : `24px` (1.5rem)
- **XL** : `32px` (2rem)
- **2XL** : `48px` (3rem)
- **3XL** : `64px` (4rem)

## 🔤 Typographie

### Police
- **Famille** : Inter (Google Fonts)
- **Weights** : 300, 400, 500, 600, 700

### Échelle typographique
- **H1** : 48px (3rem) - Desktop | 36px (2.25rem) - Mobile
- **H2** : 36px (2.25rem) - Desktop | 30px (1.875rem) - Mobile
- **H3** : 24px (1.5rem)
- **H4** : 20px (1.25rem)
- **Body** : 16px (1rem)
- **Small** : 14px (0.875rem)

## 🔘 Composants

### Boutons

#### Tailles
- **Small** : padding `4px 16px`, font-size `14px`
- **Medium** : padding `8px 24px`, font-size `16px`
- **Large** : padding `16px 32px`, font-size `18px`

#### Variantes
- **Primary** : Gradient bleu, texte blanc
- **Secondary** : Fond glass, bordure, texte blanc
- **Outline** : Transparent, bordure blanche, texte blanc

### Cartes

#### Structure
- **Fond** : Glassmorphism primary
- **Bordure** : Glass border
- **Radius** : 24px
- **Padding** : 24px
- **Shadow** : Effet glassmorphism

#### Interactions
- **Hover** : Transform translateY(-8px)
- **Image** : Scale(1.1) au hover

### Inputs

#### Style
- **Fond** : Glass secondary avec blur
- **Bordure** : Glass border
- **Radius** : 12px
- **Padding** : 16px
- **Focus** : Bordure bleue + box-shadow

## 📱 Breakpoints

### Système responsive
- **Mobile** : < 768px
- **Tablet** : 768px - 1023px
- **Desktop** : ≥ 1024px

### Grilles
- **Mobile** : 1 colonne
- **Tablet** : 2 colonnes
- **Desktop** : 3 colonnes

## ✨ Animations

### Transitions
- **Fast** : 150ms ease-in-out
- **Normal** : 250ms ease-in-out
- **Slow** : 350ms ease-in-out

### Effets spéciaux
- **Float** : Animation flottante pour les cartes
- **Pulse** : Animation de pulsation pour les icônes
- **Shimmer** : Effet de brillance sur les boutons

## 🎭 Glassmorphism

### Règles de base
1. **Transparence** : Utiliser rgba() pour les fonds
2. **Blur** : backdrop-filter: blur(15-20px)
3. **Bordures** : Bordures translucides
4. **Ombres** : Ombres colorées subtiles

### Classes utilitaires
```css
.glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.glass-secondary {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.1);
}
```

## 🔍 Iconographie

### Style
- **Type** : SVG stroke icons
- **Stroke** : 2px
- **Style** : Lignes arrondies (stroke-linecap: round)

### Tailles
- **Small** : 16px
- **Medium** : 24px
- **Large** : 32px

### Icônes disponibles
- Search, Menu, Close, Arrow-right, Star, Heart

## 📐 Layout

### Container
- **Max-width** : 1200px
- **Padding** : 16px (mobile) | 24px (desktop)
- **Margin** : 0 auto

### Header
- **Position** : Sticky top
- **Height** : Variable selon le contenu
- **Background** : Glass primary avec blur

### Footer
- **Background** : Glass primary
- **Padding** : 64px 0 32px
- **Border-top** : Glass border

## 🎯 Bonnes pratiques

### CSS
1. Utiliser les variables CSS
2. Mobile First approach
3. Éviter les magic numbers
4. Commentaires pour les sections complexes

### Twig
1. Documenter chaque composant
2. Props optionnelles avec valeurs par défaut
3. Noms de classes cohérents (BEM)
4. Réutilisabilité maximale

### Performance
1. Lazy loading pour les images
2. Optimisation des animations
3. Préférer transform à position
4. Éviter les animations sur de gros éléments

---

Ce guide de style doit être respecté pour maintenir la cohérence visuelle de GuillaumeTel.
