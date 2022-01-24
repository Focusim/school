<h1>Gallery</h1>

<form action="index.php?page=3" method="POST">
    <p>Select graphics extension to display</p>

    <select name="ext" id="">
        <? 
            $path = "images/";
            $dir = opendir($path);
            $extentions = [];

            while (($file = readdir($dir)) !== false) {

                $fullName = $path.$file;
                $pos = strrpos($fullName, "."); // strrpos поиск строчки справа на лево
                $ext = substr($fullName, $pos + 1); // substr подстрока
                $ext = strtolower($ext);

                if (!in_array($ext, $extentions)) { // !in_array не в массиве 
                    $extentions[] = $ext;

                    echo '<option value="' . $ext . '">' . $ext . '</option>'; //value отправляющее значение на сервер
                }
            }
        ?>
    </select>
    <button type="submit" name="btn-show">Show pictures</button>
</form>

<? 
    if (isset($_POST["btn-show"])) {

        $selectedExt = $_POST["ext"];
        $images = glob($path . "*." . $selectedExt); // "images/*.png"

        ?>          
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Gallery content
                    </h3>
                </div>
            </div>
        
        <?
        foreach ($images as $image) { ?>
            <img src="<?= $image ?>" width="100px" height="100px">
        <? 
        }
    }
?>

<!--
    