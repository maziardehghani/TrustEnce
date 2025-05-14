<?php

namespace App\Providers;

use App\Services\ResponseServices\ResponseService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class MacroServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Response::macro('success', function ($data = null, $message = 'علی اشرفی کونیه', $status = 200) {
            return ResponseService::successResponse($data, $message, $status = 200);
        });

        Response::macro('error', function ($message, $status = 400) {
            return ResponseService::errorResponse($message, $status);
        });

        Response::macro('excelResponse', function ($writer) {
            return ResponseService::excelResponse($writer);
        });

        Response::macro('pdfResponse', function ($meta, $fileName) {
            return ResponseService::pdfResponse($meta, $fileName);
        });

        Collection::macro('fillMissingMonths', function ($month) {
            $shamsiMonths = collect(range(0, $month))
                ->mapWithKeys(function ($i) {
                    return [verta()->subMonths($i)->format('%B %y') => 0];
                });

            return $shamsiMonths->reverse()->merge($this->items);
        });


        Collection::macro('persian', function () {

            $translate = [
                "dashboard-charts" => 'آمار',
                "users-index" => 'کاربران',
                "users-update" => 'ویرایش کاربران',
                "users-store" => 'ذخیره کاربران',
                "users-delete" => 'حذف کاربران',
                "users-show" => 'نمایش کاربران',
                "projects-index" => 'طرح ها',
                "projects-update" => 'ویرایش طرح ها',
                "projects-store" => 'ذخیره طرح ها',
                "projects-delete" => 'حذف طرح ها',
                "projects-show" => 'جزییات طرح',
                "invoices-index" => 'صورت حساب ها',
                "invoices-show" => 'نمایش صورتحساب',
                "contracts-index" => 'قرارداد ها',
                "contracts-show" => 'نمایش قرارداد',
                "contracts-update" => 'ویرایش قرارداد',
                "contracts-store" => 'ذخیره قرارداد',
                "contracts-delete" => 'حذف قرارداد',
                "contracts-download" => 'دانلود قرارداد ',
                "articles-index" => 'مقالات',
                "articles-update" => 'ویرایش مقالات',
                "articles-store" => 'ذخیره مقالات',
                "articles-delete" => 'حذف مقالات',
                "articles-show" => 'نمایش مقالات',
                "comments-index" => 'کامنت ها',
                "comments-update" => 'ویرایش کامنت ها',
                "comments-answer" => 'پاسخ به کامنت ها',
                "comments-delete" => 'حذف کامنت ها',
                "comments-show" => 'نمایش کامنت',
                "coworkers-index" => 'همکاران',
                "coworkers-update" => 'ویرایش همکاران',
                "coworkers-store" => 'ذخیره همکاران',
                "coworkers-delete" => 'حذف همکاران',
                "coworkers-show" => 'نمایش همکاران',
                "admins-index" => 'ادمین ها',
                "admins-add" => 'افزودن ادمین',
                "admins-accessLevel" => 'سطح دسترسی',
                "admins-seeRole" => 'نمایش نقش ها',
                "admins-show" => 'نمایش نقش',
                "tickets-index" => 'تیکت ها',
                "tickets-answer" => 'پاسخ به تیکت ها',
                "tickets-delete" => 'حذف تیکت ها',
                "tickets-store" => 'ذخیره تیکت ها',
                "tickets-show" => 'نمایش تیکت',
                "installments-index" => 'اقساط',
                "installments-pay" => 'پرداخت اقساط',
                "installments-store" => 'ثبت اقساط',
                "installments-update" => 'ویرایش اقساط',
                "installments-show" => 'نمایش اقساط',
                "protests-index" => 'شکایات',
                "protests-show" => 'نمایش شکایات',
                "protests-store" => 'پاسخ شکایات',
                "protests-update" => 'ویرایش شکایات',
                "protests-delete" => 'حذف شکایات',
                "transactions-index" => 'تراکنش ها',
                "transactions-show" => 'نمایش تراکنش',
                "transactions-update-receipt" => 'ثبت فیش',
                "transactions-store-receipt" => 'ویرایش فیش',
                "transactions-delete" => "حذف تراکنش ها",
                "teams-index" => 'تیم آیفاند',
                "teams-show" => 'نمایش تیم',
                "teams-store" => 'ذخیره تیم',
                "teams-update" => 'ویرایش تیم',
                "teams-delete" => 'حذف تیم',
                "medias-store" => 'ذخیره فایل',
                "medias-replace" => 'ویرایش فایل',
                "medias-download" => 'دانلود فایل',
                "medias-delete" => 'حذف فایل',
                "seos-index" => 'سعو',
                "seos-store" => 'ذخیره سعو',
                "seos-delete" => 'حذف سعو',
                "notifications-index" => 'اعلان ها',
                "notifications-myNotifications" => 'اعلان های من',
                "notifications-unreadNotifications" => 'اعلان های خوانده نشده',
                "notifications-markAsRead" => 'خواندن اعلان ها',
            ];

            return $this->map(function ($item) use ($translate) {
                return $translate[$item] ?? $item;
            });

        });
    }
}
