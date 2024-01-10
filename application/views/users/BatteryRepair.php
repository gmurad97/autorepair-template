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
                    <a href="<?= base_url('battery-repair'); ?>"><?= $this->lang->line("breadcrumb_battery_repair"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line("breadcrumb_battery_repair"); ?></h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image5.avif"); ?>') center center / cover no-repeat;" class="details_image"></div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting><?= $this->lang->line('battery_repair_text'); ?></h2>
                        <p><?= $this->lang->line('motorclub_battery_repair_intro'); ?></p>
                        <p><strong><?= $this->lang->line('motorclub_why_choose_us'); ?></strong></p>
                        <ul>
                            <li>
                                <?= $this->lang->line('motorclub_expert_technicians'); ?>
                            </li>
                            <li>
                                <?= $this->lang->line('motorclub_advanced_diagnostics'); ?>
                            </li>
                            <li><?= $this->lang->line('motorclub_quality_battery_services'); ?></li>
                            <li><?= $this->lang->line('motorclub_efficient_repairs'); ?></li>
                            <li><?= $this->lang->line('motorclub_transparent_communication'); ?></li>
                            <li><?= $this->lang->line('motorclub_affordable_pricing'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('motorclub_common_signs_for_battery_repair'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('motorclub_slow_engine_crank'); ?></li>
                            <li><?= $this->lang->line('motorclub_dashboard_warning_lights'); ?></li>
                            <li><?= $this->lang->line('motorclub_issues_with_electrical_components'); ?></li>
                            <li><?= $this->lang->line('motorclub_frequent_jump_starts_needed'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('motorclub_schedule_battery_repair'); ?></strong></p>
                        <p><?= $this->lang->line('motorclub_reliable_start_text'); ?></p>
                        <p><?= $this->lang->line('motorclub_trust_us_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>