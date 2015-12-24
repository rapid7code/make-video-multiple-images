<?php
/**
 * Template Name: Make Video Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage ssk_boket
 * @since ssk_boket 1.0
 */
global $wpdb;
//echo get_template_directory();die; /var/www/html/GIT/UNILEVER/ssk_boket_2015/src/wp-content/themes/ssk_boket
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'Wating for make video...';

$eid = md5('vubactest2@gmail.com') . '/videos';
$dir = ABSPATH. 'wp-content/uploads/2015/11';
#include get_template_directory() . '/video_libs/data_live.php';
include get_template_directory() . '/video_libs/data_prod.php';

if( !empty($_REQUEST['uid']) && !empty($_REQUEST['eid']) && !empty($_REQUEST['dir'])  ){

    $videos_frames = get_data_videos($_REQUEST['uid'], $_REQUEST['eid']);

    $id = $_REQUEST['id'];
    $uid = $_REQUEST['uid'];
    $eid = $_REQUEST['eid'] . '/videos';

    $has_videos = ssk_get_video_dir($id);

    if( $has_videos->video_status == 0 && empty($has_videos->video_dir) ){

        $_dir = base64_decode($_REQUEST['dir']);
        $_dir = str_replace('/'.$_REQUEST['eid'],"",$_dir);
        $dir = ABSPATH. $_dir;

        $dir_frame = get_template_directory(). '/video_libs/video-frame';
        $default_transparent = get_template_directory(). '/video_libs/trans.gif';
        $default_mp3 = get_template_directory(). '/video_libs/HappyMain.mp3';

        $video_width = 640;
        $video_height = 360;

        include get_template_directory() . '/video_libs/func.php';
        #include get_template_directory() . '/video_libs/data.php';


        $begin = round(microtime(true) * 1000);
        copy_frames($eid, $dir, $dir_frame);

        $converted_avatars = transparent_avatar_with_position($video_width, $video_height, $eid, $dir, $default_transparent, $videos_frames);
        $frames = generate_final_video_frames($converted_avatars, $eid, $dir, $videos_frames);
        $result = generate_video($eid, $video_width, $video_height, $dir);
        merge_video_with_audio($result['dir'], $default_mp3);

        remove_temp_files($eid, $dir);
        $end = round(microtime(true) * 1000);

        if( !empty($result['dir']) ){
            //$video_url = $result['url'];//str_replace('.mp4', '-audio.mp4', $result['url']);
            //$video_dir = $result['dir'];//str_replace('.mp4', '-audio.mp4', $result['url']);

            $video_url = str_replace('.mp4', '-audio.mp4', $result['url']);
            $video_dir = str_replace('.mp4', '-audio.mp4', $result['dir']);

            //User login
            $data_update['video_url'] = $video_url;
            $data_update['video_dir'] = $video_dir;

            $data_update['video_status'] = 1;
            $format = array('%s', '%s', '%d');
            $where = array('uid' => $uid);
            $where_format = array('%d');
            #$result_update = $wpdb->update($wpdb->prefix.'videos', $data_update, $where, $format, $where_format);
            $result_update = $wpdb->update($wpdb->prefix.'videos_live', $data_update, $where, $format, $where_format);

            if( !empty($result_update) ){
                $post = array(
                               'id' => $id,
                               'uid' => $uid,
                               'video_path' => $video_dir,
                               'video_title' => 'Sunsilk Việt Nam - ' . $uid,
                               'video_description' => 'Sunsilk Campain',
                               'video_tags' => 'Sunsilk',
                           );

                $res = submit_videos_to_youtube($post);
                if( !empty($res) ){
                    header('Location: /wp-admin/admin.php?page=videos-live');
                    exit;
                }
            }
        }

    } else {
        $post = array(
            'id' => $has_videos->id,
            'uid' => $has_videos->uid,
            'video_path' => $has_videos->video_dir,
            'video_title' => 'Sunsilk Việt Nam - ' . $has_videos->uid,
            'video_description' => 'Sunsilk Campain',
            'video_tags' => 'Sunsilk',
        );

        $res = submit_videos_to_youtube($post);
        if( !empty($res) ){
            header('Location: /wp-admin/admin.php?page=videos-live');
            exit;
        }
    }

} else {
    die;
    $dir_frame = get_template_directory() . '/video_libs/images';
    $default_transparent = get_template_directory() . '/video_libs/trans.gif';
    $video_width = 640;
    $video_height = 360;

    include get_template_directory() . '/video_libs/func.php';
    include get_template_directory() . '/video_libs/data_prod.php';

    $begin = round(microtime(true) * 1000);
    copy_frames($eid, $dir, $dir_frame);

    $converted_avatars = transparent_avatar_with_position($video_width, $video_height, $eid, $dir, $default_transparent);
    $frames = generate_final_video_frames($converted_avatars, $eid, $dir);
    $result = generate_video($eid, $video_width, $video_height, $dir);
    remove_temp_files($eid, $dir);
    $end = round(microtime(true) * 1000);

    print_r($result);
    die;
}
