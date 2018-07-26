<?php include 'setup.php';?>
<?php
/*
$live = "http://172.20.1.42/EmailSign/";
*/
$live = "";
?>


<p style="font-family:Arial, Helvetica, sans-serif; -webkit-font-smoothing: antialiased;">

<span style="font-size: 12pt; font-weight: bold; line-height: 11pt; color:black; text-decoration: none; "><?php echo $_POST["name"]; ?></span> <br/>
<span style="font-size: 8pt; font-weight: bold; line-height: 11pt; color:black; text-decoration: none;"><?php echo $_POST["jobtitle"]; ?></span><br/>
<?php if ($companyname != "Shiseido Group") { echo "<span style='font-size: 8pt; font-weight: bold; line-height: 11pt; color:black; text-decoration: none;'>". $companyname . "</span> <br/>"; }?>
<br/>

<table style="border-spacing: 0">
			<td style="padding:0 0 0 0;" colspan="2">
				<?php if ($_POST["brand"] == "shiseidogroup")
				{
				echo "
					<span style='font-size: 8pt; line-height: 11pt; color:black; text-decoration: none;'>SHISEIDO HONG KONG LIMITED</span><br/>";

				} ?>
				<span style="font-size: 8pt; line-height: 11pt; color:black; text-decoration: none;">17th Floor, One Kowloon,</span><br/>
				<span style="font-size: 8pt; line-height: 11pt; color:black; text-decoration: none;">1 Wang Yuen Street</span><br/>
				<span style="font-size: 8pt; line-height: 11pt; color:black; text-decoration: none;">Kowloon Bay, Hong Kong</span><br/>
			</td>
		</tr>
		<tr>
			<td style="padding:0 10px 0 0;"> <span style="font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;">T:</span></td>
			<td style="padding:0 0 0 0;"> <span style="font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;"><a style="color:black; text-decoration: none;" href='tel:<?php echo $_POST["telephone"]; ?>'><?php echo $_POST["telephone"]; ?></a></span></td>
		</tr>
		<?php if ($_POST["mobile"] != "")
		{
			echo "<tr>
							<td style='padding:0 10px 0 0;'> <span style='font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;'> M: </span></td>
							<td style='padding:0 0 0 0;'> <span style='font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;'>
							<a style='color:black; text-decoration: none;' href='tel:" . $_POST["mobile"] . "'>" . $_POST["mobile"] . "</a></span><br/></td></tr>";
		}
		?>

		<?php if ($_POST["fax"] != "")
		{
			echo "<tr>
							<td style='padding:0 10px 0 0;'> <span style='font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;'> F: </span></td>
							<td style='padding:0 0 0 0;'> <span style='font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;'>
							<a style='color:black; text-decoration: none;' href='tel:" . $_POST["fax"] . "'>" . $_POST["fax"] . "</a></span><br/></td></tr>";
		}
		?>


		<tr>
			<td style="padding:0 10px 0 0;"> <span style="font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;">E: </span></td>
			<td style="padding:0 0 0 0;"> <span style="font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;"><a style="color:black; text-decoration: none;" href="mailto: <?php echo $_POST['email']; ?> ">
				<?php echo $_POST['email']; ?></a></td>
		</tr>


		<?php if ($website != "")
		{
		echo 	'<tr>';
		echo '<td style="padding:0 10px 0 0;"> <span style="font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;">W: </span></td>';
		echo '	<td style="padding:0 0 0 0;"> <span style="font-size: 8pt; line-height: 10pt; color:black; text-decoration: none;"><a style="color:black; text-decoration: none;" href="http://';
		echo $website;
		echo '">';
		echo $website;
		echo '</a></td></tr>';
	} ?>

</table>

