<?php
$num1_contact = rand(1,10);
$num2_contact = rand(1,10);
$answer_contact = $num1_contact + $num2_contact;
?>

<?php include 'common/header.php'; ?>

<!-- ===== CONTACT HERO ===== -->
<section class="ve-page-hero" style="background-image:url(img/bg-img/front-view-blurry-lawyer-working.jpg);">
    <div class="ve-page-hero-overlay"></div>

    <div class="container ve-page-hero-content">

        <span class="ve-section-tag">Contact Us</span>

        <h1>Get Expert Legal Help for <span>Your Needs</span></h1>

        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
        </nav>

    </div>
</section>


<!-- ===== CONTACT INFORMATION CARDS ===== -->
<section class="ve-contact-cards-section">
    <div class="container">

        <div class="ve-contact-cards-grid">

            <!-- Office Address -->
            <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="100ms">

                <div class="ve-ci-icon">
                    <i class="fa fa-map-marker"></i>
                </div>

                <h5>Visit Our Office</h5>

                <p>
                    Shiv Shakti Apartment, Mahatma Gandhi Rd, Kandivali,
                    Sai Nagar, Kandivali West, Mumbai, Maharashtra 400067
                </p>

            </div>


            <!-- Phone -->
            <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="250ms">

                <div class="ve-ci-icon">
                    <i class="fa fa-phone"></i>
                </div>

                <h5>Call Us</h5>

                <p>
                    +91 91565 66571<br>
                    <small>
                        Mon–Wed & Fri–Sat, 10:30 AM – 8:00 PM
                    </small>
                </p>

            </div>


            <!-- Email -->
            <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="400ms">

                <div class="ve-ci-icon">
                    <i class="fa fa-envelope"></i>
                </div>

                <h5>Email Us</h5>

                <p>
                    legal@advocateroshani.com<br>
                    <small>We reply within 24 hours</small>
                </p>

            </div>

        </div>

    </div>
</section>


<!-- ===== CONTACT SECTION ===== -->
<section class="ve-section ve-contact-section">

    <div class="container">

        <div class="row">

            <!-- Form Side -->
            <div class="col-12 col-lg-7 wow fadeInLeft" data-wow-delay="100ms">

                <div class="ve-contact-form-wrap">

                    <span class="ve-section-tag">Send a Message</span>

                    <h2>Get a <span>Free Legal Consultation</span></h2>

                    <p>
                        Fill in the form and our legal team will contact you
                        shortly to assist with your requirements.
                    </p>


                    <form class="ve-contact-form" action="send-mail.php" method="post">

                        <input type="hidden" name="source" value="contact">


                        <!-- Name + Email -->
                        <div class="ve-form-row">

                            <div class="ve-form-group">

                                <label>Full Name</label>

                                <input
                                    type="text"
                                    name="name"
                                    placeholder="Your full name"
                                    required
                                >

                            </div>


                            <div class="ve-form-group">

                                <label>Email Address</label>

                                <input
                                    type="email"
                                    name="email"
                                    placeholder="Your email"
                                    required
                                >

                            </div>

                        </div>


                        <!-- Phone + Service -->
                        <div class="ve-form-row">

                            <div class="ve-form-group">

                                <label>Phone Number</label>

                                <input
                                    type="tel"
                                    name="phone"
                                    placeholder="Your phone"
                                    required
                                >

                            </div>


                            <div class="ve-form-group">

                                <label>Service Interested In</label>

                                <select name="service" required>

                                    <option value="">
                                        Select a service
                                    </option>

                                    <option>
                                        Trademark Registration
                                    </option>

                                    <option>
                                        Copyright Registration
                                    </option>

                                    <option>
                                        Logo & Brand Protection
                                    </option>

                                    <option>
                                        Legal Notice Drafting
                                    </option>

                                    <option>
                                        Property Legal Services
                                    </option>

                                    <option>
                                        Agreement & Documentation
                                    </option>

                                    <option>
                                        Business Legal Consulting
                                    </option>

                                </select>

                            </div>

                        </div>


                        <!-- Message -->
                        <div class="ve-form-group">

                            <label>Your Message</label>

                            <textarea
                                name="message"
                                rows="5"
                                placeholder="Describe your legal requirement..."
                                required
                            ></textarea>

                        </div>


                        <!-- CAPTCHA -->
                        <div class="ve-form-group">

                            <label>
                                What is
                                <?php echo $num1_contact; ?>
                                +
                                <?php echo $num2_contact; ?>?
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
                                value="<?php echo $answer_contact; ?>"
                            >

                        </div>


                        <!-- Submit -->
                        <button
                            type="submit"
                            class="ve-btn-primary"
                        >
                            Send Message
                            <i class="fa fa-paper-plane"></i>
                        </button>

                    </form>

                </div>

            </div>


            <!-- Aside -->
            <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay="200ms">

                <div class="ve-contact-aside">


                    <!-- Why Choose Us -->
                    <div class="ve-ca-box">

                        <h4>Why Clients Choose Us</h4>

                        <ul class="ve-ca-list">

                            <li>
                                <i class="fa fa-check-circle"></i>
                                Free initial consultation
                            </li>

                            <li>
                                <i class="fa fa-check-circle"></i>
                                Quick response & support
                            </li>

                            <li>
                                <i class="fa fa-check-circle"></i>
                                Transparent & reliable service
                            </li>

                            <li>
                                <i class="fa fa-check-circle"></i>
                                Expert in trademark & legal services
                            </li>

                            <li>
                                <i class="fa fa-check-circle"></i>
                                Hassle-free process
                            </li>

                        </ul>

                    </div>


                    <!-- Office Hours -->
                    <div class="ve-ca-hours">

                        <h5>
                            <i class="fa fa-clock-o"></i>
                            Office Hours
                        </h5>

                        <ul>

                            <li>
                                <span>Monday</span>
                                <strong>10:30 AM – 8:00 PM</strong>
                            </li>

                            <li>
                                <span>Tuesday</span>
                                <strong>10:30 AM – 8:00 PM</strong>
                            </li>

                            <li>
                                <span>Wednesday</span>
                                <strong>10:30 AM – 8:00 PM</strong>
                            </li>

                            <li>
                                <span>Thursday</span>
                                <strong>10:30 AM – 6:00 PM</strong>
                            </li>

                            <li>
                                <span>Friday</span>
                                <strong>10:30 AM – 8:00 PM</strong>
                            </li>

                            <li>
                                <span>Saturday</span>
                                <strong>10:30 AM – 8:00 PM</strong>
                            </li>

                            <li>
                                <span>Sunday</span>
                                <strong>Closed</strong>
                            </li>

                        </ul>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


<?php include 'common/footer.php'; ?>