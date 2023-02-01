<?php require_once 'inc/header.php'; ?>

<?php if(isset($_GET['home'])) {?>

<div id="appCapsule">
   
        <div class="section wallet-card-section pt-1">
					<div style="position: relative;z-index: 1;">
                       <h2 class="text-title">Genealogy  </h3>
					   
						<div class="listed-detail mt-3">
							<div class="icon-wrapper">
								<div class="iconbox">
									  <i class="fa fa-tree"></i> 
								</div>
							</div>
						 </div>                             
                   </div>
				   
				   
             <div style="padding: 0;">
                
			 <div class="row mt-2">
               
				<div class="col-6">
                    <div class="stat-box text-center">
                      <a href="team.php?team&teamid=<?php echo $Usernameid?>">
                        <div class="value text-success">  <i class="fa fa-sitemap"></i> </div>
						<div>Team <br />Tree</div>
					  </a>
					</div>
                </div>
				 
                <div class="col-6">
                   <div class="stat-box text-center">
                    <a href="team.php?SponsorList">
                        <div class="value text-success">  
							<i class="fa fa-users"></i> </div>
						<div>Sponsor <br />List</div>
					</a>
					</div>
                </div>
				
            </div>
	    </div>         	 
    </div> 
</div> 

<?php } ?>



<?php if(isset($_GET['team'])) {?>



 <div id="appCapsule">
   
        <div class="section wallet-card-section pt-1">
					<div style="
							position: relative;
							z-index: 1;
						">
                       <h2 class="text-title">Tree View</h3>
                             
                   </div>
			
					

				   
<div class="wallet-card card" style="padding: 0;">
             
	<div class="transactions">
                          
<style class="cp-pen-styles">
 
.tree ul {
  position: relative;
  padding: 1em 0;
  white-space: nowrap;
  margin: 0 auto;
  text-align: center;
}
.tree ul::after {
  content: '';
  display: table;
  clear: both;
}

.tree li {
  display: inline-block;
  vertical-align: top;
  text-align: center;
  list-style-type: none;
  position: relative;
  padding: 1em .5em 0 .5em;
}
.tree li::before, .tree li::after {
  content: '';
  position: absolute;
  top: 0;
  right: 50%;
  border-top: 1px solid #1b8e87;
  width: 52%;
  height: 1em;
}
.tree li::after {
  right: auto;
  left: 50%;
  border-left: 1px solid #1b8e87;
}
.tree li:only-child::after, .tree li:only-child::before {
  display: none;
}
.tree li:only-child {
  padding-top: 0;
}
.tree li:first-child::before, .tree li:last-child::after {
  border: 0 none;
}
.tree li:last-child::before {
  border-right: 1px solid #1b8e87;
  border-radius: 0 5px 0 0;
}
.tree li:first-child::after {
  border-radius: 5px 0 0 0;
}

.tree ul ul::before {
  content: '';
  position: absolute;
  top: 0;
  left: 50%;
  border-left: 1px solid #1b8e87;
  width: 0;
  height: 1em;
}

.tree li a {
   padding: .5em .75em;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
  color: #333;
  position: relative;
  top: 1px;
      border: 1px solid #cacaca;
    font-size: 14px;
 }

.tree li a:hover,
.tree li a:hover + ul li a {
  background: #e9453f;
  color: #fff;
  border: 1px solid #e9453f;
}

.tree li a:hover + ul li::after,
.tree li a:hover + ul li::before,
.tree li a:hover + ul::before,
.tree li a:hover + ul ul::before {
  border-color: #e9453f;
}
</style>
	
<div class="tree" style="overflow: auto;height:450px">
			
		<?php           $teamleaderid = $_GET['teamid'];                        
                        $teamsql = "SELECT * FROM users WHERE Username='$teamleaderid' AND UserActivation='1' ";
                        $teamquery = mysqli_query($conn,$teamsql);
                        $teamRuselt = mysqli_fetch_array($teamquery); ?>
	
						<ul>
                                <li style="padding: 0;">
                                    <div style="
                                            background-color: #fff7c1;
                                            padding: 15px;
                                            text-align: center;
                                         ">  


                                         <img src="assets/img/ico-1.png" style="width: 70px;"/><br/>
                                    	<strong> <?php echo $userid=$teamRuselt['Username']; ?> </strong>
											<br >
											<button onclick="insert(<?php echo "'inc/teamajax.php?id=".$userid."'" ?>)" data-id='537' class='userinfo2 btn btn-success btn-raised btn-xs'>View Info</button>
                                         </div>
                                    <ul>

                                    <?php
                                        $leader = $teamRuselt['Username'];                        
                                        $leadersql = "SELECT * FROM team WHERE teamleader='$leader'";
                                        $leaderquery = mysqli_query($conn,$leadersql);
                                        $Teamabc = mysqli_fetch_array($leaderquery);
                                     ?>


                                    <li>
                                    	Team A
                           			 	<div class="box_design">
                           			 <?php if($Teamabc['TeamA']!=NULL){ ?>
                           			 	<a href="team.php?team&teamid=<?php echo $Teamabc['TeamA']; ?>">
										<img src="assets/img/ico-1.png" style="width: 70px;" /><br/>
                            			<strong> <?php echo $userida=$Teamabc['TeamA']; ?></strong></a>
										<br /><button onclick="insert(<?php echo "'inc/teamajax.php?id=".$userida."'" ?>)" data-id="572" class="userinfo2 btn btn-success btn-raised btn-xs">View Info</button>
									<?php }else{?>
										<a href="index.php">
										<img src="assets/img/minus.png" style="width: 70px;" /><br/>
                            			 Add New</a>
									<?php } ?>
										</div>
                        		    </li>



                        		    <li>
                                    	Team B
                           			 	<div class="box_design">
                           			 <?php if($Teamabc['TeamB']!=NULL){ ?>
                           			 	<a href="team.php?team&teamid=<?php echo $Teamabc['TeamB']; ?>">
										<img src="assets/img/ico-1.png" style="width: 70px;" /><br/>
                            			<strong> <?php echo $useridb=$Teamabc['TeamB']; ?></strong></a>
										<br /><button onclick="insert(<?php echo "'inc/teamajax.php?id=".$useridb."'" ?>)" data-id="572" class="userinfo2 btn btn-success btn-raised btn-xs">View Info</button>
									<?php }else{?>
										<a href="index.php">
										<img src="assets/img/minus.png" style="width: 70px;" /><br/>
                            			 Add New</a>
									<?php } ?>
										</div>
                        		    </li>


                        		    <li>
                                    	Team C
                           			 	<div class="box_design">
                           			 <?php if($Teamabc['TeamC']!=NULL){ ?>
                           			 	<a href="team.php?team&teamid=<?php echo $Teamabc['TeamC']; ?>">
										<img src="assets/img/ico-1.png" style="width: 70px;" /><br/>
                            			<strong> <?php echo $useridc=$Teamabc['TeamC']; ?></strong></a>
										<br /><button onclick="insert(<?php echo "'inc/teamajax.php?id=".$useridc."'" ?>)" data-id="572" class="userinfo2 btn btn-success btn-raised btn-xs">View Info</button>
									<?php }else{?>
										<a href="index.php">
										<img src="assets/img/minus.png" style="width: 70px;" /><br/>
                            			 Add New</a>
									<?php } ?>
										</div>
                        		    </li>

                                        
                                    </ul>    
                                </li>
                            </ul>	
	
	
					</div>    
				
            </div>
				
				
            </div>
			
        </div>
 
    </div>


<!-- popup -->
<script type="text/javascript">

 
function insert(url) {
    $.ajax({
        url: url,
        method: "POST",
        success: function(data) {
            $("#employee_detail2").html(data);
            $("#dataModal2").modal("show");
        },
    });
}

</script>


<div id="dataModal2" class="modal fade" >
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" id="employee_detail2"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default bg-denger" data-dismiss="modal">Close</button>
            </div>
        </div>
 </div>


<?php } ?>



