<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 <?php foreach ($fields as $id => $field): ?>
 <?php if (!empty($field->separator)): ?>
 <?php print $field->separator; ?>
 <?php endif; ?>

 <?php print $field->wrapper_prefix; ?>
 <?php print $field->label_html; ?>
 <?php print $field->content; ?>
 <?php print $field->wrapper_suffix; ?>
 <?php endforeach; ?>

 * @ingroup views_templates
 */
?>

<div class="events-row clearfix hover-highlight hover p-t-15 p-b-15">
    <div class="col-event-photo col-md-3 col-xs-3 p-r-10">
        <?php
	        print $fields['field_photo']->content;
	    ?>
    </div>
    <div class="col-event-text col-md-6 col-xs-6 p-l-5 p-r-5">
        <?php print $fields['title']->content; ?>
		<?php print $fields['body']->content; ?>
    </div>
    <div class="col-event-date col-md-3 col-xs-3 p-l-10">
	    <div class="event-date-box">
		    <?php print $fields['field_event_date_1']->content;?>
		    <?php print $fields['field_event_date']->content;?>
	    </div>
    </div>
</div>