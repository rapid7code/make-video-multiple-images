<?php

function get_data_videos($uid, $email){
    $result = array();

    $arial = get_template_directory(). '/video_libs/fonts/arial.ttf';
    $sunsilkfive = get_template_directory(). '/video_libs/fonts/sunsilkfive-regular-webfont.ttf';
    $FortunaDot = get_template_directory(). '/video_libs/fonts/FortunaDot.ttf';
    $img_frame = get_template_directory(). '/video_libs/video-frame';
    $img_url_1 = ABSPATH. 'wp-content/uploads/demo.jpg';
    $fullname = '';

    $dir_url = get_template_directory();

    if( !empty($uid) && !empty($email) ){
        $user_info = ssk_get_info_user_live($uid);

        $img_url_1 = 'https://toasang.sunsilk.com.vn/'. $user_info->img_url_1;
        $year_1 = $user_info->year_1;
        $comment_1 = mb_strtoupper($user_info->comment_1, 'UTF-8');
        $img_url_2 = 'https://toasang.sunsilk.com.vn/'. $user_info->img_url_2;
        $year_2 = $user_info->year_2;
        $comment_2 = mb_strtoupper($user_info->comment_2, 'UTF-8');
        $img_url_3 = 'https://toasang.sunsilk.com.vn/'. $user_info->img_url_3;
        $year_3 = $user_info->year_3;
        $fullname = mb_strtoupper($user_info->fullname, 'UTF-8');

        $json_data = '[
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "205,127",
                "opacity": 0.5,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide001.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "202,127",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide002.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "199,127",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide003.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "197,127",
                "opacity": 0.8,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide004.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "194,127",
                "opacity": 0.9,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide005.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "191,127",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide006.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "189,127",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide007.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "187,127",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide008.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "184,127",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide009.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "180,127",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide010.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "178,127",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide011.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "176,127",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide012.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "174,127",
                "opacity": 0.9,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide013.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "171,127",
                "opacity": 0.8,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide014.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "168,127",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide015.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "166,127",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide016.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "163,127",
                "opacity": 0.5,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide017.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "161,127",
                "opacity": 0.4,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide018.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "158,127",
                "opacity": 0.3,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide019.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "156,127",
                "opacity": 0.2,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide020.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 32,
                "position": "152,127",
                "opacity": 0.1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide021.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide022.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide023.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide024.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide025.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide026.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide027.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide028.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide029.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide030.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide031.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide032.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide033.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide034.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide035.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide036.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide037.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide038.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide039.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide040.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide041.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide042.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide043.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide044.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide045.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide046.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide047.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide048.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide049.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide050.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide051.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide052.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide053.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide054.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide055.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide056.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide057.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide058.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide059.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide060.png"
          },
          {
            "text": "",
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide061.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 17,
                "position": "594,126",
                "opacity": 0.1,
                "order": "front",
                "rotate": 31
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide062.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 19,
                "position": "554,132",
                "opacity": 0.4,
                "order": "front",
                "rotate": 20
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide063.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 21,
                "position": "520,134",
                "opacity": 0.5,
                "order": "front",
                "rotate": 27
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide064.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 24,
                "position": "482,137",
                "opacity": 0.6,
                "order": "front",
                "rotate": 23
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide065.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 29,
                "position": "435,140",
                "opacity": 0.7,
                "order": "front",
                "rotate": 17
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide066.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 35,
                "position": "395,150",
                "opacity": 0.8,
                "order": "front",
                "rotate": 15
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide067.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 37,
                "position": "353,167",
                "opacity": 0.9,
                "order": "front",
                "rotate": 8
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide068.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 39,
                "position": "315,167",
                "opacity": 1,
                "order": "front",
                "rotate": 4
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide069.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 41,
                "position": "310,167",
                "opacity": 1,
                "order": "front",
                "rotate": 2
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide070.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 43,
                "position": "307,167",
                "opacity": 1,
                "order": "front",
                "rotate": 1.5
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide071.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 45,
                "position": "295,167",
                "opacity": 1,
                "order": "front",
                "rotate": 0.5
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide072.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 45,
                "position": "287,167",
                "opacity": 1,
                "order": "front",
                "rotate": 0.5
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide073.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 45,
                "position": "280,167",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide074.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 45,
                "position": "275,167",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide075.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 45,
                "position": "270,167",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide076.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 45,
                "position": "265,167",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide077.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 45,
                "position": "260,167",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide078.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 45,
                "position": "260,167",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 94,
                "height": 94,
                "position": "500,99",
                "opacity": 0.1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide079.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 45,
                "position": "185,167",
                "opacity": 0.8,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 122,
                "height": 122,
                "position": "423,92",
                "opacity": 0.3,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide080.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 38,
                "position": "120,150",
                "opacity": 0.5,
                "order": "front",
                "rotate": -5
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "564,133",
                "opacity": 0.1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 151,
                "height": 151,
                "position": "350,88",
                "opacity": 0.5,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide081.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$FortunaDot.'",
                "size": 38,
                "position": "50,150",
                "opacity": 0.3,
                "order": "front",
                "rotate": -7
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "534,133",
                "opacity": 0.3,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 175,
                "height": 175,
                "position": "288,84",
                "opacity": 0.7,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide082.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "510,133",
                "opacity": 0.5,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 195,
                "height": 195,
                "position": "234,81",
                "opacity": 0.9,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide083.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "490,123",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 213,
                "height": 213,
                "position": "189,77",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide084.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "475,123",
                "opacity": 0.9,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 227,
                "height": 227,
                "position": "153,75",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide085.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "463,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 238,
                "height": 238,
                "position": "126,73",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide086.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "454,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 245,
                "height": 245,
                "position": "108,72",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide087.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "451,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 248,
                "height": 248,
                "position": "100,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide088.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "450,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 249,
                "height": 249,
                "position": "97,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide089.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "449,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "435,230",
                "opacity": 0.1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 251,
                "height": 251,
                "position": "95,70",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide090.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "447,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "425,230",
                "opacity": 0.2,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 251,
                "height": 251,
                "position": "94,70",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide091.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "446,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "415,230",
                "opacity": 0.3,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 250,
                "height": 250,
                "position": "93,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide092.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "445,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "405,230",
                "opacity": 0.4,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 250,
                "height": 250,
                "position": "92,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide093.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "444,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "398,230",
                "opacity": 0.5,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 250,
                "height": 250,
                "position": "91,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide094.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "443,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "390,230",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 255,
                "height": 255,
                "position": "89,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide095.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "442,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "384,230",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 255,
                "height": 255,
                "position": "88,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide096.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "441,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "374,230",
                "opacity": 0.8,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 255,
                "height": 255,
                "position": "87,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide097.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "440,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "373,230",
                "opacity": 0.9,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 256,
                "height": 256,
                "position": "85,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide098.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "439,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "370,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 257,
                "height": 257,
                "position": "84,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide099.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "438,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "365,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 258,
                "height": 258,
                "position": "82,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide100.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "432,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "363,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 259,
                "height": 259,
                "position": "81,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide101.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "436,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "361,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 260,
                "height": 260,
                "position": "79,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide102.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "435,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "360,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 261,
                "height": 261,
                "position": "78,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide103.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "435,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "360,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 262,
                "height": 262,
                "position": "76,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide104.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "432,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "359,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 263,
                "height": 263,
                "position": "75,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide105.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "432,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "359,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 264,
                "height": 264,
                "position": "74,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide106.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "430,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "357,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 265,
                "height": 265,
                "position": "72,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide107.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "429,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "356,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 266,
                "height": 266,
                "position": "71,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide108.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "428,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "355,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 267,
                "height": 267,
                "position": "69,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide109.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "427,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "354,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 268,
                "height": 268,
                "position": "68,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide110.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "426,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "353,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 269,
                "height": 269,
                "position": "68,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide111.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "425,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "352,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 270,
                "height": 270,
                "position": "65,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide112.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "425,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "352,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 270,
                "height": 270,
                "position": "65,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide113.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "424,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "352,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 273,
                "height": 273,
                "position": "63,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide114.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "423,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "351,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 275,
                "height": 275,
                "position": "61,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide115.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "421,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "350,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 275,
                "height": 275,
                "position": "61,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide116.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "421,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "350,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 275,
                "height": 275,
                "position": "61,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide117.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "420,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "349,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 278,
                "height": 278,
                "position": "59,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide118.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "420,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "349,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 279,
                "height": 279,
                "position": "57,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide119.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "418,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "347,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 280,
                "height": 280,
                "position": "55,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide120.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "417,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "346,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 280,
                "height": 280,
                "position": "54,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide121.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "416,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "345,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 280,
                "height": 280,
                "position": "54,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide122.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "415,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "344,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 280,
                "height": 280,
                "position": "52,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide123.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "414,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "343,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 280,
                "height": 280,
                "position": "50,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide124.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "413,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "342,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 285,
                "height": 285,
                "position": "49,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide125.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "412,123",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "341,230",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 286,
                "height": 286,
                "position": "48,71",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide126.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "411,123",
                "opacity": 0.9,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "340,230",
                "opacity": 0.9,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 257,
                "height": 257,
                "position": "47,71",
                "opacity": 0.9,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide127.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "404,123",
                "opacity": 0.8,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "333,230",
                "opacity": 0.8,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 256,
                "height": 256,
                "position": "42,71",
                "opacity": 0.8,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide128.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "383,123",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "311,230",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 249,
                "height": 249,
                "position": "30,74",
                "opacity": 0.7,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide129.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "347,123",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "281,230",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 238,
                "height": 238,
                "position": "9,79",
                "opacity": 0.6,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide130.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "296,123",
                "opacity": 0.5,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "235,230",
                "opacity": 0.5,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 225,
                "height": 225,
                "position": "-23,85",
                "opacity": 0.5,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide131.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "229,139",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "174,230",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 204,
                "height": 204,
                "position": "-59,94",
                "opacity": 0.3,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide132.png"
          },
          {
            "text": [
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "150,139",
                "opacity": 0.4,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "100,230",
                "opacity": 0.4,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 17,
                "position": "544,210",
                "opacity": 0.2,
                "order": "front",
                "rotate": -25
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide133.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "10,200",
                "opacity": 0.1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 24,
                "position": "500,205",
                "opacity": 0.4,
                "order": "front",
                "rotate": -23
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide134.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 28,
                "position": "460,200",
                "opacity": 0.6,
                "order": "front",
                "rotate": -17
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide135.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 34,
                "position": "415,190",
                "opacity": 0.8,
                "order": "front",
                "rotate": -10
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide136.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 32,
                "position": "375,180",
                "opacity": 1,
                "order": "front",
                "rotate": -7
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide137.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 39,
                "position": "330,180",
                "opacity": 1,
                "order": "front",
                "rotate": -5
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide138.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "280,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide139.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "275,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide140.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "270,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide141.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "265,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide142.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "262,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide143.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "257,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide144.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "253,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide145.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "252,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide146.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "248,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide147.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "245,180",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide148.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 46,
                "position": "210,180",
                "opacity": 0.8,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 100,
                "height": 100,
                "position": "538,112",
                "opacity": 0.3,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide149.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 44,
                "position": "160,180",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 130,
                "height": 130,
                "position": "502,105",
                "opacity": 0.4,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide150.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 42,
                "position": "100,180",
                "opacity": 0.4,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 145,
                "height": 145,
                "position": "466,96",
                "opacity": 0.5,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide151.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$FortunaDot.'",
                "size": 40,
                "position": "22,180",
                "opacity": 0.2,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 170,
                "height": 170,
                "position": "433,90",
                "opacity": 0.6,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide152.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 186,
                "height": 186,
                "position": "404,82",
                "opacity": 0.7,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide153.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 200,
                "height": 200,
                "position": "380,75",
                "opacity": 0.9,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide154.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "245,135",
                "opacity": 0.1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 215,
                "height": 215,
                "position": "360,70",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide155.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "224,135",
                "opacity": 0.3,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 220,
                "height": 220,
                "position": "347,66",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide156.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "209,135",
                "opacity": 0.5,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 228,
                "height": 228,
                "position": "334,64",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide157.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "203,135",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 230,
                "height": 230,
                "position": "330,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide158.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "203,135",
                "opacity": 0.9,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 230,
                "height": 230,
                "position": "330,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide159.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "203,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 230,
                "height": 230,
                "position": "330,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide160.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "203,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 230,
                "height": 230,
                "position": "328,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide161.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "203,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 230,
                "height": 230,
                "position": "328,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide162.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "203,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 230,
                "height": 230,
                "position": "328,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide163.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "203,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 230,
                "height": 230,
                "position": "328,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide164.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "202,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "47,270",
                "opacity": 0.2,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "327,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide165.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "201,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "59,270",
                "opacity": 0.3,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "326,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide166.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "199,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "68,270",
                "opacity": 0.4,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "325,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide167.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "198,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "76,270",
                "opacity": 0.5,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "324,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide168.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "197,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "84,270",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "323,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide169.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "196,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "87,270",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "322,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide170.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "195,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "87,270",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "321,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide171.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "193,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "87,270",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "320,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide172.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "192,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "87,270",
                "opacity": 0.8,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "319,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide173.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "190,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "87,270",
                "opacity": 0.9,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "318,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide174.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "189,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "87,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide175.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "188,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "87,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide176.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "187,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "87,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide177.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "186,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "85,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide178.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "185,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "84,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide179.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "184,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "83,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide180.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "183,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "82,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide181.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "182,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "81,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide182.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "181,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "80,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide183.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "180,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "79,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide184.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "179,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "77,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide185.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "178,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "77,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide186.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "176,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "76,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "317,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide187.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "175,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "76,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "316,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide188.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "174,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "75,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "315,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide189.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "173,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "74,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "314,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide190.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "172,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "73,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "313,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide191.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "171,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "72,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "313,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide192.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "170,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "71,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "312,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide193.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "169,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "70,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "311,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide194.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "168,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "69,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "310,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide195.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "167,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "68,270",
                "opacity": 1,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "309,63",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide196.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "170,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "30,270",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "295,60",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide197.png"
          },
          {
            "text": [
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 17,
                "position": "125,135",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "width": 60,
                "height": 80,
                "size": 22,
                "position": "30,270",
                "opacity": 0.6,
                "order": "front",
                "rotate": 0,
                "break" : "yes"
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 240,
                "height": 240,
                "position": "295,60",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide198.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "603,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide199.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "560,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide200.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "517,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide201.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "481,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide202.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "446,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide203.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "414,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide204.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "385,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide205.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "356,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide206.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "333,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide207.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "312,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide208.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "295,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide209.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "277,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide210.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "263,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide211.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "253,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide212.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "245,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide213.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "240,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide214.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "237,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide215.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "235,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide216.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "235,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide217.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "235,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide218.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "230,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide219.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "230,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide220.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "228,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide221.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "227,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide222.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "226,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide223.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "224,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide224.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "222,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide225.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "220,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide226.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "220,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide227.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "220,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide228.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "217,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide229.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "216,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide230.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide231.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide232.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide233.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide234.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide235.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide236.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide225.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide238.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide239.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide240.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide241.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "214,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide242.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "208,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide243.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "187,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide244.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "152,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide245.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "103,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide246.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "40,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide247.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "-40,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide248.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "-170,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide249.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 25,
                "position": "-220,95",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": "",
            "imageFrame": "'.$img_frame.'/vid_2611_hide250.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "329,56",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "387,290",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "330,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide251.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "228,42",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "289,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "229,86",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide252.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "208,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "269,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "210,86",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide253.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "170,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "252,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "192,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide254.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "155,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "237,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "176,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide255.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "143,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "225,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "166,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide256.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "134,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "216,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "156,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide257.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "127,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "208,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "149,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide258.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "122,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "205,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "144,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide259.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "118,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "201,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "141,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide260.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "116,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "200,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "139,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide261.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "115,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "199,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "138,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide262.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "114,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "197,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "135,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide263.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "110,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "195,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "134,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide264.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "110,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "194,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "133,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide265.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "109,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "193,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "132,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide266.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "107,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "192,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "130,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide267.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "106,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "191,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "129,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide268.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "104,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "190,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "127,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide269.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "102,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "189,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "125,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide270.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "101,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "188,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "124,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide271.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "99,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "187,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "123,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide272.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "99,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "184,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "121,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide273.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "98,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "183,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "120,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide274.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "85,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "170,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "105,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide275.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "45,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "132,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "68,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide276.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "-5,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "85,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "570,20",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "20,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              },
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "579,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide277.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "-95,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "25,282",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "476,30",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "613,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "-25,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              },
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "518,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide278.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_1.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "-160,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "409,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "544,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_1.'",
                "width": 160,
                "height": 160,
                "position": "-100,87",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              },
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "450,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide279.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "353,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "482,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "389,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide280.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "310,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "434,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "340,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide281.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "280,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "395,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "302,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide282.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "265,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "370,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "278,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide283.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "265,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "366,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "274,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide284.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "261,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "363,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "270,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide285.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "257,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "358,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "266,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide286.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "255,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "356,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "264,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide287.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "250,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "353,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "260,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide288.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "245,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "349,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "257,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide289.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "240,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "345,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "254,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide290.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "240,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "341,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "250,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide291.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "236,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "336,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "247,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide292.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "232,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "332,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "242,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide293.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "228,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "329,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "240,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide294.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "65,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "245,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "155,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide295.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "-100,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              },
              {
                "text": "'.$year_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 14,
                "position": "80,315",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "-15,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide296.png"
          },
          {
            "text": [
              {
                "text": "'.$comment_2.'",
                "font": "'.$sunsilkfive.'",
                "size": 21,
                "position": "-150,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_2.'",
                "width": 192,
                "height": 192,
                "position": "-150,96",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide297.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 122,
                "height": 122,
                "position": "287,160",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide298.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 158,
                "height": 158,
                "position": "259,126",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide299.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 177,
                "height": 177,
                "position": "244,108",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide300.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 194,
                "height": 194,
                "position": "232,94",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide301.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 205,
                "height": 205,
                "position": "222,84",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide302.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 214,
                "height": 214,
                "position": "215,77",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide303.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 217,
                "height": 217,
                "position": "213,74",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide304.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 217,
                "height": 217,
                "position": "213,74",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide305.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 217,
                "height": 217,
                "position": "213,74",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide306.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 217,
                "height": 217,
                "position": "213,74",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide307.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 217,
                "height": 217,
                "position": "213,74",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide308.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 219,
                "height": 219,
                "position": "206,70",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide309.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 219,
                "height": 219,
                "position": "206,70",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide310.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 214,
                "height": 214,
                "position": "186,73",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide311.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 206,
                "height": 206,
                "position": "154,82",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide312.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 200,
                "height": 200,
                "position": "126,86",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide313.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 193,
                "height": 193,
                "position": "104,91",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide314.png"
          },
          {
            "text": "",
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 188,
                "height": 188,
                "position": "88,95",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide315.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 37,
                "position": "355,45",
                "opacity": 0.5,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "75,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide316.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 30,
                "position": "365,45",
                "opacity": 0.7,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "70,99",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide317.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 28,
                "position": "376,45",
                "opacity": 0.9,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide318.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 26,
                "position": "380,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide319.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 24,
                "position": "387,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide320.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "389,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide321.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide322.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide323.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide324.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide325.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide326.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide327.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide328.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide329.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide330.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide331.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide332.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide333.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide334.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide335.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide336.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide337.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide338.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide339.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide340.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide341.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide342.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide343.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide344.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide345.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide346.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide347.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide348.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide349.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide350.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide351.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide352.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide353.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide354.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide355.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide356.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide357.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide358.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide359.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide360.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide361.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide362.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide363.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide364.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide365.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide366.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide367.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide368.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide367.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide368.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide369.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide370.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide371.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide372.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide373.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide374.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide375.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide376.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide377.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide378.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide379.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide380.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide381.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide382.png"
          },
          {
            "text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide383.png"
          }
        ]';


        $result = json_decode($json_data);
    }

    return $result;
}


