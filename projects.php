<?php
$projects = [
    [
        'title' => 'E-commerce Website',
        'category' => 'Web Development',
        'description' => 'A fully functional e-commerce platform with user authentication, product management, and payment integration.',
        'image_url' => 'https://example.com/images/ecommerce-website.jpg'
    ],
    [
        'title' => 'Mobile Fitness App',
        'category' => 'Mobile Development',
        'description' => 'A mobile application that helps users track their workouts, nutrition, and progress with personalized plans.',
        'image_url' => 'https://example.com/images/fitness-app.jpg'
    ],
    [
        'title' => 'Portfolio Website',
        'category' => 'Web Development',
        'description' => 'A personal portfolio website showcasing projects, skills, and contact information for freelancers and professionals.',
        'image_url' => 'https://example.com/images/portfolio-website.jpg'
    ],
    [
        'title' => 'Chat Application',
        'category' => 'Web Development',
        'description' => 'A real-time chat application that allows users to communicate through text and multimedia messages.',
        'image_url' => 'https://example.com/images/chat-app.jpg'
    ],
    [
        'title' => 'Task Management Tool',
        'category' => 'Software Development',
        'description' => 'A web-based tool for managing tasks, projects, and team collaboration with features like deadlines and notifications.',
        'image_url' => 'https://example.com/images/task-management-tool.jpg'
    ],
    [
        'title' => 'Blog Platform',
        'category' => 'Web Development',
        'description' => 'A blogging platform that allows users to create, edit, and publish articles with a user-friendly interface.',
        'image_url' => 'https://example.com/images/blog-platform.jpg'
    ],
    [
        'title' => 'Online Learning System',
        'category' => 'E-Learning',
        'description' => 'An online learning management system that provides courses, quizzes, and progress tracking for students.',
        'image_url' => 'https://example.com/images/online-learning-system.jpg'
    ],
    [
        'title' => 'Restaurant Reservation System',
        'category' => 'Web Development',
        'description' => 'A web application that allows users to make reservations at restaurants and manage bookings.',
        'image_url' => 'https://example.com/images/restaurant-reservation.jpg'
    ],
    [
        'title' => 'Social Media Dashboard',
        'category' => 'Data Visualization',
        'description' => 'A dashboard that aggregates social media metrics and visualizes data for better insights and decision-making.',
        'image_url' => 'https://example.com/images/social-media-dashboard.jpg'
    ],
];

?>

<?php include('./header.php') ?>
    <!-- Navbar & Hero Start -->
<?php include('./navbar.php') ?>
<!-- Navbar & Hero End -->

<div class="container-xxl py-5 bg-primary hero-header">
    <div class="container my-5 py-5 px-lg-5">
    <h1 class="text-center text-white animated slideInDown">Projects</h1>
        <!-- <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Project</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Projects</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div> -->
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Projects Start -->
<div class="container-xxl py-5">
<div class="container py-5 px-lg-5">
    <div class="wow fadeInUp" data-wow-delay="0.1s">
        <p class="section-title text-secondary justify-content-center"><span></span>Our Projects<span></span></p>
        <h1 class="text-center mb-5">Recently Completed Projects</h1>
    </div>
    <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
        <div class="col-12 text-center">
            <ul class="list-inline mb-5" id="portfolio-flters">
                <li class="mx-2 active" data-filter="*">All</li>
                <li class="mx-2" data-filter=".first">Web Development</li>
                <li class="mx-2" data-filter=".second">Software Development</li>
                <li class="mx-2" data-filter=".third">Data Visualization</li>
            </ul>
        </div>
    </div>
    <div class="row g-4 portfolio-container">
        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
            <div class="rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <p class="text-primary fw-medium mb-2">Web Development</p>
                    <h5 class="lh-base mb-0">A web application that allows users to make reservations at restaurants and manage bookings.</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
            <div class="rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <p class="text-primary fw-medium mb-2">Software Development</p>
                    <h5 class="lh-base mb-0">A web-based tool for managing tasks, projects, and team collaboration with features like deadlines and notifications.</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
            <div class="rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <p class="text-primary fw-medium mb-2">Web Development</p>
                    <h5 class="lh-base mb-0">A real-time chat application that allows users to communicate through text and multimedia messages.</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
            <div class="rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/ecommerce.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <p class="text-primary fw-medium mb-2">Web Development</p>
                    <h5 class="lh-base mb-0">A fully functional e-commerce platform with user authentication, product management, and payment integration.</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
            <div class="rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/software-development.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <p class="text-primary fw-medium mb-2">Software Development</p>
                    <h5 class="lh-base mb-0">A CRM system designed to help businesses manage customer interactions, track sales, and improve customer service.</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
            <div class="rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/software-development.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <p class="text-primary fw-medium mb-2">Software Development</p>
                    <h5 class="lh-base mb-0">A comprehensive project management tool that helps teams plan, execute, and monitor project progress with Gantt charts and reporting features.</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item third wow fadeInUp" data-wow-delay="0.5s">
            <div class="rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <p class="text-primary fw-medium mb-2">Data Visualization</p>
                    <h5 class="lh-base mb-0">A dashboard that aggregates social media metrics and visualizes data for better insights and decision-making.</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Projects End -->

<!-- Footer Start -->
<?php include('footer.php') ?>
<!-- Footer End -->