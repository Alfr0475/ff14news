<?php

$config = array();

$config['feed'] = array();
$config['feed']['limit'] = 20;

$config['feed']['data'] = array(
    array(                      // 馬鳥速報
        'url' => 'http://blog.livedoor.jp/umadori0726/index.rdf',
    ),
    array(                      // じゅうよんにゅーす！
        'url' => 'http://lalafell.xxxblog.jp/index.rdf',
    ),
    array(                      // Bard News
        'url' => 'http://bardnews.blog.jp/index.rdf',
    ),
    array(                      // FF14速報
        'url' => 'http://ff14net.2chblog.jp/index.rdf',
    ),
    array(                      // チョコボマニアックス
        'url' => 'http://animecat.blog.fc2.com/?xml',
    ),
    array(                      // FF14：じゅうよんつうしん
        'url' => 'http://ff14-14tuusin.blog.jp/index.rdf',
    ),
    array(                      // FF14速報は無理
        'url' => 'http://sokumuri.com/index.rdf',
    ),
    array(                      // ファイナルファンタジー泉の神聖小屋
        'url' => 'http://blog.livedoor.jp/ffnoizu/index.rdf',
    ),
    array(                      // Daily FF XIV
        'url' => 'http://dailyff14.com/index.rdf',
    ),
    array(                      // FF14ねこくま
        'url' => 'http://pcnewsplus.com/feed/',
    ),
    array(                      // ねとげのあれこれ
        'url' => 'http://netoare.doorblog.jp/index.rdf',
    ),
    array(                      // 杏仁速報
        'url' => 'http://ff14mmo.blog.jp/index.rdf',
    ),
    array(                      // レリックふぉーてぃーん
        'url' => 'http://relic14.com/index.rdf',
    ),
    array(                      // FF14遅報
        'url' => 'http://ff14chihou.blog.jp/index.rdf',
    ),
    array(                      // じゅうよんとーく
        'url' => 'http://ff14talk.2chblog.jp/index.rdf',
    ),
    array(                      // エオルゼア速報 FF14まとめ
        'url' => 'http://eoruzea.doorblog.jp/index.rdf',
    ),
    array(                      // FF14ch
        'url' => 'http://ff14douga.2chblog.jp/index.rdf',
    ),
    array(                      // FF14攻略
        'url' => 'http://www.ff14xiv.com/index.rdf',
    ),
);


$config['smarty'] = array();
$config['smarty']['template_dir'] = dirname(__FILE__) . '/templates';
$config['smarty']['compile_dir']  = dirname(__FILE__) . '/cache/compile';
