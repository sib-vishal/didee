<?php $page = 'home'; ?>
<?php
$countries = [
    [
        'cid' => 7,
        'name' => 'UK',
        'image' => 'images/country/UK PIC.jpg',
        'flag' => 'images/flag/uk (1).jpg',
        'services' => [
            [
                'title' => 'Reapplication of Refused Cases',
                'url' => 'https://marketingexperts.in/projects/didee/reapplication.php',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Tourist Visa',
                'url' => 'https://marketingexperts.in/projects/didee/uk-tourist-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Short Term Student Visa',
                'url' => 'https://marketingexperts.in/projects/didee/uk-short-term-student-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Transit Visa',
                'url' => 'https://marketingexperts.in/projects/didee/uk-transit-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Visit - PLAB',
                'url' => 'https://marketingexperts.in/projects/didee/uk-visit-plab',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Business Visa',
                'url' => 'https://marketingexperts.in/projects/didee/uk-business-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Settlement Visa',
                'url' => 'https://marketingexperts.in/projects/didee/uk-settlement-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Tier 4 - Student Dependent Visa',
                'url' => 'https://marketingexperts.in/projects/didee/uk-tier-4-student-dependent-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Tier 2 (PBS) - Dependent',
                'url' => 'https://marketingexperts.in/projects/didee/uk-tier-2-(pbs)-dependent',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Tier 2 (PBS) - General',
                'url' => 'https://marketingexperts.in/projects/didee/uk-tier-2-(pbs)-general',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Tier 4 - Student Visa',
                'url' => 'https://marketingexperts.in/projects/didee/uk-tier-4-student-visa',
                'icon' => 'fa-briefcase'
            ]
        ]
    ],
    [
        'cid' => 8,
        'name' => 'USA',
        'image' => 'images/country/USA PIC.jpg',
        'flag' => 'images/flag/usa (1).jpg',
        
        'services' => [
            [
                'title' => 'Tourist Visa',
                'url' => 'https://marketingexperts.in/projects/didee/usa-tourist-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Student Visa',
                'url' => 'https://marketingexperts.in/projects/didee/usa-student-visa',
                'icon' => 'fa-graduation-cap'
            ],
            [
                'title' => 'Work Visa',
                'url' => 'https://marketingexperts.in/projects/didee/usa-work-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Business Visa',
                'url' => 'https://marketingexperts.in/projects/didee/usa-business-visa',
                'icon' => 'fa-briefcase'
            ]
        ]
    ],
    [
        'cid' => 9,
        'name' => 'CANADA',
         
        'image' => 'images/country/canada.jpg',
        'flag' => 'images/flag/canada (1).jpg',
        'services' => [
            [
                'title' => 'Work Visa',
                'url' => 'https://marketingexperts.in/projects/didee/canada-work-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Study Visa',
                'url' => 'https://marketingexperts.in/projects/didee/canada-study-visa',
                'icon' => 'fa-graduation-cap'
            ],
            [
                'title' => 'Visitor Visa',
                'url' => 'https://marketingexperts.in/projects/didee/canada-visitor-visa',
                'icon' => 'fa-plane'
            ]
        ]
    ],
    [
        'cid' => 6,
        'name' => 'AUSTRALIA',
   
        'image' => 'images/country/australia.jpg',
        'flag' => 'images/flag/australia.png',
        'services' => [
            [
                'title' => 'Visitor Visa',
                'url' => 'https://marketingexperts.in/projects/didee/australia-visitor-visa',
                'icon' => 'fa-plane'
            ],
            [
                'title' => 'Work Visa',
                'url' => 'https://marketingexperts.in/projects/didee/australia-work-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Student Visa',
                'url' => 'https://marketingexperts.in/projects/didee/australia-student-visa',
                'icon' => 'fa-graduation-cap'
            ]
        ]
    ],
    [
        'cid' => 59,
        'name' => 'NEW ZEALAND',
     
        'image' => 'images/country/NZ PIC.jpg',
        'flag' => 'images/flag/nz-flag.png',
        'services' => [
            [
                'title' => 'Visitor Visa',
                'url' => 'https://marketingexperts.in/projects/didee/new-zealand-visitor-visa',
                'icon' => 'fa-plane'
            ],
            [
                'title' => 'Student Visa',
                'url' => 'https://marketingexperts.in/projects/didee/new-zealand-student-visa',
                'icon' => 'fa-graduation-cap'
            ],
            [
                'title' => 'Work Visa',
                'url' => 'https://marketingexperts.in/projects/didee/new-zealand-work-visa',
                'icon' => 'fa-briefcase'
            ]
        ]
    ],
    [
        'cid' => 45,
        'name' => 'IRELAND',
 
        'image' => 'images/country/IRELAND PIC.jpg',
        'flag' => 'images/flag/ireland.jpg',
        'services' => [
            [
                'title' => 'Tourist Visa',
                'url' => 'https://marketingexperts.in/projects/didee/ireland-tourist-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Work Visa',
                'url' => 'https://marketingexperts.in/projects/didee/ireland-work-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Student Visa',
                'url' => 'https://marketingexperts.in/projects/didee/ireland-student-visa',
                'icon' => 'fa-graduation-cap'
            ]
        ]
    ],
    [
        'cid' => 47,
        'name' => 'JAPAN',
 
        'image' => 'images/country/Japan pic.jpg',
        'flag' => 'images/flag/Flag-Japan (1).jpg',
        'services' => [
            [
                'title' => 'Tourist Visa',
                'url' => 'https://marketingexperts.in/projects/didee/japan-tourist-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Work Visa',
                'url' => 'https://marketingexperts.in/projects/didee/japan-work-visa',
                'icon' => 'fa-briefcase'
            ],
            [
                'title' => 'Student Visa',
                'url' => 'https://marketingexperts.in/projects/didee/japan-student-visa',
                'icon' => 'fa-graduation-cap'
            ]
        ]
    ],
    [
        'cid' => 0, // Schengen doesn't have a country ID, but it can be handled as a special case
        'name' => 'Schengen',
        'image' => 'https://www.visa-consultant.com/images/countries/schengen-pic.jpg',
        'flag' => 'placeholder.co/200', // No flag image for Schengen
        'services' => [
            [
                'title' => 'Tourist Visa',
                'url' => 'https://marketingexperts.in/projects/didee/schengen-tourist-visa',
                'icon' => 'fa-plane'
            ],
            [
                'title' => 'Business Visa',
                'url' => 'https://marketingexperts.in/projects/didee/schengen-business-visa',
                'icon' => 'fa-briefcase'
            ]
        ]
    ]
];
?>

