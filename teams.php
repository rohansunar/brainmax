<?php
$teams = [
        ["name"=>"Rohan Sonar","designation"=>"CEO & Founder"],
        ["name"=>"Upendra Prasad","designation"=>"DevOps Engineer"],
        ["name"=>"Mahesh Chhetri","designation"=>"Technical Lead"],
        ["name"=>"Sneha Iyer","designation"=>"Mobile App Developer"],
        ["name"=>"Sanju Sonar","designation"=>"Frontend Developer"],
        ["name"=>"Dipen Biswa","designation"=>"IT Project Manager"],
        ["name"=>"Rahul Reddy","designation"=>"Cybersecurity Analyst"],
        ["name"=>"Raj Sharma","designation"=>"UI/UX Designer"],
        ["name"=>"Abhishek Kumar","designation"=>"Software Tester"],
        ["name"=>"Uttam Kumar","designation"=>"Backend Developer"]
    ];
?>  
  <!-- Team Start -->
  <div class="container-xxl py-5 team">
      <div class="container py-5 px-lg-5">
          <div class="wow fadeInUp" data-wow-delay="0.1s">
              <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
              <h1 class="text-center mb-5">Our Team Members</h1>
          </div>
          <div class="row g-4">
              <?php foreach ($teams as $team) { ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light rounded">
                        <div class="text-center border-bottom p-4">
                            <img class="img-fluid rounded-circle mb-4" src="img/users.png" alt="">
                            <h5><?=$team['name']?></h5>
                            <span><?=$team['designation']?></span>
                        </div>
                    </div>
                </div>
              <?php } ?>

          </div>
      </div>
  </div>
  <!-- Team End -->