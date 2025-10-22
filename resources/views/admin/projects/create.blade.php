@extends('admin.layouts.master')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">پروژه</h1>
        </div>

        <div class="row">
            <div class="col-lg-10">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary"> اطلاهات پروژه نمونه کار وارد کنید</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">عنوان</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">متن مقدمه</label>
                                <input type="text" name="intro" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">توضیحات</label>
                                <textarea name="description" class="form-control" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">لینک</label>
                                <input type="text" name="link" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">وضعیت نمایش</label>
                                <select name="is_active" class="form-select" required>
                                    <option value="1">فعال</option>
                                    <option value="0">غیرفعال</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">تصویر بنر</label>
                                <input type="file" name="banner" class="form-control" accept="image/*">
                            </div>


                            <button type="submit" class="btn btn-primary">ذخیره</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </main>

@endsection
