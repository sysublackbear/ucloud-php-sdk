<?php
/**
 * ReleaseVIP接口
 * ====================================================
 * 释放VIP资源
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","ReleaseVIP");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("VIP","10.10.3.13");

	$responseResult = $response->getResult();
	echo $responseResult;


