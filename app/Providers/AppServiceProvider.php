<?php

namespace portal\Providers;
//*******agregar esta linea******//
use Blade;
//*******************************//
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //*******metodo para utilizar switch en blade******//
	    Blade::extend(function($value, $compiler){
            $value = preg_replace('/(\s*)@switch\((.*)\)(?=\s)/', '$1<?php switch($2):', $value);
            $value = preg_replace('/(\s*)@endswitch(?=\s)/', '$1endswitch; ?>', $value);
            $value = preg_replace('/(\s*)@case\((.*)\)(?=\s)/', '$1case $2: ?>', $value);
            $value = preg_replace('/(?<=\s)@default(?=\s)/', 'default: ?>', $value);
            $value = preg_replace('/(?<=\s)@breakswitch(?=\s)/', '<?php break;', $value);
            return $value;
    	});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
