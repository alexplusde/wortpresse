<?php
class wortpresse_menu extends \rex_yform_manager_dataset
{
    public function getName() :string
    {
        return $this->getValue('name');
    }
}
