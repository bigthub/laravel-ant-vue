<?php

namespace App\Exceptions;

class ValidateException extends \Exception
{
    public function render()
    {
        if(!empty($this->message)){

            $date = explode(',',$this->message);
        }
        return response()->json([
            'status' => 406,
            'message' => $date,
        ]);
    }
}