function frame_share_fb($uid, $email){
    $result = array();

    $arial = get_template_directory(). '/video_libs/fonts/arial.ttf';
    $sunsilkfive = get_template_directory(). '/video_libs/fonts/sunsilkfive-regular-webfont.ttf';
    $FortunaDot = get_template_directory(). '/video_libs/fonts/FortunaDot.ttf';
    $img_frame = get_template_directory(). '/video_libs/video-frame';
    $img_url_1 = ABSPATH. 'wp-content/uploads/demo.jpg';
    $fullname = '';

    $dir_url = get_template_directory();

    if( !empty($uid) && !empty($email) ){
        $user_info = ssk_get_info_user_live($uid);

        $img_url_1 = 'https://toasang.sunsilk.com.vn/'. $user_info->img_url_1;
        $year_1 = $user_info->year_1;
        $comment_1 = mb_strtoupper($user_info->comment_1, 'UTF-8');
        $img_url_2 = 'https://toasang.sunsilk.com.vn/'. $user_info->img_url_2;
        $year_2 = $user_info->year_2;
        $comment_2 = mb_strtoupper($user_info->comment_2, 'UTF-8');
        $img_url_3 = 'https://toasang.sunsilk.com.vn/'. $user_info->img_url_3;
        $year_3 = $user_info->year_3;
        $fullname = mb_strtoupper($user_info->fullname, 'UTF-8');

        $json_data = '[
          {"text": [
              {
                "text": "'.$fullname.'",
                "font": "'.$sunsilkfive.'",
                "size": 18,
                "position": "390,45",
                "opacity": 1,
                "order": "front",
                "rotate": 0
              }
            ],
            "imageFace": [
              {
                "src": "'.$img_url_3.'",
                "width": 184,
                "height": 184,
                "position": "71,98",
                "opacity": 1,
                "order": "back",
                "rotate": 0
              }
            ],
            "imageFrame": "'.$img_frame.'/vid_2611_hide383.png"
          }
        ]';

        $result = json_decode($json_data);
    }

    return $result;
}