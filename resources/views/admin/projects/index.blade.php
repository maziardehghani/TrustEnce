@extends('admin.layouts.master')


@section('content')

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">مدیریت پروژه ها</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                        <a class="btn btn-primary" href="{{route('admin.projects.create')}}"><i class="bi bi-plus-circle me-1 text-white"></i>پروژه
                            جدید</a>
                </div>
            </div>
        </div>


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
                            <th>آیدی</th>
                            <th>عنوان</th>
                            <th>بنر</th>
                            <th>وضعیت</th>
                            <th>تاریخ</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)

                            <tr>
                                <td>{{$project['id']}}</td>
                                <td>{{$project['title']}}</td>
                                <td>
                                    <img width="100px" height="100px" src="{{URL::to($project['banner'])}}" alt="">

                                </td>
                                <td>{{$project['is_active']}}</td>
                                <td>{{$project['created_at']}}</td>

                                <td>
                                    <a class="btn btn-sm btn-outline-primary me-1"
                                       href="{{route('admin.projects.show' , $project['id'])}}">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <a class="btn btn-sm btn-outline-danger"
                                       href="{{route('admin.projects.delete', $project['id'])}}">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

@endsection
