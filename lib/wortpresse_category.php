<?php
class wortpresse_category extends \rex_yform_manager_dataset
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
