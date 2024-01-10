<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="page_banner" style="background-image: url('<?= base_url("public/user/assets/images/shapes/tyre_print_3.svg"); ?>');">
        <div class="container">
            <ul class="breadcrumb_nav unordered_list">
                <li>
                    <a href="<?= base_url("home"); ?>"><?= $this->lang->line('breadcrumb_home'); ?></a>
                </li>
                <li>
                    <a href="<?= base_url("services"); ?>"><?= $this->lang->line('breadcrumb_services'); ?></a>
                </li>
                <li>
                    <a href="<?= base_url("tire-repair"); ?>"><?= $this->lang->line('breadcrumb_tire_repair'); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line('breadcrumb_tire_repair'); ?></h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image3.avif"); ?>') center center / cover no-repeat;" class="details_image"></div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting><?= $this->lang->line('tire_repair_motorclub'); ?></h2>
                        <p><?= $this->lang->line('importance_of_tires'); ?></p>
                        <p><strong><?= $this->lang->line('why_choose_motorclub'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('expert_technicians'); ?></li>
                            <li><?= $this->lang->line('thorough_inspections'); ?></li>
                            <li><?= $this->lang->line('quality_tire_services'); ?></li>
                            <li><?= $this->lang->line('efficient_repairs'); ?></li>
                            <li><?= $this->lang->line('transparent_communication'); ?></li>
                            <li><?= $this->lang->line('affordable_pricing'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('common_signs_for_tire_repair'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('flat_underinflated_tires'); ?></li>
                            <li><?= $this->lang->line('tire_vibrations_wobbling'); ?></li>
                            <li><?= $this->lang->line('uneven_tire_wear'); ?></li>
                            <li><?= $this->lang->line('punctures_visible_damage'); ?></li>
                            <li><?= $this->lang->line('warning_lights_tire_pressure'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('schedule_tire_repair_today'); ?></strong></p>
                        <p><?= $this->lang->line('safety_on_the_road'); ?></p>
                        <p><?= $this->lang->line('trust_the_motorclub_tire_repair'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>