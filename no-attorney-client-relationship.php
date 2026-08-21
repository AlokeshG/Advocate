<?php include 'common/header.php'; ?>

<section class="legal-wrapper">
    <div class="legal-card">

        <div class="legal-header">
            <span class="legal-badge">Legal Disclaimer</span>
            <h2>Website Disclaimer</h2>
        </div>

        <div class="legal-content">

            <p>
                The information provided on this website by 
                <strong>Adv. Roshani Legal Solution</strong> is published in good faith and is intended 
                for general informational purposes only.
            </p>

            <div class="legal-block">
                <h3>1. No Legal Advice</h3>

                <p>
                    The content on this website should not be considered as legal advice. 
                    You should not act or rely upon any information without seeking professional 
                    legal consultation tailored to your specific situation.
                </p>
            </div>

            <div class="legal-block">
                <h3>2. No Attorney-Client Relationship</h3>

                <p>
                    Use of this website, including communication through forms, emails, or messages, 
                    does not establish an attorney-client relationship between you and 
                    <strong>Adv. Roshani Legal Solution</strong>.
                </p>
            </div>

            <div class="legal-block">
                <h3>3. Accuracy of Information</h3>

                <p>
                    While we strive to keep the information accurate and up to date, we make no warranties 
                    or representations of any kind about the completeness, reliability, or accuracy 
                    of the information.
                </p>
            </div>

            <div class="legal-block">
                <h3>4. External Links</h3>

                <p>
                    This website may contain links to third-party websites for additional information. 
                    We do not control or guarantee the accuracy or reliability of any external content.
                </p>
            </div>

            <div class="legal-note">
                <strong>Note:</strong> For personalized legal advice, please schedule a formal consultation.
            </div>

        </div>
    </div>
</section>

<style>

.legal-wrapper{
    background:#f3f4f6;
    padding:80px 20px;
}

.legal-card{
    max-width:1100px;
    margin:auto;
    background:#fff;
    border-left:6px solid #c89b3c;
    border-radius:18px;
    padding:60px;
    box-shadow:0 10px 30px rgba(0,0,0,0.06);
}

.legal-header{
    margin-bottom:40px;
}

.legal-badge{
    display:inline-block;
    background:#c89b3c;
    color:#fff;
    padding:10px 22px;
    border-radius:50px;
    font-size:14px;
    font-weight:600;
    margin-bottom:20px;
}

.legal-header h2{
    font-size:52px;
    line-height:1.2;
    color:#0f172a;
    font-weight:700;
    margin:0;
}

.legal-content p{
    font-size:20px;
    line-height:1.9;
    color:#475569;
    margin-bottom:28px;
}

.legal-block{
    margin-top:35px;
}

.legal-block h3{
    font-size:34px;
    color:#0f172a;
    margin-bottom:18px;
    font-weight:700;
}

.legal-note{
    margin-top:40px;
    background:#fff8ea;
    border-left:5px solid #c89b3c;
    padding:22px 25px;
    border-radius:12px;
    font-size:18px;
    color:#444;
    line-height:1.7;
}

/* Responsive */

@media(max-width:768px){

    .legal-card{
        padding:35px 25px;
    }

    .legal-header h2{
        font-size:36px;
    }

    .legal-content p{
        font-size:17px;
    }

    .legal-block h3{
        font-size:26px;
    }
}

</style>

<?php include 'common/footer.php'; ?>