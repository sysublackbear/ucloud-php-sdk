<?php
/**
 * UpdateSecurityGroup接口
 * ====================================================
 * 更新防火墙规则
 * 
*/

	include_once("../SDK.php");

	$response = new UCloudAPIClient();
	//列出请求参数
	$response->setParameter("Action","UpdateSecurityGroup");
	$response->setParameter("Region","cn-south-01");
	$response->setParameter("GroupId","6583");

	//注意：Rule.n的定义格式：“Proto|Dst_port|Src_ip|Action|Priority”
	$Proto = "UDP";
	$Dst_port = "53";
	$Src_ip = "0.0.0.0/0";
	$Action = "ACCEPT";
	$Priority = "50";

	$Rule0 = $Proto . "|" . $Dst_port . "|" . $Src_ip . "|" . $Action . "|" . $Priority;
	$response->setParameter("Rule.0",$Rule0);

	$responseResult = $response->getResult();
	echo $responseResult;