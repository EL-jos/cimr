@extends('frontend.layouts.base')

@section('main-content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user">
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>        Filter
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Separator-->

                        <!--begin::Content-->
                        <div class="px-7 py-5" data-kt-user-table-filter="form">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Role:</label>
                                <select class="form-select form-select-solid fw-bold select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true" data-select2-id="select2-data-10-r31s" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    <option data-select2-id="select2-data-12-s2pu"></option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Analyst">Analyst</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Support">Support</option>
                                    <option value="Trial">Trial</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-e6fj" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-oh06-container" aria-controls="select2-oh06-container"><span class="select2-selection__rendered" id="select2-oh06-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
                                <select class="form-select form-select-solid fw-bold select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true" data-select2-id="select2-data-13-gwwi" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    <option data-select2-id="select2-data-15-0d4e"></option>
                                    <option value="Enabled">Enabled</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-gcil" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-va74-container" aria-controls="select2-va74-container"><span class="select2-selection__rendered" id="select2-va74-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Menu 1-->    <!--end::Filter-->

                    <!--begin::Export-->
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                        <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>        Export
                    </button>
                    <!--end::Export-->

                    <!--begin::Add user-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                        <i class="ki-duotone ki-plus fs-2"></i>        Add User
                    </button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-user-table-select="selected_count"></span> Selected
                    </div>

                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
                        Delete Selected
                    </button>
                </div>
                <!--end::Group actions-->

                <!--begin::Modal - Adjust Balance-->
                <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Export Users</h2>
                                <!--end::Modal title-->

                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->

                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="kt_modal_export_users_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold form-label mb-2">Select Roles:</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold select2-hidden-accessible" data-select2-id="select2-data-16-jhfb" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option data-select2-id="select2-data-18-yadg"></option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Analyst">Analyst</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Support">Support</option>
                                            <option value="Trial">Trial</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-17-s6b7" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-role-w6-container" aria-controls="select2-role-w6-container"><span class="select2-selection__rendered" id="select2-role-w6-container" role="textbox" aria-readonly="true" title="Select a role"><span class="select2-selection__placeholder">Select a role</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold select2-hidden-accessible" data-select2-id="select2-data-19-w1j7" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option data-select2-id="select2-data-21-3xsg"></option>
                                            <option value="excel">Excel</option>
                                            <option value="pdf">PDF</option>
                                            <option value="cvs">CVS</option>
                                            <option value="zip">ZIP</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-20-4vct" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-format-pv-container" aria-controls="select2-format-pv-container"><span class="select2-selection__rendered" id="select2-format-pv-container" role="textbox" aria-readonly="true" title="Select a format"><span class="select2-selection__placeholder">Select a format</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                                            Discard
                                        </button>

                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">
                                Submit
                            </span>
                                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Card-->

                <!--begin::Modal - Add task-->
                <div class="modal fade" id="kt_modal_add_user" tabindex="-1" style="display: none;" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_user_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Add User</h2>
                                <!--end::Modal title-->

                                {{--<!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->--}}
                            </div>
                            <!--end::Modal header-->

                            <!--begin::Modal body-->
                            <div class="modal-body px-5 my-7">
                                <!--begin::Form-->
                                <form class="form" action="{{ route('person.store') }}" method="post" enctype="multipart/form-data">
                                    <!--begin::Scroll-->
                                    <div
                                        class="d-flex flex-column scroll-y px-5 px-lg-10"
                                        id="kt_modal_add_user_scroll"
                                        data-kt-scroll="true"
                                        data-kt-scroll-activate="true"
                                        data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                        data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                        data-kt-scroll-offset="300px"
                                    >
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                                            <!--end::Label-->


                                            <!--begin::Image placeholder-->
                                            <style>
                                                .image-input-placeholder {
                                                    background-image: url('{{ asset('assets/media/svg/files/blank-image.svg')}}');
                                                }

                                                [data-bs-theme="dark"] .image-input-placeholder {
                                                    background-image: url('{{ asset('assets/media/svg/files/blank-image-dark.svg')}}');
                                                }
                                            </style>
                                            <!--end::Image placeholder-->
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('assets/media/avatars/300-6.jpg')}});"></div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg, .webp, .bmp, .gif" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                                </span>
                                                <!--end::Cancel-->

                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->

                                            <!--begin::Hint-->
                                            <div class="form-text">Allowed file types: png, jpg, jpeg, webp, bmp, gif.</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">First Name</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="firstname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Loubna" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">Last Name</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" name="lastname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Last name" value="IGUERMAZDA" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">Birthday</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="date" name="birthdate" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="YYYY-MM-dd" value="2002-03-01" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">Number of children</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="number" name="kids" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Number of children" value="2" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Select-->
                                            <select name="gender_id" id="gender_id" class="form-control form-control-solid mb-3 mb-lg-0">
                                                <option value="">Gender ?</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Select-->
                                            <select name="marital_status_id" id="marital_status_id" class="form-control form-control-solid mb-3 mb-lg-0">
                                                <option value="">Marital Status ?</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Select-->
                                            <select name="post_id" id="post_id" class="form-control form-control-solid mb-3 mb-lg-0">
                                                <option value="">Intitulé du post ?</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">Date d'embauche</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="date" name="hire_date" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="YYYY-MM-dd" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div id="el-roles" class="mb-5">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-5">Role</label>
                                            <!--end::Label-->

                                            <!--begin::Roles-->
                                            @foreach($roles as $role)
                                                @if(($loop->index + 1) === $roles->count())
                                                    <!--begin::Input row-->
                                                    <div class="d-flex fv-row">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input me-3" name="role_id[]" type="checkbox" value="{{$role->id}}" id="kt_modal_update_role_option_{{$role->id}}" />
                                                            <!--end::Input-->

                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_{{$role->id}}">
                                                                <div class="fw-bold text-gray-800">{{$role->name}}</div>
                                                                <div class="text-gray-600">Best for business owners and company administrators</div>
                                                            </label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Input row-->
                                                @else
                                                    <!--begin::Input row-->
                                                    <div class="d-flex fv-row">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input me-3" name="role_id[]" type="checkbox" value="{{$role->id}}" id="kt_modal_update_role_option_{{$role->id}}" />
                                                            <!--end::Input-->

                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_{{$role->id}}">
                                                                <div class="fw-bold text-gray-800">{{$role->name}}</div>
                                                                <div class="text-gray-600">Best for business owners and company administrators</div>
                                                            </label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Input row-->
                                                    <div class='separator separator-dashed my-5'></div>
                                                @endif
                                            @endforeach
                                            <!--end::Roles-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Scroll-->

                                    <!--begin::Actions-->
                                    <div class="text-center pt-10">
                                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                                            Discard
                                        </button>

                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">
                                Submit
                            </span>
                                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Add task-->        </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">

            <!--begin::Table-->
            <div id="kt_table_users_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                <div id="" class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_table_users" style="width: 100%;"><colgroup><col data-dt-column="0" style="width: 36.4px;"><col data-dt-column="1" style="width: 227.033px;"><col data-dt-column="2" style="width: 180.55px;"><col data-dt-column="3" style="width: 180.55px;"><col data-dt-column="4" style="width: 180.55px;"><col data-dt-column="5" style="width: 242.5px;"><col data-dt-column="6" style="width: 151.917px;"></colgroup>
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 dt-orderable-none" data-dt-column="0" rowspan="1" colspan="1" aria-label="">
                                    <span class="dt-column-title">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1">
                                        </div>
                                    </span>
                                    <span class="dt-column-order"></span>
                                </th>
                                <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="User: Activate to sort" tabindex="0">
                                    <span class="dt-column-title" role="button">User</span>
                                    <span class="dt-column-order"></span>
                                </th>
                                <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Role: Activate to sort" tabindex="0">
                                    <span class="dt-column-title" role="button">Role</span>
                                    <span class="dt-column-order"></span>
                                </th>
                                <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Last login: Activate to sort" tabindex="0">
                                    <span class="dt-column-title" role="button">Last login</span>
                                    <span class="dt-column-order"></span>
                                </th>
                                <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Two-step : Activate to sort" tabindex="0">
                                    <span class="dt-column-title" role="button">Two-step </span>
                                    <span class="dt-column-order"></span>
                                </th>
                                <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="5" rowspan="1" colspan="1" aria-label="Joined Date: Activate to sort" tabindex="0">
                                    <span class="dt-column-title" role="button">Joined Date</span>
                                    <span class="dt-column-order"></span>
                                </th>
                                <th class="text-end min-w-100px dt-orderable-none" data-dt-column="6" rowspan="1" colspan="1" aria-label="Actions">
                                    <span class="dt-column-title">Actions</span>
                                    <span class="dt-column-order"></span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach($persons as $person)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="{{ route('person.show', $person) }}">
                                                <div class="symbol-label">
                                                    <img src="{{ asset($person->document->path) }}" alt="{{ $person->firstname . ' ' . \Illuminate\Support\Str::upper($person->lastname) }}" class="w-100">
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('person.show', $person) }}" class="text-gray-800 text-hover-primary mb-1">{{ $person->firstname . ' ' . \Illuminate\Support\Str::upper($person->lastname) }}</a>
                                            <span>smith@kpmg.com</span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <td>
                                        {{ $person->gender->name }}
                                    </td>
                                    <td data-order="2025-06-15T10:11:52+01:00">
                                        {{ \Illuminate\Support\Carbon::parse($person->birthdate)->format('dd M Y') }}
                                    </td>
                                    <td>
                                        {{ $person->post->name }}
                                    </td>
                                    <td data-order="2025-04-15T18:05:00+01:00">
                                        {{ $person->maritalStatus->name }}
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('person.show', $person) }}" class="menu-link px-3">
                                                    Voir
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="javajscript:;" onclick="document.getElementById('el-delete-user-form{{ $person->id }}').submit()" class="menu-link px-3" data-kt-users-table-filter="delete_row">
                                                    <form id="el-delete-user-form{{ $person->id }}">
                                                        @csrf
                                                        @method("DELETE")
                                                    </form>
                                                    Supprimer
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="" class="row">
                    <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"></div>
                    <div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dt-paging paging_simple_numbers">
                            <nav aria-label="pagination">
                                <ul class="pagination">
                                    <li class="dt-paging-button page-item disabled">
                                        <button class="page-link previous" role="link" type="button" aria-controls="kt_table_users" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1">
                                            <i class="previous"></i>
                                        </button>
                                    </li>
                                    <li class="dt-paging-button page-item active">
                                        <button class="page-link" role="link" type="button" aria-controls="kt_table_users" aria-current="page" data-dt-idx="0">1</button>
                                    </li>
                                    <li class="dt-paging-button page-item">
                                        <button class="page-link" role="link" type="button" aria-controls="kt_table_users" data-dt-idx="1">2</button>
                                    </li>
                                    <li class="dt-paging-button page-item">
                                        <button class="page-link" role="link" type="button" aria-controls="kt_table_users" data-dt-idx="2">3</button>
                                    </li>
                                    <li class="dt-paging-button page-item">
                                        <button class="page-link next" role="link" type="button" aria-controls="kt_table_users" aria-label="Next" data-dt-idx="next">
                                            <i class="next"></i>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script>
    <script src="{{ asset('assets/js/custom/apps/user-management/users/list/add.js')}}"></script>
    <!--end::Custom Javascript-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        const URL_SERVER = "http://127.0.0.1:8000/api/v1";

        $(document).ready(function() {

            (async () => {

                initialization();

            })();

        });



        async function initialization(){

            /* let result = await axios.get()
            const genders = result.data; */


            $('#gender_id').select2({
                placeholder: "Gender ?",
                ajax: {
                    url: `${URL_SERVER}/genders`,
                    dataType: 'json',
                    processResults: function (data) {

                        data = data.map(item => {
                            return {id: item.id, text: item.name.toUpperCase()};
                        });
                        return {
                            results: data
                        };

                    },
                },
            });

            $('#marital_status_id').select2({
                placeholder: "Marital Status ?",
                ajax: {
                    url: `${URL_SERVER}/maritalStatuses`,
                    dataType: 'json',
                    processResults: function (data) {

                        data = data.map(item => {
                            return {id: item.id, text: item.name.toUpperCase()};
                        });
                        return {
                            results: data
                        };

                    },
                },
            });

            $('#post_id').select2({
                placeholder: "Intitulé du post ?",
                ajax: {
                    url: `${URL_SERVER}/posts`,
                    dataType: 'json',
                    processResults: function (data) {

                        data = data.map(item => {
                            return {id: item.id, text: item.name.toUpperCase()};
                        });
                        return {
                            results: data
                        };

                    },
                },
            });

            /*let result = await axios.get(`${URL_SERVER}/roles`);
            if(result.request.status === 200){
                const roles = result.data.map((role, index) => {

                    if(result.data.length == (index + 1)){
                        return `
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="role_id[]" type="checkbox" value="${role.id}" id="kt_modal_update_role_option_${role.id}" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_${role.id}">
                                        <div class="fw-bold text-gray-800">${role.name}</div>
                                        <div class="text-gray-600">Best for business owners and company administrators</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                        `;
                    }else{
                        return `
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="role_id[]" type="checkbox" value="${role.id}" id="kt_modal_update_role_option_${role.id}" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_${role.id}">
                                        <div class="fw-bold text-gray-800">${role.name}</div>
                                        <div class="text-gray-600">Best for business owners and company administrators</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                        `;
                    }

                });
                //document.querySelector('#el-roles').insertAdjacentHTML("beforeend", roles)
            }*/


            /*$("#kt_modal_add_user_form").on('submit', async (e) => {

                e.preventDefault();

                const formValues = e.target;

                let result = await createPerson(formValues);
                console.log(result.request.status);

                if(result.request.status === 201){
                    window.location.href = `/view.html?person_id=${result.data.id}`;
                }
            });

            async function createPerson(data){
                const result = await axios.post(`${URL_SERVER}/person`, data, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                });
                return result;
            }*/

        }
    </script>
@endsection
