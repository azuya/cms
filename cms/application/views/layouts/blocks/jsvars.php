var CURRENT_URL			= '<?php echo Request::current()->url(TRUE) . URL::query() ; ?>',
	BASE_URL			= '<?php echo URL::site(ADMIN_DIR_NAME, TRUE); ?>',
	SITE_URL			= '<?php echo URL::base(TRUE); ?>',
	ADMIN_DIR_NAME		= '<?php echo ADMIN_DIR_NAME; ?>',
	ADMIN_RESOURCES		= '<?php echo ADMIN_RESOURCES; ?>',
	PUBLIC_URL			= '<?php echo PUBLIC_URL; ?>',
	PLUGINS_URL			= '<?php echo PLUGINS_URL; ?>',
	LOCALE				= '<?php echo I18n::lang(); ?>',
	CONTROLLER			= '<?php echo strtolower(Request::current()->controller()); ?>',
	ACTION				= '<?php echo Request::current()->action(); ?>',
	TAG_SEPARATOR		= '<?php echo Model_Tag::SEPARATOR; ?>',
	USER_ID				= <?php echo (int) AuthUser::getId(); ?>,
	PAGE_STATUSES		= '<?php echo json_encode(Model_Page::statuses()); ?>',
	PAGE_LOGINS			= '<?php echo json_encode(Model_Page::logins()); ?>',
	FILTERS				= '<?php echo json_encode(Filter::findAll()); ?>';