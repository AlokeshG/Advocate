<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <?php
    /*
     * Current Page
     */
    $currentPage = basename($_SERVER['PHP_SELF']);


    /*
     * Page Descriptions
     */
    $pageDescriptions = [

        'index.php' =>
        'Get trusted legal services in Mumbai for trademark, copyright, brand protection and business documentation. Contact Advocate Roshani for legal guidance.',

        'about.php' =>
        'Learn about Advocate Roshani Shahu and her legal services in Mumbai, focused on trademark, copyright, brand protection and business legal support.',

        'contact.php' =>
        'Contact Advocate Roshani in Kandivali, Mumbai for legal consultation, trademark, copyright, brand protection and documentation services. Get in touch.',

        'services.php' =>
        'Explore professional legal services in Mumbai including trademark, copyright, brand protection, legal notices, property and business consulting.',

        'trademark-registration.php' =>
        'Get trademark registration services in Mumbai to protect your brand name and logo. Contact Advocate Roshani for professional legal assistance today.',

        'copyright-registration.php' =>
        'Protect your original creative work with copyright registration services in Mumbai. Contact Advocate Roshani for professional legal guidance and support.',

        'brand-protection.php' =>
        'Protect your logo, brand identity and intellectual property in Mumbai with professional legal support from Advocate Roshani. Contact us today.',

        'legal-notice-drafting.php' =>
        'Get professional legal notice drafting services in Mumbai for disputes, recovery and legal matters. Contact Advocate Roshani for expert assistance.',

        'property-legal-services.php' =>
        'Get property legal services in Mumbai for documentation, verification, agreements and property matters. Contact Advocate Roshani for legal guidance.',

        'agreement-documentation.php' =>
        'Get agreement and legal documentation services in Mumbai for contracts, partnerships and business documents. Contact Advocate Roshani for assistance.',

        'business-legal-consulting.php' =>
        'Get business legal consulting in Mumbai for entrepreneurs, startups and businesses. Contact Advocate Roshani for practical legal guidance and support.'
    ];

    $pageDescription =
        $pageDescriptions[$currentPage]
        ?? 'Professional legal services in Mumbai from Advocate Roshani Shahu. Contact us for trademark, copyright and business legal assistance.';


    /*
     * Page Titles
     */
    $pageTitles = [

        'index.php' =>
        'Advocate Roshani Shahu | Trademark, Copyright & Legal Services in Mumbai',

        'about.php' =>
        'About Advocate Roshani Shahu | Mumbai Legal Consultant',

        'contact.php' =>
        'Contact Advocate Roshani | Legal Consultation in Kandivali, Mumbai',

        'services.php' =>
        'Legal Services in Mumbai | Advocate Roshani Shahu',

        'trademark-registration.php' =>
        'Trademark Registration in Mumbai | Advocate Roshani Shahu',

        'copyright-registration.php' =>
        'Copyright Registration Services in Mumbai | Advocate Roshani',

        'brand-protection.php' =>
        'Logo & Brand Protection in Mumbai | Advocate Roshani',

        'legal-notice-drafting.php' =>
        'Legal Notice Drafting in Mumbai | Advocate Roshani',

        'property-legal-services.php' =>
        'Property Legal Services in Mumbai | Advocate Roshani',

        'agreement-documentation.php' =>
        'Agreement & Documentation Services in Mumbai | Advocate Roshani',

        'business-legal-consulting.php' =>
        'Business Legal Consulting in Mumbai | Advocate Roshani'
    ];

    $pageTitle =
        $pageTitles[$currentPage]
        ?? 'Advocate Roshani Shahu | Legal Services in Mumbai';


    /*
     * Canonical URL
     */
   $canonicalUrl =
    'https://advocateroshani.com/'
    . ($currentPage === 'index.php' ? '' : $currentPage);

    /*
 * Website / Business Information
 */
$businessName = 'Advocate Roshani Shahu';

$websiteUrl = 'https://advocateroshani.com/';

$phoneNumber = '+91 91565 66571';

