<!-- iCarga la informacion de la plantilla -->
<?= $this->extend("./plantillas/panel_base.php") ?>

<!-- Cargar los css la plantilla -->
<?= $this->section('css') ?>
<?= $this->endSection() ?>

<!-- Cargar el contenido la plantilla -->

<?= $this->section('contenido') ?>
<?= $this->endSection() ?>

<!-- Cargar el contenido la plantilla -->

<?= $this->section('js') ?>
<script src="<?= base_url(RECURSOS_PANEL_JS.'pages/dashboard.js')?>"></script>
<?= $this->endSection() ?>