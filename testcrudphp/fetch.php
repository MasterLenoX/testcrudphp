<?php 

include('include/conn.php');
if(isset($_POST['fetch'])){?>
    <table class="table table-bordered table-dark table-hover table-striped">
      <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php 
          $query=$conn->query('select * from members');
          while($row=$query->fetch_array()){
        ?>
        <tr>
          <td><span id="first<?php echo $row['id'];?>"><?php echo $row['firstname']; ?></span></td>
          <td><span id="last<?php echo $row['id'];?>"><?php echo $row['lastname']; ?></span></td>
          <td><span id="address<?php echo $row['id'];?>"><?php echo $row['address']; ?></span></td>
          <td>
            <a style="cursor:pointer;" class="btn btn-outline-warning rounded-pill edit" data-id="<?php echo $row['id']; ?>"><i class="bi bi-pencil"></i> Edit</a> ||
            <a style="cursor:pointer;" class="btn btn-outline-danger rounded-pill delete" data-id="<?php echo $row['id']; ?>"><i class="bi bi-trash"></i> Delete</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  <?php
}
?>