<?php 

namespace App\Core\Validator;

class Validator 
{
    /**
     * List of available filters
     * @var array
     */ 
    protected $filters = array(
        'required',
        'mail'
    );
    
    /**
     * data to check
     * @var array
     */ 
    protected $data;
    
    /**
     * List of rules
     * @var array
     */
    protected $rules;
    
    public function __construct($data = array(), $rules = array()) 
    {
        $this->data = $data;
        $this->rules = $rules;
    }
    
    public function passes()
    {
        foreach($this->rules as $field => $rules) {
            $listRules = explode('|', $rules);
            foreach($listRules as $rule) {
                if (strpos($rule, ':') !== false) {
                    $params = explode(':', $rule);
                    $filter = array_shift($params);
                    if (in_array($params[0], $this->filters)) {
                        $this->$filter($this->data[$field], $params);
                    }
                } else {
                    $this->$rule($this->data[$field]);
                }
            }
        }
    }
    
    public function fails() 
    {
        return ! ($this->passes());
    }
    
    /**
     * Check if a value is a mail
     * @params $value
     * @return boolean
     */ 
    public function mail($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    
    
}
