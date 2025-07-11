@php
    $person = null;
    if(session()->has('person')){
        $person = \App\Models\Person::findOrFail(session()->get('person')['id']);
    }else{
        $person = new \App\Models\Person();
    }
@endphp

<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes</title>
    <meta charset="utf-8" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="aside-enabled">
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->

<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
             data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
             data-kt-drawer-toggle="#kt_aside_mobile_toggle">

            <!--begin::Aside Toolbarl-->
            <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
                <!--begin::Aside user-->
                <!--begin::User-->
                <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px">
                        <img src="{{ asset($person->document->path) }}" alt="" />
                    </div>
                    <!--end::Symbol-->

                    <!--begin::Wrapper-->
                    <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                        <!--begin::Section-->
                        <div class="d-flex">
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-2">
                                <!--begin::Username-->
                                <a href="#" class="text-white text-hover-primary fs-6 fw-bold">Paul Melone</a>
                                <!--end::Username-->

                                <!--begin::Description-->
                                <span class="text-gray-600 fw-semibold d-block fs-8 mb-1">Python Dev</span>
                                <!--end::Description-->

                                <!--begin::Label-->
                                <div class="d-flex align-items-center text-success fs-9">
                                    <span class="bullet bullet-dot bg-success me-1"></span>online
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->

                            <!--begin::User menu-->
                            <div class="me-n2">
                                <!--begin::Action-->
                                <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2"
                                   data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                                   data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-setting-2 text-muted fs-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                </a>


                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                     data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{ asset('assets/media/avatars/300-1.jpg')}}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    Max Smith <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>

                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                    max@kt.com </a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/overview.html" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="apps/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
                                                    <span
                                                        class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                                </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5"
                                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title">My Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/referrals.html" class="menu-link px-5">
                                                    Referrals
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/billing.html" class="menu-link px-5">
                                                    Billing
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/statements.html" class="menu-link px-5">
                                                    Payments
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/statements.html"
                                                   class="menu-link d-flex flex-stack px-5">
                                                    Statements

                                                    <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                          title="View your statements">
                                                            <i class="ki-duotone ki-information-5 fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span class="path3"></span></i>
                                                        </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px"
                                                               type="checkbox" value="1" checked="checked"
                                                               name="notifications" />
                                                        <span class="form-check-label text-muted fs-7">
                                                                Notifications
                                                            </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/statements.html" class="menu-link px-5">
                                            My Statements
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5"
                                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                                <span class="menu-title position-relative">
                                                    Language

                                                    <span
                                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                        English <img class="w-15px h-15px rounded-1 ms-2"
                                                                     src="assets/media/flags/united-states.svg" alt="" />
                                                    </span>
                                                </span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html"
                                                   class="menu-link d-flex px-5 active">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1"
                                                                 src="assets/media/flags/united-states.svg" alt="" />
                                                        </span>
                                                    English
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="assets/media/flags/spain.svg"
                                                                 alt="" />
                                                        </span>
                                                    Spanish
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="assets/media/flags/germany.svg"
                                                                 alt="" />
                                                        </span>
                                                    German
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="assets/media/flags/japan.svg"
                                                                 alt="" />
                                                        </span>
                                                    Japanese
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="assets/media/flags/france.svg"
                                                                 alt="" />
                                                        </span>
                                                    French
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="account/settings.html" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="authentication/layouts/corporate/sign-in.html"
                                           class="menu-link px-5">
                                            Sign Out
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->

                                <!--end::Action-->
                            </div>
                            <!--end::User menu-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::User-->

                <!--begin::Aside search-->
                <div class="aside-search py-5">

                    <!--begin::Search-->
                    <div id="kt_header_search" class="header-search d-flex align-items-center w-100"
                         data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
                         data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto"
                         data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">

                        <!--begin::Tablet and mobile search toggle-->
                        <div data-kt-search-element="toggle"
                             class="search-toggle-mobile d-flex d-lg-none align-items-center">
                            <div class="d-flex ">
                                <i class="ki-duotone ki-magnifier fs-1 "><span class="path1"></span><span
                                        class="path2"></span></i>
                            </div>
                        </div>
                        <!--end::Tablet and mobile search toggle-->

                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <i
                                class="ki-duotone ki-magnifier fs-2 search-icon position-absolute top-50 translate-middle-y ms-4"><span
                                    class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="search-input form-control ps-13 fs-7 h-40px" name="search"
                                   value="" placeholder="Quick Search" data-kt-search-element="input" />
                            <!--end::Input-->

                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                  data-kt-search-element="spinner">
                                    <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                </span>
                            <!--end::Spinner-->

                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                data-kt-search-element="clear">
                                    <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->
                        <!--begin::Menu-->
                        <div data-kt-search-element="content"
                             class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                            <!--begin::Wrapper-->
                            <div data-kt-search-element="wrapper">
                                <!--begin::Recently viewed-->
                                <div data-kt-search-element="results" class="d-none">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-200px mh-lg-350px">
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0  pb-5"
                                            data-kt-search-element="category-title">
                                            Users </h3>
                                        <!--end::Category title-->




                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-6.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Karina Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-2.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-9.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Ana Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-14.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-11.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                <span class="fs-7 fw-semibold text-muted">System
                                                        Administrator</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                            data-kt-search-element="category-title">
                                            Customers </h3>
                                        <!--end::Category title-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                             src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
                                                    </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                             src="assets/media/svg/brand-logos/tvit.svg" alt="" />
                                                    </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                             src="assets/media/svg/misc/infography.svg" alt="" />
                                                    </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                <span class="fs-7 fw-semibold text-muted">Administration</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                             src="assets/media/svg/brand-logos/leaf.svg" alt="" />
                                                    </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <img class="w-20px h-20px"
                                                             src="assets/media/svg/brand-logos/tower.svg" alt="" />
                                                    </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->

                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                            data-kt-search-element="category-title">
                                            Projects </h3>
                                        <!--end::Category title-->


                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-notepad fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span><span
                                                                class="path5"></span></i>
                                                    </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                <span class="fs-7 fw-semibold text-muted">#45670</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-frame fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                    </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                <span class="fs-7 fw-semibold text-muted">#45690</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                    </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Finance Monitoring SAAS
                                                        Discussion</span>
                                                <span class="fs-7 fw-semibold text-muted">#21090</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->



                                        <!--begin::Item-->
                                        <a href="#"
                                           class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                    </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">#34560</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->


                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Recently viewed-->
                                <!--begin::Recently viewed-->
                                <div class="" data-kt-search-element="main">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-stack fw-semibold mb-4">
                                        <!--begin::Label-->
                                        <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                        <!--end::Label-->

                                        <!--begin::Toolbar-->
                                        <div class="d-flex" data-kt-search-element="toolbar">
                                            <!--begin::Preferences toggle-->
                                            <div data-kt-search-element="preferences-show"
                                                 class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                                                 tooltip" title="Show search preferences">
                                            <i class="ki-duotone ki-setting-2 fs-2"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </div>
                                        <!--end::Preferences toggle-->

                                        <!--begin::Advanced search toggle-->
                                        <div data-kt-search-element="advanced-options-form-show"
                                             class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                                             data-bs-toggle="tooltip" title="Show more search options">
                                            <i class="ki-duotone ki-down fs-2"></i>
                                        </div>
                                        <!--end::Advanced search toggle-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Items-->
                                <div class="scroll-y mh-200px mh-lg-325px">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-laptop fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                by Keenthemes</a>
                                            <span class="fs-7 text-muted fw-semibold">#45789</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span><span class="path4"></span></i>
                                                    </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                API Project Meeting</a>
                                            <span class="fs-7 text-muted fw-semibold">#84050</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                Monitoring App Launch</a>
                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                Reference FAQ</a>
                                            <span class="fs-7 text-muted fw-semibold">#67945</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-sms fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                App Development</a>
                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-bank fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                Mobile App</a>
                                            <span class="fs-7 text-muted fw-semibold">#45690</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                                    <span class="symbol-label bg-light">
                                                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                               class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                UI Design" Launch</a>
                                            <span class="fs-7 text-muted fw-semibold">#24005</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Recently viewed-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Icon-->
                                <div class="pt-10 pb-10">
                                    <i class="ki-duotone ki-search-list fs-4x opacity-50"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                </div>
                                <!--end::Icon-->

                                <!--begin::Message-->
                                <div class="pb-15 fw-semibold">
                                    <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                    <div class="text-muted fs-7">Please try again with a different query</div>
                                </div>
                                <!--end::Message-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Preferences-->
                        <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                            <!--end::Heading-->

                            <!--begin::Input group-->
                            <div class="mb-5">
                                <input type="text" class="form-control form-control-sm form-control-solid"
                                       placeholder="Contains the word" name="query" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-5">
                                <!--begin::Radio group-->
                                <div class="nav-group nav-group-fluid">
                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="type" value="has"
                                               checked="checked" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                    All
                                                </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="type" value="users" />
                                        <span
                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                    Users
                                                </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="type" value="orders" />
                                        <span
                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                    Orders
                                                </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="type" value="projects" />
                                        <span
                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                    Projects
                                                </span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Radio group-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-5">
                                <input type="text" name="assignedto"
                                       class="form-control form-control-sm form-control-solid"
                                       placeholder="Assigned to" value="" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-5">
                                <input type="text" name="collaborators"
                                       class="form-control form-control-sm form-control-solid"
                                       placeholder="Collaborators" value="" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-5">
                                <!--begin::Radio group-->
                                <div class="nav-group nav-group-fluid">
                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="attachment" value="has"
                                               checked="checked" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                    Has attachment
                                                </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="attachment" value="any" />
                                        <span
                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                    Any
                                                </span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Radio group-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-5">
                                <select name="timezone" aria-label="Select a Timezone" data-control="select2"
                                        data-dropdown-parent="#kt_header_search" data-placeholder="date_period"
                                        class="form-select form-select-sm form-select-solid">
                                    <option value="next">Within the next</option>
                                    <option value="last">Within the last</option>
                                    <option value="between">Between</option>
                                    <option value="on">On</option>
                                </select>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <input type="number" name="date_number"
                                           class="form-control form-control-sm form-control-solid"
                                           placeholder="Lenght" value="" />
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-6">
                                    <select name="date_typer" aria-label="Select a Timezone"
                                            data-control="select2" data-dropdown-parent="#kt_header_search"
                                            data-placeholder="Period"
                                            class="form-select form-select-sm form-select-solid">
                                        <option value="days">Days</option>
                                        <option value="weeks">Weeks</option>
                                        <option value="months">Months</option>
                                        <option value="years">Years</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset"
                                        class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                        data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                                <a href="javascript:;"
                                   class="btn btn-sm fw-bold btn-primary"
                                   data-kt-search-element="advanced-options-form-search">Search</a>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Preferences-->
                        <!--begin::Preferences-->
                        <form data-kt-search-element="preferences" class="pt-1 d-none">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                            <!--end::Heading-->

                            <!--begin::Input group-->
                            <div class="pb-4 border-bottom">
                                <label
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Projects
                                            </span>

                                    <input class="form-check-input" type="checkbox" value="1"
                                           checked="checked" />
                                </label>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Targets
                                            </span>
                                    <input class="form-check-input" type="checkbox" value="1"
                                           checked="checked" />
                                </label>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Affiliate Programs
                                            </span>
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </label>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Referrals
                                            </span>
                                    <input class="form-check-input" type="checkbox" value="1"
                                           checked="checked" />
                                </label>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                Users
                                            </span>
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </label>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end pt-7">
                                <button type="reset"
                                        class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                        data-kt-search-element="preferences-dismiss">Cancel</button>
                                <button type="submit" class="btn btn-sm fw-bold btn-primary">Save
                                    Changes</button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Preferences-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Aside search-->
            <!--end::Aside user-->
        </div>
        <!--end::Aside Toolbarl-->

        <!--begin::Aside menu-->
        <div class="aside-menu flex-column-fluid">
            <!--begin::Aside Menu-->
            <div class="hover-scroll-overlay-y mx-3 my-5 my-lg-5" id="kt_aside_menu_wrapper"
                 data-kt-scroll="true" data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
                 data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
                <!--begin::Menu-->
                <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                     id="#kt_aside_menu" data-kt-menu="true">

                    <div class="menu-item pt-5"><!--begin:Menu content-->
                        <div class="menu-content"><span
                                class="menu-heading fw-bold text-uppercase fs-7">Pages</span></div>
                        <!--end:Menu content-->
                    </div><!--end:Menu item-->
                    @if($person->exists && $person->roles->contains(1))
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link-->
                            <a class="menu-link" href="{{ route('users.page') }}">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-rocket fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                <span class="menu-title">Personnes</span>
                            </a><!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    @endif
                    <div class="menu-item"><!--begin:Menu link-->
                        <a class="menu-link" href="javascript:;" target="_blank" onclick="document.getElementById('el-log-out-form').submit()">
                            <form id="el-log-out-form" action="{{ route("logOut.page") }}" method="post">
                                @csrf
                                @method('DELETE')
                            </form>
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-rocket fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                            <span class="menu-title">Deconnexion</span>
                        </a><!--end:Menu link-->
                    </div>
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Aside Menu-->
        </div>
        <!--end::Aside menu-->
    </div>
    <!--end::Aside-->

    <!--begin::Wrapper-->
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" style="" class="header  align-items-stretch">
            <!--begin::Brand-->
            <div class="header-brand">
                <!--begin::Logo-->
                <a href="index.html">
                    <img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-25px h-lg-25px" />
                </a>
                <!--end::Logo-->

                <!--begin::Aside minimize-->
                <div id="kt_aside_toggle" class="
                    btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize
                                    " data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                     data-kt-toggle-name="aside-minimize">

                    <i class="ki-duotone ki-entrance-right fs-1 me-n1 minimize-default"><span
                            class="path1"></span><span class="path2"></span></i>
                    <i class="ki-duotone ki-entrance-left fs-1 minimize-active"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <!--end::Aside minimize-->

                <!--begin::Aside toggle-->
                <div class="d-flex align-items-center d-lg-none me-n2" title="Show aside menu">
                    <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                         id="kt_aside_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                </div>
                <!--end::Aside toggle-->
            </div>
            <!--end::Brand-->

            <!--begin::Toolbar-->
            <div class="toolbar d-flex align-items-stretch">
                <!--begin::Toolbar container-->
                <div
                    class=" container-xxl  py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">


                    <!--begin::Page title-->
                    <div class="page-title d-flex justify-content-center flex-column me-5">
                        <!--begin::Title-->
                        <h1 class="d-flex flex-column text-gray-900 fw-bold fs-3 mb-0">
                            Dashboard </h1>
                        <!--end::Title-->

                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="index.html" class="text-muted text-hover-primary">
                                    Home </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-300 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                Dashboards </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-300 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-900">
                                Default </li>
                            <!--end::Item-->

                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Action group-->
                    <div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
                        <!--begin::Action wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Label-->
                            <span class="fs-7 fw-bold text-gray-700 pe-4 text-nowrap d-none d-xxl-block">Sort
                                        By:</span>
                            <!--end::Label-->

                            <!--begin::Select-->
                            <select class="form-select form-select-sm form-select-solid w-100px w-xxl-125px"
                                    data-control="select2" data-placeholder="Latest" data-hide-search="true">
                                <option value=""></option>
                                <option value="1" selected>Latest</option>
                                <option value="2">In Progress</option>
                                <option value="3">Done</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Action wrapper-->

                        <!--begin::Action wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Separartor-->
                            <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                            <!--end::Separartor-->

                            <!--begin::Label-->
                            <span class="fs-7 text-gray-700 fw-bold d-none d-sm-block">Impact <span
                                    class="d-none d-xxl-inline">Level</span>:</span>
                            <!--end::Label-->

                            <!--begin::NoUiSlider-->
                            <div class="d-flex align-items-center ps-4" id="kt_toolbar">
                                <div id="kt_toolbar_slider"
                                     class="noUi-target noUi-target-primary w-75px w-xxl-150px noUi-sm"></div>

                                <span id="kt_toolbar_slider_value"
                                      class="d-flex flex-center bg-light-primary rounded-circle w-35px h-35px ms-4 fs-7 fw-bold text-primary"
                                      data-bs-toggle="tooltip" data-bs-placement="top" title="Set impact level">
                                        </span>
                            </div>
                            <!--end::NoUiSlider-->

                            <!--begin::Separartor-->
                            <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                            <!--end::Separartor-->
                        </div>
                        <!--end::Action wrapper-->

                        <!--begin::Action wrapper-->
                        <div class="d-flex align-items-center">
                            <!--begin::Label-->
                            <span class="fs-7 text-gray-700 fw-bold pe-3 d-none d-xxl-block">Quick Tools:</span>
                            <!--end::Label-->

                            <!--begin::Actions-->
                            <div class="d-flex">
                                <!--begin::Action-->
                                <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary"
                                   data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                    <i class="ki-duotone ki-file fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </a>
                                <!--end::Action-->

                                <!--begin::Notifications-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Menu- wrapper-->
                                    <a href="apps/subscriptions/add.html"
                                       class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary">
                                        <i class="ki-duotone ki-add-files fs-1"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i> </a>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Notifications-->

                                <!--begin::Quick links-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Menu wrapper-->
                                    <a href="apps/file-manager/folders.html"
                                       class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary">
                                        <i class="ki-duotone ki-file-up fs-1"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </a>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Quick links-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Action wrapper-->

                        <!--begin::Theme mode-->
                        <div class="d-flex align-items-center">

                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary"
                               data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                               data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-night-day theme-light-show fs-1"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span></i> <i
                                    class="ki-duotone ki-moon theme-dark-show fs-1"><span
                                        class="path1"></span><span class="path2"></span></i></a>
                            <!--begin::Menu toggle-->

                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                 data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-night-day fs-2"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span><span class="path6"></span><span
                                                            class="path7"></span><span class="path8"></span><span
                                                            class="path9"></span><span class="path10"></span></i>
                                                </span>
                                        <span class="menu-title">
                                                    Light
                                                </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                            class="path2"></span></i> </span>
                                        <span class="menu-title">
                                                    Dark
                                                </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                       data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-screen fs-2"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i> </span>
                                        <span class="menu-title">
                                                    System
                                                </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->

                        </div>
                        <!--end::Theme mode-->
                    </div>
                    <!--end::Action group-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid " id="kt_content">
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class=" container-xxl ">
                    @yield('main-content')
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Content-->

        <!--begin::Footer-->
        <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
            <!--begin::Container-->
            <div
                class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="text-gray-900 order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2025&copy;</span>
                    <a href="https://keenthemes.com/" target="_blank"
                       class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->

                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item"><a href="https://keenthemes.com/" target="_blank"
                                             class="menu-link px-2">About</a></li>

                    <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank"
                                             class="menu-link px-2">Support</a></li>

                    <li class="menu-item"><a
                            href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?irgwc=1&amp;clickid=Qb1XFm3dIxyIUCez3ZXf1X0mUks0kb3cC2sEUQ0&amp;iradid=275988&amp;irpid=1330466&amp;iradtype=ONLINE_TRACKING_LINK&amp;irmptype=mediapartner&amp;mp_value1=&amp;utm_campaign=af_impact_radius_1330466&amp;utm_medium=affiliate&amp;utm_source=impact_radius"
                            target="_blank" class="menu-link px-2">Purchase</a></li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Root-->

