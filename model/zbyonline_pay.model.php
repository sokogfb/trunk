<?
//var_dump($_REQUEST);
$db->check_cookie($loginUrl, $host);
$goodsName = req('goodsName');
$payPrice = req('payPrice');
$orderCode = req('orderCode');
$payTime = req('time');
function get_pay_way()
{
    global $host;
    $trans['token'] = substr($_COOKIE['5fe845d7c136951446ff6a80b8144467'],1,-1);
    $pay_way = juhecurl($host . "/travel/interface/pay/getPayWays", $trans, 1);
    $pay_way = json_decode($pay_way, true);
    $pay_way = array_iconv($pay_way, 'UTF-8', 'GBK');
//    if ($pay_way['status'] != '0000'){
//        exit('��ȡ����ʧ��');
//    }
    return $pay_way;
}
$pay_way = get_pay_way();
$pay_way_data = $pay_way['data'];
?>