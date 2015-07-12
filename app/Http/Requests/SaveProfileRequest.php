<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveProfileRequest extends Request
{

    public $username;
    public $email;
    public function __contruct($username ,$email )
    {
      $this->username = $username;
        $this->email = $email;

    }

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
            'username' => ['required'],
            'email' => ['required' , 'email']
        ];
    }
}
