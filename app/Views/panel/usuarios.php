<!-- iCarga la informacion de la plantilla -->
<?= $this->extend("plantillas/panel_base") ?>

<!-- Cargar los css la plantilla -->
<?= $this->section('css') ?>
<?= $this->endSection()?>

<!-- Cargar el contenido la plantilla -->

<?= $this->section('contenido') ?>
<?= $this->endSection()?>

<!-- Cargar el contenido la plantilla -->

<?= $this->section('js') ?>
<<<<<<< Updated upstream
//<script src="<?= base_url(RECURSOS_PANEL_JS.'pages/dashboard.js')?>"></script>
=======
<script src="<?= base_url(RECURSOS_PANEL_JS.'pages/dashboard.js')?>"></script>
>>>>>>> Stashed changes
<?= $this->endSection()?>