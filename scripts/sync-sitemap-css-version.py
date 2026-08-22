#!/usr/bin/env python3

from pathlib import Path
import re
import sys

version_file = Path("includes/version.php")
sitemap_file = Path("sitemap.xsl")

version_text = version_file.read_text(encoding="utf-8")
sitemap_text = sitemap_file.read_text(encoding="utf-8")

match = re.search(
    r"const VERSION_CSS\s*=\s*['\"]([^'\"]+)['\"]\s*;",
    version_text,
)

if not match:
    sys.exit("Could not find VERSION_CSS in includes/version.php.")

version = match.group(1)

updated, count = re.subn(
    r'(/css/style\.css\?v=)[^"]+',
    rf'\g<1>{version}',
    sitemap_text,
    count=1,
)

if count != 1:
    sys.exit("Could not find sitemap style.css version reference.")

if updated == sitemap_text:
    print(f"Sitemap CSS version already current: {version}")
else:
    sitemap_file.write_text(updated, encoding="utf-8")
    print(f"Updated sitemap CSS version to: {version}")
