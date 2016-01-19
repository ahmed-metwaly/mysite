
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler hidden-phone">
                    </div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <li class="sidebar-search-wrapper"></li>
                <br>
                <!-- start active -->

                <li class="<?php if ($this->uri->segment(1) == null || $this->uri->segment(1) == 'admin_area' && $this->uri->segment(2) == null) echo 'start active'; ?>">
                    <a href="<?php echo base_url(); ?>admin_area/">
                        <i class="fa fa-home"></i>
                        <span class="title">
                            الرئيسية
                        </span>
                        <span class="selected">
                        </span>
                    </a>

                </li>
                <li class="<?php if ($this->uri->segment(2) == 'mainSittings') echo 'start active open'; ?>">
                    <a href="<?php echo base_url(); ?>admin_area/mainSittings/">
                        <i class="fa fa-wrench"></i>
                        <span class="title">
                            اعدادات الموقع
                        </span>
                        <span class="arrow"></span>
                        <span class="selected">
                        </span>
                    </a>

                    <ul style="<?php echo ($this->uri->segment(2) == 'mainSittings' ) ? 'display: block !important;' : 'display: none ;'; ?>" class="sub-menu">
                        <li class="<?php if ($this->uri->segment(2) == 'mainSittings' && $this->uri->segment(3) == null) echo 'active'; ?>">
                            <a href="<?php echo base_url(); ?>admin_area/mainSittings/">
                                <i class="fa fa-cogs"></i>
                                الاعدادات  العامة
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
