<?php

namespace App\Providers;


use App\Models\Admin\Banner;
use App\Repository\BannerRepository\BannerRepository;

use App\Repository\BannerRepository\BannerRepositoryInterface;
use App\Repository\BannerRepository\FaqRepository;
use App\Repository\BannerRepository\SchemaRepository;
use App\Repository\BannerRepository\ServiceRepository;

use App\Repository\BlogRepository\BlogRepository;
use App\Repository\CsrRepository\CsrRepository;
use App\Repository\FaqRepository\FaqRepository as FaqRepositoryFaqRepository;
use App\Repository\GalleryRepository\GalleryRepository;
use App\Repository\TypeRepository\TypeRepository;
use App\Services\BannerServices\BannerService;
use App\Services\BlogServices\BlogService;
use App\Services\CsrServices\CsrService;
use App\Services\FaqService\FaqService;
use App\Services\GalleryService\GalleryService;
use App\Services\SchemaServices\SchemaService;
use App\Services\ServiceServices\ServiceService;
use App\Services\TypeServices\TypeService;
use Illuminate\Support\ServiceProvider;




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
        // $this->app->bind(BannerService::class, function ($app) {
        //     return new BannerService($app->make(BannerRepositoryInterface::class));
        // });
        $this->app->when(BannerService::class)
        ->needs(BannerRepositoryInterface::class)
        ->give(BannerRepository::class);

        $this->app->when(ServiceService::class)
        ->needs(BannerRepositoryInterface::class)
        ->give(ServiceRepository::class);

        $this->app->when(SchemaService::class)
        ->needs(BannerRepositoryInterface::class)
        ->give(SchemaRepository::class);

        $this->app->when(BlogService::class)
        ->needs(BannerRepositoryInterface::class)
        ->give(BlogRepository::class);

        $this->app->when(FaqService::class)
        ->needs(BannerRepositoryInterface::class)
        ->give(FaqRepositoryFaqRepository::class);


        $this->app->when(CsrService::class)
        ->needs(BannerRepositoryInterface::class)
        ->give(CsrRepository::class);

        $this->app->when(GalleryService::class)
        ->needs(BannerRepositoryInterface::class)
        ->give(GalleryRepository::class);

        $this->app->when(TypeService::class)
        ->needs(BannerRepositoryInterface::class)
        ->give(TypeRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
