<?php
/**
 * ModifyEIPWeight接口
 * ====================================================
 * 修改弹性IP的外网带宽
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","ModifyEIPWeight");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("EIPId","eip-dr1e2n");
	$response->setParameter("Weight","4");

	$responseResult = $response->getResult();
	echo $responseResult;


