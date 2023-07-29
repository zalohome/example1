<?php
include "includes/connect_db.php";


if (!empty($_GET['action']) && $_GET['action'] == 'delete' && !empty($_GET['id'])) {
  // $sql = "DELETE FROM features WHERE id=" . $_GET['id'];

  $stmt = $conn->prepare("DELETE FROM features WHERE id=?");
  $stmt->bind_param("i", $id);
  $id = $_GET['id'];
  $stmt->execute();
  $message = 'Record deleted successfully';
  header("Location: /admin/feature.php?message=" . $message);

}

include "includes/head.php";
?>



<?php
if (!empty($_GET['message'])) {

  echo $_GET['message'];
}
?>

<a class="btn btn-primary" href="/admin/feature-add.php">Add New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT id, title, description FROM features ORDER BY id ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['description']?></td>
      <td><a href="/admin/feature-add.php?action=edit&id=<?php echo $row['id']?>">Edit</a></td>
      <td><a href="/admin/feature.php?action=delete&id=<?php echo $row['id']?>">Delete</a></td>
    </tr>
    <?php
      }
    }
    ?>
  </tbody>
</table>

<?php
include "includes/footer.php";
?>