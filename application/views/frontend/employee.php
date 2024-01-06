

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>How to inert data itno database
                            <a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary float-right">Add employee</a>
                        </h5>
                    </div>
                    <div id=myTable class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Phone no.</th>
                                <th>Email id</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Confirm Delete</th>
                            </thead>
                            <tbody> 
                                <?php
                                    foreach($employee as $row): ?>
                                <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->first_name; ?></td>
                                <td><?php echo $row->last_name; ?></td>
                                <td><?php echo $row->phone; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td>
                                    <a href="<?php echo base_url('employee/edit/'.$row->id) ?>" class="btn btn-success btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('employee/delete/'.$row->id) ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger confirm-delete" value="<?= $row->id; ?>"> Confirm Delete</button>
                                </td>
                                </tr> <?php endforeach;
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
 