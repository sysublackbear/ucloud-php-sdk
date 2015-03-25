<?php
/**
 * BindEIP接口
 * ====================================================
 * 释放EIP资源
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","BindEIP");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("EIPId","eip-1inlb2");
	$response->setParameter("ResourceType","uhost");
	$response->setParameter("ResourceId","uhost-0ttesd");

	$responseResult = $response->getResult();
	echo $responseResult;


