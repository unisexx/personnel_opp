<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
  // include adodb libraly
  include "../adodb5/adodb.inc.php";
  // adodb connect
  $db = &ADONewConnection('mysql');
  // $db->debug = true;
  $db->Connect('localhost', 'intranet_opp', 'intranet.opp.thai', 'intranet_opp'); //Connecting to your DBMS.
  $db->EXECUTE("set names 'utf8'");
?>

<style type="text/css">
table{width:700px;}
table th{background:#FF9900;color:#fff;padding:5px 0;}
table .header{background:#FFCC66;font-weight:bold;}
td{background:#FFFFCC;}
.left{float:left;}
.pblk{width:223px; float:left; text-align: center; padding:15px 0;}
</style>

<?php if($_GET['dep_id']):?>
	<table>
		<tr>
			<th colspan="3"><?php echo $_GET['dep_name'];?></th>
		</tr>
		<?php $departments = $db->GetAll('select * from departments where parent_id = '.$_GET['dep_id'].' order by dep_id desc');?>
		<?php foreach($departments as $department):?>
			<tr>
				<td class="header" colspan="3"><?php echo $department['departments']?></td>
			</tr>
			<?php $personals = $db->GetAll('select * from personal where dep_id = '.$department['dep_id'].' order by per_id desc');?>
			<?php foreach($personals as $key=>$personal):?>
				<tr>
					<td><?php echo $key+1?></td>
					<td><?php echo $personal['names']?></td>
					<td><?php echo $personal['email']?></td>
				</tr>
			<?php endforeach;?>
		<?php endforeach;?>
	</table>
	
	<br clear="all">
	<div align="center">
	<a href="index.php"><img src="http://www.opp.go.th/images/butt_back.jpg"></a>
	</div>
<?php else:?>
	<br clear="all">
	<img src="http://www.opp.go.th/images/h_management1_current.jpg" width="666" height="27"><br><br>
	<div>
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=11)'); //ผู้เชี่ยวชาญเฉพาะด้านเด็ก ?>
		<?php foreach($personnels as $personnel):?>
			<center>
				<div>
					<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="133" height="180" border="1"></div>
					<?php echo $personnel['names']?></strong><br>
				    <?php echo $personnel['position']?><br>
				    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
			    </div>
		    </center>
		<?php endforeach;?>
		<br clear="all">
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=2)'); //ผู้เชี่ยวชาญเฉพาะด้านเด็ก ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="133" height="180" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
	</div>
	
	<br clear="all">
	<img src="http://www.opp.go.th/images/h_management2_th.gif" width="666" height="27">
	<div>
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=218)'); //ผู้เชี่ยวชาญเฉพาะด้านเด็ก ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="133" height="180" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
		
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=228)'); //รักษาการในตำแหน่งผู้เชี่ยวชาญเฉพาะด้านเยาวชน ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="133" height="180" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
		
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=220)'); //ผู้เชี่ยวชาญเฉพาะด้านผู้สูงอายุ ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="133" height="180" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
	</div>
	
	<br clear="all">
	<img src="http://www.opp.go.th/images/h_management_th_dep_8-10-53.gif" width="666" height="27">
	<div>
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=3)'); //ผู้อำนวยการกองกลาง ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="113" height="151" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
		
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=4)'); //ผู้อำนวยการกองส่งเสริมและพัฒนาเครือข่าย ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="113" height="151" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
		
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=6)'); //ผู้อำนวยการกองกลาง ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="113" height="151" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
		
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=7)'); //ผู้อำนวยการกองกลาง ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="113" height="151" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
		
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=8)'); //ผู้อำนวยการกองกลาง ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="113" height="151" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
		
		<?php $personnels = $db->GetAll('select a.per_id,a.names,a.email,a.pathfile,b.position from personal a,position b where (a.pos_id=b.pos_id)and(a.pos_id=9)'); //ผู้อำนวยการกองกลาง ?>
		<?php foreach($personnels as $personnel):?>
			<div class="pblk">
				<div><img src="../src/personal/<?php echo $personnel['pathfile']?>" width="113" height="151" border="1"></div>
				<?php echo $personnel['names']?></strong><br>
			    <?php echo $personnel['position']?><br>
			    <a href="mailto:<?php echo $personnel['email']?>"><?php echo $personnel['email']?></a>
		    </div>
		<?php endforeach;?>
	</div>
	
	<br clear="all">
	<img src="http://www.opp.go.th/images/h_management3.jpg" width="666" height="27">
	<ul>
		<li><a href="index.php?dep_id=1&dep_name=กลุ่มรายงานตรงต่อ ผอ.สท." target="_self">กลุ่มรายงานตรงต่อ ผอ.สท.</a></li>
		<li><a href="index.php?dep_id=2&dep_name=กองกลาง" target="_self">กองกลาง</a></li>
		<li><a href="index.php?dep_id=3&dep_name=กองส่งเสริมและพัฒนาเครือข่าย" target="_self">กองส่งเสริมและพัฒนาเครือข่าย</a></li>
		<li><a href="index.php?dep_id=4&dep_name=สำนักส่งเสริมและพิทักษ์เด็ก" target="_self">สำนักส่งเสริมและพิทักษ์เด็ก</a></li>
		<li><a href="index.php?dep_id=5&dep_name=สำนักส่งเสริมและพิทักษ์เยาวชน" target="_self">สำนักส่งเสริมและพิทักษ์เยาวชน</a></li>
		<li><a href="index.php?dep_id=6&dep_name=สำนักส่งเสริมและพิทักษ์ผู้ด้อยโอกาส" target="_self">สำนักส่งเสริมและพิทักษ์ผู้ด้อยโอกาส</a></li>
		<li><a href="index.php?dep_id=8&dep_name=สำนักส่งเสริมและพิทักษ์ผู้สูงอายุ" target="_self">สำนักส่งเสริมและพิทักษ์ผู้สูงอายุ</a></li>
	</ul>
<?php endif;?>
<img src="http://www.opp.go.th/images/bg_opp_info.gif">
