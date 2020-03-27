<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SectionService;
use App\Services\ContinentService;
use App\Services\ResponseService;
use App\Services\InstitutionService;
use Illuminate\Support\Facades\View;


class ComposerServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            $view->with(['sections' => SectionService::getSections(), 'continents'=> ContinentService::getContinents()]);
        });

        View::composer(['apply', 'start', 'review', 'pdfs.review'], function($view)
        {
            $view->with(['responses' => ResponseService::getResponses()]);
        });

        View::composer(['apply', 'review', 'layouts.template', 'pdfs.review'], function($view)
        {
            $view->with(['institution' => InstitutionService::getCurrentInstitution()]);
        });
    }
}
