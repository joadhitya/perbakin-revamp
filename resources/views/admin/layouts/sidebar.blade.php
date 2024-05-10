<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-3 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light text-uppercase font-12 ">
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./">
                <img class="navbar-brand-img brand-md" src="{{ asset('admin/assets/images/logo.webp') }}" alt="">
            </a>
        </div>

        @php
        $user_data = Auth::user();
        $role_user = $user_data->id_role;
        // Get Access Menu
        $access_menu = DB::table('access_menus')
            ->where('id_role', $role_user)
            ->get();
        
        $arr_menu = [];
        foreach ($access_menu as $am) {
            array_push($arr_menu, $am->id_menu);
        }
        // print_r($arr_menu);
    @endphp
        @include('admin.layouts.menu.menu')

    </nav>
</aside>