<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
     data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
     data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">

    <div class="card shadow-none border-0 rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
            <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>

            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </button>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                 data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                 data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                 data-kt-scroll-offset="5px">

                <!--begin::Timeline items-->
                <div class="timeline timeline-border-dashed">
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile
                                    App” project:</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->

                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <!--begin::Record-->
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                    <!--begin::Title-->
                                    <a href="apps/projects/project.html"
                                       class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                        with customer</a>
                                    <!--end::Title-->

                                    <!--begin::Label-->
                                    <div class="min-w-175px pe-2">
                                        <span class="badge badge-light text-muted">Application Design</span>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div
                                                class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                A</div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->

                                    <!--begin::Progress-->
                                    <div class="min-w-125px pe-2">
                                        <span class="badge badge-light-primary">In Progress</span>
                                    </div>
                                    <!--end::Progress-->

                                    <!--begin::Action-->
                                    <a href="apps/projects/project.html"
                                       class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->

                                <!--begin::Record-->
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                    <!--begin::Title-->
                                    <a href="apps/projects/project.html"
                                       class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project
                                        Delivery Preparation</a>
                                    <!--end::Title-->

                                    <!--begin::Label-->
                                    <div class="min-w-175px">
                                        <span class="badge badge-light text-muted">CRM System Development</span>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <img src="assets/media/avatars/300-20.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px">
                                            <div
                                                class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                B</div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->

                                    <!--begin::Progress-->
                                    <div class="min-w-125px">
                                        <span class="badge badge-light-success">Completed</span>
                                    </div>
                                    <!--end::Progress-->

                                    <!--begin::Action-->
                                    <a href="apps/projects/project.html"
                                       class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Record-->
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon me-4">
                            <i class="ki-duotone ki-flag fs-2 text-gray-500"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n2">
                            <!--begin::Timeline heading-->
                            <div class="overflow-auto pe-3">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that
                                    speak human workshop</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                        <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="mb-5 pe-3">
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New
                                    Incoming Project Files:</a>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                        <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->

                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                        <!--end::Icon-->

                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="apps/projects/project.html"
                                               class="fs-6 text-hover-primary fw-bold">Finance KPI App
                                                Guidelines</a>
                                            <!--end::Desc-->

                                            <!--begin::Number-->
                                            <div class="text-gray-500">1.9mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--begin::Info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                        <!--begin::Icon-->
                                        <img alt="/metronic8/demo8/apps/projects/project.html" class="w-30px me-3"
                                             src="assets/media/svg/files/doc.svg" />
                                        <!--end::Icon-->

                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing
                                                Results</a>
                                            <!--end::Desc-->

                                            <!--begin::Number-->
                                            <div class="text-gray-500">18kb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex flex-aligns-center">
                                        <!--begin::Icon-->
                                        <img alt="/metronic8/demo8/apps/projects/project.html" class="w-30px me-3"
                                             src="assets/media/svg/files/css.svg" />
                                        <!--end::Icon-->

                                        <!--begin::Info-->
                                        <div class="ms-1 fw-semibold">
                                            <!--begin::Desc-->
                                            <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                            <!--end::Desc-->

                                            <!--begin::Number-->
                                            <div class="text-gray-500">20mb</div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">
                                    Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                                    merged with <a href="#" class="text-primary fw-bold me-1">#45890</a> in “Ads Pro
                                    Admin Dashboard project:
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                        <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->

                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">
                                <div
                                    class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px"
                                                 src="assets/media/stock/600x400/img-29.jpg" />
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="overlay me-10">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px"
                                                 src="assets/media/stock/600x400/img-31.jpg" />
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="overlay">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper">
                                            <img alt="img" class="rounded w-150px"
                                                 src="assets/media/stock/600x400/img-40.jpg" />
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Link-->
                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-duotone ki-sms fs-2 text-gray-500"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">
                                    New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                    is assigned to you in Multi-platform Database Design project
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-duotone ki-pencil fs-2 text-gray-500"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                         data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                        <img src="assets/media/avatars/300-4.jpg" alt="img" />
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->

                            <!--begin::Timeline details-->
                            <div class="overflow-auto pb-5">

                                <!--begin::Notice-->
                                <div
                                    class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i> <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!
                                            </h4>

                                            <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make
                                                sure the data integrity is OK</div>
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">
                                            Proceed </a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->

                            </div>
                            <!--end::Timeline details-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="ki-duotone ki-basket fs-2 text-gray-500"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-semibold mb-2">
                                    New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                    is placed for Workshow Planning & Budget Estimation
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                </div>
                <!--end::Timeline items-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->

        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
            <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
                View All Activities <i class="ki-duotone ki-arrow-right fs-3 text-primary"><span
                        class="path1"></span><span class="path2"></span></i> </a>
        </div>
        <!--end::Footer-->
    </div>
