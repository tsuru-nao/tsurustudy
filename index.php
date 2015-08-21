<html>
<head><title>掲示板</title></head>
<body>
<p>掲示板です</p>
<hr>
<p>スレッドタイトル</p>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
<input type="text" name="bbsname"><br>
<input type="submit"value="作成">
</form>
<hr>

<?php
if (isset($_POST['bbsname'])) {
    $bbsname = $_POST['bbsname'];
    echo '<p>スレッドタイトル:'.$bbsname.'</p>';
    ?>
    <form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
        <input type="hidden" name="bbsname" value="<?=$_POST['bbsname']?>" />
    <p>
    名前：<input type="text" name="name" size="32">
    </p>
    <p>
    <内容><br>
    <textarea name="contents" rows="4" cols="40"></textarea>
    </p>
    <p>
    <input type="submit" value="投稿する">
    </p>
    </form>
<?php } ?>
    <?php
    if (isset($_POST['name']) && ($_POST['contents'])){
    $name = $_POST['name'];
    $contents = $_POST['contents'];

    echo '投稿者:'.$name;
    echo '<p>内容</p>';
    echo $contents;
    }

    ?>
</body>
</html>




