<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'name'             => [
        'data-msg-required'=>'Escriba su nombre y apellidos por favor.',
        'data-msg-minlength'=>'El nombre debe contener al menos {0} carácteres.',
    ],
    'email'             => [
        'data-msg-required'=>'Escriba su mail por favor.',
        'data-msg-email'=>'Escriba un mail válido por favor.',
    ],
    'subject'             => [
        'data-msg-required'=>'Escriba un tema por favor.',
    ],
    'phone'             => [
        'data-msg-required'=>'Escriba su número de teléfono por favor.',
        'data-msg-digits'=>'Escriba sólo digitos por favor.',
        'data-msg-minlength'=>'El número de teléfono debe contener al menos {0} digitos.',
        'data-msg-maxlength'=>'El número de teléfono puede contener como máximo {0} digitos.',
    ],
    'message'             => [
        'data-msg-required'=>'Escriba un mensaje por favor.',
    ],
    

];