<!---External Links----->
<?php
if ($_POST["brand"] == "cpc1")
{
	echo
		"<table>
			<tr>
					<td style='padding: 10px 0 0 0;' colspan='9'><hr></td>
			</tr>
			<tr>
	        <td style='padding: 0 0 0 0;'><a href='https://www.facebook.com/finohongkong'><img src='brand/fino.png'></a></td>
	        <td style='padding: 0 8px 0 0;'><a href='https://www.facebook.com/macheriehk/'><img src='brand/macherie.png'></a></td>
	        <td style='padding: 0 0 0 0;'><a href='http://www.senka.com.hk'><img src='brand/senka.png'></a></td>
	        <td style='padding: 0 0 0 0;'><a href='http://www.tsubaki.com.hk'><img src='brand/tsubaki.png'></a></td>
	    </tr>
		</table>
		<table>
    <tr>

        <td style='padding:0 54px 0 0;'><a href='http://www.facebook.com/finohongkong'><img src='social/22w/22facebook.png'></a></td>

        <td style='padding:0 10px 0 0;'><a href='http://www.facebook.com/macheriehk'><img src='social/22w/22facebook.png'></td>
        <td style='padding:0 10px 0 0;'><a href='http://www.instagram.com/macheriehk'><img src='social/22w/22ig.png'></td>
        <td style='padding:0 27px 0 0;'><a href='http://www.youtube.com/channel/UC5vBNsf0elH1NUTPcCWgCGA'><img src='social/22w/22youtube.png'></td>

        <td style='padding:0 10px 0 0;'><a href='http://www.facebook.com/SenkaHK'><img src='social/22w/22facebook.png'></td>
        <td style='padding:0 23px 0 0;'><a href='http://www.youtube.com/channel/UC4g-jH2vl7FmBZa066KhX1w'><img src='social/22w/22youtube.png'></td>

        <td style='padding:0 10px 0 0;'><a href='http://www.facebook.com/TsubakiHongKong'><img src='social/22w/22facebook.png'></td>
				<td style='padding:0 10px 0 0;'><a href='http://www.instagram.com/tsubakihk'><img src='social/22w/22ig.png'></td>
        <td style='padding:0 27px 0 0;'><a href='http://www.youtube.com/user/hktsubaki'><img src='social/22w/22youtube.png'></td>
    </tr>
</table>";
}
elseif ($_POST["brand"] == "cpc2")
	{
		echo "
		<table >
			<tr>
					<td style='padding: 10px 0 0 0;' colspan='9'><hr></td>
			</tr>

			<tr>
				<td><a href='http://www.anessa.com.hk'><img src='brand/cpc2/anessacpc2.png'> </a></td>
				<td><a href='https://www.facebook.com/ettusaisHongKong/'><img src='brand/cpc2/ettusaicpc2.png'> </td>
				<td><a href='https://www.facebook.com/finohongkong'><img src='brand/cpc2/finocpc2.png'></td>
				<td><a href='https://www.facebook.com/macheriehk/'><img src='brand/cpc2/macheriecpc2.png'></td>
			</tr>
		</table>
		<table>
			<tr>
				<td><a href='http://www.majolica-majorca.com/hk'><img src='brand/cpc2/mmcpc2.png'> </a></td>
				<td><a href='http://www.senka.com.hk'><img src='brand/cpc2/senkacpc2.png'> </a></td>
				<td><a href='http://www.tsubaki.com.hk'><img src='brand/cpc2/tsubakicpc2.png'> </a></td>
				<td><a href='http://www.za-cosmetics.com'><img src='brand/cpc2/zacpc2.png'> </a></td>
			</tr>
		</table>";
	}
		elseif ($_POST["brand"] == "sfd")
			{
				echo "
				<table >
					<tr>
							<td style='padding: 10px 0 0 0;' colspan='9'><hr></td>
					</tr>

					<tr>
						<td><a href='https://www.thelightofnow.com/en/'><img src='brand/sfd/eliesaabsfd.png'> </a></td>
						<td><a href='https://www.isseymiyakeparfums.com/'><img src='brand/sfd/isseymiyakesfd.png'></td>
						<td><a href='http://narcisorodriguez.com/fragrance/'><img src='brand/sfd/narcisorodriguez.png'></td>
					</tr>
				</table>
				<table>
					<tr>
						<td><a href='http://www.zadig-et-voltaire.com/eu/en/fragrance-eshop/fragrances-see-everything.html'><img src='brand/sfd/zandvsfd.png'> </a></td>
						<td><a href='https://en.sergelutens.com/all-about-serge-lutens.html'><img src='brand/sfd/sergelutenssfd.png'> </a></td>
					</tr>
				</table>";
		}
	else {
		if ($website != "") {echo "<br/><a style='color:black; text-decoration: none;' href='http://" . $website .  "'><img style='image-rendering: auto;'  src='brand/" . $logo . "'></a>";}
		else{ {echo "<br/><img style='image-rendering: auto;'  src='brand/" . $logo . "'>";}}
		echo "<table>
			<tbody>
				<tr>";
					if ($facebook != "") {echo '<td width="35" > <a href="http://www.facebook.com/', $facebook, '"><img style="image-rendering: auto; " src="social/22w/22facebook.png"> </a> </td>';}
					if ($instagram != "") {echo '<td width="35" > <a href="http://www.instagram.com/', $instagram, '"><img style="image-rendering: auto; " src="social/22w/22ig.png"> </a> </td>';}
					if ($youtube != "") {echo '<td width="35" > <a href="http://www.youtube.com/', $youtube, '"><img style="image-rendering: auto; " src="social/22w/22youtube.png"> </a> </td>';}
					if ($weibo != "") {echo '<td width="35" > <a href="http://www.weibo.com/', $weibo, '"><img style="image-rendering: auto; " src="social/22w/22sina.png"> </a> </td>';}
					if ($wechat != "") {echo '<td width="35" > <a href="https://mp.weixin.qq.com/s/', $wechat, '"><img style="image-rendering: auto; " src="social/22w/22wechat.png"> </a> </td>';}
					if ($twitter != "") {echo '<td width="35" > <a href="http://www.twitter.com/', $twitter, '"><img style="image-rendering: auto; " src="social/22w/22twitter.png"> </a> </td>';}
					if ($googleplus != "") {echo '<td width="35" > <a href="https://plus.google.com/', $googleplus, '"><img style="image-rendering: auto; " src="social/22w/22gplus.png"> </a> </td>';}
					if ($pinterest != "") {echo '<td width="35" > <a href="https://www.pinterest.com/', $pinterest, '"><img style="image-rendering: auto; " src="social/22w/22pinterest.png"> </a> </td>';}


				echo "</tr>
			</tbody>
		</table>";
}

?>
</p>
