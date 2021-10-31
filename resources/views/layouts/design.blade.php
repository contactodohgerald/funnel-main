@include('layouts.head')

<div class="container-fluid px-0">

    @include('layouts.header')

    <div class="flex-main-wrap">
        
        @include('layouts.sidebar')
        
        <!-- Main Content Area -->
        @yield('content')

    </div>
</div>

@include('layouts.e_script')