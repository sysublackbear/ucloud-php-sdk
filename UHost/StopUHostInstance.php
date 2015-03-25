<?php
/**
 * StopUHostInstance接口
 * ====================================================
 * 指停止处于运行状态的UHost实例，需指定数据中心及UhostID。
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","StopUHostInstance");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("UHostId","uhost-qs20fr");

	$responseResult = $response->getResult();
	echo $responseResult;


