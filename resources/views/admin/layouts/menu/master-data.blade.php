<p class="text-muted nav-heading mt-1 mb-1">
    <span>Master Data</span>
</p>

<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'activity') active-label @endif" href="{{ route('activity.index') }}">
            <i class="fe fe-award fe-16"></i>
            <span class="ml-3 item-text">Consultant's Activity</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'phase') active-label @endif" href="{{ route('phase.index') }}">
            <i class="fe fe-layers fe-16"></i>
            <span class="ml-3 item-text">Phase</span>
        </a>
    </li>
    {{-- <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'n-activity') active-label @endif"
            href="{{ route('n-activity.index') }}">
            <i class="fe fe-activity fe-16"></i>
            <span class="ml-3 item-text">Activity Non Chargable</span>
        </a>
    </li> --}}
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'action') active-label @endif" href="{{ route('action.index') }}">
            <i class="fe fe-check-circle fe-16"></i>
            <span class="ml-3 item-text">Action</span>
        </a>
    </li>
    {{-- <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'account') active-label @endif" href="{{ route('account.index') }}">
            <i class="fe fe-book fe-16"></i>
            <span class="ml-3 item-text">Account</span>
        </a>
    </li> --}}
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'certification') active-label @endif"
            href="{{ route('certification.index') }}">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Certification</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'company') active-label @endif" href="{{ route('company.index') }}">
            <i class="fe fe-speaker fe-16"></i>
            <span class="ml-3 item-text">Company</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'division') active-label @endif" href="{{ route('division.index') }}">
            <i class="fe fe-briefcase fe-16"></i>
            <span class="ml-3 item-text">Division</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'duration') active-label @endif"
            href="{{ route('duration.index') }}">
            <i class="fe fe-clock fe-16"></i>
            <span class="ml-3 item-text">Duration</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'industry') active-label @endif"
            href="{{ route('industry.index') }}">
            <i class="fe fe-package fe-16"></i>
            <span class="ml-3 item-text">Industry Scope</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'position') active-label @endif"
            href="{{ route('position.index') }}">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Position</span>
        </a>
    </li>
    {{-- <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'product') active-label @endif"
            href="{{ route('product.index') }}">
            <i class="fe fe-shopping-bag fe-16"></i>
            <span class="ml-3 item-text">Product</span>
        </a>
    </li> --}}
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'status') active-label @endif"
            href="{{ route('status.index') }}">
            <i class="fe fe-star fe-16"></i>
            <span class="ml-3 item-text">Status</span>
        </a>
    </li>
</ul>
