<?php
//this is unicode split method for out of english latin characters
function str_split_unicode($str, $l = 0) {
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}


//this is my function detects long words and split them

function check_long_words($image,$draw,$text,$maxWidth) {
    $metrics = $image->queryFontMetrics($draw, $text);
    if($metrics['textWidth'] <= $maxWidth)
        return array($text);

    $words = str_split_unicode($text);

    $i = 0;

    while($i < count($words) )
    {
        $currentLine = $words[$i];
        if($i+1 >= count($words))
        {

            $lines[] = $currentLine;
            //$lines = $lines + $checked;
            break;
        }
        //Check to see if we can add another word to this line
        $metrics = $image->queryFontMetrics($draw, $currentLine . $words[$i+1]);

        while($metrics['textWidth'] <= $maxWidth)
        {
            //If so, do it and keep doing it!
            $currentLine .= $words[++$i];
            if($i+1 >= count($words))
                break;
            $metrics = $image->queryFontMetrics($draw, $currentLine . ' ' . $words[$i+1]);
            $t++;
        }
        //We can't add the next word to this line, so loop to the next line


        $lines[] = $currentLine;

        $i++;

    }


    return $lines;

}








//this is BMiner code some fixes for manule breaks
function wordWrapAnnotation(&$image, &$draw, $text, $maxWidth)
{
    $brler = explode("<br>", $text);
    $lines = array();


    foreach($brler as $br)
    {
        $i = 0;


        $words = explode(" ", $br);


        while($i < count($words) )
        {

            $currentLine = $words[$i];


            $metrics = $image->queryFontMetrics($draw, $currentLine . ' ' . $words[$i+1]);

            if($i+1 >= count($words))
            {
                $checked=check_long_words($image,$draw,$currentLine,$maxWidth);
                $lines = array_merge($lines, $checked);

                if($metrics['textHeight'] > $lineHeight)
                    $lineHeight = $metrics['textHeight'];
                //$lines = $lines + $checked;
                break;
            }
            //Check to see if we can add another word to this line


            while($metrics['textWidth'] <= $maxWidth)
            {
                //If so, do it and keep doing it!
                $currentLine .= ' ' . $words[++$i];
                if($i+1 >= count($words))
                    break;
                $metrics = $image->queryFontMetrics($draw, $currentLine . ' ' . $words[$i+1]);
                $t++;
            }
            //We can't add the next word to this line, so loop to the next line

            $checked=check_long_words($image,$draw,$currentLine,$maxWidth);
            $lines = array_merge($lines, $checked);

            $i++;
            //Finally, update line height
            if($metrics['textHeight'] > $lineHeight)
                $lineHeight = $metrics['textHeight'];
        }

    }
    return array(join("\n",$lines), $lineHeight);

}
