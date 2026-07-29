<?= view('partials/head', [
    'title'         => $this->renderSection('title', true) ?: 'AK Clinics',
    'keywords'      => $this->renderSection('keywords', true) ?: '',
    'description'   => $this->renderSection('description', true) ?: '',
    'canonical_url' => $this->renderSection('canonical', true) ?: current_url(),
]) ?>
<body>
<?php if ($this->renderSection('hide_loader', true) === '') : ?>
<div id="loading" class="loader"></div>
<?php endif; ?>
<div id="page" class="page">
    <header id="header" class="header">
        <?= $this->include('layouts/header') ?>
    </header>

    <?= $this->renderSection('content') ?>
</div>

<?= $this->renderSection('after_page') ?>

<?= $this->include('layouts/footer') ?>

<?= $this->renderSection('scripts') ?>

</body>
</html>
