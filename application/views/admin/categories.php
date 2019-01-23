
<div class="content-wrapper">    
	<div class="container-fluid">
 		<div class="row pt-2 pb-2">
    		<div class="col-sm-9">
	    		<h4 class="page-title">Add/Edit College</h4>
		   	</div>
	    </div>
	</div>
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-lg-4">
                    <h5 class="text-sh m-t-0">Add/Edit Category</h5>
                    <?php echo validation_errors('<span class="error">', '</span>'); ?>
                    <?php echo form_open_multipart('admin/addproduct'); ?>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Category Name:</label>
                                    <?php echo form_input(array(
                                        'name'  => 'cn',
                                        'class' => 'form-control',
                                        'value' => set_value('cn')
                                    )); ?>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Save</button>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-lg-8">
                    <h5>All Categories</h5>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($categories as $cat) {
                                ?>
                                <tr>
                                    <td><?php echo $cat->id ?></td>
                                    <td><?php echo $cat->cn ?></td>
                                    <td>
                                      <a href="<?php echo base_url('admin/category/'.$cat->id) ?>" 
                                         class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>
                                       </a>
                                      <a href="<?php echo base_url('admin/category/'.$cat->id) ?>" 
                                         class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                                       </a>
                                    </td>
                                </tr>
                                <?php
                                } ?>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
