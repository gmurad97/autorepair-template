<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="error_section text-center" style="background-image: url('assets/images/error_bg_img.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="title_text wow" data-splitting><?= $this->lang->line('motorclub_page_not_found'); ?></h1>
                    <p class="ps-lg-5 pe-lg-5"><?= $this->lang->line('motorclub_page_not_found_message'); ?></p>
                    <a class="btn btn-primary" href="<?= base_url('home'); ?>">
                        <span class="btn_text"><?= $this->lang->line('motorclub_back_to_home_page'); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/FooterScripts"); ?>