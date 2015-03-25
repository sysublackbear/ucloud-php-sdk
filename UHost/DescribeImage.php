<?php
/**
 * DescribeImage接口
 * ====================================================
 * 获取指定数据中心镜像列表，用户可通过指定操作系统类型，镜像Id进行过滤。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","DescribeImage");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");

	$responseResult = $response->getResult();
	echo $responseResult;
