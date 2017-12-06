<?php require_once 'includes/initialize.php'; ?>
<?php require_once 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- What it tries to add as homepage app name -->
	<title>Journal Display Page</title>
	<!-- META -->
	<meta charset="utf-8">
	<!-- Enabling our application to be able to work mobiley -->
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Make the app title different from the web page title -->
	<meta name="apple-mobile-web-app-title" content="myReel">

	<!-- Disable auto phone number detection -->
	<meta name="format-detection" content="telephone=no"> 

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Add2Home Styling -->
	<link rel="stylesheet" href="css/css-add2home.css">
	<link rel="stylesheet" href="css/main.css">

	  	<!-- ICONS -->
  	<!-- iPad retina icon -->
  	<link href="graphics/souvinear_icon-152x152.png" sizes="152x152" rel="apple-touch-icon">
  	<!-- iPad retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-144x144.png" sizes="144x144" rel="apple-touch-icon">
  	<!-- iPad non-retina icon -->
  	<link href="graphics/souvinear_icon-76x76.png" sizes="76x76" rel="apple-touch-icon">
  	<!-- iPad non-retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-72x72.png" sizes="72x72" rel="apple-touch-icon">

  	<!-- iPhone 6 Plus icon -->
  	<link href="graphics/souvinear_icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
  	<!-- iPhone retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
  	<!-- iPhone non-retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-57x57.png" sizes="57x57" rel="apple-touch-icon">

	<!-- HACKS -->
	<!-- Prevent text size change on orientation change -->
	<style>
		html {
			-webkit-text-size-adjust: 100%;
		}
	</style>

</head>

<body>
	<!-- PAGE CONTENT -->

		<!-- Portrait View Start -->
		<div class="port_wrap">
            <div class="nav">
				<img id="arrow_tog" class="arrow" src="graphics/arrow.svg" alt="Arrow">
				<div class="nav_contain">
					<div onclick="jmp2LocalPage('')">
						<img src="graphics/hotspot-purple.svg" alt="Hotspot Icon">
						<h3>Hotspots</h3>
					</div>
					<div onclick="jmp2LocalPage('')">
						<img src="graphics/journal-purple.svg" alt="Journal Icon">
						<h3>Journal</h3>
					</div>
					<div onclick="jmp2LocalPage('')">
						<img src="graphics/mailbox-purple.svg" alt="Swapbox Icon">
						<h3>Swapbox</h3>
					</div>
					<div onclick="jmp2LocalPage('')">
						<img src="graphics/settings-purple.svg" alt="Settings Icon">
						<h3>Settings</h3>
					</div>
				</div>

				<svg  id="nav_button" class="pull_down" xmlns="http://www.w3.org/2000/svg" viewBox="2038 -979 377 648.328">
                
				    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="0.977" gradientUnits="objectBoundingBox">
				      <stop offset="0" stop-color="#fe5893"/>
				      <stop offset="0.27" stop-color="#d3729f"/>
				      <stop offset="0.553" stop-color="#b59eb8"/>
				      <stop offset="0.712" stop-color="#9dc1cc"/>
				      <stop offset="1" stop-color="#24d9ce"/>
				    </linearGradient>
				    <linearGradient id="linear-gradient-2" x1="0.5" y1="0.259" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
				      <stop offset="0" stop-color="#24d9ce"/>
				      <stop offset="1" stop-color="#33d9d0"/>
				    </linearGradient>
				    <linearGradient id="linear-gradient-3" y1="0.539" x2="0.94" y2="0.539" gradientUnits="objectBoundingBox">
				      <stop offset="0" stop-color="#fff" stop-opacity="0.545"/>
				      <stop offset="1" stop-color="#fff" stop-opacity="0.749"/>
				    </linearGradient>
				  <g id="Group_493" data-name="Group 493" transform="translate(2039 -969)">
				    <g id="Group" transform="translate(-140 -10)">
				      <g id="Group-Copy" transform="translate(141)">
				        <path id="Rectangle-12-Copy" class="cls-1_1" d="M0,0H375l-.889,573.718h-375Z"/>
				      </g>
				    </g>
				    <g id="Group_492" data-name="Group 492" transform="translate(-141 -10)">
				      <path id="Rectangle-5-Copy-2" class="cls-2_2" d="M376-1.957V-75.624H1v59.459c18.589-1.163,38-10.4,82.259-14.283A468.5,468.5,0,0,1,251.1-14.6C290.315-3.54,363.268,1.613,376-1.957Z" transform="translate(140 649)"/>
				      <path id="Rectangle-4" class="cls-3_3" d="M376-14.705c-20.245,3.472-51.254,3.672-80.908,0C222.571-23.684,217.625-31.8,187.5-37.06,120.923-48.7,84.61-39.793,49.154-42.54,25.516-44.37,8.465-46.357,0-51.5Q0-22.652,0-16.152C20.422-17.543,32.471-23.381,52.5-26.5s62.545-6.978,89.567-5.393c22.213,1.3,43.778,2.088,90.956,12.7,20.208,4.544,46.344,13.037,98.266,17.321q29.134,2.4,44.711,0Z" transform="translate(140 649)"/>
				    </g>
				  </g>
				</svg>
			</div>
