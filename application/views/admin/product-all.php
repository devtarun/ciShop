
<div class="content-wrapper">
    <div class="container-fluid">
        <!--End Row-->
        <div class="row">
            <div class="col-lg-12">
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
        </div>
        <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
</div>
<!--End content-wrapper-->
