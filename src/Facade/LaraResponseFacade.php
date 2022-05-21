<?php

namespace Nisarr\LaraResponse\Facade;

use Illuminate\Support\Facades\Facade;

class LaraResponseFacade extends Facade {
   protected static function getFacadeAccessor() { 
   	return 'LaraResponse'; 
   }
 }