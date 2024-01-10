<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="page_banner" style="background-image: url('<?= base_url("public/user/assets/images/shapes/tyre_print_3.svg"); ?>');">
        <div class="container">
            <ul class="breadcrumb_nav unordered_list">
                <li><a href="<?= base_url('home'); ?>">Home</a></li>
                <li><a href="<?= base_url('faq'); ?>">FAQ</a></li>
            </ul>
            <h1 class="page_title wow" data-splitting>F.A.Q.</h1>
        </div>
    </section>
    <section class="faq_section section_space_lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="faq_accordion">

                        <!-- Question 1 -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Why should I choose The Motorclub over other service providers?
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0">At <strong>The Motorclub</strong>, we stand out with our
                                        commitment to exceptional service, unparalleled quality, and complete
                                        customer satisfaction. Our team of experts ensures your vehicle receives
                                        top-notch care, making us the preferred choice for all your automotive
                                        needs.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How can I book my car service with The Motorclub?
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0">Booking your car service with <strong>The Motorclub</strong>
                                        is easy. You can schedule an appointment online through our website or
                                        contact our friendly staff. We strive to make the process seamless and
                                        convenient for our valued customers.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What kind of car services can I avail with The Motorclub?
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0"><strong>The Motorclub</strong> offers a comprehensive range
                                        of car services for various makes and models. From routine maintenance
                                        to major repairs, our skilled technicians are equipped to handle all
                                        your automotive needs, ensuring the optimal performance and longevity of
                                        your vehicle.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What are the basic charges for my car service?
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0">Our pricing at <strong>The Motorclub</strong> is transparent
                                        and competitive. The cost of your car service depends on the type of
                                        service required. We provide detailed estimates before starting any
                                        work, ensuring clarity and transparency in our pricing structure.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Question 5 -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do I have to drop my car to the workshop?
                                </button>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0">Yes, for most car services, it's preferable to drop your
                                        vehicle off at our workshop. This allows our skilled technicians to
                                        conduct a thorough assessment and perform the necessary services with
                                        precision. However, we also offer select services with on-site options
                                        for your convenience.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Question 6 -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What if I am not satisfied with my car service?
                                </button>
                            </div>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0">Customer satisfaction is our top priority at <strong>The
                                            Motorclub</strong>. If you're not satisfied with your car service,
                                        please reach out to our customer service team. We'll address your
                                        concerns promptly and work to ensure your complete satisfaction with our
                                        services.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>