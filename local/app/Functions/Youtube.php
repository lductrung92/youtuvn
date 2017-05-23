<?php
	
	function getID ($url) {
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        return $my_array_of_vars['v'];
    }

    function youtube($url, $key, $part)
    {

        $apiURL = 'https://www.googleapis.com/youtube/v3/videos?id='.$url.'&key='.$key.'&part='.$part.'';

        # curl options
        $options = array(
            CURLOPT_URL  => $apiURL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_BINARYTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 5 );

        # connect api server through cURL
        $ch = curl_init();
        curl_setopt_array($ch, $options);
        # execute cURL
        $json = curl_exec($ch) or die( curl_error($ch) );
        # close cURL connect
        curl_close($ch);

        # decode json encoded data
        if ($data = json_decode($json, true))
            return $data;
    }

    function getDataYoutube ($url, $key) {
        $statistics = youtube($url, $key, 'statistics');
        $snippet = youtube($url, $key, 'snippet');
        
        $keyword = '';
        $tag = $snippet["items"][0]["snippet"]["tags"];
        for($i =0; $i<count($tag); $i++)
            $keyword = $keyword . $tag[$i] . ',';

        $data = array(
            'title' => $snippet["items"][0]["snippet"]["title"],
            'link_custom' => changeTitle($snippet["items"][0]["snippet"]["title"]),
            'description' => $snippet["items"][0]["snippet"]["description"],
            'author' => $snippet["items"][0]["snippet"]["channelTitle"],
            'published' => $snippet["items"][0]["snippet"]["publishedAt"],
            'keyword' => $keyword,
            'viewCount' => $statistics["items"][0]["statistics"]["viewCount"],
            'likeCount' => $statistics["items"][0]["statistics"]["likeCount"],
            'dislikeCount' => $statistics["items"][0]["statistics"]["dislikeCount"],
            'id_video' => $url
        );
        return $data;
    }

    function url_image ($url) {
        $url_arr = explode ('/', $url);
        $ct = count($url_arr);
        $name = $url_arr[$ct-1];
        $url_img = str_replace('/'.$name,'',$url);
        return $url_img ;
    } 
?>