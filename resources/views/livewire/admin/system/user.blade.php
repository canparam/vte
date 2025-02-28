<div>
    <div class="page-header">
        <h1 class="page-title">Danh sách thành viên</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Hệ thống</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Thành viên</a></li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <button type="button" class="btn btn-primary"><i class="fe fe-plus me-2"></i>Thêm
                                    </button>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="basic-datatable_filter" class="dataTables_filter">
                                        <label>
                                            <input type="search" class="form-control form-control"
                                                   placeholder="Search...">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered text-nowrap border-bottom dataTable no-footer"
                                           id="basic-datatable" role="grid" aria-describedby="basic-datatable_info">
                                        <thead>
                                        <tr role="row" class="text-center">
                                            <th class="wd-15p border-bottom-0 ">ID</th>
                                            <th class="wd-15p border-bottom-0 ">Tên</th>
                                            <th class="wd-15p border-bottom-0 ">Email</th>
                                            <th class="wd-15p border-bottom-0 ">Role</th>
                                            <th class="wd-15p border-bottom-0 ">Hành động</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $user)
                                            <tr class="odd text-center">
                                                <td class="sorting_1">{{$user->id}}</td>
                                                <td class="sorting_1">{{$user->name}}</td>
                                                <td class="sorting_1">{{$user->email}}</td>
                                                <td class="sorting_1">{{$user->getRole()}}</td>
                                                <td class="sorting_1">
                                                    <div class="btn-list">
                                                        <button id="bEdit" type="button" class="btn btn-sm btn-primary">
                                                            <span class="fe fe-edit"> </span>
                                                        </button>
                                                        <button id="bDel" type="button" class="btn  btn-sm btn-danger">
                                                            <span class="fe fe-trash-2"> </span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="dataTables_info" id="basic-datatable_info" role="status"
                                         aria-live="polite">Hiển thị từ {{$list->firstItem()}} đến {{$list->lastItem()}} trên tổng {{ $list->total() }} bản ghi.
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                         id="basic-datatable_paginate">
                                        {{$list->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
