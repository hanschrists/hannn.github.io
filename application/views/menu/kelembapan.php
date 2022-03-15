<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg-10">
            <?= form_error('menu', '<div class="alert alert-danger role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('massage'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newKelembapanModal">tambah data</a>

            <table class=" table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">siraman air</th>
                        <th scope="col">nilai eksas</th>
                        <th scope="col">nilai perkiraan</th>
                        <th scope="col">galat</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kelembapan as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $k['siraman_air']; ?></td>
                            <td><?= $k['nilai_eksas']; ?></td>
                            <td><?= $k['nilai_perkiraan']; ?></td>
                            <td><?= $k['galat']; ?></td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="newKelembapanModal" tabindex="-1" role="dialog" aria-labelledby="newKelembapanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newKelembapanModalLabel">tambah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/kelembapan'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="siraman_air" name="siraman_air" placeholder="siraman air">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nilai_eksas" name="nilai_eksas" placeholder="nilai eksas">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nilai_perkiraan" name="nilai_perkiraan" placeholder="nilai perkiraan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="galat" name="galat" placeholder="galat">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">add</button>
                </div>
            </form>
        </div>
    </div>
</div>