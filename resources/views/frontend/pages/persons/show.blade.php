@extends('frontend.layouts.base')

@section('main-content')
<!--begin::Layout-->
<div class="d-flex flex-column flex-lg-row">
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">

        <!--begin::Card-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Summary-->


                <!--begin::User Info-->
                <div class="d-flex flex-center flex-column py-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-100px symbol-circle mb-7">
                        <img src="{{ asset($person->document->path)}}" alt="image">
                    </div>
                    <!--end::Avatar-->

                    <!--begin::Name-->
                    <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">
                        {{ $person->firstname . ' ' . \Illuminate\Support\Str::upper($person->lastname) }} </a>
                    <!--end::Name-->

                    <!--begin::Position-->
                    <div class="mb-9">
                        <!--begin::Badge-->
                        <div class="badge badge-lg badge-light-primary d-inline">{{ $person->post->name }}</div>
                        <!--begin::Badge-->
                    </div>
                    <!--end::Position-->

                    <!--begin::Info-->
                    <!--begin::Info heading-->
                    <div class="fw-bold mb-3">
                        Compteur de congés

                        <span class="ms-2" ddata-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Number of support tickets assigned, closed and pending this week.">
                            <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                    </div>
                    <!--end::Info heading-->

                    <div class="d-flex flex-wrap flex-center">
                        <!--begin::Stats-->
                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                            <div class="fs-4 fw-bold text-gray-700">
                                <span class="w-75px">{{ $person->duree_conge_annuel }}</span>
                                <i class="ki-duotone ki-arrow-up fs-3 text-success"><span class="path1"></span><span class="path2"></span></i>
                            </div>
                            <div class="fw-semibold text-muted">Total</div>
                        </div>
                        <!--end::Stats-->

                        <!--begin::Stats-->
                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                            <div class="fs-4 fw-bold text-gray-700">
                                <span class="w-50px">{{ $person->jours_conges_annuels_disponibles }}</span>
                                <i class="ki-duotone ki-arrow-down fs-3 text-danger"><span class="path1"></span><span class="path2"></span></i>
                            </div>
                            <div class="fw-semibold text-muted">Restant</div>
                        </div>
                        <!--end::Stats-->

                        <!--begin::Stats-->
                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                            <div class="fs-4 fw-bold text-gray-700">
                                <span class="w-50px">{{ $person->leaves()->where('status_id', 2)->get()->count() }}</span>
                                <i class="ki-duotone ki-arrow-up fs-3 text-success"><span class="path1"></span><span class="path2"></span></i>
                            </div>
                            <div class="fw-semibold text-muted">Approuvé</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User Info--> <!--end::Summary-->

                <!--begin::Details toggle-->
                <div class="d-flex flex-stack fs-4 py-3">
                    <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">
                        Details
                        <span class="ms-2 rotate-180">
                            <i class="ki-duotone ki-down fs-3"></i> </span>
                    </div>

                    <span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
                        <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">
                            Edit
                        </a>
                    </span>
                </div>
                <!--end::Details toggle-->

                <div class="separator"></div>

                <!--begin::Details content-->
                <div id="kt_user_view_details" class="collapse show">
                    <div class="pb-5 fs-6">
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Genre</div>
                        <div class="text-gray-600">{{ $person->gender->name }}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Date de naissance </div>
                        <div class="text-gray-600">{{ \Carbon\Carbon::parse($person->birthdate)->translatedFormat('d F Y') }}
                        </div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Nombre d'enfant</div>
                        <div class="text-gray-600">{{ $person->kids }}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Situation Familiale</div>
                        <div class="text-gray-600">{{ $person->maritalStatus->name }}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Type de Poste</div>
                        <div class="text-gray-600"> {{ $person->type_roles }} </div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Ancienneté</div>
                        <div class="text-gray-600"> {{ $person->anciennete_en_annees }} ans </div>
                        <!--begin::Details item-->
                    </div>
                </div>
                <!--end::Details content-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->

    </div>
    <!--end::Sidebar-->

    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-15">
        <!--begin:::Tabs-->
        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">

            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab" aria-selected="false" tabindex="-1" role="tab">Vue d'ensemble</a>
            </li>
            <!--end:::Tab item-->

            @if(isset($leaves))
                <!--begin:::Tab item-->
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_tab" aria-selected="true" role="tab">Gérer les congés</a>
                </li>
                <!--end:::Tab item-->
            @endif
        </ul>
        <!--end:::Tabs-->

        <!--begin:::Tab content-->
        <div class="tab-content" id="myTabContent">
            <!--begin:::Tab pane-->
            <div class="tab-pane fade show active" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header border-0">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Tableau de mes congés</h2>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
                                <i class="ki-duotone ki-brush fs-3"><span class="path1"></span><span class="path2"></span></i> Ajouter une demande
                            </button>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0 pb-5">
                        <!--begin::Table wrapper-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                                <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                    <tr class="text-start text-muted text-uppercase gs-0">
                                        <th class="min-w-100px">Index</th>
                                        <th>Début</th>
                                        <th>Fin</th>
                                        <th class="min-w-125px">Nb. jour</th>
                                        <th class="min-w-125px">Motif</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    @foreach($person->leaves as $leave)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td> {{ \Carbon\Carbon::parse($leave->start)->translatedFormat('d F Y') }} </td>
                                        <td> {{ \Carbon\Carbon::parse($leave->end)->translatedFormat('d F Y') }} </td>
                                        <td style="text-align: center;"> {{ $leave->number }} </td>
                                        <td> {{ $leave->type->name }} </td>
                                        <td>
                                            <div @class(["badge", "badge-light-info" => $leave->status->id === 1,
                                                         "badge-light-success" => $leave->status->id === 2,
                                                         "badge-light-danger" => $leave->status->id === 3])>
                                                {{ $leave->status->name }}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end:::Tab pane-->

            @if(isset($leaves))
                <!--begin:::Tab pane-->
                <div class="tab-pane fade" id="kt_user_view_overview_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Gestion des congés</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <!--begin::Table-->
                            <div id="kt_table_users_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                                <div id="" class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_table_users" style="width: 100%;"><colgroup><col data-dt-column="0" style="width: 36.4px;"><col data-dt-column="1" style="width: 227.033px;"><col data-dt-column="2" style="width: 180.55px;"><col data-dt-column="3" style="width: 180.55px;"><col data-dt-column="4" style="width: 180.55px;"><col data-dt-column="5" style="width: 242.5px;"><col data-dt-column="6" style="width: 151.917px;"></colgroup>
                                        <thead>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                                                <th class="dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="User: Activate to sort" tabindex="0">
                                                    <span class="dt-column-title" role="button">User</span>
                                                    <span class="dt-column-order"></span>
                                                </th>
                                                <th class="dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Role: Activate to sort" tabindex="0">
                                                    <span class="dt-column-title" role="button">Début</span>
                                                    <span class="dt-column-order"></span>
                                                </th>
                                                <th class="dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Last login: Activate to sort" tabindex="0">
                                                    <span class="dt-column-title" role="button">Fin</span>
                                                    <span class="dt-column-order"></span>
                                                </th>
                                                <th class="dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Two-step : Activate to sort" tabindex="0">
                                                    <span class="dt-column-title" role="button">Nb. jour</span>
                                                    <span class="dt-column-order"></span>
                                                </th>
                                                <th class="dt-orderable-asc dt-orderable-desc" data-dt-column="5" rowspan="1" colspan="1" aria-label="Joined Date: Activate to sort" tabindex="0">
                                                    <span class="dt-column-title" role="button">Motif</span>
                                                    <span class="dt-column-order"></span>
                                                </th>
                                                <th class="dt-orderable-asc dt-orderable-desc" data-dt-column="5" rowspan="1" colspan="1" aria-label="Joined Date: Activate to sort" tabindex="0">
                                                    <span class="dt-column-title" role="button">Statut</span>
                                                    <span class="dt-column-order"></span>
                                                </th>
                                                <th class="text-end dt-orderable-none" data-dt-column="6" rowspan="1" colspan="1" aria-label="Actions">
                                                    <span class="dt-column-title">Actions</span>
                                                    <span class="dt-column-order"></span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold">
                                        @foreach($leaves as $leave)
                                            <tr>
                                                <td class="d-flex align-items-center flex-column">
                                                    <!--begin:: Avatar -->
                                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                        <a href="{{ route('person.show', $person) }}">
                                                            <div class="symbol-label">
                                                                <img src="{{ asset($leave->person->document->path) }}" alt="{{ $leave->person->firstname . ' ' . \Illuminate\Support\Str::upper($leave->person->lastname) }}" class="w-100">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::User details-->
                                                    <div class="d-flex flex-column">
                                                        <a href="{{ route('person.show', $leave->person) }}" class="text-gray-800 text-hover-primary mb-1">{{ $leave->person->firstname . ' ' . \Illuminate\Support\Str::upper($leave->person->lastname) }}</a>
                                                    </div>
                                                    <!--begin::User details-->
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($leave->start)->translatedFormat('d F Y') }}
                                                </td>
                                                <td data-order="2025-06-15T10:11:52+01:00">
                                                    {{ \Carbon\Carbon::parse($leave->end)->translatedFormat('d F Y') }}
                                                </td>
                                                <td>
                                                    {{ $leave->number }}
                                                </td>
                                                <td data-order="2025-04-15T18:05:00+01:00">
                                                    {{ $leave->type->name }}
                                                </td>
                                                <td data-order="2025-04-15T18:05:00+01:00">
                                                    <div @class(["badge", "badge-light-info" => $leave->status->id === 1,
                                                         "badge-light-success" => $leave->status->id === 2,
                                                         "badge-light-danger" => $leave->status->id === 3])>
                                                        {{ $leave->status->name }}
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                        @foreach($statuses as $status)
                                                            @if($status->id === 1)
                                                                @continue
                                                            @endif
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="jascript:;" class="menu-link px-3" onclick="document.getElementById('el-leave-form-{{$leave->id}}-{{ $status->id }}').submit()">
                                                                    <form action="{{ route('leave.updateStatus', $leave) }}" method="post" id="el-leave-form-{{$leave->id}}-{{ $status->id }}">
                                                                        @csrf
                                                                        <input type="hidden" name="status_id" value="{{ $status->id }}" />
                                                                    </form>
                                                                    {{ $status->name }}
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        @endforeach

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
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
            @endif

        </div>
        <!--end:::Tab content-->
    </div>
    <!--end::Content-->
