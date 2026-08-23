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
                    Developed & Managed By

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


<!-- ===== Get Quote Modal ===== -->
<div class="ve-modal" id="ve-quote-modal" aria-hidden="true">

    <div class="ve-modal-backdrop" data-ve-modal-close></div>

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
                Get a Quote
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


<!-- ===== Thank You Modal ===== -->
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


<!-- Scripts -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins/plugins.js"></script>
<script src="js/active.js"></script>
<script src="js/advocateroshani.js"></script>

<!-- ================= AI ASSISTANT BUTTON ================= -->
<div class="ve-ai-assistant" id="ve-ai-assistant">

    <button
        type="button"
        class="ve-ai-assistant-btn"
        id="ve-ai-assistant-btn"
        aria-label="Open AI Assistant"
    >

        <!-- Assistant Logo -->
        <span class="ve-ai-assistant-logo">
            <img
                src="img/core-img/logo__3___1_-removebg-preview.png"
                alt="Assistant"
            >
        </span>

        <!-- Assistant Text -->
        <span class="ve-ai-assistant-content">
            <span class="ve-ai-assistant-title">Assistant</span>
            <span class="ve-ai-status"></span>
        </span>

    </button>

</div>


<!-- =========================================================
     AI ASSISTANT CHAT POPUP
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
                    alt="Assistant"
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


        <!-- CLOSE BUTTON -->
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

        <!-- Initial Assistant Message -->
        <div class="ve-ai-message ve-ai-message-bot">

            <div class="ve-ai-message-bubble">

                Hello! 👋

                <br>

                How can I help you with your
                legal requirements today?

            </div>

        </div>

    </div>


    <!-- QUICK QUESTIONS -->
    <div class="ve-ai-chat-suggestions">

        <button
            type="button"
            data-ai-question="I need trademark registration"
        >
            Trademark
        </button>

        <button
            type="button"
            data-ai-question="I need copyright registration"
        >
            Copyright
        </button>

        <button
            type="button"
            data-ai-question="I need legal advice"
        >
            Legal Advice
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

    const assistantButton = document.getElementById("ve-ai-assistant-btn");
    const chatBox = document.getElementById("ve-ai-chat");
    const closeButton = document.getElementById("ve-ai-chat-close");
    const chatForm = document.getElementById("ve-ai-chat-form");
    const chatInput = document.getElementById("ve-ai-chat-input");
    const messages = document.getElementById("ve-ai-chat-messages");

    if (!assistantButton || !chatBox) {
        return;
    }

    /* =========================
       OPEN CHAT
       ========================= */

    assistantButton.addEventListener("click", function () {

        chatBox.classList.add("is-open");

        chatBox.setAttribute(
            "aria-hidden",
            "false"
        );

        setTimeout(function () {
            if (chatInput) {
                chatInput.focus();
            }
        }, 150);

    });


    /* =========================
       CLOSE CHAT
       ========================= */

    if (closeButton) {

        closeButton.addEventListener("click", function () {

            chatBox.classList.remove("is-open");

            chatBox.setAttribute(
                "aria-hidden",
                "true"
            );

        });

    }


    /* =========================
       ADD MESSAGE
       ========================= */

    function addMessage(text, type) {

        const message = document.createElement("div");

        message.className =
            "ve-ai-message " +
            (
                type === "user"
                    ? "ve-ai-message-user"
                    : "ve-ai-message-bot"
            );


        const bubble = document.createElement("div");

        bubble.className = "ve-ai-message-bubble";

        bubble.textContent = text;

        message.appendChild(bubble);

        messages.appendChild(message);

        messages.scrollTop = messages.scrollHeight;
    }


    /* =========================
       GET RESPONSE
       ========================= */
