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

                <h5 class="ve-footer-title">Quick Links</h5>

                <ul class="ve-footer-links">

                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="about.php">About Us</a>
                    </li>

                    <!-- FIXED SERVICES LINK -->
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

                <h5 class="ve-footer-title">Our Services</h5>

                <ul class="ve-footer-links">

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

                <h5 class="ve-footer-title">Get In Touch</h5>

                <ul class="ve-footer-contact">

                    <!-- UPDATED ADDRESS -->
                    <li>
                        <i class="fa fa-map-marker"></i>
                        Shiv Shakti Apartment, Mahatma Gandhi Rd,
                        Kandivali, Sai Nagar, Kandivali West,
                        Mumbai, Maharashtra 400067
                    </li>

                    <li>
                        <i class="fa fa-phone"></i>
                        +91 91565 66571
                    </li>

                    <li>
                        <i class="fa fa-envelope"></i>
                        legal@advocateroshani.com
                    </li>

                    <!-- UPDATED OFFICIAL HOURS -->
                    <li>
                        <i class="fa fa-clock-o"></i>
                        Mon–Wed & Fri–Sat: 10:30 AM – 8:00 PM
                    </li>

                    <li>
                        <i class="fa fa-clock-o"></i>
                        Thursday: 10:30 AM – 6:00 PM
                    </li>

                    <li>
                        <i class="fa fa-clock-o"></i>
                        Sunday: Closed
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


        /* Greeting */

        if (
            text.includes("hello") ||
            text.includes("hi") ||
            text.includes("hey")
        ) {

            return "Hello! 👋 Welcome to our legal assistant. How can I help you today?";
        }


        /* Name */

        if (
            text.includes("my name is") ||
            text.includes("i am ") ||
            text.includes("i'm ")
        ) {

            return "Nice to meet you! How can I assist you with your legal requirement?";
        }


        /* Trademark */

        if (
            text.includes("trademark") ||
            text.includes("trade mark") ||
            text.includes("brand protection")
        ) {

            return "We can help you with trademark registration and brand protection. Would you like to know about the registration process?";
        }


        /* Copyright */

        if (
            text.includes("copyright")
        ) {

            return "We can assist with copyright registration and related legal protection. Would you like more information about the process?";
        }


        /* Agreement */

        if (
            text.includes("agreement") ||
            text.includes("contract") ||
            text.includes("documentation")
        ) {

            return "We provide agreement and legal documentation services. Please tell me what type of agreement you need.";
        }


        /* Property */

        if (
            text.includes("property") ||
            text.includes("real estate")
        ) {

            return "We provide property-related legal services. Please tell me what property matter you need assistance with.";
        }


        /* Legal advice */

        if (
            text.includes("legal advice") ||
            text.includes("lawyer") ||
            text.includes("legal help") ||
            text.includes("consultation")
        ) {

            return "Sure. Please describe your legal issue briefly, and our team can guide you regarding the appropriate legal service.";
        }


        /* Price */

        if (
            text.includes("price") ||
            text.includes("cost") ||
            text.includes("fee") ||
            text.includes("charge")
        ) {

            return "The cost depends on the type and complexity of the legal service. Please tell me which service you are interested in.";
        }


        /* Contact */

        if (
            text.includes("contact") ||
            text.includes("phone") ||
            text.includes("call")
        ) {

            return "You can use the Contact section on our website to get in touch with our legal team.";
        }


        /* Thank you */

        if (
            text.includes("thank")
        ) {

            return "You're welcome! 😊 Please let me know if you need any further assistance.";
        }


        /* Default response */

        return "I understand. Could you please provide a little more detail about your legal requirement? I can help you find the appropriate service.";
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

<!-- ================= END AI ASSISTANT BUTTON ================= -->

</body>

</php>