<section>
    <h1><?php echo $judul ?></h1>
    <h4>Nama</h4>
    <ul type="disc">
        <li>Nama Depan : <?php echo $nama_depan ?></li>
        <li>Nama Belakang : <?php echo $nama_belakang ?></li>
    </ul>
    <br>
    <h4>Alamat</h4>
    <ul type="none">
        <li><?php echo $alamat ?></li>
    </ul>
    <h4>Tempat Lahir</h4>
    <ul type="none">
        <li><?php echo $tempat_lahir ?></li>
    </ul>
    <h4>Olah Raga Favorit</h4>
    <ul type="square">
        <?php foreach ($olahraga_favorit as $olahraga) { ?>
            <li><?php echo $olahraga ?></li>
        <?php } ?>
    </ul>
</section>
