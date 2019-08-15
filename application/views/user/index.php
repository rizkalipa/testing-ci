<div class="container mt-4">
    <h3>Data User</h3>
    <?php if($this->session->flashdata('status')): ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data User</strong> Succesfull <?= $this->session->flashdata('status') ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="row mt-4">
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary"><a class="text-white" href="<?= base_url() ?>/user/create">
                Tambah Data User</a></button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="list-group">
                <?php foreach($user as $item) : ?>
                <a class="list-group-item">
                    <?php echo $item['customer_name'] ?>    
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>