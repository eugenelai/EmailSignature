<?php include 'setup.php';?>
<?php $version = '/gif';?>
<?php $filetype = '.gif';?>
<?php $url = 'http://app.shiseido.com.hk/';?>
<!--http://app.shiseido.com.hk/   -->
<table style="border-spacing: 0"  cellpadding='0' cellspacing='0'>
	<tr><td>
<!-- Name, title, position start-->
									<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none; "><strong><?php echo $_POST["name"]; ?></strong> |
									<?php echo $_POST["jobtitle"]; ?>
								</span> <br/>
									<?php
											if ($_POST["brand"] != "shiseidogroup")
											{
											echo "<span style='font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none;'>". $companyname . "</span><br/> ";
											}
									?>

<!-- Name, title, position end-->
<!-- Address, contact start-->
				<table style="border-spacing: 0"  cellpadding='0' cellspacing='0'>
				<?php if ($_POST["brand"] != "scm")
					{
						echo '
										<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;">Shiseido Hong Kong Limited</span><br/>
										<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;">17/F, One Kowloon, 1 Wang Yuen Street,</span><br/>
										<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;">Kowloon Bay, Hong Kong</span><br/>';
					}
					else
					{
							echo '	<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;">Shiseido Hong Kong Limited</span><br/>
											<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;">20-22/F, Tai Hing Cotton Mill Factory Building,</span><br/>
											<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;">3 Tsing Yeung Circuit,</span><br/>
											<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;">Tuen Mun, New Territories, Hong Kong</span><br/>';
					}
					?>
					<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;">T:<span style="padding-left:5px;"></span>
						<a style="font-family:Arial, Helvetica, sans-serif; color:#888888; text-decoration: none !important;" href='tel:+<?php echo $_POST["telephone"]; ?>'><?php echo $_POST["telephone"]; ?></a></span>

				<?php if ($_POST["mobile"] != "")
				{
					echo "<span style='font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;'> | M:<span style='padding-left:5px;'></span>
					<a style='font-family:Arial, Helvetica, sans-serif; color:#888888; text-decoration: none !important;' href='tel:" . $_POST["mobile"] . "'>" . $_POST["mobile"] . "</a></span>";
				}
				?>

				<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;"> | E:<span style="padding-left:5px;"></span>
				<a style="font-family:Arial, Helvetica, sans-serif; color:#888888; text-decoration: none !important;" href="mailto:<?php echo $_POST['email']; ?> ">
					<?php echo $_POST['email']; ?></a></span><br/>

			<?php if ($_POST["fax"] != "")
			{
				echo "
								<span style='font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 11pt; color:#888888; text-decoration: none !important;'> F:<span style='padding-left:4px;'></span>
								<a style='font-family:Arial, Helvetica, sans-serif; color:#888888; text-decoration: none !important;' href='tel:" . $_POST["fax"] . "'>" . $_POST["fax"] . "</a></span><br/>";
			}
			?>


		<?php if ($website != "")
		{
		echo '<span style="font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 12pt; color:#888888; text-decoration: none !important;"><a style="font-family:Arial, Helvetica, sans-serif; color:#888888; text-decoration: none !important;" href="http://';
		echo $website;
		echo '">';
		echo $website;
		echo '</a></span>';
	} ?>
