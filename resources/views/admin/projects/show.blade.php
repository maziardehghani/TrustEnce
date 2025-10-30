@extends('admin.layouts.master')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">ویرایش پروژه</h1>
        </div>

        <div class="row">
            <div class="col-lg-10">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">ویرایش اطلاعات پروژه نمونه‌کار</h6>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">عنوان</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}" required>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">دسته بندی</label>
                                <input type="text" name="category_name" class="form-control" value="{{ old('category_name', $project->category_name) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">متن مقدمه</label>
                                <input type="text" name="intro" class="form-control" value="{{ old('intro', $project->intro) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">توضیحات</label>
                                <textarea name="description" class="form-control" rows="4" required>{{ old('description', $project->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">لینک</label>
                                <input type="text" name="link" class="form-control" value="{{ old('link', $project->link) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">وضعیت نمایش</label>
                                <select name="is_active" class="form-select" required>
                                    <option value="1" {{ old('is_active', $project->is_active) == 1 ? 'selected' : '' }}>فعال</option>
                                    <option value="0" {{ old('is_active', $project->is_active) == 0 ? 'selected' : '' }}>غیرفعال</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">تصویر بنر</label>
                                <input type="file" name="banner" class="form-control" accept="image/*">
                                @if($project->banner)
                                    <div class="mt-2">
                                        <p class="mb-1">تصویر فعلی:</p>
                                        <img src="{{ asset($project->banner) }}" alt="banner" width="200" class="rounded border">
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">به‌روزرسانی</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
