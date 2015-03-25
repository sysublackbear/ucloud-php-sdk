<?php
/**
 * ModifyUHostInstanceTag接口
 * ====================================================
 * 修改指定UHost实例业务组标识。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","ModifyUHostInstanceTag");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");
	$response->setParameter("Tag","Test");

	$responseResult = $response->getResult();
	echo $responseResult;
