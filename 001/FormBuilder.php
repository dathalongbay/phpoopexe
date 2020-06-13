<?php
class FormBuilder {

    public $form_name;
    public $form_method;
    public $form_action;

    public function __construct($form_name_param, $form_method_param, $form_action_param)
    {
        $this->form_name = $form_name_param;
        $this->form_method = $form_method_param;
        $this->form_action = $form_action_param;
    }

    public function formBegin() {
        $html = "<form name='$this->form_name' method='$this->form_method' action='$this->form_action'>";
        return $html;
    }

    public function formEnd() {
        $html = '</form>';
        return $html;
    }

    public function text($name, $value,$placeholder) {
        $html = "<input type='text' name='$name' value='$value' placeholder='$placeholder' />";
        return $html;
    }

    public function email($name, $value,$placeholder) {
        $html = "<input type='email' name='$name' value='$value' placeholder='$placeholder' />";
        return $html;
    }

    public function password($name, $value,$placeholder) {
        $html = "<input type='password' name='$name' value='$value' placeholder='$placeholder' />";
        return $html;
    }

    public function textarea($name, $value) {
        $html = "<textarea name='$name'>$value</textarea>";
        return $html;
    }
}