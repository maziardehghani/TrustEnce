
@extends('admin.layouts.master')


@section('content')

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">



                <div class="row mb-4">
                </div>

                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">لیست درخواست ها</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                <tr>
                                    <th>ایمیل</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th>شماره تماس</th>
                                    <th>نوع خدمت درخواستی</th>
                                    <th>بازه بودجه</th>
                                    <th>توضیح پروژه</th>
                                    <th>نوع درخواست</th>
                                    <th>پذیرش قوانین و مقررات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($project_requests as $project_request)
                                    <tr>
                                        <td>{{ $project_request['email'] }}</td>
                                        <td>{{ $project_request['fullName'] }}</td>
                                        <td>{{ $project_request['phoneNumber'] }}</td>
                                        <td>{{ $project_request['service'] }}</td>
                                        <td>{{ $project_request['budgetRange'] }}</td>
                                        <td>{{ $project_request['projectBrief'] }}</td>
                                        <td>{{ $project_request['inquiry'] }}</td>
                                        <td>{{ $project_request['termsConditions'] ? 'بله' : 'خیر' }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </main>

@endsection
