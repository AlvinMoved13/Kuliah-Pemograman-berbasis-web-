<?php
$addonq = '';
if(get("q")!=""){ $addonq = " WHERE nama LIKE
'%".get('q')."%'"; }
$hasil = $koneksi->prepare("SELECT * FROM sekolah
".$addonq." ORDER BY id DESC");
$hasil->execute();
$data = $hasil->fetchAll();
?>
<a class="btn pull-right" href="index.php?p=sekolah&m=add">Tambah
Baru</a>
<h2>Data Sekolah</h2>
<div style="clear:both;width:200px;margin-right:12px;"
class="pull-right">
<form action="index.php?p=sekolah&m=search">
<input autocomplete="off" type="hidden" name="p"
value="sekolah">
<input autocomplete="off" type="text" name="q"
placeHolder="Type and enter to search" value="<?php echo
(get("q"));?>">
</form>
</div>
<div><?php echo get('q')!=""?"hasil pencarian untuk
'".(get('q'))."'":"";?></div>
<div style="clear:both">&nbsp;</div>
<table class="data">
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>Logo</th>
<th colspan="4">Action</th>
</tr>
</thead>
<tbody>
<?php
$i = 1;
foreach ($data as $key) {
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $key['nama'];?></td>
<td><?php echo $key['alamat'];?></td>