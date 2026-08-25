<?php
$num1_modal = rand(1,10);
$num2_modal = rand(1,10);
$answer_modal = $num1_modal + $num2_modal;
?>

<!-- ===== FOOTER (dark, 4-column) ===== -->
<footer class="ve-footer">

    <div class="container">
        <div class="row">

            <!-- Col 1: Brand -->
            <div class="col-12 col-sm-6 col-lg-4 mb-50">

                <div class="ve-footer-brand">

                    <div class="ve-logo">
                        <a href="index.php">
                            <img
                                src="img/core-img/logo__3___1_-removebg-preview.png"
                                alt="Advocate Roshani - Legal Solutions"
                                class="ve-logo-img"
                            >
                        </a>
                    </div>

                    <p>
                        Providing trusted legal solutions for individuals
                        and businesses, focused on brand protection,
                        intellectual property, and hassle-free legal services.
                    </p>

                    <div class="ve-social">
                        <a
                            href="https://www.linkedin.com/in/roshanishahu/"
                            target="_blank"
                            rel="noopener"
                        >
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>

                </div>

            </div>


            <!-- Col 2: Quick Links -->
            <div class="col-12 col-sm-6 col-lg-2 mb-50">

                <button
                    type="button"
                    class="ve-footer-dropdown-btn"
                    id="ve-footer-quick-links-btn"
                    aria-expanded="false"
                >
                    <span>Quick Links</span>
                    <span class="ve-footer-dropdown-arrow">+</span>
                </button>

                <ul
                    class="ve-footer-links ve-footer-dropdown-content"
                    id="ve-footer-quick-links"
                >
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="about.php">About Us</a>
                    </li>

                    <li>
                        <a href="services.php">Services</a>
                    </li>

                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>

            </div>


            <!-- Col 3: Services -->
            <div class="col-12 col-sm-6 col-lg-3 mb-50">

                <button
                    type="button"
                    class="ve-footer-dropdown-btn"
                    id="ve-footer-services-btn"
                    aria-expanded="false"
                >
                    <span>Our Services</span>
                    <span class="ve-footer-dropdown-arrow">+</span>
                </button>

                <ul
                    class="ve-footer-links ve-footer-dropdown-content"
                    id="ve-footer-services"
                >

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
                            Logo &amp; Brand Protection
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
                            Agreement &amp; Documentation
                        </a>
                    </li>

                    <li>
                        <a href="business-legal-consulting.php">
                            Business Legal Consulting
                        </a>
                    </li>

                </ul>

            </div>


            <!-- Col 4: Contact -->
            <div class="col-12 col-sm-6 col-lg-3 mb-50">

                <button
                    type="button"
                    class="ve-footer-dropdown-btn"
                    id="ve-footer-contact-btn"
                    aria-expanded="false"
                >
                    <span>Get In Touch</span>
                    <span class="ve-footer-dropdown-arrow">+</span>
                </button>

                <ul
                    class="ve-footer-contact ve-footer-dropdown-content"
                    id="ve-footer-contact"
                >

                    <li>
                        <i class="fa fa-map-marker"></i>
                        <span>
                            Shiv Shakti Apartment, Mahatma Gandhi Rd,
                            Kandivali, Sai Nagar, Kandivali West,
                            Mumbai, Maharashtra 400067
                        </span>
                    </li>

                    <li>
                        <i class="fa fa-phone"></i>
                        <span>
                            +91 91565 66571
                        </span>
                    </li>

                    <li>
                        <i class="fa fa-envelope"></i>
                        <span>
                            legal@advocateroshani.com
                        </span>
                    </li>

                    <li>
                        <i class="fa fa-clock-o"></i>
                        <span>
                            Mon–Wed &amp; Fri–Sat: 10:30 AM – 8:00 PM
                        </span>
                    </li>

                    <li>
                        <i class="fa fa-clock-o"></i>
                        <span>
                            Thursday: 10:30 AM – 6:00 PM
                        </span>
                    </li>

                    <li>
                        <i class="fa fa-clock-o"></i>
                        <span>
                            Sunday: Closed
                        </span>
                    </li>

                </ul>

            </div>

        </div>
    </div>


    <!-- Footer Bottom Bar -->
    <div class="ve-footer-bottom">

        <div class="container">

            <div class="ve-footer-bottom-inner">

                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    Advocate Roshani.
                    Developed &amp; Managed By

                    <a
                        href="https://tcongsinfotech.com/"
                        style="color: inherit; font-size: inherit; text-decoration: none;"
                        target="_blank"
                        rel="noopener"
                    >
                        Tcongs Infotech
                    </a>
                </p>

                <ul>

                    <li>
                        <a href="disclaimer.php">
                            Disclaimer
                        </a>
                    </li>

                    <li>
                        <a href="confidentiality.php">
                            Confidentiality
                        </a>
                    </li>

                    <li>
                        <a href="no-attorney-client-relationship.php">
                            No Attorney-Client Relationship
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</footer>


