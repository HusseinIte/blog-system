<?php

class PostValidator {
    private $data;
    private $errors = [];

    public function __construct($data) {
        $this->data = $data;
    }

    public function required() {
        foreach ($this->data as $key => $value) {
            if (empty($value)) {
                $this->errors[$key] = "The $key field is required.";
            }
        }
        return $this;
    }
    public function getErrors() {
        return $this->errors;
    }

    public function isValid() {
        return empty($this->errors);
    }
}