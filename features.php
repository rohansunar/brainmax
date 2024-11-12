<?php
$services = [
    "Custom Software Development" => [
        "description" => "Tailored software solutions designed to meet specific business needs, enhancing efficiency and productivity.",
        "icon" => "fas fa-cogs"
    ],
    "Mobile App Development" => [
        "description" => "Creation of mobile applications for iOS and Android platforms, focusing on user experience and functionality.",
        "icon" => "fas fa-mobile-alt"
    ],
   
    "UI/UX Design" => [
        "description" => "Designing intuitive user interfaces and experiences that improve user satisfaction and engagement with digital products.",
        "icon" => "fas fa-paint-brush"
    ]
];
?>

<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
        <?php $i = 0.1 ?>
        <?php foreach($services as $service => $details){ ?>
            <?php echo '<div class="col-lg-4 wow fadeInUp" data-wow-delay="$is">';
                    $i += 0.1;
             ?>
                <div class="feature-item bg-light rounded text-center p-4">
                    <?="<i class='fa fa-3x {$details['icon']} text-primary mb-4'></i> ";?>
                    <h5 class="mb-3"><?=$service?></h5>
                    <p class="m-0"><?=$details['description']?></p>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>