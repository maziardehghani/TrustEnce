@extends('admin.layouts.master')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">پروژه</h1>
        </div>

        <div class="row">
            <div class="col-lg-10">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary"> اطلاهات پروژه نمونه کار وارد کنید</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">نام</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">نام خانوادگی</label>
                                <input type="text" name="family" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">سمت</label>
                                <input type="text" name="position" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">بیوگرافی</label>
                                <textarea name="bio" class="form-control" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">لینک لینکدین</label>
                                <input type="text" name="linkedin" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">لینک توییتر</label>
                                <input type="text" name="twitter" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">لینک گیت‌هاب</label>
                                <input type="text" name="github" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">تصویر پروفایل</label>
                                <input type="file" name="profile" class="form-control" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </main>

@endsection
