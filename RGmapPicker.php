<?php

class RGmapPicker extends CInputWidget
{
    private $assetsDir;

    public $title = 'Pick Location';

    public $element_id = null;

    public $value = null;

    public $name = null;

    # GMAP size
    public $map_width = '100';
    public $map_height = '100';

    # GMAP init location
    public $map_latitude = '-6.2';
    public $map_longtitude = '106.8';
    public $map_location_name = '';

    public $htmlOptions = array();

    protected $htmlopt = null;

    public function init()
    {
        if (empty($this->element_id)) {
            try {
                list($name, $id) = $this->resolveNameID();
                $this->element_id = $id;
            } catch (Exception $e) {}
        }

        if (!empty($this->htmlOptions)) {
            $opt = '';

            foreach ($this->htmlOptions as $key => $value) {
                $opt .= $key . '="' . $value . '" ';
            }

            $this->htmlopt = $opt;
        }

        if (empty($this->name)) {
            $this->name = $this->element_id;
        }

        $dir = dirname(__FILE__) . '/assets';
        $this->assetsDir = Yii::app()->assetManager->publish($dir);
    }

    public function run()
    {
        $this->registerScripts();

        if (!empty($this->element_id)) {
            $id = $this->htmlOptions['id'] = $this->element_id;
        }

        $this->render('gmap_picker');
    }

    private function registerScripts()
    {
        $mapSize = '.gllpMap { width: ' . $this->map_width . 'px; height: ' . $this->map_height . 'px; }';

        Yii::app()->clientScript
                  ->registerCssFile($this->assetsDir . '/css/jquery-gmaps-latlon-picker.css')
                  ->registerCss('gllMap', $mapSize)
                  ->registerScriptFile('http://maps.googleapis.com/maps/api/js?sensor=false', CClientScript::POS_END)
                  ->registerScriptFile($this->assetsDir . '/js/jquery-gmaps-latlon-picker.js', CClientScript::POS_END);
    }
}