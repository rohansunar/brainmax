<?php
// Get the current script name
$currentUrl = basename($_SERVER['PHP_SELF']); // This will give you the current file name, e.g., 'index.php'

// Define your navigation items
$navItems = [
    'Home' => 'index.php',
    'Services' => 'services.php',
    'Projects' => 'projects.php',
    'Testimonials' => 'index.php#testimonials',
    'Blog' => '#',
    'Contact Us' => 'contact.php',
];
// Function to generate navigation links
function renderNavItem($name, $url, $currentUrl)
{
    // Check if the current URL matches the link's URL
    $activeClass = ($currentUrl === basename($url)) ? 'active' : '';
    return '<a href="' . htmlspecialchars($url) . '" class="nav-item nav-link ' . $activeClass . '">' . htmlspecialchars($name) . '</a>';
}
?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">BrainMax</h1> -->
                    <img src="img/logo.png" class="logo-normal" alt="Logo">
                    <img src="img/logo-white.png" class="logo-white" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <?php
                        foreach ($navItems as $name => $url) {
                            echo renderNavItem($name, $url, $currentUrl) . "\n";
                        }
                        ?>
                    </div>
                    <a href="contact.php" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
                </div>
            </nav>