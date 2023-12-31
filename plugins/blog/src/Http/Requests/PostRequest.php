<?php

namespace Botble\Blog\Http\Requests;

use Botble\Support\Http\Requests\Request;

class PostRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @author Sang Nguyen
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'description' => 'max:400',
            'categories' => 'required',
            'slug' => 'required|max:255',
            // 'prices' => 'required',
            // 'label_hot' => 'required',
            // 'label_discount' => 'required',
            // 'otr_prices' => 'required',
            // 'img' => 'required',
            // 'mesin' => 'required',
            // 'rangka' => 'required',
            // 'dimensi' => 'required',
            // 'kapasitas' => 'required',
            // 'kelistrikan' => 'required',
        ];
    }
}
