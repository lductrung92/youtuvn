<?php
	
	function getID ($url) {
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        return $my_array_of_vars['v'];
    }

    function getListID ($url) {
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        return $my_array_of_vars['list'];
    }

    function youtube ($url, $key, $part) {

        $apiURL = 'https://www.googleapis.com/youtube/v3/videos?id='.getID($url).'&key='.$key.'&part='.$part.'';

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
        $data = youtube($url, $key, 'snippet,statistics');
        $keyword = '';
        $tag = $data["items"][0]["snippet"]["tags"];
        for($i =0; $i<count($tag); $i++)
            if($i==(count($tag) - 1))
                $keyword = $keyword . $tag[$i];
            else
                $keyword = $keyword . $tag[$i] . ', ';

        $p_data = array(
            'title' => $data["items"][0]["snippet"]["title"],
            'link_custom' => changeTitle($data["items"][0]["snippet"]["title"]),
            'description' => $data["items"][0]["snippet"]["description"],
            'author' => $data["items"][0]["snippet"]["channelTitle"],
            'published' => $data["items"][0]["snippet"]["publishedAt"],
            'keyword' => $keyword,
            'viewCount' => $data["items"][0]["statistics"]["viewCount"],
            'likeCount' => $data["items"][0]["statistics"]["likeCount"],
            'dislikeCount' => $data["items"][0]["statistics"]["dislikeCount"],
            'id_video' => getID($url),
            'is_playlist' => 0
        );
        return $p_data;
    }

    function list_video ($url, $key, $part) {
        $apiURL = 'https://www.googleapis.com/youtube/v3/playlists?id='. getListID($url).'&key='.$key.'&part='.$part.'';

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

    function getListDataVideo ($url, $key) {
        $data = list_video($url, $key, 'snippet,contentDetails');
        $p_data = array(
            'title' => $data["items"][0]["snippet"]["title"],
            'link_custom' => changeTitle($data["items"][0]["snippet"]["title"]),
            'author' => $data["items"][0]["snippet"]["channelTitle"],
            'published' => $data["items"][0]["snippet"]["publishedAt"],
            'id_video' => getID($url),
            'count_Video' => $data["items"][0]["contentDetails"]["itemCount"],
            'id_playlist' => getListID($url),
            'is_playlist' => 1
        );
        return $p_data;
    }
 
    
?>