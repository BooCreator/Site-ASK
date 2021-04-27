<?php
function modChrome_modMenu($module, &$params, &$attribs){
if (!empty ($module->content)) : ?>
<div class="moduletableget('moduleclass_sfx'); ?>">
<?php if ($module->showtitle) : ?>
<h3 class="nav-title"><?php echo $module->title; ?></h3>
<?php endif; ?>
<?php echo $module->content; ?>
</div>
<?php endif;
}
?>