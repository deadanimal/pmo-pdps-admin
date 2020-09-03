<?php

namespace App\Http\Requests;

// use App\Tag;
use App\Reqbanner;
// use App\Category;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ReqbannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'req_type' => [
                // 'required', 'min:3', Rule::unique((new Orgdata)->getTable())->ignore($this->route()->orgdata->id ?? null)
            ],
            'req_name' => [
            ],
            'news_name' => [
                // 'required'
            ],
            'news_desc' => [
                // 'required', 'exists:'.(new Category)->getTable().',id'
            ],
            'tarikh_mula' => [
                // 'required'
            ],
            'tarikh_tamat' => [
                // 'required',
                // 'date_format:d/m/Y'
            ],
            'banner_image' => [
                $this->route()->program ? 'nullable' :  'image'
                // $this->route()->program ? 'nullable' : 'required', 'image'
            ],
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            // 'category_id' => 'category',
            // 'banner_image' => 'picture'
            'req_type' => 'req_type',
            'req_name' => 'req_name',
            'news_name' => 'news_name',
            'news_desc' => 'news_desc',
            'tarikh_mula' => 'tarikh_mula',
            'tarikh_tamat' => 'tarikh_tamat',
            'banner_image' => 'banner_image',
            'obj_program' => 'obj_program',
            'manfaat' => 'manfaat',
            'kos' => 'kos',
            'kekerapan' => 'kekerapan',
            'status_pelaksanaan' => 'status_pelaksanaan',
            'tidak_aktif' => 'tidak_aktif',
            'syarat_program' => 'syarat_program',
            'agensi_url' => 'agensi_url',
            'program_logo' => 'program_logo'
        ];
    }
}
