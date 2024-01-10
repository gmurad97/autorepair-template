<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="page_banner" style="background-image: url('<?= base_url("public/user/assets/images/shapes/tyre_print_3.svg"); ?>');">
        <div class="container">
            <ul class="breadcrumb_nav unordered_list">
                <li>
                    <a href="<?= base_url('home'); ?>"><?= $this->lang->line("breadcrumb_home"); ?></a>
                </li>
                <li>
                    <a href="<?= base_url('faq'); ?>"><?= $this->lang->line("breadcrumb_faq"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line("breadcrumb_faq"); ?></h1>
        </div>
    </section>
    <section class="faq_section section_space_lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="faq_accordion">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <?= $this->lang->line('motorclub_why_choose_us_over_others'); ?>
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0"><?= $this->lang->line('motorclub_commitment_to_quality'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <?= $this->lang->line('motorclub_how_to_book_service'); ?>
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0"><?= $this->lang->line('motorclub_easy_booking_process'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <?= $this->lang->line('motorclub_avail_car_services'); ?>
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0"><?= $this->lang->line('motorclub_comprehensive_car_services'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <?= $this->lang->line('motorclub_basic_service_charges'); ?>
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0"><?= $this->lang->line('motorclub_transparent_pricing'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <?= $this->lang->line('motorclub_drop_car_to_workshop'); ?>
                                </button>
                            </div>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0"><?= $this->lang->line('motorclub_drop_car_preference'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <?= $this->lang->line('motorclub_not_satisfied_with_service'); ?>
                                </button>
                            </div>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faq_accordion">
                                <div class="accordion-body pt-0">
                                    <p class="m-0"><?= $this->lang->line('motorclub_customer_satisfaction_guarantee'); ?></p>
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