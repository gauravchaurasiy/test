<?php
	if(isset($_SESSION['cart']))
	{
		$no_of_item=count($_SESSION['cart']);
	}
	else
	{
		$no_of_item=0;
	}
?>
<ul>
	
	<li><a href="index.php">Home</a></li>
	
	<li>
		<!--<a href="#">Welcome <?php echo $_SESSION[$userid]['name']; ?></a>-->
		<a href="#">Personal Setting</a>
		<ul>
			
			<li><a href="productlist.php">Products</a></li>
			<li><a href="profile_edit.php">View / Edit Profile</a></li>
			<li><a href="change_password.php">Change Password</a></li>
			<li><a href="update_bank_detail.php">View/Edit Bank Detail</a></li>
		</ul>
	</li>
	<li>
	<a href="#">Message</a>
		<ul>
			
			<li><a href="message.php">Compose</a></li>
			<li><a href="message-inbox.php">Inbox</a></li>
			
		</ul>
	</li>
	
	
	<li>
		<a href="#">Downlines</a>
		<ul>
			<li><a href="tree.php">Tree Structure</a></li>
			<li><a href="downline.php">Genealogy</a></li>
			<li><a href="gen_tree.php">Direct Tree</a></li>
			<li><a href="direct.php">Directs</a></li>
			<li><a href="business_count.php">Business Count Details</a></li>
		</ul>
	</li>
	
	
	<li>
		<a href="#">Accounts</a>
		<ul>
			<li><a href="daily_payment.php">Daily Commission</a></li>
			<li><a href="binarynew.php">Weekly Pair Income Commission</a></li>
			<li><a href="binarynew_repurchase.php">Generation Commission</a></li>
			<!--<li><a href="binarynew_loyalty.php">Achievement Commission</a></li>-->
		</ul>
	</li>
	
	<li>
		<a href="#">Documents</a>
		<ul>
			<li><a href="myaccount.php">Welcome Letter</a></li>
			<li><a href="receipt.php">Reciept</a></li>
		</ul>
	</li>
	
	
	<li>
		<a href="#">Pins</a>
		<ul>
			<li><a href="unusedpin_old.php">OLD Un-Used Pins</a></li>
			<li><a href="unusedpin.php">Un-Used Pins</a></li>
			<li><a href="usedpin.php">Used Pins</a></li>
			<li><a href="transfer_pin.php">Transfer Pins</a></li>
			
			<li><a href="coupon.php">Coupons</a></li>
			
			
		</ul>
	</li>
			<?php
				/* $tempDate = date('Y-m-d'); 
				$day=date('D', strtotime($tempDate));
				$dayArr=array('Sat','Sun','Mon');
				if(in_array($day,$dayArr))
				{ */
			?>
					<!--<li><a href="generate_pin.php">Ewallet for 350</a></li>-->
			<?php
				/* } */
			?>
			
			
			
			
			<?php
				$tempDate = date('Y-m-d'); 
				$day=date('D', strtotime($tempDate));
				$dayArr=array('Sat','Sun','Mon','Tue');
				
				/* $today=date('Y-m-d');
				$lastday='2016-06-13';
				$ans=strtotime($lastday)-strtotime($today); */
				
				if(in_array($day,$dayArr))
				{
			?>
					<!--<li><a href="generate_pin_255.php">Ewallet For 255</a></li>-->
			<?php
				}
			?>
			
			
	
	
	<li>
		<a href="#">Frenchisee</a>
		<ul>
			<li><a href="flist.php">Frenchisee list</a></li>
			<li><a href="fregistration1.php">Add Frenchisee</a></li>
			
		</ul>
	</li>
	

	<!--
	<li>
		<a href="#">Repurchase <span id="cartitem" style="border:1px solid red;padding:2px;"><?php echo $no_of_item; ?></span></a>
		<ul>
			<li><a href="view_product.php">Repurchase Here</a></li>
			<li><a href="view_cart.php">Selected Products</a></li>
			<li><a href="view_order.php">Orders</a></li>
		</ul>
	</li>	-->	

	
	<li><a href="logout.php">LogOut</a></li>	
	
	<!--<li><a href="#">TopUp</a></li>	
	<li><a href="#">Recharge</a></li>-->
	<!--<li><a href="#">E-Pin Login</a></li>
	<li><a href="#">E-Wallet Login</a></li>	-->	
	
</ul>
