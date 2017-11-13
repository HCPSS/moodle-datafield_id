<?php

class data_field_id extends data_field_base {
    public $type = 'id';

    public function display_add_field($recordid = 0, $formdata = null) {
        return 'display add field';
    }

    public function display_browse_field($recordid, $template) {
        return $recordid;
    }

    public function update_content($recordid, $value, $name = '') {
        return true;
    }

    public function get_sort_sql($fieldname) {
        return $fieldname;
    }

    public function get_content_value($content) {
        return trim($content->content, "\r\n ");
    }

    function name() {
        return get_string('fieldtypelabel', "datafield_$this->type");
    }
    
    public function display_search_field($value = '') {
        return '';
    }
}