$emailAddress = 'legal@advocateroshani.com';


/*
 * Business Address
 */
$streetAddress = 'Shiv Shakti Apartment, Mahatma Gandhi Rd, Kandivali, Sai Nagar, Kandivali West';

$city = 'Mumbai';

$state = 'Maharashtra';

$postalCode = '400067';

$country = 'IN';
    ?>

    <!-- Meta Description -->
    <meta
        name="description"
        content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    >

    <!-- Canonical URL -->
    <link
        rel="canonical"
        href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <!-- Page Title -->
    <title>
        <?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>
    </title>


    <!-- Favicon -->
    <link rel="icon" href="favicon.ico">

    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="img/core-img/favicon-32x32.png"
    >

    <link
        rel="icon"
        type="image/png"
        sizes="192x192"
        href="img/core-img/favicon-192x192.png"
    >

    <link
        rel="apple-touch-icon"
        sizes="192x192"
        href="img/core-img/favicon-192x192.png"
    >


    <!-- Stylesheets -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/custom-override.css">


    <!-- =====================================================
         STRUCTURED DATA / JSON-LD
         ===================================================== -->

    <script type="application/ld+json">
    <?php
    echo json_encode(
        [
            '@context' => 'https://schema.org',
            '@type' => 'LegalService',

            'name' => $businessName,

            'url' => $websiteUrl,

            'telephone' => $phoneNumber,

            'email' => $emailAddress,

            'description' => $pageDescription,

            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $streetAddress,
                'addressLocality' => $city,
                'addressRegion' => $state,
                'postalCode' => $postalCode,
                'addressCountry' => $country
            ],

            'areaServed' => [
                '@type' => 'City',
                'name' => 'Mumbai'
            ],

            'priceRange' => '$$',

'openingHoursSpecification' => [

    [
        '@type' => 'OpeningHoursSpecification',
        'dayOfWeek' => [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Friday',
            'Saturday'
        ],
        'opens' => '10:30',
        'closes' => '20:00'
    ],

    [
        '@type' => 'OpeningHoursSpecification',
        'dayOfWeek' => 'Thursday',
        'opens' => '10:30',
        'closes' => '18:00'
    ]

]
        ],
        JSON_UNESCAPED_SLASHES |
        JSON_UNESCAPED_UNICODE |
        JSON_PRETTY_PRINT
    );
    ?>
    </script>


    <!-- Website Schema -->
    <script type="application/ld+json">
    <?php
    echo json_encode(
        [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',

            'name' => $businessName,

            'url' => $websiteUrl
        ],
        JSON_UNESCAPED_SLASHES |
        JSON_UNESCAPED_UNICODE |
        JSON_PRETTY_PRINT
    );
    ?>
    </script>

<?php
/*
 * FAQ Structured Data
 * Only add FAQ schema on pages that contain FAQ sections.
 */

