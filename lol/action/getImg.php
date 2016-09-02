<?php
    $str = file_get_contents('summoner.json');
    $obj = json_decode($str,true);
    //var_dump($obj['data']) ;
    foreach($obj['data'] as $key){
        //var_dump($key);
        $url = 'http://ddragon.leagueoflegends.com/cdn/5.24.1/img/spell/'.$key['id'].'.png';
        $outpath = '../img/spell/'.$key['id'].'.png';
        $img = save_image($url,$outpath);
        if($img){
            echo '<pre><img src="'.$img.'"></pre>';
        }else{
            echo "false";
        }
    }

    //下载保存图片
    function save_image($inPath,$outPath)
    { //Download images from remote server
        $imgUrl=$inPath;
        $in= fopen($inPath, "rb");
        $out= fopen($outPath, "wb");

    //http开头验证
        if (strpos($imgUrl, "http") !== 0) {
            $this->stateInfo = $this->getStateInfo("ERROR_HTTP_LINK");
            return;
        }
        //获取请求头并检测死链
        $heads = get_headers($imgUrl);
        if (!(stristr($heads[0], "200") && stristr($heads[0], "OK"))) {
            return false;
        }
        while ($chunk = fread($in,8192))
        {
            $re=fwrite($out, $chunk, 8192);

        }

        fclose($in);
        fclose($out);

        if($re)
        {
            var_dump('success');
            return  true;
        }
        else
        {
            var_dump('false');
            return false;
        }
    }

    //创建文件夹
    function mkdirs($dir,$mode=0777)
    {
        if(is_dir($dir)||@mkdir($dir,$mode)){
            return true;
        }
        if(!mkdirs(dirname($dir),$mode)){
            return false;
        }
        return @mkdir($dir,$mode);
    }

    //存储图片
    function download_img($url,$dir_prefix)
    {
        $path=explode('/',$url);
        $domain='http://'.$path[2];
        $newpath=$dir_prefix.explode($domain,$url)[1];
    //mkdir
        $d=explode('/',$newpath);
        $dir=explode($d[count($d)-1],$newpath)[0];
        mkdirs($dir);
        $filename = $newpath;
        if (file_exists($filename)) {
            echo "The file $filename exists";
        } else {
            $img = save_image($url,$newpath);

        }

        return $domain;
    }
?>