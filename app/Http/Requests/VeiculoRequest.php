<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VeiculoRequest extends Request
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
            'marca'        => 'required',
            'modelo'       => 'required',
            'tipo_veiculo' => 'required',
            'pla_letras'   => 'required|min:3',
            'pla_numeros'  => 'required|min:4',
            'cid_placa'    => 'required|min:5',
            'uf_placa'     => 'required',
            'cor'          => 'required',
            'anoFab'       => 'required',
            'chassi'       => 'required|min:17',

        ];
    }
}
