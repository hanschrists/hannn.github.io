<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg-10">
            <?= form_error('menu', '<div class="alert alert-danger role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('massage'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSuhuModal">tambah data</a>

            <table class=" table">
                <thead>
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">suhu</th>
                        <th scope="col">hasil akhir alat penulis</th>
                        <th scope="col">hasil akhir alat pembanding</th>
                        <th scope="col">error</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($suhu as $s) : ?>
                        <tr align="center">
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $s['suhu']; ?></td>
                            <td><?= $s['hasil_akhir_alat_penulis']; ?></td>
                            <td><?= $s['hasil_akhir_alat_pembanding']; ?></td>
                            <td><?= $s['error']; ?></td>
                            <td>
                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#editmodal" <?= $s['id']; ?>>edit</a>
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

<!-- Modal -->
<div class="modal fade" id="newSuhuModal" tabindex="-1" role="dialog" aria-labelledby="newSuhuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSuhuModalLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="suhu" name="suhu" placeholder="suhu">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="hasil_akhir_alat_penulis" name="hasil_akhir_alat_penulis" placeholder="hasil akhir alat penulis">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="hasil_akhir_alat_pembanding" name="hasil_akhir_alat_pembanding" placeholder="hasil akhir alat pembanding">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="error" name="error" placeholder="error">
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

<!-- tutup modal-->

<!-- modal untuk edit data-->
<?php $i = 1;
foreach ($suhu as $s) : $i++; ?>
    <div class="modal fade" id="editmodal <?= $s['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ExampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newEditModalLabel">update data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('menu'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $s['suhu']; ?> ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?= $s['hasil_akhir_alat_penulis']; ?> ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="hasil_akhir_alat_pembanding" name="hasil_akhir_alat_pembanding" placeholder="hasil akhir alat pembanding">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="error" name="error" placeholder="error">
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
    <!-- tutup modal edit data-->
<?php endforeach; ?>