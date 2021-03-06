<?php include 'studentAction.php';?>
<div class="container" style="margin-top: 70px">
    <div class="row">
        <div class="panel panel-default users-content">
            <div class="panel-heading">Users <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();"></a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add User</h2>
                <form class="form" id="userForm">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" id="age"/>
                    </div>
                    <div class="form-group">
                        <label>Roll No</label>
                        <input type="text" class="form-control" name="rollno" id="rollno"/>
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <input type="text" class="form-control" name="semester" id="semester"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="userAction('add')">Add User</a>
                </form>
            </div>
            <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit User</h2>
                <form class="form" id="userForm">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="nameEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" id="ageEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Roll No</label>
                        <input type="text" class="form-control" name="rollno" id="rollnoEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <input type="text" class="form-control" name="semester" id="semesterEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="emailEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="userAction('edit')">Update User</a>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Roll No</th>
                        <th>Semester</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="userData">
                    <?php
                        include '../../core/models/database/database.php';
                                
                        $db = Database::getInstance();
                        $users = $db->getRows('Student',array('order_by'=>'id DESC'));
                        
                       if(!empty($users)): $count = 0; foreach($users as $user): $count++;
                       
                    ?>
                    <tr>
                        <td><?php echo '#'.$count; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['age']; ?></td>
                        <td><?php echo $user['rollno']; ?></td>
                        <td><?php echo $user['semester']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editUser('<?php echo $user['id']; ?>')"></a>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?')?userAction('delete','<?php echo $user['id']; ?>'):false;"></a>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                    <tr><td colspan="5">No user(s) found......</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

