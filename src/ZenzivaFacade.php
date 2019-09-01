<?php
namespace rizkymiff\zenzizvasms;

use Illuminate\Support\Facades\Facade;
/**
 * 
 */
class ZenzivaFacade extends Facade
{
	protected function getFacadeAccessor() {
		return 'zenziva';
	}
}