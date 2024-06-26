@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div id="footerLinkList"
                    data-list='{"valueNames":["footerLinkId","footerLinkTitle","footerLinkUrl","footerLinkWidget","footerLinkAction"],"page":12,"pagination":true}'>
                    <div class="row justify-content-between mb-4 gx-6 gy-3 align-items-center">
                        <div class="col-auto">
                            <h2 class="mb-0">Footer Linkler<span
                                    class="fw-normal text-700 ms-3">({{ count($footerLinks) }})</span>
                            </h2>
                        </div>
                        <div class="col-auto">
                            <div class="col-auto">
                                <a class="btn btn-primary px-5" href="{{ route('admin.footer_links.create') }}">
                                    <i class="fa-solid fa-plus me-2"></i>Yeni Ekle
                                </a>
                            </div>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success text-white">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger text-white">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card shadow-none border border-300 my-4 p-5">
                        <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0 border-top border-200">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="footerLinkTitle">BAŞLIK</th>
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="footerLinkUrl">URL</th>
                                        <th class="sort white-space-nowrap align-middle ps-0" scope="col"
                                            data-sort="footerLinkWidget">WIDGET</th>
                                        <th>İŞLEMLER</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="footer-link-list-table-body">
                                    @foreach ($footerLinks as $key => $footerLink)
                                        <tr class="position-static">
                                            <td class="footerLinkId">{{ $key + 1 }}</td>
                                            <td class="footerLinkTitle">{{ $footerLink->title }}</td>
                                            <td class="footerLinkUrl">{{ $footerLink->url }}</td>
                                            <td class="footerLinkWidget">{{ $footerLink->widget }}</td>
                                            <td class="footerLinkAction">
                                                @if (in_array('GetFooterLinkById', $userPermissions))
                                                    <a href="{{ route('admin.footer_links.edit', $footerLink->id) }}"
                                                        class="btn btn-sm btn-primary">Düzenle</a>
                                                @endif
                                                @if (in_array('DeleteFooterLink', $userPermissions))
                                                    <!-- Silme işlemi için modal -->
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $footerLink->id }}">
                                                        Sil
                                                    </button>
                                                @endif

                                                <!-- Silme işlemi için modal -->
                                                <div class="modal fade" id="deleteModal{{ $footerLink->id }}"
                                                    tabindex="-1" aria-labelledby="deleteModalLabel{{ $footerLink->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="deleteModalLabel{{ $footerLink->id }}">Sil
                                                                </h5>
                                                                <button type="button" class="btn p-1"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <svg class="svg-inline--fa fa-xmark fs--1"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="xmark" page="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 320 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z">
                                                                        </path>
                                                                    </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com -->
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p class="text-700 lh-lg mb-0">Silmek istediğinize emin
                                                                    misiniz ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form
                                                                    action="{{ route('admin.footer_links.destroy', $footerLink->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Evet,
                                                                        Sil</button>
                                                                </form>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">İptal</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Silme işlemi için modal -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs--1 border-bottom border-200">
                            <div class="d-flex">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                    data-list-info="data-list-info">
                                </p>
                            </div>
                            <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
