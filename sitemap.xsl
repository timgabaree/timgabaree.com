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
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" content="noindex, follow"/>
    <meta name="theme-color" content="#111111"/>
    <title>Sitemap | Tim Gabaree</title>
    <meta
          name="description"
          content="Human-friendly XML sitemap for timgabaree.com, including page metadata and indexed images."/>
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png?v=20260712.01"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=20260712.01"/>
    <link rel="icon" href="/favicon.ico?v=20260712.01"/>
    <style>
:root {
--page-bg: #0f1114;
--surface: #171a1f;
--surface-soft: #1d2127;
--surface-raised: #232831;
--text: #f4f6f8;
--text-soft: #c4cad2;
--muted: #929ba7;
--line: rgba(255,255,255,.11);
--accent: #7886a8;
--accent-strong: #929fc0;
--accent-soft: rgba(120,134,168,.17);
--gold: #b89a66;
--shadow: 0 18px 50px rgba(0,0,0,.25);
--radius-lg: 24px;
--radius-md: 16px;
--radius-sm: 10px;
--content-width: 1180px;
}
* {
	box-sizing: border-box;
}
html {
	scroll-behavior: smooth;
}
body {
	margin: 0;
	min-width: 320px;
	background: radial-gradient(circle at top left, rgba(120,134,168,.20), transparent 38rem), linear-gradient(180deg, #111318 0%, var(--page-bg) 100%);
	color: var(--text);
	font-family: Roboto, Arial, Helvetica, sans-serif;
	line-height: 1.6;
}
a, a:visited {
	color: inherit;
	text-decoration: none;
}
a:hover, a:focus {
	text-decoration: none;
	transform: translateY(-2px);
	opacity: .85;
}
a {
	color: inherit;
}
a:focus-visible, summary:focus-visible {
outline: 3px solid var(--accent-strong);
outline-offset: 4px;
border-radius: 6px;
}
.site-shell {
	width: min(calc(100% - 32px), var(--content-width));
	margin: 0 auto;
}
.hero {
	position: relative;
	overflow: hidden;
	padding: 76px 0 54px;
	border-bottom: 1px solid var(--line);
}
.hero::before {
	content: "";
	position: absolute;
	inset: 0;
	pointer-events: none;
	background: linear-gradient(135deg, rgba(184,154,102,.08), transparent 34%), radial-gradient(circle at 78% 12%, rgba(120,134,168,.18), transparent 28rem);
}
.hero-inner {
	position: relative;
	z-index: 1;
}
.eyebrow {
	margin: 0 0 12px;
	color: var(--gold);
	font-size: .82rem;
	font-weight: 700;
	letter-spacing: .16em;
	text-transform: uppercase;
}
h1 {
	max-width: 850px;
	margin: 0;
	font-size: clamp(2.6rem, 6vw, 5.4rem);
	line-height: .98;
	letter-spacing: -.045em;
}
.hero-copy {
	max-width: 760px;
	margin: 24px 0 0;
	color: var(--text-soft);
	font-size: clamp(1rem, 2vw, 1.18rem);
}
.hero-actions {
	display: flex;
	justify-content: flex-start;
	align-items: center;
	gap: 1rem;
	flex-wrap: wrap;
	margin-top: 1rem;
}
.hero-actions .button {
	flex: 0 0 auto;
	width: auto;
}
.button {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-height: 46px;
	padding: 11px 18px;
	border: 1px solid rgba(255,255,255,.18);
	border-radius: 999px;
	background: var(--accent);
	color: #fff;
	font-weight: 700;
	text-decoration: none;
	transition: transform .2s ease, background .2s ease, border-color .2s ease;
}
.button:hover {
	transform: translateY(-2px);
	background: var(--accent-strong);
	border-color: rgba(255,255,255,.3);
}
.button-secondary {
	background: rgba(255,255,255,.06);
}
.stats {
	display: grid;
	grid-template-columns: repeat(3, minmax(0, 1fr));
	gap: 16px;
	margin: -22px auto 0;
	position: relative;
	z-index: 2;
}
.stat-card {
	min-height: 132px;
	padding: 24px;
	border: 1px solid var(--line);
	border-radius: var(--radius-md);
	background: rgba(23,26,31,.94);
	box-shadow: var(--shadow);
	backdrop-filter: blur(16px);
}
.stat-label {
	display: block;
	color: var(--muted);
	font-size: .8rem;
	font-weight: 700;
	letter-spacing: .11em;
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
.content {
	padding: 54px 0 78px;
}
.section-heading {
	display: flex;
	justify-content: space-between;
	align-items: end;
	gap: 24px;
	margin-bottom: 24px;
}
.section-heading h2 {
	margin: 0;
	font-size: clamp(1.65rem, 4vw, 2.6rem);
	letter-spacing: -.025em;
}
.section-heading p {
	max-width: 610px;
	margin: 0;
	color: var(--muted);
}
.page-grid {
	display: grid;
	grid-template-columns: repeat(2, minmax(0, 1fr));
	gap: 22px;
}
.page-card {
	overflow: hidden;
	border: 1px solid var(--line);
	border-radius: var(--radius-lg);
	background: linear-gradient(145deg, rgba(255,255,255,.035), transparent 38%), var(--surface);
	box-shadow: 0 14px 42px rgba(0,0,0,.18);
}
.page-card-inner {
	padding: 26px;
}
.page-kicker {
	margin: 0 0 6px;
	color: var(--gold);
	font-size: .78rem;
	font-weight: 700;
	letter-spacing: .11em;
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
}
.page-url:hover {
	color: #b6c1df;
}
.metadata {
	display: grid;
	grid-template-columns: repeat(4, minmax(0, 1fr));
	gap: 10px;
	margin-top: 22px;
}
.metadata-item {
	min-width: 0;
	padding: 13px;
	border: 1px solid var(--line);
	border-radius: var(--radius-sm);
	background: rgba(255,255,255,.035);
}
.metadata-label {
	display: block;
	color: var(--muted);
	font-size: .67rem;
	font-weight: 700;
	letter-spacing: .08em;
	text-transform: uppercase;
}
.metadata-value {
	display: block;
	margin-top: 4px;
	color: var(--text);
	font-size: .92rem;
	font-weight: 700;
	overflow-wrap: anywhere;
}
details {
	border-top: 1px solid var(--line);
	background: rgba(255,255,255,.018);
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
	content: "+";
	display: inline-grid;
	place-items: center;
	flex: 0 0 30px;
	width: 30px;
	height: 30px;
	border-radius: 50%;
	background: var(--accent-soft);
	color: var(--accent-strong);
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
	border: 1px solid var(--line);
	border-radius: 14px;
	background: var(--surface-soft);
}
.image-card img {
	width: 118px;
	height: 86px;
	border-radius: 10px;
	object-fit: cover;
	background: #0b0d10;
}
.image-title {
	margin: 0;
	color: var(--text);
	font-size: 1rem;
	line-height: 1.35;
}
.image-caption {
	margin: 5px 0 0;
	color: var(--muted);
	font-size: .9rem;
	line-height: 1.45;
}
.image-link {
	display: inline-block;
	margin-top: 8px;
	color: var(--accent-strong);
	font-size: .82rem;
	overflow-wrap: anywhere;
}
.empty-images {
	margin: 0;
	padding: 0 26px 26px;
	color: var(--muted);
}
.site-footer {
	padding: 30px 0 42px;
	border-top: 1px solid var(--line);
	color: var(--muted);
	text-align: center;
}
.site-footer p {
	margin: 0;
}
.site-footer a {
	position: relative;
	top: 0;
	display: inline-block;
	color: var(--text-soft);
	text-decoration: none;
	transition: top .2s ease, opacity .2s ease;
}
.site-footer a:hover, .site-footer a:focus {
	top: -2px;
	opacity: .85;
	text-decoration: none;
}

@media (max-width: 920px) {
.stats, .page-grid {
	grid-template-columns: 1fr;
}
.section-heading {
	display: block;
}
.section-heading p {
	margin-top: 10px;
}
.hero-actions {
	justify-content: center;
	gap: .75rem;
	flex-wrap: wrap;
}
.hero-actions .button {
	flex: 0 0 auto;
	width: auto;
	min-width: unset;
}
}

@media (max-width: 700px) {
.hero {
	padding-top: 54px;
}
.stats {
	margin-top: -14px;
}
.metadata {
	grid-template-columns: repeat(2, minmax(0, 1fr));
}
.image-card {
	grid-template-columns: 92px minmax(0, 1fr);
}
.image-card img {
	width: 92px;
	height: 76px;
}
}

@media (max-width: 480px) {
.site-shell {
	width: min(calc(100% - 22px), var(--content-width));
}
.hero-actions {
	display: grid;
}
}
.page-card-inner, summary {
	padding-left: 19px;
	padding-right: 19px;
}
.image-list {
	padding-left: 19px;
	padding-right: 19px;
}
.image-card {
	grid-template-columns: 1fr;
}
.image-card img {
	width: 100%;
	height: 180px;
}
}

@media (prefers-reduced-motion: reduce) {
html {
	scroll-behavior: auto;
}
*, *::before, *::after {
	transition-duration: .01ms !important;
	animation-duration: .01ms !important;
	animation-iteration-count: 1 !important;
}
}
</style>
    </head>
    
    <body>
    <header class="hero">
      <div class="site-shell hero-inner">
        <p class="eyebrow">Website Index</p>
        <h1>Tim Gabaree Sitemap</h1>
        <p class="hero-copy"> A human-friendly index of the public pages and images available on
          timgabaree.com. This XML sitemap also helps search engines discover
          and understand the site’s content. </p>
        <div class="hero-actions"> <a class="button" href="/">Return to Home</a> <a class="button button-secondary" href="/hello.html">Connect with Tim</a> </div>
      </div>
    </header>
    <div class="site-shell stats" aria-label="Sitemap statistics">
      <div class="stat-card"> <span class="stat-label">Total Pages</span> <span class="stat-value"> <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/> </span> </div>
      <div class="stat-card"> <span class="stat-label">Total Images</span> <span class="stat-value"> <xsl:value-of select="count(sitemap:urlset/sitemap:url/image:image)"/> </span> </div>
      <div class="stat-card"> <span class="stat-label">Latest Update</span> <span class="stat-value">
        <xsl:for-each select="sitemap:urlset/sitemap:url/sitemap:lastmod">
          <xsl:sort select="." data-type="text" order="descending"/>
          <xsl:if test="position() = 1">
            <xsl:call-template name="format-date">
              <xsl:with-param name="date" select="."/>
              
            </xsl:call-template>
          </xsl:if>
        </xsl:for-each>
        </span> </div>
    </div>
    <main class="site-shell content">
      <div class="section-heading">
        <div>
          <p class="eyebrow">Public Pages</p>
          <h2>Explore the site</h2>
        </div>
        <p> Each card includes the canonical page URL, update information,
          crawl guidance, and the images associated with that page. </p>
      </div>
      <div class="page-grid">
        <xsl:for-each select="sitemap:urlset/sitemap:url">
          <article class="page-card">
            <div class="page-card-inner">
              <p class="page-kicker">Site Page</p>
              <h3 class="page-title">
                <xsl:call-template name="page-title">
                  <xsl:with-param name="url" select="sitemap:loc"/>
                  
                </xsl:call-template>
              </h3>
              <a class="page-url" href="{sitemap:loc}"> <xsl:value-of select="sitemap:loc"/> </a>
              <div class="metadata">
                <div class="metadata-item"> <span class="metadata-label">Updated</span> <span class="metadata-value">
                  <xsl:call-template name="format-date">
                    <xsl:with-param name="date" select="sitemap:lastmod"/>
                    
                  </xsl:call-template>
                  </span> </div>
                <div class="metadata-item"> <span class="metadata-label">Frequency</span> <span class="metadata-value">
                  <xsl:choose>
                    <xsl:when test="sitemap:changefreq">
                      <xsl:value-of select="sitemap:changefreq"/>
                    </xsl:when>
                    <xsl:otherwise>
                      Not specified
                    </xsl:otherwise>
                  </xsl:choose>
                  </span> </div>
                <div class="metadata-item"> <span class="metadata-label">Priority</span> <span class="metadata-value">
                  <xsl:choose>
                    <xsl:when test="sitemap:priority">
                      <xsl:value-of select="sitemap:priority"/>
                    </xsl:when>
                    <xsl:otherwise>
                      Not specified
                    </xsl:otherwise>
                  </xsl:choose>
                  </span> </div>
                <div class="metadata-item"> <span class="metadata-label">Images</span> <span class="metadata-value"> <xsl:value-of select="count(image:image)"/> </span> </div>
              </div>
            </div>
            <xsl:choose>
              <xsl:when test="image:image">
                <details>
                  <summary> <span> View <xsl:value-of select="count(image:image)"/> <xsl:text> indexed image</xsl:text>
                    <xsl:if test="count(image:image) != 1">
                      s
                    </xsl:if>
                    </span> </summary>
                  <div class="image-list">
                    <xsl:for-each select="image:image">
                      <article class="image-card"> <a href="{image:loc}" aria-label="Open full-size image"> <img src="{image:loc}" alt="{image:title}" loading="lazy" decoding="async"/> </a>
                        <div>
                          <h4 class="image-title">
                            <xsl:choose>
                              <xsl:when test="image:title">
                                <xsl:value-of select="image:title"/>
                              </xsl:when>
                              <xsl:otherwise>
                                Untitled image
                              </xsl:otherwise>
                            </xsl:choose>
                          </h4>
                          <xsl:if test="image:caption">
                            <p class="image-caption"> <xsl:value-of select="image:caption"/> </p>
                          </xsl:if>
                          <a class="image-link" href="{image:loc}"> View image </a> </div>
                      </article>
                    </xsl:for-each>
                  </div>
                </details>
              </xsl:when>
              <xsl:otherwise>
                <p class="empty-images">No images are listed for this page.</p>
              </xsl:otherwise>
            </xsl:choose>
          </article>
        </xsl:for-each>
      </div>
    </main>
    <footer class="site-footer">
      <div class="site-shell">
        <p> <a href="/">Home</a> <xsl:text> | </xsl:text> <a href="/hello.html">Connect</a> <xsl:text> | </xsl:text> <a href="/privacy.html">Privacy Policy</a></p>
        <p> © 2023-2026 Tim Gabaree. All Rights Reserved. </p>
      </div>
    </footer>
    </body>
    </html>
  </xsl:template>
  <xsl:template name="page-title">
    <xsl:param name="url"/>
    <xsl:choose>
      <xsl:when test="$url = 'https://timgabaree.com/'">
Executive Profile
      </xsl:when>
      <xsl:when test="contains($url, '/about.html')">
About Tim
      </xsl:when>
      <xsl:when test="contains($url, '/hello.html')">
Executive Contact and Resources
      </xsl:when>
      <xsl:when test="contains(sitemap:loc, '/privacy.html')">
Privacy Policy
      </xsl:when>
      <xsl:otherwise>
        <xsl:call-template name="filename-title">
          <xsl:with-param name="url" select="$url"/>
        </xsl:call-template>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>
  <xsl:template name="filename-title">
    <xsl:param name="url"/>
    <xsl:variable name="after-domain" select="substring-after($url, 'timgabaree.com/')"/>
    <xsl:variable name="without-extension" select="substring-before(concat($after-domain, '.html'), '.html')"/>
    <xsl:choose>
      <xsl:when test="string-length($without-extension) = 0">
Tim Gabaree
      </xsl:when>
      <xsl:otherwise>
        <xsl:call-template name="replace-hyphens">
          <xsl:with-param name="text" select="$without-extension"/>
        </xsl:call-template>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>
  <xsl:template name="replace-hyphens">
    <xsl:param name="text"/>
    <xsl:choose>
      <xsl:when test="contains($text, '-')">
        <xsl:value-of select="substring-before($text, '-')"/><xsl:text></xsl:text>
        <xsl:call-template name="replace-hyphens">
          <xsl:with-param name="text" select="substring-after($text, '-')"/>
        </xsl:call-template>
      </xsl:when>
      <xsl:otherwise>
        <xsl:value-of select="$text"/>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>
  <xsl:template name="format-date">
    <xsl:param name="date"/>
    <xsl:choose>
      <xsl:when test="string-length($date) &gt;= 10">
        <xsl:variable name="year" select="substring($date, 1, 4)"/>
        <xsl:variable name="month" select="substring($date, 6, 2)"/>
        <xsl:variable name="day" select="number(substring($date, 9, 2))"/>
        <xsl:choose>
          <xsl:when test="$month = '01'">
January
          </xsl:when>
          <xsl:when test="$month = '02'">
February
          </xsl:when>
          <xsl:when test="$month = '03'">
March
          </xsl:when>
          <xsl:when test="$month = '04'">
April
          </xsl:when>
          <xsl:when test="$month = '05'">
May
          </xsl:when>
          <xsl:when test="$month = '06'">
June
          </xsl:when>
          <xsl:when test="$month = '07'">
July
          </xsl:when>
          <xsl:when test="$month = '08'">
August
          </xsl:when>
          <xsl:when test="$month = '09'">
September
          </xsl:when>
          <xsl:when test="$month = '10'">
October
          </xsl:when>
          <xsl:when test="$month = '11'">
November
          </xsl:when>
          <xsl:when test="$month = '12'">
December
          </xsl:when>
        </xsl:choose>
        <xsl:text></xsl:text><xsl:value-of select="$day"/><xsl:text>,</xsl:text><xsl:value-of select="$year"/>
      </xsl:when>
      <xsl:otherwise>
        <xsl:value-of select="$date"/>
      </xsl:otherwise>
    </xsl:choose>
  </xsl:template>
</xsl:stylesheet>
