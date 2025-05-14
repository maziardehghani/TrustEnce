<?php

namespace App\Services\MediaServices;

use App\Interfaces\Mediaable;
use App\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\select;
use function public_path;


class MediaService
{
    private static UploadedFile $file;
    private static string $type;
    private static $model;
    private static $id;
    private static $filename;
    private static $extension;


    public static function upload($file, string $type, $model, $id)
    {
        self::$file = $file;
        self::$type = $type;
        self::$model = ucfirst($model);
        self::$id = $id;
        self::$filename = self::generateName();
        self::$extension = self::generateExtension();

        return self::saveMedia();
    }

    public static function uploadIf(bool $condition, $file, string $type, $model, $id)
    {

        if (!$condition) {
            return null;
        }

        return self::upload($file, $type, $model, $id);
    }

    private static function saveMedia()
    {
        self::$file->move(public_path(self::generatePath()), self::$filename . '.' . self::$extension);

        return Media::query()->create([
            'url' => self::generatePath() . '/' . self::$filename . '.' . self::$extension,
            'name' => self::$filename . '.' . self::$extension,
            'type' => self::$type,
            'mediaable_id' => self::$id,
            'mediaable_type' => self::getClass(self::$model),
        ]);
    }

    public static function delete($media)
    {
        if (!$media) {
            return null;
        }

        File::delete(public_path($media->url));
        return $media->delete();
    }

    public static function replace($file, string $type, $model, $id)
    {

        $media = Media::query()->firstWhere([
            'mediaable_id' => $id,
            'mediaable_type' => self::getClass($model),
            'type' => $type,
        ]);

        if (File::exists(public_path($media?->url))) {
            self::delete($media);
        }

        self::uploadIf(
            !is_null($file),
            $file,
            $type,
            $model,
            $id
        );

    }

    private static function generateName()
    {
        return uniqid();
    }

    private static function getClass($model): string
    {
        return "App\Models\\" . ucfirst($model);
    }

    private static function get_type(): string
    {
        return explode('/', self::$file->getMimeType())[0];
    }

    private static function generateExtension(): string
    {
        return strtolower(self::$file->getClientOriginalExtension());
    }

    private static function generatePath()
    {
        $modelName = class_basename(self::getClass(self::$model));
        return "media/$modelName/" . self::$id;
    }


}
