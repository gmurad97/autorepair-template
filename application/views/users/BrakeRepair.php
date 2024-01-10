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
                    <a href="<?= base_url('brake-repair'); ?>"><?= $this->lang->line("breadcrumb_brake_repair"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line("breadcrumb_brake_repair"); ?></h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image1.jpg"); ?>') center center / cover no-repeat;" class="details_image">
                    <span class="sr-only"><?= $this->lang->line('promotors_car_repair_service'); ?></span>
                </div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting><?= $this->lang->line('motorclub_brake_repair'); ?></h2>
                        <p><?= $this->lang->line('motorclub_brake_repair_intro'); ?></p>
                        <p><?= $this->lang->line('motorclub_why_choose_us_brake_repair'); ?></p>
                        <ul>
                            <li><?= $this->lang->line('motorclub_experienced_technicians_brake_repair'); ?></li>
                            <li><?= $this->lang->line('motorclub_comprehensive_inspections_brake_repair'); ?></li>
                            <li><?= $this->lang->line('motorclub_quality_brake_parts_brake_repair'); ?></li>
                            <li><?= $this->lang->line('motorclub_efficient_repairs_brake_repair'); ?></li>
                            <li><?= $this->lang->line('motorclub_transparent_communication_brake_repair'); ?></li>
                            <li><?= $this->lang->line('motorclub_affordable_pricing_brake_repair'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('motorclub_common_signs_for_brake_repair'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('motorclub_squeaking_or_grinding_noises_brake_repair'); ?></li>
                            <li><?= $this->lang->line('motorclub_reduced_brake_responsiveness_brake_repair'); ?></li>
                            <li><?= $this->lang->line('motorclub_vibrations_pulsations_brake_repair'); ?></li>
                            <li><?= $this->lang->line('motorclub_dashboard_warning_lights_brake_repair'); ?></li>
                            <li><?= $this->lang->line('motorclub_uneven_wear_on_brake_pads_brake_repair'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('motorclub_schedule_brake_repair'); ?></strong></p>
                        <p><?= $this->lang->line('motorclub_brake_repair_safety_message'); ?></p>
                        <p><?= $this->lang->line('motorclub_trust_us_brake_repair'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>