<?
//echo 123;
//echo $_POST['goodsId'];
$post = array();
$post['goodsId'] = $_POST['goodsId'];
$post['departDate'] = $_POST['departDate'];
//$url = $host . "/travel/interface/zbyV3.2/getZbyPackageByGoodsIdV_3.2";
//$rst = $db->api_post($url, $post);
//$arr = json_decode($rst, true);
//$data = $arr['data'];
echo $post['goodsId'] ;