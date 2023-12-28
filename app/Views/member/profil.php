<?php echo $this->extend('member/layout/main'); ?>

<?php echo $this->section('container'); ?>

<div class="row">
    <div class="container-fluid">
        <div class="col-lg-4">
            <!-- Basic Card Example -->
            <div class="card shadow mb-2">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Profile</h4>
                </div>
                <div class="card-body text-center">
                    <!-- <i class="mdi mdi-monitor icon-lg"></i> -->
                    <div class="list align-items-center pt-3">
                        <div class="wrapper w-100">
                            <center>
                                <p class="mb-0">
                                    <a href="<?php echo "/profiluser/" . $id_user; ?>" class="btn btn-success">Lihat Profil</a>
                                </p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section: Main chart -->
</div>
</div>
</div>
</div>
</div>
</div>

<script>
    function tampilkanUser(id_user) {
        $.ajax({
            url: "<?= base_url('/profildata/') ?>" + id_user,
            dataType: "json",
            success: function(response) {
                $('#viewdata').html('');
                $('#viewdata').html(response.data);
            }
        });
    }

    $(document).ready(function() {
        tampilkanUser();
    });
</script>
<?php echo $this->endSection(); ?>