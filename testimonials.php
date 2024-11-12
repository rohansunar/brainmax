<?php
$testimonials = [
    [
        "name" => "Bjorn Symester",
        "profession" => "CEO, Drivio Inc",
        "testimonial" => "The custom software developed by this company has transformed our operations. Their team was professional, responsive, and delivered on time."
    ],
    [
        "name" => "Jane Smith",
        "profession" => "Marketing Director, Creative Solutions",
        "testimonial" => "Working with this team was a fantastic experience. They understood our needs and provided a mobile app that exceeded our expectations."
    ],
    [
        "name" => "Jane Johnson",
        "profession" => "Founder, Solari",
        "testimonial" => "Their web development services helped us launch our online store seamlessly. The support and guidance throughout the process were invaluable."
    ],
    [
        "name" => "Anil Agarwal",
        "profession" => "CTO, Sesa Goa Limited",
        "testimonial" => "The AI solutions implemented by this company have significantly improved our data analysis capabilities. Their expertise in the field is commendable."
    ],
    [
        "name" => "Anil Agarwal",
        "profession" => "Founder, Sesa Goa Limited",
        "testimonial" => "The AI solutions implemented by this company have significantly improved our data analysis capabilities. Their expertise in the field is commendable."
    ]
];
?>
<!-- Testimonial Start -->
<div class="container-xxl  wow fadeInUp" data-wow-delay="0.1s" id="testimonials">
    <div class="container py-5 px-lg-5">
        <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
        <h1 class="text-center mb-5">What Say Our Clients!</h1>
        <div class="owl-carousel testimonial-carousel">
            <?php foreach ($testimonials as $testimonial) { ?>
                <div class="testimonial-item bg-light rounded my-4">
                    <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i><?= $testimonial['testimonial']; ?></p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/users.png" style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1"><?= $testimonial['name']; ?></h5>
                            <span><?= $testimonial['profession']; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->