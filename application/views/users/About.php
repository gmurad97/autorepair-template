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
                    <a href="<?= base_url('about'); ?>"><?= $this->lang->line("breadcrumb_about"); ?></a>
                </li>
            </ul>
            <h1 class="page_title wow" data-splitting><?= $this->lang->line("breadcrumb_about"); ?></h1>
        </div>
    </section>
    <section class="about_section section_space_lg pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about_content">
                        <div class="section_heading">
                            <h2 style="text-align: center;" class="heading_text wow" data-splitting>
                                <?= $this->lang->line("about_page_title"); ?>
                            </h2>
                            <p class="heading_description mb-0 custom-font"><?= $this->lang->line("about_page_description"); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/Footer"); ?>
<?php $this->load->view("users/includes/FooterScripts"); ?>