<!-- =========================================================
     GET QUOTE MODAL
     ========================================================= -->

<div
    class="ve-modal"
    id="ve-quote-modal"
    aria-hidden="true"
>

    <div
        class="ve-modal-backdrop"
        data-ve-modal-close
    ></div>

    <div
        class="ve-modal-dialog"
        role="dialog"
        aria-modal="true"
        aria-labelledby="ve-quote-title"
    >

        <button
            class="ve-modal-close"
            type="button"
            aria-label="Close"
            data-ve-modal-close
        >
            &times;
        </button>

        <div class="ve-modal-head">

            <h3 id="ve-quote-title">
                Get Free Consultation
            </h3>

            <p>
                Share your details and we’ll get back to you shortly.
            </p>

        </div>

        <div class="ve-modal-body">

            <form
                class="ve-modal-form"
                action="send-mail.php"
                method="post"
            >

                <input
                    type="hidden"
                    name="source"
                    value="quote"
                >

                <div class="ve-form-group">

                    <label>Name</label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Your name"
                        required
                    >

                </div>


                <div class="ve-form-group">

                    <label>Mobile Number</label>

                    <input
                        type="tel"
                        name="phone"
                        placeholder="Your mobile number"
                        required
                    >

                </div>


                <div class="ve-form-group">

                    <label>Message</label>

                    <textarea
                        name="message"
                        rows="4"
                        placeholder="Tell us what you need..."
                        required
                    ></textarea>

                </div>


                <div class="ve-form-group">

                    <label>
                        What is
                        <?php echo $num1_modal; ?>
                        +
                        <?php echo $num2_modal; ?>?
                    </label>

                    <input
                        type="text"
                        name="captcha"
                        placeholder="Enter the answer"
                        required
                    >

                    <input
                        type="hidden"
                        name="captcha_expected"
                        value="<?php echo $answer_modal; ?>"
                    >

                </div>


                <button
                    type="submit"
                    class="ve-btn-primary"
                    style="width:100%;"
                >
                    Submit
                    <i class="fa fa-paper-plane"></i>
                </button>

            </form>

        </div>

    </div>

</div>


<!-- =========================================================
     THANK YOU MODAL
     ========================================================= -->

<div
    class="ve-modal"
    id="ve-thankyou-modal"
    aria-hidden="true"
>

    <div
        class="ve-modal-backdrop"
        data-ve-modal-close
    ></div>

    <div
        class="ve-modal-dialog ve-thankyou-dialog"
        role="dialog"
        aria-modal="true"
        aria-labelledby="ve-thankyou-title"
    >

        <button
            class="ve-modal-close"
            type="button"
            aria-label="Close"
            data-ve-modal-close
        >
            &times;
        </button>

        <div class="ve-thankyou-head">

            <h3 id="ve-thankyou-title">
                THANK YOU<span id="ve-thankyou-name-suffix"></span>!
            </h3>

        </div>

        <div class="ve-modal-body">

            <p class="ve-thankyou-lead">
                We have successfully received your enquiry.
                Our specialized team is reviewing your requirements
                and will get back to you within 24 hours.
            </p>

            <div class="ve-thankyou-card">

                <div class="ve-thankyou-card-title">
                    ENQUIRY DETAILS:
                </div>

                <div class="ve-thankyou-grid">

                    <div>
                        <strong>Service:</strong>
                        <span id="ve-thankyou-service">
                            General Inquiry
                        </span>
                    </div>

                    <div>
                        <strong>Phone:</strong>
                        <span id="ve-thankyou-phone">
                            —
                        </span>
                    </div>

                    <div>
                        <strong>Source:</strong>
                        <span id="ve-thankyou-source">
                            website
                        </span>
                    </div>

                </div>

            </div>


            <div class="ve-thankyou-actions">

                <button
                    type="button"
                    class="ve-btn-primary"
                    data-ve-modal-close
                >
                    Back to Home
                </button>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     SCRIPTS
     ========================================================= -->

