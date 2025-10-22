
@extends('admin.layouts.master')


@section('content')

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">مدیریت تیم ها</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-primary">
                                <a href="{{route('admin.teams.create')}}"><i class="bi bi-plus-circle me-1"></i>تیم جدید</a>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="row mb-4">
                </div>

                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">لیست تیم ها</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                <tr>
                                    <th>نام</th>
                                    <th>سمت</th>
                                    <th>پروفایل</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teams as $team)

                                    <tr>
                                        <td>{{$team['name']}}</td>
                                        <td>{{$team['position']}}</td>
                                        <td>
                                            <img width="100px" height="100px" src="{{URL::to($team['profile'])}}" alt="">
                                        </td>

                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1" title="ویرایش">
                                                <i class="bi bi-pencil"></i>
                                            </button>

                                            <button class="btn btn-sm btn-outline-danger" title="مشاهده">
                                                <i class="bi bi-trash"></i>
                                            </button>
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
