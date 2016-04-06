
<table class="table">
    <tr>
        <th>Adı Soyadı</th>
        <th>Telefon</th>
        <th></th>
    </tr>
<?php foreach ($model as $row): ?>
    <tr>
        <td><?php echo $row->adi_soyadi; ?></td>
        <td><?php echo $row->telefon; ?></td>
        <td></td>
    </tr>
<?php endforeach; ?>
</table>