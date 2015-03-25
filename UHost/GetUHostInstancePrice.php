<?php
/**
 * GetUHostInstancePrice接口
 * ====================================================
 * 根据UHost实例配置，获取UHost实例的价格。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","GetUHostInstancePrice");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("ImageId","f43736e1-65a5-4bea-ad2e-8a46e18883c2");
	$response->setParameter("CPU","2");
	$response->setParameter("Memory","4096");
	$response->setParameter("Count","1");

	$responseResult = $response->getResult();
	echo $responseResult;
