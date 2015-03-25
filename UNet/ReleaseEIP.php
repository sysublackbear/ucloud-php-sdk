<?php
/**
 * ReleaseEIP接口
 * ====================================================
 * 释放EIP资源
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","ReleaseEIP");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("EIPId","eip-wintta");

	$responseResult = $response->getResult();
	echo $responseResult;


