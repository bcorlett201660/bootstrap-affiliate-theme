<?php
/**
 * The left sidebar.
 * 
 * @package bootstrap-affiliate
 */


global $bootstrapbasic4_sidebar_left_size;
if (null == $bootstrapbasic4_sidebar_left_size || !is_numeric($bootstrapbasic4_sidebar_left_size)) {
    $bootstrapbasic4_sidebar_left_size = 3;
}

if (is_active_sidebar('sidebar-left')) {
?> 
                <div id="sidebar-left" class="col-md-<?php echo $bootstrapbasic4_sidebar_left_size; ?>">
                    <?php do_action('before_sidebar'); ?> 
                    <?php dynamic_sidebar('sidebar-left'); ?> 
                </div>
<?php
}