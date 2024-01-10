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
                    <a href="<?= base_url('contact'); ?>"><?= $this->lang->line("breadcrumb_contacts"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line("breadcrumb_contacts"); ?></h1>
        </div>
    </section>
    <section class="contact_section section_space_lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact_info_box">
                        <h3 class="item_title"><?= $this->lang->line('motorclub_address'); ?></h3>
                        <ul class="info_list unordered_list_block pe-lg-2">
                            <li><span class="info_text mb-3">255 Lancing Dr, Hamilton, ON L8W 3W8, Canada</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info_box">
                        <h3 class="item_title"><?= $this->lang->line('motorclub_office_hours'); ?></h3>
                        <ul class="info_list unordered_list_block">
                            <li>
                                <span class="info_text d-flex align-items-center justify-content-between">
                                    <span><?= $this->lang->line('motorclub_monday_to_thursday'); ?></span>
                                    <span>8 am - 8 pm</span>
                                </span>
                            </li>
                            <li>
                                <span class="info_text d-flex align-items-center justify-content-between">
                                    <span><?= $this->lang->line('motorclub_friday'); ?></span>
                                    <span>8 am - 6 pm</span>
                                </span>
                            </li>
                            <li>
                                <span class="info_text d-flex align-items-center justify-content-between">
                                    <span><?= $this->lang->line('motorclub_saturday'); ?></span>
                                    <span>9 am - 4 pm</span>
                                </span>
                            </li>
                            <li>
                                <span class="info_text d-flex align-items-center justify-content-between">
                                    <span><?= $this->lang->line('motorclub_sunday'); ?></span>
                                    <span><?= $this->lang->line('motorclub_closed'); ?></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info_box">
                        <h3 class="item_title"><?= $this->lang->line('motorclub_customer_support'); ?></h3>
                        <ul class="info_list unordered_list_block">
                            <li>
                                <span class="d-block">
                                    <a href="tel:+1 (905) 645-0577">+1 (905) 645-0577</a>
                                </span>
                            </li>
                            <br>
                            <li>
                                <span class="info_text">
                                    <span class="d-block">
                                        <a href="mailto:info@themotorclub.ca">info@themotorclub.ca</a>
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.8949222607303!2d-79.8356718!3d43.1907156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882c9a040eb12071%3A0x26bac1c03751cf1b!2s255%20Lancing%20Dr%2C%20Hamilton%2C%20ON%20L8W%203W8!5e0!3m2!1sru!2sca!4v1704684491110!5m2!1sru!2sca"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>