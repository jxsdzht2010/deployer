<?php

namespace REBELinBLUE\Deployer\Http\Requests;

use REBELinBLUE\Deployer\Command;
use REBELinBLUE\Deployer\Http\Requests\Request;

/**
 * Request for validating commands.
 */
class StoreCommandRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'       => 'required|max:255',
            'user'       => 'max:255',
            'script'     => 'required',
            'optional'   => 'boolean',
            'default_on' => 'boolean',
            'step'       => 'required|integer|min:' . Command::BEFORE_CLONE . '|max:' . Command::AFTER_PURGE,
            'project_id' => 'required|integer|exists:projects,id',
        ];

        // On edit we don't require the step or the project_id
        if ($this->get('id')) {
            unset($rules['step']);
            unset($rules['project_id']);
        }

        return $rules;
    }
}
