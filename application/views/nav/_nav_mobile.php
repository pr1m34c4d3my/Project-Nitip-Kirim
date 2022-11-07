<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="navMobile" class="nav-mobile">
    <div class="nav-mobile-inner">
        <div class="row">
            
        </div>

        <?php if ($this->auth_check) : ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="dropdown profile-dropdown nav-item">
                        <a href="#" class="dropdown-toggle image-profile-drop nav-link" data-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo get_user_avatar($this->auth_user->avatar); ?>" alt="<?php echo html_escape($this->auth_user->username); ?>">
                            <?php echo html_escape($this->auth_user->username); ?> <span class="icon-arrow-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if (check_user_permission('admin_panel')): ?>
                                <li>
                                    <a href="<?php echo admin_url(); ?>"><i class="icon-dashboard"></i>&nbsp;<?php echo trans("admin_panel"); ?></a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo generate_profile_url($this->auth_user->slug); ?>"><i class="icon-user"></i>&nbsp;<?php echo trans("profile"); ?></a>
                            </li>
                            <?php if ($this->auth_user->reward_system_enabled == 1): ?>
                                <li>
                                    <a href="<?php echo generate_url('earnings'); ?>">
                                        <i class="icon-coin-bag"></i>
                                        <?php echo trans("earnings"); ?>
                                        (<strong class="lbl-earnings"><?= price_formatted($this->auth_user->balance); ?></strong>)
                                    </a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo generate_url('reading_list'); ?>"><i class="icon-star-o"></i>&nbsp;<?php echo trans("reading_list"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo generate_url('settings'); ?>"><i class="icon-settings"></i>&nbsp;<?php echo trans("settings"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo generate_url('logout'); ?>"><i class="icon-logout-thin"></i>&nbsp;<?php echo trans("logout"); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="<?php echo base_url(); ?>" class="transition">BERANDA</a></li>
            <li class="nav-item"><a href="<?php echo base_url('/track'); ?>" class="transition">TRACK</a></li>
            <li class="nav-item"><a href="<?php echo base_url('/about-us'); ?>" class="transition">TENTANG KAMI</a></li>
            <li class="nav-item dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">LAYANAN</a>
              <ul class="dropdown-menu" role="menu">
                <li class="nav-item"><a href="<?php echo base_url('/nitip-export'); ?>" class="transition">NITIP EXPORT</a></li>
                <li class="nav-item"><a href="<?php echo base_url('/nitip-import'); ?>" class="transition">NITIP IMPORT</a></li>
                <li class="nav-item"><a href="<?php echo base_url('/nitip-nusantara'); ?>" class="transition">NITIP NUSANTARA</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="<?php echo base_url('/posts'); ?>" class="transition">ARTIKEL</a></li>
            <li class="nav-item"><a href="<?php echo base_url('/contact'); ?>" class="transition">HUBUNGI KAMI</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="nav-mobile-footer">
        <ul class="mobile-menu-social">
            <!--Include social media links-->
            <?php $this->load->view('partials/_social_media_links', ['rss_hide' => false]); ?>
        </ul>
    </div>
</div>