<?php
$services = [
    "Custom Software Development" => [
        "description" => "Unlock new levels of efficiency and productivity.
Brain Max creates custom software that streamlines your operations, automates tasks, boosts productivity and fuels business growth.
.",
        "icon" => "fas fa-cogs"
    ],
    "Mobile App Development" => [
        "description" => "Connect with your audience in a whole new way.
        BrainMax develops engaging mobile apps that boost your brand, drive loyalty and delight your customers.",
        "icon" => "fas fa-mobile-alt"
    ],

    "Website and UI/UX Design" => [
        "description" => "Brain Max builds beautiful, high-performing websites that attract and engage your ideal audience, converting visitors into customers.
        Think of it as your 24/7 sales team, working tirelessly to bring in business while you sleep.",
        "icon" => "fas fa-paint-brush"
    ]
];
?>

<div class="container-xxl">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <?php $i = 0.1 ?>
            <?php foreach ($services as $service => $details) { ?>
                <?php echo '<div class="col-lg-4 wow fadeInUp" data-wow-delay="$is">';
                $i += 0.1;
                ?>
                <div class="feature-item bg-light rounded text-center p-4">
                    <?= "<i class='fa fa-3x {$details['icon']} text-primary mb-4'></i> "; ?>
                    <h5 class="mb-3"><?= $service ?></h5>
                    <p class="m-0"><?= $details['description'] ?></p>
                </div>
        </div>
    <?php } ?>
    </div>
</div>
</div>
<?php include("get-free-quote.php") ?>