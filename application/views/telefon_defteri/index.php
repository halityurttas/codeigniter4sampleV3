<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Telefon Defteri</h3>
            <a href="<?php echo base_url(); ?>index.php/telefon_defteri/create" class="btn btn-primary">Yeni Kayıt</a>
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
                    <td>
                        <a href="<?php echo base_url(); ?>index.php/telefon_defteri/edit/<?php echo $row->id; ?>" class="btn btn-info">Düzenle</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>