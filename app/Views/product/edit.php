<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<div class="row mt-3 align-items-center">
  <div class="col-md-12">
    <nav aria-label="breadcrumb" class="bg-light p-3">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/product">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
      </ol>
    </nav>
  </div>
</div>

<div class="row mt-4">
  <div class="col-md-10 offset-md-1">
    <form action="/product/<?= $product['id']; ?>" method="POST" enctype='multipart/form-data'>
      <?php csrf_field() ?>
      <input type="hidden" name="_method" value="PUT">
      <div class="input-group mb-3">
        <span class="input-group-text" id="productName"><i class="bi bi-bag"></i></span>
        <input type="text" name="name" class="form-control" value="<?= $product['name']; ?>" aria-label="Product Name" aria-describedby="productName" required="true">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="productPrice"><i class="bi bi-cash"></i></span>
        <input type="number" name="price" class="form-control" value="<?= $product['price']; ?>" aria-label="Product Price" aria-describedby="productPrice" required="true">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="productStock"><i class="bi bi-list-ol"></i></span>
        <input type="number" name="stock" class="form-control" value="<?= $product['stock']; ?>" aria-label="Product Stock" aria-describedby="productStock" required="true">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?= $this->endSection(); ?>