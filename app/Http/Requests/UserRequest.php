<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'=>'unique:users',
            'fax'=>'numeric',
            'password'=>"confirmed|min:6",
            'city'=>"string",
            'postalcode'=>"numeric"
        ];
    }
    public function messages()
    {
        return [
            'email.unique'=>'این ایمیل قبلا وارد شده است',
            'fax.numeric'=>'شماره فکس را به صورت اعداد انگلیسی وارد کنید',
            'password.confirmed'=>'تایید پسورد درست نیست',
            'password.min'=>'پسورد باید حداقل 6 کارکتر باشد',
            'city.string'=>'نام شهر را به صورت حروف بنویسید',
            'postalcode.numeric'=>'کد پستی را به صورت اعداد انگلیسی وارد کنید',
        ];
    }
}
