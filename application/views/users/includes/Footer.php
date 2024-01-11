<footer class="site_footer">
    <div class="footer_content_area section_space_lg bg_gray_dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer_about pe-lg-5">
                        <div class="site_logo">
                            <a class="site_link" href="<?= base_url('home'); ?>">
                                <img width="220px" class="dark_theme_logo" src="<?= base_url('public/user/assets/images/logo1.jpg'); ?>" alt="Logo1">
                                <img width="220px" class="light_theme_logo" src="<?= base_url('public/user/assets/images/logo2.jpg'); ?>" alt="Logo2">
                            </a>
                        </div>
                        <p><?= $this->lang->line("footer_about_text"); ?></p>
                        <div class="footer_hotline">
                            <span><?= $this->lang->line("footer_support_center_text"); ?></span>
                            <a class="hotline_number" href="tel:+1 (905) 645-0577">+1 (905) 645-0577</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info_list_wrap">
                        <h3 class="list_title"><?= $this->lang->line("footer_popular_services_text"); ?></h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="info_list unordered_list_block text-uppercase">
                                    <li>
                                        <a href="<?= base_url('home'); ?>">
                                            <span class="info_icon">
                                                <img src="<?= base_url('public/user/assets/images/icons/icon_square.svg'); ?>" alt="ProMotors - Icon Square">
                                            </span>
                                            <span class="info_text"><?= $this->lang->line("navbar_home"); ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('about'); ?>">
                                            <span class="info_icon">
                                                <img src="<?= base_url('public/user/assets/images/icons/icon_square.svg'); ?>" alt="ProMotors - Icon Square">
                                            </span>
                                            <span class="info_text"><?= $this->lang->line("navbar_about"); ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('services'); ?>">
                                            <span class="info_icon">
                                                <img src="<?= base_url('public/user/assets/images/icons/icon_square.svg'); ?>" alt="ProMotors - Icon Square">
                                            </span>
                                            <span class="info_text"><?= $this->lang->line("navbar_services"); ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('faq'); ?>">
                                            <span class="info_icon">
                                                <img src="<?= base_url('public/user/assets/images/icons/icon_square.svg'); ?>" alt="ProMotors - Icon Square">
                                            </span>
                                            <span class="info_text"><?= $this->lang->line("navbar_faq"); ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('contact'); ?>">
                                            <span class="info_icon">
                                                <img src="<?= base_url('public/user/assets/images/icons/icon_square.svg'); ?>" alt="ProMotors - Icon Square">
                                            </span>
                                            <span class="info_text"><?= $this->lang->line("navbar_contact"); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_subscribe_form">
                        <h3 class="list_title"><?= $this->lang->line("footer_subscriber_text"); ?></h3>
                        <div class="form-group">
                            <label for="input_email"><?= $this->lang->line("footer_your_email_text"); ?></label>
                            <input type="tel" name="phone" class="form-control" id="input_email" placeholder="<?= $this->lang->line('footer_enter_your_email_address_text'); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <span class="btn_text"><?= $this->lang->line("footer_subscriber_text"); ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_widget">
        <div class="container">
            <p class="copyright_text text-center mb-0">
                <a href="<?= base_url('home'); ?>">
                    ©
                    <b>The Motorclub</b>
                </a>
            </p>
        </div>
    </div>
</footer>