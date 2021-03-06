<?php

namespace App\Http\Requests;

use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateFuelStationRequest extends FormRequest
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
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        throw_if(!$this->expectsJson(), new HttpResponseException(
            response([
                'errors' => [
                    'message' => ['The request expects a JSON body']
                ]
            ], Response::HTTP_BAD_REQUEST)
        ));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'calle' => 'required|string|max:255|min:2',
            'rfc' => 'required|alpha_num|max:15',
            'razonsocial' => 'required|string|max:255|min:2',
            'numeropermiso' => 'required|string|max:255|min:2',
            'fechaaplicacion' => 'required|date',
            'permisoid' => 'required|string|max:6|min:2',
            'longitude' => 'required',
            'latitude' => 'required',
            'codigopostal' => 'required|string|max:6|min:4',
            'colonia' => 'sometimes|string|max:255|min:2',
            'municipio' => 'required|exists:municipalities,id',
            'estado' => 'required|exists:states,id',
            'regular' => 'required',
            'premium' => 'required',
        ];
    }

    public function after()
    {
        $data = (object) [];

        $data->calle = $this->calle;
        $data->rfc = $this->rfc;
        $data->razon_social = $this->razonsocial;
        $data->date_insert = $this->date_insert;
        $data->numero_permiso = $this->numeropermiso;
        $data->fecha_aplicacion = $this->fechaaplicacion;
        $data->permiso_id = $this->permisoid;
        $data->longitude = $this->longitude;
        $data->latitude = $this->latitude;
        $data->codigo_postal = $this->codigopostal;
        $data->colonia = $this->colonia;
        $data->municipio = $this->municipio;
        $data->estado = $this->estado;
        $data->regular = $this->regular;
        $data->premium = $this->premium;

        return $data;
    }

    public function attributes()
    {
        return [
            'razonsocial' => 'raz??n social',
            'numeropermiso' => 'n??mero de permiso',
            'fechaaplicacion' => 'fecha de aplicaci??n',
            'permisoid' => 'permiso id',
            'codigopostal' => 'c??digo postal',
            'longitude' => 'longitud',
            'latitude' => 'latitud'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = [
            'errors' => (new ValidationException($validator))->errors(),
        ];

        throw new HttpResponseException(
            response($errors, Response::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
