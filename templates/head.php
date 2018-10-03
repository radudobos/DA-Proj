<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<?php require_once locate_template('lib/json-ld.php'); ?>

	<?php if (is_front_page()): ?>
        <script type="application/ld+json">
            <?php echo json_encode($org); ?>
        </script>
	<?php endif; ?>

    <script type="application/ld+json">
        <?php echo json_encode($payload); ?>
    </script>
</head>