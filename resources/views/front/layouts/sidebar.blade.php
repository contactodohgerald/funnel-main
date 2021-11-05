<?php $url = url()->current(); //dd($url); "http://127.0.0.1:8000/admin/allBanner" ?>
<?php if (preg_match("/category/i", $url)){ ?> style="display: block;" <?php } ?>
<div class="side-bar">
    <nav class="nav flex-column nav-wrap">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('landing') ? 'active' : '' }}" href="{{ route('landing') }}">
                <i class="flaticon-menu icons side-nav-icon dashboard"></i>
                <span class="nav-text">
                    Dashboard
                </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('ecoverCreator') ? 'active' : '' }}" href="{{ route('ecoverCreator') }}">
                <i class="flaticon-book-of-black-cover icons side-nav-icon ecover"></i>
                <span class="nav-text">
                    Ecover Creator
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('ebookCreator') ? 'active' : '' }}" href="{{ route('ebookCreator') }}">
                <i class="flaticon-book icons side-nav-icon ebook"></i>
                <span class="nav-text">
                    Create Ebook
                </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('library') ? 'active' : '' }}" href="{{ route('library') }}">
                <i class="flaticon-pile-of-paper icons side-nav-icon library"></i>
                <span class="nav-text">
                    My Library
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteNamed('product') || Route::currentRouteNamed('addProduct')) active @else '' @endif" href="{{ route('product') }}">
                <i class="flaticon-block icons side-nav-icon product"></i>
                <span class="nav-text">
                    My Product
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('funnel') ? 'active' : '' }}" href="{{ route('funnel') }}">
                <i class="flaticon-filter icons side-nav-icon funnel"></i>
                <span class="nav-text">
                    My Funnels
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('dfyFunnel') ? 'active' : '' }}" href="{{ route('dfyFunnel') }}">
                <i class="flaticon-funnel icons side-nav-icon dfy-funnel"></i>
                <span class="nav-text">
                    DFY Funnels
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('unlimitedVersion') ? 'active' : '' }}" href="{{ route('unlimitedVersion') }}">
                <i class="flaticon-infinite-mathematical-symbol icons side-nav-icon version"></i>
                <span class="nav-text">
                    Unlimited Versions
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteNamed('conversionTools') ? 'active' : '' }}" href="{{ route('conversionTools') }}">
                <i class="flaticon-paper-plane icons side-nav-icon conversion"></i>
                <span class="nav-text">
                    Conversion Tools
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/bonus-builder.html">
                <i class="flaticon-giftbox icons side-nav-icon builder"></i>
                <span class="nav-text">
                    Bonus Builder
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/training.html">
                <i class="flaticon-graduation-hat icons side-nav-icon training"></i>
                <span class="nav-text">
                    Training
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/help.htm">
                <i class="flaticon-question icons side-nav-icon help"></i>
                <span class="nav-text">
                    Help
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/traffic-flow.html">
                <i class="flaticon-speedometer icons side-nav-icon traffic"></i>
                <span class="nav-text">
                    Automated Traffic Flow
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/licence.html">
                <i class="flaticon-bookmark-tag icons side-nav-icon license"></i>
                <span class="nav-text">
                    Reseller Licence
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/upgraded-member.html">
                <i class="flaticon-rocket icons side-nav-icon member"></i>
                <span class="nav-text">
                    Upgraded Membership
                </span>
            </a>
        </li>


    </nav>
</div>