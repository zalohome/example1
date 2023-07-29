<?php
include "includes/connect_db.php";

if (!empty($_POST)) {
  if (!empty($_POST['submit']) && $_POST['submit'] == 'feature') {
    if (!empty($_GET['action']) && $_GET['action'] == 'edit' && !empty($_GET['id'])) {
      // $sql = "UPDATE features SET title='".$_POST['title']."', description='".$_POST['description']."' WHERE id=" . $_GET['id'];
      $message = "One record updated successfully";

      $stmt = $conn->prepare("UPDATE features SET title=?, description=? WHERE id=?");
      $stmt->bind_param("ssi", $title, $desciption, $id);

      // set parameters and execute
      $title = $_POST['title'];
      $desciption = $_POST['description'];
      $id = $_GET['id'];
      $stmt->execute();
      header("Location: /admin/feature.php?message=" . $message);
      exit();
    } else {
      // $sql = "INSERT INTO features (title, description) VALUES ('".$_POST['title']."', '".$_POST['description']."')";
      $message = "New record created successfully";

      $stmt = $conn->prepare("INSERT INTO features (title, description) VALUES (?, ?)");
      $stmt->bind_param("ss", $title, $desciption);

      // set parameters and execute
      $title = $_POST['title'];
      $desciption = $_POST['description'];
      $stmt->execute();
      header("Location: /admin/feature.php?message=" . $message);
      exit();
    }
  }
}

include "includes/head.php";
?>

<?php
$row = [
  'title' => '',
  'description' => ''
];
if (!empty($_GET['action']) && $_GET['action'] == 'edit' && !empty($_GET['id'])) {
  $sql = "SELECT id, title, description FROM features WHERE id=" . $_GET['id'];
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  }
}
?>

    <form action="" method="post" class="m-3">
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $row['title']?>">
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="3"><?php echo $row['description']?></textarea>
      </div>
      <button type="submit" name="submit" value="feature" class="btn btn-primary">Submit</button>
    </form>

<?php
include "includes/footer.php";
?>