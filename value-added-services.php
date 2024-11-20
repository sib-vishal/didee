<?php $page = 'value-added-services'; ?>
<?php

$values = [
    [
        'image' => 'images/value-added-services/education-loan2.jpg',
        'title' => 'Education Loan',
        'subtitle' => 'Education Loan',
        'content' => 'VCS has partnered with HDFC Credila, <strong>India’s First Dedicated Education Loan Company</strong> to facilitate student loans up to 100% of the tuition fee for higher education abroad.',
        'link_text' => 'Click Here / Contact Us',
        'link' => 'contact-us.php',
        'reverse' => false
    ],
    [
        'image' => 'images/value-added-services/student-travel2.jpg',
        'title' => 'Student – Travel / Medical Insurance',
        'subtitle' => 'Student – Travel / Medical Insurance',
        'content' => 'VCS will assist you in procuring a Student: Travel / Medical as well as Non - Medical insurance that covers you for any unpredictable and unfortunate eventualities during your stay as a student abroad.',
        'extra_content' => 'This is a <strong>MANDATORY</strong> requirement for all Schengen Student visa applications. However, it is advised for all students due to the benefits of this cover.',
        'link_text' => 'Click Here / Contact Us',
        'link' => 'documents/vcs-student-insurance.pdf',
        'reverse' => true
    ],
    [
        'image' => 'images/value-added-services/flight-reservations2.jpg',
        'title' => 'Flight Reservations',
        'subtitle' => 'Flight Reservations',
        'content' => 'Various countries require flight reservations / confirmation as a mandatory document prior to visa submission. As an add-on to our consultation services, VCS can assist you with flight reservations that only support your visa application by fulfilling the conditions required thus, giving you the freedom and flexibility to purchase your actual reservations post issuance of visa.',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => false
    ],
    [
        'image' => 'images/value-added-services/hotel-reservations.jpg',
        'title' => 'Hotel Reservations',
        'subtitle' => 'Hotel Reservations',
        'content' => 'Various countries require hotel reservations / confirmation for the entire itinerary as a mandatory document prior to visa submission. As an add-on to our consultation services, VCS can assist you with hotel reservations that only support your visa application by fulfilling the conditions required thus, giving you the freedom and flexibility to purchase your actual reservations post issuance of visa.',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => true
    ],
    [
        'image' => 'images/value-added-services/travel-insurance2.jpg',
        'title' => 'Travel  Medical Insurance',
        'subtitle' => 'Travel  Medical Insurance',
        'content' => 'Various countries require Travel / Medical insurance for a minimum cover of €30,000 to cover the entire duration of travel as a mandatory document prior to visa submission. As an add-on to our consultation services, VCS can assist you with procuring the required travel/medical insurance from Reliance, Bajaj etc.',
        'extra_content' => 'Cost of the policy would vary depending on the location and period of travel and the age of the applicant.',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => false
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Value Added Services | Di Dee Travels</title>
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
        <div class="services-banner">
            <div class="containerFull w-100">
                <div class="banner-inner  ">
                    <h1 class="fontHeading heading text-white fontWeight800 ">
                        Value Added Services

                    </h1>
                    <p class="mt-3 text-white col-lg-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, repudiandae unde beatae accusamus
                        laudantium fuga magni vel inventore perferendis ullam explicabo, nesciunt debitis. Itaque dicta
                        repudiandae eos deleniti cum nisi.z
                    </p>

                </div>
            </div>
        </div>
        <section>

            <div class="containerFull">
                <div class="row position-relative">
                    <div class="col-lg-5 ">
                        <div class="value-added-services">
                             <small class="fontweight700 text_secondary ">
                            Value Added Services
                        </small>
                        <h4 class=" mt-3 fontHeading heading fontWeight800 ">
                            Visa Consultancy Services offers a host of Value Added Services to aid all your travel
                            needs:
                        </h4>
                        <p class="mt-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit corporis eius ad. Mollitia
                            unde consequatur sapiente libero cumque? Cupiditate ducimus quas officiis numquam, placeat
                            odio. Maxime sapiente culpa commodi eveniet!
                        </p>
                        <p class="mt-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit corporis eius ad. Mollitia
                            unde consequatur sapiente libero cumque? Cupiditate ducimus quas officiis numquam, placeat
                            odio. Maxime sapiente culpa commodi eveniet!
                        </p>

                        <div class="mt-5">
                            <a class="btn_1 fontWeight600 py-3" href="contact-us.php">
                                <i class="fa-solid fa-phone me-2"></i> Contact Us
                            </a>

                        </div>
                        </div>
                       

                    </div>
                    <div class="col-lg-7">
                        <div class="value_wrap">
                            <?php foreach ($values as $value): ?>
                                <div class="value_box mb-4 <?php echo $value['reverse'] ? 'reverse' : ''; ?>"
                                    style="background-image:url(https://www.visa-consultant.com/<?php echo $value['image']; ?>)">

                                    <div class="content">
                                        <h4 class="box_title fontHeading heading text-white"><span
                                                class=" "><?php echo $value['title']; ?></h4>
                                        <div class="web_content">
                                            <div class="web_content_inner">
                                                <p class="mt-3 text-white"><?php echo $value['content']; ?></p>
                                                <?php if (isset($value['extra_content'])): ?>
                                                    <p class="text-white"><?php echo $value['extra_content']; ?></p>
                                                <?php endif; ?>
                                                <p class="mt-3"><a class="value_box_link text-white fontWeight600" href="<?php echo $value['link']; ?>"
                                                        target="_blank"><?php echo $value['link_text']; ?> <i class="fa-solid fa-arrow-right-long ms-2"></i></a></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>


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