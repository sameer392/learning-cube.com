# Learning-Cube

**Learning-Cube Coaching Classes for STD 6th to 12th** — India’s trusted tutoring and coaching hub for Classes 6–12 across CBSE, ICSE, State Boards, IB, and Cambridge.

> *Strong Foundations. Confident Results.*

---

## About

Learning-Cube is a marketing and informational website for a coaching centre that offers:

- **Junior Foundation Program** (Classes 6–8) — concept-building, homework support, Olympiad prep  
- **High School Board Prep** (Classes 9–10) — NCERT-focused, chapter-wise tests, board readiness  
- **Senior Excellence Program** (Classes 11–12) — Science, Commerce, Humanities; JEE, NEET, CUET support  
- **Crash Course & Holiday Batches** — short-term revision and intensives  

The site highlights strengths (experienced teachers, chapter-wise tests, small batches, performance reports, counselling), a step-by-step support model, and links to contact, resources, and Google reviews.

---

## Website structure

| Page | Route | Description |
|------|-------|-------------|
| Home | `/` | Hero, coaching programs, strengths, “How Learning-Cube Supports Your Child” |
| About | `/about` | Our Story, Meet Our Team, Mission, Vision and Value |
| Programs | `/programs` | Program details, boards, mode, and frequency |
| Results & Testimonials | `/results` | Stats, student stories, testimonial carousel with “View all reviews” (Google) |
| Resources | `/resources` | Articles and guides |
| Contact | `/contact` | Phone, email, hours, address, and contact form / CTAs |
| Sitemap | `/sitemap.xml` | XML sitemap for search engines (used when `APP_URL` is e.g. `https://learning-cube.com`) |

---

## Tech stack

- **Backend:** Laravel 12, PHP 8.2  
- **Frontend:** Blade, Tailwind CSS 4, Vite, Remix Icon  
- **Config:** `config/learningcube.php` — brand, navigation, programs, strengths, support steps, results, testimonials, resources, contact, footer, Google reviews URL  

---

## Repository

```
https://github.com/sameer392/learning-cube.com.git
```

---

## Setup

### Requirements

- PHP 8.2+  
- Composer  
- Node.js 18+ and npm  
- (Optional) MySQL / PostgreSQL / SQLite if using DB features  

### Install from Git (on a server)

Clone the repo, install dependencies, and build assets:

```bash
# 1. Clone the repository
git clone https://github.com/sameer392/learning-cube.com.git
cd learning-cube.com

# 2. Install PHP dependencies
composer install --optimize-autoloader --no-dev

# 3. Environment file
cp .env.example .env
php artisan key:generate

# 4. Install Node dependencies and build front-end assets
npm install
npm run build

# 5. (Optional) Cache config for production
php artisan config:cache
```

**Configure `.env`** — set at least `APP_NAME`, `APP_URL`, and DB credentials if you use the database.

**Web server** — set the document root to the `public/` directory (e.g. Apache `DocumentRoot` or nginx `root`).

#### For development (local)

Use `composer install` and `npm install` without `--no-dev`, then run:

```bash
npm run dev
# In another terminal:
php artisan serve
```

### Quick reference (existing project)

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
npm run build
```

---

## Configuration

Editable content is centralised in **`config/learningcube.php`**:

| Key | Purpose |
|-----|---------|
| `brand` | Name, tagline, descriptor |
| `navigation` | Main menu links |
| `programs` | Program names, grades, focus, boards, mode, frequency |
| `strengths` | “Our Strengths & Features” intro and items |
| `support_steps` | “How Learning-Cube Supports Your Child” steps and icons |
| `results` | Stats, testimonials, student stories, `google_reviews_url` |
| `resources` | Resource items |
| `contact` | Phone, email, hours, address, social |
| `footer` | Footer title, description, image, links, address, policies, copyright |

To change the “View all reviews” link, set `results.google_reviews_url` to your Google Business / Maps reviews URL.

**Sitemap** — `/sitemap.xml` is generated from `APP_URL` and lists Home, About, Programs, Results, Resources, and Contact. Set `APP_URL=https://learning-cube.com` in `.env` for production. `public/robots.txt` references `https://learning-cube.com/sitemap.xml`.

---

## Project structure (relevant parts)

```
app/Http/Controllers/PageController.php   # Serves all pages
config/learningcube.php                   # Site content and settings
resources/views/
  layouts/app.blade.php                   # Header, main, footer
  pages/
    home.blade.php
    about.blade.php
    programs.blade.php
    results.blade.php
    resources.blade.php
    contact.blade.php
public/
  images/                                 # Logo, homepage, footer, testimonials, icons
  favicon/
routes/web.php                            # Page routes
```

---

## Assets

- **Images:** `public/images/` — e.g. `logo.svg`, `footer_image.png`, `testimonial_left_image.png` / `.webp`, `homepage/coaching_program.png`, `icon_1.png`–`icon_5.png`  
- **Favicons:** `public/favicon/`  
- **Styles/scripts:** `resources/css/app.css`, `resources/js/app.js`; built output in `public/build/` via Vite  

---

## License

MIT.
