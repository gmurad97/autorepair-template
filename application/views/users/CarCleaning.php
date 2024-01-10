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
                    <a href="<?= base_url('services'); ?>"><?= $this->lang->line("breadcrumb_services"); ?></a>
                </li>
                <li>
                    <a href="<?= base_url('car-cleaning'); ?>"><?= $this->lang->line("breadcrumb_car_exterior_cleaning"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line('motorclub_car_exterior_cleaning'); ?></h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image7.jpg"); ?>') center center / cover no-repeat;" class="details_image"></div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting><?= $this->lang->line('motorclub_car_exterior_cleaning_experts'); ?></h2>
                        <p><?= $this->lang->line('motorclub_car_exterior_cleaning_description'); ?></p>
                        <p><strong><?= $this->lang->line('motorclub_why_choose_us_car_exterior_cleaning'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('motorclub_detailing_specialists_car_exterior_cleaning'); ?></li>
                            <li><?= $this->lang->line('motorclub_quality_cleaning_products_car_exterior_cleaning'); ?></li>
                            <li><?= $this->lang->line('motorclub_thorough_cleaning_car_exterior_cleaning'); ?></li>
                            <li><?= $this->lang->line('motorclub_paint_protection_car_exterior_cleaning'); ?></li>
                            <li><?= $this->lang->line('motorclub_efficient_services_car_exterior_cleaning'); ?></li>
                            <li><?= $this->lang->line('motorclub_affordable_packages_car_exterior_cleaning'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('motorclub_services_included_car_exterior_cleaning_basic_detailing'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('motorclub_exterior_washing_drying_car_exterior_cleaning'); ?></li>
                            <li><?= $this->lang->line('motorclub_wheel_tire_cleaning_car_exterior_cleaning'); ?></li>
                            <li><?= $this->lang->line('motorclub_bug_tar_removal_car_exterior_cleaning'); ?></li>
                            <li><?= $this->lang->line('motorclub_hand_waxing_protection_car_exterior_cleaning'); ?></li>
                            <li><?= $this->lang->line('motorclub_exterior_glass_cleaning_car_exterior_cleaning'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('motorclub_schedule_car_exterior_cleaning'); ?></strong></p>
                        <p><?= $this->lang->line('motorclub_schedule_car_exterior_cleaning_care'); ?></p>
                        <p><?= $this->lang->line('motorclub_trust_us_car_detailing'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>