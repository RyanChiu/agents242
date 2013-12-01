<h1>Campaigns</h1>
<?php
/*
$str = print_r($rs, true);
$str = str_replace("\n", "<br/>", $str);
echo "<br/>" . $str;
*/
$userinfo = $this->Session->read('Auth.User.Account');
?>
<br/>
<table style="width:100%;">
<caption>Agent <?php if (!empty($rs)) echo $rs[0]['ViewMapping']['username']; ?></caption>
<thead>
<tr>
	<th><b><?php echo $this->ExPaginator->sort('Campaignid', 'ViewMapping.campaignid'); ?></b></th>
	<th><b><?php echo $this->ExPaginator->sort('Site Name', 'ViewMapping.sitename'); ?></b></th>
	<th><b><?php echo $this->ExPaginator->sort('(Host Name)', 'ViewMapping.hostname'); ?></b></th>
	<th><b><?php echo $this->ExPaginator->sort('(Abbreviation)', 'ViewMapping.abbr'); ?></b></th>
	<th><b><?php echo $this->ExPaginator->sort('Status', 'ViewMapping.flag'); ?></b></th>
</tr>
</thead>
<?php
foreach ($rs as $r) {
?>
<tr>
	<td><?php echo $r['ViewMapping']['campaignid']; ?></td>
	<td><?php echo $r['ViewMapping']['sitename']; ?></td>
	<td><?php echo $r['ViewMapping']['hostname']; ?></td>
	<td><?php echo $r['ViewMapping']['abbr']; ?></td>
	<td><?php echo $r['ViewMapping']['flag'] == 1 ? 'Active' : 'Not Used'; ?></td>
</tr>
<?php
}
?>
</table>
