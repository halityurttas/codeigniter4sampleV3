<html>
    <head>
        
    </head>
    <body>
        <?php echo form_open('telefon_defteri/create_post'); ?>
        <div>Adı Soyadı: <?php echo form_input('adi_soyadi'); ?></div>
        <div>Telefon: <?php echo form_input('telefon'); ?></div>
        <div><button type="submit">Kaydet</button></div>
        </form>
    </body>
</html>