function getAssistantResponse(question) {

    const text = question.toLowerCase().trim();


    /* =========================
       GREETING
       ========================= */

    if (
        text.includes("hello") ||
        text.includes("hi") ||
        text.includes("hey") ||
        text.includes("good morning") ||
        text.includes("good afternoon") ||
        text.includes("good evening")
    ) {
        return "Hello! 👋 Welcome to Advocate Roshani - Legal Solutions. How can I help you with your legal requirements today?";
    }


    /* =========================
       ABOUT
       ========================= */

    if (
        text.includes("about you") ||
        text.includes("about advocate") ||
        text.includes("who are you") ||
        text.includes("who is advocate roshani")
    ) {
        return "Advocate Roshani - Legal Solutions provides professional legal services for individuals, entrepreneurs, startups and businesses in Mumbai.";
    }


    /* =========================
       ALL SERVICES
       ========================= */

    if (
        text === "services" ||
        text.includes("what services") ||
        text.includes("which services") ||
        text.includes("what do you provide") ||
        text.includes("services do you provide") ||
        text.includes("legal services")
    ) {
        return "We provide Trademark Registration, Copyright Registration, Logo & Brand Protection, Legal Notice Drafting, Property Legal Services, Agreement & Documentation, and Business Legal Consulting.";
    }


    /* =========================
       TRADEMARK
       ========================= */

    if (
        text.includes("trademark") ||
        text.includes("trade mark")
    ) {
        return "Our Trademark Registration service helps protect your brand name and logo. We can guide you through the registration process, documentation and related legal requirements.";
    }


    /* =========================
       COPYRIGHT
       ========================= */

    if (
        text.includes("copyright")
    ) {
        return "Our Copyright Registration service helps protect creative works such as designs, content and other original materials. We can assist you with the required documentation and registration process.";
    }


    /* =========================
       LOGO / BRAND PROTECTION
       ========================= */

    if (
        text.includes("logo") ||
        text.includes("brand protection") ||
        text.includes("protect my brand") ||
        text.includes("brand")
    ) {
        return "Our Logo & Brand Protection service helps businesses protect their brand identity, logo and intellectual property from unauthorised use.";
    }


    /* =========================
       LEGAL NOTICE
       ========================= */

    if (
        text.includes("legal notice") ||
        text.includes("notice drafting") ||
        text.includes("send a notice") ||
        text.includes("legal notice drafting")
    ) {
        return "We provide Legal Notice Drafting services for various legal requirements. Please share some details about your matter and our team can guide you further.";
    }


    /* =========================
       PROPERTY
       ========================= */

    if (
        text.includes("property") ||
        text.includes("real estate") ||
        text.includes("property matter")
    ) {
        return "We provide Property Legal Services for property-related legal matters and documentation. Please describe your requirement and our team can guide you further.";
    }


    /* =========================
       AGREEMENT / DOCUMENTATION
       ========================= */

    if (
        text.includes("agreement") ||
        text.includes("contract") ||
        text.includes("documentation") ||
        text.includes("legal document")
    ) {
        return "We provide Agreement & Documentation services for important legal agreements and documents. Tell us what type of agreement or document you need.";
    }


    /* =========================
       BUSINESS LEGAL CONSULTING
       ========================= */

    if (
        text.includes("business") ||
        text.includes("startup") ||
        text.includes("company") ||
        text.includes("business consulting") ||
        text.includes("business legal")
    ) {
        return "Our Business Legal Consulting service provides legal guidance for businesses, entrepreneurs and startups. Please tell us about your business requirement.";
    }


    /* =========================
       LEGAL ADVICE
       ========================= */

    if (
        text.includes("legal advice") ||
        text.includes("legal help") ||
        text.includes("lawyer") ||
        text.includes("advocate") ||
        text.includes("consultation") ||
        text.includes("consult")
    ) {
        return "I'd be happy to help you identify the appropriate legal service. Please briefly describe your legal requirement, and our team can guide you further.";
    }


    /* =========================
       PRICE / COST / FEES
       ========================= */

    if (
        text.includes("price") ||
        text.includes("cost") ||
        text.includes("fee") ||
        text.includes("fees") ||
        text.includes("charge") ||
        text.includes("how much")
    ) {
        return "The cost depends on the type and complexity of the legal service. Please tell us which service you are interested in, and our team can provide further guidance.";
    }


    /* =========================
       CONTACT
       ========================= */

    if (
        text.includes("contact") ||
        text.includes("phone") ||
        text.includes("mobile") ||
        text.includes("email") ||
        text.includes("address") ||
        text.includes("location")
    ) {
        return "You can contact Advocate Roshani through the Contact section of our website. You can also use the Get Quote form to send your enquiry directly to our team.";
    }


    /* =========================
       GET QUOTE
       ========================= */

    if (
        text.includes("quote") ||
        text.includes("enquiry") ||
        text.includes("inquiry") ||
        text.includes("get quote")
    ) {
        return "You can use the Get Quote form on our website to send your requirements. Our team will review your enquiry and get back to you shortly.";
    }


    /* =========================
       THANK YOU
       ========================= */

    if (
        text.includes("thank you") ||
        text.includes("thanks")
    ) {
        return "You're welcome! 😊 Please feel free to ask me about any of our legal services.";
    }


    /* =========================
       RANDOM / UNKNOWN QUESTION
       ========================= */

    return "I'm the Advocate Roshani website assistant. I can help you with our legal services, including Trademark Registration, Copyright Registration, Logo & Brand Protection, Legal Notice Drafting, Property Legal Services, Agreement & Documentation, and Business Legal Consulting. Please ask me about one of these services.";
}

    /* =========================
       SEND MESSAGE
       ========================= */

    if (chatForm) {

        chatForm.addEventListener("submit", function (event) {

            event.preventDefault();

            const question = chatInput.value.trim();

            if (question === "") {
                return;
            }


            /* Show user message */

            addMessage(
                question,
                "user"
            );


            /* Clear input */

            chatInput.value = "";


            /* Show typing response */

            setTimeout(function () {

                const response =
                    getAssistantResponse(question);

                addMessage(
                    response,
                    "bot"
                );

            }, 500);

        });

    }


    /* =========================
       QUICK QUESTIONS
       ========================= */

    const quickQuestions =
        document.querySelectorAll(
            "[data-ai-question]"
        );


    quickQuestions.forEach(function (button) {

        button.addEventListener("click", function () {

            const question =
                button.getAttribute(
                    "data-ai-question"
                );


            if (!question) {
                return;
            }


            /* Show user question */

            addMessage(
                question,
                "user"
            );


            /* Generate response */

            setTimeout(function () {

                const response =
                    getAssistantResponse(question);

                addMessage(
                    response,
                    "bot"
                );

            }, 500);

        });

    });


    /* =========================
       ESC TO CLOSE
       ========================= */

    document.addEventListener("keydown", function (event) {

        if (event.key === "Escape") {

            chatBox.classList.remove(
                "is-open"
            );

            chatBox.setAttribute(
                "aria-hidden",
                "true"
            );

        }

    });

});
</script>
<!-- ================= FOOTER DROPDOWN ================= -->

