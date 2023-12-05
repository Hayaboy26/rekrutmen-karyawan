<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Tambah Data Training</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>User/Training">Data Training</a></li>
                <li class="breadcrumb-item active">Tambah Data Training</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <!-- <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button> -->
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12">
        <div class="card planned_task">
            <div class="header">
                <h2>Tambah Data Training</h2>
            </div>
            <div class="body">
                <form action="<?= base_url() ?>User/tambahDataTraining" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Data Training 1</th>
                                <th><button class="btn btn-success" type="button" id="addData" style="float: right;"><i class="fa fa-plus"> Tambah Data Training</i></button></th>
                            </tr>
                        </thead>
                        <tbody id="loop">
                            <tr>
                                <td colspan="2">
                                    <div class="row" style="margin-left: 3px;">
                                        <label for="">Training yang pernah di ikuti <span style="color: red;">*</span></label>
                                        <input type="text" name="training[]" placeholder="Training yang pernah di ikuti" class="form-control" required>
                                    </div>

                                    <div class="row" style="margin-left: 3px; margin-top: 10px;">
                                        <label for="">Sertifikasi yang pernah di ikuti <span style="color: red;">*</span></label>
                                        <input type="text" name="sertifikasi[]" placeholder="Sertifikasi yang pernah di ikuti" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Penyelenggara Pelatihan <span style="color: red;">*</span></label>
                                        <input type="text" name="penyelenggara[]" placeholder="Penyelenggara Pelatihan" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Tahun Pelatihan <span style="color: red;">*</span></label>
                                        <input type="month" name="tahun_pelatihan[]" placeholder="Tahun Pelatihan" class="form-control" required>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- Javascript -->
<script src="<?= base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?= base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- MASK MONEY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.maskMoney.js"></script>

<script>
    $(document).ready(function() {

        var no = 2
        $('thead').on('click', '#addData', function() {
            var tr = ` <tr>
                        <td colspan="2"><div style="font-weight: bold;">Data Kehlian ${no} 
                        <button class="btn btn-danger" id="deleteRow" style="float: right;"><i class="fa fa-trash"></i></button></div>
                            
                            <hr style="border-block-width: 3px;border-block-color: #59c4bc;">
                            <div class="row" style="margin-left: 3px;">
                                <label for="">Training yang pernah di ikuti <span style="color: red;">*</span></label>
                                <input type="text" name="training[]" placeholder="Training yang pernah di ikuti" class="form-control" required>
                            </div>

                            <div class="row" style="margin-left: 3px; margin-top: 10px;">
                                <label for="">Sertifikasi yang pernah di ikuti <span style="color: red;">*</span></label>
                                <input type="text" name="sertifikasi[]" placeholder="Sertifikasi yang pernah di ikuti" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Penyelenggara Pelatihan <span style="color: red;">*</span></label>
                                <input type="text" name="penyelenggara[]" placeholder="Penyelenggara Pelatihan" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Tahun Pelatihan <span style="color: red;">*</span></label>
                                <input type="month" name="tahun_pelatihan[]" placeholder="Tahun Pelatihan" class="form-control" required>
                            </div>
                        </td>
                    </tr>`
            $('#loop').append(tr).html();
            no++;
        });
        $('#loop').on('click', '#deleteRow', function() {
            $(this).parent().parent().remove();
        });
    });
</script>