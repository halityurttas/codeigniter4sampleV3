<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Telefon Defteri - Düzenle</h3>
            <div class="well">
                <?php echo form_open('telefon_defteri/edit_post', ['class' => 'form-horizontal']); ?>
                <?php echo form_hidden('id', $kayit->id); ?>
                <div class="form-group">
                    <label class="control-label col-sm-4">Adı Soyadı</label>
                    <div class="col-sm-8">
                        <?php echo form_input('adi_soyadi', $kayit->adi_soyadi, ['class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Telefon</label>
                    <div class="col-sm-8">
                        <?php echo form_input('telefon', $kayit->telefon, ['class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-4">
                        <button type="submit" class="btn btn-success">Kaydet</button>
                        <a href="<?php echo base_url(); ?>index.php/telefon_defteri/index" class="btn btn-danger">İptal</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>