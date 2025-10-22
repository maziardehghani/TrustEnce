
@extends('admin.layouts.master')


@section('content')

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">



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
