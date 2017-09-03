<?php
$doc = &JFactory::getDocument();
$doc->addScript(JURI::base() . "/modules/mod_citis/js/jquery-3.2.1.min.js");
$doc->addScript(JURI::base() . "/modules/mod_citis/js/ajax.js");

?>
<script type="text/javascript">jQuery.noConflict();</script>
<form name="formcity">
<input type="text" name="namecity" id="ajaxPress" placeholder="москва" /><br/>
<input type="button" id="ajaxSubmit" name="<?php echo JURI::base(); ?>" value="Search" />
 ID of city: <span id="id_city"></span>
</form>
