<?php

namespace Nisarr\LaraResponse\Facade;

use Illuminate\Support\Facades\Facade;

class RespondFacade extends Facade {
   protected static function getFacadeAccessor() { 
   	return 'Respond'; 
   }
 }