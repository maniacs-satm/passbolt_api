<?php
/**
 * Login Form View (Guest)
 *
 * @copyright    copyright 2012 passbolt.com
 * @license      http://www.passbolt.com/license
 * @package      app.View.Users.login
 * @since        version 2.12.9
 */
	$this->assign('title',  __('Login'));
?>
    <div class="users admin_login form">
    <?php echo $this->MyForm->create('User');?>
      <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->MyForm->input('User.username', array('label' => __('Username'), 'class' =>'required')); ?>
        <?php echo $this->MyForm->input('User.password', array('label' => __('Password'), 'class' =>'required')); ?>
      </fieldset>
      <?php echo $this->MyForm->submit(__('Login'));?>
    <?php echo $this->MyForm->end();?>
    </div>