<script>
document.addEventListener("DOMContentLoaded", function () {

    function setupFooterDropdown(buttonId, contentId) {

        const button = document.getElementById(buttonId);
        const content = document.getElementById(contentId);

        if (!button || !content) {
            console.error(
                "Footer dropdown not found:",
                buttonId,
                contentId
            );
            return;
        }

        button.addEventListener("click", function (event) {

            event.preventDefault();
            event.stopPropagation();

            const isOpen = content.classList.contains("is-open");

            /* Close this dropdown */
            content.classList.toggle("is-open", !isOpen);

            /* Rotate arrow */
            button.classList.toggle("is-open", !isOpen);

            /* Accessibility */
            button.setAttribute(
                "aria-expanded",
                !isOpen ? "true" : "false"
            );

        });

    }


    /* QUICK LINKS */
    setupFooterDropdown(
        "ve-footer-quick-links-btn",
        "ve-footer-quick-links"
    );


    /* OUR SERVICES */
    setupFooterDropdown(
        "ve-footer-services-btn",
        "ve-footer-services"
    );


    /* GET IN TOUCH */
    setupFooterDropdown(
        "ve-footer-contact-btn",
        "ve-footer-contact"
    );

});
</script>

<!-- ================= END AI ASSISTANT BUTTON ================= -->

</body>

</php>