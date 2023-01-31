<?= $this->element('flash/header'); ?>
<?= $this->element('flash/nav'); ?>
<div class="container">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</div>
<?= $this->element('flash/footer'); ?>