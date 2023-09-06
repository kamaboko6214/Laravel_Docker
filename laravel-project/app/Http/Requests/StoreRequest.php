<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'subtitle' => 'required|between:0,150',
        ];
    }

    // public function post(Request $request) {
    //     $validate_rules = Validator::make($request->all(), [
    //         'title' => 'required',
    //         'subtitle' => 'required|between:0,150',
    //     ]);
    //     if ($validate_rules->fail()) {
    //         return redirect('/test')
    //             ->withErrors($validate_rules)
    //             ->withInput();
    //     }
    //         return redirect('/create');
    // }
}
