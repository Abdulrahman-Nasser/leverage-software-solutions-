@extends('admin-board.layouts.admin-layout')
@section('title', 'Admin | Departments')

@section('content')

    {{-- header --}}
    @include('admin-board.header.header')
    {{-- end header --}}

    <main class="main">
        <!-- Sidebar Nav -->
        @include('admin-board.asside.asside')
        <!-- End Sidebar Nav -->

        <div class="content">
            <div class="py-4 px-3 px-md-4">
                <div class="card mb-3 mb-md-4">

                    <div class="card-body">
                        <!-- Breadcrumb -->
                        <nav class="d-none d-md-block" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Department</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Departments</li>
                            </ol>
                        </nav>
                        <!-- End Breadcrumb -->

                        <div class="mb-3 mb-md-4 d-flex justify-content-between">
                            <div class="h3 mb-0">Departments</div>
                        </div>

                        @if (Session::has('Done'))
                            <div class="alert alert-success mx-auto text-center">{{ Session::get('Done') }}</div>
                        @endif



                        <!-- Users -->
                        <div class="table-responsive-xl">
                            <table class="table text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Registration Date</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($departments as $data)
                                        <tr>
                                            <td class="py-3">{{ $data->id }}</td>
                                            <td class="align-middle py-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="position-relative mr-2">
                                                        <span
                                                            class="indicator indicator-lg indicator-bordered-reverse indicator-top-left indicator-success rounded-circle"></span>
                                                        <!--img class="avatar rounded-circle" src="#" alt="John Doe"-->
                                                        <span class="avatar-placeholder mr-md-2">N</span>
                                                    </div>
                                                    {{ $data->name }}
                                                </div>
                                            </td>
                                            <td class="py-3">{{ $data->created_at }}</td>

                                            <td class="py-3">
                                                <div class="position-relative">
                                                    <a class="link-dark d-inline-block btn-edit"
                                                        href="{{ route('admin.getEditDepartment', $data->id) }}">
                                                        <i class="gd-pencil icon-text"></i>
                                                    </a>
                                                    <a class="link-dark d-inline-block btn-delete"
                                                        href="{{ route('admin.deleteDepartment', $data->id) }}">
                                                        <i class="gd-trash icon-text"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    <div class="empty text-center bg-transparent border-1 text-danger  p-3 m-3" style="color: white;">No Departments in your Website</div>
                                    @endforelse

                                </tbody>
                            </table>

                            <div class="card-footer d-block d-md-flex align-items-center d-print-none">
                                <div class="d-flex mb-2 mb-md-0">Showing 1 to 8 of 24 Entries</div>

                                <nav class="d-flex ml-md-auto d-print-none" aria-label="Pagination">
                                    <ul class="pagination justify-content-end font-weight-semi-bold mb-0">
                                        <li class="page-item"> <a id="datatablePaginationPrev" class="page-link"
                                                href="#!" aria-label="Previous"><i
                                                    class="gd-angle-left icon-text icon-text-xs d-inline-block"></i></a>
                                        </li>
                                        <li class="page-item d-none d-md-block"><a id="datatablePaginationPage0"
                                                class="page-link active" href="#!" data-dt-page-to="0">1</a></li>
                                        <li class="page-item d-none d-md-block"><a id="datatablePagination1"
                                                class="page-link" href="#!" data-dt-page-to="1">2</a></li>
                                        <li class="page-item d-none d-md-block"><a id="datatablePagination2"
                                                class="page-link" href="#!" data-dt-page-to="2">3</a></li>
                                        <li class="page-item"> <a id="datatablePaginationNext" class="page-link"
                                                href="#!" aria-label="Next"><i
                                                    class="gd-angle-right icon-text icon-text-xs d-inline-block"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- End Users -->
                    </div>
                </div>


            </div>

            <!-- Footer -->
            @include('admin-board.footer.footer')
            <!-- End Footer -->
        </div>
    </main>

@endsection
