<?php
/**
 * ModifyUHostInstanceRemark接口
 * ====================================================
 * 修改指定UHost实例备注信息。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","ModifyUHostInstanceRemark");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");
	$response->setParameter("Remark","Test");

	$responseResult = $response->getResult();
	echo $responseResult;
