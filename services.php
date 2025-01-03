<?php include 'assets/includes/header.php'; ?>
<style>


    @media (max-width: 1450px) {
        .support-services .content .container>div {
            height: 400px;
            width: 400px;
        }
    }

    @media (max-width: 1150px) {
        .support-services .content .container {
            width: 100%;
        }
    }

    @media (max-width: 1000px) {
        .support-services .content .container>div {
            height: 350px;
            width: 350px;
        }
    }

    @media (max-width: 830px) {
        .home-concierge-services p {
            width: 100%;
        }
        .support-services .content .container {
            grid-template-columns: auto;
            width: 100%;
        }

        .support-services .content .container>div {
            height: 400px;
            width: 400px;
        }

        .support-services .content .container>div .content {

            transform: translate(0%, 170%);
        }

        .support-services .content .container>div .hidden {
            transform: translate(0%, 25%);
        }

        .support-services .title p {
  
    width: 100%;
}
    }

    @media (max-width: 400px) {
        .support-services .content .container>div {
            height: 400px;
            width: 100%;
        }
    }
</style>

<body>
    <div class="banner services">
        <div class="title-section">
            <div class="title">
                <h1>Our Services</h1>
                <h2>Affordable Rates</h2>
            </div>


            <div class="svg-blob">
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <clipPath id="clipPath">
                            <path
                                d="M88.5,61Q81,72,73,83.5Q65,95,53.5,85Q42,75,33.5,71.5Q25,68,14,59Q3,50,15.5,42Q28,34,31.5,18.5Q35,3,50,3Q65,3,71.5,16Q78,29,87,39.5Q96,50,88.5,61Z"
                                stroke="none" stroke-width="0"></path>
                        </clipPath>
                    </defs>
                    <image href="https://i.ibb.co/njXMvkp/Banner-backdrop.png" x="0" y="0" width="100" height="100"
                        clip-path="url(#clipPath)"></image>
                </svg>
            </div>



            <div class="banner-column color-side">
                <!-- Content for the color-side column -->
            </div>
        </div>

        <div class="banner-column image-side">

        </div>
    </div>

    <div class="content-section home-concierge-services">
        <div class="content-inner">
            <h3>Home <span>Concierge Services:</span> Your Partner in Everyday Ease</h3>
            <p>We offer a wide range of home concierge services tailored to simplify your life and meet your specific
                needs.
                Whether you need help managing everyday tasks or coordinating special projects, we’re here to help.
                Below are some of the services we proudly offer to our clients:</p>
        </div>
    </div>

    <div class="content-section support-services">
        <div class="content-inner">
            <div class="title">
                <h3>Complete Home Care & Personal Support Services</h3>
                <p>We’re here to handle the details that keep your household running smoothly. From overseeing home
                    maintenance
                    and organizing your space to assisting with errands and personal tasks, our services are designed to
                    save you
                    time and simplify your life. Here’s how we can help:</p>
            </div>
            <div class="content">
                <div class="container">
                    <div id="home-management">
                        <div class="content" id="default-content">
                            <h3>Home Management</h3>
                            <div class="button" id="learn-more-btn">Learn More</div>
                        </div>
                        <div class="content hidden" id="detailed-content" style="display: none;">
                            <h3>Home Management</h3>
                            <ul>
                                <li>- Oversee home maintenance and repairs</li>
                                <li>- Schedule and manage service providers (e.g., cleaners, landscapers, handymen)</li>
                                <li>- Seasonal preparation</li>
                            </ul>
                            <div class="button" id="back-btn">Back</div>
                        </div>
                    </div>
                    <div id="organization">
                        <div class="content" id="default-content">
                            <h3>Organization</h3>
                            <div class="button" id="learn-more-btn">Learn More</div>
                        </div>
                        <div class="content hidden" id="detailed-content" style="display: none;">
                            <h3>Organization</h3>
                            <ul>
                                <li>- Closet, pantry, and storage organization</li>
                                <li>- Home office setup and optimization</li>
                                <li>- Garage cleaning and arranging</li>
                                <li>- Organization maintenance</li>
                            </ul>
                            <div class="button" id="back-btn">Back</div>
                        </div>
                    </div>
                    <div id="personal-assistance">
                        <div class="content" id="default-content">
                            <h3>Personal Assistance</h3>
                            <div class="button" id="learn-more-btn">Learn More</div>
                        </div>
                        <div class="content hidden" id="detailed-content" style="display: none;">
                            <h3>Personal Assistance</h3>
                            <ul>
                                <li>- Scheduling appointments and managing calendars</li>
                                <li>- Travel planning and arrangements</li>
                                <li>- Gift shopping and wrapping</li>
                                <li>- Personal shopping</li>
                            </ul>
                            <div class="button" id="back-btn">Back</div>
                        </div>
                    </div>
                    <div id="errand-services">
                        <div class="content" id="default-content">
                            <h3>Errand Services</h3>
                            <div class="button" id="learn-more-btn">Learn More</div>
                        </div>
                        <div class="content hidden" id="detailed-content" style="display: none;">
                            <h3>Errand Services</h3>
                            <ul>
                                <li>- Grocery shopping and meal prep assistance</li>
                                <li>- Package pickup and delivery</li>
                                <li>- Dry cleaning drop-off and pickup</li>
                                <li>- Prescription refill and delivery</li>
                            </ul>
                            <div class="button" id="back-btn">Back</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section service-call">
        <div class="content-inner">
            <h3>Don’t see the service you need? Give us a call and we’ll see what we can do!</h3>
            <a href="contact-us.php"><div class="button">Schedule a Call</div></a>
        </div>
    </div>

    <div class="content-section pricing">
        <div class="content-inner">
            <h3>Affordable Pricing & Special Offers</h3>
            <p>4 hours of dedicated service with one of our professional team members ($200)</p>
            <p>25% introductory discount for new customers when you book our services for January and February 2025.</p>
            <p>Organization projects will be project based and require both of us to be present. Schedule a
                complimentary consultation today!</p>
        </div>
    </div>
    <?php include 'assets/includes/testimonials.php'; ?>
</body>

<?php include 'assets/includes/footer.php'; ?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const learnMoreButtons = document.querySelectorAll(".button#learn-more-btn");

        learnMoreButtons.forEach(button => {
            button.addEventListener("click", () => {
                const container = button.closest(".container > div"); // Find the parent content section
                const defaultContent = container.querySelector("#default-content");
                const detailedContent = container.querySelector("#detailed-content");

                defaultContent.style.display = "none";
                detailedContent.style.display = "block";
            });
        });

        const backButtons = document.querySelectorAll(".button#back-btn");

        backButtons.forEach(button => {
            button.addEventListener("click", () => {
                const container = button.closest(".container > div"); // Find the parent content section
                const defaultContent = container.querySelector("#default-content");
                const detailedContent = container.querySelector("#detailed-content");

                detailedContent.style.display = "none";
                defaultContent.style.display = "block";
            });
        });
    });

</script>