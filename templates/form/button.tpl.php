<button <?php print html_attr(['name' => 'action', 'value' => $button_id] + $field['extra']['attributes'] ?? [] ); ?>>
    <?php print $button['title'] ?? ''; ?>
</button>