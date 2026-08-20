<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet
    version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
    exclude-result-prefixes="sitemap image">

  <xsl:output
      method="html"
      encoding="UTF-8"
      indent="yes"/>

  <xsl:template match="/">

    <html lang="en">

      <head>

        <meta charset="UTF-8"/>

        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"/>

        <meta
            name="robots"
            content="noindex, follow"/>

        <meta
            name="theme-color"
            content="#111111"/>

        <title>Sitemap | Tim Gabaree</title>

        <meta
            name="description"
            content="Human-friendly XML sitemap for timgabaree.com, including public pages and associated images."/>

        <!-- Favicons -->
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="/favicon-96.png"/>

        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/apple-touch-icon.png"/>

        <link
            rel="icon"
            href="/favicon.ico"/>

        <style>
          :root {
            --page-bg: #0f1114;
            --surface: #171a1f;
            --surface-soft: #1d2127;
            --surface-raised: #232831;
            --text: #f4f6f8;
            --text-soft: #c4cad2;
            --muted: #929ba7;
            --line: rgba(255, 255, 255, 0.11);
            --accent: #7886a8;
            --accent-strong: #929fc0;
            --accent-soft: rgba(120, 134, 168, 0.17);
            --gold: #b89a66;
            --shadow: 0 18px 50px rgba(0, 0, 0, 0.25);
            --radius-lg: 24px;
            --radius-md: 16px;
            --radius-sm: 10px;
            --content-width: 1180px;
          }

          *,
          *::before,
          *::after {
            box-sizing: border-box;
          }

          html {
            scroll-behavior: smooth;
          }

          body {
            min-width: 320px;
            margin: 0;
            color: var(--text);
            background:
              radial-gradient(
                circle at top left,
                rgba(120, 134, 168, 0.20),
                transparent 38rem
              ),
              linear-gradient(
                180deg,
                #111318 0%,
                var(--page-bg) 100%
              );
            font-family: Roboto, Arial, Helvetica, sans-serif;
            line-height: 1.6;
          }

          a,
          a:visited {
            color: inherit;
            text-decoration: none;
          }

          a:focus-visible,
          summary:focus-visible {
            outline: 3px solid var(--accent-strong);
            outline-offset: 4px;
            border-radius: 6px;
          }

          .site-shell {
            width: min(
              calc(100% - 32px),
              var(--content-width)
            );
            margin: 0 auto;
          }

          /* =====================================================
             Hero
          ===================================================== */

          .hero {
            position: relative;
            overflow: hidden;
            padding: 76px 0 54px;
            border-bottom: 1px solid var(--line);
          }

          .hero::before {
            position: absolute;
            inset: 0;
            content: "";
            pointer-events: none;
            background:
              linear-gradient(
                135deg,
                rgba(184, 154, 102, 0.08),
                transparent 34%
              ),
              radial-gradient(
                circle at 78% 12%,
                rgba(120, 134, 168, 0.18),
                transparent 28rem
              );
          }

          .hero-inner {
            position: relative;
            z-index: 1;
          }

          .eyebrow {
            margin: 0 0 12px;
            color: var(--gold);
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
          }

          h1 {
            max-width: 850px;
            margin: 0;
            font-size: clamp(2.6rem, 6vw, 5.4rem);
            line-height: 0.98;
            letter-spacing: -0.045em;
          }

          .hero-copy {
            max-width: 760px;
            margin: 24px 0 0;
            color: var(--text-soft);
            font-size: clamp(1rem, 2vw, 1.18rem);
          }

          /* =====================================================
             Buttons
          ===================================================== */

          .button,
          .button:visited {
            display: inline-flex;
            flex: 0 0 auto;
            align-items: center;
            justify-content: center;
            width: auto;
            min-height: 46px;
            padding: 11px 18px;
            color: #ffffff;
            background: var(--accent);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 999px;
            font-weight: 700;
            text-decoration: none;
            transition:
              transform 0.2s ease,
              background 0.2s ease,
              border-color 0.2s ease;
          }

          .button:hover,
          .button:focus {
            color: #ffffff;
            background: var(--accent-strong);
            border-color: rgba(255, 255, 255, 0.30);
            text-decoration: none;
            transform: translateY(-2px);
          }

          /* =====================================================
             Statistics
          ===================================================== */

          .stats {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin: -22px auto 0;
          }

          .stat-card {
            min-height: 132px;
            padding: 24px;
            background: rgba(23, 26, 31, 0.94);
            border: 1px solid var(--line);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow);
            backdrop-filter: blur(16px);
          }

          .stat-label {
            display: block;
            color: var(--muted);
            font-size: 0.80rem;
            font-weight: 700;
            letter-spacing: 0.11em;
            text-transform: uppercase;
          }

          .stat-value {
            display: block;
            margin-top: 6px;
            color: var(--text);
            font-size: clamp(1.55rem, 4vw, 2.4rem);
            font-weight: 700;
            line-height: 1.1;
          }

          /* =====================================================
             Main Content
          ===================================================== */

          .content {
            padding: 54px 0 32px;
          }

          .section-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 24px;
          }

          .section-heading h2 {
            margin: 0;
            font-size: clamp(1.65rem, 4vw, 2.6rem);
            letter-spacing: -0.025em;
          }

          .section-heading p {
            max-width: 610px;
            margin: 0;
            color: var(--muted);
          }

          /* =====================================================
             Page Cards
          ===================================================== */

          .page-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px;
          }

          .page-card {
            overflow: hidden;
            background:
              linear-gradient(
                145deg,
                rgba(255, 255, 255, 0.035),
                transparent 38%
              ),
              var(--surface);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            box-shadow: 0 14px 42px rgba(0, 0, 0, 0.18);
          }

          .page-card-inner {
            padding: 26px;
          }

          .page-kicker {
            margin: 0 0 6px;
            color: var(--gold);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.11em;
            text-transform: uppercase;
          }

          .page-title {
            margin: 0;
            font-size: clamp(1.45rem, 3vw, 2rem);
            line-height: 1.2;
          }

          .page-url {
            display: inline-block;
            max-width: 100%;
            margin-top: 9px;
            color: var(--accent-strong);
            overflow-wrap: anywhere;
            text-decoration-thickness: 1px;
            text-underline-offset: 3px;
            transition:
              color 0.2s ease,
              opacity 0.2s ease;
          }

          .page-url:hover,
          .page-url:focus {
            color: #b6c1df;
            opacity: 0.90;
          }

          /* =====================================================
             Page Metadata
          ===================================================== */

          .metadata {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
            margin-top: 22px;
          }

          .metadata-item {
            min-width: 0;
            padding: 13px;
            background: rgba(255, 255, 255, 0.035);
            border: 1px solid var(--line);
            border-radius: var(--radius-sm);
          }

          .metadata-label {
            display: block;
            color: var(--muted);
            font-size: 0.67rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
          }

          .metadata-value {
            display: block;
            margin-top: 4px;
            color: var(--text);
            font-size: 0.92rem;
            font-weight: 700;
            overflow-wrap: anywhere;
          }

          /* =====================================================
             Image Details
          ===================================================== */

          details {
            background: rgba(255, 255, 255, 0.018);
            border-top: 1px solid var(--line);
          }

          summary {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 18px 26px;
            color: var(--text-soft);
            cursor: pointer;
            font-weight: 700;
            list-style: none;
          }

          summary::-webkit-details-marker {
            display: none;
          }

          summary::after {
            display: inline-grid;
            flex: 0 0 30px;
            place-items: center;
            width: 30px;
            height: 30px;
            color: var(--accent-strong);
            background: var(--accent-soft);
            border-radius: 50%;
            content: "+";
            font-size: 1.2rem;
          }

          details[open] summary::after {
            content: "−";
          }

          .image-list {
            display: grid;
            gap: 14px;
            padding: 0 26px 26px;
          }

          .image-card {
            display: grid;
            grid-template-columns: 118px minmax(0, 1fr);
            gap: 16px;
            align-items: center;
            padding: 12px;
            background: var(--surface-soft);
            border: 1px solid var(--line);
            border-radius: 14px;
          }

          .image-card img {
            display: block;
            width: 118px;
            height: 86px;
            background: #0b0d10;
            border-radius: 10px;
            object-fit: cover;
          }

          .image-title {
            margin: 0;
            color: var(--text);
            font-size: 1rem;
            line-height: 1.35;
          }

          .image-link {
            display: inline-block;
            margin-top: 8px;
            color: var(--accent-strong);
            font-size: 0.82rem;
            overflow-wrap: anywhere;
          }

          .image-link:hover,
          .image-link:focus {
            color: #b6c1df;
          }

          .empty-images {
            margin: 0;
            padding: 0 26px 26px;
            color: var(--muted);
          }
			
		  /* =====================================================
			 Return Navigation
		  ===================================================== */

		  .return-navigation {
			display: flex;
			justify-content: center;
			width: min(
			  calc(100% - 32px),
			  var(--content-width)
			);
			margin: 0 auto;
			padding: 0 0 32px;
		  }

		  .return-navigation .button,
		  .return-navigation .button:visited {
			flex: 0 0 auto;
			width: auto;
			max-width: 100%;
		  }

          /* =====================================================
             Footer
          ===================================================== */

          .site-footer {
            padding: 30px 0 42px;
            color: var(--muted);
            text-align: center;
            border-top: 1px solid var(--line);
          }

          .site-footer p {
            margin: 0;
          }

          .site-footer p + p {
            margin-top: 6px;
          }

          .site-footer a {
            color: var(--text-soft);
            text-decoration: none;
          }

          .site-footer a:hover,
          .site-footer a:focus-visible {
            color: var(--accent);
            text-decoration: underline;
          }

          /* =====================================================
             Responsive: Tablet
          ===================================================== */

          @media (max-width: 920px) {
            .stats,
            .page-grid {
              grid-template-columns: 1fr;
            }

            .section-heading {
              display: block;
            }

            .section-heading p {
              margin-top: 10px;
            }

          }

          /* =====================================================
             Responsive: Mobile
          ===================================================== */

          @media (max-width: 700px) {
            .hero {
              padding-top: 54px;
            }

            .stats {
              margin-top: -14px;
            }

            .image-card {
              grid-template-columns: 92px minmax(0, 1fr);
            }

            .image-card img {
              width: 92px;
              height: 76px;
            }
          }

          /* =====================================================
             Responsive: Small Mobile
          ===================================================== */

          @media (max-width: 480px) {
            .site-shell {
              width: min(
                calc(100% - 22px),
                var(--content-width)
              );
            }

            .page-card-inner,
            summary {
              padding-right: 19px;
              padding-left: 19px;
            }

            .metadata {
              grid-template-columns: 1fr;
            }

            .image-list {
              padding-right: 19px;
              padding-left: 19px;
            }

            .image-card {
              grid-template-columns: 1fr;
            }

            .image-card img {
              width: 100%;
              height: 180px;
            }
          }

          /* =====================================================
             Reduced Motion
          ===================================================== */

          @media (prefers-reduced-motion: reduce) {
            html {
              scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
              transition-duration: 0.01ms !important;
              animation-duration: 0.01ms !important;
              animation-iteration-count: 1 !important;
            }
          }
        </style>

      </head>

      <body>

        <!-- Hero -->
        <header class="hero">

          <div class="site-shell hero-inner">

            <p class="eyebrow">
              XML Sitemap
            </p>

            <h1>
              TimGabaree.com Sitemap
            </h1>

            <p class="hero-copy">
              A human-friendly index of the public pages and images available
              on timgabaree.com. This XML sitemap also helps search engines
              discover and understand the site’s content.
            </p>
            
          </div>

        </header>
        <!-- End Hero -->

        <!-- Statistics -->
        <div
            class="site-shell stats"
            aria-label="Sitemap statistics">

          <div class="stat-card">

            <span class="stat-label">
              Total Pages
            </span>

            <span class="stat-value">
              <xsl:value-of
                  select="count(sitemap:urlset/sitemap:url)"/>
            </span>

          </div>

          <div class="stat-card">

            <span class="stat-label">
              Total Images
            </span>

            <span class="stat-value">
              <xsl:value-of
                  select="count(sitemap:urlset/sitemap:url/image:image)"/>
            </span>

          </div>

          <div class="stat-card">

            <span class="stat-label">
              Latest Update
            </span>

            <span class="stat-value">

              <xsl:for-each
                  select="sitemap:urlset/sitemap:url/sitemap:lastmod">

                <xsl:sort
                    select="."
                    data-type="text"
                    order="descending"/>

                <xsl:if test="position() = 1">

                  <xsl:call-template name="format-date">

                    <xsl:with-param
                        name="date"
                        select="."/>

                  </xsl:call-template>

                </xsl:if>

              </xsl:for-each>

            </span>

          </div>

        </div>
        <!-- End Statistics -->

        <!-- Main Content -->
        <main class="site-shell content">

          <div class="section-heading">

            <div>

              <p class="eyebrow">
                Public Pages
              </p>

              <h2>
                Explore the site
              </h2>

            </div>

            <p>
              Each card includes the canonical page URL, last significant
              update, and the images associated with that page.
            </p>

          </div>

          <div class="page-grid">

            <xsl:for-each select="sitemap:urlset/sitemap:url">

              <article class="page-card">

                <div class="page-card-inner">

                  <p class="page-kicker">
                    Site Page
                  </p>

                  <h3 class="page-title">

                    <xsl:call-template name="page-title">

                      <xsl:with-param
                          name="url"
                          select="sitemap:loc"/>

                    </xsl:call-template>

                  </h3>

                  <a
                      class="page-url"
                      href="{sitemap:loc}">

                    <xsl:value-of select="sitemap:loc"/>

                  </a>

                  <div class="metadata">

                    <div class="metadata-item">

                      <span class="metadata-label">
                        Updated
                      </span>

                      <span class="metadata-value">

                        <xsl:call-template name="format-date">

                          <xsl:with-param
                              name="date"
                              select="sitemap:lastmod"/>

                        </xsl:call-template>

                      </span>

                    </div>

                    <div class="metadata-item">

                      <span class="metadata-label">
                        Images
                      </span>

                      <span class="metadata-value">

                        <xsl:value-of select="count(image:image)"/>

                      </span>

                    </div>

                  </div>

                </div>

                <xsl:choose>

                  <xsl:when test="image:image">

                    <details>

                      <summary>

                        <span>View <xsl:value-of select="count(image:image)"/> indexed image<xsl:if test="count(image:image) != 1">s</xsl:if></span>

                      </summary>

                      <div class="image-list">

                        <xsl:for-each select="image:image">

                          <article class="image-card">

                            <a
                                href="{image:loc}"
                                aria-label="Open full-size image">

                              <img
                                  src="{image:loc}"
                                  alt=""
                                  loading="lazy"
                                  decoding="async"/>

                            </a>

                            <div>

                              <h4 class="image-title">

                                <xsl:call-template name="image-title">

                                  <xsl:with-param
                                      name="url"
                                      select="image:loc"/>

                                </xsl:call-template>

                              </h4>

                              <a
                                  class="image-link"
                                  href="{image:loc}">
                                View image
                              </a>

                            </div>

                          </article>

                        </xsl:for-each>

                      </div>

                    </details>

                  </xsl:when>

                  <xsl:otherwise>

                    <p class="empty-images">
                      No images are listed for this page.
                    </p>

                  </xsl:otherwise>

                </xsl:choose>

              </article>

            </xsl:for-each>

          </div>
			
        </main>
        <!-- End Main Content -->

        <!-- Return Navigation -->
        <nav
            class="return-navigation"
            aria-label="Return navigation">

          <a
              class="button"
              href="/">
            Return to Main Page
          </a>

        </nav>
        <!-- End Return Navigation -->

        <!-- Footer -->
        <footer class="site-footer">

          <div class="site-shell">

            <p>

              <a href="/">
                Home
              </a>

              <xsl:text> | </xsl:text>

              <a href="/contact">
                Connect
              </a>

              <xsl:text> | </xsl:text>

              <a href="/privacy">
                Privacy Policy
              </a>

            </p>

            <p>
              © 2023–2026 Tim Gabaree. All Rights Reserved.
            </p>

          </div>

        </footer>
        <!-- End Footer -->

      </body>

    </html>

  </xsl:template>

  <!-- =====================================================
       Page Title
  ====================================================== -->

  <xsl:template name="page-title">

    <xsl:param name="url"/>

    <xsl:choose>

      <xsl:when test="$url = 'https://timgabaree.com/'">
        Executive Profile
      </xsl:when>

      <xsl:when test="$url = 'https://timgabaree.com/about'">
        About Tim
      </xsl:when>

      <xsl:when test="$url = 'https://timgabaree.com/contact'">
        Executive Contact and Resources
      </xsl:when>

      <xsl:when test="$url = 'https://timgabaree.com/privacy'">
        Privacy Policy
      </xsl:when>

      <xsl:otherwise>

        <xsl:call-template name="filename-title">

          <xsl:with-param
              name="url"
              select="$url"/>

        </xsl:call-template>

      </xsl:otherwise>

    </xsl:choose>

  </xsl:template>

  <!-- =====================================================
       Page Filename to Title
  ====================================================== -->

  <xsl:template name="filename-title">

    <xsl:param name="url"/>

    <xsl:variable
        name="after-domain"
        select="substring-after($url, 'timgabaree.com/')"/>

    <xsl:choose>

      <xsl:when test="string-length($after-domain) = 0">
        Tim Gabaree
      </xsl:when>

      <xsl:otherwise>

        <xsl:call-template name="replace-separators">

          <xsl:with-param
              name="text"
              select="$after-domain"/>

        </xsl:call-template>

      </xsl:otherwise>

    </xsl:choose>

  </xsl:template>

  <!-- =====================================================
       Image URL to Readable Title
  ====================================================== -->

  <xsl:template name="image-title">

  	<xsl:param name="url"/>

  	<xsl:value-of
      select="substring-after($url, '/media/')"/>

  </xsl:template>

  <!-- =====================================================
       Replace Hyphens and Underscores
  ====================================================== -->

  <xsl:template name="replace-separators">

    <xsl:param name="text"/>

    <xsl:choose>

      <xsl:when test="contains($text, '-')">

        <xsl:value-of select="substring-before($text, '-')"/>

        <xsl:text> </xsl:text>

        <xsl:call-template name="replace-separators">

          <xsl:with-param
              name="text"
              select="substring-after($text, '-')"/>

        </xsl:call-template>

      </xsl:when>

      <xsl:when test="contains($text, '_')">

        <xsl:value-of select="substring-before($text, '_')"/>

        <xsl:text> </xsl:text>

        <xsl:call-template name="replace-separators">

          <xsl:with-param
              name="text"
              select="substring-after($text, '_')"/>

        </xsl:call-template>

      </xsl:when>

      <xsl:otherwise>
        <xsl:value-of select="$text"/>
      </xsl:otherwise>

    </xsl:choose>

  </xsl:template>

  <!-- =====================================================
       Date Formatting
  ====================================================== -->

  <xsl:template name="format-date">

    <xsl:param name="date"/>

    <xsl:choose>

      <xsl:when test="string-length($date) &gt;= 10">

        <xsl:variable
            name="year"
            select="substring($date, 1, 4)"/>

        <xsl:variable
            name="month"
            select="substring($date, 6, 2)"/>

        <xsl:variable
            name="day"
            select="number(substring($date, 9, 2))"/>

        <xsl:choose>

          <xsl:when test="$month = '01'">January</xsl:when>
          <xsl:when test="$month = '02'">February</xsl:when>
          <xsl:when test="$month = '03'">March</xsl:when>
          <xsl:when test="$month = '04'">April</xsl:when>
          <xsl:when test="$month = '05'">May</xsl:when>
          <xsl:when test="$month = '06'">June</xsl:when>
          <xsl:when test="$month = '07'">July</xsl:when>
          <xsl:when test="$month = '08'">August</xsl:when>
          <xsl:when test="$month = '09'">September</xsl:when>
          <xsl:when test="$month = '10'">October</xsl:when>
          <xsl:when test="$month = '11'">November</xsl:when>
          <xsl:when test="$month = '12'">December</xsl:when>

        </xsl:choose>

        <xsl:text> </xsl:text>

        <xsl:value-of select="$day"/>

        <xsl:text>, </xsl:text>

        <xsl:value-of select="$year"/>

      </xsl:when>

      <xsl:otherwise>
        <xsl:value-of select="$date"/>
      </xsl:otherwise>

    </xsl:choose>

  </xsl:template>

</xsl:stylesheet>