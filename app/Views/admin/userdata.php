<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kelola User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>NIP</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($user as $u) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $u['nama_lengkap']; ?></td>
                            <td><?php echo $u['username']; ?></td>
                            <td><?php echo $u['nip']; ?></td>
                            <td><?php echo $u['level']; ?></td>
                            <td>
                                <a href="#" class="btn btn-danger btn-rounded btn-fw" id="delete" onclick="hapus(<?php echo $u['id_user'] ?>)">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    new DataTable('#datatabel');
</script>