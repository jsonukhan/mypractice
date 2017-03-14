<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


        <title>
            <?= Config::get('site_name') ?>
        </title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style type="text/css">
            table tr th, table tr td{font-size: 1.2rem;}
            .row{ margin:20px 20px 20px 20px;width: 100%;}
            .glyphicon{font-size: 20px;}
            .glyphicon-plus{float: right;}
            a.glyphicon{text-decoration: none;}
            a.glyphicon-trash{margin-left: 10px;}
            .none{display: none;}
        </style>
        <script>
            function getUsers() {
                $.ajax({
                    type: 'POST',
                    url: 'studentAction.php',
                    data: 'action_type=view&' + $("#userForm").serialize(),
                    success: function (html) {
                        $('#userData').html(html);
                    }
                });
            }
            function userAction(type, id) {
                id = (typeof id == "undefined") ? '' : id;
                var statusArr = {add: "added", edit: "updated", delete: "deleted"};
                var userData = '';
                if (type == 'add') {
                    userData = $("#addForm").find('.form').serialize() + '&action_type=' + type + '&id=' + id;
                } else if (type == 'edit') {
                    userData = $("#editForm").find('.form').serialize() + '&action_type=' + type;
                } else {
                    userData = 'action_type=' + type + '&id=' + id;
                }
                $.ajax({
                    type: 'POST',
                    url: 'studentAction.php',
                    data: userData,
                    success: function (msg) {
                        if (msg == 'ok') {
                            alert(msg);
                            alert('User data has been ' + statusArr[type] + ' successfully.');
                            getUsers();
                            $('.form')[0].reset();
                            $('.formData').slideUp();
                        } else {
                            alert('Some problem occurred, please try again.');
                        }
                    }
                });
            }
            function editUser(id) {
                $.ajax({
                    type: 'POST',
                    //dataType: 'JSON',
                    url: 'studentAction.php',
                    data: 'action_type=data&id=' + id,
                    success: function (data) {
                        $('#idEdit').val(data.id);
                        $('#nameEdit').val(data.name);
                        $('#ageEdit').val(data.age);
                        $('#rollnoEdit').val(data.rollno);
                        $('#semesterEdit').val(data.semester);
                        $('#emailEdit').val(data.email);
                        $('#editForm').slideDown();
                    }
                });
            }
        </script>
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?= Config::get('site_name') ?></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../home/">Home</a></li>
                        <li><a href="../student/">Student</a></li>
                        <li><a href="#contact">Teacher</a></li>
                        <li><a href="#contact">Courses</a></li>
                    </ul>
                </div>
            </div>
        </nav>



