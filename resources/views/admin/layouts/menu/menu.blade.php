<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link" href="#">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span>
        </a>
    </li>
</ul>
<p class="text-muted nav-heading mt-1 mb-1">
    <span>Master Data</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#master-data" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">Data Master</span><span class="sr-only">(current)</span>
        </a>

        <ul class="collapse list-unstyled pl-4 w-100  @if (Request::segment(2) == 'master-data') show @endif" id="master-data">
            @php
                $masterData = [
                    ['name' => 'Bidang Tembak', 'route' => 'md-shooting-field'],
                    ['name' => 'Cabang', 'route' => 'md-homebase'],
                    ['name' => 'Club', 'route' => 'md-club'],
                    ['name' => 'Jabatan', 'route' => 'md-position'],
                    ['name' => 'Jenis Senjata', 'route' => 'md-weapon-category'],
                    ['name' => 'Tipe Senjata', 'route' => 'md-weapon-model'],
                    ['name' => 'Merk Senjata', 'route' => 'md-weapon-brand'],
                    ['name' => 'Caliber Senjata', 'route' => 'md-weapon-caliber'],
                    // ['name' => 'Provinsi', 'route' => 'provinsi'],
                    // ['name' => 'Kota', 'route' => 'kota'],
                    // ['name' => 'Gudang', 'route' => 'gudang'],
                ];
            @endphp

            @foreach ($masterData as $md)
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == $md['route']) active-label @endif"
                        href="{{ route($md['route'] . '.index') }}">
                        <span class="item-text">{{ $md['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
</ul>


<p class="text-muted nav-heading mt-1 mb-1">
    <span>Inventory</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">

    <li class="nav-item dropdown">
        <a href="#master-data-inventory" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">Data Master</span><span class="sr-only">(current)</span>
        </a>

        <ul class="collapse list-unstyled pl-4 w-100  @if (Request::segment(2) == 'master-data-inventory') show @endif" id="master-data-inventory">
            @php
                $masterDataInv = [
                    ['name' => 'Jenis Barang', 'route' => 'md-item-category'],
                    ['name' => 'Unit Barang', 'route' => 'md-item-unit'],
                    ['name' => 'Barang', 'route' => 'md-item'],
                ];
            @endphp

            @foreach ($masterDataInv as $mdi)
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == $mdi['route']) active-label @endif"
                        href="{{ route($mdi['route'] . '.index') }}">
                        <span class="item-text">{{ $mdi['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'user-list') active-label @endif" href="#">
            <i class="fe fe-user-plus fe-16"></i>
            <span class="ml-3 item-text">List Iventaris</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'user-list') active-label @endif" href="#">
            <i class="fe fe-user-plus fe-16"></i>
            <span class="ml-3 item-text">Inventaris Senjata</span>
        </a>
    </li>
</ul>

<p class="text-muted nav-heading mt-1 mb-1">
    <span>Management Member</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">
    @php
        $managementMember = [
            ['name' => 'Member', 'route' => 'md-shooting-field'],
            ['name' => 'Struktur Organisasi', 'route' => 'md-homebase'],
            // ['name' => 'Provinsi', 'route' => 'provinsi'],
            // ['name' => 'Kota', 'route' => 'kota'],
            // ['name' => 'Gudang', 'route' => 'gudang'],
        ];
    @endphp
    @foreach ($managementMember as $mm)
        <li class="nav-item w-100">
            <a class="nav-link @if (Request::segment(3) == 'inbox') active-label @endif" href="#">
                <i class="fe fe-inbox fe-16"></i>
                <span class="ml-3 item-text">{{ $mm['name'] }}</span>
            </a>
        </li>
    @endforeach
</ul>

<p class="text-muted nav-heading mt-1 mb-1">
    <span>Management User</span>
</p>

<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'user-list') active-label @endif" href="#">
            <i class="fe fe-user-plus fe-16"></i>
            <span class="ml-3 item-text">Role</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'user-list') active-label @endif" href="#">
            <i class="fe fe-user-plus fe-16"></i>
            <span class="ml-3 item-text">User</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'log-activity') active-label @endif" href="#">
            <i class="fe fe-clock fe-16"></i>
            <span class="ml-3 item-text">Log Aktivitas User</span>
        </a>
    </li>
</ul>
