<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Merchandise - Market Place <button type="button" onclick="window.history.back()" class="btn btn-sm btn-danger">Kembali</button></h1>
    
</div>

<div class="card shadow h-100 ">
    <div class="card-body table-responsive">
        <div class="form-row mb-4">
            <div class="col-md-12">
                <h4 class="font-weight-bold"><?php echo $data->namaproduk; ?></h4>
            </div>
            <div class="col-md-12">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Nama</label>
                        <?php echo form_input('namaproduk', $data->namaproduk, ['class'=>'form-control', 'disabled' => 'disabled']); ?>
                     </div>
                    <div class="form-group col-md-1">
                        <label>Harga</label>
                        <?php echo form_input('harga', $data->harga, ['class'=>'form-control', 'disabled' => 'disabled']); ?>
                     </div>
                    <div class="form-group col-md-1">
                        <label>Sequence</label>
                        <?php echo form_input('sequence', $data->sequence, ['class'=>'form-control', 'disabled' => 'disabled']); ?>
                     </div>
                    <div class="form-group col-md-3">
                        <label>Deskripsi</label>
                        <?php echo form_input('deskripsi', $data->deskripsi, ['class'=>'form-control', 'rows'=> '50', 'disabled' => 'disabled']); ?>
                     </div>                    
                    <div class="form-group col-md-1">
                        <label>&nbsp;</label>
                        <div class="custom-control custom-switch">                   
                            <?php echo form_checkbox('isactive', 1, $data->isactive, ['class'=>'custom-control-input', 'id' => 'customSwitch', 'disabled' => 'disabled']); ?>
                            <label class="custom-control-label" for="customSwitch">Is Active?</label>
                        </div>
                    </div>

                </div>          
            </div>
        </div>
        <?php echo form_open(base_url().'/admin/merchandise/marketplace_create/'.$data->id,['method' => 'post']); ?>
            <div class="form-row border border-primary pt-3 px-3">
                 <div class="form-group col-md-2">                            
                        <?php echo form_hidden('merchandiseid', $data->id); ?>
                        <?php echo form_input('namamarket', '', ['class'=>'form-control', 'placeholder' => 'Nama Market Place']); ?>
                    </div>
                    <div class="form-group col-md-3">   
                        <?php echo form_input('infomarketplace', '', ['class'=>'form-control', 'placeholder' => 'Info Market Place']); ?>
                    </div>  
                    <div class="form-group col-md-3">   
                        <?php echo form_input('hyperlink', '', ['class'=>'form-control', 'placeholder' => 'Hyperlink']); ?>
                    </div>                        
                    <div class="form-group col-md-1">      
                        <?php echo form_input('sequence', 1, ['class'=>'form-control']); ?>
                    </div>               
                <div class="form-group col-md-1">                            
                    <button type="submit" class="btn btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Tambah </button>
                </div>
            </div>
        <?php echo form_close(); ?>

        <ul class="list-group mt-4">
            <?php foreach($merchmarket as $items): ?>
            <li class="list-group-item">
                <?php echo form_open(base_url().'/admin/merchandise/marketplace_update/'.$items->id,['method' => 'post']); ?>
                <div class="form-row">
                    <div class="form-group col-md-2">                            
                        <?php echo form_hidden('merchandiseid', $items->merchandiseid); ?>
                        <?php echo form_input('namamarket', $items->namamarketplace, ['class'=>'form-control']); ?>
                    </div>
                    <div class="form-group col-md-3">   
                        <?php echo form_input('infomarketplace', $items->infomarketplace, ['class'=>'form-control']); ?>
                    </div>  
                    <div class="form-group col-md-3">   
                        <?php echo form_input('hyperlink', $items->hyperlink, ['class'=>'form-control']); ?>
                    </div>                        
                    <div class="form-group col-md-1">      
                        <?php echo form_input('sequence', $items->sequence, ['class'=>'form-control']); ?>
                    </div>                       
                    <div class="form-group col-md-1">      
                        <div class="custom-control custom-switch">                   
                            <?php echo form_checkbox('isactive', 1, $items->isactive, ['class'=>'custom-control-input', 'id' => 'customSwitch'.$items->id]); ?>
                            <label class="custom-control-label" for="customSwitch<?php echo $items->id; ?>">is active?</label>
                        </div>
                    </div>
                    <div class="form-group col-md-1">                            
                        <button type="submit" class="btn btn-success shadow-sm"><i class="fas fa-pencil fa-sm text-white-50"></i> Update </button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </li>
            <?php endforeach; ?>
        </ul>
        
    </div>
</div>

<?php echo $this->endSection('content'); ?>