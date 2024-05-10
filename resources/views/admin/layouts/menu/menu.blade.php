<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item w-100">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span>
        </a>
    </li>
</ul>
{{-- MASTER DATA --}}
@if (in_array('2', $arr_menu) ||
        in_array('3', $arr_menu) ||
        in_array('4', $arr_menu) ||
        in_array('5', $arr_menu) ||
        in_array('6', $arr_menu) ||
        in_array('7', $arr_menu) ||
        in_array('8', $arr_menu) ||
        in_array('9', $arr_menu) ||
        in_array('10', $arr_menu) ||
        in_array('11', $arr_menu) ||
        in_array('12', $arr_menu) ||
        in_array('13', $arr_menu))
    <p class="text-muted nav-heading mt-1 mb-1">
        <span>Master Data</span>
    </p>
@endif

<ul class="navbar-nav flex-fill w-100 mb-2">
    @if (in_array('2', $arr_menu) ||
            in_array('3', $arr_menu) ||
            in_array('4', $arr_menu) ||
            in_array('5', $arr_menu) ||
            in_array('6', $arr_menu) ||
            in_array('7', $arr_menu) ||
            in_array('8', $arr_menu) ||
            in_array('9', $arr_menu) ||
            in_array('10', $arr_menu) ||
            in_array('11', $arr_menu) ||
            in_array('12', $arr_menu) ||
            in_array('13', $arr_menu))
        <li class="nav-item dropdown">
            <a href="#master-data" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Data Master</span><span class="sr-only">(current)</span>
            </a>

            <ul class="collapse list-unstyled pl-4 w-100  @if (Request::segment(2) == 'master-data') show @endif"
                id="master-data">

                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'category-field') active-label @endif"
                        href="{{ route('category-field.index') }}">
                        <span class="item-text">Kategori Bidang</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'field') active-label @endif"
                        href="{{ route('field.index') }}">
                        <span class="item-text">Bidang</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'social-media') active-label @endif"
                        href="{{ route('social-media.index') }}">
                        <span class="item-text">Social Media</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'category-booklet') active-label @endif"
                        href="{{ route('category-booklet.index') }}">
                        <span class="item-text">Kategori Booklet</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'sub-category-booklet') active-label @endif"
                        href="{{ route('sub-category-booklet.index') }}">
                        <span class="item-text">Sub Kategori Booklet</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'booklet') active-label @endif"
                        href="{{ route('booklet.index') }}">
                        <span class="item-text">Booklet</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'category-partner') active-label @endif"
                        href="{{ route('category-partner.index') }}">
                        <span class="item-text">Kategori Partner</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'partner') active-label @endif"
                        href="{{ route('partner.index') }}">
                        <span class="item-text">Partner</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'regulation') active-label @endif"
                        href="{{ route('regulation.index') }}">
                        <span class="item-text">Regulasi</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'video') active-label @endif"
                        href="{{ route('video.index') }}">
                        <span class="item-text">Video</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'category-assessor') active-label @endif"
                        href="{{ route('category-assessor.index') }}">
                        <span class="item-text">Kategori Asesor</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'sub-category-assessor') active-label @endif"
                        href="{{ route('sub-category-assessor.index') }}">
                        <span class="item-text">Sub Kategori Asesor</span>
                    </a>
                </li>
                {{-- <li class="nav-item w-100">
                    <a class="nav-link @if (Request::segment(3) == 'md-assessor') active-label @endif"
                        href="{{ route('md-assessor.index') }}">
                        <span class="item-text">Asesor</span>
                    </a>
                </li> --}}
            </ul>
        </li>
    @endif
</ul>