<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins/plugins.js"></script>
<script src="js/active.js"></script>
<script src="js/advocateroshani.js"></script>


<!-- =========================================================
     AI ASSISTANT BUTTON
     ========================================================= -->

<div
    class="ve-ai-assistant"
    id="ve-ai-assistant"
>

    <button
        type="button"
        class="ve-ai-assistant-btn"
        id="ve-ai-assistant-btn"
        aria-label="Open AI Assistant"
        aria-expanded="false"
    >

        <span class="ve-ai-assistant-logo">

            <img
                src="img/core-img/logo__3___1_-removebg-preview.png"
                alt="Advocate Roshani Assistant"
            >

        </span>

        <span class="ve-ai-assistant-content">

            <span class="ve-ai-assistant-title">
                Assistant
            </span>

            <span class="ve-ai-status"></span>

        </span>

    </button>

</div>


<!-- =========================================================
     AI ASSISTANT CHAT
     ========================================================= -->

<div
    class="ve-ai-chat"
    id="ve-ai-chat"
    aria-hidden="true"
>

    <!-- CHAT HEADER -->

    <div class="ve-ai-chat-header">

        <div class="ve-ai-chat-brand">

            <div class="ve-ai-chat-logo">

                <img
                    src="img/core-img/logo__3___1_-removebg-preview.png"
                    alt="Advocate Roshani Assistant"
                >

            </div>

            <div class="ve-ai-chat-info">

                <h4>Assistant</h4>

                <span class="ve-ai-online">
                    <i></i>
                    Online
                </span>

            </div>

        </div>


        <button
            type="button"
            class="ve-ai-chat-close"
            id="ve-ai-chat-close"
            aria-label="Close AI Assistant"
        >
            &times;
        </button>

    </div>


    <!-- CHAT MESSAGES -->

    <div
        class="ve-ai-chat-messages"
        id="ve-ai-chat-messages"
    >

        <div class="ve-ai-message ve-ai-message-bot">

            <div class="ve-ai-message-bubble">

                Hello! 👋

                <br>

                Welcome to Advocate Roshani -
                Legal Solutions.

                <br><br>

                How can I help you today?

            </div>

        </div>

    </div>


    <!-- =====================================================
         QUICK QUESTIONS
         ===================================================== -->

    <div class="ve-ai-chat-suggestions">

        <button
            type="button"
            data-ai-question="products"
        >
            <i class="fa fa-briefcase"></i>
            Services
        </button>

        <button
            type="button"
            data-ai-question="quote"
        >
            <i class="fa fa-file-text"></i>
            Get a Quote
        </button>

        <button
            type="button"
            data-ai-question="office"
        >
            <i class="fa fa-building"></i>
            Office
        </button>

        <button
            type="button"
            data-ai-question="factory"
        >
            <i class="fa fa-gavel"></i>
            Legal Help
        </button>

        <button
            type="button"
            data-ai-question="contact"
        >
            <i class="fa fa-phone"></i>
            Contact
        </button>

        <button
            type="button"
            data-ai-question="whatsapp"
        >
            <i class="fa fa-whatsapp"></i>
            WhatsApp
        </button>

    </div>


    <!-- CHAT INPUT -->

    <form
        class="ve-ai-chat-input"
        id="ve-ai-chat-form"
    >

        <input
            type="text"
            id="ve-ai-chat-input"
            placeholder="Type your question..."
            autocomplete="off"
        >

        <button
            type="submit"
            aria-label="Send message"
        >
            <i class="fa fa-paper-plane"></i>
        </button>

    </form>

</div>


