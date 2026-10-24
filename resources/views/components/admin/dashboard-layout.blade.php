<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Admin' }} &mdash; Larana Spa</title>
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="admin-body">

    {{-- ===================== SIDEBAR (fixed, kiri) ===================== --}}
    <aside id="sidebar" class="admin-sidebar">
        <x-admin.sidebar />
    </aside>

    {{-- Overlay mobile --}}
    <div id="sidebar-overlay" class="admin-overlay" onclick="closeSidebar()"></div>

    {{-- ===================== WRAPPER KANAN ===================== --}}
    <div class="admin-main-wrapper">

        {{-- TOPBAR (sticky di dalam wrapper kanan) --}}
        <header class="admin-topbar">
            <div class="admin-topbar-left">
                {{-- Hamburger (hanya mobile) --}}
                <button class="admin-hamburger" onclick="openSidebar()" aria-label="Buka menu">
                    <iconify-icon icon="ci:hamburger-md" width="22"></iconify-icon>
                </button>
                <div>
                    <p class="admin-welcome">Hi, Welcome Back Admin!</p>
                    <h2 class="admin-spa-name">Larana Spa</h2>
                </div>
            </div>
            <div class="admin-topbar-right">
                <button class="admin-btn-search" aria-label="Cari">
                    <iconify-icon icon="iconamoon:search" width="18"></iconify-icon>
                </button>
                <div class="admin-profile">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=8B6B4A&color=fff&size=64"
                         alt="Admin" class="admin-avatar">
                    <span class="admin-profile-info">
                        <span class="admin-profile-name">Admin</span>
                        <span class="admin-profile-role">Admin 01</span>
                    </span>
                </div>
            </div>
        </header>

        {{-- CONTENT --}}
        <main class="admin-content">
            {{ $slot }}
        </main>
    </div>

    <script>
        function openSidebar() {
            document.getElementById('sidebar').classList.add('open');
            document.getElementById('sidebar-overlay').classList.add('show');
        }
        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('open');
            document.getElementById('sidebar-overlay').classList.remove('show');
        }
    </script>

    @stack('scripts')
</body>
</html>