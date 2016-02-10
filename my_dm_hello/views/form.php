<?php
?>
<div class="wrap">
    <h2>Hello World Plugin Options</h2>
    <form action="options.php" method="post">
        <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
        <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
        <input type="text" name="username" value="<?php echo esc_attr( get_option('username') ); ?>" placeholder="Enter your name"/>
        <?php submit_button(); ?>
    </form>
</div>