<!-- Address, contact end-->
</td></tr>
<tr><td>

	<table style="border-spacing: 0"  cellpadding='0' cellspacing='0'>
		<tr><td>
				<?php
				if ($_POST["brand"] == "cpc1")
				{
					echo
						"<table cellpadding='0' cellspacing='0' width='360'>
							<tr>
									<td style='padding: 2px 0 0 0;' colspan='9'><hr></td>
							</tr>
							<tr>
					        <td style='padding: 0 0 0 0;' colspan='1'><a href='https://www.facebook.com/finohongkong'><img style='display: block; margin: 0; padding: 0;' border='0' width='69' height='38' src='". $url ."brand/". $version . "/cpc1/fino" . $filetype . "'></a></td>
					        <td style='padding: 0 8px 0 0;' colspan='3'><a href='https://www.facebook.com/macheriehk/'><img style='display: block; margin: 0; padding: 0;' border='0' width='111' height='38' src='". $url ."brand". $version . "/cpc1/macherie" . $filetype . "'></a></td>
					        <td style='padding: 0 0 0 0;' colspan='2'><a href='http://www.senka.com.hk'><img style='display: block; margin: 0; padding: 0;' border='0' width='98' height='38' src='". $url ."brand". $version . "/cpc1/senka" . $filetype . "'></a></td>
					        <td style='padding: 0 0 0 0;' colspan='3'><a href='http://www.tsubaki.com.hk'><img style='display: block; margin: 0; padding: 0;' border='0' width='82' height='38' src='". $url ."brand". $version . "/cpc1/tsubaki" . $filetype . "'></a></td>
					    </tr>
				    	<tr>
				        <td style='padding:5px 54px 0 0;'><a href='http://www.facebook.com/finohongkong'><img style='display: block; margin: 0; padding: 0;' border='0' width='22' height='22' src='". $url ."social". $version . "/facebook" . $filetype . "'></a></td>

				        <td style='padding:5px 10px 0 7px;'><a href='http://www.facebook.com/macheriehk'><img style='display: block; margin: 0; padding: 0;' border='0' width='22' height='22' src='". $url ."social". $version . "/facebook" . $filetype . "'></td>
				        <td style='padding:5px 10px 0 0;'><a href='http://www.instagram.com/macheriehk'><img style='display: block; margin: 0; padding: 0;' border='0' width='22' height='22' src='". $url ."social". $version . "/ig" . $filetype . "'></td>
				        <td style='padding:5px 27px 0 0;'><a href='http://www.youtube.com/channel/UC5vBNsf0elH1NUTPcCWgCGA'><img style='display: block; margin: 0; padding: 0;' border='0' width='22' height='22' src='". $url ."social". $version . "/youtube" . $filetype . "'></td>

				        <td style='padding:5px 10px 0 13px;'><a href='http://www.facebook.com/SenkaHK'><img style='display: block; margin: 0; padding: 0;' border='0' width='22' height='22' src='". $url ."social". $version . "/facebook" . $filetype . "'></td>
				        <td style='padding:5px 24px 0 0;'><a href='http://www.youtube.com/channel/UC4g-jH2vl7FmBZa066KhX1w'><img  width='22' height='22' src='". $url ."social/". $version . "/youtube" . $filetype . "'></td>

				        <td style='padding:5px 10px 0 0;'><a href='http://www.facebook.com/TsubakiHongKong'><img style='display: block; margin: 0; padding: 0;' border='0' width='22' height='22' src='". $url ."social". $version . "/facebook" . $filetype . "'></td>
								<td style='padding:5px 10px 0 0;'><a href='http://www.instagram.com/tsubakihk'><img style='display: block; margin: 0; padding: 0;' border='0' width='22' height='22' src='". $url ."social". $version . "/ig" . $filetype . "'></td>
				        <td style='padding:5px 0 0 0;'><a href='http://www.youtube.com/user/hktsubaki'><img style='display: block; margin: 0; padding: 0;' border='0' width='22' height='22' src='". $url ."social". $version . "/youtube" . $filetype . "'></td>
				    </tr>
						</table><br/>";
				}
				elseif ($_POST["brand"] == "cpc2")
					{
						echo "
						<table cellpadding='0' cellspacing='0' width='360'>
							<tr>
									<td style='padding: 2px 0 0 0;' colspan='9'><hr></td>
							</tr>

							<tr>
								<td style='padding:0 15px 0 0;'><a href='http://www.anessa.com.hk'><img  style='display: block; margin: 0; padding: 0;' border='0' width='125' height='37' src='". $url ."brand". $version . "/cpc2/anessacpc2" . $filetype . "'> </a></td>
								<td><a href='https://www.facebook.com/ettusaisHongKong/'><img style='display: block; margin: 0; padding: 0;' border='0' width='97' height='37' src='". $url ."brand". $version . "/cpc2/ettusaicpc2" . $filetype . "'> </td>
								<td><a href='http://www.senka.com.hk'><img style='display: block; margin: 0; padding: 0;' border='0'  width='93' height='37' src='". $url ."brand". $version . "/cpc2/senkacpc2" . $filetype . "'> </a></td>
								<td><a href='http://www.za-cosmetics.com'><img style='display: block; margin: 0; padding: 0;' border='0' width='45' height='37' src='". $url ."brand". $version . "/cpc2/zacpc2" . $filetype . "'> </a></td>
							</tr>
						</table><br/>";
					}
						elseif ($_POST["brand"] == "sfd1")
							{
								echo "
								<table cellpadding='0' cellspacing='0' width='360'>
									<tr>
											<td style='padding: 5px 0 0 0;' colspan='9'><hr></td>
									</tr>

									<tr>
										<td><a href='https://www.isseymiyakeparfums.com/'><img  style='display: block; margin: 0; padding: 0;' border='0' width='125' height='42' src='". $url . "brand". $version . "/sfd1/isseymiyakesfd" . $filetype . "'></td>
										<td><a href='http://www.narcisorodriguezparfums.com/'><img style='display: block; margin: 0; padding: 0;' border='0'  width='159' height='42' src='". $url . "brand". $version . "/sfd1/narcisorodriguez" . $filetype . "'></td>
										<td><a href='https://en.sergelutens.com/all-about-serge-lutens.html'><img style='display: block; margin: 0; padding: 0;' border='0'  width='76' height='42' src='". $url . "brand". $version . "/sfd/sergelutenssfd" . $filetype . "'> </a></td>
									</tr>
								</table><br/>";
						}
						elseif ($_POST["brand"] == "sfd2")
							{
								echo "
								<table  cellpadding='0' cellspacing='0' width='360'>
									<tr>
											<td style='padding: 2px 0 0 0;' colspan='9'><hr></td>
									</tr>

									<tr>
										<td><a href='https://www.thelightofnow.com/en/'><img style='display: block; margin: 0; padding: 0;' border='0'  width='72' height='35' src='". $url . "brand". $version . "/sfd2/eliesaabsfd" . $filetype . "'> </a></td>
										<td><a href='https://www.isseymiyakeparfums.com/'><img style='display: block; margin: 0; padding: 0;' border='0'  width='108' height='35' src='". $url . "brand". $version . "/sfd2/isseymiyakesfd" . $filetype . "'></td>
										<td><a href='http://www.narcisorodriguezparfums.com/
										'><img  style='display: block; margin: 0; padding: 0;' border='0' width='127' height='35' src='". $url . "brand". $version . "/sfd2/narcisorodriguez" . $filetype . "'></td>
										<td><a href='https://en.sergelutens.com/all-about-serge-lutens.html'><img style='display: block; margin: 0; padding: 0;' border='0'  width='53' height='35' src='". $url . "brand". $version . "/sfd2/sergelutenssfd" . $filetype . "'> </a></td>
									</tr>
								</table><br/>" ;
						}
						elseif ($_POST["brand"] == "debug")
						{
							echo "
							<table style='border-spacing: 0'  cellpadding='0' cellspacing='0' width='360'>
									<tr>
											<td style='padding:15px 0 0 0;'> <span style='font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 10pt; color:#888888; text-decoration: none;'></span> </td>
									</tr>
									<tr>a
											<td style='padding:1px 0 0 0;'>";

											 echo "<span style=' font-size: 8pt; font-weight: bold; line-height: 11pt; color:black; text-decoration: none;'></span> <img style='display: block; margin: 0; padding: 0;' border='0' width='180'  src='". $url . "http://eugenelai.io/public/dandg.gif'>";

							echo				"</td>
									</tr>
							</table>
							</td></tr>
							<tr><td>";

							echo "<table cellpadding='0' cellspacing='0'>
								<tbody>
									<tr>";
										if ($facebook != "") {echo '<td width="35" > <a href="http://www.facebook.com/', $facebook, '"><img  style="display: block; margin: 0; padding: 0;" border="0" height="22" src="' . $url . 'social'. $version . '/facebook' . $filetype . '"> </a> </td>';}
										if ($instagram != "") {echo '<td width="35" > <a href="http://www.instagram.com/', $instagram, '"><img  style="display: block; margin: 0; padding: 0;" border="0" height="22" src="' . $url . 'social'. $version . '/ig' . $filetype . '"> </a> </td>';}
										if ($youtube != "") {echo '<td width="35" > <a href="http://www.youtube.com/', $youtube, '"><img  style="display: block; margin: 0; padding: 0;" border="0" height="22" src="' . $url . 'social'. $version . '/youtube' . $filetype . '"> </a> </td>';}
										if ($weibo != "") {echo '<td width="35" > <a href="http://www.weibo.com/', $weibo, '"><img  style="display: block; margin: 0; padding: 0;" border="0" height="22" src="' . $url . 'social'. $version . '/sina' . $filetype . '"> </a> </td>';}
										if ($wechat != "") {echo '<td width="35" > <a href="https://mp.weixin.qq.com/s/', $wechat, '"><img style="display: block; margin: 0; padding: 0;" border="0" height="22" src="' . $url . 'social'. $version . '/wechat' . $filetype . '"> </a> </td>';}
										if ($twitter != "") {echo '<td width="35" > <a href="http://www.twitter.com/', $twitter, '"><img  style="display: block; margin: 0; padding: 0;" border="0" height="22" src="' . $url . 'social'. $version . '/twitter' . $filetype . '"> </a> </td>';}
										if ($googleplus != "") {echo '<td width="35" > <a href="https://plus.google.com/', $googleplus, '"><img  style="display: block; margin: 0; padding: 0;" border="0" height="22" src="' . $url . 'social'. $version . '/gplus' . $filetype . '"> </a> </td>';}
										if ($pinterest != "") {echo '<td width="35" > <a href="https://www.pinterest.com/', $pinterest, '"><img  style="display: block; margin: 0; padding: 0;" border="0" height="22" src="' . $url . 'social'. $version . '/pinterest' . $filetype . '"> </a> </td>';}
									echo "</tr>
								</tbody>
							</table>";
					}
					else {
						echo "
						<table style='border-spacing: 0'  cellpadding='0' cellspacing='0' width='360'>
						    <tr>
						        <td style='padding:15px 0 0 0;'> <span style='font-family:Arial, Helvetica, sans-serif; font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;'></span> </td>
						    </tr>
						    <tr>
						        <td style='padding:1px 0 0 0;'>";
										if ($website != "") {echo "<a style='color:black; text-decoration: none;' href='http://" . $website .  "'><img style='display: block; margin: 0; padding: 0;' border='0' width='180' src='". $url . "brand". $version . "/" . $logo . $filetype . "'></a>";}
										else{ echo "<img style='display: block; margin: 0; padding: 0;' border='0' width='180' src='". $url . "brand". $version . "/" . $logo . $filetype . "'>";}
						echo				"</td>
						    </tr>
						</table>
</td></tr>
<tr><td>";

						echo "<table cellpadding='0' cellspacing='0'>
							<tbody>
								<tr>";
									if ($facebook != "") {echo '<td width="35" > <a href="http://www.facebook.com/', $facebook, '"><img  style="display: block; margin: 0; padding: 0;" border="0" width="22" src="' . $url . 'social' . $version . '/facebook' . $filetype . '"> </a> </td>';}
									if ($instagram != "") {echo '<td width="35" > <a href="http://www.instagram.com/', $instagram, '"><img  style="display: block; margin: 0; padding: 0;" border="0" width="22" src="' . $url . 'social' . $version . '/ig' . $filetype . '"> </a> </td>';}
									if ($youtube != "") {echo '<td width="35" > <a href="http://www.youtube.com/', $youtube, '"><img  style="display: block; margin: 0; padding: 0;" border="0" width="22" src="' . $url . 'social' . $version . '/youtube' . $filetype . '"> </a> </td>';}
									if ($weibo != "") {echo '<td width="35" > <a href="http://www.weibo.com/', $weibo, '"><img  style="display: block; margin: 0; padding: 0;" border="0" width="22" src="' . $url . 'social' . $version . '/sina' . $filetype . '"> </a> </td>';}
									if ($wechat != "") {echo '<td width="35" > <a href="https://mp.weixin.qq.com/s/', $wechat, '"><img  style="display: block; margin: 0; padding: 0;" border="0" width="22" src="' . $url . 'social' . $version . '/wechat' . $filetype . '"> </a> </td>';}
									if ($twitter != "") {echo '<td width="35" > <a href="http://www.twitter.com/', $twitter, '"><img  style="image-rendering: auto; " width="22" src="' . $url . 'social' . $version . '/twitter' . $filetype . '"> </a> </td>';}
									if ($googleplus != "") {echo '<td width="35" > <a href="https://plus.google.com/', $googleplus, '"><img  style="display: block; margin: 0; padding: 0;" border="0" width="22" src="' . $url . 'social' . $version . '/gplus' . $filetype . '"> </a> </td>';}
									if ($pinterest != "") {echo '<td width="35" > <a href="https://www.pinterest.com/', $pinterest, '"><img  style="display: block; margin: 0; padding: 0;" border="0" width="22" src="' . $url . 'social' . $version . '/pinterest' . $filetype . '"> </a> </td>';}
								echo "</tr>
							</tbody>
						</table>";
				}
				?>
<!--- Logos and social media end----->
</td></tr>
</table>
