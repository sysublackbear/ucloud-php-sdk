<?php
/**
 * CreateCustomImage接口
 * ====================================================
 * 从指定UHost实例，生成自定义镜像。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","CreateCustomImage");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");
	$response->setParameter("ImageName","Test");

	$responseResult = $response->getResult();
	echo $responseResult;
