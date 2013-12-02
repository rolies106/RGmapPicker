<fieldset class="gllpLatlonPicker" id="<?php echo 'dsa' ?>" <?php echo $this->htmlopt; ?>>
    <legend>
        <?php echo $this->title; ?>
    </legend>

    <div class="form-search">
        <input type="text" class="gllpSearchField search-query" placeholder="Search for location...">
        <input type="button" class="gllpSearchButton btn" value="search">
    </div>

    <br/>
    <div class="gllpMap clearfix">Google Maps</div>
    <br/>

    <input type="text" name="<?php echo $this->name; ?>[gmap_location_name]" class="gllpLocationName input-block-level" value="<?php echo $this->map_location_name; ?>" />
    <input type="hidden" name="<?php echo $this->name; ?>[gmap_latitude]" class="gllpLatitude" value="<?php echo $this->map_latitude; ?>"/>
    <input type="hidden" name="<?php echo $this->name; ?>[gmap_longtitude]" class="gllpLongitude" value="<?php echo $this->map_longtitude; ?>"/>
    <input type="hidden" class="gllpZoom" value="11"/>
</fieldset>