<!-- =========================================================
     AI ASSISTANT JAVASCRIPT
     ========================================================= -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const assistantButton =
        document.getElementById("ve-ai-assistant-btn");

    const chatBox =
        document.getElementById("ve-ai-chat");

    const closeButton =
        document.getElementById("ve-ai-chat-close");

    const chatForm =
        document.getElementById("ve-ai-chat-form");

    const chatInput =
        document.getElementById("ve-ai-chat-input");

    const messages =
        document.getElementById("ve-ai-chat-messages");


    if (!assistantButton || !chatBox) {
        return;
    }


    /* =====================================================
       OPEN / CLOSE CHAT
       ===================================================== */

    assistantButton.addEventListener("click", function () {

        const isOpen =
            chatBox.classList.contains("is-open");


        if (isOpen) {

            chatBox.classList.remove("is-open");

            chatBox.setAttribute(
                "aria-hidden",
                "true"
            );

            assistantButton.setAttribute(
                "aria-expanded",
                "false"
            );

        } else {

            chatBox.classList.add("is-open");

            chatBox.setAttribute(
                "aria-hidden",
                "false"
            );

            assistantButton.setAttribute(
                "aria-expanded",
                "true"
            );

            setTimeout(function () {

                if (chatInput) {
                    chatInput.focus();
                }

            }, 150);

        }

    });


    /* =====================================================
       CLOSE BUTTON
       ===================================================== */

    if (closeButton) {

        closeButton.addEventListener(
            "click",
            function () {

                chatBox.classList.remove("is-open");

                chatBox.setAttribute(
                    "aria-hidden",
                    "true"
                );

                assistantButton.setAttribute(
                    "aria-expanded",
                    "false"
                );

            }
        );

    }


    /* =====================================================
       ADD MESSAGE
       ===================================================== */

    function addMessage(text, type) {

        if (!messages) {
            return;
        }

        const message =
            document.createElement("div");

        message.className =
            "ve-ai-message " +
            (
                type === "user"
                    ? "ve-ai-message-user"
                    : "ve-ai-message-bot"
            );

        const bubble =
            document.createElement("div");

        bubble.className =
            "ve-ai-message-bubble";

        bubble.textContent = text;

        message.appendChild(bubble);

        messages.appendChild(message);

        messages.scrollTop =
            messages.scrollHeight;

    }


    /* =====================================================
       ASSISTANT RESPONSES
       ===================================================== */

    function getAssistantResponse(question) {

        const text =
            question.toLowerCase().trim();


        /* SERVICES */

        if (
            text === "products" ||
            text.includes("service") ||
            text.includes("services") ||
            text.includes("what do you provide") ||
            text.includes("legal services")
        ) {

            return (
                "We provide professional legal services " +
                "including Trademark Registration, " +
                "Copyright Registration, Logo & Brand " +
                "Protection, Legal Notice Drafting, " +
                "Property Legal Services, Agreement & " +
                "Documentation, and Business Legal Consulting."
            );

        }


        /* QUOTE */

        if (
            text === "quote" ||
            text.includes("quote") ||
            text.includes("quotation") ||
            text.includes("price") ||
            text.includes("cost") ||
            text.includes("fees")
        ) {

            return (
                "You can request a quotation by using " +
                "the Get a Quote form on our website. " +
                "Please provide your name, mobile number " +
                "and details about your legal requirement. " +
                "Our team will review your enquiry and " +
                "get back to you."
            );

        }


        /* OFFICE */

        if (
            text === "office" ||
            text.includes("office") ||
            text.includes("location") ||
            text.includes("where are you")
        ) {

            return (
                "Our office is located at Shiv Shakti " +
                "Apartment, Mahatma Gandhi Rd, Kandivali, " +
                "Sai Nagar, Kandivali West, Mumbai, " +
                "Maharashtra 400067."
            );

        }


        /* LEGAL HELP */

        if (
            text === "factory" ||
            text.includes("legal help") ||
            text.includes("legal advice") ||
            text.includes("legal assistance") ||
            text.includes("consultation") ||
            text.includes("lawyer") ||
            text.includes("advocate")
        ) {

            return (
                "I can help you identify the appropriate " +
                "legal service. Advocate Roshani provides " +
                "legal assistance for trademarks, copyright, " +
                "brand protection, legal notices, property " +
                "matters, agreements and business legal " +
                "consulting. Please describe your requirement."
            );

        }


        /* CONTACT */

        if (
            text === "contact" ||
            text.includes("contact") ||
            text.includes("phone") ||
            text.includes("mobile") ||
            text.includes("email")
        ) {

            return (
                "You can contact Advocate Roshani at " +
                "+91 91565 66571 or email " +
                "legal@advocateroshani.com. " +
                "You can also use the Get a Quote form " +
                "to send your enquiry."
            );

        }


        /* WHATSAPP */

        if (
            text === "whatsapp" ||
            text.includes("whatsapp")
        ) {

            return (
                "You can contact us on WhatsApp at " +
                "+91 91565 66571. Please use the WhatsApp " +
                "option to continue the conversation."
            );

        }


        /* GREETING */

        if (
            text.includes("hello") ||
            text.includes("hi") ||
            text.includes("hey") ||
            text.includes("good morning") ||
            text.includes("good afternoon") ||
            text.includes("good evening")
        ) {

            return (
                "Hello! 👋 Welcome to Advocate Roshani - " +
                "Legal Solutions. How can I help you " +
                "with your legal requirement today?"
            );

        }


        /* ABOUT */

        if (
            text.includes("about") ||
            text.includes("who are you") ||
            text.includes("who is advocate roshani")
        ) {

            return (
                "Advocate Roshani - Legal Solutions " +
                "provides professional legal services " +
                "for individuals, entrepreneurs and " +
                "businesses in Mumbai."
            );

        }


        /* TRADEMARK */

        if (
            text.includes("trademark") ||
            text.includes("trade mark")
        ) {

            return (
                "Our Trademark Registration service helps " +
                "protect your brand name and logo. We can " +
                "guide you through the registration process, " +
                "documentation and related legal requirements."
            );

        }


        /* COPYRIGHT */

        if (text.includes("copyright")) {

            return (
                "Our Copyright Registration service helps " +
                "protect original creative works. We can " +
                "assist you with the required documentation " +
                "and registration process."
            );

        }


        /* BRAND PROTECTION */

        if (
            text.includes("brand") ||
            text.includes("logo")
        ) {

            return (
                "Our Logo & Brand Protection service helps " +
                "businesses protect their brand identity " +
                "and intellectual property from unauthorised use."
            );

        }


        /* LEGAL NOTICE */

        if (
            text.includes("legal notice") ||
            text.includes("notice drafting")
        ) {

            return (
                "We provide Legal Notice Drafting services " +
                "for various legal requirements. Please " +
                "describe your matter and our team can " +
                "guide you further."
            );

        }


        /* PROPERTY */

        if (
            text.includes("property") ||
            text.includes("real estate")
        ) {

            return (
                "We provide Property Legal Services for " +
                "property-related legal matters and " +
                "documentation. Please describe your " +
                "requirement for further guidance."
            );

        }


        /* AGREEMENT */

        if (
            text.includes("agreement") ||
            text.includes("contract") ||
            text.includes("documentation") ||
            text.includes("legal document")
        ) {

            return (
                "We provide Agreement & Documentation " +
                "services for important legal agreements " +
                "and documents. Tell us what type of " +
                "agreement or document you need."
            );

        }


        /* BUSINESS */

        if (
            text.includes("business") ||
            text.includes("startup") ||
            text.includes("company")
        ) {

            return (
                "Our Business Legal Consulting service " +
                "provides legal guidance for businesses, " +
                "entrepreneurs and startups. Please tell " +
                "us about your business requirement."
            );

        }


        /* THANK YOU */

        if (
            text.includes("thank you") ||
            text.includes("thanks")
        ) {

            return (
                "You're welcome! 😊 Please feel free to " +
                "ask me about any of our legal services."
            );

        }


        /* DEFAULT */

        return (
            "I'm the Advocate Roshani website assistant. " +
            "I can help you with Trademark Registration, " +
            "Copyright Registration, Logo & Brand Protection, " +
            "Legal Notice Drafting, Property Legal Services, " +
            "Agreement & Documentation, Business Legal " +
            "Consulting, contact details and quotations. " +
            "Please tell me what you need help with."
        );

    }


    /* =====================================================
       TYPED MESSAGE
       ===================================================== */

    if (chatForm) {

        chatForm.addEventListener(
            "submit",
            function (event) {

                event.preventDefault();

                if (!chatInput) {
                    return;
                }

                const question =
                    chatInput.value.trim();

                if (question === "") {
                    return;
                }

                addMessage(
                    question,
                    "user"
                );

                chatInput.value = "";

                setTimeout(
                    function () {

                        const response =
                            getAssistantResponse(question);

                        addMessage(
                            response,
                            "bot"
                        );

                    },
                    400
                );

            }
        );

    }


    /* =====================================================
       QUICK QUESTIONS
       ===================================================== */

    const quickQuestions =
        document.querySelectorAll(
            "[data-ai-question]"
        );


    quickQuestions.forEach(
        function (button) {

            button.addEventListener(
                "click",
                function () {

                    const question =
                        button.getAttribute(
                            "data-ai-question"
                        );

                    if (!question) {
                        return;
                    }


                    const labels = {

                        products: "Services",
                        quote: "Get a Quote",
                        office: "Office",
                        factory: "Legal Help",
                        contact: "Contact",
                        whatsapp: "WhatsApp"

                    };


                    addMessage(
                        labels[question] || question,
                        "user"
                    );


                    setTimeout(
                        function () {

                            const response =
                                getAssistantResponse(
                                    question
                                );

                            addMessage(
                                response,
                                "bot"
                            );

                        },
                        400
                    );

                }
            );

        }
    );


    /* =====================================================
       ESCAPE KEY
       ===================================================== */

    document.addEventListener(
        "keydown",
        function (event) {

            if (event.key === "Escape") {

                chatBox.classList.remove(
                    "is-open"
                );

                chatBox.setAttribute(
                    "aria-hidden",
                    "true"
                );

                assistantButton.setAttribute(
                    "aria-expanded",
                    "false"
                );

            }

        }
    );

});

