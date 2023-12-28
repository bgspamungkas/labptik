<?php echo $this->extend('admin/layout/main'); ?>

<?php echo $this->section('container'); ?>
<?php
function aturjadwal($nowtime, $dbstart, $dbend, $id_jadwal)
{
    if ($nowtime >= $dbstart and $nowtime <= $dbend) {
        redirect('admin/hapusjadwal/1/' . $id_jadwal, 'refresh');
    }
}
?>



<div id="viewdata"></div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->


<script>
    new DataTable('#datatabel');
</script>

<script>
    function tampilkanJadwal() {
        $.ajax({
            url: "<?= base_url('/jadwaldata/') ?>",
            dataType: "json",
            success: function(response) {
                $('#viewdata').html('');
                $('#viewdata').html(response.data);
            }
        });
    }

    function accuser(id_user) {
        Swal.fire({
            title: 'Terima User',
            text: "Apakah Anda yakin menerima User?",
            icon: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, terima'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "put",
                    url: "<?= base_url('/terima/') ?>" + id_user,
                    success: function(response) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: response.sukses,
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        })
                        tampilkanJadwal();
                    }
                });
            }
        })
    }

    function disaccuser(id_user) {
        Swal.fire({
            title: 'Tolak User',
            text: "Apakah Anda yakin menolak User?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, tolak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "delete",
                    url: "<?= base_url('/tolak/') ?>" + id_user,
                    success: function(response) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: response.sukses,
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        })
                        tampilkanJadwal();
                    }
                });
            }
        })
    }

    $(document).ready(function() {
        tampilkanJadwal();
    });
</script>
<?php echo $this->endSection(); ?>