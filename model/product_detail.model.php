<?
//  产品ID
$c_goods_id = req('goodsId');

$goodsId = req('goodsId');
$productId = req('productId');
$url = $host . "/travel/interface/zbyV3.2/getZbyGoodsDtailV_3.2?goodsId=" . $goodsId;
$rst = $db->api_post($url);
$arr = json_decode($rst, true);
$data = $arr['data'];
$scheduling = $data['scheduling'];
$_SESSION['childPriceInfo'] = $db->to_gbk($data['childPriceInfo']);

//热门推荐
$pageSize = '6';
$homePage = '1';
$url = $host . "/travel/interface/zby/getHotZbyGoodsList";
$post1 = array('pageSize' => $pageSize, 'homePage' => $homePage);
$tuijian = $db->api_post($url, $post1);
$tuijian = json_decode($tuijian, true);
$tuijian = array_iconv($tuijian);
$tuijian_data = $tuijian['data'];

function seo(){
    global $g_sitename, $c_goods;
    ?>
    <title><?=$c_goods['goods_name']?>_<?=$g_sitename?></title>
    <meta name="keywords" content="<?=$c_goods['goods_name']?>" />
    <meta name="description" content="<?=$c_goods['goods_name']?> <?=str_replace("\n","",removehtml($c_goods['summary']))?> " />
    <?
}
?>