<?php
/**
 * AllocateEIP接口
 * ====================================================
 * 根据提供信息，分配弹性IP
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","AllocateEIP");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("OperatorName","telecom");
	$response->setParameter("Bandwidth","4");

	$responseResult = $response->getResult();
	echo $responseResult;


