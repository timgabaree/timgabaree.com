<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
$page = 'home';
$pageTitle = 'Tim Gabaree | Portfolio CIO | Technology Value Creation | Enterprise Performance';
$metaDescription = 'Tim Gabaree is a Portfolio CIO and technology executive helping organizations improve performance through technology value creation, governance, operating model transformation, and enterprise leadership.';
$canonicalUrl = SITE_URL . '/';
$ogType = 'profile';
$ogTitle =
    'Tim Gabaree | Portfolio CIO | Technology Value Creation';
$ogDescription = 'Tim Gabaree is a Portfolio CIO and technology executive helping organizations improve performance through governance, technology value creation, and operating model transformation.';
$preloadImage = '/media/intro-background-architecture3.webp';
require __DIR__ . '/includes/schema-home.php';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main> 
  <!-- Intro Section -->
  <div id="home" class="section-wrapper">
    <div id="intro" class="intro-section">
      <div class="intro-text-content-block">
        <div class="intro-title-block">
          <h1 class="intro-title">
            <?= e(SITE_NAME) ?>
          </h1>
        </div>
        <div class="intro-subtitle-block">
          <h2 class="intro-subtitle">Portfolio CIO | Technology Value Creation | Enterprise Performance</h2>
        </div>
        <div class="intro-main-text-block">
          <p><strong>Governance | Operating Model Transformation | Scalable Growth</strong></p>
          <p>Converting strategy into execution by aligning technology, operations, investment, and risk management.
            Improving performance, reducing complexity, and strengthening governance.</p>
          <p class="intro-cta-text"> Whether you're exploring executive leadership,
            board opportunities, advisory work, or technology transformation, I'd welcome the opportunity to connect. </p>
          <a class="primary-cta-button" href="/hello.php"> Continue the Conversation </a> </div>
        <div class="intro-links-block">
          <div class="intro-links-row"> <a href="<?= e(DOCSEND_EXECUTIVE_PROFILE) ?>" target="_blank" rel="noopener noreferrer" class="intro-links"> <span>Executive Profile</span> </a> <a href="<?= e(DOCSEND_RESUME) ?>" target="_blank" rel="noopener noreferrer" class="intro-links"> <span>Résumé</span> </a> <a href="<?= e(DOCSEND_EXECUTIVE_BIO) ?>" target="_blank" rel="noopener noreferrer" class="intro-links"> <span>Executive Bio</span> </a> </div>
          <div class="intro-links-row"> <a href="<?= e(DOCSEND_BOARD_RESUME) ?>" target="_blank" rel="noopener noreferrer" class="intro-links"> <span>Board Résumé</span> </a> <a href="<?= e(DOCSEND_BOARD_BIO) ?>" target="_blank" rel="noopener noreferrer" class="intro-links"> <span>Board Bio</span> </a></div>
        </div>
      </div>
      <div class="intro-profile-picture-block">
        <picture>
          <source
      srcset="/media/timgabaree_profile5_900x1200.webp"
      type="image/webp">
          <img
  class="intro-profile-picture-img main-img"
  src="/media/timgabaree_profile5_900x1200.webp"
  alt="Tim Gabaree"
  width="900"
  height="1200"
  loading="eager"
  fetchpriority="high"
  decoding="async"> </picture>
        <img
    class="intro-profile-picture-img hover-img"
    src="/media/TimInTheMorning1a.webp"
    alt="Tim Gabaree"
    width="400"
    height="534"
    loading="lazy"
    decoding="async"> </div>
    </div>
  </div>
  <!-- End Intro Section --> 
  <!-- Results Section -->
  <div class="section-wrapper">
    <div id="results" class="results-carousel-section"> <a
      href="#experience"
      class="results-carousel-link"
      aria-label="View selected operating results">
      <div class="results-carousel">
        <div class="results-slide slide-1">
          <p class="results-kicker">Operating Result</p>
          <p class="results-number">$115M</p>
          <p class="results-label">Program Stabilized</p>
          <p class="results-detail"> Operational recovery | Stakeholder alignment | Continuity </p>
        </div>
        <div class="results-slide slide-2">
          <p class="results-kicker">Operating Result</p>
          <p class="results-number">$25M+</p>
          <p class="results-label">Savings Delivered</p>
          <p class="results-detail"> Modernization | Governance | Cost discipline </p>
        </div>
        <div class="results-slide slide-3">
          <p class="results-kicker">Operating Result</p>
          <p class="results-number">$80M</p>
          <p class="results-label">Mission-Critical Program Delivered</p>
          <p class="results-detail"> Security | Compliance | Execution risk reduction </p>
        </div>
        <div class="results-slide slide-4">
          <p class="results-kicker">Leadership Result</p>
          <p class="results-number">96%</p>
          <p class="results-label">Workforce Retention</p>
          <p class="results-detail"> Organizational redesign | Leadership development | Performance </p>
        </div>
        <div class="results-slide slide-5">
          <p class="results-kicker">Positioning</p>
          <p class="results-number">Portfolio CIO</p>
          <p class="results-label"> Governance | Technology Value Creation | Enterprise Performance </p>
          <p class="results-detail"> Aligning technology, operations, investment, and risk management. </p>
        </div>
      </div>
      </a> </div>
  </div>
  <!-- End Results Section --> 
  <!-- Expertise Section -->
  <div class="section-wrapper">
    <div id="expertise" class="expertise-section">
      <div class="expertise-heading-block">
        <h2 class="expertise-heading">EXPERTISE</h2>
      </div>
      <div class="expertise-container">
        <div class="expertise-text-block">
          <ul class="expertise-list">
            <li>Technology Value Creation</li>
            <li>Technology &amp; Operations Leadership</li>
            <li>Enterprise Performance</li>
            <li>PE Portfolio Operations</li>
            <li>Operating Model Transformation</li>
            <li>Post-Acquisition Integration</li>
            <li>Governance &amp; Risk Management</li>
            <li>AI &amp; Data Strategy</li>
            <li>Vendor Rationalization</li>
            <li>Infrastructure &amp; Cloud Operations</li>
          </ul>
        </div>
        <div class="expertise-image-block"></div>
      </div>
    </div>
  </div>
  <!-- End Expertise Section --> 
  <!-- Operating Results Section -->
  <div class="section-wrapper">
    <div id="experience" class="experience-section scroll-offset">
      <div class="experience-heading-block">
        <h2 class="experience-heading">SELECTED OPERATING RESULTS</h2>
      </div>
      <div class="experience-entry">
        <p class="experience-intro"> Enterprise leadership across private equity-backed, government,
          healthcare, defense, and mid-market organizations. Selected results
          reflect recovery, savings, modernization, integration, and operational scale. </p>
        <ul class="impact-list">
          <li><strong>Delivered $25M+ in savings</strong> through vendor rationalization, analytics, and cost discipline.</li>
          <li><strong>Stabilized a $115M at-risk federal program</strong> through operational recovery and stakeholder alignment.</li>
          <li><strong>Led modernization initiatives across $100M+ environments</strong> spanning technology, cybersecurity, compliance, and data strategy.</li>
          <li><strong>Increased billable utilization from 60% to 93%</strong>, generating $2M in additional revenue.</li>
          <li><strong>Raised workforce retention to 96%</strong> through organizational redesign and leadership development.</li>
          <li><strong>Delivered an $80M mission-critical federal program</strong> while improving margins and reducing execution risk.</li>
          <li><strong>Reduced operating costs across Department of Defense programs</strong> through consolidation and modernization.</li>
          <li><strong>Aligned capital allocation and technology investment priorities</strong> with enterprise objectives.</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Operating Results Section --> 
  <!-- Board & Advisory Section -->
  <div class="section-wrapper">
    <div id="board" class="experience-section scroll-offset">
      <div class="experience-heading-block">
        <h2 class="experience-heading">BOARD AND ADVISORY</h2>
      </div>
      <div class="experience-entry">
        <p class="experience-intro"> Board and advisory experience supporting governance, strategy, and growth
          across nonprofit, consulting, and international business environments. </p>
        <ul class="impact-list">
          <li> <strong>Independent Board Director | EMAXIQ</strong><br>
            Advise on strategy, platform direction, and international expansion for a digital consultancy and executive collaboration platform. </li>
          <li> <strong>Independent Board Director | Marian Homes</strong><br>
            Supported financial stewardship, fundraising, and long-term planning for a nonprofit serving adults with intellectual disabilities. </li>
          <li> <strong>Board Advisor | Chicago House Athletic Club</strong><br>
            Advised leadership on strategy, operating priorities, and stakeholder engagement supporting organizational growth. </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Board & Advisory Section --> 
  <!-- Education Section -->
  <div class="section-wrapper">
    <div id="education" class="education-section">
      <div class="education-heading-block">
        <h2 class="education-heading">EDUCATION</h2>
      </div>
      <div class="education-content">
        <div class="education-block">
          <div class="education-inner-block">
            <p class="education-title"> Master of Business Administration </p>
            <div class="education-logo"> <a href="https://www.uis.edu/" target="_blank" rel="noopener noreferrer"> <img

  src="/media/education-logo-university-of-illinois-springfield.webp"

  alt="University of Illinois Springfield Logo"

  width="250"

  height="125"> </a> </div>
          </div>
        </div>
        <div class="education-block">
          <div class="education-inner-block">
            <p class="education-title"> Bachelor of Science in Analytics </p>
            <div class="education-logo"> <a href="https://www.purdueglobal.edu/" target="_blank" rel="noopener noreferrer"> <img

  src="/media/education-logo-purdue-university-global.webp"

  alt="Purdue University Global Logo"

  width="250"

  height="69"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Education Section --> 
  <!-- Leadership Perspective Section -->
  <div class="section-wrapper">
    <div id="q-and-a" class="qanda-section">
      <div class="qanda-heading-block">
        <h2 class="qanda-heading">LEADERSHIP PERSPECTIVE</h2>
      </div>
      <div class="qanda-content">
        <div class="qanda-block">
          <p class="qanda-question"> Why did you choose your profession? </p>
          <p class="qanda-answer"> I got my first computer at 11 after saving money from a paper route
            and neighborhood jobs. Learning how it worked sparked an interest
            that eventually became a career helping organizations improve
            performance, modernize operations, and navigate change. </p>
        </div>
        <div class="qanda-block">
          <p class="qanda-question"> What personal experience shaped how you lead? </p>
          <p class="qanda-answer"> Losing my father at a young age after a stroke shaped how I view
            leadership, family, resilience, and gratitude. It taught me to lead
            with perspective, stay grounded under pressure, and make the most of
            the opportunities in front of me. </p>
        </div>
        <div class="qanda-block">
          <p class="qanda-question"> How would your peers and team members describe your responsiveness as a leader? </p>
          <p class="qanda-answer"> My leadership approach was heavily influenced by my military background
            and years leading teams through complex operational environments. I
            believe in accountability, transparency, and giving people the context
            and trust needed to succeed. Teams perform best when expectations are
            clear, communication is direct, and individuals feel ownership in the
            outcome. </p>
          <p class="qanda-answer"> Peers and team members often describe me as calm under pressure,
            operationally focused, and approachable. I work to create environments
            where people can grow, solve problems collaboratively, and stay aligned
            around shared objectives. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Leadership Perspective Section --> 
  <!-- Testimonials Section -->
  <div class="section-wrapper">
    <div id="testimonials" class="testimonials-section">
      <div class="testimonials-heading-block">
        <h2 class="testimonials-heading">TESTIMONIALS</h2>
      </div>
      <div class="testimonials-list-wrapper">
        <div class="testimonials-list">
          <div class="testimonial-block">
            <p class="testimonial-quote"> “Tim brings strategic insight and sound judgment to every challenge.
              He’s a trusted advisor who sees the big picture, communicates clearly,
              and drives aligned action across stakeholders. Visionary, tenacious,
              and highly professional, Tim leads with purpose and delivers results.” </p>
            <p class="testimonial-author"> Scott A. Smith, President &amp; CEO<br>
              thinQtank Global, Inc. </p>
          </div>
          <div class="testimonial-block">
            <p class="testimonial-quote"> “Tim guided our Project Engineering Team through the busiest site refresh
              season in our company’s history. His organizational skill and adaptability
              kept projects on schedule while helping grow the bottom line. He took care
              of his employees, cared about work-life balance, and stayed focused on
              getting the job done.” </p>
            <p class="testimonial-author"> Stephen Mouser, Network OPS QA Manager<br>
              Apogee, Inc. </p>
          </div>
          <div class="testimonial-block">
            <p class="testimonial-quote"> “Tim was never afraid to step in and keep a project moving when others had
              thrown in the towel. His problem-solving ability and operational focus
              consistently helped teams deliver successful outcomes under pressure.” </p>
            <p class="testimonial-author"> Dan Southwick, Principal ProdOps Engineer<br>
              Research Innovations Incorporated </p>
          </div>
          <div class="testimonial-block">
            <p class="testimonial-quote"> “Tim consistently demonstrated discipline, adaptability, and strong
              operational leadership. His communication, collaboration, and organizational
              skills were instrumental in growing and stabilizing DOJ operational
              environments. He also has a genuine talent for mentoring teams and building
              strong working relationships.” </p>
            <p class="testimonial-author"> Michael Cook, Network Manager<br>
              ITC Federal </p>
          </div>
          <div class="testimonial-block">
            <p class="testimonial-quote"> “Tim stands out for his research skills, adaptability, and ability to lead
              teams through modernization efforts. His contributions to DOJ modernization
              initiatives were invaluable. I highly recommend Tim for any organization
              looking to improve efficiency, resilience, and operational performance.” </p>
            <p class="testimonial-author"> Steve Joo, IT Cybersecurity Specialist (Network)<br>
              U.S. Department of Justice </p>
          </div>
          <div class="testimonial-block">
            <p class="testimonial-quote"> “Tim consistently helped the organization save significant resources and
              improve operational efficiency. He is a strong leader who ensures his teams
              have the training, experience, and confidence needed to make sound decisions.” </p>
            <p class="testimonial-author"> Roderick Adams, Government Lead, Network Services<br>
              Executive Office for Immigration Review, Office of Information Technology </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials Section --> 
  <!-- Interests & Hobbies Section -->
  <div class="section-wrapper">
    <div id="interests-and-hobbies" class="interests-section">
      <div class="interests-heading-block">
        <h2 class="interests-heading">BEYOND THE OFFICE</h2>
      </div>
      <div class="interests-content">
        <div class="interests-block coffee-roasting">
          <div class="interest-caption"> Coffee Roasting </div>
        </div>
        <div class="interests-block chocolatiering">
          <div class="interest-caption"> Baking and Chocolatiering </div>
        </div>
        <div class="interests-block pizza-making">
          <div class="interest-caption"> Pizza Making </div>
        </div>
        <div class="interests-block geeking-out">
          <div class="interest-caption"> AI &amp; Emerging Technology </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Interests & Hobbies Section --> 
  <!-- Contact Section -->
  <div class="section-wrapper">
    <div id="contact" class="contact-section">
      <div class="contact-class">
        <div class="qr-code-block"> <a href="/hello.php"> <img
  src="/media/timgabaree-qr-code.webp"
  alt="QR code to Tim Gabaree's contact page"
  width="180"
  height="180"
  loading="lazy"> </a> </div>
        <div class="contact-block">
          <div class="contact-content"> <span>
            <?= e(SITE_NAME) ?>
            </span> <span> <a href="tel:<?= e(phoneHref(SITE_PHONE)) ?>"
       class="contactLink">
            <?= e(phoneDisplay(SITE_PHONE)) ?>
            </a> </span> <span> <a href="mailto:<?= e(SITE_EMAIL) ?>"
       class="contactLink">
            <?= e(SITE_EMAIL) ?>
            </a> </span> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Section --> 
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
