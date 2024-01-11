<header class="site_header">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/select2.min.css'); ?>">
    <script src="<?= base_url('public/user/assets/js/select2.min.js'); ?>"></script>
    <div class="header_topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-6">
                    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                    <style>
                        .topbar-icon {
                            display: flex;
                            flex-direction: row;
                            justify-content: flex-start;
                            align-items: center;
                        }

                        .topbar-social:not(:last-of-type) {
                            margin-right: 22px;
                        }

                        .topbar-social {
                            width: 32px;
                            height: 32px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            border-radius: 50%;
                        }

                        .topbar-social a {
                            font-size: 16px;
                            font-weight: lighter !important;
                            color: #D16527;
                        }

                        .topbar-social a:hover {
                            color: #fff;
                            text-shadow: 2px 2px 16px #D16527;
                        }

                        .topbar-instagram {
                            background-color: #161616;
                        }

                        .topbar-youtube {
                            background-color: #161616;
                        }

                        .topbar-whatsapp {
                            background-color: #161616;

                        }
                    </style>
                    <div class="topbar-icon">
                        <div class="topbar-social topbar-instagram">
                            <a target="_blank" href="https://www.instagram.com/themotorclub2022">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <div class="topbar-social topbar-youtube">
                            <a target="_blank" href="https://www.youtube.com/@themotorclub5635">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </div>
                        <div class="topbar-social topbar-whatsapp">
                            <a target="_blank" href="https://wa.me/+19056450577">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-6 p-0 d-flex flex-row justify-content-end align-items-center">
                    <select id="select2-with-flags" onchange="window.location.href='<?= base_url("switch-lang/"); ?>'+this.value;">
                        <option value="en" <?= $this->session->userdata("site_lang") == "en" ? "selected" : ""; ?> data-icon="<?= base_url('public/user/assets/ml/en.svg'); ?>">ENG</option>
                        <option value="fr" <?= $this->session->userdata("site_lang") == "fr" ? "selected" : ""; ?> data-icon="<?= base_url('public/user/assets/ml/fr.svg'); ?>">FRA</option>
                        <option value="ru" <?= $this->session->userdata("site_lang") == "ru" ? "selected" : ""; ?> data-icon="<?= base_url('public/user/assets/ml/ru.svg'); ?>">RUS</option>
                        <option value="tr" <?= $this->session->userdata("site_lang") == "tr" ? "selected" : ""; ?> data-icon="<?= base_url('public/user/assets/ml/tr.svg'); ?>">TUR</option>
                        <option value="ar" <?= $this->session->userdata("site_lang") == "ar" ? "selected" : ""; ?> data-icon="<?= base_url('public/user/assets/ml/ar.svg'); ?>">ARA</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-5">
                    <div class="site_logo">
                        <a class="site_link" href="<?= base_url('home'); ?>">
                            <img class="dark_theme_logo" src="<?= base_url('public/user/assets/images/logo1.jpg'); ?>" alt="Logo1">
                            <img class="light_theme_logo" src="<?= base_url('public/user/assets/images/logo2.jpg'); ?>" alt="Logo2">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <nav class="main_menu navbar navbar-expand-lg">
                        <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                            <ul class="main_menu_list unordered_list_center">
                                <li class="active">
                                    <a href="<?= base_url('home'); ?>"><?= $this->lang->line("navbar_home"); ?></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('about'); ?>"><?= $this->lang->line("navbar_about"); ?></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('services'); ?>"><?= $this->lang->line("navbar_services"); ?></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('faq'); ?>"><?= $this->lang->line("navbar_faq"); ?></a>
                                </li>
                                <li>
                                    <a href="<?= base_url('contact'); ?>"><?= $this->lang->line("navbar_contact"); ?></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3 col-5">
                    <ul class="header_btns_group unordered_list_end">
                        <li>
                            <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="far fa-bars"></i>
                            </button>
                        </li>
                        <li>
                            <div class="mode-switch" data-bs-toggle="mode" data-cursor="-opaque" data-magnetic>
                                <input id="theme-mode-btn" type="checkbox">
                            </div>
                        </li>
                        <li>
                            <a class="btn_hotline" href="tel:+1 (905) 645-0577">
                                <span class="btn_text" data-text="+1 (905) 645-0577">+1 (905) 645-0577</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>