<ul class="navbar-nav flex-fill w-100 mb-2">
    <li class="nav-item dropdown">
        <a href="#profile-master" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">Profile - Master</span><span class="sr-only">(current)</span>
        </a>

        <ul class="collapse list-unstyled pl-4 w-100  @if (Request::segment(2) == 'profile-master') show @endif"
            id="profile-master">
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(3) == 'profile-assessor') active-label @endif"
                    href="{{ route('profile-assessor.index') }}">
                    <span class="item-text">Asesor</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(3) == 'assessment-center') active-label @endif"
                    href="{{ route('assessment-center.index') }}">
                    <span class="item-text">Tempat Uji Kompetensi</span>
                </a>
            </li>
        </ul>
    </li>
</ul>


<p class="text-muted nav-heading mt-1 mb-1">
    <span>Content Management</span>

</p>
<ul class="navbar-nav flex-fill w-100 mb-2">

    <li class="nav-item dropdown">
        <a href="#cms-profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-tag fe-16"></i>
            <span class="ml-3 item-text">Profil</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100  @if (Request::segment(2) == 'content-management' && Request::segment(3) == 'profile-company') show @endif"
            id="cms-profile">
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'company-information') active-label @endif"
                    href="{{ route('company-information.index') }}">
                    <span class="item-text">Profile Perusahaan</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'about-us') active-label @endif"
                    href="{{ route('about-us.index') }}">
                    <span class="item-text">Tentang Kami</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'legality') active-label @endif"
                    href="{{ route('legality.index') }}">
                    <span class="item-text">Legalitas</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'organization') active-label @endif"
                    href="{{ route('organization.index') }}">
                    <span class="item-text">Struktur Organisasi</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link font-10 @if (Request::segment(4) == 'quality-policy') active-label @endif"
                    href="{{ route('quality-policy.index') }}">
                    <span class="item-text">Kebijakan Mutu & Maklumat Pelayanan</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'assessor') active-label @endif"
                    href="{{ route('assessor.index') }}">
                    <span class="item-text">Asesor</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'site-competence') active-label @endif"
                    href="{{ route('site-competence.index') }}">
                    <span class="item-text">Tempat Uji</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <a href="#cms-products-services" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle nav-link">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">Produk & Layanan</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100  @if (Request::segment(2) == 'content-management' && Request::segment(3) == 'products-services') show @endif"
            id="cms-products-services">
            <li class="nav-item w-100">
                <a class="nav-link font-11 @if (Request::segment(4) == 'products-and-services') active-label @endif"
                    href="{{ route('products-and-services.index') }}">
                    <span class="item-text">Produk dan Layanan</span>
                </a>
            </li>
            {{-- <li class="nav-item w-100">
                <a class="nav-link font-11 @if (Request::segment(4) == 'qualification-position') active-label @endif"
                    href="{{ route('qualification-position.index') }}">
                    <span class="item-text">Bidang & Kualifikasi Jabatan</span>
                </a>
            </li> --}}
            <li class="nav-item w-100">
                <a class="nav-link font-11 @if (Request::segment(4) == 'standart-services') active-label @endif"
                    href="{{ route('standart-services.index') }}">
                    <span class="item-text">Standart Pelayanan & Biaya</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'competence-test') active-label @endif"
                    href="{{ route('competence-test.index') }}">
                    <span class="item-text">Uji Kompetensi</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'portfolio-test') active-label @endif"
                    href="{{ route('portfolio-test.index') }}">
                    <span class="item-text">Uji Portfolio</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link font-11 @if (Request::segment(4) == 'complaint-compensation') active-label @endif"
                    href="{{ route('complaint-compensation.index') }}">
                    <span class="item-text">Keluhan Banding & Ganti Rugi</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a href="#cms-article" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file-text fe-16"></i>
            <span class="ml-3 item-text">Artikel</span><span class="sr-only">(current)</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100  @if (Request::segment(2) == 'content-management' && Request::segment(3) == 'article-management') show @endif"
            id="cms-article">
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'category-article') active-label @endif"
                    href="{{ route('category-article.index') }}">
                    <span class="item-text">Kategori Artikel</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'article') active-label @endif"
                    href="{{ route('article.index') }}">
                    <span class="item-text">List Artikel</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'forbidden-word') active-label @endif"
                    href="{{ route('forbidden-word.index') }}">
                    <span class="item-text">Kelola Kata Terlarang</span>
                </a>
            </li>
            {{-- <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(4) == 'manage-article') active-label @endif"
                    href="{{ route('manage-article.index') }}">
                    <span class="item-text">Kelola Post Artikel</span>
                </a>
            </li> --}}
        </ul>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'general-content') active-label @endif"
            href="{{ route('general-content.index') }}">
            <i class="fe fe-tv   fe-16"></i>
            <span class="ml-3 item-text">General</span>
        </a>
    </li>
    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(3) == 'order-sequence') active-label @endif"
            href="{{ route('order-sequence.index') }}">
            <i class="fe fe-code fe-16"></i>
            <span class="ml-3 item-text">Urutan Konten</span>
        </a>
    </li>

    <p class="text-muted nav-heading mt-1 mb-1">
        <span>SEO Management</span>
    </p>

    <li class="nav-item w-100">
        <a class="nav-link @if (Request::segment(4) == 'meta-page') active-label @endif"
            href="{{ route('meta-page.index') }}">
            <i class="fe fe-key fe-16"></i>
            <span class="ml-3 item-text">Meta - Halaman Website</span>
        </a>
    </li>


    <p class="text-muted nav-heading mt-1 mb-1">
        <span>Customer Management</span>
    </p>

    <ul class="navbar-nav flex-fill w-100 mb-2">

        <li class="nav-item dropdown">
            <a href="#cms-test-agenda" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle nav-link">
                <i class="fe fe-settings fe-16"></i>
                <span class="ml-3 item-text">Agenda Uji</span><span class="sr-only">(current)</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100  @if (Request::segment(2) == 'customer-management') show @endif"
                id="cms-test-agenda">
                <li class="nav-item w-100">
                    <a class="nav-link font-11 @if (Request::segment(3) == 'registration') active-label @endif"
                        href="{{ route('registration.index') }}">
                        <span class="item-text">Registrasi</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link font-11 @if (Request::segment(3) == 'test-schedule') active-label @endif"
                        href="{{ route('test-schedule.index') }}">
                        <span class="item-text">List Agenda Uji</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item w-100">
            <a class="nav-link @if (Request::segment(3) == 'inbox') active-label @endif"
                href="{{ route('inbox.index') }}">
                <i class="fe fe-inbox fe-16"></i>
                <span class="ml-3 item-text">Inbox</span>
            </a>
        </li>
        <li class="nav-item w-100">
            <a class="nav-link @if (Request::segment(3) == 'comment') active-label @endif"
                href="{{ route('comment.index') }}">
                <i class="fe fe-tag fe-16"></i>
                <span class="ml-3 item-text">Komentar</span>
            </a>
        </li>
    </ul>
    {{-- Management User --}}
    {{-- @if (in_array('19', $arr_menu) || in_array('20', $arr_menu))
        <p class="text-muted nav-heading mt-1 mb-1">
            <span>User Management</span>
        </p>
    @endif

    <ul class="navbar-nav flex-fill w-100 mb-2">
        @if (in_array('19', $arr_menu))
            <li class="nav-item w-100">
                <a class="nav-link @if (Request::segment(3) == 'user-list') active-label @endif" href="#">
                    <i class="fe fe-user-plus fe-16"></i>
                    <span class="ml-3 item-text">User</span>
                </a>
            </li>
        @endif


        <li class="nav-item w-100">
            <a class="nav-link @if (Request::segment(3) == 'log-activity') active-label @endif" href="#">
                <i class="fe fe-clock fe-16"></i>
                <span class="ml-3 item-text">Log Aktivitas User</span>
            </a>
        </li>

    </ul> --}}
