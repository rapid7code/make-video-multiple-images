<?php

function copy_frames($uid, $dir = 'data', $dir_frame = 'images')
{
    //exec("chmod 777 -R {$dir}/{$uid}/videos");
    exec("cp -R {$dir_frame} /{$dir}/{$uid}");
}

function resize_avatar($avatar_width, $avatar_height, $uid, $avatar_filename, $avatar_opacity, $dir = 'data')
{
    $old_path = $avatar_filename;
    $basename = "converted_" . basename($avatar_filename);
    $new_path = $dir . "/{$uid}/{$basename}";
    exec("rm -f {$new_path}");
    exec("convert -resize {$avatar_width}x{$avatar_height} {$old_path} {$new_path}");
    $avatar_opacity = 100 - $avatar_opacity * 100;
    exec("convert {$new_path} -fill \"rgba(0,0,0,0.25)\" -colorize {$avatar_opacity}% {$new_path}");
    return $new_path;
}

function transparent_avatar_with_position($video_width, $video_height, $uid, $dir = 'data', $default_transparent = 'trans.gif', $videos_frames)
{
    $converted_avatars = array();
    $converted_path = $dir . "/{$uid}/converted";
    if (!file_exists("{$converted_path}")) {
        exec("mkdir -p {$converted_path}");
    }
    exec("chmod 777 -R {$converted_path}/..");
    exec("rm -rf {$converted_path}/*");
    #include get_template_directory() . '/video_libs/data.php';
    /*include get_template_directory() . '/video_libs/data_live.php';

    $videos_frames = get_data_videos($_REQUEST['uid'], $_REQUEST['eid']);*/

    $i = 1;
    $text_transparent_filename = $dir . "/{$uid}/trans_{$video_width}_{$video_height}.gif";
    exec("convert {$default_transparent} -background none -extent {$video_width}x{$video_height} {$text_transparent_filename}");

    $default_transparent_2 = $default_transparent;

    foreach ($videos_frames as $key => $item) {
        $default_transparent = $default_transparent_2;
        $filename = $item->imageFrame;


        $image_objs = isset($item->imageFace) ? $item->imageFace : array();

        $text_objs = isset($item->text) ? $item->text : array();

        $curr_avatar = NULL;
        if (!empty($image_objs)) {
            foreach ($image_objs as $image_obj) {
                $new_avatar_path = resize_avatar($image_obj->width, $image_obj->height, $uid, $image_obj->src, $image_obj->opacity, $dir);
                $name = generate_filename($i);
                $curr_avatar = "{$converted_path}/{$name}";
                $positions = explode(',', $image_obj->position);
                $command = "convert {$default_transparent} -background none -extent {$video_width}x{$video_height} -draw \"image SrcOver {$positions[0]},{$positions[1]} {$image_obj->width},{$image_obj->height} '{$new_avatar_path}'\" {$curr_avatar}";
                $msg = exec($command);
                $default_transparent = $curr_avatar;

            }
        }


        /*if (!empty($text_objs)) {
            foreach ($text_objs as $text_obj) {

                $picin = new Imagick(isset($curr_avatar) ? $curr_avatar : $text_transparent_filename);
                $draw = new ImagickDraw();
                $draw->setTextEncoding('utf-8');
                $draw->setFillColor("rgba(255, 255, 255, {$text_obj->opacity})");
                $draw->setFont($text_obj->font);
                $draw->setFontSize($text_obj->size);
                $positions = explode(',', $text_obj->position);
                $picin->annotateImage($draw, $positions[0], $positions[1], 0, $text_obj->text);
                if (!isset($curr_avatar)) {
                    $name = generate_filename($i);
                    $curr_avatar = "{$converted_path}/{$name}";
                }
                $picin->writeimage($curr_avatar);

            }
        }*/

        $converted_avatars[$filename] = $curr_avatar;
        unset($curr_avatar);
        $i++;
    }

    return $converted_avatars;
}

function generate_filename($number)
{
    return 'demo_' . sprintf("%03d", $number) . '.png';
}

