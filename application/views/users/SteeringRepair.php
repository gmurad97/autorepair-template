<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="page_banner" style="background-image: url('<?= base_url("public/user/assets/images/shapes/tyre_print_3.svg"); ?>');">
        <div class="container">
            <ul class="breadcrumb_nav unordered_list">
                <li>
                    <a href="<?= base_url("home"); ?>"><?= $this->lang->line("breadcrumb_home"); ?></a>
                </li>
                <li>
                    <a href="<?= base_url("services"); ?>"><?= $this->lang->line("breadcrumb_services"); ?></a>
                </li>
                <li>
                    <a href="<?= base_url("steering-repair"); ?>"><?= $this->lang->line("breadcrumb_steering_repair"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line("breadcrumb_steering_repair"); ?></h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image6.jpg"); ?>') center center / cover no-repeat;" class="details_image"></div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting><?= $this->lang->line('steering_repair_at_motorclub'); ?></h2>
                        <p><?= $this->lang->line('importance_of_responsive_steering_system'); ?></p>
                        <p><strong><?= $this->lang->line('why_choose_motorclub_steering_repair'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('expert_technicians_steering_repair'); ?></li>
                            <li><?= $this->lang->line('state_of_the_art_diagnostics_steering_repair'); ?></li>
                            <li><?= $this->lang->line('quality_steering_services'); ?></li>
                            <li><?= $this->lang->line('efficient_repairs_steering_system'); ?></li>
                            <li><?= $this->lang->line('transparent_communication_steering_repair'); ?></li>
                            <li><?= $this->lang->line('affordable_pricing_steering_repair'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('common_signs_for_steering_repair'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('difficulty_steering_stiff_steering_wheel'); ?></li>
                            <li><?= $this->lang->line('strange_noises_turning_wheel'); ?></li>
                            <li><?= $this->lang->line('vehicle_pulling_one_side'); ?></li>
                            <li><?= $this->lang->line('uneven_tire_wear'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('schedule_steering_repair_today'); ?></strong></p>
                        <p><?= $this->lang->line('safety_relies_on_well_functioning_steering_system'); ?></p>
                        <p><?= $this->lang->line('trust_the_motorclub_steering_repair'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>