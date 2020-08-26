<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class NotEnoughPermissionException extends Exception
{
    public function render( $request )
    {
        if ( ! $request->expectsJson() ) {
            return response()->view( 'pages.errors.not-enough-permissions', [
                'title'         =>  __( 'Not Enough Permissions &mdash; Errors' ),
                'description'   =>  __('You\'re not allowed to see that page.' ),
                'message'       =>  $this->getMessage()
            ]);
        }

        return response()->json([ 
            'status'  =>  'failed',
            'message' => $this->getMessage() 
        ], 401);
    }
}
