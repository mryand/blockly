<?php
// =====================================================================
// INDEX
// =====================================================================
// The site's most basic pieces.
// =====================================================================

// Header
get_header();

// Standard Layouts
get_template_part('layouts/single');
get_template_part('layouts/archive');
get_template_part('layouts/404');

// Footer
get_footer();
?>