<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(2) == 'dashboard') active-label @endif" href="{{ route('dashboard') }}">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'client-sales') active-label @endif"
            href="{{ route('client-sales.index') }}">
            <i class="fe fe-users fe-16"></i>
            <span class="ml-3 item-text">Client</span>
        </a>
    </li>
</ul>
<p class="text-muted nav-heading mt-1 mb-1">
    <span>Sales Report</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'follow-up-sales') active-label @endif"
            href="{{ route('follow-up-sales.index') }}">
            <i class="fe fe-message-circle fe-16"></i>
            <span class="ml-3 item-text">Follow Up</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'presentation-sales') active-label @endif"
            href="{{ route('presentation-sales.index') }}">
            <i class="fe fe-airplay fe-16"></i>
            <span class="ml-3 item-text">Presentation</span>
        </a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link pl-1  @if (Request::segment(4) == 'pic-client-sales') active-label @endif"
            href="{{ route('pic-client-sales.index') }}">
            <span class="ml-1 item-text">List of PIC Client</span>
        </a>
    </li> --}}
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'proposal-sales') active-label @endif"
            href="{{ route('proposal-sales.index') }}">
            <i class="fe fe-book-open fe-16"></i>
            <span class="ml-3 item-text">Proposal Status</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'achievement-sales') active-label @endif"
            href="{{ route('achievement-sales.index') }}">
            <i class="fe fe-star fe-16"></i>
            <span class="ml-3 item-text">Achievement</span>
        </a>
    </li>
    {{-- <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'pic-client-sales') active-label @endif"
            href="{{ route('pic-client-sales.index') }}">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">List of PIC Client</span>
        </a>
    </li> --}}
</ul>

<p class="text-muted nav-heading mt-1 mb-1">
    <span>General Report</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(2) == '') active-label @endif" href="#">
            <i class="fe fe-briefcase fe-16"></i>
            <span class="ml-3 item-text">Comission</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(2) == '') active-label @endif" href="#">
            <i class="fe fe-settings fe-16"></i>
            <span class="ml-3 item-text">Setting</span>
        </a>
    </li>
</ul>
{{-- <ul class="navbar-nav flex-fill w-100 mb-2 ">
    <li class="nav-item dropdown">
        <a href="#sales-crm" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-book fe-16"></i>
            <span class="ml-3 item-text">CRM</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100 @if (Request::segment(3) == 'crm') show @endif" id="sales-crm">
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'client-sales') active-label @endif "
                    href="{{ route('client-sales.index') }}">
                    <span class="ml-1 item-text">Client List</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 " href="">
                    <span class="ml-1 item-text">Input New Client</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#sales-report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">Sales Report</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100 @if (Request::segment(3) == 'sales-report') show @endif" id="sales-report">
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'follow-up-sales') active-label @endif"
                    href="{{ route('follow-up-sales.index') }}">
                    <span class="ml-1 item-text">List of Follow Up</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1  @if (Request::segment(4) == 'proposal-sales') active-label @endif"
                    href="{{ route('proposal-sales.index') }}">
                    <span class="ml-1 item-text">Proposal Status</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1  @if (Request::segment(4) == 'achievement-sales') active-label @endif"
                    href="{{ route('achievement-sales.index') }}">
                    <span class="ml-1 item-text">Achievement</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1  @if (Request::segment(4) == 'pic-client-sales') active-label @endif"
                    href="{{ route('pic-client-sales.index') }}">
                    <span class="ml-1 item-text">List of PIC Client</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#sales-general-report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">General Report</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100 " id="sales-general-report">
            <li class="nav-item">
                <a class="nav-link pl-1 " href="{{ route('commission-sales.index') }}">
                    <span class="ml-1 item-text">Commission</span>
                </a>
            </li>
        </ul>
    </li>
</ul> --}}
