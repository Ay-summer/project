<?php
	Class Pay{
		public function hackpay($type,$name,$money){

					 
			//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
			//商户ID
			$alipay_config['partner']		= '15869';

			//商户KEY
			$alipay_config['key']			= '5eXVleNfO6yeNy5bqY1UfJplOX6e9ze1';


			//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


			//签名方式 不需修改
			$alipay_config['sign_type']    = strtoupper('MD5');

			//字符编码格式 目前支持 gbk 或 utf-8
			$alipay_config['input_charset']= strtolower('utf-8');

			//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
			$alipay_config['transport']    = 'http';

			//支付API地址
			$alipay_config['apiurl']    = 'http://pay.hackwl.cn/';


			////////////////////////////////////
			///
			require_once("lib/epay_submit.class.php");

			/**************************请求参数**************************/
			        $notify_url = "http://xxx.xxx/notify_url.php";
			        //需http://格式的完整路径，不能加?id=123这类自定义参数

			        //页面跳转同步通知页面路径
			        $return_url = "http://www.php216.com/index";
			        //需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/

			        //商户订单号
			        $out_trade_no =time();
			        //商户网站订单系统中唯一订单号，必填


					//支付方式
			        $type = $type;
			        //商品名称
			        $name = $name;
					//付款金额
			        $money = $money;
					//站点名称
			        $sitename = 'www';
			        //必填

			        //订单描述


			/************************************************************/

			//构造要请求的参数数组，无需改动
			$parameter = array(
					"pid" => trim($alipay_config['partner']),
					"type" => $type,
					"notify_url"	=> $notify_url,
					"return_url"	=> $return_url,
					"out_trade_no"	=> $out_trade_no,
					"name"	=> $name,
					"money"	=> $money,
					"sitename"	=> $sitename
			);

			//建立请求
			$alipaySubmit = new AlipaySubmit($alipay_config);
			$html_text = $alipaySubmit->buildRequestForm($parameter);
			echo $html_text;



		}
	}
?>