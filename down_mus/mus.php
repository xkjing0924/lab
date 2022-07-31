<?php
	if ($_POST['sub']) {
		$url = "https://music.163.com/song/media/outer/url?id=".$_POST['mus'].".mp3";
		echo "<a href=\"$url\" download>下载该音乐</a>";
	}
?>