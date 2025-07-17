<!-- app/Views/partials/title_breadcrumb.php -->

<div class="row">
  <div class="col-sm-6">
    <h3 class="mb-0"><?= esc($title ?? 'Dashboard') ?></h3>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-end">
      <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
      <?php if (!empty($breadcrumb)): ?>
      <?php foreach ($breadcrumb as $item): ?>
      <li class="breadcrumb-item <?= isset($item['active']) && $item['active'] ? 'active' : '' ?>">
        <?php if (!empty($item['active'])): ?>
        <?= esc($item['label']) ?>
        <?php else: ?>
        <a href="<?= base_url($item['url']) ?>"><?= esc($item['label']) ?></a>
        <?php endif ?>
      </li>
      <?php endforeach ?>
      <?php endif ?>
    </ol>
  </div>
</div>