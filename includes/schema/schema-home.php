<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';

if (!isset($profileImage)) {
    $profileImage =
        SITE_URL . '/media/profile-pic-tim-gabaree-900x1200.webp';
}

$schema = [
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => 'WebSite',
      '@id' => SITE_URL . '/#website',
      'url' => SITE_URL . '/',
      'name' => SITE_NAME,
      'description' =>
        'The professional website of Portfolio CIO and technology executive Tim Gabaree.',
      'inLanguage' => 'en-US',
    ],
    [
      '@type' => 'ImageObject',
      '@id' => SITE_URL . '/#primaryimage',
      'url' => $profileImage,
      'contentUrl' => $profileImage,
      'width' => 900,
      'height' => 1200,
      'encodingFormat' => 'image/webp',
      'caption' =>
        'Tim Gabaree, Portfolio CIO and technology executive',
      'representativeOfPage' => true,
    ],
    [
      '@type' => 'ProfilePage',
      '@id' => SITE_URL . '/#webpage',
      'url' => SITE_URL . '/',
      'name' => $pageTitle,
      'description' => $metaDescription,
      'isPartOf' => [
        '@id' => SITE_URL . '/#website',
      ],
      'primaryImageOfPage' => [
        '@id' => SITE_URL . '/#primaryimage',
      ],
      'mainEntity' => [
        '@id' => SITE_URL . '/#person',
      ],
      'about' => [
        '@id' => SITE_URL . '/#person',
      ],
      'inLanguage' => 'en-US',
    ],
    [
      '@type' => 'Person',
      '@id' => SITE_URL . '/#person',
      'name' => SITE_NAME,
      'givenName' => 'Tim',
      'familyName' => 'Gabaree',
      'url' => SITE_URL . '/',
      'image' => [
        '@id' => SITE_URL . '/#primaryimage',
      ],
      'jobTitle' => 'Portfolio CIO',
      'description' =>
        'Portfolio CIO and technology executive focused on technology value creation, governance, operating model transformation, and enterprise performance.',
      'email' => 'mailto:' . SITE_EMAIL,
      'telephone' => SITE_PHONE,
      'sameAs' => SITE_SOCIAL_PROFILES,
      'spouse' => [
        '@type' => 'Person',
        '@id' => 'https://carriegabaree.com/#person',
        'name' => 'Carrie Gabaree',
        'url' => 'https://carriegabaree.com/',
        'sameAs' => [
          'https://www.linkedin.com/in/carriegabaree',
        ],
      ],
      'affiliation' => [
        '@type' => 'Organization',
        'name' => 'RGE Solutions LLC',
        'url' => 'https://rgesol.com/',
      ],
      'memberOf' => [
        [
          '@type' => 'Organization',
          'name' => 'Private Directors Association',
        ],
        [
          '@type' => 'Organization',
          'name' => 'IEEE',
        ],
        [
          '@type' => 'Organization',
          'name' => 'ISC2',
        ],
        [
          '@type' => 'Organization',
          'name' => 'Project Management Institute',
        ],
      ],
      'alumniOf' => [
        [
          '@type' => 'CollegeOrUniversity',
          'name' => 'Purdue University Global',
        ],
        [
          '@type' => 'CollegeOrUniversity',
          'name' => 'University of Illinois Springfield',
        ],
      ],
      'hasCredential' => [
        [
          '@type' => 'EducationalOccupationalCredential',
          'name' => 'Master of Business Administration',
        ],
        [
          '@type' => 'EducationalOccupationalCredential',
          'name' =>
            'Certified Information Systems Security Professional',
        ],
        [
          '@type' => 'EducationalOccupationalCredential',
          'name' => 'Project Management Professional',
        ],
        [
          '@type' => 'EducationalOccupationalCredential',
          'name' => 'Wharton Corporate Governance Certificate',
        ],
      ],
      'knowsAbout' => [
        'Technology Value Creation',
        'Enterprise Performance',
        'Technology Governance',
        'Corporate Governance',
        'Operating Model Transformation',
        'Technology Advisory',
        'Private Equity Portfolio Operations',
        'Post-Acquisition Integration',
        'Cybersecurity',
        'Enterprise Infrastructure',
        'Cloud Computing',
        'Artificial Intelligence',
        'AI Strategy',
        'Vendor Rationalization',
        'Program Recovery',
        'Digital Transformation',
        'Technology Strategy',
        'Enterprise Architecture',
      ],
      'knowsLanguage' => [
        'English',
      ],
      'mainEntityOfPage' => [
        '@id' => SITE_URL . '/#webpage',
      ],
    ],
  ],
];