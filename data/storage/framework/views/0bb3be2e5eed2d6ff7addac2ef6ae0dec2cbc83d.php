<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="/dashboard">
                    <span class="brand-logo">
                        <img src="<?php echo e(('app-assets/images/logo.png')); ?>">
                    </span>
                    <h2 class="brand-text"></h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
  
        <div class="main-menu-content">
            
            <?php if(Auth::user()->role == 'admin'): ?>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item <?php if(Request::path() == 'userlist'): ?> active <?php endif; ?>"><a class="d-flex align-items-center" href="userlist"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="User">Users</span></a>
                    </li>
                </ul>
            <?php endif; ?>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'companymanagement'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="companymanagement"><i data-feather='home'></i><span class="menu-title text-truncate" data-i18n="User">Companymanagement</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'category'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="category"><i data-feather='box'></i><span class="menu-title text-truncate" data-i18n="User">Categories</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'items'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="items"><i data-feather='x-circle'></i><span class="menu-title text-truncate" data-i18n="User">Items</span></a>
                </li>
            </ul>

            

            
            <?php if(Auth::user()->role == 'admin'): ?>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="<?php if(Request::path() == 'siteinfo'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="siteinfo"><i data-feather='info'></i><span class="menu-title text-truncate" data-i18n="User">Site Info</span></a>
                    </li>
                </ul>
            
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="<?php if(Request::path() == 'exchange'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="exchange"><i data-feather='zap'></i><span class="menu-title text-truncate" data-i18n="User">Currency Exchange</span></a>
                    </li>
                </ul>
            <?php endif; ?>

        </div>
    </div><?php /**PATH D:\Lebanon\phpframe\resources\views/layouts/layout.blade.php ENDPATH**/ ?>