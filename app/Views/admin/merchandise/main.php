<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data Merchandise</h1>
    
</div>

<div class="card shadow h-100 ">
    <div class="card-body table-responsive">
        <a href="<?php echo current_url(); ?>/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Tambah </a>
        <table class="table table-striped table-bordered align-items-center mt-2">
            <thead>
                <tr class="text-center">
                    <th width="5%"></th>
                    <th width="5%">Sequence</th>
                    <th width="10%">Nama Produk</th>
                    <th width="15%">Deskripsi</th>
                    <th width="10%">Harga</th>
                    <th width="25%">Market Place</th>
                    <th width="30%">Image</th>
                    <th width="5%">Active</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $items): ?>
                    
                    <tr>
                        <td class="text-center align-middle">
                            <div class="dropdown no-arrow">
                                <button class="btn fas fa-ellipsis-h dropdown-toggle" style="padding:0.375rem 0.375rem;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>

                                <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in">                                        
                                    <a class="dropdown-item" href="<?php echo current_url(); ?>/update/<?php echo $items->id; ?>">
                                        <i class="fas fa-pencil-alt fa-fw mr-2 text-gray-600"></i>
                                        Edit
                                    </a>
                                    <a class="dropdown-item" href="<?php echo current_url(); ?>/marketplace/<?php echo $items->id; ?>">
                                        <i class="fas fa-pencil-alt fa-fw mr-2 text-gray-600"></i>
                                        Edit Market Place
                                    </a>                                              
                                </div>
                            </div>
                        </td>
                        <td class="align-middle text-center"><?php echo $items->sequence; ?></td>
                        <td class="align-middle"><?php echo $items->namaproduk; ?></td>
                        <td class="align-middle"><?php echo $items->deskripsi; ?></td>
                        <td class="align-middle">Rp. <?php echo $items->harga; ?></td>
                        <td class="align-middle">
                            <?php
                                $marketplaces = "";
                                foreach($merchmarket as $item){
                                    if($items->id == $item->merchandiseid){
                                        $marketplaces .= "<li class='list-group-item'>{$item->namamarketplace} : {$item->hyperlink}</li>";
                                    }
                                }
                            ?>
                            <ul class="list-group list-group-flush">
                                <?php echo $marketplaces; ?>
                            </ul>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>/images/merchandise/<?php echo $items->imageurl; ?>" />
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