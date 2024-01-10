<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="page_banner" style="background-image: url('<?= base_url("public/user/assets/images/shapes/tyre_print_3.svg"); ?>');">
        <div class="container">
            <ul class="breadcrumb_nav unordered_list">
                <li><a href="index.html">Home</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="service_details.html">Brake Repair</a></li>
            </ul>
            <h1 class="page_title wow" data-splitting>Brake Repair</h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image1.jpg"); ?>') center center / cover no-repeat;" class="details_image">
                    <!-- Optional: alt text for accessibility -->
                    <span class="sr-only">ProMotors - Car Repair Service</span>
                </div>

                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting>Brake Repair at The Motorclub</h2>
                        <p>At <strong>The Motorclub</strong>, we prioritize your safety on the road. Our
                            experienced technicians specialize in comprehensive brake repair services to ensure
                            your vehicle stops smoothly and efficiently.</p>
                        <p>Why choose The Motorclub for Brake Repair?</p>
                        <ul>
                            <li><strong>Experienced Technicians:</strong> Highly skilled experts dedicated to
                                your safety.</li>
                            <li><strong>Comprehensive Inspections:</strong> Thorough assessment of brake
                                components.</li>
                            <li><strong>Quality Brake Parts:</strong> We use only premium components for
                                durability.</li>
                            <li><strong>Efficient Repairs:</strong> Prompt and reliable brake repairs to get you
                                back on the road.</li>
                            <li><strong>Transparent Communication:</strong> We explain issues and solutions
                                clearly.</li>
                            <li><strong>Affordable Pricing:</strong> Competitive and transparent pricing for
                                value.</li>
                        </ul>
                        <p><strong>Common Signs You May Need Brake Repair:</strong></p>
                        <ul>
                            <li>Squeaking or grinding noises</li>
                            <li>Reduced brake responsiveness</li>
                            <li>Vibrations or pulsations while braking</li>
                            <li>Warning lights on the dashboard</li>
                            <li>Uneven wear on brake pads</li>
                        </ul>
                        <p><strong>Schedule Your Brake Repair Today:</strong></p>
                        <p>Your safety is our priority. Schedule an appointment with The Motorclub for
                            efficient, reliable, and affordable brake repair services.</p>
                        <p>Trust The Motorclub for all your brake repair needs. Your journey is our priority.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>