<?php

foreach (scandir('samples') as $file) {
    if ($file[0] != '.') {
        echo '<li><a href="samples/'.$file.'">'.$file.'</a></li>';
    }
}
