<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
            'userName' => 'required',
            'password' => 'required',
            //
        ];
    }
    public function getCredentials()
    {

        $userName = $this->get('userName');
        if ($this->isEmail($userName)) {
            return [
                'email' => $userName,
                'password' => $this->get('password'),
            ];
            # code...
        }
        return $this->only('userName', 'password');
    }
    public function isEmail($value)
    {
        $factory = $this->container->make(ValidationFactory::class);
        return !$factory->make(['userName' => $value], ['userName' => 'email'])->fails();
    }
}
