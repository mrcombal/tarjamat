<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation() {
        $schedule = $this->get('schedule');
        $dates = explode(' - ', $schedule);
        $this->merge([
            'start_date'=> Carbon::createFromFormat('m/d/Y',$dates[0]),
            'end_date'  => Carbon::createFromFormat('m/d/Y',$dates[1]),
            'daily_rate'=> str_replace(',', '', $this->get('daily_rate'))
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'client'        => 'required|min:3',
            'email'         => 'required|email',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date|after_or_equal:start_date',
            'language'      => 'required|in:Arabic,English',
            'nationalities' => 'required|in:arab,western',
            'daily_rate'    => 'required|integer|min:1',
            'days'          => 'required|integer|min:1',

        ];
    }
}
