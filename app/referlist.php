<?php
include "inc/header.php";
include "inc/navbar.php";
include_once "controller/package/package_sql.php";
?>

<div id="content" class="app-content">
    <div class="row">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto ">
            <h1 class="display-4">Refer List</h1>
        </div>
        <div class="12">

            <table class="table table-bordered">
                <tr class="bg-light text-dark">
                    <th>SL#</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Status</th>
                </tr>

                <?php
                $i = 1;
                $username = $userid = UserData('user_name');
                $data = SelectData('users', "where refer_id='$username'");
                while ($row = $data->fetch_object()) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row->name; ?></td>
                        <td><?= $row->user_name; ?></td>
                        <td><?=($row->stutas==1)? " <p class='text-success p-0 m-0'>Active</p> " : "<p class='text-danger p-0 m-0'>Deactive</p>"; ?></td>
                    </tr>

                <?php } ?>





            </table>


        </div>

    </div>
</div>
<?php include "inc/footer.php"; ?>