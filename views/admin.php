<p style="color: #F66;">
  First of all you need to check that plugins are enabled in
  <a href="https://www.heiaheia.com/settings/edit" target="_blank">your HeiaHeia profile</a>.
</p>

<p>
  <label for="<?php echo $this->get_field_id('title'); ?>"><?php echo _e('Title'); ?></label>
  <input type="text" id ="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" class="widefat">
</p>

<p>
  <label for="<?php echo $this->get_field_id('object_id'); ?>"><?php echo _e('Object ID'); ?> (user, group or company) &ndash; <a href="https://www.heiaheia.com/settings/user_ids" target="_blank">Get ID</a></label>
  <input type="text" id ="<?php echo $this->get_field_id('object_id'); ?>" name="<?php echo $this->get_field_name('object_id'); ?>" value="<?php echo $object_id; ?>" class="widefat">
</p>

<p>
  <label for="<?php echo $this->get_field_id('content_type'); ?>"><?php echo _e('Content type'); ?></label>
  <select id ="<?php echo $this->get_field_id('content_type'); ?>" name="<?php echo $this->get_field_name('content_type'); ?>" class="widefat">
    <option value="latest_activities" <?php if ($content_type == 'latest_activities') echo 'selected'; ?>>Latest activities</option>
    <option value="top_5_sports"      <?php if ($content_type == 'top_5_sports')      echo 'selected'; ?>>Top 5 sports</option>
  </select>
</p>

<p>
  <label for="<?php echo $this->get_field_id('width'); ?>"><?php echo _e('Width'); ?></label>
  <input type="text" id ="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" value="<?php echo $width; ?>" class="widefat" placeholder="100%">
</p>

<p>
  <label for="<?php echo $this->get_field_id('height'); ?>"><?php echo _e('Height'); ?></label>
  <input type="text" id ="<?php echo $this->get_field_id('height'); ?>" name="<?php echo $this->get_field_name('height'); ?>" value="<?php echo $height; ?>" class="widefat" placeholder="370px">
</p>

<p>
  <label for="<?php echo $this->get_field_id('lang'); ?>"><?php echo _e('Widget language'); ?></label>
  <select id ="<?php echo $this->get_field_id('lang'); ?>" name="<?php echo $this->get_field_name('lang'); ?>" class="widefat">
    <option value="da" <?php if ($lang == 'da') echo 'selected'; ?>>Dansk</option>
    <option value="sl" <?php if ($lang == 'sl') echo 'selected'; ?>>Slovenščina</option>
    <option value="es" <?php if ($lang == 'es') echo 'selected'; ?>>Español</option>
    <option value="fr" <?php if ($lang == 'fr') echo 'selected'; ?>>Français</option>
    <option value="it" <?php if ($lang == 'it') echo 'selected'; ?>>Italiano</option>
    <option value="se" <?php if ($lang == 'se') echo 'selected'; ?>>Svenska</option>
    <option value="fi" <?php if ($lang == 'fi') echo 'selected'; ?>>Suomi</option>
    <option value="no" <?php if ($lang == 'no') echo 'selected'; ?>>Norsk</option>
    <option value="de" <?php if ($lang == 'de') echo 'selected'; ?>>Deutsch</option>
    <option value="en" <?php if ($lang == 'en') echo 'selected'; ?>>English</option>
    <option value="ru" <?php if ($lang == 'ru') echo 'selected'; ?>>Русский</option>
  </select>
</p>

<p>
  <label for="<?php echo $this->get_field_id('units'); ?>"><?php echo _e('Measurement units'); ?></label>
  <select id ="<?php echo $this->get_field_id('units'); ?>" name="<?php echo $this->get_field_name('units'); ?>" class="widefat">
    <option value="metric"   <?php if ($units == 'metric')   echo 'selected'; ?>>Metric</option>
    <option value="imperial" <?php if ($units == 'imperial') echo 'selected'; ?>>Imperial</option>
  </select>
</p>
