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
    'governance';

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
        class="technology-leadership-page governance-page">

        <!-- Governance Hero -->

        <?= siteImage(
            'background',
            [
                'class' => 'page-background-image',
            ]
        ) ?>

        <section
            class="technology-leadership-hero"
            aria-labelledby="governance-title">

            <div class="technology-leadership-hero-content">

                <p class="technology-leadership-eyebrow">
                    CIO Perspective
                </p>

                <h1 id="governance-title">
                    Technology Governance
                </h1>

                <p class="technology-leadership-intro">
                    Good governance makes it clear how technology decisions are
                    made, who is accountable, and how investment, risk, and
                    performance are evaluated.
                </p>

                <p>
                    Tim Gabaree approaches governance as a practical operating
                    discipline that helps executives make better technology
                    decisions without creating unnecessary bureaucracy.
                </p>

            </div>

        </section>

        <!-- End Governance Hero -->

        <!-- Governance Perspective -->

        <section
            class="technology-leadership-section"
            aria-labelledby="governance-perspective-title">

            <div class="technology-leadership-content">

                <h2 id="governance-perspective-title">
                    Governance Perspective
                </h2>

                <p>
                    Technology governance works when decision rights, priorities,
                    standards, risk, and accountability are understood across the
                    organization. It should make decisions easier to make and
                    easier to evaluate.
                </p>

                <p>
                    The objective is not more process. It is enough structure to
                    make investment choices deliberately, manage risk consistently,
                    establish clear expectations, and know whether technology is
                    delivering what the organization needs.
                </p>

            </div>

        </section>

        <!-- End Governance Perspective -->

        <!-- Governance in Practice -->

        <section
            class="technology-leadership-section"
            aria-labelledby="governance-focus-title">

            <div class="technology-leadership-content">

                <h2 id="governance-focus-title">
                    Governance in Practice
                </h2>

                <div class="technology-leadership-focus-grid">

                    <article class="technology-leadership-focus">

                        <h3>
                            Decision Rights
                        </h3>

                        <p>
                            Define who makes technology decisions, who provides
                            input, and who is accountable for the outcome.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            Investment Priorities
                        </h3>

                        <p>
                            Evaluate competing technology investments against
                            business priorities, cost, expected value, and risk.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            Cybersecurity &amp; Risk
                        </h3>

                        <p>
                            Integrate cybersecurity, compliance, resilience, and
                            enterprise risk into technology decisions and oversight.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            Architecture &amp; Standards
                        </h3>

                        <p>
                            Establish practical standards that reduce unnecessary
                            complexity while supporting security, interoperability,
                            and business requirements.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            Vendor Governance
                        </h3>

                        <p>
                            Set clear expectations for cost, service, performance,
                            accountability, and the role external partners play.
                        </p>

                    </article>

                    <article class="technology-leadership-focus">

                        <h3>
                            Performance &amp; Accountability
                        </h3>

                        <p>
                            Use meaningful measures and clear ownership to understand
                            whether technology is delivering the expected outcome.
                        </p>

                    </article>

                </div>

            </div>

        </section>

        <!-- End Governance in Practice -->

        <!-- Selected Experience -->

        <section
            class="technology-leadership-section"
            aria-labelledby="governance-experience-title">

            <div class="technology-leadership-content">

                <h2 id="governance-experience-title">
                    Selected Experience
                </h2>

                <div class="technology-leadership-evidence">

                    <p>
                        Strengthened technology governance, vendor performance,
                        cybersecurity standards, and acquisition integration
                        criteria across portfolio businesses.
                    </p>

                    <p>
                        Directed a $170M government technology portfolio spanning
                        infrastructure, applications, governance, and risk.
                    </p>

                    <p>
                        Established cloud architecture, security, and technology
                        guardrails supporting $25M in projected three-year savings.
                    </p>

                    <p>
                        Led technology and security across regulated environments
                        incorporating NIST, HIPAA, HITECH, PCI DSS, and other
                        compliance requirements.
                    </p>

                </div>

            </div>

        </section>

        <!-- End Selected Experience -->

        <!-- Connect -->

        <section
            class="technology-leadership-connect"
            aria-labelledby="governance-connect-title">

            <div class="technology-leadership-content">

                <h2 id="governance-connect-title">
                    Continue the Conversation
                </h2>

                <p>
                    Explore Tim's executive experience, selected results, and
                    approach to technology governance, or connect directly.
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
