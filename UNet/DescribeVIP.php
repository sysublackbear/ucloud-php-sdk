<?php
/**
 * DescribeVIP接口
 * ====================================================
 * 获取内网VIP详细信息
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","DescribeVIP");
	$response->setParameter("Region","cn-south-01");

	$responseResult = $response->getResult();
	echo $responseResult;


