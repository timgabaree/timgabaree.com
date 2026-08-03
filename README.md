# TimGabaree.com

Official source code for **https://timgabaree.com**, the executive website of **Tim Gabaree**—a Portfolio CIO and technology executive specializing in technology value creation, enterprise performance, governance, AI strategy, and operating model transformation.

---

# Overview

TimGabaree.com is a professionally designed executive website that serves as a central destination for Tim Gabaree's executive profile, leadership experience, advisory work, publications, and professional contact information.

The site is designed to support executive networking, board opportunities, executive recruiting, consulting engagements, and professional speaking while emphasizing performance, accessibility, maintainability, and search engine optimization.

---

# Site Features

The website includes:

- Executive profile and professional biography
- Leadership philosophy
- Executive résumé
- Board résumé and board biography
- Executive biography
- Professional experience and measurable results
- Technology expertise
- Education and certifications
- Leadership Q&A
- Professional testimonials
- Personal interests
- Executive contact page
- Secure contact form
- Thank-you page with conversion tracking
- Downloadable vCard
- Calendly scheduling integration
- QR code mobile access
- Privacy Policy
- Structured data (Schema.org)
- XML sitemap
- Accessibility enhancements
- SEO optimization

---

# Technology Stack

The site is intentionally lightweight and framework-free.

## Backend

- PHP 8+
- Modular PHP architecture
- Shared configuration and helper libraries

## Frontend

- HTML5
- CSS3
- Vanilla JavaScript

## Integrations

- Google Tag Manager
- Google Analytics 4
- Calendly
- DocSend
- LinkedIn

## Development

- Adobe Dreamweaver
- Git
- GitHub

---

# Project Structure

```
/
├── index.php
├── about.php
├── contact.php
├── thank-you.php
├── privacy.php
├── hello.php
├── contact-submit.php
│
├── css/
├── fonts/
├── js/
├── media/
├── includes/
│   ├── bootstrap.php
│   ├── config/
│   ├── components/
│   ├── forms/
│   ├── helpers/
│   ├── schema/
│   ├── security/
│   └── ...
│
├── sitemap.xml
├── robots.txt
└── README.md
```

---

# Architecture

The website follows a modular PHP architecture built around reusable components.

Common functionality is centralized to minimize duplication and simplify maintenance.

Shared components include:

- Site configuration
- Metadata generation
- Navigation
- Footer
- Structured data
- Security utilities
- Form processing
- Helper functions

The `/includes` directory is protected from direct web access.

---

# Contact Form Security

The executive contact form includes multiple layers of protection.

### Security Features

- CSRF protection
- Honeypot spam detection
- Origin validation
- Rate limiting
- Request size limits
- Server-side validation
- Email validation
- Header injection protection
- Output escaping
- Input sanitization

---

# Search Engine Optimization

The site is optimized for search engines through:

- Semantic HTML
- Schema.org JSON-LD
- Open Graph metadata
- X (Twitter) Cards
- Canonical URLs
- XML sitemap
- Optimized metadata
- Optimized image assets
- Clean URL structure

---

# Accessibility

Accessibility is incorporated throughout the project.

Features include:

- Semantic HTML
- ARIA landmarks
- Accessible navigation
- Screen-reader support
- Keyboard accessibility
- Focus indicators
- Reduced-motion support
- Proper heading hierarchy
- Descriptive image alt text

---

# Performance

The site emphasizes fast loading and minimal dependencies.

Optimizations include:

- Framework-free architecture
- Local font hosting
- Modern WebP images
- Deferred JavaScript
- Shared reusable components
- Lightweight CSS
- Minimal HTTP requests

---

# Development

Clone the repository:

```bash
git clone https://github.com/timgabaree/timgabaree.com.git
cd timgabaree.com
```

### Typical Git Workflow

Check status:

```bash
git status
```

Stage files:

```bash
git add .
```

Commit:

```bash
git commit -m "Describe your changes"
```

Update local branch:

```bash
git pull --rebase origin main
```

Push changes:

```bash
git push origin main
```

Create a feature branch (optional):

```bash
git checkout -b feature/my-feature
```

---

# Deployment

Production hosting is provided by GoDaddy.

Source control is maintained through GitHub.

Deployment is performed after testing in the local development environment.

---

# Contact

Professional inquiries:

**https://timgabaree.com/contact**

Executive profile:

**https://timgabaree.com**

---

# License

Copyright © 2023–2026 Tim Gabaree

All Rights Reserved.

This repository contains proprietary source code, designs, written content, graphics, and other intellectual property owned by Tim Gabaree.

No portion of this project may be copied, redistributed, modified, republished, or reused without prior written permission.
