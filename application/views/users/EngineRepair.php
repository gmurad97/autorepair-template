<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="page_banner" style="background-image: url('<?= base_url("public/user/assets/images/shapes/tyre_print_3.svg"); ?>');">
        <div class="container">
            <ul class="breadcrumb_nav unordered_list">
                <li><a href="index.html">Home</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="service_details.html">Engine Repair</a></li>
            </ul>
            <h1 class="page_title wow" data-splitting>Engine Repair</h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image2.avif"); ?>') center center / cover no-repeat;" class="details_image"></div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting>Engine Repair at The Motorclub</h2>
                        <p>At <strong>The Motorclub</strong>, we understand the heart of your vehicle is its
                            engine. Our team of skilled technicians specializes in comprehensive engine repair
                            services to ensure optimal performance and reliability.</p>
                        <p>Why choose <strong>The Motorclub</strong> for Engine Repair?</p>
                        <ul>
                            <li><strong>Expert Technicians:</strong> Our team consists of highly skilled
                                technicians with extensive knowledge of engine systems.</li>
                            <li><strong>Diagnostic Expertise:</strong> We use advanced diagnostic tools to
                                identify engine issues accurately.</li>
                            <li><strong>Quality Parts:</strong> We believe in using only high-quality parts for
                                engine repairs, ensuring longevity and performance.</li>
                            <li><strong>Efficient Repairs:</strong> We strive for quick and efficient engine
                                repairs to minimize downtime.</li>
                            <li><strong>Transparent Communication:</strong> Before any repairs, we provide clear
                                explanations of identified issues and recommended solutions.</li>
                            <li><strong>Affordable Pricing:</strong> Our engine repair services are
                                competitively priced, offering value for your investment.</li>
                        </ul>
                        <p><strong>Common Signs You May Need Engine Repair:</strong></p>
                        <ul>
                            <li>Strange noises from the engine</li>
                            <li>Poor fuel efficiency</li>
                            <li>Warning lights on the dashboard</li>
                            <li>Engine overheating</li>
                            <li>Loss of power or acceleration</li>
                        </ul>
                        <p><strong>Schedule Your Engine Repair Today:</strong></p>
                        <p>Your vehicle's engine is crucial for a smooth ride. Schedule an appointment with
                            <strong>The Motorclub</strong> for expert, reliable, and affordable engine repair
                            services.
                        </p>
                        <p>Trust <strong>The Motorclub</strong> for all your engine repair needs. Your journey
                            is our priority.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>