function generate_final_video_frames($converted_avatars, $uid, $dir = 'data', $videos_frames)
{
    include get_template_directory() . '/video_libs/libs.php';

    $frames = array();
    $i = 1;
    $converted_path = $dir . "/{$uid}/frames";
    if (!file_exists("{$converted_path}")) {
        exec("mkdir -p {$converted_path}");
    }


    exec("chmod 777 -R {$converted_path}");
    exec("rm -rf {$converted_path}/*");
    #include get_template_directory() . '/video_libs/data.php';
    /*include get_template_directory() . '/video_libs/data_live.php';

    $videos_frames = get_data_videos($_REQUEST['uid'], $_REQUEST['eid']);*/


    foreach ($videos_frames as $key => $value) {

        $name = generate_filename($i);
        $filename = $value->imageFrame;
        $curr_frame = "{$converted_path}/{$name}";
        $frames[] = $curr_frame;

        $text_objs = isset( $value->text ) ? $value->text : array();
        $image_objs = isset($value->imageFace) ? $value->imageFace : array();


        if ( array_key_exists($filename, $converted_avatars) && !empty($converted_avatars[$filename])) {

            if (!empty($image_objs)) {
                foreach ($image_objs as $image_obj) {
                    $order = $image_obj->order;

                    if ($order == 'back') {
                        $msg = exec("convert {$converted_avatars[$filename]} {$filename} -composite {$curr_frame}");

                    } else {
                        $msg = exec("convert {$filename} {$converted_avatars[$filename]} -composite {$curr_frame}");
                    }



                }
            }

        } else {
            exec("cp {$filename} {$curr_frame}");
        }
        $w = 210;
        if (!empty($text_objs)) {
            foreach ($text_objs as $text_obj) {

                $picin = new Imagick($curr_frame);
                $draw = new ImagickDraw();
                $draw->setTextEncoding('utf-8');
                $draw->setFillColor("rgba(255, 255, 255, {$text_obj->opacity})");
                $draw->setFont($text_obj->font);
                $draw->setFontSize($text_obj->size);
                $positions = explode(',', $text_obj->position);
                //list($lines, $lineHeight)= wordWrapAnnotation($picin, $draw, $text_obj->text, $w-10);

                if( !empty($text_obj->break) && $text_obj->break == 'yes' ){
                    $y = $positions[1];
                    $line_height = 55;
                    $str = wordwrap($text_obj->text, 19,"\n");
                    $str_array = explode("\n",$str);
                    foreach($str_array as $line){
                        $picin->annotateImage($draw, $positions[0], $y, 0, $line);
                        $y += $line_height;
                    }
                } else {
                    $picin->annotateImage($draw, $positions[0], $positions[1], 0, $text_obj->text);
                }


                //$picin->annotateImage($draw, $positions[0], $positions[1], 0, $text_obj->text);
                //$picin->annotateImage($draw, $positions[0], $positions[1], 0, $lines);
                $picin->writeimage($curr_frame);

                /*if( strpos($filename, '110.png')){
                    echo '<pre>';
                    print_r($image_obj);
                    echo '</pre>';
                    echo 'aaaa';die;
                }*/
            }
        }

        $i++;

    }

    return $frames;
}

function generate_video($uid, $video_width, $video_height, $dir = 'data')
{
    $video_name = date("Ymd") . uniqid();
    if (!file_exists("{$dir}/{$uid}/mp4")) {
        exec("mkdir -p {$dir}/{$uid}/mp4");
    }
    exec("chmod 777 -R {$dir}/{$uid}/mp4");
    $filename = "{$dir}/{$uid}/mp4/" . $video_name . ".mp4";
    exec("rm -f {$filename}");
    $command = "avconv -f image2 -framerate 12 -i {$dir}/{$uid}/frames/demo_%03d.png -s {$video_width}x{$video_height} {$filename}";
    #$command = "/usr/local/bin/avconv -f image2 -r 12 -i {$dir}/{$uid}/frames/demo_%03d.png -qscale 4 -s {$video_width}x{$video_height} {$filename}";
    exec($command);

    $result = array('dir' => $filename, 'url' => $uid . '/mp4/' . $video_name . '.mp4');
    return $result;
}

function merge_video_with_audio($video_file, $audio_file ){
    $out_put_file = str_replace('.mp4', '-audio.mp4', $video_file);
    $command = "avconv -i {$video_file} -i {$audio_file} -acodec aac -strict experimental -b:a 128k {$out_put_file}";
    exec($command);

    return $out_put_file;
}

function remove_temp_files($uid, $dir = 'data')
{
    exec("rm -rf {$dir}/{$uid}/images");
    exec("rm -rf {$dir}/{$uid}/converted");
    exec("rm -rf {$dir}/{$uid}/frames");
}

function generate_frames_end(){

}