</div>
<!--end::Activities drawer-->

<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
     data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
     data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    </button>

                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                         data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                Contacts
                            </div>
                        </div>
                        <!--end::Heading-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_users_search">
                                Add Contact
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_invite_friends">
                                Invite Contacts

                                <span class="ms-2" data-bs-toggle="tooltip"
                                      title="Specify a contact email to send an invitation">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span></i> </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                             data-kt-menu-placement="right-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Groups</span>
                                <span class="menu-arrow"></span>
                            </a>

                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                        Create Group
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                        Invite Members
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                        Settings
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                Settings
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                 data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                 data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">



                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">2 mins</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            How likely are you to recommend our company to your friends and family ? </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                            Hey there, we’re just writing to let you know that you’ve been subscribed to a
                            repository on GitHub. </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->

                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            Ok, Understood! </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                            You’ll receive notifications for all issues, pull requests! </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->

                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            You can unwatch this repository immediately by clicking here: <a
                                href="https://keenthemes.com/">Keenthemes.com</a> </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                            Most purchased Business courses during this sale! </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->

                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10 ">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                            provided </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->

                <!--begin::Message(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">Just now</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->

                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for out)-->

                <!--begin::Message(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                 src="assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">Just now</span>
                            </div>
                            <!--end::Details-->

                        </div>
                        <!--end::User-->

                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            Right before vacation season we have the next Big Deal for you. </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                      placeholder="Type a message">

            </textarea>
            <!--end::Input-->

            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-paper-clip fs-3"></i> </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-cloud-add fs-3"><span class="path1"></span><span
                                class="path2"></span></i> </button>
                </div>
                <!--end::Actions-->

                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->

<!--begin::Chat drawer-->
<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"
     data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
     data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">

    <!--begin::Messenger-->
    <div class="card card-flush w-100 rounded-0">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Title-->
            <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">

            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                        <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                        <a href="#"
                           class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i> </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i> </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="assets/media/stock/600x400/img-1.jpg" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                        <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                        <a href="#"
                           class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i> </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i> </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="assets/media/stock/600x400/img-3.jpg" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                        <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                        <a href="#"
                           class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i> </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i> </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="assets/media/stock/600x400/img-8.jpg" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                        <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                        <a href="#"
                           class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i> </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i> </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="assets/media/stock/600x400/img-26.jpg" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                        <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                        <a href="#"
                           class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i> </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i> </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="assets/media/stock/600x400/img-21.jpg" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                        <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                        <a href="#"
                           class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i> </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i> </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="assets/media/stock/600x400/img-34.jpg" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->


            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column me-3">
                    <!--begin::Section-->
                    <div class="mb-3">
                        <a href="apps/ecommerce/sales/details.html"
                           class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                        <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                        <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                        <span class="text-muted mx-2">for</span>
                        <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                        <a href="#"
                           class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                            <i class="ki-duotone ki-minus fs-4"></i> </a>

                        <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                            <i class="ki-duotone ki-plus fs-4"></i> </a>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Pic-->
                <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                    <img src="assets/media/stock/600x400/img-27.jpg" alt="" />
                </div>
                <!--end::Pic-->
            </div>
            <!--end::Item-->



        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer">
            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Total</span>
                <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
            </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Sub total</span>
                <span class="text-primary fw-bolder fs-5">$ 246.35</span>
            </div>
            <!--end::Item-->

            <!--end::Action-->
            <div class="d-flex justify-content-end mt-9">
                <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers--><!--end::Main-->

<!--begin::Engage modals-->
<!--begin::Modal - Sitemap-->
<div class="modal fade bg-dark bg-opacity-75" id="kt_app_engage_prebuilts_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-5 p-lg-10" id="kt_engage_prebuilts_modal_dialog">
        <!--begin::Modal content-->
        <div class="modal-content rounded-4">
            <!--begin::Modal header-->
            <div class="modal-header flex-stack border-0 px-10 pt-5 pb-0" id="kt_engage_prebuilts_header">
                <!--begin::View menu-->
                <div id="kt_app_engage_prebuilts_view_menu" class="position-relative z-index-1">
                    <!--begin::Toggle-->
                    <button type="button" data-kt-element="selected" class="btn btn-flex px-0 rotate-"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                            data-kt-menu-offset="0px, -1px">
                        <!--begin::Title-->
                        <span class="fs-6 fw-bold text-gray-600 me-2" data-kt-element="title">
                                Image View
                            </span>
                        <!--end::Title-->

                        <!--begin::Arrow-->
                        <i class="ki-duotone ki-down fs-4 text-gray-600 rotate-180-"></i> <!--end::Arrow-->
                    </button>
                    <!--end::Toggle-->

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-active-bg menu-state-primary menu-gray-600 menu-rounded w-150px py-3 px-3"
                         data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a href="#" class="menu-link px-4 py-2 active" data-kt-mode="image">
                                Image View
                            </a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a href="#" class="menu-link px-4 py-2" data-kt-mode="text">
                                Text View
                            </a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::View menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1"
                     data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross-square fs-1"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-5 px-15 mt-n5" id="kt_app_engage_prebuilts_body">
                <div class="container-fluid">

                    <style>
                        .app-prebuilts-thumbnail {
                            border: 1px solid var(--kt-body-bg);
                            filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12));
                        }
                    </style>

                    <!--begin::Image view-->
                    <div class="d-block" id="kt_app_engage_prebuilts_view_image">
                        <!--begin::Tabs wrapper-->
                        <div class="d-flex flex-center" id="kt_app_engage_prebuilts_view_image_tabs">
                            <!--begin::Tabs-->
                            <ul class="nav nav-tabs border-0 mb-5">
                                <!--begin::Tab item-->
                                <li class="nav-item px-2">
                                    <!--begin::Tab link-->
                                    <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_demos">

                                        Layouts </a>
                                    <!--end::Tab link-->
                                </li>
                                <!--end::Tab item-->
                                <!--begin::Tab item-->
                                <li class="nav-item px-2">
                                    <!--begin::Tab link-->
                                    <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_dashboards">

                                        Dashboards </a>
                                    <!--end::Tab link-->
                                </li>
                                <!--end::Tab item-->
                                <!--begin::Tab item-->
                                <li class="nav-item px-2">
                                    <!--begin::Tab link-->
                                    <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages">

                                        Pages </a>
                                    <!--end::Tab link-->
                                </li>
                                <!--end::Tab item-->
                                <!--begin::Tab item-->
                                <li class="nav-item px-2">
                                    <!--begin::Tab link-->
                                    <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_apps">

                                        Apps </a>
                                    <!--end::Tab link-->
                                </li>
                                <!--end::Tab item-->
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Tabs wrapper-->

                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_demos" role="tabpanel">
                                <!--begin::Scroll wrapper-->
                                <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true"
                                     data-kt-scroll-height="auto"
                                     data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                                     data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                                     data-kt-scroll-offset="215px">

                                    <!--begin::Row-->
                                    <div class="row gy-10">


                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Metronic Original </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo1.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo2/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    SaaS App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo2.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo39/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Billing SaaS </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo39.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo31/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Marketing Automation </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo31.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo9/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Sales Manager </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo9.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo38/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Email Marketing </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo38.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo30/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Sales Tracking App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo30.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo6/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Time Reporting </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo6.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo60/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    CRM Dashboard </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo60.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="index.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Analytics App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo8.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo62/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Project Scheduler </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo62.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo58/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Store Dashboard </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo58.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo56/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Budgeting App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo56.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo34/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Finance Analytics </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo34.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo27/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Databox Dashboard </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo27.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo29/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Project Workspace </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo29.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo57/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Billing System </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo57.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo3/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    New Trend </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo3.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo36/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Digital Marketing </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo36.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo20/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    CRM Software </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo20.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo59/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Todo App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo59.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo55/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Backend Console </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo55.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo51/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Payroll App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo51.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo10/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Project Grid </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo10.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo61/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Property Portal </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo61.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo52/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Site Builder </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo52.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo63/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Discussion Board </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo63.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo40/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    HR App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo40.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo23/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Member Dashboard </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo23.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo64/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Voice Call App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo64.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo35/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Traffic Analytics </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo35.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo33/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Social Campaings </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo33.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo19/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Reports Panel </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo19.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo25/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    User Guiding App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo25.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo50/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Micro-SaaS App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo50.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo32/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Delivery Management </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo32.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo37/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Cloud Suite </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo37.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo42/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Calendar Workspace </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo42.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo5/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Support Forum </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo5.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo16/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Podcast App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo16.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo4/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Jobs Site </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo4.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo53/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Healthcare Dashboard </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo53.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo7/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    HR Dashboard </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo7.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo21/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Monochrome App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo21.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo24/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Helpdesk App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo24.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo28/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    eCommerce App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo28.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo44/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Recruit Automation </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo44.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo11/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Finance Planner </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo11.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo26/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Planable App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo26.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo22/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Media Publisher </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo22.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo41/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Business Intelligence </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo41.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo18/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Goal Tracking </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo18.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo54/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Workspace App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo54.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo15/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Crypto Planner </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo15.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo14/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Project Workplace </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo14.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo13/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Classic Dashboard </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo13.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo12/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Data Analyzer </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo12.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo48/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Cloud ERP </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo48.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo17/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Events Scheduler </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo17.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo49/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    KPI Tracking </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo49.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo43/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Healthcare Dashboard </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo43.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo45/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    OKR Tracking </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo45.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo47/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Campaign Automation </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo47.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">


                                            <!--begin::Preview-->
                                            <a href="https://preview.keenthemes.com/metronic8/demo46/index.html"
                                               data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Audit Board App </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/demos/demo46.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->


                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Scroll wrapper-->
                            </div>
                            <div class="pt-5 tab-pane fade show active" id="kt_app_engage_prebuilts_tab_dashboards"
                                 role="tabpanel">
                                <!--begin::Scroll wrapper-->
                                <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true"
                                     data-kt-scroll-height="auto"
                                     data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                                     data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                                     data-kt-scroll-offset="215px">

                                    <!--begin::Row-->
                                    <div class="row gy-10">



                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="index.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Multipurpose </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/multipurpose-demo8.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/marketing.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Marketing </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/marketing.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/social.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Social </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/social.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/ecommerce.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Ecommerce </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/ecommerce.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/store-analytics.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Store-analytics </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/store-analytics.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/logistics.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Logistics </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/logistics.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/delivery.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Delivery </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/delivery.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/online-courses.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Online-courses </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/online-courses.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/school.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    School </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/school.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/crypto.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Crypto </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/crypto.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/finance-performance.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Finance-performance </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/finance-performance.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/website-analytics.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Website-analytics </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/website-analytics.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/bidding.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Bidding </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/bidding.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/podcast.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Podcast </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/podcast.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/projects.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Projects </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/projects.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/call-center.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Call-center </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/call-center.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-md-4">

                                            <!--begin::Preview-->
                                            <a href="dashboards/pos.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    POS </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/dashboards/pos.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Scroll wrapper-->
                            </div>
                            <div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_apps" role="tabpanel">
                                <!--begin::Scroll wrapper-->
                                <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true"
                                     data-kt-scroll-height="auto"
                                     data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                                     data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                                     data-kt-scroll-offset="215px">

                                    <!--begin::Row-->
                                    <div class="row gy-10">


                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/projects/list.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Projects </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/projects.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/ecommerce/catalog/products.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Ecommerce </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/ecommerce.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/customers/list.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Customers </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/customers.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/subscriptions/list.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Subscriptions </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/subscriptions.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/user-management/users/list.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    User Management </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/user-management.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/invoices/create.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Invoices </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/invoices.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/support-center/overview.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Support Center </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/support-center.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/chat/private.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Chat </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/chat.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/calendar.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Calendar </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/calendar.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/file-manager/folders.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    File Manager </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/file-manager.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/inbox/listing.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Inbox </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/inbox.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-4">

                                            <!--begin::Preview-->
                                            <a href="apps/contacts/getting-started.html" data-kt-href="true"
                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                <!--begin::Title-->
                                                <h3
                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                    Contacts </h3>
                                                <!--end::Title-->

                                                <!--begin::Thumbnail-->
                                                <span
                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/apps/contacts.png"
                                                             class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                <!--end::Thumbnail-->
                                            </a>
                                            <!--end::Preview-->
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Scroll wrapper-->
                            </div>

                            <div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages">

                                <!--begin::Tabs wrapper-->
                                <div class="d-flex flex-center mb-5">
                                    <div class="border-bottom">
                                        <!--begin::Tabs-->
                                        <ul
                                            class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold m-0 p-0 gap-4">
                                            <!--begin::Tab item-->
                                            <li class="nav-item p-0 m-0">
                                                <!--begin::Tab link-->
                                                <a class="nav-link text-muted text-active-primary pt-0 pb-4
						active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_authentication">

                                                    Authentication </a>
                                                <!--end::Tab link-->
                                            </li>
                                            <!--end::Tab item-->
                                            <!--begin::Tab item-->
                                            <li class="nav-item p-0 m-0">
                                                <!--begin::Tab link-->
                                                <a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_general">

                                                    General </a>
                                                <!--end::Tab link-->
                                            </li>
                                            <!--end::Tab item-->
                                            <!--begin::Tab item-->
                                            <li class="nav-item p-0 m-0">
                                                <!--begin::Tab link-->
                                                <a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_account">

                                                    Account </a>
                                                <!--end::Tab link-->
                                            </li>
                                            <!--end::Tab item-->
                                            <!--begin::Tab item-->
                                            <li class="nav-item p-0 m-0">
                                                <!--begin::Tab link-->
                                                <a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_modals">

                                                    Modals </a>
                                                <!--end::Tab link-->
                                            </li>
                                            <!--end::Tab item-->
                                            <!--begin::Tab item-->
                                            <li class="nav-item p-0 m-0">
                                                <!--begin::Tab link-->
                                                <a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_wizards">

                                                    Wizards </a>
                                                <!--end::Tab link-->
                                            </li>
                                            <!--end::Tab item-->
                                            <!--begin::Tab item-->
                                            <li class="nav-item p-0 m-0">
                                                <!--begin::Tab link-->
                                                <a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_search">

                                                    Search </a>
                                                <!--end::Tab link-->
                                            </li>
                                            <!--end::Tab item-->
                                            <!--begin::Tab item-->
                                            <li class="nav-item p-0 m-0">
                                                <!--begin::Tab link-->
                                                <a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_widgets">

                                                    Widgets </a>
                                                <!--end::Tab link-->
                                            </li>
                                            <!--end::Tab item-->
                                            <!--begin::Tab item-->
                                            <li class="nav-item p-0 m-0">
                                                <!--begin::Tab link-->
                                                <a class="nav-link text-muted text-active-primary pt-0 pb-4
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_email-templates">

                                                    Email Templates </a>
                                                <!--end::Tab link-->
                                            </li>
                                            <!--end::Tab item-->
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                </div>
                                <!--end::Tabs wrapper-->

                                <!--begin::Scroll wrapper-->
                                <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true"
                                     data-kt-scroll-height="auto"
                                     data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image"
                                     data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
                                     data-kt-scroll-offset="250px">

                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active"
                                             id="kt_app_engage_prebuilts_tab_pages_authentication" role="tabpanel">


                                            <!--begin::Row-->
                                            <div class="row g-10">

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/layouts/corporate/sign-in.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Corporate </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-corporate.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/layouts/creative/sign-in.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Creative </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-creative.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/layouts/fancy/sign-in.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Fancy </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-fancy.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/layouts/overlay/sign-in.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Overlay </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-overlay.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/extended/multi-steps-sign-up.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Multi-Step </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-multistep.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/layouts/corporate/two-factor.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Two-Factor </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-2factor.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/general/password-confirmation.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Password Changed </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-passwordchanged.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/general/verify-email.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Verify Email </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-verifyemail.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/general/welcome.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Welcome </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-welcome.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/general/coming-soon.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Coming Soon </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-comingsoon.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/general/account-deactivated.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Account Deactivated </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-accountdeactivated.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/general/error-404.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            404 Page </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-404.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/general/error-500.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            505 Page </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/auth-500.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                        <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_general"
                                             role="tabpanel">

                                            <div class="mb-5">
                                                <!--begin::Collapse toggle-->
                                                <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active"
                                                   data-bs-toggle="collapse"
                                                   href="#kt_app_engage_prebuilts_tab_pages_general_user-profile">

                                                        <span class="fw-bolder fs-2">
                                                            User Profile </span>

                                                    <i
                                                        class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                    <i
                                                        class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </a>
                                                <!--end::Collapse toggle-->

                                                <!--begin::Collapse content-->
                                                <div class="show"
                                                     id="kt_app_engage_prebuilts_tab_pages_general_user-profile">
                                                    <!--begin::Row-->
                                                    <div class="row g-10 pt-2 pb-5">

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/user-profile/overview.html"
                                                               data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Profile Overview </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/profile-overview.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/user-profile/projects.html"
                                                               data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    User Projects </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/profile-overview.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/user-profile/campaigns.html"
                                                               data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    User Campaigns </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/profile-campaigns.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/user-profile/documents.html"
                                                               data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    User Documents </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/profile-documents.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/user-profile/followers.html"
                                                               data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    User Followers </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/profile-followers.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/user-profile/activity.html"
                                                               data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    User Activity </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/profile-activity.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Collapse content-->
                                            </div>
                                            <div class="mb-5">
                                                <!--begin::Collapse toggle-->
                                                <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                                                   data-bs-toggle="collapse"
                                                   href="#kt_app_engage_prebuilts_tab_pages_general_corporate">

                                                        <span class="fw-bolder fs-2">
                                                            Corporate </span>

                                                    <i
                                                        class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                    <i
                                                        class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </a>
                                                <!--end::Collapse toggle-->

                                                <!--begin::Collapse content-->
                                                <div class="collapse"
                                                     id="kt_app_engage_prebuilts_tab_pages_general_corporate">
                                                    <!--begin::Row-->
                                                    <div class="row g-10 pt-2 pb-5">

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/about.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    About Us </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/corporate-aboutus.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/contact.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Contact Us </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/corporate-contactus.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/licenses.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    License </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/corporate-license.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/team.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Our Team </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/corporate-ourteam.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/sitemap.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Sitemap </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/corporate-sitemap.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Collapse content-->
                                            </div>
                                            <div class="mb-5">
                                                <!--begin::Collapse toggle-->
                                                <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                                                   data-bs-toggle="collapse"
                                                   href="#kt_app_engage_prebuilts_tab_pages_general_social">

                                                        <span class="fw-bolder fs-2">
                                                            Social </span>

                                                    <i
                                                        class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                    <i
                                                        class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </a>
                                                <!--end::Collapse toggle-->

                                                <!--begin::Collapse content-->
                                                <div class="collapse"
                                                     id="kt_app_engage_prebuilts_tab_pages_general_social">
                                                    <!--begin::Row-->
                                                    <div class="row g-10 pt-2 pb-5">

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/social/feeds.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Activity </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/social-activity.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/social/activity.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Feeds </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/social-feeds.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/social/followers.html"
                                                               data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Followers </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/social-followers.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/social/settings.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Settings </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/social-settings.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Collapse content-->
                                            </div>
                                            <div class="mb-5">
                                                <!--begin::Collapse toggle-->
                                                <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                                                   data-bs-toggle="collapse"
                                                   href="#kt_app_engage_prebuilts_tab_pages_general_others">

                                                        <span class="fw-bolder fs-2">
                                                            Others </span>

                                                    <i
                                                        class="ki-duotone ki-plus-square toggle-off text-primary fs-2 ms-4"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                    <i
                                                        class="ki-duotone ki-minus-square toggle-on text-primary fs-2 ms-4"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </a>
                                                <!--end::Collapse toggle-->

                                                <!--begin::Collapse content-->
                                                <div class="collapse"
                                                     id="kt_app_engage_prebuilts_tab_pages_general_others">
                                                    <!--begin::Row-->
                                                    <div class="row g-10 pt-2 pb-5">

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/faq/classic.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    FAQ Classic </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/faq-classic.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/faq/extended.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    FAQ Extended </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/faq-extended.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/blog/home.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Blog Home </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/blog-home.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        <div class="col-lg-4">

                                                            <!--begin::Preview-->
                                                            <a href="pages/blog/post.html" data-kt-href="true"
                                                               class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                <!--begin::Title-->
                                                                <h3
                                                                    class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                    Blog Post </h3>
                                                                <!--end::Title-->

                                                                <!--begin::Thumbnail-->
                                                                <span
                                                                    class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="assets/media/preview/demos/placeholder.jpg"
                                                                             data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/blog-post.png"
                                                                             class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                <!--end::Thumbnail-->
                                                            </a>
                                                            <!--end::Preview-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Collapse content-->
                                            </div>


                                        </div>
                                        <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_account"
                                             role="tabpanel">


                                            <!--begin::Row-->
                                            <div class="row g-10">

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="account/overview.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Overview </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/account-overview.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="account/settings.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Settings </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/account-settings.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="account/billing.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Billing </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/account-billing.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="account/security.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Security </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/account-security.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="account/referrals.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Referrals </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/account-referrals.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="account/logs.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Logs </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/account-logs.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="account/api-keys.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            API Keys </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/account-apikeys.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="account/statements.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Statements </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/account-statements.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="account/billing.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Billing </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/account-billing.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                        <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_modals"
                                             role="tabpanel">


                                            <!--begin::Row-->
                                            <div class="row g-10">

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/general/view-users.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            View Friends </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-viewfriends.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/general/upgrade-plan.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Upgrade Plan </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-upgradeplan.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/wizards/top-up-wallet.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Topup Wallet </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-topupwallet.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/general/share-earn.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Share & Earn </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-shareandearn.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/general/select-users.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Select User </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-selectuser.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/forms/bidding.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Place Bid </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-placeyourbid.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/wizards/offer-a-deal.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Offer Deal </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-offeradeal.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/forms/new-target.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            New Target </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-newtarget.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/forms/new-card.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            New Card </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-newcard.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/forms/new-address.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            New Address </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-newaddress.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/general/invite-friends.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Invite Friend </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-invitefriend.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/wizards/create-project.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Create Project </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-createproject.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/wizards/create-campaign.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Create Campaign </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-createcampaign.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/wizards/create-account.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Create Business Account </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-createbusinessacc.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/wizards/create-app.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Create App </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-createapp.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/forms/create-api-key.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Create Api Key </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-createapikey.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/modals/wizards/two-factor-authentication.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            2 Factor Auth </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/modal-2factorauth.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                        <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_wizards"
                                             role="tabpanel">


                                            <!--begin::Row-->
                                            <div class="row g-10">

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/wizards/horizontal.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            2 Factor Auth </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/wizard-2factorauth.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/wizards/horizontal.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Horizontal </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/wizard-horizontal.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/wizards/vertical.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Vertical </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/wizard-vertical.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                        <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_search"
                                             role="tabpanel">


                                            <!--begin::Row-->
                                            <div class="row g-10">

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/search/users.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Search Users </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/search-users.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/search/horizontal.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Search Horizontal </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/search-horizontal.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/search/vertical.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Search Vertical </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/search-vertical.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="utilities/search/select-location.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Search Location </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/search-location.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                        <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_widgets"
                                             role="tabpanel">


                                            <!--begin::Row-->
                                            <div class="row g-10">

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="widgets/charts.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Charts </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/widgets-charts.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="widgets/feeds.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Feeds </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/widgets-feeds.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="widgets/lists.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Lists </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/widgets-lists.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="widgets/mixed.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Mixed </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/widgets-mixed.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="widgets/statistics.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Statistics </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/widgets-stats.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="widgets/tables.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Tables </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/widgets-tables.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                        <div class="tab-pane fade "
                                             id="kt_app_engage_prebuilts_tab_pages_email-templates" role="tabpanel">


                                            <!--begin::Row-->
                                            <div class="row g-10">

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/email/welcome-message.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Welcome </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/email-welcome.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/email/subscription-confirmed.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Subscription Confirmed </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/email/reset-password.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Reset Password </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/email-resetpassword.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/email/card-declined.html"
                                                       data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Card Declined </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/email-creditcarddeclined.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/email/promo-1.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Promotion 1 </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/email-promo1.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/email/promo-2.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Promotion 2 </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/email-promo2.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-4">

                                                    <!--begin::Preview-->
                                                    <a href="authentication/email/promo-3.html" data-kt-href="true"
                                                       class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                        <!--begin::Title-->
                                                        <h3
                                                            class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                            Promotion 3 </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Thumbnail-->
                                                        <span
                                                            class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="assets/media/preview/demos/placeholder.jpg"
                                                                     data-src="/metronic8/demo8/assets/media/preview/prebuilts/pages/email-promo3.png"
                                                                     class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                        <!--end::Thumbnail-->
                                                    </a>
                                                    <!--end::Preview-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Scroll wrapper-->
                            </div>
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Image view-->
                    <!--begin::Text view-->
                    <div class="pt-2 d-none" id="kt_app_engage_prebuilts_view_text">
                        <!--begin::Heading-->
                        <h1 class="fs-2x text-gray-900 fw-bolder text-center mb-4"
                            id="kt_app_engage_prebuilts_view_text_heading">
                            Sitemap
                        </h1>
                        <!--end::Heading-->

                        <!--begin::Wrapper-->
                        <div id="kt_app_engage_prebuilts_view_text_heading" class="hover-scroll-y pe-12 me-n12"
                             data-kt-scroll="true" data-kt-scroll-height="auto"
                             data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text"
                             data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
                             data-kt-scroll-offset="190px">
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">

                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Layouts
                                </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">


                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo1/index.html">
                                                Metronic Original </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo2/index.html">
                                                SaaS App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo39/index.html">
                                                Billing SaaS </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo31/index.html">
                                                Marketing Automation </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo9/index.html">
                                                Sales Manager </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo38/index.html">
                                                Email Marketing </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo30/index.html">
                                                Sales Tracking App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo6/index.html">
                                                Time Reporting </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo60/index.html">
                                                CRM Dashboard </a>




                                            <a class="fw-6 fw-semibold" href="index.html">
                                                Analytics App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo62/index.html">
                                                Project Scheduler </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo58/index.html">
                                                Store Dashboard </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo56/index.html">
                                                Budgeting App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo34/index.html">
                                                Finance Analytics </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo27/index.html">
                                                Databox Dashboard </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo29/index.html">
                                                Project Workspace </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">


                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo57/index.html">
                                                Billing System </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo3/index.html">
                                                New Trend </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo36/index.html">
                                                Digital Marketing </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo20/index.html">
                                                CRM Software </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo59/index.html">
                                                Todo App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo55/index.html">
                                                Backend Console </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo51/index.html">
                                                Payroll App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo10/index.html">
                                                Project Grid </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo61/index.html">
                                                Property Portal </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo52/index.html">
                                                Site Builder </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo63/index.html">
                                                Discussion Board </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo40/index.html">
                                                HR App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo23/index.html">
                                                Member Dashboard </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo64/index.html">
                                                Voice Call App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo35/index.html">
                                                Traffic Analytics </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo33/index.html">
                                                Social Campaings </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">


                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo19/index.html">
                                                Reports Panel </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo25/index.html">
                                                User Guiding App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo50/index.html">
                                                Micro-SaaS App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo32/index.html">
                                                Delivery Management </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo37/index.html">
                                                Cloud Suite </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo42/index.html">
                                                Calendar Workspace </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo5/index.html">
                                                Support Forum </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo16/index.html">
                                                Podcast App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo4/index.html">
                                                Jobs Site </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo53/index.html">
                                                Healthcare Dashboard </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo7/index.html">
                                                HR Dashboard </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo21/index.html">
                                                Monochrome App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo24/index.html">
                                                Helpdesk App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo28/index.html">
                                                eCommerce App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo44/index.html">
                                                Recruit Automation </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo11/index.html">
                                                Finance Planner </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">


                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo26/index.html">
                                                Planable App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo22/index.html">
                                                Media Publisher </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo41/index.html">
                                                Business Intelligence </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo18/index.html">
                                                Goal Tracking </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo54/index.html">
                                                Workspace App </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo15/index.html">
                                                Crypto Planner </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo14/index.html">
                                                Project Workplace </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo13/index.html">
                                                Classic Dashboard </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo12/index.html">
                                                Data Analyzer </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo48/index.html">
                                                Cloud ERP </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo17/index.html">
                                                Events Scheduler </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo49/index.html">
                                                KPI Tracking </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo43/index.html">
                                                Healthcare Dashboard </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo45/index.html">
                                                OKR Tracking </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo47/index.html">
                                                Campaign Automation </a>




                                            <a class="fw-6 fw-semibold"
                                               href="https://preview.keenthemes.com/metronic8/demo46/index.html">
                                                Audit Board App </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                            </div>
                            <!--end::Section-->



                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">

                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Dashboards
                                </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="index.html">
                                                Dashboard </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/marketing.html">
                                                Marketing Dashboard </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/social.html">
                                                Social Dashboard </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/ecommerce.html">
                                                eCommerce Dashboard </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/store-analytics.html">
                                                Store Analytics </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->


                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="dashboards/logistics.html">
                                                Logistics </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/delivery.html">
                                                Delivery </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/online-courses.html">
                                                Online Courses </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/school.html">
                                                Hello Tyler </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/crypto.html">
                                                My Balance: 37,045$ </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->


                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="dashboards/finance-performance.html">
                                                Finance Performance </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/website-analytics.html">
                                                Website Analytics </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/bidding.html">
                                                Bidding Dashboard </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/podcast.html">
                                                Podcast Dashboard </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/projects.html">
                                                Projects Dashboard </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->


                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="dashboards/call-center.html">
                                                Call Center </a>




                                            <a class="fw-6 fw-semibold" href="dashboards/pos.html">
                                                POS System </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->

                            </div>
                            <!--end::Section-->



                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">

                            </div>
                            <!--end::Section-->


                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - Authentication </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold"
                                               href="authentication/layouts/corporate/sign-in.html">
                                                Corporate </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/layouts/creative/sign-in.html">
                                                Creative </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/layouts/fancy/sign-in.html">
                                                Fancy </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/layouts/overlay/sign-in.html">
                                                Overlay </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold"
                                               href="authentication/extended/multi-steps-sign-up.html">
                                                Multi-Step </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/layouts/corporate/two-factor.html">
                                                Two-Factor </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/general/password-confirmation.html">
                                                Password Changed </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/general/verify-email.html">
                                                Verify Email </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="authentication/general/welcome.html">
                                                Welcome </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/general/coming-soon.html">
                                                Coming Soon </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/general/account-deactivated.html">
                                                Account Deactivated </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/general/error-404.html">
                                                404 Page </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold"
                                               href="authentication/general/error-500.html">
                                                505 Page </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - Account </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="account/overview.html">
                                                Overview </a>



                                            <a class="fw-6 fw-semibold" href="account/settings.html">
                                                Settings </a>



                                            <a class="fw-6 fw-semibold" href="account/billing.html">
                                                Billing </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="account/security.html">
                                                Security </a>



                                            <a class="fw-6 fw-semibold" href="account/referrals.html">
                                                Referrals </a>



                                            <a class="fw-6 fw-semibold" href="account/logs.html">
                                                Logs </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="account/api-keys.html">
                                                API Keys </a>



                                            <a class="fw-6 fw-semibold" href="account/statements.html">
                                                Statements </a>



                                            <a class="fw-6 fw-semibold" href="account/billing.html">
                                                Billing </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - Modals </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/general/view-users.html">
                                                View Friends </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/general/upgrade-plan.html">
                                                Upgrade Plan </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/wizards/top-up-wallet.html">
                                                Topup Wallet </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/general/share-earn.html">
                                                Share & Earn </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/general/select-users.html">
                                                Select User </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="utilities/modals/forms/bidding.html">
                                                Place Bid </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/wizards/offer-a-deal.html">
                                                Offer Deal </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/forms/new-target.html">
                                                New Target </a>



                                            <a class="fw-6 fw-semibold" href="utilities/modals/forms/new-card.html">
                                                New Card </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/forms/new-address.html">
                                                New Address </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/general/invite-friends.html">
                                                Invite Friend </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/wizards/create-project.html">
                                                Create Project </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/wizards/create-campaign.html">
                                                Create Campaign </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/wizards/create-account.html">
                                                Create Business Account </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/wizards/create-app.html">
                                                Create App </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/forms/create-api-key.html">
                                                Create Api Key </a>



                                            <a class="fw-6 fw-semibold"
                                               href="utilities/modals/wizards/two-factor-authentication.html">
                                                2 Factor Auth </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - Wizards </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="utilities/wizards/horizontal.html">
                                                2 Factor Auth </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="utilities/wizards/horizontal.html">
                                                Horizontal </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="utilities/wizards/vertical.html">
                                                Vertical </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - Search </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="utilities/search/users.html">
                                                Search Users </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="utilities/search/horizontal.html">
                                                Search Horizontal </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="utilities/search/vertical.html">
                                                Search Vertical </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold"
                                               href="utilities/search/select-location.html">
                                                Search Location </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - Widgets </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="widgets/charts.html">
                                                Charts </a>



                                            <a class="fw-6 fw-semibold" href="widgets/feeds.html">
                                                Feeds </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="widgets/lists.html">
                                                Lists </a>



                                            <a class="fw-6 fw-semibold" href="widgets/mixed.html">
                                                Mixed </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="widgets/statistics.html">
                                                Statistics </a>



                                            <a class="fw-6 fw-semibold" href="widgets/tables.html">
                                                Tables </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - Email Templates </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold"
                                               href="authentication/email/welcome-message.html">
                                                Welcome </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/email/subscription-confirmed.html">
                                                Subscription Confirmed </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold"
                                               href="authentication/email/reset-password.html">
                                                Reset Password </a>



                                            <a class="fw-6 fw-semibold"
                                               href="authentication/email/card-declined.html">
                                                Card Declined </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="authentication/email/promo-1.html">
                                                Promotion 1 </a>



                                            <a class="fw-6 fw-semibold" href="authentication/email/promo-2.html">
                                                Promotion 2 </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="authentication/email/promo-3.html">
                                                Promotion 3 </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - General - User Profile </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/user-profile/overview.html">
                                                Profile Overview </a>



                                            <a class="fw-6 fw-semibold" href="pages/user-profile/projects.html">
                                                User Projects </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/user-profile/campaigns.html">
                                                User Campaigns </a>



                                            <a class="fw-6 fw-semibold" href="pages/user-profile/documents.html">
                                                User Documents </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/user-profile/followers.html">
                                                User Followers </a>



                                            <a class="fw-6 fw-semibold" href="pages/user-profile/activity.html">
                                                User Activity </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - General - Corporate </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/about.html">
                                                About Us </a>



                                            <a class="fw-6 fw-semibold" href="pages/contact.html">
                                                Contact Us </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/licenses.html">
                                                License </a>



                                            <a class="fw-6 fw-semibold" href="pages/team.html">
                                                Our Team </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/sitemap.html">
                                                Sitemap </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - General - Social </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/social/feeds.html">
                                                Activity </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/social/activity.html">
                                                Feeds </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/social/followers.html">
                                                Followers </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/social/settings.html">
                                                Settings </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <div class="mb-10 mb-lg-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Pages - General - Others </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/faq/classic.html">
                                                FAQ Classic </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/faq/extended.html">
                                                FAQ Extended </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/blog/home.html">
                                                Blog Home </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="pages/blog/post.html">
                                                Blog Post </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->



                            <!--begin::Section-->
                            <div class="">

                                <!--begin::Title-->
                                <h3 class="text-gray-900 fw-bolder mb-7">
                                    Apps
                                </h3>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="apps/projects/list.html">
                                                Projects </a>



                                            <a class="fw-6 fw-semibold" href="apps/ecommerce/catalog/products.html">
                                                Ecommerce </a>



                                            <a class="fw-6 fw-semibold" href="apps/customers/list.html">
                                                Customers </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="apps/subscriptions/list.html">
                                                Subscriptions </a>



                                            <a class="fw-6 fw-semibold" href="apps/user-management/users/list.html">
                                                User Management </a>



                                            <a class="fw-6 fw-semibold" href="apps/invoices/create.html">
                                                Invoices </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="apps/support-center/overview.html">
                                                Support Center </a>



                                            <a class="fw-6 fw-semibold" href="apps/chat/private.html">
                                                Chat </a>



                                            <a class="fw-6 fw-semibold" href="apps/calendar.html">
                                                Calendar </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::List-->
                                        <div class="d-flex flex-column gap-3 gap-lg-5">

                                            <a class="fw-6 fw-semibold" href="apps/file-manager/folders.html">
                                                File Manager </a>



                                            <a class="fw-6 fw-semibold" href="apps/inbox/listing.html">
                                                Inbox </a>



                                            <a class="fw-6 fw-semibold" href="apps/contacts/getting-started.html">
                                                Contacts </a>

                                        </div>
                                        <!--end::List-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                            </div>
                            <!--end::Section-->



                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Text view--->
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Sitemap--> <!--end::Engage modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
</div>
<!--end::Scrolltop-->

