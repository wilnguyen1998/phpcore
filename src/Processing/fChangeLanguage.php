<?php
class fChangeLanguage
{
    private string $vServerValue;
    public function __construct($ServerValue)
    {
        $this->vServerValue = $ServerValue;
    }


    function LanguageSelected ($SelectedValue) : void {
        if ($SelectedValue == $this->vServerValue) {
            echo "selected = 'selected'";
        } else {
            echo "";
        }
    }


}