$faqData = [

    'trademark-registration.php' => [

        [
            'question' => 'What is a trademark?',
            'answer' => 'A trademark is a mark that can distinguish the goods or services of one business from those of another. Depending on the circumstances, it may include a name, logo, word, symbol or other eligible mark.'
        ],

        [
            'question' => 'Who can apply for trademark registration?',
            'answer' => 'Individuals, proprietors, companies and other eligible applicants may apply depending on their circumstances. The appropriate application requirements should be reviewed before filing.'
        ],

        [
            'question' => 'Can a logo be registered as a trademark?',
            'answer' => 'A logo may be eligible for trademark protection depending on the circumstances. The proposed mark should be reviewed before filing.'
        ],

        [
            'question' => 'How long does trademark registration take?',
            'answer' => 'The overall timeline can vary depending on the application, examination, objections and other circumstances. We can explain the applicable process for your matter.'
        ],

        [
            'question' => 'How can I get started?',
            'answer' => 'You can use the Get Free Consultation or Get Quote option on this website and share details about your trademark requirement.'
        ]

    ],


    'copyright-registration.php' => [

        [
            'question' => 'What is copyright registration?',
            'answer' => 'Copyright registration provides a formal record relating to eligible original creative work. The appropriate protection depends on the nature of the work and applicable law.'
        ],

        [
            'question' => 'What types of work can be protected by copyright?',
            'answer' => 'Depending on the applicable law, copyright may apply to eligible original literary, artistic, musical, software and other creative works.'
        ]

    ],


    'brand-protection.php' => [

        [
            'question' => 'What is brand protection?',
            'answer' => 'Brand protection involves legal and practical measures intended to protect a business brand identity and intellectual property from unauthorised use, imitation or infringement.'
        ],

        [
            'question' => 'Why is trademark registration important for a brand?',
            'answer' => 'Trademark registration can provide important legal rights in relation to an eligible mark. The appropriate protection depends on the specific facts and applicable law.'
        ],

        [
            'question' => 'What should I do if someone is using my brand?',
            'answer' => 'Preserve relevant evidence and seek appropriate legal advice before taking action. The available options depend on the nature of the use and the rights you hold.'
        ]

    ],


    'legal-notice-drafting.php' => [

        [
            'question' => 'What is a legal notice?',
            'answer' => 'A legal notice is a formal communication setting out a person or organisation’s concerns, position or demands in relation to a particular matter.'
        ],

        [
            'question' => 'Is sending a legal notice always necessary?',
            'answer' => 'Not every dispute requires the same procedure. Whether a notice is appropriate depends on the facts, applicable law, agreements between the parties and the nature of the dispute.'
        ],

        [
            'question' => 'Can a legal notice help avoid litigation?',
            'answer' => 'In some situations, a notice can help clarify the dispute and provide an opportunity for the parties to resolve the matter before litigation. It does not guarantee a settlement.'
        ]

    ],


    'property-legal-services.php' => [

        [
            'question' => 'Why is property document verification important?',
            'answer' => 'Reviewing relevant property documents can help identify potential ownership, documentation or other legal issues before completing a transaction.'
        ],

        [
            'question' => 'What documents should I provide for a property review?',
            'answer' => 'The required documents depend on the property and transaction. Available title documents, agreements and other relevant records may be reviewed.'
        ],

        [
            'question' => 'Can you help with property agreements?',
            'answer' => 'Legal assistance may be available for drafting and reviewing property-related agreements, depending on the nature of the transaction.'
        ]

    ],


    'agreement-documentation.php' => [

        [
            'question' => 'Why is a written agreement important?',
            'answer' => 'A written agreement can clearly record the rights, responsibilities and obligations agreed between the parties and can reduce uncertainty about the arrangement.'
        ],

        [
            'question' => 'Should I have a contract reviewed before signing?',
            'answer' => 'Reviewing a contract before signing can help you understand important terms and identify provisions that may require clarification or negotiation.'
        ],

        [
            'question' => 'Can you draft agreements for businesses?',
            'answer' => 'Agreement drafting assistance may be available for business, commercial, employment and other arrangements depending on the requirements.'
        ]

    ],


    'business-legal-consulting.php' => [

        [
            'question' => 'What is business legal consulting?',
            'answer' => 'Business legal consulting involves legal guidance relating to matters such as contracts, documentation, compliance, business transactions and disputes.'
        ],

        [
            'question' => 'Do startups need legal advice?',
            'answer' => 'Startups may encounter legal considerations involving business structure, contracts, intellectual property, employment and other areas. The requirements depend on the business.'
        ],

        [
            'question' => 'Can you review business contracts?',
            'answer' => 'Contract review assistance may be available to identify important terms, obligations, risks and provisions that may require clarification or negotiation.'
        ]

    ]

];


