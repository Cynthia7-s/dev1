<!-- iCarga la informacion de la plantilla -->
<?= $this->extend("plantillas/panel_base") ?>

<!-- Cargar los css la plantilla -->
<?= $this->section('css') ?>
<?= $this->endSection('css') ?>

<!-- Cargar el contenido la plantilla -->

<?= $this->section('contenido') ?>
<?= $this->endSection('contenido') ?>

<!-- Cargar el contenido la plantilla -->

<?= $this->section('js') ?>
<?= $this->endSection('js') ?>