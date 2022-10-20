<?php
/**
 * @var string $cacheDir
 * @see \WPStaging\Backend\Notices\Notices::messages
 */
?>
<div class="notice notice-error">
    <p><strong><?php esc_html_e('WP STAGING - Folder Permission error.', 'wp-staging'); ?></strong>
        <br>
        <?php echo sprintf(esc_html__('The folder %s is not write and/or readable.', 'wp-staging'), '<code>' . esc_html($cacheDir) . '</code>'); ?>
        <br>
        <?php esc_html_e('Check if this folder exists! Folder permissions should be chmod 755 or higher.', 'wp-staging'); ?>
    </p>
</div>
