<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AitRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'cidade' => 'required',
            'veiculo_id' => 'required',
            'ait_num' => 'required|min:3',
            'ait_data' => 'required',
            
        ];
    }
}
