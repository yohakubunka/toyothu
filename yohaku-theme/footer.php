<?php
if (WP_DEBUG && current_user_can('manage_options')) {
    get_template_part('debug/config-data');
}

wp_footer();
?>


</body>

</html>