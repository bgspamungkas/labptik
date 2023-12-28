<?php echo $this->extend('member/layout/main'); ?>

<?php echo $this->section('container'); ?>

<div class="main-panel">
    <div id="viewmodal"></div>
    <div class="content-wrapper">

        <?php if (session()->getFlashdata('ahai') != '') { ?>
            <div class="alert alert-success" role="success">
                <?= session()->getFlashdata('ahai'); ?>
            </div>
        <?php } ?>

        <div class="row">
            <?php foreach ($ruangan as $r) : ?>
                <div class="container-fluid">
                    <div class="col-lg-4">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-2">
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary"><?php echo $r['nama_ruangan']; ?></h4>
                            </div>
                            <div class="card-body text-center">
                                <img src="<?= base_url('img/logo/' . $r['image']) ?>" alt="" width="200px">
                                <!-- <i class="mdi mdi-monitor icon-lg"></i> -->
                                <div class="list align-items-center pt-3">
                                    <div class="wrapper w-100">
                                        <center>
                                            <p class="mb-0">
                                                <a href="#" onclick="formpinjam(<?= $r['id_ruangan'] ?>)" class="btn btn-success btn-icon-split">
                                                    <!-- <span class="icon text-white-50"> -->
                                                    <!-- <i class="fas fa-"></i> -->
                                                    <!-- </span> -->
                                                    <span class="text">Pinjam Ruangan</span></a>
                                            </p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-body">
                                The styling for this basic card example is created by using default Bootstrap
                                utility classes. By using utility classes, the style of the card component can be
                                easily modified with no need for any custom CSS!
                            </div> -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
<!-- page-body-wrapper ends -->
</div>

<script>
    function formpinjam(id_ruangan) {
        $.ajax({
            url: "<?= base_url('/formpinjam/') ?>/" + id_ruangan,
            dataType: "json",
            success: function(response) {
                $('#viewmodal').html(response.data).show();
                $('#pinjammodal').modal('show');
                // Set nilai opsi ruangan yang dipilih secara otomatis
                $('#id_ruangan').val(id_ruangan); // Mengatur nilai opsi yang dipilih
            }
        });

    };

    $(document).ready(function() {
        $('#form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: response.sukses,
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                    $('#pinjammodal').modal('hide');
                }
            });
        });

    });
</script>
<?php echo $this->endSection(); ?>