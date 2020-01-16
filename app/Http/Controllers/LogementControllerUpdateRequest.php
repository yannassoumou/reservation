<?php
/**
 * Created by PhpStorm.
 * User: familianeil
 * Date: 12/27/19
 * Time: 22:27
 */

namespace App\Http\Controllers;

use App\Departement;
use App\Quartier;
use DB;
use Illuminate\Http\Request;

class LogementControllerUpdateRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|max:255',
            'start.*' => 'date',
            'end.*' => 'date'
        ];

        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

}