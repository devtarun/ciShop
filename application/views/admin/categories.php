
<div class="content-wrapper">    
	<div class="container-fluid">
 		<div class="row pt-2 pb-2">
    		<div class="col-sm-9">
	    		<h4 class="page-title">Add/Edit College</h4>
		   	</div>
	    </div>
	</div>
    <div class="card">
        <div class="card-header text-uppercase">
            <a href="<?php echo base_url('admin/getproducts') ?>" class="btn btn-success pull-right">View All</a>
        </div>
        <div class="card-body">
            <!-- <form autocomplete="off" action="#" method="POST" enctype="multipart/form-data"> -->
            <?php echo validation_errors('<span class="error">', '</span>'); ?>
            <?php echo form_open_multipart('admin/addproduct'); ?>

                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="text-sh m-t-0">Basic Information</h5>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Product Name:</label>
                                    <?php echo form_input(array(
                                        'name'  => 'pn',
                                        'class' => 'form-control',
                                        'value' => set_value('pn')
                                    )); ?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Short Description:</label>
                                    <?php echo form_textarea(array(
                                        'name'  => 'psd',
                                        'class' => 'form-control',
                                        'rows'  => '5',
                                        'value' => set_value('psd')
                                    )); ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
              
                <div class="card">
                    <button class="btn btn-primary pull-right" type="save">Save</button>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header border-0">
            All Products
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Product</th>
                        <th>Regular Amount</th>
                        <th>Sale Amount</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product) {
                    ?>
                    <tr>
                        <td>
                            <img alt="Image placeholder" src="<?php echo base_url().$product->pimg ?>" class="product-img" alt="product img">
                        </td>
                        <td><?php echo $product->pn ?></td>
                        <td><?php echo $product->prp ?></td>
                        <td><?php echo $product->psp ?></td>
                        <td><?php echo $product->cn ?></td>
                        <td><?php echo $product->pcd ?></td>
                        <td>
                          <a href="<?php echo base_url('admin/edit/').$product->id; ?>" 
                             class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>
                           </a>
                          <a href="<?php echo base_url('admin/deleteProd/'.$product->id); ?>" 
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
