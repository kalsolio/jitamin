<div class="page-header">
    <h2><?= t('Add new tag') ?></h2>
</div>
<form method="post" class="popover-form" action="<?= $this->url->href('TagController', 'store') ?>" autocomplete="off">
    <?= $this->form->csrf() ?>
    <?= $this->form->hidden('project_id', $values) ?>

    <?= $this->form->label(t('Name'), 'name') ?>
    <?= $this->form->text('name', $values, $errors, ['autofocus', 'required', 'maxlength="255"']) ?>

    <div class="form-actions">
        <button type="submit" class="btn btn-info"><?= t('Save') ?></button>
        <?= t('or') ?>
        <?= $this->url->link(t('cancel'), 'TagController', 'index', [], false, 'close-popover') ?>
    </div>
</form>
