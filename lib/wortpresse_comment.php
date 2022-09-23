<?php
class wp_comment extends \rex_yform_manager_dataset
{
    public function getName() :string
    {
        return $this->getValue('name');
    }
    public function getParent()
    {
        return; // To Do
    }
}
