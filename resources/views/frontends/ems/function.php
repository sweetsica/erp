<?php

function curl($link, $postfields = '', $cookie = '', $refer = '',$header='', $cookie_header="",$custom_request= "")
{

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if($header=='')
    {
        curl_setopt($ch, CURLOPT_HEADER, 1);
    }
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);


    if($custom_request){
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,$custom_request);
    }
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36');
    if($cookie_header)
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $cookie_header);
    }

    if($refer)
    {
        curl_setopt($ch, CURLOPT_REFERER, $refer);
    }
    if($postfields)
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    }
    if($cookie)
    {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    }
    $page = curl_exec($ch);

    // if($_REQUEST["debug"]){
    //     if($page === false)
    //     {
    //         echo 'Curl error: ' . curl_error($ch);
    //     }
    // }

    curl_close($ch);
    return($page);
}

function curl_json($link, $postfields = '', $cookie = '', $refer = '',$header='', $cookie_header="")
{

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if($header=='')
    {
        curl_setopt($ch, CURLOPT_HEADER, 1);
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json') );
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36');
    if($cookie_header)
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $cookie_header);
    }

    if($refer)
    {
        curl_setopt($ch, CURLOPT_REFERER, $refer);
    }
    if($postfields)
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    }
    if($cookie)
    {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    }
    $page = curl_exec($ch);
    return($page);
    curl_close($ch);
}

function curl_gzip($link, $postfields = '', $cookie = '', $refer = '',$header='', $cookie_header="",$setcookie= "")
{

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if($header=='')
    {
        curl_setopt($ch, CURLOPT_HEADER, 1);
    }
    curl_setopt($ch,CURLOPT_ENCODING , "gzip");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    if($setcookie){
        curl_setopt($ch, CURLOPT_COOKIE, $setcookie);
    }
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36');
    if($cookie_header)
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $cookie_header);
    }

    if($refer)
    {
        curl_setopt($ch, CURLOPT_REFERER, $refer);
    }
    if($postfields)
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    }
    if($cookie)
    {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    }
    $page = curl_exec($ch);
    return($page);
    curl_close($ch);
}



function CutString($start,$end,$str)
{
    $x1=strpos($str,$start);
    if($x1){
        $x2=strpos($str,$end , $x1+1);
        $getbet=substr($str,$x1+strlen($start),$x2-$x1-strlen($start));
    }else{
        $getbet="";
    }
    return $getbet;
}

function SaveImg($link,$saveto,$cookie)
{
    $clear = array("\r\n","\n","\r"," ");
    $link = str_replace($clear,'',$link);
    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
    $fp = fopen($saveto, 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
    return true;
}


function SaveFile ($filelink,$pathfile,$cookie,$cookie_header=""){
    $url  = $filelink;
    $path = $pathfile;
    $fp = fopen($path, 'w');
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    if($cookie_header)
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $cookie_header);
    }
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    $data = curl_exec($ch);
    // fwrite($fp,$data);
    curl_close($ch);
    fclose($fp);

    return true;
}

function SaveFile2($url,$savepath){
    $content = file_get_contents($url);
    file_put_contents($savepath, $content);
    return 1;
}

function formatbytes($file, $type)
{
    switch($type){
        case "KB":
            $filesize = filesize($file) * .0009765625; // bytes to KB
            break;
        case "MB":
            $filesize = (filesize($file) * .0009765625) * .0009765625; // bytes to MB
            break;
        case "GB":
            $filesize = ((filesize($file) * .0009765625) * .0009765625) * .0009765625; // bytes to GB
            break;
    }
    if($filesize <= 0){
        return $filesize = 'unknown file size';
    }
    else{return round($filesize, 2).' '.$type;}
}


function xTime($type='0')
{
    $timezone = +7;
    if($type=='date')
    {
        return $DATE = gmdate("d-m-Y", time() + 3600*($timezone+date("0")));
    }else if($type=='hours')
    {
        return $DATE = gmdate("H:i:s", time() + 3600*($timezone+date("0")));
    }else
    {
        return $DATE = gmdate("Y-m-d H:i:s", time() + 3600*($timezone+date("0")));
    }

}

function EncodeSH($toencode, $times) {

    $salt = 'saeerer';

    for ($zo = 0; $zo < $times; $zo = $zo + 1) {

        $toencode = hash('sha512', salt . $toencode);

        $toencode = md5($toencode . $salt);
    }

    return $toencode;
}

function CountDay($start,$end){
    $startTimeStamp = strtotime($start);
    $endTimeStamp = strtotime($end);

    $timeDiff = abs($endTimeStamp - $startTimeStamp);

    $numberDays = $timeDiff/86400;  // 86400 seconds in one day
    // and you might want to convert to integer
    return $numberDays = intval($numberDays);
}

function curl_get_type($link, $cookie = '')
{

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // if($header=='')
    // {
    //     curl_setopt($ch, CURLOPT_HEADER, 1);
    // }
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_NOBODY, true);

    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36');
    if($cookie)
    {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    }

    $page = curl_exec($ch);
    return $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);


    curl_close($ch);
}

function curl_noredirect($link, $postfields = '', $cookie = '', $refer = '',$header='', $cookie_header="")
{

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if($header=='')
    {
        curl_setopt($ch, CURLOPT_HEADER, 1);
    }
    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION,false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36');
    if($cookie_header)
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $cookie_header);
    }

    if($refer)
    {
        curl_setopt($ch, CURLOPT_REFERER, $refer);
    }
    if($postfields)
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    }
    if($cookie)
    {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    }
    $page = curl_exec($ch);
    return($page);
    curl_close($ch);
}

function curl_get_info($link, $cookie = '')
{

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36');
    if($cookie)
    {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    }

    $page = curl_exec($ch);
    curl_close($ch);

    return $page;
}

function write($string,$myFile="data.txt"){
    // if($fh = fopen($myFile, 'w')){
    //     $stringData = $string;
    //     fwrite($fh, $stringData);
    //     fclose($fh);
    // }
    // else {
    //     echo "can't open file";
    // };
    write_append($string,$xID="data.txt");
}

function read ($myFile="data.txt"){
    // $fh = fopen($myFile, 'r');
    // $theData = fgets($fh);
    // fclose($fh);
    // return  $theData;
}

function write_append($string,$code="data.txt"){
	global $db;
	$date = date("Y-m-d H:i:s");
	$db->xinsert("INSERT INTO `error` (`code`,`message`,`content`,`date`)
		VALUES ('$code','$string','','$date')");
    // if($fh = fopen($myFile, 'a')){
    //     $stringData = $string;
    //     fwrite($fh, $stringData);
    //     fclose($fh);
    // }else {echo "can't open file";};

}