<?php
$featuresData = [
    [
        'title' => 'Knowledge',
        'description' => 'We have full knowledge of Immigration services, visa assistance, Translations, & notary services screening of documentation.',
        'image' => 'images/icons/why/knowledge.png'
    ],
    [
        'title' => 'Client Centric',
        'description' => 'We try our very best to provide candidates with most suitable position in their respective fields.',
        'image' => 'images/icons/why/centric.png'
    ],
    [
        'title' => 'Innovative',
        'description' => 'Our extensive global managed CV database enables us to provide local & global staff.',
        'image' => 'images/icons/why/innovative.png'
    ],
    [
        'title' => 'Excellence',
        'description' => 'We committed to deliver a world class people of industry.',
        'image' => 'images/icons/why/excellence.png'
    ],
    [
        'title' => 'Integrity',
        'description' => 'We always work honestly, integrity and respect the ethical values.',
        'image' => 'images/icons/why/integrity.png'
    ],
    [
        'title' => 'Client Satisfaction',
        'description' => 'We make sure our clients are 100% satisfied with our services & talent delivered.',
        'image' => 'images/icons/why/satisfaction.png'
    ]
]; ?>

<?php

$values = [

    [
        'image2' => 'images/value-added-services/student-travel2.jpg',
        'image' => 'images/value-added-services/travel-insurance2.jpg',
        'title' => 'Travel / Medical Insurance
',
        'subtitle' => 'Travel / Medical Insurance
',
        'content' => 'Di Dee assists in procuring comprehensive travel, medical, and non-medical insurance that offers coverage for any unpredictable and unfortunate eventualities during your time abroad.
This is a mandatory requirement for Schengen visa applications and highly recommended for all travelers due to the extensive protection and benefits these plans provide.
Contact us today for more information and personalized insurance solutions!

',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => true
    ],
    [
        'image' => 'images/value-added-services/flight-reservations2.jpg',
        'title' => 'Train and Flight Bookings:',
        'subtitle' => 'Train and Flight Bookings:',
        'content' => 'Most countries demand confirmed flight bookings as a prerequisite document for a visa application. Through our consultancy services, Di Dee is able to provide an aid in the booking of both flights and trains that would be needed for a visa application. The said interim bookings meet all the requirements set for the travel papers to ensure a streamlined application.
Our train reservation services also allow easier planning of your journey by providing pre-arranged travel, which ensures your convenience and alleviates stress. For this reason, whether for your application of visa or smooth planning of your travels, Di Dee can accommodate the opportunity to book your real tickets upon your visa approval, giving you a stress-free feeling and freedom
',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => false
    ],
    [
        'image' => 'images/value-added-services/hotel-reservations.jpg',
        'title' => 'Hotel Reservations',
        'subtitle' => 'Hotel Reservations',
        'content' => 'Most countries demand a confirmed hotel reservation covering your entire travel itinerary as a required document for a visa application. As part of our consultation services offered by a professional, we at Di Dee help you with temporary hotel reservations which will cater to the demands of your visa application. Such reservations will ensure that your application is in accordance with all the guidelines applied, giving you the liberty to seek other actual accommodations when your visa has been approved.
Contact us today for more information and hassle-free service with your hotel bookings!
    ',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => true
    ],
    [
        'image' => 'images/value-added-services/education-loan2.jpg',
        'title' => 'Tour Packages for Europe & Asia',
        'subtitle' => 'Tour Packages for Europe & Asia',
        'content' => "Discover the charm of Europe and Asia through our tour packages, especially offered to deliver unmatched travel experiences. Be it the cultural and historic landmarks of Europe, which relate to some of the world's most beautiful scenic landscapes, or Asia's vibrant cities, tranquil beaches, and diverse traditions; our tour packages cater to every sort of traveler. From guided group tours to customized itineraries, we ensure a journey without any hassles, blending adventure, relaxation, and exploration. We will take care of the planning while you indulge in the beauty and culture of these amazing continents. Let your dream vacation begin!
",
        'extra_content' => '',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => false
    ],
    [
        'image' => 'images/value-added-services/education-loan2.jpg',
        'title' => 'Passport Services: PCC & Renewal',
        'subtitle' => 'Passport Services: PCC & Renewal',
        'content' => "Navigation through the complexities of passport services is relatively easier with Di Dee. Whether it's getting a Police Clearance Certificate (PCC) for travel or immigration purposes or assistance in renewing the passport, our experts are there to help. We streamline the process where all necessary documentation and formalities are handled efficiently. With our guidance, you may save precious time and avoid unnecessary hassle while making your travel preparations less complicated and stress-free. Contact us today for reliable and professional passport services!

",
        'extra_content' => '',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => false
    ],
    [
        'image' => 'images/value-added-services/education-loan2.jpg',
        'title' => 'Document Translations, HRD & MEA Apostille Services',
        'subtitle' => 'Document Translations, HRD & MEA Apostille Services',
        'content' => "Accurate document translations and proper certifications like HRD (Human Resource Development) and MEA (Ministry of External Affairs) apostille are critical in ensuring that your documents are valid and accepted universally. For instance, document translation may be required in order to study or work abroad, as one will have to traverse legal processes, through immigration or business dealings. We translate your documents professionally, maintaining the accuracy of your document so that it could meet standards in the language and region it is required of. Our services of HRD and MEA apostille authenticate your documents to allow you to utilize them in foreign countries. We ensure easy legal processes in case of complexities. Let us handle these critical steps for you so that your international ventures have a smooth, hassle-free experience. Contact us today to get started!


",
        'extra_content' => '',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => false
    ],
    [
        'image' => 'images/value-added-services/education-loan2.jpg',
        'title' => 'Car Rental Services Overseas',
        'subtitle' => 'Car Rental Services Overseas',
        'content' => "Explore a new destination with ease when you have a reliable car rental service. At Di Dee, we assist in making prior reservations for your overseas car rentals, giving you the convenience of traveling at your own pace, without having to make last-minute plans. It saves time and avoids the risk of unavailability at the peak travel seasons by pre-booking your car rental.
We also help facilitate the license formalities. For example, ensure you will be perfectly meeting all the requirements for driving in another country - getting an International Driving Permit (IDP) or verifying the validity of your license when you already have one. It will be a smooth and hassle-free experience as you plan your next trip with us. Call us today to plan your next convenient trip!


",
        'extra_content' => '',
        'link_text' => 'Contact Us',
        'link' => 'contact-us.php',
        'reverse' => false
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Di Dee Travels </title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>
        <div class="banner-wrapper">
            <div class="swiper banner_swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-slide slide-1">
                            <div class="banner-overlay">
                                <div class="containerFull">
                                    <div class="slide_inner col-lg-5">

                                        <small class=" title fontWeight700">
                                            VISA SERVICES
                                        </small>
                                        <div class="">
                                            <h1 class="mt-4 fontHeading large_heading fontWeight700 ">
                                                <span class="text-white">Di Dee</span> <span
                                                    class="text_secondary">Travels</span>

                                            </h1>
                                            <h2 class="mt-1 small_heading text-white">
                                                Your Trusted Partner in Visa <br /> and Travel Services
                                            </h2>
                                            <!-- <p class="mt-3 fontWeight500 text-white">
                                                With 14+ years of experience working with embassies and high
                                                commissions, we
                                                help
                                                you unlock your international journey with confidence.
                                            </p> -->
                                            <div class="mt-5">
                                                <a class="btn_3" href="tel:+91-0123456789">
                                                    <span class=" btn_icon bg-white circle pulse">
                                                        <i class="fa-solid fa-phone  "></i>
                                                    </span> <span>
                                                        <p class="btn_letterspacing  ">
                                                            Contact with us
                                                        </p>
                                                        <h4 class="fontWeight700">
                                                            +91-0123456789
                                                        </h4>
                                                    </span> &nbsp;</a>


                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-slide slide-2">
                            <div class="banner-overlay">
                                <div class="containerFull">
                                    <div class="slide_inner col-lg-5">

                                        <small class=" title fontWeight700">
                                            VISA SERVICES
                                        </small>
                                        <div class="">
                                            <h1 class="mt-4 fontHeading large_heading fontWeight700 ">
                                                <span class="text-white">Di Dee</span> <span
                                                    class="text_secondary">Travels</span>

                                            </h1>
                                            <h2 class="mt-1 small_heading text-white">
                                                Your Trusted Partner in Visa <br /> and Travel Services
                                            </h2>
                                            <!-- <p class="mt-3 fontWeight500 text-white">
                                                With 14+ years of experience working with embassies and high
                                                commissions, we
                                                help
                                                you unlock your international journey with confidence.
                                            </p> -->
                                            <div class="mt-5">
                                                <a class="btn_3" href="tel:+91-0123456789">
                                                    <span class=" btn_icon bg-white circle pulse">
                                                        <i class="fa-solid fa-phone   "></i>
                                                    </span> <span>
                                                        <p class="btn_letterspacing  ">
                                                            Contact with us
                                                        </p>
                                                        <h4 class="fontWeight700">
                                                            +91-0123456789
                                                        </h4>
                                                    </span> &nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-slide slide-3">
                            <div class="banner-overlay">
                                <div class="containerFull">
                                    <div class="slide_inner col-lg-5">

                                        <small class=" title fontWeight700">
                                            VISA SERVICES
                                        </small>
                                        <div class="">
                                            <h1 class="mt-4 fontHeading large_heading fontWeight700 ">
                                                <span class="text-white">Di Dee</span> <span
                                                    class="text_secondary">Travels</span>

                                            </h1>
                                            <h2 class="mt-1 small_heading text-white">
                                                Your Trusted Partner in Visa <br /> and Travel Services
                                            </h2>
                                            <!-- <p class="mt-3 fontWeight500 text-white">
                                                With 14+ years of experience working with embassies and high
                                                commissions, we
                                                help
                                                you unlock your international journey with confidence.
                                            </p> -->
                                            <div class="mt-5">
                                                <a class="btn_3" href="tel:+91-0123456789">
                                                    <span class=" btn_icon bg-white circle pulse">
                                                        <i class="fa-solid fa-phone   "></i>
                                                    </span> <span>
                                                        <p class="btn_letterspacing  ">
                                                            Contact with us
                                                        </p>
                                                        <h4 class="fontWeight700">
                                                            +91-0123456789
                                                        </h4>
                                                    </span> &nbsp;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <div class="swiper-pagination"></div>
            </div>


        </div>
        <section>
            <div class="containerFull">
                <div class="row">

                    <div class="col-lg-6 about_img">
                        <img src="images/about.png" alt="">

                        <div class="about_traveller">
                            <img src="images/man.png" alt="">
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <small class=" fontWeight600">
                            ABOUT US
                        </small>
                        <h3 class="mt-2 heading fontWeight800 fontHeading">
                            <span class="text_primary">DiDee</span> <span class="text_secondary">Travels</span>
                        </h3>
                        <p class="mt-3">
                            We are a dedicated team of immigration consultants and legal experts committed to turning
                            your global aspirations into reality. We provide tailored solutions in accordance with a
                            deep understanding of immigration policies and processes. Based on transparency,
                            professionalism, and personalized service, we are the trusted partner for individuals and
                            families exploring opportunities abroad.

                        </p>
                        <p class="mt-2">
                            At the heart of our services lies a passion for guiding our clients through every step of
                            their journey, ensuring a seamless experience from consultation to resettlement. We pride
                            ourselves in being proven and client first, ensuring that we're more than just consultants.
                            We are your partners for a brighter future.

                        </p>
                        <p class="mt-2">
                            We pride ourselves on making complex processes easy to follow, with clear guidance and
                            strong support at every step. Our team of experts is diverse, allowing us to address a wide
                            range of immigration needs, so whatever your background or aspirations, we have the tools
                            and knowledge to help you succeed. We are committed to excellence, and we continue improving
                            our strategies to stay ahead of the game in an ever-changing global landscape, making us a
                            reliable partner in your journey to a brighter future.


                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- our services -->
        <section class="bg-gray-light">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <small class="fontWeight600">
                            Countries That We Open Doors To
                        </small>

                        <h3 class="mt-2 heading fontWeight800 fontHeading">
                            <span class="text_primary">Visa</span> <span class="text_secondary"> Services</span>
                        </h3>
                        <p class="mt-3">
                            Unmatched Experience, Quality Advice since 2005. We offer Visa assistance for Tourist Visa /
                            Business Visa / Student Visa / Work Visa / Spouse visa / Dependent visa etc.
                        </p>
                        <p class="mt-3">
                            Di Dee Immigration specializes in visa services for education, employment, business, and
                            permanent residency, offering personalized guidance throughout the process. Our experts
                            ensure all documents and requirements are met, boosting your chances of success. We focus on
                            Skilled Worker, Business, Student, and Residency Visas, providing a seamless, stress-free
                            experience.
                        </p>
                        <div class="row row-cols-3 mt-4 servires_info">
                            <div class="item_row">
                                <h4>

                                    1000+
                                </h4>
                                <small>
                                    SATISFIED
                                    APPLICANTS
                                </small>

                            </div>
                            <div class="item_row">
                                <h4>

                                    10+ Years
                                </h4>
                                <small>
                                    Working experience
                                </small>

                            </div>
                            

                        </div>


                    </div>
                    <div class="col-lg-6">
                        <img class="w-100"
                            src="images/flat-travel-background_23-2148050086.avif"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="containerFull ">

                <div class="swiper countries_slider mt-4">
                    <div class="swiper-wrapper">
                        <?php foreach ($countries as $country): ?>
                            <div class="swiper-slide pb-5 pt-2">

                                <div class=" ">
                                    <div type="button" data-bs-toggle="modal" data-bs-target="#model<?= $country['cid']; ?>"
                                        class="country_box home_country_box">
                                        <div class="flag">
                                            <?php if ($country['flag']): ?>
                                                <img class="" src="<?= $country['flag']; ?>" alt="">
                                            <?php endif; ?>
                                        </div>

                                        <div class="img">
                                            <img class="w-100" src="<?= $country['image']; ?>" alt="">
                                        </div>
                                        <div class="content">
                                            <!-- <div class="flag">
                                            <?php if ($country['flag']): ?>
                                                <img class="" src="<?= $country['flag']; ?>" alt="">
                                            <?php endif; ?>
                                        </div> -->
                                            <p class="name fontWeight600"><?= $country['name']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <!-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>


        </section>

        <!-- services_items -->
        <section class="services_items">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card_list">
                            <div class="card_item shadow">
                                <div class="main_card">
                                    <div class="card_img">
                                        <img src="images/icons/advisor.png" alt="">
                                    </div>
                                    <div class="card_content">
                                        <h3 class="fontHeading text_primary">
                                            CONSULTATION
                                        </h3>
                                        <p class="mt-1">
                                            Personalized guidance to simplify your immigration journey.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_item shadow">
                                <div class="main_card">
                                    <div class="card_img">
                                        <img src="images/icons/advisor.png" alt="">
                                    </div>
                                    <div class="card_content">
                                        <h3 class="fontHeading text_primary">
                                            OUR EXPERTISE
                                        </h3>
                                        <p class="mt-3">
                                            Industry-leading knowledge to ensure seamless visa processes.

                                    </div>
                                </div>

                            </div>
                            <div class="card_item shadow">
                                <div class="main_card">
                                    <div class="card_img">
                                        <img src="images/icons/advisor.png" alt="">
                                    </div>
                                    <div class="card_content">
                                        <h3 class="fontHeading text_primary">
                                            OUR SUCCESS
                                        </h3>
                                        <p class="mt-3">
                                            Proven results with hundreds of satisfied clients globally.

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-5">
                        <div class="img_box_consultency">
                            <img class="w-100" src="images/two-business-men-shaking-hands_1423-77.avif" alt="">
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- <section class="services_items">
            <div class="containerFull">
                <div class="card_grid">
                    <div class="card_item">
                        <div class="main_card">
                            <div class="card_img">
                                <img src="images/icons/advisor.png" alt="">
                            </div>
                            <div class="card_content">
                                <h3 class="fontHeading text_primary">
                                    CONSULTATION
                                </h3>
                                <p class="mt-3">
                                    VISA CONSULTANCY SERVICES, a unit of SSAV BIZ SOLUTIONS PVT. LTD. is a leading Study
                                    Abroad and Visa Consulting firm. Established in 2005, we offer services to clients
                                    all over the country.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card_item">
                        <div class="main_card">
                            <div class="card_img">
                                <img src="images/icons/advisor.png" alt="">
                            </div>
                            <div class="card_content">
                                <h3 class="fontHeading text_primary">
                                    OUR EXPERTISE
                                </h3>
                                <p class="mt-3">
                                    The principal directors of VCS have worked at the British High Commission, Visa
                                    Department, New Delhi for over 14 years and have gained valuable knowledge and
                                    experience unmatched by anyone, anywhere.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="card_item">
                        <div class="main_card">
                            <div class="card_img">
                                <img src="images/icons/advisor.png" alt="">
                            </div>
                            <div class="card_content">
                                <h3 class="fontHeading text_primary">
                                    OUR SUCCESS
                                </h3>
                                <p class="mt-3">
                                    Over 23,000 clients across 15+ years of consulting services, is the foundation on
                                    which the reputation of our firm stands. Our success builds upon itself. Referrals
                                    from our satisfied clients is the basis of our continued growth.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> -->
        <section class="py-5 " style="background:#1c9bea94">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-12 ">

                        <div class="row align-items-center">
                            <!--<div class="col-lg-2 col-md-2 text-center aos-init aos-animate" data-aos="zoom-in-up">-->
                            <!--    <img src="images/logo.jpg" class="w-100 logoIcons">-->
                            <!--</div>-->
                            <div class="col-lg-7 col-md-5 aos-init aos-animate" data-aos="zoom-in-up">
                                <div class="missedCall">
                                    <h4 class=" text-light fontHeading sub_heading text-uppercase fontWeight700">Have
                                        questions or need assistance? <span class="text_secondary"> Contact us today for
                                            expert guidance!</span></h4>
                                    <!--<p class="medium_heading mt-2">YOUR SOLUTION SPECIALIST</p>-->
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 aos-init aos-animate" data-aos="zoom-in-up">
                                <div class="d-flex justify-content-end">
                                    <a href="contact-us.php" class="btn_1 fontWeight500 simple_btn ms-lg-5">Let's
                                        Connect!</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- value added services -->
        <section class="    ">
            <div class="containerFull">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <h4 class="fontWeight700 heading fontHeading ">
                            <span class="text_primary">Value Added</span> <span class="text_secondary">
                                Services
                            </span>
                        </h4>
                    </div>
                    <div class="col-2 sliderbtn">
                        <div class="prev_1"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="next_1"><i class="fa-solid fa-angle-right "></i></div>
                    </div>

                </div>

                <div class="swiper value_slider mt-4">
                    <div class="swiper-wrapper">
                        <?php foreach ($values as $value): ?>
                            <div class="swiper-slide pb-4">
                                <div class="value_box_home">
                                    <div class="img_box_value">
                                        <img src="<?php echo $value['image']; ?>" alt="">
                                    </div>
                                    <div class="content mt-3">
                                        <h4 class=" "><?php echo $value['title']; ?></h4>
                                        <p class="mt-3 "><?php echo $value['content']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>

        <!-- why choose us -->
        <!-- <section class="why_choose">
            <div class="containerFull">
                <h4 class="fontHeading heading fontWeight800">
                    <span class="text_primary"> WHY </span> <span class="text_secondary">CHOOSE US</span>
                </h4>
                <div class="why_grid mt-4">
                    <?php foreach ($why_choose as $item): ?>
                        <div class="why_card">
                            <div class="card_img">
                                <img src="https://www.visa-consultant.com/<?php echo $item['image']; ?>"
                                    alt="<?php echo $item['title']; ?>" />
                            </div>
                            <p class="mt-3  fontWeight600"><?php echo $item['title']; ?></p>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </section> -->

        <!-- new -->
        <section class="why_choose">
            <div class="containerFull">
                <!-- <h4 class="fontHeading heading fontWeight800">
                    <span class="text_primary"> WHY </span> <span class="text_secondary">CHOOSE US</span>
                </h4> -->
                <div class="why_grid mt-4">

                    <div class="why_card">
                        <div class="card_img">
                            <img src="<?php echo $featuresData[0]['image']; ?> "
                                alt="" />
                        </div>
                        <p class="mt-3  fontWeight600"><?php echo $featuresData[0]['title']; ?> </p>
                        <p class="mt-3  "><?php echo $featuresData[0]['description']; ?> </p>
                    </div>
                    <div class="why_card">
                        <div class="why_middle">
                            <div>

                                <!-- <img src="images/logo.jpg" alt=""> -->
                                <div class="circle_box shadow">
                                    <h4 class="fontHeading heading fontWeight800 text-center">
                                        <span class="text_primary"> WHY </span> <span class="text_secondary">CHOOSE <br>
                                            Di Dee ?</span>
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="why_card">
                        <div class="card_img">
                            <img src="<?php echo $featuresData[1]['image']; ?>"
                                alt="" />
                        </div>
                        <p class="mt-3  fontWeight600"><?php echo $featuresData[1]['title']; ?> </p>
                        <p class="mt-3  "><?php echo $featuresData[1]['description']; ?> </p>
                    </div>
                    <div class="why_card">
                        <div class="card_img">
                            <img src="<?php echo $featuresData[2]['image']; ?>"
                                alt="" />
                        </div>
                        <p class="mt-3  fontWeight600"><?php echo $featuresData[2]['title']; ?> </p>
                        <p class="mt-3  "><?php echo $featuresData[2]['description']; ?> </p>
                    </div>
                    <div class="why_card">
                        <div class="card_img">
                            <img src="<?php echo $featuresData[3]['image']; ?>"
                                alt="" />
                        </div>
                        <p class="mt-3  fontWeight600"><?php echo $featuresData[3]['title']; ?></p>
                        <p class="mt-3  "><?php echo $featuresData[3]['description']; ?> </p>
                    </div>
                    <div class="why_card">
                        <div class="card_img">
                            <img src="<?php echo $featuresData[4]['image']; ?>"
                                alt="" />
                        </div>
                        <p class="mt-3  fontWeight600"><?php echo $featuresData[4]['title']; ?></p>
                        <p class="mt-3  "><?php echo $featuresData[4]['description']; ?> </p>

                    </div>
                    <div class="why_card">
                        <div class="card_img">
                            <img src="<?php echo $featuresData[5]['image']; ?>"
                                alt="" />
                        </div>
                        <p class="mt-3  fontWeight600"><?php echo $featuresData[5]['title']; ?></p>
                        <p class="mt-3"><?php echo $featuresData[5]['description']; ?> </p>
                    </div>


                </div>

            </div>
        </section>

        <!-- contact  -->
        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <!--<small class="fontWeight600 ">-->
                        <!--    GET IN TOUCH-->
                        <!--</small>-->
                        <h4 class=" fontHeading  heading text_secondary ">
                            Have questions <span class="text_primary"> or need assistance? Contact us today for
                                expert guidance!</span>
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

    </div>
    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".banner_swiper", {
            spaceBetween: 0,
            // centeredSlides: true,
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 2,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 2,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 4,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".countries_slider", {
            spaceBetween: 20,
            // centeredSlides: true,
            slidesPerView: 4,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 1,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 1,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     }
            //     1024: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".next_1",
                prevEl: ".prev_1",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".value_slider", {
            spaceBetween: 0,
            // centeredSlides: true,
            slidesPerView: 3,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 1,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 1,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     }
            //     1024: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".next_1",
                prevEl: ".prev_1",
            },
        });
    </script>
</body>

</html>