<?php
error_reporting(0);
$config = array(
	Coin		=>	"DOGE",	//Coin you Want Use Dice, Example BTC, DASH, LTC, DOGE, ETH, DGB, BCH
	
	Cookie		=>	"__cfduid=d37a33749a94763458aecea45c1f72d691586498017; session_token=bd2e636019e9f622a14511e0799918daa8ede32205ce133681c77685ed4ab1a6; faucetpay=a90le71c3pt8berpvqkkk8857o; remember_me=52335%3A4b1ac2f0986cd9a50cd0fa1f4159a69a939d4e8237b04bb1c8c96ba8acb503e1%3A4929b6d72aeca66803dcb82450cd302a55dcd37d0140bed3ed62c155293a3227",	//Your Cookie For Login Script
	Name		=>	"FaucetPay Dice, by: RBS Terra",
	Base_Bet	=>	"0.000001",	//Base Bet For Frist Roll, Example 0.00000001
	
	//Your Win Chance Want use ,Example Min 1 and Max 94
	Min_winChance	=>	"80", //Win Chance Minimum 1
	Max_winChance	=>	"82", //Win Chance Maximum 94
	
	//Change Bet if Lose or If Win, Using Percent
	if_lose		=>	"200", //Change Bet If Lose, Example 100 for 2x Bet if Lose
	if_win		=>	"300", //Change Bet if Win, Example 20 for 0.2x Bet if Win
	
	//Choise 1 for HI ,2 for Low, 3 for Random
	Bet_on		=>	"3", //Only Write 1, 2, or 3
	
	//Refresh to Base Bet if Profit
	Refresh		=>	"0.001", //Refresh if Profit, Example 0.001
	Stop_Profit =>	"100", //Stop If Profit to Target, Example 100.00
	
	//Reset Next if Win 
	Roll_win	=>	"2"	//If Win Bet Change for How Much Roll, Example 1, 2, 3, 4, 5, etc.
	);
$json = json_encode($config);
	
	
	