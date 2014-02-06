<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<img src="<?php echo IMG_URL;?>example_logo.gif" width="120px" height="36px" border="0"> - <?php echo $site_name; ?>
	</a>
</h1>
