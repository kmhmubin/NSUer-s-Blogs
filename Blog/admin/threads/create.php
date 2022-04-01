<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/threads.php');
adminOnly();
?>


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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Add Thread</title>
</head>

<body>

    <!-- admin Header  -->

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!--admin page wapper starts-->
    <div class="admin-wrapper">

        <!-- side bar -->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


        <!--admin main content starts-->
        <div class="admin-content">
            <div class="bnt-group">

                <a href="index.php" class="btn btn-big">Manage Thread</a>
            </div>
            <div class="content">
                <h2 class="page-title">Add Thread</h2>

                <!-- helpers connection-->
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

                <form action="create.php" method="post">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input" value="<?php echo $title; ?>">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body">
                            <?php echo $body; ?>
                        </textarea>
                    </div>


                    <div>
                        <label>Select</label>
                        <select name="thread_topic_id" class="text-input">
                            <option value="">Select Thread Topic</option>
                            <?php foreach ($thread_topics as $key => $topic) : ?>

                                <!-- checking the selection -->
                                <?php if (!empty($thread_topic_id) && $thread_topic_id == $topic['id']) : ?>
                                    <option value="<?php echo $topic['id']; ?>" selected>
                                        <?php echo $topic['name']; ?>
                                    </option>
                                <?php else : ?>
                                    <option value="<?php echo $topic['id']; ?>">
                                        <?php echo $topic['name']; ?>
                                    </option>
                                <?php endif; ?>


                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div>
                        <?php if (empty($published)) : ?>
                            <label>Published</label>
                            <input type="checkbox" name="published">
                        <?php else : ?>
                            <label>Published</label>
                            <input type="checkbox" name="published" checked>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" name="add-thread" class="btn btn-submit">Add Thread</button>
                    </div>
                </form>
            </div>
        </div>
        <!--admin main contant ends-->
    </div>



    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <!--custom scrip-->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>