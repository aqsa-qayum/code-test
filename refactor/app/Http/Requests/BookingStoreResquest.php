<?php
// app/Http/Requests/BookingStoreRequest.php

namespace DTApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // Define validation rules for storing a booking here.
        ];
    }
}

?>