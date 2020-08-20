<style type="text/css">
  a.nav-link.active {
    border-width: 4px;
    border-bottom: 4px solid #007bff;
  }

  a.nav-link {
    border-radius: 0px !important;
  }

  a.nav-link:not(.active):hover {
    transition: all 0.3s ease-in-out;
    border-bottom: 4px solid #007bff;
  }
</style>
<div class="main-content">
  <div class="container-fluid">
    <form action="<?php echo base_url(); ?>shipment/shipment_update_process" method="POST" class="forms-sample">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="standard-tab" data-toggle="tab" href="#standard" role="tab" aria-controls="standard" aria-selected="true">Standard(s) Requirement</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company" aria-selected="false">Company Profile</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                  <br>
                  <br>
                  <div class="form-group">
                    <label>Management System</label>
                    <input type="text" class="form-control" name="management_system" placeholder="Management System">
                  </div>
                  <div class="form-group">
                    <label>Type of management system</label>
                    <input type="text" class="form-control" name="management_system" placeholder="Type of management system">
                  </div>
                  <div class="form-group">
                    <label>Type of application</label>
                    <input type="text" class="form-control" name="management_system" placeholder="Type of application">
                  </div>
                  <div class="form-group">
                    <label>standard reference</label>
                    <input type="text" class="form-control" name="management_system" placeholder="standard reference">
                  </div>
                  <div class="form-group">
                    <label>Issued by?</label>
                    <input type="text" class="form-control" name="management_system" placeholder="Issued by?">
                  </div>
                  <div class="form-group">
                    <label>ready for a Stage one review</label>
                    <input type="text" class="form-control" name="management_system" placeholder="ready for a Stage one review">
                  </div>
                </div>
                <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
                  <br>
                  <br>
                  <div class="row clearfix">
                    <div class="form-group">
                      <label>ready for a Stage one review</label>
                      <input type="text" class="form-control" name="management_system" placeholder="ready for a Stage one review">
                    </div>
                  </div>
                  <div class="mt-2 row">
                    <div class="text-left col-6">
                      <span class="btn btn-danger previous-tab">Back</span>
                    </div>
                    <div class="text-right col-6">
                      <span class="btn btn-info next-tab">Next</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

  </div>
</div>
<script type="text/javascript">
</script>