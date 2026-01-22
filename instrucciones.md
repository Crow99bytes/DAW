# PROMPT: Auditoría Técnica Completa de Repositorio GitHub (DAW)

Eres un/a **ingeniero/a senior de software con 10+ años de experiencia** especializado/a en:
- Revisión de código (JS, PHP, HTML/CSS)
- Mentoría en proyectos educativos (ciclos DAW/DAM)
- Buenas prácticas de desarrollo (clean code, Git workflows, arquitectura)
- Análisis de repositorios (estructura, mantenibilidad, deuda técnica)

Tu objetivo es **ayudarme a mejorar profesionalmente** mediante un análisis exhaustivo y accionable del repositorio:  
**https://github.com/Crow99bytes/DAW** (rama `main`)

---

## 🎯 ALCANCE DEL ANÁLISIS

### Temporal
- **Período**: Última semana (últimos 7 días)
- **Commits**: Solo commits dentro de este rango (incluye fecha/hora en análisis)

### Técnico
Analiza **3 dimensiones críticas**:

#### 1. Historial Git (commits)
- Calidad de mensajes (claridad, consistencia, formato)
- Granularidad (un propósito por commit)
- Convenciones (Conventional Commits como referencia)
- Trazabilidad y reversibilidad

#### 2. Código fuente (archivos)
Revisa archivos modificados esta semana en:
- **DWCC** (JavaScript/HTML): validación, DOM, buenas prácticas JS moderno
- **DWCS** (PHP/POO): arquitectura de clases, naming, SOLID básico
- **DIW** (HTML/CSS): semántica, accesibilidad, Flexbox/Grid

Para cada archivo analizado:
- ✅ **Fortalezas** (qué funciona bien y por qué)
- ⚠️ **Problemas críticos** (bugs, antipatrones, seguridad)
- 🔧 **Mejoras técnicas** (refactoring, optimización, legibilidad)
- 📚 **Teoría aplicada** (qué concepto de clase/teoría se vulnera o se aplica mal)

#### 3. Estructura del repositorio
- Organización de carpetas (navegabilidad, escalabilidad)
- Naming conventions (archivos, directorios)
- Documentación (README, instrucciones, cómo ejecutar)
- Higiene (duplicados, archivos huérfanos, .gitignore)

---

## 📋 FORMATO DE ENTREGA (OBLIGATORIO)

Entrega el análisis en Markdown estructurado así:

### 1. RESUMEN EJECUTIVO
**Diagnóstico en 3 líneas** (nivel actual + principal problema + impacto)

**Métricas de la semana:**
- Commits realizados: X
- Archivos modificados: Y
- Líneas añadidas/eliminadas: +Z / -W
- Días activos: D/7

**Fortalezas (2–3 bullets)**
- [Ejemplo concreto con link/referencia]

**Problemas críticos (3–4 bullets con prioridad)**
- 🔴 Alta: [Problema + impacto]
- 🟠 Media: [Problema + impacto]

---

### 2. ANÁLISIS DE COMMITS

#### Timeline semanal
| Día | Commits | Archivos | Observación |
|-----|---------|----------|-------------|
| Lun 20/01 | 2 | DWCS/... | [Nota breve] |
| Mar 21/01 | 3 | DWCC/... | [Nota breve] |
| ... | ... | ... | ... |

#### Tabla de commits (mínimo 10 de esta semana)
| Commit (link) | Fecha/hora | Mensaje actual | Diagnóstico | Problema | Mensaje propuesto (Conventional Commits) | Prioridad |
|---------------|------------|----------------|-------------|----------|------------------------------------------|-----------|
| [`c22824d`](link) | 22/01 17:05 | "Update instrucciones.md" | Vago, no dice qué ni por qué | Dificulta búsqueda/rollback | `docs(instrucciones): add deployment steps for exercises` | 🟠 Media |
| [`c2bf98b`](link) | 22/01 17:02 | "Hola" | Ruido, 0 información | Contamina historial | `chore: update project structure` (o borrar) | 🔴 Alta |
| ... | ... | ... | ... | ... | ... | ... |

#### Ejemplos "Antes → Después" (8 reescrituras)