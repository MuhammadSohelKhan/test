<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report()
    {
        //
        //\Log::debug('User not found');

    }

    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render()
    {
        return response()->view('welcome');
    }
}
