<div class="sidebar-inner">

    {{-- LOGO --}}
    <div class="sidebar-logo-wrap">
        <img src="{{ asset('asset/footer-logo.png') }}" alt="Larana Spa" class="sidebar-logo"
             onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
        <span class="sidebar-logo-text" style="display:none">Larana Spa</span>
        <button class="sidebar-close-btn lg:hidden" onclick="closeSidebar()" aria-label="Tutup menu">
            <iconify-icon icon="material-symbols:close-rounded" width="20"></iconify-icon>
        </button>
    </div>

    {{-- NAV --}}
    <nav class="sidebar-nav">
        <ul class="sidebar-nav-list">

            {{-- Dashboard --}}
            <li>
                <a href="{{ route('admin.dashboard') }}"
                   class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <iconify-icon icon="mage:dashboard" width="20"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- Master Data --}}
            <li>
                <details {{ request()->routeIs('admin.category.*') || request()->routeIs('admin.specialist.*') ? 'open' : '' }}>
                    <summary class="sidebar-link sidebar-parent {{ request()->routeIs('admin.category.*') || request()->routeIs('admin.specialist.*') ? 'active' : '' }}">
                        <span class="flex items-center gap-3">
                            <iconify-icon icon="bi:folder" width="20"></iconify-icon>
                            <span>Master Data</span>
                        </span>
                        <iconify-icon icon="weui:arrow-outlined" class="sidebar-arrow" width="16"></iconify-icon>
                    </summary>
                    <ul class="sidebar-children">
                        <li>
                            <a href="{{ route('admin.category.index') }}"
                               class="sidebar-child-link {{ request()->routeIs('admin.category.*') ? 'active' : '' }}">
                                Category
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.specialist.index') }}"
                               class="sidebar-child-link {{ request()->routeIs('admin.specialist.*') ? 'active' : '' }}">
                                Specialist
                            </a>
                        </li>
                    </ul>
                </details>
            </li>

            {{-- Treatment --}}
            <li>
                <a href="#" class="sidebar-link">
                    <iconify-icon icon="mdi:spa-outline" width="20"></iconify-icon>
                    <span>Treatment</span>
                </a>
            </li>

            {{-- Terapist --}}
            <li>
                <a href="#" class="sidebar-link">
                    <iconify-icon icon="mdi:account-heart-outline" width="20"></iconify-icon>
                    <span>Terapist</span>
                </a>
            </li>

            {{-- Package --}}
            <li>
                <a href="#" class="sidebar-link">
                    <iconify-icon icon="mdi:package-variant-closed" width="20"></iconify-icon>
                    <span>Package</span>
                </a>
            </li>

            {{-- Blog --}}
            <li>
                <a href="#" class="sidebar-link">
                    <iconify-icon icon="mdi:post-outline" width="20"></iconify-icon>
                    <span>Blog</span>
                </a>
            </li>

            {{-- FAQ --}}
            <li>
                <a href="#" class="sidebar-link">
                    <iconify-icon icon="mdi:help-circle-outline" width="20"></iconify-icon>
                    <span>FAQ</span>
                </a>
            </li>

            {{-- Testimonial --}}
            <li>
                <a href="#" class="sidebar-link">
                    <iconify-icon icon="mdi:star-outline" width="20"></iconify-icon>
                    <span>Testimonial</span>
                </a>
            </li>

        </ul>
    </nav>

    {{-- LOGOUT --}}
    <div class="sidebar-logout-wrap">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="sidebar-link sidebar-logout-btn">
                <iconify-icon icon="material-symbols:logout-rounded" width="20"></iconify-icon>
                <span>Logout</span>
            </button>
        </form>
    </div>

</div>