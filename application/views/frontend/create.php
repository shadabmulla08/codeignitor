

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>How to inert employee data itno database
                            <a href="<?php echo base_url('employee/'); ?>" class="btn btn-primary float-right">Back</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('employee/store'); ?>" method="POST">
                        <div class="form group">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="form-control">
                            <small><?php echo form_error('first_name');?></small>
                        </div>
                        <div class="form group">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control">
                            <small><?php echo form_error('last_name');?></small>
                        </div>
                        <div class="form group">
                            <label for="">Phone No.</label>
                            <input type="text" name="phone" class="form-control">
                            <small><?php echo form_error('phone');?></small>
                        </div>
                        <div class="form group">
                            <label for="">Email id</label>
                            <input type="email" name="email" class="form-control">
                            <small><?php echo form_error('email');?></small>
                        </div>
                        <p></p>
                        <div class="form group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 