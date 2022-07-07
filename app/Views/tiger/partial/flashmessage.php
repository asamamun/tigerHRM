<?php if (session()->getFlashdata('message')) : ?>        
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
        </div>
    <?php endif; ?>

    <?php if (session()->has('success')) : ?>
    <div class="notification success">
        <?= session('success') ?>
    </div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
    <div class="notification error">
        <?= session('error') ?>
    </div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
    <ul class="notification error">
    <?php foreach (session('errors') as $error) : ?>
        <li><?= $error ?></li>
    <?php endforeach ?>
    </ul>
<?php endif ?>