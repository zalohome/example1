<?php
    $sql = "SELECT title, description FROM features ORDER BY id ASC LIMIT 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
    
    <section class="intro">
      <div class="container mt-5">
        <div class="row text-center">
          <?php
          while($row = $result->fetch_assoc()) {
          ?>
          <div class="col-md-4 mb-4">
            <div class="mx-auto">
              <h2><?php echo $row['title']?></h2>
              <p class="lead"><?php echo $row['description']?></p>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <?php
    }
    ?>