# 📷 Guía de Imágenes — Parroquia Cristo Resucitado

> Especificaciones de resolución, formato y aspecto para cada sección del sitio web.
> Todas las imágenes actuales (excepto los logos) son **placeholders** que deben reemplazarse con fotos reales de la parroquia.

---

## Formatos recomendados

| Formato | Uso ideal | Ventaja |
|---------|-----------|---------|
| **WebP** | Todas las fotos del sitio | Mejor compresión, carga rápida |
| **JPG** | Alternativa si no se puede generar WebP | Compatibilidad universal |
| **PNG** | Solo logos (fondo transparente) | Transparencia nítida |

> **Tip:** Pueden usar [Squoosh](https://squoosh.app) o [TinyPNG](https://tinypng.com) para comprimir antes de subir.

---

## Resumen rápido por tipo

| Tipo de imagen | Resolución mínima | Aspecto | Peso máximo sugerido |
|---|---|---|---|
| Hero full-width | 1920 × 800 px | Paisaje ancho | ~200-300 KB |
| Hero medio | 1920 × 640 px | Paisaje ancho | ~150-250 KB |
| Hero pequeño | 1920 × 540 px | Paisaje ancho | ~150-200 KB |
| Fondo decorativo (CTA) | 1920 × 600 px | Paisaje ancho | ~100 KB (se muestra al 20% opacidad) |
| Foto lateral 4:3 | 800 × 600 px | Horizontal 4:3 | ~80-120 KB |
| Foto lateral 4:5 | 800 × 1000 px | Retrato | ~100-150 KB |
| Galería cuadrada | 800 × 800 px | Cuadrado 1:1 | ~80-120 KB |
| Card noticias | 640 × 480 px | Horizontal 4:3 | ~60-80 KB |
| Avatar sacerdote | 256 × 256 px | Cuadrado 1:1 | ~20-30 KB |
| Avatar pequeño | 96 × 96 px | Cuadrado 1:1 | ~10 KB |
| Logo | 80 × 80 px | Cuadrado 1:1 | PNG transparente |

---

## Detalle por página

### 🏠 Inicio (`home.blade.php`)

| # | Sección | Descripción sugerida | Resolución | Aspecto | Nombre sugerido |
|---|---------|---------------------|-----------|---------|-----------------|
| 1 | **Hero principal** | Vista exterior o interior del templo, preferiblemente con luz natural | 1920 × 800 px | Paisaje | `home-hero.webp` |
| 2 | **Mensaje del Párroco — Retrato** | Foto del Padre Javier, tipo retrato formal o en celebración | 800 × 1000 px | 4:5 retrato | `parroco-retrato.webp` |
| 3 | **Mensaje del Párroco — Avatar** | Misma foto del Padre, recortada al rostro | 96 × 96 px | 1:1 circular | `parroco-avatar.webp` |
| 4 | **P. Javier — Avatar sacerdotes** | Foto de rostro del Padre Javier | 256 × 256 px | 1:1 circular | `padre-javier.webp` |
| 5 | **P. Eduardo — Avatar sacerdotes** | Foto de rostro del Padre Eduardo | 256 × 256 px | 1:1 circular | `padre-eduardo.webp` |
| 6 | **CTA "Apoya nuestra Misión"** | Imagen decorativa (iglesia, comunidad, eucaristía) — se muestra a 20% opacidad | 1920 × 600 px | Paisaje | `cta-mision-bg.webp` |
| 7 | **Noticia Card 1** | Foto de la noticia/evento | 640 × 320 px | ~2:1 | `noticia-1.webp` |
| 8 | **Noticia Card 2** | Foto de la noticia/evento | 640 × 320 px | ~2:1 | `noticia-2.webp` |
| 9 | **Noticia Card 3** | Foto de la noticia/evento | 640 × 320 px | ~2:1 | `noticia-3.webp` |

---

### 🏛️ Nosotros (`nosotros.blade.php`)

| # | Sección | Descripción sugerida | Resolución | Aspecto | Nombre sugerido |
|---|---------|---------------------|-----------|---------|-----------------|
| 10 | **Hero** | Fachada del templo o vista panorámica | 1920 × 640 px | Paisaje | `nosotros-hero.webp` |
| 11 | **Reseña Histórica — Foto** | Foto histórica de la parroquia o fachada actual | 800 × 600 px | 4:3 | `nosotros-historia.webp` |
| 12 | **Galería foto 1** (principal grande) | Interior del templo | 800 × 800 px | 1:1 | `galeria-01.webp` |
| 13 | **Galería foto 2** | Celebración comunitaria | 800 × 800 px | 1:1 | `galeria-02.webp` |
| 14 | **Galería foto 3** | Catequesis o formación | 800 × 800 px | 1:1 | `galeria-03.webp` |
| 15 | **Galería foto 4** | Coro parroquial | 800 × 800 px | 1:1 | `galeria-04.webp` |
| 16 | **Galería foto 5** | Actividades pastorales | 800 × 800 px | 1:1 | `galeria-05.webp` |
| 17 | **Galería foto 6** (ancha, 2 cols) | Evento especial o procesión | 800 × 800 px | 1:1 | `galeria-06.webp` |
| 18 | **Galería foto 7** | Vida parroquial | 800 × 800 px | 1:1 | `galeria-07.webp` |
| 19 | **Galería foto 8** | Celebración eucarística | 800 × 800 px | 1:1 | `galeria-08.webp` |
| 20 | **CTA Final — Fondo** | Decorativa (baja opacidad) | 1920 × 600 px | Paisaje | `nosotros-cta-bg.webp` |

> **Nota galería**: Para que el lightbox (zoom) se vea nítido, subir las fotos a **1200 × 1200 px** mínimo.

---

### ⛪ Sacramentos Landing (`sacramentos/index.blade.php`)

| # | Sección | Descripción sugerida | Resolución | Aspecto | Nombre sugerido |
|---|---------|---------------------|-----------|---------|-----------------|
| 21 | **Hero** | Celebración de sacramento (eucaristía, bautismo) | 1920 × 640 px | Paisaje | `sacramentos-hero.webp` |
| 22 | **CTA Fondo** | Decorativa (baja opacidad) | 1920 × 600 px | Paisaje | `sacramentos-cta-bg.webp` |

---

### ✝️ Sacramentos individuales (6 vistas, usan `sacramento-layout`)

Cada sacramento necesita **1 imagen hero**. Actualmente las 6 comparten la misma.

| # | Sacramento | Descripción sugerida para la foto | Resolución | Nombre sugerido |
|---|-----------|----------------------------------|-----------|-----------------|
| 23 | **Bautismo** | Pila bautismal, ceremonia de bautizo | 1920 × 560 px | `sacramento-bautismo.webp` |
| 24 | **Eucaristía** | Elevación del cáliz, primera comunión | 1920 × 560 px | `sacramento-eucaristia.webp` |
| 25 | **Confirmación** | Obispo con crismera, imposición de manos | 1920 × 560 px | `sacramento-confirmacion.webp` |
| 26 | **Matrimonio** | Ceremonia nupcial en el altar | 1920 × 560 px | `sacramento-matrimonio.webp` |
| 27 | **Reconciliación** | Confesionario, momento de oración | 1920 × 560 px | `sacramento-reconciliacion.webp` |
| 28 | **Unción de Enfermos** | Momento de unción, visita a enfermo | 1920 × 560 px | `sacramento-uncion.webp` |

> ⚠️ **Requiere cambio técnico**: Actualmente el layout tiene la imagen hardcodeada. Se debe pasar como prop `heroImage` desde cada vista individual para poder personalizar.

---

### 🕊️ Dimensiones (4 vistas, usan `dimension-layout`)

Cada dimensión necesita **1 imagen** que se usa en 3 lugares: hero, foto lateral (4:3), y fondo CTA.

| # | Dimensión | Descripción sugerida | Resolución | Nombre sugerido |
|---|-----------|---------------------|-----------|-----------------|
| 29 | **Samaritana** | Obra social, visita a comunidades, despensas | 1920 × 640 px | `dimension-samaritana.webp` |
| 30 | **Comunidades** | Reunión comunitaria, delegados | 1920 × 640 px | `dimension-comunidades.webp` |
| 31 | **Pascual** | Liturgia, altar, eucaristía | 1920 × 640 px | `dimension-pascual.webp` |
| 32 | **Misionera** | Evangelización, catequistas, formación | 1920 × 640 px | `dimension-misionera.webp` |

> Como la misma imagen se usa en la sección lateral a 4:3, lo ideal es que la foto sea **1920 × 640 px** como mínimo y tenga el contenido centrado para que funcione bien al recortarse.

---

### 💒 Pastorales (6 vistas, usan `pastoral-layout`)

Misma estructura que dimensiones: 1 imagen por pastoral para hero + lateral + CTA fondo.

| # | Pastoral | Descripción sugerida | Resolución | Nombre sugerido |
|---|----------|---------------------|-----------|-----------------|
| 33 | **Familiar** | Familia en misa, reunión de parejas | 1920 × 640 px | `pastoral-familiar.webp` |
| 34 | **Juvenil** | Grupo de jóvenes, retiro, alabanza | 1920 × 640 px | `pastoral-juvenil.webp` |
| 35 | **Medios** | Equipo de comunicación, redes, transmisión | 1920 × 640 px | `pastoral-medios.webp` |
| 36 | **Vocacional** | Seminario, oración, discernimiento | 1920 × 640 px | `pastoral-vocacional.webp` |
| 37 | **Infantil** | Niños en catequesis, actividades infantiles | 1920 × 640 px | `pastoral-infantil.webp` |
| 38 | **Duelo** | Acompañamiento, oración, consuelo | 1920 × 640 px | `pastoral-duelo.webp` |

---

### 💰 Donaciones (`donaciones.blade.php`)

| # | Sección | Descripción sugerida | Resolución | Nombre sugerido |
|---|---------|---------------------|-----------|-----------------|
| 39 | **Hero** | Manos unidas, ofrendas, comunidad generosa | 1920 × 640 px | `donaciones-hero.webp` |

---

### 📞 Contacto (`contacto.blade.php`)

| # | Sección | Descripción sugerida | Resolución | Nombre sugerido |
|---|---------|---------------------|-----------|-----------------|
| 40 | **Hero** | Fachada del templo, puerta de entrada, oficina | 1920 × 540 px | `contacto-hero.webp` |

---

## 📁 Estructura de carpetas sugerida

```
public/images/
├── Logo_PCR.png              ← ya existe
├── Logo_PCR_Blanco.png       ← ya existe
├── heroes/
│   ├── home-hero.webp
│   ├── nosotros-hero.webp
│   ├── sacramentos-hero.webp
│   ├── donaciones-hero.webp
│   └── contacto-hero.webp
├── sacerdotes/
│   ├── padre-javier.webp     (256×256)
│   ├── padre-eduardo.webp    (256×256)
│   └── parroco-retrato.webp  (800×1000)
├── sacramentos/
│   ├── sacramento-bautismo.webp
│   ├── sacramento-eucaristia.webp
│   ├── sacramento-confirmacion.webp
│   ├── sacramento-matrimonio.webp
│   ├── sacramento-reconciliacion.webp
│   └── sacramento-uncion.webp
├── dimensiones/
│   ├── dimension-samaritana.webp
│   ├── dimension-comunidades.webp
│   ├── dimension-pascual.webp
│   └── dimension-misionera.webp
├── pastorales/
│   ├── pastoral-familiar.webp
│   ├── pastoral-juvenil.webp
│   ├── pastoral-medios.webp
│   ├── pastoral-vocacional.webp
│   ├── pastoral-infantil.webp
│   └── pastoral-duelo.webp
├── galeria/
│   ├── galeria-01.webp       (800×800 mín, idealmente 1200×1200)
│   ├── galeria-02.webp
│   ├── galeria-03.webp
│   ├── galeria-04.webp
│   ├── galeria-05.webp
│   ├── galeria-06.webp
│   ├── galeria-07.webp
│   └── galeria-08.webp
├── noticias/
│   ├── noticia-1.webp
│   ├── noticia-2.webp
│   └── noticia-3.webp
└── fondos/
    ├── cta-mision-bg.webp
    ├── nosotros-cta-bg.webp
    └── sacramentos-cta-bg.webp
```

---

## ✅ Checklist de entrega

Total de imágenes únicas necesarias: **~40 fotos**

- [ ] 5 héroes principales (home, nosotros, sacramentos, donaciones, contacto)
- [ ] 6 héroes sacramentos individuales
- [ ] 4 fotos dimensiones
- [ ] 6 fotos pastorales
- [ ] 8 fotos galería (Nosotros)
- [ ] 3 fotos noticias (home)
- [ ] 3 fotos sacerdotes (1 retrato + 2 avatares)
- [ ] 3 fondos decorativos CTA
- [ ] 2 logos (ya existen ✅)

---

## 📐 Tips para tomar las fotos

1. **Heroes**: Tomar en horizontal (paisaje), con el sujeto centrado. Dejar espacio arriba y abajo para el overlay oscuro + texto.
2. **Galería**: Pueden ser en cualquier orientación, se recortarán a cuadrado — centrar lo importante.
3. **Avatares**: Foto de busto/rostro, buena iluminación, fondo neutro.
4. **Noticias**: Fotos de eventos reales de la parroquia, bien iluminadas.
5. **Compresión**: Pasar todas por Squoosh → WebP → calidad 80% antes de subir.
