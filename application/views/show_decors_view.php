<legend id="master">
	<?php

		//$i=0;
		foreach($all_decors as $rows)
                    {
			//$decorId; $decorName; $buy_bucks; $buy_coins; $sell_coins;
			//print_r($rows);
			$decorId = $rows->decorid;
			$decorName=$rows->name;
			$buy_bucks=$rows->buy_bucks;
			$buy_coins=$rows->buy_coins;
			$sell_coins=$rows->sell_coins;
			
			
			$decorurl="http://static.itiw-webdev.com/iphone/images/dragonzootappocket/decor/d".$decorId.".png";
			echo "<div id='decor'><div id='decorImage'><img src=".$decorurl."></div>";
			echo "<div id='decorText' style='font-size:94%'>".$decorName."<br/>Bucks: ".$buy_bucks."<br/>Coins: ".$buy_coins."<br/> Sell Coins:".$sell_coins."</div><div id='anchor'>".anchor("buy/decor_buyer_controller?decor=$decorId&decorName=$decorName&buy_coins=$buy_coins&buy_bucks=$buy_bucks&sell_coins=$sell_coins","Buy")."</div></div>";
			
			
			
		   }	
		
		
		
		/*$url="http://static.itiw-webdev.com/iphone/images/dragonzoofacebook/utfonlinedecor1.xml";
		$xml= simplexml_load_file($url);
		$decorurl= array();
		$i=0;
		foreach($xml->children() as $rows)
		{
			$decorId; $decorName; $buy_bucks; $buy_coins; $sell_coins;
			$flag = false;
			foreach($rows->children() as $child)
			{
				switch ($child->getName())
				{
					case "decorid":
						$decorId = $child;
						break;
					case "name":
						$decorName=$child;
						break;
					case "buy_bucks":
						$buy_bucks=$child;
						break;
					case "buy_coins":
						$buy_coins=$child;
						break;
					case "sell_coins":
						$sell_coins=$child;
						break;
					case "category":
						if($child=="plant") $flag=true;
						break;
				}
			}
			if($flag == true)
			{
				$decorurl[$i]="http://static.itiw-webdev.com/iphone/images/dragonzootappocket/decor/d".$decorId.".png";
				echo "<div id='decor'><div id='decorImage'><img src=".$decorurl[$i]."></div>";
				echo "<div id='decorText' style='font-size:94%'>".$decorName."<br/>Bucks: ".$buy_bucks."<br/>Coins: ".$buy_coins."<br/> Sell Coins:".$sell_coins."</div><div id='anchor'>".anchor("buy/decor_buyer_controller?decor=$decorId&decorName=$decorName&buy_coins=$buy_coins&buy_bucks=$buy_bucks&sell_coins=$sell_coins","Buy")."</div></div>";
				//echo anchor("buy/buyer/$decorId","zz");
				$i++;
				$flag=false;
			}

		}*/

	?>
</legend>