<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="page_banner" style="background-image: url('<?= base_url("public/user/assets/images/shapes/tyre_print_3.svg"); ?>');">
        <div class="container">
            <ul class="breadcrumb_nav unordered_list">
                <li><a href="<?= base_url("home"); ?>">Home</a></li>
                <li><a href="<?= base_url("services"); ?>">Services</a></li>
                <li><a href="<?= base_url("tire-repair"); ?>">Tire Repair</a></li>
            </ul>
            <h1 class="page_title wow" data-splitting>Tire Repair</h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image3.avif"); ?>') center center / cover no-repeat;" class="details_image"></div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting>Tire Repair at the Motorclub</h2>
                        <p>At <strong>The Motorclub</strong>, we recognize the importance of well-maintained
                            tires for a safe and comfortable ride. Our team of dedicated experts specializes in
                            comprehensive tire repair services to keep you rolling smoothly.</p>
                        <p><strong>Why choose The Motorclub for Tire Repair?</strong></p>
                        <ul>
                            <li><strong>Expert Technicians:</strong> Our skilled technicians have the expertise
                                to handle various tire issues.</li>
                            <li><strong>Thorough Inspections:</strong> We conduct comprehensive inspections to
                                identify tire damage or wear.</li>
                            <li><strong>Quality Tire Services:</strong> From patching punctures to tire
                                rotations, we offer a range of high-quality tire services.</li>
                            <li><strong>Efficient Repairs:</strong> We aim for prompt and efficient tire repairs
                                to get you back on the road quickly.</li>
                            <li><strong>Transparent Communication:</strong> Before any tire repairs, we
                                communicate clearly about the issues and proposed solutions.</li>
                            <li><strong>Affordable Pricing:</strong> Our tire repair services are competitively
                                priced, providing excellent value for your investment.</li>
                        </ul>
                        <p><strong>Common Signs You May Need Tire Repair:</strong></p>
                        <ul>
                            <li>Flat or underinflated tires</li>
                            <li>Tire vibrations or wobbling</li>
                            <li>Uneven tire wear</li>
                            <li>Punctures or visible damage</li>
                            <li>Warning lights for tire pressure</li>
                        </ul>
                        <p><strong>Schedule Your Tire Repair Today:</strong></p>
                        <p>Your safety on the road starts with well-maintained tires. Schedule an appointment
                            with <strong>The Motorclub</strong> for expert, reliable, and affordable tire repair
                            services.</p>
                        <p>Trust <strong>The Motorclub</strong> for all your tire repair needs. Your journey is
                            our priority.</p>
                    </div>


                </div>
            </div>
        </div>
    </section>

</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>