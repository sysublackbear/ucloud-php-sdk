<?php
/**
 * RebootUHostInstance接口
 * ====================================================
 * 重新启动UHost实例，需要指定数据中心及UHostID两个参数的值。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","RebootUHostInstance");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");

	$responseResult = $response->getResult();
	echo $responseResult;


