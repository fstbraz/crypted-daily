<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="{{ route('home.market') }}" aria-expanded="false"><span class="hide-menu">@lang('navs.general.market')</span></a>
                </li>
                <li><a href="{{ route('news.index') }}"> @lang('navs.general.news')</a></li>
                <li><a href="{{ route('contact.index') }}"> @lang('navs.general.contact_us')</a></li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><span class="hide-menu">Site</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('static.terms') }}">@lang('navs.general.terms_conditions')</a></li>
                        <li><a href="{{ route('static.privacy') }}">@lang('navs.general.privacy_policy')</a></li>
                        <li><a href="{{ route('static.disclaimer') }}">@lang('navs.general.website_disclaimer')</a></li>
                        <li><a href="{{ route('sitemap.index') }}">@lang('navs.general.sitemap')</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
