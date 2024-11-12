<?php include('./header.php');
$services = [
    "Custom Software Development" => [
        "description" => "Tailored software solutions designed to meet specific business needs, enhancing efficiency and productivity.",
        "icon" => "fas fa-cogs"
    ],
    "Mobile App Development" => [
        "description" => "Creation of mobile applications for iOS and Android platforms, focusing on user experience and functionality.",
        "icon" => "fas fa-mobile-alt"
    ],
    "Web Development" => [
        "description" => "Building responsive and dynamic websites using the latest technologies to ensure optimal performance and user engagement.",
        "icon" => "fas fa-laptop-code"
    ],
    "Cloud Computing Services" => [
        "description" => "Providing scalable cloud solutions, including storage, computing power, and software services, to enhance business agility.",
        "icon" => "fas fa-cloud"
    ],
    "UI/UX Design" => [
        "description" => "Designing intuitive user interfaces and experiences that improve user satisfaction and engagement with digital products.",
        "icon" => "fas fa-paint-brush"
    ],
    "E-commerce Solutions" => [
        "description" => "Developing online stores and e-commerce platforms that facilitate seamless transactions and enhance customer experience.",
        "icon" => "fas fa-shopping-cart"
    ],
    "Software Testing and QA" => [
        "description" => "Comprehensive testing services to ensure software quality, performance, and security before deployment.",
        "icon" => "fas fa-check-circle"
    ],
    "DevOps Services" => [
        "description" => "Integrating development and operations to streamline processes, improve collaboration, and enhance software delivery.",
        "icon" => "fas fa-sync-alt"
    ],
    "IT Consulting" => [
        "description" => "Advising businesses on technology strategies, system integration, and digital transformation to achieve their goals.",
        "icon" => "fas fa-comments"
    ],
    "Maintenance and Support" => [
        "description" => "Ongoing support and maintenance services to ensure software systems run smoothly and efficiently post-deployment.",
        "icon" => "fas fa-tools"
    ],
    "Blockchain Development" => [
        "description" => "Creating decentralized applications and smart contracts using blockchain technology for enhanced security and transparency.",
        "icon" => "fas fa-lock"
    ],
    "Artificial Intelligence and Machine Learning" => [
        "description" => "Implementing AI and ML solutions to automate processes, analyze data, and improve decision-making.",
        "icon" => "fas fa-brain"
    ],
    "Cybersecurity Services" => [
        "description" => "Protecting businesses from cyber threats through risk assessments, security audits, and implementation of security measures.",
        "icon" => "fas fa-shield-alt"
    ],
    "Data Analytics and Business Intelligence" => [
        "description" => "Analyzing data to provide insights and support data-driven decision-making for businesses.",
        "icon" => "fas fa-chart-line"
    ],
    "Internet of Things (IoT) Solutions" => [
        "description" => "Developing IoT applications and systems that connect devices and enable data exchange for smarter operations.",
        "icon" => "fas fa-sitemap"
    ]
];
?>

<!-- Navbar & Hero Start -->
<?php include('./navbar.php') ?>
<!-- Navbar & Hero End -->

<div class="container-xxl py-5 bg-primary hero-header">
    <div class="container my-5 py-5 px-lg-5">
        <h1 class="text-center text-white animated slideInDown">Services</h1>
        <!-- <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Services</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                    </ol>
                </nav>
            </div>
        </div> -->
    </div>
</div>


<!-- Service Start -->
<div class="container-xxl">
    <div class="container  px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Services<span></span></p>
            <h1 class="text-center mb-5">What Solutions We Provide</h1>
        </div>
        <div class="row g-4">
            <?php $i = 0.1 ?>
            <?php foreach ($services as $service => $details) { ?>
                <?php echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="$is">';
                $i += 0.1;
                ?>

                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <?= "<i class='{$details['icon']}'></i> "; ?>

                    </div>
                    <h5 class="mb-3"><?= $service ?></h5>
                    <p class="m-0"><?= $details['description'] ?></p>
                    <br>
                    <p><a href="#" data-bs-target="#getAQuote" data-bs-toggle="modal" class="btn-get-quote">Get a quote</a></p>
                </div>
        </div>
    <?php } ?>
    <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item d-flex flex-column text-center rounded">
                <div class="service-icon flex-shrink-0">
                    <i class="fa fa-laptop-code fa-2x"></i>
                </div>
                <h5 class="mb-3">Web Design</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item d-flex flex-column text-center rounded">
                <div class="service-icon flex-shrink-0">
                    <i class="fab fa-facebook-f fa-2x"></i>
                </div>
                <h5 class="mb-3">Social Media Marketing</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item d-flex flex-column text-center rounded">
                <div class="service-icon flex-shrink-0">
                    <i class="fa fa-mail-bulk fa-2x"></i>
                </div>
                <h5 class="mb-3">Email Marketing</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item d-flex flex-column text-center rounded">
                <div class="service-icon flex-shrink-0">
                    <i class="fa fa-thumbs-up fa-2x"></i>
                </div>
                <h5 class="mb-3">PPC Advertising</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item d-flex flex-column text-center rounded">
                <div class="service-icon flex-shrink-0">
                    <i class="fab fa-android fa-2x"></i>
                </div>
                <h5 class="mb-3">App Development</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
            </div>
        </div> -->
    </div>
</div>
</div>
<!-- Service End -->

<!-- Footer Start -->
<?php include('footer.php') ?>
<!-- Footer End -->