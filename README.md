# RGmapPicker

This is Yii extension for GMap latitude and longitude picker as form component, this extension is based on [JQuery GMap Longitude and Latitude Picker](https://github.com/wimagguc/jquery-latitude-longitude-picker-gmaps) by [Richard Dancsi](http://www.wimagguc.com/) you can see [live demo here](http://www.wimagguc.com/projects/jquery-latitude-longitude-picker-gmaps/).

## Requirement

- jQuery Javascript Framework

## Configuration

- Copy all files to ``protected/extensions/RGmapPicker``

## How to

### Add GMap Picker to form

Inside your ``<form></form>`` tag add this php code

```php
$this->widget('ext.RGmapPicker.RGmapPicker',
                array(
                    'title' => 'Location',
                    'element_id' => 'GMapLocation',
                    'map_width' => 670,
                    'map_height' => 300,
                    'map_latitude' => '-6.2', # Your default position
                    'map_longitude' => '106', # Your default position
                    'map_location_name' => 'Default position name',
                )
            );
```

## Copyrights

Copyright (c) 2013 Rolies106

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.