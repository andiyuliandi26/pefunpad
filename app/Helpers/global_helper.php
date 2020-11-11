<?php
	
	function generate_yt_iframe($videoID){
		return '<iframe type="text/html" class="responsive-iframe" src="https://www.youtube.com/embed/'.$videoID.'?&origin='.base_url().'&enablejsapi=1" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
	}

?>