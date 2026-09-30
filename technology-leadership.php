<?php

declare(strict_types=1);

require_once __DIR__ .
    '/includes/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Page
|--------------------------------------------------------------------------
*/

$page =
    'technology-leadership';

/*
|--------------------------------------------------------------------------
| Page Start
|--------------------------------------------------------------------------
*/

require __DIR__ .
    '/includes/components/component-page-start.php';

?>

    <main
        id="main-content"
        class="technology-leadership-page">

        <!-- Technology Leadership Hero -->

        <?= siteImage(
            'background',
            [
                'class' => 'page-background-image',
            ]
        ) ?>

        <section
            class="technology-leadership-hero"
            aria-labelledby="technology-leadership-title">

            <div class="technology-leadership-hero-content">

                <p class="technology-leadership-eyebrow">
                    CIO Perspective
                </p>

                <h1 id="technology-leadership-title">
                    Enterprise Technology Leadership
                </h1>

                <p class="technology-leadership-intro">
                    Technology creates value when strategy, operations, investment,
                    risk, and execution work together.
                </p>

                <p>
                    Tim Gabaree is a CIO and technology executive who has led AI strategy,
                    enterprise technology, infrastructure and operations, cybersecurity,
                    modernization, and technology investment across complex and regulated
                    organizations.
                </p>

            </div>

        </section>

        <!-- End Technology Leadership Hero -->

        <!-- Leadership Perspective -->

        <section
            class="technology-leadership-section"
            aria-labelledby="leadership-perspective-title">

            <div class="technology-leadership-content">

                <h2 id="leadership-perspective-title">
                    Leadership Perspective
                </h2>

                <p>
                    Enterprise technology leadership starts with understanding what the
                    organization is trying to accomplish and where technology can improve
                    performance, reduce risk, or remove unnecessary complexity.
                </p>

                <p>
                    From there, the work is practical: set priorities, make sound investment
                    decisions, establish accountability, strengthen operations, and ensure
                    technology can support what the business needs from it.
                </p>

            </div>

        </section>

        <!-- End Leadership Perspective -->

        <!-- Areas of Focus -->

        <section
            class="technology-leadership-section"
            aria-labelledby="technology-focus-title">

            <div class="technology-leadership-content">

                <h2 id="technology-focus-title">
                    Areas of Focus
                </h2>

                <div class="technology-leadership-focus-grid">

                    <article class="technology-leadership-focus">

                        <h3>
                            Infrastructure &amp; Operations
                        </h3>

                        <p>
                            Enterprise infrastructure, cloud, networks, service delivery,
                            resilience, and operating performance.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            Modernization
                        </h3>

                        <p>
                            Modernization priorities grounded in business requirements,
                            architecture, risk, cost, and organizational readiness.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            Cybersecurity &amp; Risk
                        </h3>

                        <p>
                            Security and risk integrated with technology strategy, architecture,
                            operations, governance, and investment decisions.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            Technology Investment
                        </h3>

                        <p>
                            Investment decisions informed by business value, operating impact,
                            lifecycle cost, risk, and competing priorities.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            AI Strategy &amp; Enablement
                        </h3>

                        <p>
                            Practical AI strategy, governance, adoption, and enablement
                            aligned with business priorities, risk, and organizational readiness.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            Vendor Performance
                        </h3>

                        <p>
                            Vendor strategy, performance, cost, service expectations, and accountability
                            aligned with operating requirements.
                        </p>

                    </article>

                </div>

            </div>

        </section>

        <!-- End Areas of Focus -->

        <!-- Selected Experience -->

        <section
            class="technology-leadership-section"
            aria-labelledby="technology-experience-title">

            <div class="technology-leadership-content">

                <h2 id="technology-experience-title">
                    Selected Experience
                </h2>

                <div class="technology-leadership-evidence">

                    <p>
                        Directed a $170M government technology portfolio spanning
                        infrastructure, applications, governance, and risk.
                    </p>

                    <p>
                        Led enterprise technology, infrastructure, operations, and service
                        delivery across more than 100 locations supporting 5,000+ personnel.
                    </p>

                    <p>
                        Rationalized 436 on-premises applications to Azure and established
                        technology guardrails supporting $25M in projected three-year savings.
                    </p>

                    <p>
                        Identified $1.5M in duplicate vendor spend across portfolio businesses
                        while establishing stronger vendor expectations and acquisition
                        integration criteria.
                    </p>

                </div>

            </div>

        </section>

        <!-- End Selected Experience -->

        <!-- Connect -->

        <section
            class="technology-leadership-connect"
            aria-labelledby="technology-connect-title">

            <div class="technology-leadership-content">

                <h2 id="technology-connect-title">
                    Continue the Conversation
                </h2>

                <p>
                    Explore Tim's executive experience, selected results, and approach
                    to technology leadership, or connect directly.
                </p>

                <p>
                    <a
                        class="technology-leadership-link"
                        href="<?= e(SITE_CONTACT_PATH) ?>">
                        Connect with Tim
                    </a>
                </p>

            </div>

        </section>

        <!-- End Connect -->

    </main>

<?php

require __DIR__ . '/includes/components/component-footer.php';

?>
