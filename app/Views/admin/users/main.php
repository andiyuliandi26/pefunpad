<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data Users</h1>
    
</div>

<div class="card shadow h-100 ">
    <div class="card-body table-responsive">
        <a href="<?php echo current_url(); ?>/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Tambah </a>
        <a href="<?php echo current_url(); ?>/importuser" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-file-import fa-sm text-white-50"></i> Import User </a>
        <table class="table table-striped table-bordered align-items-center mt-2">
            <thead>
                <tr class="text-center">
                    <th width="5%"></th>
                    <th width="15%">Username</th>
                    <th width="15%">Email</th>
                    <th width="10%">Role</th>
                    <!--<th width="10%">Active</th>-->
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $items): ?>
                    
                    <tr>
                        <td class="text-center align-middle">
                            <button class="btn fas fa-ellipsis-h dropdown-toggle" style="padding:0.375rem 0.375rem;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in">
                                <a class="dropdown-item" href="<?php echo current_url(); ?>/update/<?php echo $items->id; ?>">
                                    <i class="fas fa-pencil-alt fa-fw mr-2 text-gray-600"></i>
                                    Edit
                                </a> 
                                <a class="dropdown-item" href="<?php echo current_url(); ?>/setpassword/<?php echo $items->id; ?>">
                                    <i class="fas fa-key fa-fw mr-2 text-gray-600"></i>
                                    Set Password
                                </a> 
                            </div>
                        </td>
                        <td class="align-middle"><?php echo $items->username; ?></td>
                        <td class="align-middle"><?php echo $items->email; ?></td>
                        <td class="align-middle"><?php echo $items->name; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php echo $this->endSection('content'); ?>