</script>


<!-- =========================================================
     FOOTER DROPDOWN
     ========================================================= -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    function setupFooterDropdown(
        buttonId,
        contentId
    ) {

        const button =
            document.getElementById(buttonId);

        const content =
            document.getElementById(contentId);


        if (!button || !content) {
            return;
        }


        button.addEventListener(
            "click",
            function (event) {

                event.preventDefault();
                event.stopPropagation();


                const isOpen =
                    content.classList.contains(
                        "is-open"
                    );


                content.classList.toggle(
                    "is-open",
                    !isOpen
                );


                button.classList.toggle(
                    "is-open",
                    !isOpen
                );


                button.setAttribute(
                    "aria-expanded",
                    !isOpen
                        ? "true"
                        : "false"
                );

            }
        );

    }


    setupFooterDropdown(
        "ve-footer-quick-links-btn",
        "ve-footer-quick-links"
    );


    setupFooterDropdown(
        "ve-footer-services-btn",
        "ve-footer-services"
    );


    setupFooterDropdown(
        "ve-footer-contact-btn",
        "ve-footer-contact"
    );

});

</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       GET FREE CONSULTATION -> OPEN QUOTE POPUP
       ===================================================== */

    const quoteModal =
        document.getElementById("ve-quote-modal");


    if (!quoteModal) {
        console.error(
            "Get Quote Error: #ve-quote-modal not found."
        );
        return;
    }


    /* Open buttons */

    document.querySelectorAll(
        "[data-open-quote-modal]"
    ).forEach(function (button) {

        button.addEventListener(
            "click",
            function (event) {

                event.preventDefault();

                quoteModal.classList.add(
                    "is-open"
                );

                quoteModal.setAttribute(
                    "aria-hidden",
                    "false"
                );

                document.body.classList.add(
                    "ve-modal-open"
                );

                document.body.style.overflow =
                    "hidden";


                /* Focus name field */

                setTimeout(function () {

                    const nameInput =
                        quoteModal.querySelector(
                            'input[name="name"]'
                        );

                    if (nameInput) {
                        nameInput.focus();
                    }

                }, 150);

            }
        );

    });


    /* =====================================================
       CLOSE BUTTONS
       ===================================================== */

    quoteModal
        .querySelectorAll(
            "[data-ve-modal-close]"
        )
        .forEach(function (button) {

            button.addEventListener(
                "click",
                function () {

                    quoteModal.classList.remove(
                        "is-open"
                    );

                    quoteModal.setAttribute(
                        "aria-hidden",
                        "true"
                    );

                    document.body.classList.remove(
                        "ve-modal-open"
                    );

                    document.body.style.overflow =
                        "";

                }
            );

        });


    /* =====================================================
       ESCAPE KEY
       ===================================================== */

    document.addEventListener(
        "keydown",
        function (event) {

            if (
                event.key === "Escape" &&
                quoteModal.classList.contains(
                    "is-open"
                )
            ) {

                quoteModal.classList.remove(
                    "is-open"
                );

                quoteModal.setAttribute(
                    "aria-hidden",
                    "true"
                );

                document.body.classList.remove(
                    "ve-modal-open"
                );

                document.body.style.overflow =
                    "";

            }

        }
    );

});
</script>

</body>
</html>