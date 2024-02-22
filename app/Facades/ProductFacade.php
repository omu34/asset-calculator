<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;
use App\Services\ProductService;

class ProductFacade extends Facade{

    protected static function getFacadeAccessor(){

        return ProductService::class;
    }
}
