<?php 

namespace Bakrpx\TextRazor;
use Illuminate\Support\Facades\Facade;

/**
 * Facade for the TextRazor service
 */
class TextRazorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'textrazor';
    }
}
