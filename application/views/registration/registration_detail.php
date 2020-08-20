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
    <div class="row clearfix">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="true">Registration Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="reviewqa-tab" data-toggle="tab" href="#reviewqa" role="tab" aria-controls="reviewqa" aria-selected="false">Review QA Technical</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                <br>
                <br>
                <h5 class="font-weight-bold">Standard(s) Requirement</h5>
                <div class="form-group">
                  <label>Management System</label>
                  <input type="text" class="form-control" name="management_system" value="<?php echo $registration['management_system'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Type of management system</label>
                  <input type="text" class="form-control" name="type_management_system" value="<?php echo $registration['type_management_system'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Type of application</label>
                  <input type="text" class="form-control" name="type_application" value="<?php echo $registration['type_application'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>standard reference</label>
                  <input type="text" class="form-control" name="standard_reference" value="<?php echo $registration['standard_reference'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Issued by?</label>
                  <input type="text" class="form-control" name="issued_by" value="<?php echo $registration['issued_by'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>ready for a Stage one review</label>
                  <input type="text" class="form-control" name="date_ready_review" value="<?php echo $registration['date_ready_review'] ?>" readonly>
                </div>
                <br>
                <hr>
                <br>
                <h5 class="font-weight-bold">Organization Information</h5>
                <div class="form-group">
                  <label>Organization Name</label>
                  <input type="text" class="form-control" name="company_name" value="<?php echo $registration['company_name'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Scope of Business</label>
                  <input type="text" class="form-control" name="scope_company" value="<?php echo $registration['scope_company'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address_site" value="<?php echo $registration['address_site'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" class="form-control" name="country_site" value="<?php echo $registration['country_site'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Province/State</label>
                  <input type="text" class="form-control" name="state_site" value="<?php echo $registration['state_site'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" name="city_site" value="<?php echo $registration['city_site'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Postal Code</label>
                  <input type="text" class="form-control" name="postal_code_site" value="<?php echo $registration['postal_code_site'] ?>" readonly>
                </div>
                <br>
                <hr>
                <br>
                <h5 class="font-weight-bold">Organization Activities</h5>
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Full Time (Permanent)</th>
                      <th>Part Time (PKWT)</th>
                      <th>Total Shift</th>
                      <th>Work On Site</th>
                      <th>Work Off Site</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $fulltime = 0;
                      $parttime = 0;
                      $totalshift = 0;
                      $workonsite = 0;
                      $workoffsite = 0;
                    ?>
                    <tr>
                      <th>Management (Mgr, Dir, etc.)</th>
                      <td><?php echo $registration['management_fulltime']; $fulltime += $registration['management_fulltime'];  ?></td>
                      <td><?php echo $registration['management_parttime']; $parttime += $registration['management_parttime'];  ?></td>
                      <td><?php echo $registration['management_totalshift']; $totalshift += $registration['management_totalshift'];; ?></td>
                      <td><?php echo $registration['management_workonsite']; $workonsite += $registration['management_workonsite'];; ?></td>
                      <td><?php echo $registration['management_workoffsite']; $workoffsite += $registration['management_workoffsite'];; ?></td>
                    </tr>
                    <tr>
                      <th>Administration (HR, Secretary, etc.)</th>
                      <td><?php echo $registration['administration_fulltime']; $fulltime += $registration['administration_fulltime'];  ?></td>
                      <td><?php echo $registration['administration_parttime']; $parttime += $registration['administration_parttime'];  ?></td>
                      <td><?php echo $registration['administration_totalshift']; $totalshift += $registration['administration_totalshift'];; ?></td>
                      <td><?php echo $registration['administration_workonsite']; $workonsite += $registration['administration_workonsite'];; ?></td>
                      <td><?php echo $registration['administration_workoffsite']; $workoffsite += $registration['administration_workoffsite'];; ?></td>
                    </tr>
                    <tr>
                      <th>IT</th>
                      <td><?php echo $registration['it_fulltime']; $fulltime += $registration['it_fulltime'];  ?></td>
                      <td><?php echo $registration['it_parttime']; $parttime += $registration['it_parttime'];  ?></td>
                      <td><?php echo $registration['it_totalshift']; $totalshift += $registration['it_totalshift'];; ?></td>
                      <td><?php echo $registration['it_workonsite']; $workonsite += $registration['it_workonsite'];; ?></td>
                      <td><?php echo $registration['it_workoffsite']; $workoffsite += $registration['it_workoffsite'];; ?></td>
                    </tr>
                    <tr>
                      <th>Support Staff (Finance, Logistic, etc.)</th>
                      <td><?php echo $registration['support_fulltime']; $fulltime += $registration['support_fulltime'];  ?></td>
                      <td><?php echo $registration['support_parttime']; $parttime += $registration['support_parttime'];  ?></td>
                      <td><?php echo $registration['support_totalshift']; $totalshift += $registration['support_totalshift'];; ?></td>
                      <td><?php echo $registration['support_workonsite']; $workonsite += $registration['support_workonsite'];; ?></td>
                      <td><?php echo $registration['support_workoffsite']; $workoffsite += $registration['support_workoffsite'];; ?></td>
                    </tr>
                    <tr>
                      <th>Sales (Marketing, etc.)</th>
                      <td><?php echo $registration['sales_fulltime']; $fulltime += $registration['sales_fulltime'];  ?></td>
                      <td><?php echo $registration['sales_parttime']; $parttime += $registration['sales_parttime'];  ?></td>
                      <td><?php echo $registration['sales_totalshift']; $totalshift += $registration['sales_totalshift'];; ?></td>
                      <td><?php echo $registration['sales_workonsite']; $workonsite += $registration['sales_workonsite'];; ?></td>
                      <td><?php echo $registration['sales_workoffsite']; $workoffsite += $registration['sales_workoffsite'];; ?></td>
                    </tr>
                    <tr>
                      <th>QC/QA/HSE Officer</th>
                      <td><?php echo $registration['qc_hse_fulltime']; $fulltime += $registration['qc_hse_fulltime'];  ?></td>
                      <td><?php echo $registration['qc_hse_parttime']; $parttime += $registration['qc_hse_parttime'];  ?></td>
                      <td><?php echo $registration['qc_hse_totalshift']; $totalshift += $registration['qc_hse_totalshift'];; ?></td>
                      <td><?php echo $registration['qc_hse_workonsite']; $workonsite += $registration['qc_hse_workonsite'];; ?></td>
                      <td><?php echo $registration['qc_hse_workoffsite']; $workoffsite += $registration['qc_hse_workoffsite'];; ?></td>
                    </tr>
                    <tr>
                      <th>Labourers (Operator, Technician, etc.)</th>
                      <td><?php echo $registration['labourers_fulltime']; $fulltime += $registration['labourers_fulltime'];  ?></td>
                      <td><?php echo $registration['labourers_parttime']; $parttime += $registration['labourers_parttime'];  ?></td>
                      <td><?php echo $registration['labourers_totalshift']; $totalshift += $registration['labourers_totalshift'];; ?></td>
                      <td><?php echo $registration['labourers_workonsite']; $workonsite += $registration['labourers_workonsite'];; ?></td>
                      <td><?php echo $registration['labourers_workoffsite']; $workoffsite += $registration['labourers_workoffsite'];; ?></td>
                    </tr>
                    <tr>
                      <th>Driver/ Helper/ Asst.</th>
                      <td><?php echo $registration['helper_fulltime']; $fulltime += $registration['helper_fulltime'];  ?></td>
                      <td><?php echo $registration['helper_parttime']; $parttime += $registration['helper_parttime'];  ?></td>
                      <td><?php echo $registration['helper_totalshift']; $totalshift += $registration['helper_totalshift'];; ?></td>
                      <td><?php echo $registration['helper_workonsite']; $workonsite += $registration['helper_workonsite'];; ?></td>
                      <td><?php echo $registration['helper_workoffsite']; $workoffsite += $registration['helper_workoffsite'];; ?></td>
                    </tr>
                    <tr>
                      <th>Other</th>
                      <td><?php echo $registration['other_fulltime']; $fulltime += $registration['other_fulltime'];  ?></td>
                      <td><?php echo $registration['other_parttime']; $parttime += $registration['other_parttime'];  ?></td>
                      <td><?php echo $registration['other_totalshift']; $totalshift += $registration['other_totalshift'];; ?></td>
                      <td><?php echo $registration['other_workonsite']; $workonsite += $registration['other_workonsite'];; ?></td>
                      <td><?php echo $registration['other_workoffsite']; $workoffsite += $registration['other_workoffsite'];; ?></td>
                    </tr>
                    <tr>
                      <th>Subtotal</th>
                      <td><?php echo $fulltime; ?></td>
                      <td><?php echo $parttime; ?></td>
                      <td><?php echo $totalshift; ?></td>
                      <td><?php echo $workonsite; ?></td>
                      <td><?php echo $workoffsite; ?></td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-group">
                  <label>TOTAL</label>
                  <input type="text" class="form-control" name="total_site" value="<?php echo ($fulltime + $parttime + $totalshift + $workonsite + $workoffsite); ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Additional Comment</label>
                  <input type="text" class="form-control" name="add_comment" value="<?php echo $registration['add_comment']; ?>" readonly>
                </div>
                <br>
                <hr>
                <br>
                <h5 class="font-weight-bold">Contact Information</h5>
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" value="<?php echo $registration['name'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" name="title" value="<?php echo $registration['title'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Position</label>
                      <input type="text" class="form-control" name="position" value="<?php echo $registration['position'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" class="form-control" name="phone" value="<?php echo $registration['phone'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="<?php echo $registration['email'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Website</label>
                      <input type="text" class="form-control" name="website" value="<?php echo $registration['website'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Main Language</label>
                      <input type="text" class="form-control" name="main_language" value="<?php echo $registration['main_language'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>How did you hear about us?</label>
                      <input type="text" class="form-control" name="how_you_hear_us" value="<?php echo $registration['how_you_hear_us'] ?>" readonly>
                    </div>
                  </div>
                </div>
                
                <div class="row clearfix">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Consultant Name</label>
                      <input type="text" class="form-control" name="consultant_name" value="<?php echo $registration['consultant_name'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Consultant Phone</label>
                      <input type="text" class="form-control" name="consultant_phone" value="<?php echo $registration['consultant_phone'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Consultant Email</label>
                      <input type="text" class="form-control" name="consultant_email" value="<?php echo $registration['consultant_email'] ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Consultant Website</label>
                      <input type="text" class="form-control" name="consultant_website" value="<?php echo $registration['consultant_website'] ?>" readonly>
                    </div>
                  </div>
                </div>
                
              </div>

              <div class="tab-pane fade" id="reviewqa" role="tabpanel" aria-labelledby="reviewqa-tab">
                <form method="POST" action="<?php echo base_url() ?>registration/registration_reviewqa_process">
                  <input type="hidden" name="id" value="<?php echo $registration['id'] ?>">
                  <br>
                  <br>
                  <h5 class="font-weight-bold">Review</h5>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Number Auditor</label>
                        <div class="input-group">
                          <input type="number" class="form-control" name="num_audit" required>
                          <span class="input-group-append" id="basic-addon3">
                            <label class="input-group-text">Auditor</label>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Time for Audit</label>
                        <div class="input-group">
                          <input type="number" class="form-control" name="day_audit" required>
                          <span class="input-group-append" id="basic-addon3">
                            <label class="input-group-text">Day</label>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-2 row">
                    <div class="text-left col-6">
                      <!-- <span class="btn btn-danger previous-tab">Back</span> -->
                    </div>
                    <div class="text-right col-6">
                      <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure?')">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
</script>