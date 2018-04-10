<div class="table-responsive">
    <table class="table table-hover tablesorter">
        <thead>
            <tr>
                <th class="header">ID</th>
                <th class="header">Email</th>
                <th class="header">Nama</th>
                <th class="header">Time</th>
                <th class="header">Isi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($employeeInfo) && !empty($employeeInfo)) {
                foreach ($employeeInfo as $key => $element) {
                    ?>
                    <tr>
                        <td><?php echo $element['id']; ?></td>
                        <td><?php echo $element['email']; ?></td>
                        <td><?php echo $element['nama']; ?></td>
                        <td><?php echo $element['time']; ?></td>
                        <td><?php echo $element['isi']; ?></td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Tidak ada komentar.</td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <a class="pull-right btn btn-primary btn-xs" href="<?php echo base_url()?>download/createxls"><i class="fa fa-file-excel-o"></i> Export Data</a>
</div>
