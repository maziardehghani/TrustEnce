@extends('admin.layouts.master')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">ایجاد رسانه جدید</h1>
        </div>

        <!-- نمایش خطاهای ولیدیشن -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="row">
            <div class="col-lg-10">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">اطلاعات رسانه جدید را وارد کنید</h6>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.medias.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">نوع قابل اتصال (Mediaable Type)</label>
                                <input type="text" name="modelable_type" class="form-control" placeholder="مثلاً project" value="project" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">شناسه قابل اتصال (Mediaable ID)</label>
                                <input type="number" name="modelable_id" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">نوع فایل</label>
                                <select name="type" class="form-select" required>
                                    <option value="" disabled selected>انتخاب کنید</option>
                                    <option value="banner">بنر</option>
                                    <option value="background">پس‌زمینه</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">فایل مدیا</label>
                                <input type="file" name="file" class="form-control" accept="image/*,video/*,audio/*,application/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
