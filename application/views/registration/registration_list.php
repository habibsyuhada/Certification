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
                      <th class="text-white font-weight-bold">Status</th>
                      <th class="text-white font-weight-bold">Date Register</th>
                      <th class="text-white font-weight-bold"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($registration_list as $key => $value): ?>
                    <tr>
                      <td><?php echo $value['name'] ?></td>
                      <td><?php echo $value['company_name'] ?></td>
                      <td><?php echo $value['management_system'] ?></td>
                      <td><?php echo $value['type_management_system'] ?></td>
                      <td><?php echo $value['type_application'] ?></td>
                      <td><?php echo $value['scope_company'] ?></td>
                      <td><?php echo $value['address_site'] ?></td>
                      <td>
                        <?php if($value['status'] == 0): ?>
                          <span class="badge badge-pill badge-primary mb-1">Waiting For Review</span>
                        <?php else: ?>
                          <span class="badge badge-pill badge-success mb-1">Reviewed by QA</span>
                        <?php endif; ?>
                      </td>
                      <td><?php echo $value['date_created'] ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>registration/registration_detail/<?php echo $value['id'] ?>" class="btn btn-secondary" title="Update"><i class="fas fa-edit m-0"></i></a>
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