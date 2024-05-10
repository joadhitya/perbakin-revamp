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

            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(3) == 'category-field') active-label @endif"
                    href="{{ route('md-shooting-field.index') }}">
                    <span class="item-text">Bidang Tembak</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
