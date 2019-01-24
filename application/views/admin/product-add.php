
<div class="content-wrapper">    
	<div class="container-fluid">
 		<div class="row pt-2 pb-2">
    		<div class="col-sm-9">
	    		<h4 class="page-title">Add Products</h4>
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
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Long Description:</label>
                                    <?php echo form_textarea(array(
                                        'name'  => 'pld',
                                        'class' => 'form-control',
                                        'rows'  => '10',
                                        'value' => set_value('pld')
                                    )); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Regular Price:</label>
                                    <?php echo form_input(array(
                                        'name'  => 'prp',
                                        'class' => 'form-control',
                                        'value' => set_value('prp')
                                    )); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Sale Price:</label>
                                    <?php echo form_input(array(
                                        'name'  => 'psp',
                                        'class' => 'form-control',
                                        'value' => set_value('psp')
                                    )); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Category:</label>
                                    <?php echo form_dropdown(array(
                                        'name'      => 'pcat',
                                        'options'   => [
                                            '1' => 'Men',
                                            '2' => 'Women',
                                            '3' => 'Kids',
                                            '4' => 'Accessories'
                                        ],
                                        'class'     => 'form-control',
                                        'value'     => set_value('pcat')
                                    )); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-sh m-t-0">Other Information</h5>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <input type="hidden" name="cid">
                                    <label>Is Featured? :</label>
                                    <?php echo form_dropdown(array(
                                        'name'      => 'isf',
                                        'options'   => [
                                            '0' => 'No',
                                            '1' => 'Yes'
                                        ],
                                        'class'     => 'form-control',
                                        'value'     => set_value('pcat')
                                    )); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <input type="hidden" name="cid">
                                    <label>Product Image:</label>
                                    <?php echo form_upload(array(
                                        'name' => 'pimg',
                                        'class' => 'form-control',
                                        'value'     => set_value('pimg')
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
</div>
