<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if (!function_exists('user_session')){exit();}
$menu_limit = $this->general_settings->menu_limit; ?>
<nav class="navbar navbar-default main-menu megamenu">
    <div class="container">
        <div class="collapse navbar-collapse">
            <div class="row">
                <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>" class="transition">BERANDA</a></li>
            <li><a href="<?php echo base_url('/track'); ?>" class="transition">TRACK</a></li>
            <li><a href="<?php echo base_url('/about-us'); ?>" class="transition">TENTANG KAMI</a></li>
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">LAYANAN</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url('/nitip-export'); ?>" class="transition">NITIP EXPORT</a></li>
                <li><a href="<?php echo base_url('/nitip-import'); ?>" class="transition">NITIP IMPORT</a></li>
                <li><a href="<?php echo base_url('/nitip-nusantara'); ?>" class="transition">NITIP NUSANTARA</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('/posts'); ?>" class="transition">ARTIKEL</a></li>
            <li><a href="<?php echo base_url('/contact'); ?>" class="transition">HUBUNGI KAMI</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="li-search">
                        <a class="search-icon"><i class="icon-search"></i></a>
                        <div class="search-form">
                            <?php echo form_open(generate_url('search'), ['method' => 'get', 'id' => 'search_validate']); ?>
                            <input type="text" name="q" maxlength="300" pattern=".*\S+.*" class="form-control form-input" placeholder="<?php echo trans("placeholder_search"); ?>" <?php echo ($this->rtl == true) ? 'dir="rtl"' : ''; ?> required>
                            <button class="btn btn-default"><i class="icon-search"></i></button>
                            <?php echo form_close(); ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>