<!--
			<div class="nav">
				<img src="graphics/nav.png" alt="Nav">
                <form action='php/logout_processing.php' method='post'>
    <input type='submit' name='submit' value='Log Out'>
    </form>
			</div>
-->
			<div class="upcoming">
				<h2>Upcoming Events</h2>
				<div class="upcoming_events">
					<h4>You don't have any upcoming events!</h4>
					<img src="graphics/icon_venue.svg" alt="Venue Icon">
				</div>
			</div>

            <div class="plus_button" onclick="jmp2LocalPage('add_concert.php')">
				<img src="graphics/add-button.svg" alt="Plus Button">
			</div>
            

			<div class="my_journal">
				<h2>My Entries</h2>
                
            <?php
    
            $user_id = $_SESSION['user'];
    
            $query = 'SELECT * ';
            $query .= 'FROM concert_info WHERE';
            $query .= " user_id = '{$user_id}'";
            $query .= "ORDER BY concert_date ASC";
            $result = mysqli_query($connection, $query);
 
            if (!$result) {
              die('Database query failed.');
            }

//            $row = mysqli_fetch_row($result);
            
            while ($concert_info = mysqli_fetch_assoc($result)) { 
          ?>
				<div>
					<div class="flex" id="entry_flex">
                       
                    <div>
                    <form action="edit_concert.php" method="post" id="edit_entry">
                        <p>
                          <input type="text" name="headliner" id="headliner" value="<?php echo $concert_info['headliner']; ?>" class="uneeded">
                          </p>   
                        <p>
                          <input type="date" name="concert_date" id="concert_date" value="<?php echo $concert_info['concert_date']; ?>" class="uneeded">
                        </p>                 

                        <input type="submit" name="submit" id="concert_edit" value="Edit">
                    </form>
                    </div>
                        
                        <div class="concert_info">
						<h6><?php echo $concert_info['headliner']; ?></h6>
						<h6><?php echo $concert_info['concert_date']; ?></h6>
						<h6><?php echo $concert_info['venue']; ?></h6>
                        </div>
                        
                        <div>
                        <form action="journal_complete.php" method="post">
                        <button type="submit" name="submit">
                            <p>
                          <input type="text" name="headliner" id="headliner" value="<?php echo $concert_info['headliner']; ?>" class="uneeded">
                          </p>   
                        <p>
                          <input type="date" name="concert_date" id="concert_date" value="<?php echo $concert_info['concert_date']; ?>" class="uneeded">
                        </p>                 

					   <img class="legend" src="graphics/legend.jpeg" alt="John Legend">
                            </button>
                            </form>
                    </div>
            
				</div>
                
                        <?php
                        
          } 
        
        mysqli_free_result($result);
        ?>
        

			</div>
		</div>
		<!-- Portrait View End  -->


		<!-- Landscape View Start -->
		<div class="land_wrap">

		</div>

		<!-- Landscape View End -->


	<!-- JAVASCRIPT-->
	<!-- JS to change config variables -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	    // Customize config variable BEFORE loading addToHome.js file this is how to change the parameters 
	    var addToHomeConfig = {
	      touchIcon: true
	    }
	</script>
	<script src="js/js-add2home.js"></script>
	<script src="js/main.js"></script>
</body>

</html>