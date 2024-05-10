<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(2) == 'dashboard') active-label @endif" href="{{ route('dashboard') }}">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span>
        </a>
    </li>
</ul>
<p class="text-muted nav-heading mt-1 mb-1">
    <span>Finance</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'invoice-monitoring-payment') active-label @endif"
            href="{{ route('invoice-monitoring-payment.index') }}">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Invoice</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'consultant-activity') active-label @endif"
            href="{{ route('consultant-activity.index') }}">
            <i class="fe fe-briefcase fe-16"></i>
            <span class="ml-3 item-text">Consultant's Activity</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'reporting') active-label @endif"
            href="{{ route('reporting.index') }}">
            <i class="fe fe-pie-chart fe-16"></i>
            <span class="ml-3 item-text">Finance Report</span>
        </a>
    </li>
</ul>

{{-- <p class="text-muted nav-heading mt-1 mb-1">
    <span>Setting</span>
</p>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(2) == 'dashboard') active-label @endif" href="{{ route('dashboard') }}">
            <i class="fe fe-credit-card fe-16"></i>
            <span class="ml-3 item-text">Bank Account</span>
        </a>
    </li>
</ul> --}}

{{-- <ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#finance-activity" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-book fe-16"></i>
            <span class="ml-3 item-text">Finance Activity</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100 @if (Request::segment(3) == 'finance-activity') show @endif"
            id="finance-activity">
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'invoice-monitoring-payment') active-label @endif " href="{{ route('invoice-monitoring-payment.index') }}">
                    <span class="ml-1 item-text">Invoice & Monitoring Payment</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 " href="">
                    <span class="ml-1 item-text">Commission</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'other-expense') active-label @endif " href="{{ route('other-expense.index') }}">
                    <span class="ml-1 item-text">Other Expense</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'project-status-finance') active-label @endif " href="{{ route('project-status-finance.index') }}">
                    <span class="ml-1 item-text">Update Status Project/Training</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 " href="">
                    <span class="ml-1 item-text">Create User</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#finance-report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">Finance Report</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100 @if (Request::segment(3) == 'finance-report') show @endif "
            id="finance-report">
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'budget-project') active-label @endif " href="{{ route('budget-project.index') }}">
                    <span class="ml-1 item-text">Budget per Project/Training</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1 @if (Request::segment(4) == 'invoice-status-payment') active-label @endif" href="{{ route('invoice-status-payment.index') }}">
                    <span class="ml-1 item-text">List of Invoice & Status</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pl-1  @if (Request::segment(4) == 'accounts-receivable') active-label @endif" href="{{ route('accounts-receivable.index') }}">
                    <span class="ml-1 item-text">List of A/R</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#finance-general-report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">General Report</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100 " id="finance-general-report">
            <li class="nav-item">
                <a class="nav-link pl-1 " href="{{ route('comission-finance.index') }}">
                    <span class="ml-1 item-text">Commission</span>
                </a>
            </li>
        </ul>
    </li>
</ul> --}}
