<?php echo $this->extend('admin/layout/main'); ?>

<?php echo $this->section('container'); ?>

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
    function tampilkan() {
        $.ajax({
            url: "<?= base_url('/newuserdata/') ?>",
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
                        tampilkan();
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
                        tampilkan();
                    }
                });
            }
        })
    }

    $(document).ready(function() {
        tampilkan();
    });
</script>
<?php echo $this->endSection(); ?>