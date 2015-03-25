<?php
/**
 * AllocateVIP接口
 * ====================================================
 * 根据提供信息，分配内网VIP(Virtual IP，多用于高可用程序作为漂移IP。)
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","AllocateVIP");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("Count","1");

	$responseResult = $response->getResult();
	echo $responseResult;


