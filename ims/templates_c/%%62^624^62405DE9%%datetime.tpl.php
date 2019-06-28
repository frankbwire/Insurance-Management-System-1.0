<div class="input-group pgui-date-time-edit js-datetime-editor-wrap">
    <input
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "editors/editor_options.tpl", 'smarty_include_vars' => array('Editor' => $this->_tpl_vars['Editor'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        class="form-control"
        type="text"
        value="<?php echo $this->_tpl_vars['Editor']->GetValue(); ?>
"
        data-picker-format="<?php echo $this->_tpl_vars['Editor']->GetFormat(); ?>
"
        data-picker-show-time="<?php if ($this->_tpl_vars['Editor']->GetShowsTime()): ?>true<?php else: ?>false<?php endif; ?>">
    <span class="input-group-addon" style="cursor: pointer">
        <span class="icon-datetime-picker"></span>
    </span>
</div>