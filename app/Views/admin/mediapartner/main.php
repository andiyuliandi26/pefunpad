<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data Media Partner</h1>
    
</div>

<div class="card shadow h-100 ">
    <div class="card-body table-responsive">
        <a href="<?php echo current_url(); ?>/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Tambah </a>
        <table class="table table-striped table-bordered align-items-center mt-2">
            <thead>
                <tr class="text-center">
                    <th width="5%"></th>
                    <th width="10%">Nama</th>
                    <th width="15%">Image</th>
                    <th width="20%">Hyperlink</th>
                    <th width="10%">Active</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($mediapartner as $items): ?>
                    
                    <tr>
                        <td class="text-center align-middle">
                            <a class="dropdown-item" href="<?php echo current_url(); ?>/update/<?php echo $items->id; ?>">
                                <i class="fas fa-pencil-alt fa-fw mr-2 text-gray-600"></i>
                                Edit
                            </a> 
                        </td>
                        <td class="align-middle"><?php echo $items->nama; ?></td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    
                            <img class="img-fluid" src="<?php echo base_url(); ?>/images/mediapartner/<?php echo $items->imageurl; ?>" />
                                </div>
                            </div>
                            
                        </td>
                        <td><?php echo $items->hyperlink; ?></td>
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