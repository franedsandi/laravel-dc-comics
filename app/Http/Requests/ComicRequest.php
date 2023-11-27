<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:500'],
            'description' => ['required', 'min:3', 'max:500'],
            'thumb' => ['required', 'min:3', 'max:500'],
            'artists' => ['nullable', 'max:255'],
            'writers' => ['nullable', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'series' => ['required', 'min:3'],
            'sale_date' => ['required'],
            'type' => ['required', 'min:3'],
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'You must insert a title.',
            'title.min' => 'The title must have at least :min characters.',
            'title.max' => 'The title can have at most :max characters.',
            'description.required' => 'You must insert a description.',
            'description.min' => 'The description must have at least :min characters.',
            'description.max' => 'The description can have at most :max characters.',
            'thumb.required' => 'You must insert a thumbnail.',
            'thumb.min' => 'The thumbnail must have at least :min characters.',
            'thumb.max' => 'The thumbnail can have at most :max characters.',
            'artists.max' => 'The artists can have at most :max characters.',
            'writers.max' => 'The writers can have at most :max characters.',
            'price.required' => 'You must insert a price.',
            'price.numeric' => 'The price must be numeric.',
            'price.min' => 'The price must be at least :min.',
            'series.required' => 'You must insert a series.',
            'series.min' => 'The series must have at least :min characters.',
            'sale_date.required' => 'You must insert a sale date.',
            'type.required' => 'You must insert a type.',
            'type.min' => 'The type must have at least :min characters.',
        ];
    }

}
