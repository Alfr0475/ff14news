<?php

require_once 'vendor/autoload.php';
require_once 'config.php';

$list_data = array();
$list_data['today']     = array();
$list_data['yesterday'] = array();
$list_data['old']       = array();

foreach ($config['feed']['data'] as $feed_data) {
    $feed = simplexml_load_file($feed_data['url']);

    $feed_count = 0;
    foreach ($feed->item as $item) {
        $feed_row = array();

        // 各種RSSの表示件数を超えた場合はループ終了
        if ($feed_count++ == $config['feed']['limit']) {
            break;
        }

        $dc = $item->children('http://purl.org/dc/elements/1.1/');

        $feed_row['blog']     = (string)$feed->channel->title;
        $feed_row['blog_url'] = (string)$feed->channel->link;
        $feed_row['link']     = (string)$item->link;
        $feed_row['title']    = (string)$item->title;
        $feed_row['date']     = date('Y/m/d H:i:s', strtotime($dc->date));

        if (date('Yz', strtotime($feed_row['date'])) == date('Yz', time())) {
            // 今日
            $list_data['today'][] = $feed_row;
        } elseif (date('Yz', strtotime($feed_row['date'])) < date('Yz', time()) - 1) {
            // それ以前
            $list_data['old'][] = $feed_row;
        } else {
            // 昨日
            $list_data['yesterday'][] = $feed_row;
        }
    }
}


$smarty = new Smarty();

$smarty->template_dir = $config['smarty']['template_dir'];
$smarty->compile_dir  = $config['smarty']['compile_dir'];


$feed_type = 'today';
if ($_REQUEST['feed']) {
    $feed_type = $_REQUEST['feed'];
}

// 日付でソート
uasort($list_data[$feed_type], 'date_cmp');
$smarty->assign('list_data', $list_data[$feed_type]);

$smarty->display('index.tpl');


function date_cmp($a, $b) {
    $a_time = strtotime($a['date']);
    $b_time = strtotime($b['date']);

    if ($a_time == $b_time) {
        return 0;
    }
    return ($a_time < $b_time) ? 1 : -1;
}