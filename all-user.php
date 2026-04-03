<?php 
    include_once "functions.php";
    get_header();
    get_sidebar();

?>

<div class="col-md-12">
  <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                All Information View
              </div>
              <div class="col-md-3 text-right">
              <a href="add-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add User</a>
            </div>
            <div class="clearfix"></div>
        </div>
      <div class="panel-body">
          <table class="table table-responsive table-striped table-hover table_cus">
              <thead class="table_head">
                <tr>
                      <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th class="hidden-xs">UserName</th>
                        <th>Manage</th>
                    </tr>
              </thead>
                <tbody>
                  <tr>

                  <!-- all user query -->
                  <?php

                  $all_user = "SELECT * FROM students ORDER BY std_id DESC";
                  $all_user_query = mysqli_query($connect, $all_user);

                  while($row = mysqli_fetch_assoc($all_user_query)) {
                    $id = $row['std_id'];
                    $name = $row['std_name'];
                    $email = $row['std_email'];
                    $username = $row['std_username'];
                    $number = $row['std_number'];
                  ?>

                  <td><?php echo $name; ?></td>
                    <td> <?php echo $email; ?> </td>
                    <td> <?php echo $number; ?> </td>
                    <td> <?php echo $username; ?> </td>
                    
                    <td>
                      <a href="view-user.php?v_id=<?php echo ($id) ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                      <a href="edit-user.php?e_id=<?php echo ($id) ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                      <a id="del_user" href="delete-user.php?del_id=<?php echo $id ?>"><i class="fa fa-trash fa-lg"></i></a>
                    </td>
                  </tr>
                  <?php }; ?>

                </tbody>
          </table>
      </div>
      <div class="panel-footer">
        <div class="col-md-4">
          <a href="#" class="btn btn-sm btn-warning">EXCEL</a>
            <a href="#" class="btn btn-sm btn-primary">PDF</a>
            <a href="#" class="btn btn-sm btn-danger">SVG</a>
            <a href="#" class="btn btn-sm btn-success">PRINT</a>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4 text-right">
          <nav aria-label="Page navigation">
              <ul class="pagination pagina_cus">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
</div><!--col-md-12 end-->

<?php 
    get_footer();
 ?>