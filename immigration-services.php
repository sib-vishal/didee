<?php $page = 'immigration'; ?>
<?php
$immigrationJourneySteps = [
    [
        'title' => 'Inquiry',
        'description' => 'Welcome! Your immigration journey starts here…',
        'imageSrc' => 'images/icons//enquiry-150x150.png',
        'imageAlt' => 'Inquiry Icon',

    ],
    [
        'title' => 'Expert Counselling',
        'description' => 'Our expert will personally guide you based on your interests and goals.',
        'imageSrc' => 'images/icons//counselor-150x150.png',
        'imageAlt' => 'Counseling Icon',

    ],
    [
        'title' => 'Eligibility',
        'description' => 'Check your eligibility for immigration to specific countries and sign up for this process.',
        'imageSrc' => 'images/icons/skills-150x150.png',
        'imageAlt' => 'Eligibility Icon',

    ],
    [
        'title' => 'Documentation',
        'description' => 'All your documents will be compiled to create a strong application.',
        'imageSrc' => 'images/icons/folder-150x150.png',
        'imageAlt' => 'Documentation Icon',
    ],
    [
        'title' => 'Processing',
        'description' => 'Assists you in every step while filing the application.',
        'imageSrc' => 'images/icons/simple-data-format-150x150.png',
        'imageAlt' => 'Processing Icon',
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Immigration Services | Affinity Buildersco</title>
    <meta name="description" content="" />
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>
    <?php include 'include/header.php'; ?>
    <div class="wrapper">
        <div class="contact-banner">
            <div class="containerFull w-100">
                <div class="banner-inner  ">
                    <h1 class="fontHeading heading text-white fontWeight800 ">
                        Immigration Services

                    </h1>
                    <!-- <p class="mt-3 text-white col-lg-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, repudiandae unde beatae accusamus
                        laudantium fuga magni vel inventore perferendis ullam explicabo, nesciunt debitis. Itaque dicta
                        repudiandae eos deleniti cum nisi.z
                    </p> -->

                </div>
            </div>
        </div>
        <section  class="bg_spiral">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-7">
                        <small class="fontWeight600 text_secondary">
                            Immigration Services
                        </small>
                        <h4 class="mt-3 fontHeading  heading ">
                            <span class="text_primary">Immigration</span> Consultancy in Mumbai
                        </h4>

                        <p class="mt-3">
                            Di Dee Immigration Services is a leading immigration consultancy in India. Our consultancy,
                            its services designed with due care to give the clients comprehensive information about the
                            immigration process and empowering them for informed decisions.
                        </p>
                        <p class="mt-3">
                            We have expertise in giving immigration consulting services to millions of Indians wanting
                            to stay abroad. Providing our clients with the authentic advice and finding them the most
                            favorable route of applying helps ensure the successful and efficient attainment of
                            immigration objectives.
                        </p>
                        <p class="mt-3">
                            Our professional immigration consultants and legal experts do great jobs for citizens who
                            want to migrate to other countries
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="imgbox_imm">

                            <img class="" src="images/day-office-travel-agency.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background:#f6f6f6">
            <div class="containerFull">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="imgbox_imm2">
                            <img src="images/immegration.jpg" alt="">
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <h4 class="mt-4 heading fontWeight800 fontHeading">
                            <span class="text_primary ">
                                Residency and Citizenship
                            </span> by Investment

                        </h4>
                        <p class="mt-3">
                            We help clients obtain citizenship via Residence and Citizenship by Investment schemes,
                            thereby investing in the economies of various countries. As one of the best immigration
                            consultants, we provide bespoke advice on every kind of immigration need for your business,
                            whether expanding into other parts of the world or beginning a new venture abroad.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg_primary">
            <div class="containerFull ">
                <div class="row">
                    <div class="col-md-4 text-center text-white">
                        <h3 class="large_heading text-white">
                            225 +
                        </h3>
                        <p class="mt-1 text-white fontWeight600">
                            Skilled Visas
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-white">
                        <h3 class="large_heading text-white">
                            77 +
                        </h3>
                        <p class="mt-1 text-white fontWeight600">
                            Business Visas
                        </p>
                    </div>
                    <div class="col-md-4 text-center text-white">
                        <h3 class="large_heading text-white">
                            154 +
                        </h3>
                        <p class="mt-1 text-white fontWeight600">
                            Student Visas
                        </p>
                    </div>

                </div>

            </div>
        </section>
        <section>
            <div class="containerFull">
                <h1 class="heading fontHeading fontWeight800">
                    Our
                    <span class="text_primary">
                        Immigration
                    </span>

                    </span> Process

                </h1>
                <p class="mt-3">
                    We provide a comprehensive immigration consulting service that helps clients navigate the
                    complexities
                    of immigration law and regulations. Our expertise includes understanding the process, providing
                    guidance
                    on best practices, and offering advice on the most effective methods to secure visas.
                </p>

                <div id="journey-steps-container" class="mt-5">
                    <?php foreach ($immigrationJourneySteps as $step): ?>
                        <div class="journey-step">
                            <div class="journey-step-image">
                                <img src="<?= $step['imageSrc']; ?>" alt="<?= $step['imageAlt']; ?>" loading="lazy">
                            </div>
                            <p class="imm_arrow">
                                <strong>
                                    →
                                </strong>
                            </p>
                            <div class="journey-step-content">
                                <h5 class="fontWeight600"><?= $step['title']; ?></h5>
                                <p class="mt-3"><?= $step['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section class="py-5  lightGray">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">

                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-2 text-center aos-init aos-animate" data-aos="zoom-in-up">
                                <img src="images/logo.jpg" class="w-100 logoIcons">
                            </div>
                            <div class="col-lg-5 col-md-5 aos-init aos-animate" data-aos="zoom-in-up">
                                <div class="missedCall">
                                    <h4 class="heading text_primary text-uppercase fontWeight700">Give us a call!</h4>
                                    <p class="medium_heading mt-2">YOUR SOLUTION SPECIALIST</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 aos-init aos-animate" data-aos="zoom-in-up">
                                <div class="contactRightHome">
                                    <h5 class="small_heading fontWeight300"><a class="text_secondary"
                                            href="mailto:">info@dideetravels.com</a></h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why_imm">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="heading fontHeading fontWeight800">
                            Why Choose <span class="text_primary">Di Dee Immigration?</span>
                        </h4>
                        <p class="mt-3">
                            Our expertise and clear processes have earned us a good name in the immigration industry.
                            Most of our current clients usually find us on the recommendation of satisfied past clients.
                            We focus on creating trust through legally binding agreements and offering end-to-end
                            resettlement services, including job search assistance, to help clients settle permanently
                            in their desired country.
                            Unlike other immigration consultants who offer services for just a couple of countries, we
                            offer a broad range of options and counsel in full detail to minimize visa rejections. Our
                            process has been designed to save clients from unnecessary expenses and disappointments
                            caused by inadequate advice.

                        </p>
                        <p class="mt-2">
                            Di Dee Immigration believes in commitments made and undertaken and upholds itself as the
                            right consultant and counselor for you, ensuring a smooth immigration journey.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="imgbox_imm3">

                            <img src="images/side-view-man-holding-passports_23-2150433348.avif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <small class="fontWeight600 text_secondary">
                         Have any questions?
                        </small>
                        <h4 class="mt-3 fontHeading  heading ">
                            Contact with us for <span class="text_primary">Visa Inquiry</span>
                        </h4>
                        <div>
                            <img class="w-75 mx-auto d-block"
                                src="images/travel-landmark-concept-poster-print_1284-13615.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="form_grid">
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" id="name" placeholder="name">
                                    <label for="name">Name *</label>
                                </div>

                                <div class="form-floating mb-1">
                                    <input type="tel" class="form-control" id="phoneno" placeholder="phone no">
                                    <label for="phoneno">Contact No. *</label>
                                </div>
                                <div class="form-floating mb-1">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email Address *</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Country" placeholder="Country">
                                    <label for="Country">Country * </label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="visa_type" placeholder="Visa Type">
                                    <label for="visa_type">Visa Type</label>
                                </div>

                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword"
                                        placeholder="Expected Travel (if known)">
                                    <label for="floatingPassword">Expected Travel (if known)</label>
                                </div>
                            </div>
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Additional Information </label>
                            </div>
                            <button class="btn_1 border-0 w-100 mt-4">
                                Submit
                            </button>
                        </form>
                    </div>

                </div>

            </div>

        </section>



        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script type="text/javascript">
        Fancybox.bind("[data-fancybox]", {});
    </script>
</body>

</html>