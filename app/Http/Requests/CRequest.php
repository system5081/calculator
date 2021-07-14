<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'equation'=>'required|string|max:100',
            
        ];
    }
}
