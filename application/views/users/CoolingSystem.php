<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="page_banner" style="background-image: url('<?= base_url("assets/images/shapes/tyre_print_3.svg"); ?>');">
        <div class="container">
            <ul class="breadcrumb_nav unordered_list">
                <li>
                    <a href="<?= base_url('home'); ?>"><?= $this->lang->line("breadcrumb_home"); ?></a>
                </li>
                <li>
                    <a href="<?= base_url('services'); ?>"><?= $this->lang->line("breadcrumb_services"); ?></a>
                </li>
                <li>
                    <a href="<?= base_url('cooling-system'); ?>"><?= $this->lang->line("breadcrumb_cooling_service"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line("breadcrumb_cooling_service"); ?></h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image4.webp"); ?>') center center / cover no-repeat;" class="details_image"></div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting><?= $this->lang->line('cooling_system_at_motorclub'); ?></h2>
                        <p><?= $this->lang->line('critical_role_cooling_system'); ?></p>
                        <p><strong><?= $this->lang->line('why_choose_motorclub_cooling_system'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('expert_technicians_cooling_system'); ?></li>
                            <li><?= $this->lang->line('diagnostics_excellence_cooling_system'); ?></li>
                            <li><?= $this->lang->line('quality_cooling_services'); ?></li>
                            <li><?= $this->lang->line('efficient_repairs_cooling_system'); ?></li>
                            <li><?= $this->lang->line('transparent_communication_cooling_system'); ?></li>
                            <li><?= $this->lang->line('affordable_pricing_cooling_system'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('common_signs_for_cooling_system_services'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('engine_overheating'); ?></li>
                            <li><?= $this->lang->line('low_coolant_levels_leaks'); ?></li>
                            <li><?= $this->lang->line('strange_noises_cooling_system'); ?></li>
                            <li><?= $this->lang->line('dashboard_warning_lights_temperature'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('schedule_cooling_system_services_today'); ?></strong></p>
                        <p><?= $this->lang->line('engine_deserves_optimal_cooling'); ?></p>
                        <p><?= $this->lang->line('trust_the_motorclub_cooling_system'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>