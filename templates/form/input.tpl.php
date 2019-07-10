<input <?php
print html_attr(['name' => $field_id, 'type' => $field['type']] + $field['extra']['attr'] ?? []
);
?>>