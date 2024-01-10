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
                    <a href="<?= base_url('engine-repair'); ?>"><?= $this->lang->line("breadcrumb_engine_repair"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line("breadcrumb_engine_repair"); ?></h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image2.avif"); ?>') center center / cover no-repeat;" class="details_image"></div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting><?= $this->lang->line('engine_repair_at_motorclub'); ?></h2>
                        <p><?= $this->lang->line('heart_of_vehicle_is_engine'); ?></p>
                        <p><?= $this->lang->line('why_choose_motorclub_engine_repair'); ?></p>
                        <ul>
                            <li><?= $this->lang->line('expert_technicians_engine_repair'); ?></li>
                            <li><?= $this->lang->line('diagnostic_expertise_engine_repair'); ?></li>
                            <li><?= $this->lang->line('quality_parts_engine_repair'); ?></li>
                            <li><?= $this->lang->line('efficient_repairs_engine_repair'); ?></li>
                            <li><?= $this->lang->line('transparent_communication_engine_repair'); ?></li>
                            <li><?= $this->lang->line('affordable_pricing_engine_repair'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('common_signs_engine_repair'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('strange_noises_from_engine'); ?></li>
                            <li><?= $this->lang->line('poor_fuel_efficiency'); ?></li>
                            <li><?= $this->lang->line('warning_lights_on_dashboard'); ?></li>
                            <li><?= $this->lang->line('engine_overheating'); ?></li>
                            <li><?= $this->lang->line('loss_of_power_or_acceleration'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('schedule_engine_repair_today'); ?></strong></p>
                        <p><?= $this->lang->line('engine_importance_statement'); ?></p>


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