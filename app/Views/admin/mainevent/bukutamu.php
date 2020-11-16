<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Tamu Main Event</h1>
    
</div>

<div class="card shadow h-100 ">
    <div class="card-body table-responsive">
        <!--<a href="<?php echo current_url(); ?>/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Tambah </a>-->
        <table class="table table-striped table-bordered align-items-center mt-2">
            <thead>
                <tr class="text-center">
                    <th width="3%">No</th>
                    <th width="20%">Nama</th>
                    <th width="10%">Email</th>
                    <th width="10%">No Handphone</th>
                    <th width="15%">Asal Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($data as $items): ?>
                    
                    <tr>
                        <td class="align-middle text-center"><?php echo $no; ?></td>
                        <td class="align-middle"><?php echo $items->namatamu; ?></td>
                        <td class="align-middle"><?php echo $items->email; ?></td>
                        <td class="align-middle"><?php echo $items->nohp; ?></td>
                        <td class="align-middle"><?php echo $items->asalsekolah; ?></td>                        
                    </tr>
                <?php 
                    $no++;
                    endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php echo $this->endSection('content'); ?>