<?php if(isset($_GET['SponsorList'])) {?>

<div id="appCapsule">
   
        <div class="section wallet-card-section pt-1">
					<div style="position: relative;z-index: 1;">
                       <h2 class="text-title">Sponsor List</h2>
                             
                   </div>
				   
				   
             <div class="wallet-card card" style="padding: 0;">
             
				<div class="transactions">
				
				<div id="pageData">  
			 
			<?php 
				$Userid=$_SESSION['user'];
				$sql = "SELECT * FROM users WHERE SponsorName='$Userid'";
				$query = mysqli_query($conn, $sql);


				foreach ($query as $Ruselt) {?>
				
					<a class="item">
                    <div class="detail">
                         <div>
                            <strong><?php echo $Ruselt['Username']; ?><br>(<?php echo $Ruselt['FullName']; ?>)</strong><!-- Package 01(20$)<h6 class="text-success"> Activated</h6> -->
                        </div>
                    </div>					
						<div class="right">
							 <?php DateTime('M d, Y',$Ruselt['joindate']) ?>
						</div>
					</a>

				<?php }?>
					
					
						 
                           
					
					
					
						 
                                          
 
</div> 
           
            <div class="box-footer clearfix">
             <span class="flash" style="display: none;">Loading <img src="assets/img/loading-icon-red.gif" width="80px"></span>  
            </div>
			
			
                
			  <!-- item -->
                
                
				
            </div>
				
				
            </div>
         	 
        </div>
 
    </div>




<?php } ?>









 <?php require_once 'inc/footer.php'; ?>
