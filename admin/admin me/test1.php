<?php    
include 'config/connection.php';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <?php
          // $pdo = connect();             
include 'config/connection.php';
          $sql = "SELECT * FROM category WHERE parent='0'";
          $query = $pdo->prepare($sql);
          $query->execute();
          $row = $query->fetchAll(PDO::FETCH_ASSOC);      
          foreach ($row as $rs) { ?>

            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $rs['category_name'] ?><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <?php
                $sql = "SELECT category_id, category_name, parent, sort 
                        FROM category
                        WHERE parent = '".$rs['category_id']."' ORDER BY sort DESC";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                <li><a href="#"><?php echo $sub['category_name']; ?></a>
                  <ul>
                   <?php
                $sql = "SELECT category_id, category_name, parent
                        FROM category
                        WHERE parent = '".$sub['category_id']."'";
                $query = $pdo->prepare($sql);
                $query->execute();
                $subcat = $query->fetchAll(PDO::FETCH_ASSOC);      

                foreach ($subcat as $new_sub) {
                  // $new_sub=$sub['category_id'];
                 ?>
                        <li><a href=""><?php echo $new_sub['category_name']; ?></a></li>
                <?php } ?>
                  </ul>
                </li>

                <?php } ?>

              </ul>  
            </li>

          <?php } ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="includes/logout.php">Logout</a></li> -->
      </ul>
      </div><!-- /.navbar-collapse -->
    </div>