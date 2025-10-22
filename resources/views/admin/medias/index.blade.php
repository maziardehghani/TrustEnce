@php use Illuminate\Support\Facades\URL; @endphp
@extends('admin.layouts.master')

@section('content')

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">مدیریت رسانه‌ها</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a class="btn btn-primary" href="{{ route('admin.medias.create') }}">
                        <i class="bi bi-plus-circle me-1 text-white"></i>
                        رسانه جدید
                    </a>
                </div>
            </div>
        </div>

        <div class="row mb-4"></div>

        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">لیست رسانه‌ها</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
                        <tr>
                            <th>آیدی</th>
                            <th>نام فایل</th>
                            <th>آدرس (URL)</th>
                            <th>نوع قابل اتصال</th>
                            <th>شناسه قابل اتصال</th>
                            <th>نوع فایل</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($medias as $media)
                            <tr>
                                <td>{{ $media->id }}</td>
                                <td>{{ $media->name }}</td>
                                <td>
                                    <a href="{{URL::to($media->url) }}" target="_blank" class="text-decoration-none">
                                        {{ URL::to($media->url) }}
                                    </a>
                                </td>
                                <td>{{ $media->mediaable_type }}</td>
                                <td>{{ $media->mediaable_id }}</td>
                                <td>{{ $media->type }}</td>


                                <td>


                                    <form action="{{ route('admin.medias.delete', $media->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="حذف"
                                                onclick="return confirm('آیا از حذف این رسانه مطمئن هستید؟')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted">هیچ رسانه‌ای ثبت نشده است.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

@endsection
