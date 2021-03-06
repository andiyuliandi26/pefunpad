<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data Peserta Ruang Karya</h1>
    
</div>

<div class="card shadow h-100 ">
    <div class="card-body table-responsive">
        <a href="<?php echo base_url(); ?>/admin/ruangkarya/peserta_create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Tambah </a>
        <table class="table table-striped table-bordered align-items-center mt-2">
            <thead>
                <tr class="text-center">
                    <th width="5%"></th>
                    <th width="15%">Kategori</th>
                    <th width="15%">Asal Sekolah</th>
                    <th width="10%">Nama Tim</th>
                    <th width="15%">Nama Peserta</th>
                    <th width="5%">Judul</th>
                    <th width="5%">Jenis Karya</th>
                    <th width="5%">Status Karya</th>
                    <th width="10%">Url Video</th>
                    <th width="5%">Active</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $items): ?>
                    
                    <tr>
                        <td class="text-center align-middle">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>/admin/ruangkarya/peserta_update/<?php echo $items->id; ?>">
                                <i class="fas fa-pencil-alt fa-fw mr-2 text-gray-600"></i>
                                Edit
                            </a>   
                        </td>
                        <td class="align-middle"><?php echo $items->kategori; ?></td>
                        <td class="align-middle"><?php echo $items->asalsekolah; ?></td>
                        <td class="align-middle"><?php echo $items->namatim; ?></td>
                        <td class="align-middle"><?php echo $items->namapeserta; ?></td>
                        <td class="align-middle"><?php echo $items->judulkarya; ?></td>
                        <td class="align-middle"><?php echo $items->jeniskarya; ?></td>
                        <td class="align-middle"><?php echo $items->statuspeserta; ?></td>
                        <td class="align-middle"><?php echo $items->videourl; ?></td>
                        <td class="align-middle text-center">
                            <div class="custom-control custom-checkbox">                   
                                <?php echo form_checkbox('isactive', 1, $items->isactive, ['class'=>'custom-control-input', 'id' => 'customSwitch', 'disabled' => 'disabled']); ?>
                                <label class="custom-control-label" for="customSwitch">&nbsp;</label>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php echo $this->endSection('content'); ?>