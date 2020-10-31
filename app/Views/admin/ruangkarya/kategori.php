<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data Kategori Ruang Karya</h1>
    
</div>

<div class="card shadow h-100 ">
    <div class="card-body table-responsive">
        <a href="<?php echo base_url(); ?>/admin/ruangkarya/kategori_create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Tambah </a>
        <table class="table table-striped table-bordered align-items-center mt-2">
            <thead>
                <tr class="text-center">
                    <th width="5%"></th>
                    <th width="30%">Kategori</th>
                    <th width="5%">Sequence</th>
                    <th width="50%">Image</th>
                    <th width="10%">is Active</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $items): ?>
                    
                    <tr>
                        <td class="text-center align-middle">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>/admin/ruangkarya/kategori_update/<?php echo $items->id; ?>">
                                <i class="fas fa-pencil-alt fa-fw mr-2 text-gray-600"></i>
                                Edit
                            </a> 
                        </td>
                        <td class="align-middle"><?php echo $items->kategori; ?></td>
                        <td class="align-middle"><?php echo $items->sequence; ?></td>
                        <td>
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>/images/ruangkarya/<?php echo $items->imageurl; ?>" />
                                </div>
                            </div>
                            
                        </td>
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