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
                    <a href="<?= base_url('exterior-revitalization'); ?>"><?= $this->lang->line("breadcrumb_exterior_revitalization"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line("breadcrumb_exterior_revitalization"); ?></h1>
        </div>
    </section>
    <section class="details_section section_space_lg pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div style="height: 250px; overflow: hidden; background: url('<?= base_url("public/user/assets/images/image8.jpg"); ?>') center center / cover no-repeat;" class="details_image"></div>
                <div class="col-lg-8">
                    <div class="details_content">
                        <h2 class="details_item_title wow" data-splitting><?= $this->lang->line('motorclub_specialists_rubbing_waxing_polishing'); ?></h2>
                        <p><?= $this->lang->line('motorclub_meticulous_approach_text'); ?></p>
                        <p><strong><?= $this->lang->line('motorclub_why_choose_rubbing_waxing_polishing'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('motorclub_detailing_experts_text'); ?></li>
                            <li><?= $this->lang->line('motorclub_quality_products_text'); ?></li>
                            <li><?= $this->lang->line('meticulous_work_description'); ?></li>
                            <li><?= $this->lang->line('paint_restoration'); ?></li>
                            <li><?= $this->lang->line('efficient_services'); ?></li>
                            <li><?= $this->lang->line('affordable_packages'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('services_included'); ?></strong></p>
                        <ul>
                            <li><?= $this->lang->line('professional_rubbing'); ?></li>
                            <li><?= $this->lang->line('high_quality_waxing'); ?></li>
                            <li><?= $this->lang->line('precision_polishing'); ?></li>
                            <li><?= $this->lang->line('attention_to_detail'); ?></li>
                        </ul>
                        <p><strong><?= $this->lang->line('schedule_today'); ?></strong></p>
                        <p><?= $this->lang->line('elevate_appearance'); ?></p>
                        <p><?= $this->lang->line('trust_the_motorclub'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>