<!--begin::Modals-->

<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check out
                        <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bold w-100 mb-8">
                    <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />
                    Invite Gmail Contacts
                </div>
                <!--end::Google Contacts Invite-->

                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->

                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3"
                          placeholder="Type or paste emails here">
                </textarea>
                <!--end::Textarea-->

                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                    <!--end::Heading-->

                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                        Smith</a>

                                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                        Macy</a>

                                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected>Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                        Smith</a>

                                    <div class="fw-semibold text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                        Bean</a>

                                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                        Cox</a>

                                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                        Collins</a>

                                    <div class="fw-semibold text-muted">mik@pex.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                        Mitcham</a>

                                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                        Wild</a>

                                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                        Owen</a>

                                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected>Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                        Wilson</a>

                                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                        Bold</a>

                                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                        Crown</a>

                                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected>Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                        Doe</a>

                                    <div class="fw-semibold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                        Miller</a>

                                    <div class="fw-semibold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">
                                            L </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                        Kunic</a>

                                    <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected>Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                        Wilder</a>

                                    <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1" selected>Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 ">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                        Crown</a>

                                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected>Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->

                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->

                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />

                        <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend--><!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>

                    <div class="text-muted fw-semibold fs-5">
                        Invite Collaborators To Your Project
                    </div>
                </div>
                <!--end::Content-->

                <!--begin::Search-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                     data-kt-search-enter="enter" data-kt-search-layout="inline">

                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->

                        <!--begin::Icon-->
                        <i
                            class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                                class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15"
                               name="search" value="" placeholder="Search by username, full name or email..."
                               data-kt-search-element="input" />
                        <!--end::Input-->

                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                              data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                        <!--end::Spinner-->

                        <!--begin::Reset-->
                        <span
                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                            data-kt-search-element="clear">
                                <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span
                                        class="path2"></span></i> </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->

                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold mb-5">Recently searched:</h3>
                            <!--end::Heading-->

                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                        <span class="badge badge-light">Art Director</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                        <span class="badge badge-light">Marketing Analytic</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                        <span class="badge badge-light">Software Enginer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                        <span class="badge badge-light">Web Developer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                        <span class="badge badge-light">UI/UX Designer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Suggestions-->

                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                   value="0" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                Smith</a>

                                            <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected>Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                   value="1" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                Macy</a>

                                            <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected>Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                   value="2" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                Smith</a>

                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected>Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                   value="3" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                Bean</a>

                                            <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected>Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                   value="4" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                Cox</a>

                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected>Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                   value="5" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                Collins</a>

                                            <div class="fw-semibold text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected>Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                   value="6" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                Mitcham</a>

                                            <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected>Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                   value="7" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                Wild</a>

                                            <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected>Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                   value="8" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                Owen</a>

                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected>Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                   value="9" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                Wilson</a>

                                            <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected>Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                   value="10" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                Bold</a>

                                            <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected>Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                   value="11" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                Crown</a>

                                            <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected>Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                   value="12" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                Doe</a>

                                            <div class="fw-semibold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected>Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                   value="13" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                Miller</a>

                                            <div class="fw-semibold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected>Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                   value="14" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                Kunic</a>

                                            <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected>Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                   value="15" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                Wilder</a>

                                            <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected>Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->

                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->

                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                   value="16" />
                                        </label>
                                        <!--end::Checkbox-->

                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#"
                                               class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                Kunic</a>

                                            <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected>Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->


                            </div>
                            <!--end::Users-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">
                                    Cancel
                                </button>

                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
                                    Add Selected Users
                                </button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-semibold py-10">
                                <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->

                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="assets/media/illustrations/sketchy-1/1.png" alt=""
                                     class="w-100 h-200px h-sm-325px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search--> <!--end::Modals-->

<!--begin::Javascript-->
<script>
    var hostUrl = "assets/index.html";        </script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!-- SWEET ALERT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Valide',
            text: "{!! session('success') !!}"
        });
    </script>
@elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            text: "{!! session('error') !!}"
        });
    </script>
@elseif(session()->has('warning'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Votre attention',
            text: "{!! session('warning') !!}"
        });
    </script>
@elseif(session()->has('info'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Information',
            text: "{!! session('info') !!}"
        });
    </script>
@elseif($errors->any())
    <script>
        var errorMessages = "<ul>";
        @foreach ($errors->all() as $error)
            errorMessages += "<li>{{ $error }}</li>";
        @endforeach
            errorMessages += "</ul>";

        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            html: errorMessages
        });
    </script>
@endif
@yield('scripts')
<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
