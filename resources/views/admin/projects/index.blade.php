
@extends('admin.layouts.master')


@section('content')

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">



                <div class="row mb-4">
                </div>

                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">لیست پروژه ها</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                <tr>
                                    <th>عنوان</th>
                                    <th>لینک</th>
                                    <th>وضعیت</th>
                                    <th>تاریخ</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>آسپرین 80mg</td>
                                    <td>445</td>
                                    <td>1403/07/18</td>
                                    <td><span class="badge bg-warning">در انتظار</span></td>

                                    <td>
                                        <button class="btn btn-sm btn-outline-primary me-1" title="مشاهده">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success me-1" title="تایید">
                                            <i class="bi bi-check"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="لغو">
                                            <i class="bi bi-x"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </main>

@endsection
