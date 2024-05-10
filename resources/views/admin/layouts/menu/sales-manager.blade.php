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
</ul>

<p class="text-muted nav-heading mt-1 mb-1">
    <span>Setting</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'company') active-label @endif" href="{{ route('company.index') }}">
            <i class="fe fe-speaker fe-16"></i>
            <span class="ml-3 item-text">Company</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'division') active-label @endif"
            href="{{ route('division.index') }}">
            <i class="fe fe-briefcase fe-16"></i>
            <span class="ml-3 item-text">Division</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'industry') active-label @endif"
            href="{{ route('industry.index') }}">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">Scope of Industry</span>
        </a>
    </li>
</ul>
