
<?php include('../../path.php');
include(ROOT_PATH . "/app/controllers/topics.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Front awesome link-->
    <script src="https://kit.fontawesome.com/4e17d14c86.js" crossorigin="anonymous"></script>
    <!--Google fonts link-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Manage Topic</title>
</head>
<body>
  
    <?php include(ROOT_PATH . "/app/inclues/adminHeader.php"); ?>
    <!--admin page wapper starts-->
    <div class="admin-wrapper">

      
    <?php include(ROOT_PATH . "/app/inclues/adminSidebar.php"); ?>

        <!--admin main content starts-->
        <div class="admin-content">
            <div class="bnt-group">
                <a href="create.php" class="btn btn-big">Add Topics</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage-Topics</h2>

                <?php include(ROOT_PATH. "/app/include/messages.php")?>


                <table>
                   <thead>
                       <th>SN.</th>
                       <th>Title</th>
                       <th colspan="2">Actions</th>
                   </thead> 
                   <tbody>

                    <?php foreach ($topics as $key => $topic): ?>

                    <tr>
                       <td><?php echo $key+1 ?></td>
                       <td><?php echo $topic ['name'] ?></td>
                       <td><a href="edit.php?id = <?php echo $topic ['id'] ?>" class="edit">Edit</a></td>
                       <td><a href="#" class="delete">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                   
                   </tbody>
                </table>
            </div>
        </div>
        <!--admin main contant ends-->
    </div>   


    <!--Jquary-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <!--custom scrip-->
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>