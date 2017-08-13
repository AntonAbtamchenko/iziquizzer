<?php

namespace App\Http\Requests\Quiz;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateRequest
 *
 * @package App\Http\Requests\Quiz
 */
class CreateRequest extends FormRequest
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
            'Quiz.title' => 'required|string|max:200',
            'Quiz.excerpt' => 'string|max:250',
            'questionsCount' => 'required|integer|between:1,30',
            'answersCount' => 'required|integer|between:2,5'
        ];
    }
}
