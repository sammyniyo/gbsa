<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

public function map()
{
    $this->mapApiRoutes();

    $this->mapWebRoutes();

    $this->mapAdminRoutes(); 
}

protected function mapAdminRoutes()
{
    Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/admin.php'));
}
