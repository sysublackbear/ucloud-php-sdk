<?php
/**
 * GetEIPPrice接口
 * ====================================================
 * 获取弹性IP价格
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","GetEIPPrice");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("OperatorName","Bgp");
	$response->setParameter("Bandwidth","4");

	$responseResult = $response->getResult();
	echo $responseResult;


