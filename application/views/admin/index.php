<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <main>
        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>gambar</th>
                                    <th>password</th>
                                    <th>role id</th>
                                    <th>is active</th>
                                    <th>date created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($user as $u) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $u['name']; ?></td>
                                        <td><?= $u['email']; ?></td>
                                        <td><?= $u['gambar']; ?></td>
                                        <td><?= $u['password']; ?></td>
                                        <td><?= $u['role_id']; ?></td>
                                        <td><?= $u['is_active']; ?></td>
                                        <td><?= $u['date_created']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->