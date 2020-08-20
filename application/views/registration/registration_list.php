<div class="main-content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3><?php echo $meta_title ?></h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <table class="table data_table">
                  <thead>
                    <tr class="bg-info">
                      <th class="text-white font-weight-bold">Requester</th>
                      <th class="text-white font-weight-bold">Company</th>
                      <th class="text-white font-weight-bold">Management System</th>
                      <th class="text-white font-weight-bold">Category</th>
                      <th class="text-white font-weight-bold">Type</th>
                      <th class="text-white font-weight-bold">Scope</th>
                      <th class="text-white font-weight-bold">Address</th>
                      <th class="text-white font-weight-bold">Total Employee</th>
                      <th class="text-white font-weight-bold">Date Created</th>
                      <th class="text-white font-weight-bold"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Habib Syuhada</td>
                      <td>SMOE</td>
                      <td>ISO 9001:2015</td>
                      <td>Single</td>
                      <td>New</td>
                      <td>Marine</td>
                      <td>Batam, Indonesia</td>
                      <td>100</td>
                      <td>2020-08-18</td>
                      <td>
                        <a href="<?php echo base_url() ?>registration/registration_detail" class="btn btn-secondary" title="View"><i class="fas fa-eye m-0"></i></a>
                        <a href="<?php echo base_url() ?>#" class="btn btn-primary" title="Update"><i class="fas fa-edit m-0"></i></a>
                      </td>
                    </tr>
                    <?php foreach ($registration_list as $key => $value): ?>
                    <tr>
                      <td><?php echo $value['tracking_no'] ?></td>
                      <td><?php echo $value['shipper_name'] ?></td>
                      <td><?php echo $value['consignee_name'] ?></td>
                      <td></td>
                      <td><?php echo $value['status'] ?></td>
                      <td><?php echo $value['type_of_shipment'] ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>shipment/shipment_tracking/<?php echo $value['id'] ?>" class="btn btn-secondary" title="View"><i class="fas fa-eye m-0"></i></a>
                        <a href="#" class="btn btn-warning" title="Print"><i class="fas fa-print m-0"></i></a>
                        <a href="<?php echo base_url() ?>shipment/shipment_update/<?php echo $value['id'] ?>" class="btn btn-primary" title="Update"><i class="fas fa-edit m-0"></i></a>
                        <a href="<?php echo base_url(); ?>shipment/shipment_delete_process/<?php echo $value['id'] ?>" onclick="return confirm('Are you sure to delete this? You cannot revert it later.')" class="btn btn-danger" title="Delete"><i class="fas fa-trash m-0"></i></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</div>
</div>