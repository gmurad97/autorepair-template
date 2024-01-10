<?php $this->load->view("users/includes/HeaderScripts"); ?>
<?php $this->load->view("users/includes/Header"); ?>
<main class="page_content">
    <section class="error_section text-center" style="background-image: url('assets/images/error_bg_img.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="title_text wow" data-splitting>Page Not Found</h1>
                    <p class="ps-lg-5 pe-lg-5">The page you are looking for might have been removed, had its name changed or is temporarily unavailable</p><a class="btn btn-primary" href="<?= base_url('home'); ?>"><span class="btn_text">Back to Home Page</span></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view("users/includes/FooterScripts"); ?>