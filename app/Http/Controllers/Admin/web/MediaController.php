<?php

namespace App\Http\Controllers\Admin\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\FileRequest;
use App\Models\Media;
use App\Models\Project;
use App\Services\MediaServices\MediaService;
use Carbon\Carbon;

class MediaController extends Controller
{

    public function index()
    {
        $medias = Media::query()->latest()->get();


        return view('admin.medias.index', compact('medias'));
    }

    public function create()
    {
        return view('admin.medias.create');
    }
    /**
     * @param FileRequest $request
     *
     *
     * upload files with this method is possible
     */
    public function store(FileRequest $request)
    {
        MediaService::uploadIf(
            $request->hasFile('file'),
            $request->file('file'),
            $request->type,
            $request->modelable_type,
            $request->modelable_id,
        );


        return redirect()->route('admin.medias.index');

    }

    /**
     * @param FileRequest $request
     *
     * replacing file with last one
     */
    public function replace(FileRequest $request)
    {
        MediaService::replace(
            $request->file('file'),
            $request->type,
            $request->modelable_type,
            $request->modelable_id,
        );

        return response()->success(null,'فایل با موفقیت ذخیره شد');
    }


    /**
     * @param Media $media
     * @return \Illuminate\Http\RedirectResponse containing error or success response
     *
     * in deleting File process the actual file will be removed from server
     * and also the data of that file were from database will remove too
     *
     *
     */
    public function delete(Media $media)
    {
        MediaService::delete($media);
        $media->delete();


        return redirect()->route('admin.medias.index');

    }


    public function downloadFile(Media $media)
    {
        if (!file_exists(public_path($media->url))) {
            return response()->error('فایل یافت نشد');
        }

        return response()->download(public_path($media->url));
    }

}
