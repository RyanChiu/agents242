<center>
<b><font color="red"><?php echo $this->Session->flash('auth'); ?></font></b>
<font color="red"><?php echo $this->Session->flash(); ?></font>
</center>
<?php
echo $this->Form->create(null, array('controller' => 'accounts', 'action' => 'forgotpwd'));
?>
<table style="width:100%">
<tr>
	<td colspan="2" align="center" style="color:white;">
		<b>Forgot your password?</b>
		<br/>
		<b>
		Just enter your username&amp;email address below,
		and the password will be sent.</b>
	</td>
</tr>
<tr><td>&nbsp;</td><td></td></tr>
<tr>
<td align="right" style="width:45%;color:white;"><b>Your Username:</b></td>
<td align="left">
<?php
echo $this->Form->input('Forgot.username', array('label' => '', 'style' => 'width:160px;'));
?>
</td>
</tr>
<tr><td>&nbsp;</td><td></td></tr>
<tr>
<td align="right" style="color:white;"><b>Email Address:</b></td>
<td align="left">
<?php
echo $this->Form->input('Forgot.email', array('label' => '', 'style' => 'width:160px;'));
?>
</td>
</tr>
<tr><td>&nbsp;</td><td></td></tr>
<tr>
<td align="center" colspan="2">
<?php
echo $this->Form->submit('iconForgotpwd.png', array('style' => 'border:0px;width:67px;height:43px;'));
echo '<br/>'
	. $this->Html->link(
		'I didn\'t forget, let me log in!',
		array('controller' => 'accounts', 'action' => 'login'),
		null, false, false
	);
?>
</td>
</tr>
<tr>
<td align="center" colspan="2">&nbsp;</td>
</tr>
</table>
<?php
echo $this->Form->end();
?>
