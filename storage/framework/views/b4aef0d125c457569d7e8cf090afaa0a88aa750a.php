<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="<?php echo e(route('home.market')); ?>" aria-expanded="false"><span class="hide-menu"><?php echo app('translator')->getFromJson('navs.general.market'); ?></span></a>
                </li>
                <li><a href="<?php echo e(route('news.index')); ?>"> <?php echo app('translator')->getFromJson('navs.general.news'); ?></a></li>
                <li><a href="<?php echo e(route('contact.index')); ?>"> <?php echo app('translator')->getFromJson('navs.general.contact_us'); ?></a></li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><span class="hide-menu">Site</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo e(route('static.terms')); ?>"><?php echo app('translator')->getFromJson('navs.general.terms_conditions'); ?></a></li>
                        <li><a href="<?php echo e(route('static.privacy')); ?>"><?php echo app('translator')->getFromJson('navs.general.privacy_policy'); ?></a></li>
                        <li><a href="<?php echo e(route('static.disclaimer')); ?>"><?php echo app('translator')->getFromJson('navs.general.website_disclaimer'); ?></a></li>
                        <li><a href="<?php echo e(route('sitemap.index')); ?>"><?php echo app('translator')->getFromJson('navs.general.sitemap'); ?></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
