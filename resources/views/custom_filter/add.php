<div class="page-header">
    <h2><?= t('Add a new filter') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('CustomFilterController', 'store', ['project_id' => $project['id']]) ?>" autocomplete="off">

    <?= $this->form->csrf() ?>
    <?= $this->form->hidden('project_id', $values) ?>

    <?= $this->form->label(t('Name'), 'name') ?>
    <?= $this->form->text('name', $values, $errors, ['required'], 'maxlength="100"') ?>

    <?= $this->form->label(t('Filter'), 'filter') ?>
    <?= $this->form->text('filter', $values, $errors, ['required', 'maxlength="100"']) ?>

    <?php if ($this->user->hasProjectAccess('ProjectController', 'edit', $project['id'])): ?>
        <?= $this->form->checkbox('is_shared', t('Share with all project members'), 1) ?>
    <?php endif ?>

    <?= $this->form->checkbox('append', t('Append filter (instead of replacement)'), 1) ?>

    <div class="form-actions">
        <button type="submit" class="btn btn-info"><?= t('Save') ?></button>
    </div>
</form>