</div>
<!--end::Layout-->
<!--begin::Modals-->
<!--begin::Modal - Update user details-->
<div class="modal fade" id="kt_modal_update_details" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ route('person.update', $person) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_update_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Mise à jour des détails de l'utilisateur</h2>
                    <!--end::Modal title-->

                    {{--<!--begin::Close-->
                    <div onclick="let form = document.getElementById('kt_modal_update_details'); form.classList.toggle('show'); form.style.display = 'none'; document.querySelector('.modal-backdrop').classList.toggle('show');document.querySelector('.modal-backdrop').remove()" class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->--}}
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">

                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header" data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px" style="max-height: 655px;">
                        <!--begin::User toggle-->
                        <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_user_info">
                            User Information
                            <span class="ms-2 rotate-180">
                                <i class="ki-duotone ki-down fs-3"></i> </span>
                        </div>
                        <!--end::User toggle-->

                        <!--begin::User form-->
                        <div id="kt_modal_update_user_user_info" class="collapse show">
                            <!--begin::Input group-->
                            <div class="mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>Update Avatar</span>

                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Allowed file types: png, jpg, jpeg." data-bs-original-title="Allowed file types: png, jpg, jpeg." data-kt-initialized="1">
                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                </label>
                                <!--end::Label-->

                                <!--begin::Image input wrapper-->
                                <div class="mt-1">

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
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset($person->document->path)}})"></div>
                                        <!--end::Preview existing avatar-->

                                        <!--begin::Edit-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg, .webp, .bmp, .gif" />
                                            <input type="hidden" name="avatar_remove">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Edit-->

                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                        <!--end::Cancel-->

                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                </div>
                                <!--end::Image input wrapper-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">First Name</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="firstname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{ $person->firstname }}" />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Last Name</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="lastname" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Last name" value="{{ $person->lastname }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Birthday</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="date" name="birthdate" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="YYYY-MM-dd" value="{{ $person->birthdate }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Number of children</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="number" name="kids" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Number of children" value="{{ $person->kids }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Select-->
                                <select name="gender_id" id="gender_id" class="form-control form-control-solid mb-3 mb-lg-0">
                                    <option value="">Gender ?</option>
                                    @if($person && $person->gender)
                                        <option value="{{ $person->gender->id }}" selected>
                                            {{ \Illuminate\Support\Str::upper($person->gender->name) }}
                                        </option>
                                    @endif
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Select-->
                                <select name="marital_status_id" id="marital_status_id" class="form-control form-control-solid mb-3 mb-lg-0">
                                    <option value="">Marital Status ?</option>
                                    @if($person && $person->maritalStatus)
                                        <option value="{{ $person->maritalStatus->id }}" selected>
                                            {{ \Illuminate\Support\Str::upper($person->maritalStatus->name) }}
                                        </option>
                                    @endif
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Select-->
                                <select name="post_id" id="post_id" class="form-control form-control-solid mb-3 mb-lg-0">
                                    <option value="">Intitulé du post ?</option>
                                    @if($person && $person->post)
                                        <option value="{{ $person->post->id }}" selected>
                                            {{ \Illuminate\Support\Str::upper($person->post->name) }}
                                        </option>
                                    @endif
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
                                <input type="date" name="hire_date" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="YYYY-MM-dd" value="{{ $person->hire_date }}" />
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
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3"
                                                   name="role_id[]"
                                                   type="checkbox"
                                                   value="{{ $role->id }}"
                                                   id="kt_modal_update_role_option_{{ $role->id }}"
                                                   @if($person && $person->roles->contains($role->id)) checked @endif
                                            />
                                            <!--end::Input-->

                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_{{ $role->id }}">
                                                <div class="fw-bold text-gray-800">{{ $role->name }}</div>
                                                <div class="text-gray-600">Best for business owners and company administrators</div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Input row-->

                                    @if(!$loop->last)
                                        <div class="separator separator-dashed my-5"></div>
                                    @endif
                                @endforeach

                                <!--end::Roles-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::User form-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                        Rejeter
                    </button>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                        <span class="indicator-label">
                            Soumettre
                        </span>
                        <span class="indicator-progress">
                            Veuillez patienter... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Update user details--><!--begin::Modal - Add schedule-->
<div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Demande d'un congé</h2>
                <!--end::Modal title-->

                {{--<!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->--}}
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('leave.store') }}">
                    @csrf
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Début</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="date" name="start" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="YYYY-MM-dd" />
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Fin</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="date" name="end" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="YYYY-MM-dd" />
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Nombre de jours</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="number" min="1" max="31" class="form-control form-control-solid" name="number" value="" />
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Select-->
                        <select name="type_id" id="type_id" class="form-control form-control-solid mb-3 mb-lg-0">
                            <option value="">Motif ?</option>
                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Input group-->

                    <input type="hidden" name="person_id" value="{{ $person->id }}">


                    <!--begin::Actions-->
                    <div class="text-center pt-15">
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
<!--end::Modal - Add schedule--><!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Add a Task</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_add_task_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Task Name</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="task_name" value="">
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">
                            <span class="required">Task Due Date</span>

                            <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date." data-kt-initialized="1">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input class="form-control form-control-solid flatpickr-input" placeholder="Pick date" name="task_duedate" id="kt_modal_add_task_datepicker" type="text" readonly="readonly">
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">Task Description</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <textarea class="form-control form-control-solid rounded-3"></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
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
<!--end::Modal - Add task--><!--begin::Modal - Update email-->
<div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Update Email Address</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_update_email_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Notice-->

                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-information fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 ">
                            <!--begin::Content-->
                            <div class=" fw-semibold">

                                <div class="fs-6 text-gray-700 ">Please note that a valid email address is required to complete the email verification.</div>
                            </div>
                            <!--end::Content-->

                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--end::Notice-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">
                            <span class="required">Email Address</span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input class="form-control form-control-solid" placeholder="" name="profile_email" value="smith@kpmg.com">
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
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
<!--end::Modal - Update email--><!--begin::Modal - Update password-->
<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Update Password</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_update_password_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">

                    <!--begin::Input group--->
                    <div class="fv-row mb-10 fv-plugins-icon-container">
                        <label class="required form-label fs-6 mb-2">Current Password</label>

                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group--->

                    <!--begin::Input group-->
                    <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold fs-6 mb-2">
                                New Password
                            </label>
                            <!--end::Label-->

                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off">

                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                    <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                            </div>
                            <!--end::Input wrapper-->

                            <!--begin::Meter-->
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                            <!--end::Meter-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Hint-->
                        <div class="text-muted">
                            Use 8 or more characters with a mix of letters, numbers &amp; symbols.
                        </div>
                        <!--end::Hint-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group--->

                    <!--begin::Input group--->
                    <div class="fv-row mb-10 fv-plugins-icon-container">
                        <label class="form-label fw-semibold fs-6 mb-2">Confirm New Password</label>

                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group--->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
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
<!--end::Modal - Update password-->
<!--begin::Modal - Update role-->
<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Update User Role</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_update_role_form" class="form" action="#">
                    <!--begin::Notice-->

                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-information fs-2tx text-primary me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 ">
                            <!--begin::Content-->
                            <div class=" fw-semibold">

                                <div class="fs-6 text-gray-700 ">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
                            </div>
                            <!--end::Content-->

                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--end::Notice-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-5">
                            <span class="required">Select a user role</span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input row-->
                        <div class="d-flex">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked="checked">
                                <!--end::Input-->

                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                    <div class="fw-bold text-gray-800">Administrator</div>
                                    <div class="text-gray-600">Best for business owners and company administrators</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input row-->

                        <div class="separator separator-dashed my-5"></div> <!--begin::Input row-->
                        <div class="d-flex">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1">
                                <!--end::Input-->

                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_modal_update_role_option_1">
                                    <div class="fw-bold text-gray-800">Developer</div>
                                    <div class="text-gray-600">Best for developers or people primarily using the API</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input row-->

                        <div class="separator separator-dashed my-5"></div> <!--begin::Input row-->
                        <div class="d-flex">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2">
                                <!--end::Input-->

                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                    <div class="fw-bold text-gray-800">Analyst</div>
                                    <div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input row-->

                        <div class="separator separator-dashed my-5"></div> <!--begin::Input row-->
                        <div class="d-flex">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3">
                                <!--end::Input-->

                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_modal_update_role_option_3">
                                    <div class="fw-bold text-gray-800">Support</div>
                                    <div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input row-->

                        <div class="separator separator-dashed my-5"></div> <!--begin::Input row-->
                        <div class="d-flex">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4">
                                <!--end::Input-->

                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_modal_update_role_option_4">
                                    <div class="fw-bold text-gray-800">Trial</div>
                                    <div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input row-->

                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
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
<!--end::Modal - Update role--><!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Add Authenticator App</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Content-->
                <div class="fw-bold d-flex flex-column justify-content-center mb-5">
                    <!--begin::Label-->
                    <div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">
                        Download the <a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.
                    </div>
                    <div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">
                        Download the <a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.
                    </div>
                    <!--end::Label-->

                    <!--begin::QR code-->
                    <div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
                        <img src="assets/media/misc/qr.png" alt="Scan this QR code">
                    </div>
                    <!--end::QR code-->

                    <!--begin::Text code-->
                    <div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
                        <div class="fs-1">gi2kdnb54is709j</div>
                    </div>
                    <!--end::Text code-->
                </div>
                <!--end::Content-->

                <!--begin::Action-->
                <div class="d-flex flex-center">
                    <div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
                    <div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Add task--><!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Enable One Time Password</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" id="kt_modal_add_one_time_password_form">
                    <!--begin::Label-->
                    <div class="fw-bold mb-9">
                        Enter the new phone number to receive an SMS to when you log in.
                    </div>
                    <!--end::Label-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">
                            <span class="required">Mobile number</span>

                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="A valid mobile number is required to receive the one-time password to validate your account login." data-bs-original-title="A valid mobile number is required to receive the one-time password to validate your account login." data-kt-initialized="1">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="">
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Separator-->
                    <div class="separator saperator-dashed my-5"></div>
                    <!--end::Separator-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">
                            <span class="required">Email</span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mb-2">
                            <span class="required">Confirm password</span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="">
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                            Cancel
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
<!--end::Modal - Add task--><!--end::Modals-->
@endsection

@section('scripts')
    @parent
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


            $('#type_id').select2({
                placeholder: "Motif du congé ?",
                ajax: {
                    url: `${URL_SERVER}/types`,
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

        }
    </script>
@endsection
