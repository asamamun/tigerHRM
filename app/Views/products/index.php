<?= $this->extend('layouts/default'); ?>

<?= $this->section('contents'); ?>

    <?php if (session()->getFlashdata('message')) : ?>        
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
        </div>
    <?php endif; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Products</h3>
                <div class="card-options">
                    <a href="<?= base_url('/'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-file-csv"></i> CSV</a>
                    <a href="<?= base_url('/'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-file-excel"></i> Excel</a>
                    <a href="<?= base_url('/'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-print"></i> Print</a>
                    <a href="<?= base_url('/'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-file-pdf"></i> PDF</a>
                    <a href="<?= base_url('categories/create'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Category</a>
                    <a href="<?= base_url('products/create'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Product</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="products">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Barcode</th>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Category</th>
                                <th>Supplier</th>
                                <th>Wholesale Price</th>
                                <th>Retail Price</th>
                                <th>Purchase Price</th>
                                <th>Quantity</th>
                                <th>Description</th>
                                <th>Tax</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td><?= $product['id']; ?></td>
                                    <td><?= $product['barcode']; ?></td>
                                    <td><?= $product['name']; ?></td>
                                    <td><?= $product['company_name']; ?></td>
                                    <td><?= $product['category_id']; ?></td>
                                    <td><?= $product['supplier_id']; ?></td>
                                    <td><?= $product['wholesale_price']; ?></td>
                                    <td><?= $product['retail_price']; ?></td>
                                    <td><?= $product['purchase_price']; ?></td>
                                    <td><?= $product['quantity']; ?></td>
                                    <td><?= $product['description']; ?></td>
                                    <td><?= $product['tax'];?>&percnt;</td>
                                    <td>
                                        <a href="<?= base_url('products/edit/' . $product['id']); ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?= base_url('products/delete/' . $product['id']); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>







<?= $this->section('scripts'); ?>
<script>
    $(document).ready(function() {
        $('#products').DataTable();
    } );
</script>
<?= $this->endSection(); ?>