<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'Polje mora biti prihvaćeno.',
    'active_url'           => 'Polje nije validan URL.',
    'after'                => 'Polje mora biti datum posle :date.',
    'alpha'                => 'Polje može sadržati samo slova.',
    'alpha_dash'           => 'Polje može sadržati samo slova, brojeve i povlake.',
    'alpha_num'            => 'Polje može sadržati samo slova i brojeve.',
    'array'                => 'Polje mora sadržati nekih niz stavki.',
    'before'               => 'Polje mora biti datum pre :date.',
    'between'              => [
        'numeric' => 'Polje mora biti između :min - :max.',
        'file'    => 'Fajl mora biti između :min - :max kilobajta.',
        'string'  => 'Polje mora biti između :min - :max karaktera.',
        'array'   => 'Polje mora biti između :min - :max stavki.',
    ],
    'boolean'              => 'Polje mora biti tačno ili netačno',
    'confirmed'            => 'Potvrda polja se ne poklapa.',
    'date'                 => 'Polje nije važeći datum.',
    'date_format'          => 'Polje ne odgovora prema formatu :format.',
    'different'            => 'Polja i :other moraju biti različita.',
    'digits'               => 'Polje mora sadržati :digits šifri.',
    'digits_between'       => 'Polje mora biti izemđu :min i :max šifri.',
    'distinct'             => 'The field has a duplicate value.',
    'email'                => 'Format polja nije validan.',
    'exists'               => 'Odabrano polje nije validno.',
    'filled'               => 'Polje je obavezno.',
    'image'                => 'Polje mora biti slika.',
    'in'                   => 'Odabrano polje nije validno.',
    'in_array'             => 'The field does not exist in :other.',
    'integer'              => 'Polje mora biti broj.',
    'ip'                   => 'Polje mora biti validna IP adresa.',
    'json'                 => 'The must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'Polje mora biti manje od :max.',
        'file'    => 'Polje mora biti manje od :max kilobajta.',
        'string'  => 'Polje mora sadržati manje od :max karaktera.',
        'array'   => 'Polje ne smije da image više od :max stavki.',
    ],
    'mimes'                => 'Polje mora biti fajl tipa: :values.',
    'min'                  => [
        'numeric' => 'Polje mora biti najmanje :min.',
        'file'    => 'Fajl mora biti najmanje :min kilobajta.',
        'string'  => 'Polje mora sadržati najmanje :min karaktera.',
        'array'   => 'Polje mora sadrzati najmanje :min stavku.',
    ],
    'not_in'               => 'Odabrani element polja nije validan.',
    'numeric'              => 'Polje mora biti broj.',
    'present'              => 'The field must be present.',
    'regex'                => 'Format polja nije validan.',
    'required'             => 'Polje je obavezno.',
    'required_if'          => 'Polje je potrebno kada polje :other sadrži :value.',
    'required_unless'      => 'The field is required unless :other is in :values.',
    'required_with'        => 'Polje je potrebno kada polje :values je prisutan.',
    'required_with_all'    => 'Polje je obavezno kada je :values prikazano.',
    'required_without'     => 'Polje je potrebno kada polje :values nije prisutan.',
    'required_without_all' => 'Polje je potrebno kada nijedan od sledeći polja :values nisu prisutni.',
    'same'                 => 'Polja i :other se moraju poklapati.',
    'size'                 => [
        'numeric' => 'Polje mora biti :size.',
        'file'    => 'Fajl mora biti :size kilobajta.',
        'string'  => 'Polje mora biti :size karaktera.',
        'array'   => 'Polje mora sadržati :size stavki.',
    ],
    'string'               => 'Polje mora sadržati slova.',
    'timezone'             => 'Polje mora biti ispravna vremenska zona.',
    'unique'               => 'Polje već postoji.',
    'url'                  => 'Format polja ne važi.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        //
    ],

];
