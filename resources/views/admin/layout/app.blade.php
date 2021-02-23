<!DOCTYPE html>
<html>
    @include('admin.include.header')
    <body class="menu-position-side menu-side-left full-screen with-content-panel">
        <div class="all-wrapper with-side-panel solid-bg-all">
            <div class="layout-w">
                @include('admin.include.sidebar')
                <div class="content-w">
                    @include('admin.include.bodyheader')
                    @yield('content')
                    @include('admin.include.bodyfooter')
                    @include('admin.include.footer')
                </div>
            </div>
        </div>
    </body>
</html>
