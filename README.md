# TimGabaree.com

This repository contains the source code for **https://timgabaree.com**, the professional website of Tim Gabaree, a Portfolio CIO and technology executive focused on technology value creation, enterprise performance, governance, and operating model transformation.

---

## Project Overview

TimGabaree.com serves as a professional executive website and personal brand platform. It includes:

- Executive profile and biography
- Professional résumé and executive documents
- Board and advisory information
- Leadership philosophy and experience
- Contact page with secure contact form
- Downloadable vCard
- Calendly scheduling integration
- Professional blog and social media links
- Structured data (Schema.org) for search engines
- SEO-optimized metadata throughout the site

---

## Technology Stack

The site is built using:

- PHP 8+
- HTML5
- CSS3
- Vanilla JavaScript
- Schema.org JSON-LD
- Google Tag Manager
- Google Analytics
- Dreamweaver (primary development environment)
- Git & GitHub (source control)

---

## Architecture

The site uses a modular PHP architecture with reusable components.

```
/
├── index.php
├── about.php
├── hello.php
├── privacy.php
├── thank-you.php
├── hello-submit.php
│
├── includes/
│   ├── bootstrap.php
│   ├── config.php
│   ├── head.php
│   ├── header.php
│   ├── footer.php
│   ├── schema-*.php
│   └── ...
│
├── css/
├── fonts/
├── media/
└── sitemap.xml
```

Common page elements such as metadata, structured data, navigation, footer content, configuration values, and reusable helper functions are centralized under the **/includes** directory.

Direct browser access to the **/includes** directory is disabled.

---

## Features

- Responsive design
- Reusable page templates
- Centralized site configuration
- Shared metadata and Open Graph handling
- Modular Schema.org generation
- Secure contact form
  - Honeypot spam protection
  - Request size limits
  - Rate limiting
  - Origin validation
  - Server-side validation
  - Header injection protection
- Google Tag Manager integration
- SEO optimization
- Accessibility-focused markup

---

## Local Development

Clone the repository:

```bash
git clone https://github.com/timgabaree/timgabaree.com.git
cd timgabaree.com
```

If using Dreamweaver:

1. Open Dreamweaver.
2. Define the local site.
3. Configure the testing server if needed.
4. Configure the remote FTP/SFTP connection.

---

## Git Workflow

Check status:

```bash
git status
```

Stage changes:

```bash
git add .
```

Commit:

```bash
git commit -m "Describe your changes"
```

Pull latest changes:

```bash
git pull --rebase origin main
```

Push changes:

```bash
git push origin main
```

Feature branches (optional):

```bash
git checkout -b feature/my-feature
```

---

## Deployment

Production hosting is provided through GoDaddy.

GitHub serves as the source-control repository.

Deployment is performed after testing using the configured hosting workflow.

---

## Contact

For professional inquiries, visit:

**https://timgabaree.com/hello.php**

---

## License

Copyright © 2023–2026 Tim Gabaree

All Rights Reserved.

This repository contains proprietary source code and content. No portion of this project may be copied, redistributed, modified, or reused without prior written permission from Tim Gabaree.
