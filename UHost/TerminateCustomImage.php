<?php
/**
 * TerminateCustomImage接口
 * ====================================================
 * 删除用户自定义镜像
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","TerminateCustomImage");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("ImageId","6fa91ff8-663c-4a7c-b054-1824aa41a1a3");

	$responseResult = $response->getResult();
	echo $responseResult;
