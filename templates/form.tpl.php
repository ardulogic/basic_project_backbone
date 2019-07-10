<?php if (isset($form) && !empty($form)): ?>
    <form <?php print html_attr($form['attr'] ?? ['method' => 'POST']); ?>>

        <!-- Field Generation Start -->
        <?php foreach ($form['fields'] as $field_id => $field): ?>

            <?php if (isset($field['label'])): ?>
                <!--If the label is set - print fields inside label-->
                <label>
                    <span class="label">
                        <?php print $field['label']; ?>
                    </span>
            <?php endif; ?>

                <?php if ($field['type'] === 'text'): ?>
                    <?php require 'form/input.tpl.php'; ?>
                <?php elseif ($field['type'] === 'select'): ?>
                    <?php require 'form/select.tpl.php'; ?>
                <?php endif; ?>

            <?php if (isset($field['label'])): ?>
                </label>
            <?php endif; ?>

        <?php endforeach; ?>
        <!-- Field Generation End -->

        <?php if (isset($form['buttons'])): ?>

            <!-- Field Generation Start -->
            <?php foreach ($form['buttons'] as $button_id => $button): ?>
                <?php require 'form/button.tpl.php'; ?>
            <?php endforeach; ?>
            <!-- Field Generation End -->   

        <?php endif; ?>
    </form>
<?php endif; ?>