if (isset($faqData[$currentPage])) {

    $faqSchema = [

        '@context' => 'https://schema.org',

        '@type' => 'FAQPage',

        'mainEntity' => []

    ];


    foreach ($faqData[$currentPage] as $faq) {

        $faqSchema['mainEntity'][] = [

            '@type' => 'Question',

            'name' => $faq['question'],

            'acceptedAnswer' => [

                '@type' => 'Answer',

                'text' => $faq['answer']

            ]

        ];

    }

    ?>

    <script type="application/ld+json">
    <?php

    echo json_encode(
        $faqSchema,
        JSON_UNESCAPED_SLASHES |
        JSON_UNESCAPED_UNICODE |
        JSON_PRETTY_PRINT
    );

    ?>
    </script>

    <?php

}
?>

</head>


<body>

<?php

/*
 * Homepage Detection
 */
$isHomePage =
    ($currentPage === 'index.php' || $currentPage === '');

?>


<?php if ($isHomePage): ?>

    <!-- Preloader -->
   <div
    class="preloader d-flex align-items-center justify-content-center"
    id="ve-preloader"
>
    <div class="ve-preloader-inner">

        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

    </div>
</div>


    <script>
        (function () {

            var isFirstVisit =
                !sessionStorage.getItem('site_visited_loader');

            if (!isFirstVisit) {

                var preloader =
                    document.getElementById('ve-preloader');

                if (preloader) {
                    preloader.style.display = 'none';
                }

            }

        })();
    </script>

<?php endif; ?>


<!-- ===== NAVBAR ===== -->

<header
    class="ve-header"
    id="ve-sticky"
>

    <div class="container-fluid ve-nav-wrap">


        <!-- Logo -->
        <div class="ve-logo">

            <a href="index.php">

                <img
                    src="img/core-img/logo__3___1_-removebg-preview.png"
                    alt="Advocate Roshani - Legal Solutions"
                    class="ve-logo-img"
                >

            </a>

        </div>


        <!-- Navigation -->
        <nav class="ve-nav">

            <ul>

                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>


                <li class="has-drop">

                    <a href="services.php">
                        Services
                        <i class="fa fa-angle-down"></i>
                    </a>


                    <ul class="ve-dropdown">

                        <li>
                            <a href="trademark-registration.php">
                                Trademark Registration
                            </a>
                        </li>

                        <li>
                            <a href="copyright-registration.php">
                                Copyright Registration
                            </a>
                        </li>

                        <li>
                            <a href="brand-protection.php">
                                Logo & Brand Protection
                            </a>
                        </li>

                        <li>
                            <a href="legal-notice-drafting.php">
                                Legal Notice Drafting
                            </a>
                        </li>

                        <li>
                            <a href="property-legal-services.php">
                                Property Legal Services
                            </a>
                        </li>

                        <li>
                            <a href="agreement-documentation.php">
                                Agreement & Documentation
                            </a>
                        </li>

                        <li>
                            <a href="business-legal-consulting.php">
                                Business Legal Consulting
                            </a>
                        </li>

                    </ul>

                </li>


                <li>
                    <a href="about.php">
                        About Us
                    </a>
                </li>


                <li>
                    <a href="contact.php">
                        Contact
                    </a>
                </li>

            </ul>

        </nav>


        <!-- CTA -->
        <div class="ve-nav-cta">

            <a
                href="contact.php"
                class="ve-cta-btn"
                data-ve-open-quote
            >
                Get Quote
                <i class="fa fa-arrow-right"></i>
            </a>

        </div>


        <!-- Mobile Toggle -->
        <button
            class="ve-toggler"
            id="ve-toggle"
            type="button"
            aria-label="Open navigation menu"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>


    <!-- Mobile Menu -->
    <div
        class="ve-mobile-menu"
        id="ve-mobile-menu"
    >

        <ul>

            <li>
                <a href="index.php">
                    Home
                </a>
            </li>

            <li>
                <a href="about.php">
                    About
                </a>
            </li>

            <li>
                <a href="services.php">
                    Services
                </a>
            </li>

            <li>
                <a href="contact.php">
                    Contact
                </a>
            </li>

            <li>
                <a
                    href="contact.php"
                    data-ve-open-quote
                >
                    Get Quote
                </a>
            </li>

        </ul>

    </div>

</header>