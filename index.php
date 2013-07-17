<!DOCTYPE HTML>
<html lang=en>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mario Tennis Equipment Calculator</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>

<Shoes>
<div id="wrapper">
    <img src="logo.png" style="float: left; margin-right: 20px;" /><h1>Compare Equipment</h1><br>
<br>

    <p>WARNING: may contain spoilers if you have not unlocked all secrets! <!--To see calculations to determine the best stat combinationsgo <!--a href="totals.php">here</a> (it's heavy on JavaScript so beware if you're on a slow device)--></p>
    <div id="set1_stats" class="statbox">
        <form id="set1_build">
            <fieldset>
                <label for="Racket1">Racket</label>
                <select name="Racket1" id="Racket1">
                	
                	<option value="basic">Standard Mii Racket</option><option value="babypeach">Baby Peach Racket</option>
                    <option value="babymario">Baby Mario Racket</option>
                	<option value="banana">Banana Racket</option>
                    <option value="bee">Bee Racket</option>
                    <option value="birdo">Birdo Racket</option>
                    <option value="blooper">Blooper Racket</option>
                    <option value="bobomb">Bob-omb Racket</option>
                    <option value="boo">Boo Racket</option>
                    <option value="bowser">Bowser Racket</option>
                    <option value="bowserjr">Bowser Jr. Racket</option>
                    <option value="bill">Bullet Bill Racket</option>
                    <option value="cheepcheep">Cheep Cheep Racket</option>
                    <option value="chomp">Chain Chomp Racket</option>
                    <option value="cloud">Cloud Racket</option>
                    <option value="daisy">Daisy Racket</option>
                    <option value="dk">Donkey Kong Racket</option>
                    <option value="diddy">Diddy Kong Racket</option>
                    <option value="drybowser">Dry Bowser Racket</option>
                    <option value="fireflower">Fire Flower Racket</option>
                    <option value="firemario">Fire Mario Racket</option>
                    <option value="goomba">Goomba Racket</option>
                    <option value="greenshell">Green Shell Racket</option>
                    <option value="hammer">Hammer Bros. Racket</option>
                    <option value="ice">Ice Flower Racket</option>
                    <option value="koopa">Koopa Troopa Racket</option>
                    <option value="lakitu">Lakitu Racket</option>
                    <option value="lightning">Lightning Racket</option>
                    <option value="luigi">Luigi Racket</option>
                    <option value="luma">Luma Racket</option>
                    <option value="magikoopa">Magikoopa Racket</option>
                    <option value="mario">Mario Racket</option>
                    <option value="metalmario">Metal Mario Racket</option>
                    <option value="peach">Peach Racket</option>
                    <option value="petey">Petey Pirahna Racket</option>
                    <option value="pow">POW Block Racket</option>
                    <option value="propeller">Propeller Racket</option>
                    <option value="question">Question Block Racket</option>
                    <option value="redshell">Red Shell Racket</option>
                    <option value="mushroom">Super Mushroom Racket</option>
                    <option value="shyguy">Shy Guy Racket</option>
                    <option value="superstar">Super Star Racket</option>
                    <option value="thwomp">Thwomp Racket</option>
                    <option value="tanooki">Tanooki Racket</option>
                    <option value="waluigi">Waluigi Racket</option>
                    <option value="wario">Wario Racket</option>
                    <option value="wiggler">Wiggler Racket</option>
                    <option value="yoshi">Yoshi Racket</option>
                </select><br />
        
                <label for="Shoes1">Shoes</label>
                <select name="Shoes1" id="Shoes1">
                
                    <option value="basic">Standard Mii Shoes</option><option value="banana">Banana Shoes</option>
                    <option value="blackyoshi">Black Yoshi Shoes</option>
                    <option value="blooper">Blooper Shoes</option>
                    <option value="blueyoshi">Blue Yoshi Shoes</option>
                    <option value="bobomb">Bob-omb Shoes</option>
                    <option value="boo">Boo Shoes</option>
                    <option value="bowser">Bowser Shoes</option>
                    <option value="bowserjr">Bowser Jr. Shoes</option>
                    <option value="bill">Bullet Bill Shoes</option>
                    <option value="cheepcheep">Cheep Cheep Shoes</option>
                    <option value="chomp">Chain Chomp Shoes</option>
                    <option value="daisy">Daisy Shoes</option>
                    <option value="dk">Donkey Kong Shoes</option>
                    <option value="diddy">Diddy Kong Shoes</option>
                    <option value="drybowser">Dry Bowser Shoes</option>
                    <option value="fireflower">Fire Flower Shoes</option>
                    <option value="greenshell">Green Shell Shoes</option>
                    <option value="hammer">Hammer Bros. Shoes</option>
                    <option value="ice">Ice Flower Shoes</option>
                    <option value="lakitu">Lakitu Shoes</option>
                    <option value="lblueyoshi">Light Blue Yoshi Shoes</option>
                    <option value="lightning">Lightning Shoes</option>
                    <option value="luigi">Luigi Shoes</option>
                    <option value="luma">Luma Shoes</option>
                    <option value="magikoopa">Magikoopa Shoes</option>
                    <option value="mario">Mario Shoes</option>
                    <option value="peach">Peach Shoes</option>
                    <option value="pinkyoshi">Pink Yoshi Shoes</option>
                    <option value="pow">POW Block Shoes</option>
                    <option value="question">Question Block Shoes</option>
                    <option value="redshell">Red Shell Shoes</option>
                    <option value="redyoshi">Red Yoshi Shoes</option>
                    <option value="mushroom">Super Mushroom Shoes</option>
                    <option value="superstar">Super Star Shoes</option>
                    <option value="thwomp">Thwomp Shoes</option>
                    <option value="waluigi">Waluigi Shoes</option>
                    <option value="wario">Wario Shoes</option>
                    <option value="whiteyoshi">White Yoshi Shoes</option>
                    <option value="yellowyoshi">Yellow Yoshi Shoes</option>
                    <option value="yoshi">Yoshi Shoes</option>
                </select><br />
        
                <label for="Uniform1">Uniform</label>
                <select name="Uniform1" id="Uniform1">
                
                     <option value="basic">Standard Mii Uniform</option><option value="banana">Banana Uniform</option>
                    <option value="blackyoshi">Black Yoshi Uniform</option>
                    <option value="blooper">Blooper Uniform</option>
                    <option value="blueyoshi">Blue Yoshi Uniform</option>
                    <option value="bobomb">Bob-omb Uniform</option>
                    <option value="boo">Boo Uniform</option>
                    <option value="bowser">Bowser Uniform</option>
                    <option value="bowserjr">Bowser Jr. Uniform</option>
                    <option value="bill">Bullet Bill Uniform</option>
                    <option value="cheepcheep">Cheep Cheep Uniform</option>
                    <option value="chomp">Chain Chomp Uniform</option>
                    <option value="daisy">Daisy Uniform</option>
                    <option value="dk">Donkey Kong Uniform</option>
                    <option value="diddy">Diddy Kong Uniform</option>
                    <option value="drybowser">Dry Bowser Uniform</option>
                    <option value="fireflower">Fire Flower Uniform</option>
                    <option value="greenshell">Green Shell Uniform</option>
                    <option value="hammer">Hammer Bros. Uniform</option>
                    <option value="ice">Ice Flower Uniform</option>
                    <option value="lakitu">Lakitu Uniform</option>
                    <option value="lblueyoshi">Light Blue Yoshi Uniform</option>
                    <option value="lightning">Lightning Uniform</option>
                    <option value="luigi">Luigi Uniform</option>
                    <option value="luma">Luma Uniform</option>
                    <option value="magikoopa">Magikoopa Uniform</option>
                    <option value="mario">Mario Uniform</option>
                    <option value="peach">Peach Uniform</option>
                    <option value="pinkyoshi">Pink Yoshi Uniform</option>
                    <option value="pow">POW Block Uniform</option>
                    <option value="question">Question Block Uniform</option>
                    <option value="redshell">Red Shell Uniform</option>
                    <option value="redyoshi">Red Yoshi Uniform</option>
                    <option value="mushroom">Super Mushroom Uniform</option>
                    <option value="superstar">Super Star Uniform</option>
                    <option value="thwomp">Thwomp Uniform</option>
                    <option value="waluigi">Waluigi Uniform</option>
                    <option value="wario">Wario Uniform</option>
                    <option value="whiteyoshi">White Yoshi Uniform</option>
                    <option value="yellowyoshi">Yellow Yoshi Uniform</option>
                    <option value="yoshi">Yoshi Uniform</option>
                </select><br />
        
                <label for="Wristbands1">Wristbands</label>
                <select name="Wristbands1" id="Wristbands1">
                	
                    <option value="basic">Standard Mii Uniform</option> <option value="banana">Banana Wristbands</option>
                    <option value="blackyoshi">Black Yoshi Wristbands</option>
                    <option value="blooper">Blooper Wristbands</option>
                    <option value="blueyoshi">Blue Yoshi Wristbands</option>
                    <option value="bobomb">Bob-omb Wristbands</option>
                    <option value="boo">Boo Wristbands</option>
                    <option value="bowser">Bowser Wristbands</option>
                    <option value="bowserjr">Bowser Jr. Wristbands</option>
                    <option value="bill">Bullet Bill Wristbands</option>
                    <option value="cheepcheep">Cheep Cheep Wristbands</option>
                    <option value="chomp">Chain Chomp Wristbands</option>
                    <option value="daisy">Daisy Wristbands</option>
                    <option value="dk">Donkey Kong Wristbands</option>
                    <option value="diddy">Diddy Kong Wristbands</option>
                    <option value="drybowser">Dry Bowser Wristbands</option>
                    <option value="fireflower">Fire Flower Wristbands</option>
                    <option value="greenshell">Green Shell Wristbands</option>
                    <option value="hammer">Hammer Bros. Wristbands</option>
                    <option value="ice">Ice Flower Wristbands</option>
                    <option value="lakitu">Lakitu Wristbands</option>
                    <option value="lblueyoshi">Light Blue Yoshi Wristbands</option>
                    <option value="lightning">Lightning Wristbands</option>
                    <option value="luigi">Luigi Wristbands</option>
                    <option value="luma">Luma Wristbands</option>
                    <option value="magikoopa">Magikoopa Wristbands</option>
                    <option value="mario">Mario Wristbands</option>
                    <option value="peach">Peach Wristbands</option>
                    <option value="pinkyoshi">Pink Yoshi Wristbands</option>
                    <option value="pow">POW Block Wristbands</option>
                    <option value="question">Question Block Wristbands</option>
                    <option value="redshell">Red Shell Wristbands</option>
                    <option value="redyoshi">Red Yoshi Wristbands</option>
                    <option value="mushroom">Super Mushroom Wristbands</option>
                    <option value="superstar">Super Star Wristbands</option>
                    <option value="thwomp">Thwomp Wristbands</option>
                    <option value="waluigi">Waluigi Wristbands</option>
                    <option value="wario">Wario Wristbands</option>
                    <option value="whiteyoshi">White Yoshi Wristbands</option>
                    <option value="yellowyoshi">Yellow Yoshi Wristbands</option>
                    <option value="yoshi">Yoshi Wristbands</option>
                </select>
            </fieldset>
        </form>
    
    	<ul>
             <li>Serve <span id="set1_serve"></span></li>
            <li>Stroke <span id="set1_stroke"></span></li>
            <li>Volley <span id="set1_volley"></span></li>
            <li>Side <span id="set1_side"></span></li>
            <li>Topspin <span id="set1_tops"></span></li>
            <li>Slice <span id="set1_slice"></span></li>
            <li>Speed <span id="set1_speed"></span></li>
            <li>Accleration<span id="set1_acceleration"></span></li>
            <li>Agility <span id="set1_agility"></span></li>
            
        </ul>
    </div>
    
    <div id="set2_stats" class="statbox">
        <form id="set2_build">
            <fieldset>
                <label for="Racket2">Racket</label>
                <select name="Racket2" id="Racket2">
                
                   <option value="basic">Standard Mii Racket</option><option value="babypeach">Baby Peach Racket</option>
                    <option value="babymario">Baby Mario Racket</option>
                	<option value="banana">Banana Racket</option>
                    <option value="bee">Bee Racket</option>
                    <option value="birdo">Birdo Racket</option>
                    <option value="blackyoshi">Black Yoshi Racket</option>
                    <option value="blooper">Blooper Racket</option>
                    <option value="blueyoshi">Blue Yoshi Racket</option>
                    <option value="bobomb">Bob-omb Racket</option>
                    <option value="boo">Boo Racket</option>
                    <option value="bowser">Bowser Racket</option>
                    <option value="bowserjr">Bowser Jr. Racket</option>
                    <option value="bill">Bullet Bill Racket</option>
                    <option value="cheepcheep">Cheep Cheep Racket</option>
                    <option value="chomp">Chain Chomp Racket</option>
                    <option value="cloud">Cloud Racket</option>
                    <option value="daisy">Daisy Racket</option>
                    <option value="dk">Donkey Kong Racket</option>
                    <option value="diddy">Diddy Kong Racket</option>
                    <option value="drybowser">Dry Bowser Racket</option>
                    <option value="fireflower">Fire Flower Racket</option>
                    <option value="firemario">Fire Mario Racket</option>
                    <option value="goomba">Goomba Racket</option>
                    <option value="greenshell">Green Shell Racket</option>
                    <option value="hammer">Hammer Bros. Racket</option>
                    <option value="ice">Ice Flower Racket</option>
                    <option value="koopa">Koopa Troopa Racket</option>
                    <option value="lakitu">Lakitu Racket</option>
                    <option value="lblueyoshi">Light Blue Yoshi Racket</option>
                    <option value="lightning">Lightning Racket</option>
                    <option value="luigi">Luigi Racket</option>
                    <option value="luma">Luma Racket</option>
                    <option value="magikoopa">Magikoopa Racket</option>
                    <option value="mario">Mario Racket</option>
                    <option value="metalmario">Metal Mario Racket</option>
                    <option value="peach">Peach Racket</option>
                    <option value="petey">Petey Pirahna Racket</option>
                    <option value="pinkyoshi">Pink Yoshi Racket</option>
                    <option value="pow">POW Block Racket</option>
                    <option value="propeller">Propeller Racket</option>
                    <option value="question">Question Block Racket</option>
                    <option value="redshell">Red Shell Racket</option>
                    <option value="redyoshi">Red Yoshi Racket</option>
                    <option value="mushroom">Super Mushroom Racket</option>
                    <option value="shyguy">Shy Guy Racket</option>
                    <option value="superstar">Super Star Racket</option>
                    <option value="thwomp">Thwomp Racket</option>
                    <option value="tanooki">Tanooki Racket</option>
                    <option value="waluigi">Waluigi Racket</option>
                    <option value="wario">Wario Racket</option>
                    <option value="whiteyoshi">White Yoshi Racket</option>
                    <option value="wiggler">Wiggler Racket</option>
                    <option value="yellowyoshi">Yellow Yoshi Racket</option>
                    <option value="yoshi">Yoshi Racket</option>
                </select><br />
        
                <label for="Shoes2">Shoes</label>
                <select name="Shoes2" id="Shoes2">
                
                     <option value="basic">Standard Mii Shoes</option><option value="banana">Banana Shoes</option>
                    <option value="blackyoshi">Black Yoshi Shoes</option>
                    <option value="blooper">Blooper Shoes</option>
                    <option value="blueyoshi">Blue Yoshi Shoes</option>
                    <option value="bobomb">Bob-omb Shoes</option>
                    <option value="boo">Boo Shoes</option>
                    <option value="bowser">Bowser Shoes</option>
                    <option value="bowserjr">Bowser Jr. Shoes</option>
                    <option value="bill">Bullet Bill Shoes</option>
                    <option value="cheepcheep">Cheep Cheep Shoes</option>
                    <option value="chomp">Chain Chomp Shoes</option>
                    <option value="daisy">Daisy Shoes</option>
                    <option value="dk">Donkey Kong Shoes</option>
                    <option value="diddy">Diddy Kong Shoes</option>
                    <option value="drybowser">Dry Bowser Shoes</option>
                    <option value="fireflower">Fire Flower Shoes</option>
                    <option value="greenshell">Green Shell Shoes</option>
                    <option value="hammer">Hammer Bros. Shoes</option>
                    <option value="ice">Ice Flower Shoes</option>
                    <option value="lakitu">Lakitu Shoes</option>
                    <option value="lblueyoshi">Light Blue Yoshi Shoes</option>
                    <option value="lightning">Lightning Shoes</option>
                    <option value="luigi">Luigi Shoes</option>
                    <option value="luma">Luma Shoes</option>
                    <option value="magikoopa">Magikoopa Shoes</option>
                    <option value="mario">Mario Shoes</option>
                    <option value="peach">Peach Shoes</option>
                    <option value="pinkyoshi">Pink Yoshi Shoes</option>
                    <option value="pow">POW Block Shoes</option>
                    <option value="question">Question Block Shoes</option>
                    <option value="redshell">Red Shell Shoes</option>
                    <option value="redyoshi">Red Yoshi Shoes</option>
                    <option value="mushroom">Super Mushroom Shoes</option>
                    <option value="superstar">Super Star Shoes</option>
                    <option value="thwomp">Thwomp Shoes</option>
                    <option value="waluigi">Waluigi Shoes</option>
                    <option value="wario">Wario Shoes</option>
                    <option value="whiteyoshi">White Yoshi Shoes</option>
                    <option value="yellowyoshi">Yellow Yoshi Shoes</option>
                    <option value="yoshi">Yoshi Shoes</option>
                </select><br />
        
                <label for="Uniform2">Uniform</label>
                <select name="Uniform2" id="Uniform2">
                
                     <option value="basic">Standard Mii Uniform</option><option value="banana">Banana Uniform</option>
                    <option value="blackyoshi">Black Yoshi Uniform</option>
                    <option value="blooper">Blooper Uniform</option>
                    <option value="blueyoshi">Blue Yoshi Uniform</option>
                    <option value="bobomb">Bob-omb Uniform</option>
                    <option value="boo">Boo Uniform</option>
                    <option value="bowser">Bowser Uniform</option>
                    <option value="bowserjr">Bowser Jr. Uniform</option>
                    <option value="bill">Bullet Bill Uniform</option>
                    <option value="cheepcheep">Cheep Cheep Uniform</option>
                    <option value="chomp">Chain Chomp Uniform</option>
                    <option value="daisy">Daisy Uniform</option>
                    <option value="dk">Donkey Kong Uniform</option>
                    <option value="diddy">Diddy Kong Uniform</option>
                    <option value="drybowser">Dry Bowser Uniform</option>
                    <option value="fireflower">Fire Flower Uniform</option>
                    <option value="greenshell">Green Shell Uniform</option>
                    <option value="hammer">Hammer Bros. Uniform</option>
                    <option value="ice">Ice Flower Uniform</option>
                    <option value="lakitu">Lakitu Uniform</option>
                    <option value="lblueyoshi">Light Blue Yoshi Uniform</option>
                    <option value="lightning">Lightning Uniform</option>
                    <option value="luigi">Luigi Uniform</option>
                    <option value="luma">Luma Uniform</option>
                    <option value="magikoopa">Magikoopa Uniform</option>
                    <option value="mario">Mario Uniform</option>
                    <option value="peach">Peach Uniform</option>
                    <option value="pinkyoshi">Pink Yoshi Uniform</option>
                    <option value="pow">POW Block Uniform</option>
                    <option value="question">Question Block Uniform</option>
                    <option value="redshell">Red Shell Uniform</option>
                    <option value="redyoshi">Red Yoshi Uniform</option>
                    <option value="mushroom">Super Mushroom Uniform</option>
                    <option value="superstar">Super Star Uniform</option>
                    <option value="thwomp">Thwomp Uniform</option>
                    <option value="waluigi">Waluigi Uniform</option>
                    <option value="wario">Wario Uniform</option>
                    <option value="whiteyoshi">White Yoshi Uniform</option>
                    <option value="yellowyoshi">Yellow Yoshi Uniform</option>
                    <option value="yoshi">Yoshi Uniform</option>
                </select><br />
        
                <label for="Wristbands2">Wristbands</label>
                <select name="Wristbands2" id="Wristbands2">
                
                     <option value="basic">Standard Mii Uniform</option> <option value="banana">Banana Wristbands</option>
                    <option value="blackyoshi">Black Yoshi Wristbands</option>
                    <option value="blooper">Blooper Wristbands</option>
                    <option value="blueyoshi">Blue Yoshi Wristbands</option>
                    <option value="bobomb">Bob-omb Wristbands</option>
                    <option value="boo">Boo Wristbands</option>
                    <option value="bowser">Bowser Wristbands</option>
                    <option value="bowserjr">Bowser Jr. Wristbands</option>
                    <option value="bill">Bullet Bill Wristbands</option>
                    <option value="cheepcheep">Cheep Cheep Wristbands</option>
                    <option value="chomp">Chain Chomp Wristbands</option>
                    <option value="daisy">Daisy Wristbands</option>
                    <option value="dk">Donkey Kong Wristbands</option>
                    <option value="diddy">Diddy Kong Wristbands</option>
                    <option value="drybowser">Dry Bowser Wristbands</option>
                    <option value="fireflower">Fire Flower Wristbands</option>
                    <option value="greenshell">Green Shell Wristbands</option>
                    <option value="hammer">Hammer Bros. Wristbands</option>
                    <option value="ice">Ice Flower Wristbands</option>
                    <option value="lakitu">Lakitu Wristbands</option>
                    <option value="lblueyoshi">Light Blue Yoshi Wristbands</option>
                    <option value="lightning">Lightning Wristbands</option>
                    <option value="luigi">Luigi Wristbands</option>
                    <option value="luma">Luma Wristbands</option>
                    <option value="magikoopa">Magikoopa Wristbands</option>
                    <option value="mario">Mario Wristbands</option>
                    <option value="peach">Peach Wristbands</option>
                    <option value="pinkyoshi">Pink Yoshi Wristbands</option>
                    <option value="pow">POW Block Wristbands</option>
                    <option value="question">Question Block Wristbands</option>
                    <option value="redshell">Red Shell Wristbands</option>
                    <option value="redyoshi">Red Yoshi Wristbands</option>
                    <option value="mushroom">Super Mushroom Wristbands</option>
                    <option value="superstar">Super Star Wristbands</option>
                    <option value="thwomp">Thwomp Wristbands</option>
                    <option value="waluigi">Waluigi Wristbands</option>
                    <option value="wario">Wario Wristbands</option>
                    <option value="whiteyoshi">White Yoshi Wristbands</option>
                    <option value="yellowyoshi">Yellow Yoshi Wristbands</option>
                    <option value="yoshi">Yoshi Wristbands</option>
                </select>
            </fieldset>
        </form>
    
    	<ul>
            <li>Serve <span id="set2_serve"></span></li>
            <li>Stroke <span id="set2_stroke"></span></li>
            <li>Volley <span id="set2_volley"></span></li>
            <li>Side <span id="set2_side"></span></li>
            <li>Topspin <span id="set2_tops"></span></li>
            <li>Slice <span id="set2_slice"></span></li>
            <li>Speed <span id="set2_speed"></span></li>
            <li>Accleration<span id="set2_acceleration"></span></li>
            <li>Agility <span id="set2_agility"></span></li>
        </ul>
    </div>
    
    <div id="set3_stats" class="statbox">
        <form id="set3_build">
            <fieldset>
                <label for="Racket3">Racket</label>
                <select name="Racket3" id="Racket3">
                	
                    <option value="basic">Standard Mii Racket</option><option value="babypeach">Baby Peach Racket</option>
                    <option value="babymario">Baby Mario Racket</option>
                	<option value="banana">Banana Racket</option>
                    <option value="bee">Bee Racket</option>
                    <option value="birdo">Birdo Racket</option>
                    <option value="blackyoshi">Black Yoshi Racket</option>
                    <option value="blooper">Blooper Racket</option>
                    <option value="blueyoshi">Blue Yoshi Racket</option>
                    <option value="bobomb">Bob-omb Racket</option>
                    <option value="boo">Boo Racket</option>
                    <option value="bowser">Bowser Racket</option>
                    <option value="bowserjr">Bowser Jr. Racket</option>
                    <option value="bill">Bullet Bill Racket</option>
                    <option value="cheepcheep">Cheep Cheep Racket</option>
                    <option value="chomp">Chain Chomp Racket</option>
                    <option value="cloud">Cloud Racket</option>
                    <option value="daisy">Daisy Racket</option>
                    <option value="dk">Donkey Kong Racket</option>
                    <option value="diddy">Diddy Kong Racket</option>
                    <option value="drybowser">Dry Bowser Racket</option>
                    <option value="fireflower">Fire Flower Racket</option>
                    <option value="firemario">Fire Mario Racket</option>
                    <option value="goomba">Goomba Racket</option>
                    <option value="greenshell">Green Shell Racket</option>
                    <option value="hammer">Hammer Bros. Racket</option>
                    <option value="ice">Ice Flower Racket</option>
                    <option value="koopa">Koopa Troopa Racket</option>
                    <option value="lakitu">Lakitu Racket</option>
                    <option value="lblueyoshi">Light Blue Yoshi Racket</option>
                    <option value="lightning">Lightning Racket</option>
                    <option value="luigi">Luigi Racket</option>
                    <option value="luma">Luma Racket</option>
                    <option value="magikoopa">Magikoopa Racket</option>
                    <option value="mario">Mario Racket</option>
                    <option value="metalmario">Metal Mario Racket</option>
                    <option value="peach">Peach Racket</option>
                    <option value="petey">Petey Pirahna Racket</option>
                    <option value="pinkyoshi">Pink Yoshi Racket</option>
                    <option value="pow">POW Block Racket</option>
                    <option value="propeller">Propeller Racket</option>
                    <option value="question">Question Block Racket</option>
                    <option value="redshell">Red Shell Racket</option>
                    <option value="redyoshi">Red Yoshi Racket</option>
                    <option value="mushroom">Super Mushroom Racket</option>
                    <option value="shyguy">Shy Guy Racket</option>
                    <option value="superstar">Super Star Racket</option>
                    <option value="thwomp">Thwomp Racket</option>
                    <option value="tanooki">Tanooki Racket</option>
                    <option value="waluigi">Waluigi Racket</option>
                    <option value="wario">Wario Racket</option>
                    <option value="whiteyoshi">White Yoshi Racket</option>
                    <option value="wiggler">Wiggler Racket</option>
                    <option value="yellowyoshi">Yellow Yoshi Racket</option>
                    <option value="yoshi">Yoshi Racket</option>
                </select><br />
        
                <label for="Shoes3">Shoes</label>
                <select name="Shoes3" id="Shoes3">
                
                     <option value="basic">Standard Mii Shoes</option><option value="banana">Banana Shoes</option>
                    <option value="blackyoshi">Black Yoshi Shoes</option>
                    <option value="blooper">Blooper Shoes</option>
                    <option value="blueyoshi">Blue Yoshi Shoes</option>
                    <option value="bobomb">Bob-omb Shoes</option>
                    <option value="boo">Boo Shoes</option>
                    <option value="bowser">Bowser Shoes</option>
                    <option value="bowserjr">Bowser Jr. Shoes</option>
                    <option value="bill">Bullet Bill Shoes</option>
                    <option value="cheepcheep">Cheep Cheep Shoes</option>
                    <option value="chomp">Chain Chomp Shoes</option>
                    <option value="daisy">Daisy Shoes</option>
                    <option value="dk">Donkey Kong Shoes</option>
                    <option value="diddy">Diddy Kong Shoes</option>
                    <option value="drybowser">Dry Bowser Shoes</option>
                    <option value="fireflower">Fire Flower Shoes</option>
                    <option value="greenshell">Green Shell Shoes</option>
                    <option value="hammer">Hammer Bros. Shoes</option>
                    <option value="ice">Ice Flower Shoes</option>
                    <option value="lakitu">Lakitu Shoes</option>
                    <option value="lblueyoshi">Light Blue Yoshi Shoes</option>
                    <option value="lightning">Lightning Shoes</option>
                    <option value="luigi">Luigi Shoes</option>
                    <option value="luma">Luma Shoes</option>
                    <option value="magikoopa">Magikoopa Shoes</option>
                    <option value="mario">Mario Shoes</option>
                    <option value="peach">Peach Shoes</option>
                    <option value="pinkyoshi">Pink Yoshi Shoes</option>
                    <option value="pow">POW Block Shoes</option>
                    <option value="question">Question Block Shoes</option>
                    <option value="redshell">Red Shell Shoes</option>
                    <option value="redyoshi">Red Yoshi Shoes</option>
                    <option value="mushroom">Super Mushroom Shoes</option>
                    <option value="superstar">Super Star Shoes</option>
                    <option value="thwomp">Thwomp Shoes</option>
                    <option value="waluigi">Waluigi Shoes</option>
                    <option value="wario">Wario Shoes</option>
                    <option value="whiteyoshi">White Yoshi Shoes</option>
                    <option value="yellowyoshi">Yellow Yoshi Shoes</option>
                    <option value="yoshi">Yoshi Shoes</option>
                </select><br />
        
                <label for="Uniform3">Uniform</label>
                <select name="Uniform3" id="Uniform3">
                
                     <option value="basic">Standard Mii Uniform</option><option value="banana">Banana Uniform</option>
                    <option value="blackyoshi">Black Yoshi Uniform</option>
                    <option value="blooper">Blooper Uniform</option>
                    <option value="blueyoshi">Blue Yoshi Uniform</option>
                    <option value="bobomb">Bob-omb Uniform</option>
                    <option value="boo">Boo Uniform</option>
                    <option value="bowser">Bowser Uniform</option>
                    <option value="bowserjr">Bowser Jr. Uniform</option>
                    <option value="bill">Bullet Bill Uniform</option>
                    <option value="cheepcheep">Cheep Cheep Uniform</option>
                    <option value="chomp">Chain Chomp Uniform</option>
                    <option value="daisy">Daisy Uniform</option>
                    <option value="dk">Donkey Kong Uniform</option>
                    <option value="diddy">Diddy Kong Uniform</option>
                    <option value="drybowser">Dry Bowser Uniform</option>
                    <option value="fireflower">Fire Flower Uniform</option>
                    <option value="greenshell">Green Shell Uniform</option>
                    <option value="hammer">Hammer Bros. Uniform</option>
                    <option value="ice">Ice Flower Uniform</option>
                    <option value="lakitu">Lakitu Uniform</option>
                    <option value="lblueyoshi">Light Blue Yoshi Uniform</option>
                    <option value="lightning">Lightning Uniform</option>
                    <option value="luigi">Luigi Uniform</option>
                    <option value="luma">Luma Uniform</option>
                    <option value="magikoopa">Magikoopa Uniform</option>
                    <option value="mario">Mario Uniform</option>
                    <option value="peach">Peach Uniform</option>
                    <option value="pinkyoshi">Pink Yoshi Uniform</option>
                    <option value="pow">POW Block Uniform</option>
                    <option value="question">Question Block Uniform</option>
                    <option value="redshell">Red Shell Uniform</option>
                    <option value="redyoshi">Red Yoshi Uniform</option>
                    <option value="mushroom">Super Mushroom Uniform</option>
                    <option value="superstar">Super Star Uniform</option>
                    <option value="thwomp">Thwomp Uniform</option>
                    <option value="waluigi">Waluigi Uniform</option>
                    <option value="wario">Wario Uniform</option>
                    <option value="whiteyoshi">White Yoshi Uniform</option>
                    <option value="yellowyoshi">Yellow Yoshi Uniform</option>
                    <option value="yoshi">Yoshi Uniform</option>
                </select><br />
        
                <label for="Wristbands3">Wristbands</label>
                <select name="Wristbands3" id="Wristbands3">
                	
                     <option value="basic">Standard Mii Uniform</option> <option value="banana">Banana Wristbands</option>
                    <option value="blackyoshi">Black Yoshi Wristbands</option>
                    <option value="blooper">Blooper Wristbands</option>
                    <option value="blueyoshi">Blue Yoshi Wristbands</option>
                    <option value="bobomb">Bob-omb Wristbands</option>
                    <option value="boo">Boo Wristbands</option>
                    <option value="bowser">Bowser Wristbands</option>
                    <option value="bowserjr">Bowser Jr. Wristbands</option>
                    <option value="bill">Bullet Bill Wristbands</option>
                    <option value="cheepcheep">Cheep Cheep Wristbands</option>
                    <option value="chomp">Chain Chomp Wristbands</option>
                    <option value="daisy">Daisy Wristbands</option>
                    <option value="dk">Donkey Kong Wristbands</option>
                    <option value="diddy">Diddy Kong Wristbands</option>
                    <option value="drybowser">Dry Bowser Wristbands</option>
                    <option value="fireflower">Fire Flower Wristbands</option>
                    <option value="greenshell">Green Shell Wristbands</option>
                    <option value="hammer">Hammer Bros. Wristbands</option>
                    <option value="ice">Ice Flower Wristbands</option>
                    <option value="lakitu">Lakitu Wristbands</option>
                    <option value="lblueyoshi">Light Blue Yoshi Wristbands</option>
                    <option value="lightning">Lightning Wristbands</option>
                    <option value="luigi">Luigi Wristbands</option>
                    <option value="luma">Luma Wristbands</option>
                    <option value="magikoopa">Magikoopa Wristbands</option>
                    <option value="mario">Mario Wristbands</option>
                    <option value="peach">Peach Wristbands</option>
                    <option value="pinkyoshi">Pink Yoshi Wristbands</option>
                    <option value="pow">POW Block Wristbands</option>
                    <option value="question">Question Block Wristbands</option>
                    <option value="redshell">Red Shell Wristbands</option>
                    <option value="redyoshi">Red Yoshi Wristbands</option>
                    <option value="mushroom">Super Mushroom Wristbands</option>
                    <option value="superstar">Super Star Wristbands</option>
                    <option value="thwomp">Thwomp Wristbands</option>
                    <option value="waluigi">Waluigi Wristbands</option>
                    <option value="wario">Wario Wristbands</option>
                    <option value="whiteyoshi">White Yoshi Wristbands</option>
                    <option value="yellowyoshi">Yellow Yoshi Wristbands</option>
                    <option value="yoshi">Yoshi Wristbands</option>
                </select>
            </fieldset>
        </form>
    
    	<ul>
             <li>Serve <span id="set3_serve"></span></li>
            <li>Stroke <span id="set3_stroke"></span></li>
            <li>Volley <span id="set3_volley"></span></li>
            <li>Side <span id="set3_side"></span></li>
            <li>Topspin <span id="set3_tops"></span></li>
            <li>Slice <span id="set3_slice"></span></li>
            <li>Speed <span id="set3_speed"></span></li>
            <li>Accleration<span id="set3_acceleration"></span></li>
            <li>Agility <span id="set3_agility"></span></li>
        </ul>
    </div>
    
    <div id="set4_stats" class="statbox">
        <form id="set4_build">
            <fieldset>
                <label for="Racket4">Racket</label>
                <select name="Racket4" id="Racket4">
                	
                   <option value="basic">Standard Mii Racket</option><option value="babypeach">Baby Peach Racket</option>
                    <option value="babymario">Baby Mario Racket</option>
                	<option value="banana">Banana Racket</option>
                    <option value="bee">Bee Racket</option>
                    <option value="birdo">Birdo Racket</option>
                    <option value="blackyoshi">Black Yoshi Racket</option>
                    <option value="blooper">Blooper Racket</option>
                    <option value="blueyoshi">Blue Yoshi Racket</option>
                    <option value="bobomb">Bob-omb Racket</option>
                    <option value="boo">Boo Racket</option>
                    <option value="bowser">Bowser Racket</option>
                    <option value="bowserjr">Bowser Jr. Racket</option>
                    <option value="bill">Bullet Bill Racket</option>
                    <option value="cheepcheep">Cheep Cheep Racket</option>
                    <option value="chomp">Chain Chomp Racket</option>
                    <option value="cloud">Cloud Racket</option>
                    <option value="daisy">Daisy Racket</option>
                    <option value="dk">Donkey Kong Racket</option>
                    <option value="diddy">Diddy Kong Racket</option>
                    <option value="drybowser">Dry Bowser Racket</option>
                    <option value="fireflower">Fire Flower Racket</option>
                    <option value="firemario">Fire Mario Racket</option>
                    <option value="goomba">Goomba Racket</option>
                    <option value="greenshell">Green Shell Racket</option>
                    <option value="hammer">Hammer Bros. Racket</option>
                    <option value="ice">Ice Flower Racket</option>
                    <option value="koopa">Koopa Troopa Racket</option>
                    <option value="lakitu">Lakitu Racket</option>
                    <option value="lblueyoshi">Light Blue Yoshi Racket</option>
                    <option value="lightning">Lightning Racket</option>
                    <option value="luigi">Luigi Racket</option>
                    <option value="luma">Luma Racket</option>
                    <option value="magikoopa">Magikoopa Racket</option>
                    <option value="mario">Mario Racket</option>
                    <option value="metalmario">Metal Mario Racket</option>
                    <option value="peach">Peach Racket</option>
                    <option value="petey">Petey Pirahna Racket</option>
                    <option value="pinkyoshi">Pink Yoshi Racket</option>
                    <option value="pow">POW Block Racket</option>
                    <option value="propeller">Propeller Racket</option>
                    <option value="question">Question Block Racket</option>
                    <option value="redshell">Red Shell Racket</option>
                    <option value="redyoshi">Red Yoshi Racket</option>
                    <option value="mushroom">Super Mushroom Racket</option>
                    <option value="shyguy">Shy Guy Racket</option>
                    <option value="superstar">Super Star Racket</option>
                    <option value="thwomp">Thwomp Racket</option>
                    <option value="tanooki">Tanooki Racket</option>
                    <option value="waluigi">Waluigi Racket</option>
                    <option value="wario">Wario Racket</option>
                    <option value="whiteyoshi">White Yoshi Racket</option>
                    <option value="wiggler">Wiggler Racket</option>
                    <option value="yellowyoshi">Yellow Yoshi Racket</option>
                    <option value="yoshi">Yoshi Racket</option>
                </select><br />
        
                <label for="Shoes4">Shoes</label>
                <select name="Shoes4" id="Shoes4">
                	
                     <option value="basic">Standard Mii Shoes</option><option value="banana">Banana Shoes</option>
                    <option value="blackyoshi">Black Yoshi Shoes</option>
                    <option value="blooper">Blooper Shoes</option>
                    <option value="blueyoshi">Blue Yoshi Shoes</option>
                    <option value="bobomb">Bob-omb Shoes</option>
                    <option value="boo">Boo Shoes</option>
                    <option value="bowser">Bowser Shoes</option>
                    <option value="bowserjr">Bowser Jr. Shoes</option>
                    <option value="bill">Bullet Bill Shoes</option>
                    <option value="cheepcheep">Cheep Cheep Shoes</option>
                    <option value="chomp">Chain Chomp Shoes</option>
                    <option value="daisy">Daisy Shoes</option>
                    <option value="dk">Donkey Kong Shoes</option>
                    <option value="diddy">Diddy Kong Shoes</option>
                    <option value="drybowser">Dry Bowser Shoes</option>
                    <option value="fireflower">Fire Flower Shoes</option>
                    <option value="greenshell">Green Shell Shoes</option>
                    <option value="hammer">Hammer Bros. Shoes</option>
                    <option value="ice">Ice Flower Shoes</option>
                    <option value="lakitu">Lakitu Shoes</option>
                    <option value="lblueyoshi">Light Blue Yoshi Shoes</option>
                    <option value="lightning">Lightning Shoes</option>
                    <option value="luigi">Luigi Shoes</option>
                    <option value="luma">Luma Shoes</option>
                    <option value="magikoopa">Magikoopa Shoes</option>
                    <option value="mario">Mario Shoes</option>
                    <option value="peach">Peach Shoes</option>
                    <option value="pinkyoshi">Pink Yoshi Shoes</option>
                    <option value="pow">POW Block Shoes</option>
                    <option value="question">Question Block Shoes</option>
                    <option value="redshell">Red Shell Shoes</option>
                    <option value="redyoshi">Red Yoshi Shoes</option>
                    <option value="mushroom">Super Mushroom Shoes</option>
                    <option value="superstar">Super Star Shoes</option>
                    <option value="thwomp">Thwomp Shoes</option>
                    <option value="waluigi">Waluigi Shoes</option>
                    <option value="wario">Wario Shoes</option>
                    <option value="whiteyoshi">White Yoshi Shoes</option>
                    <option value="yellowyoshi">Yellow Yoshi Shoes</option>
                    <option value="yoshi">Yoshi Shoes</option>
                </select><br />
        
                <label for="Uniform4">Uniform</label>
                <select name="Uniform4" id="Uniform4">
                	
                     <option value="basic">Standard Mii Uniform</option><option value="banana">Banana Uniform</option>
                    <option value="blackyoshi">Black Yoshi Uniform</option>
                    <option value="blooper">Blooper Uniform</option>
                    <option value="blueyoshi">Blue Yoshi Uniform</option>
                    <option value="bobomb">Bob-omb Uniform</option>
                    <option value="boo">Boo Uniform</option>
                    <option value="bowser">Bowser Uniform</option>
                    <option value="bowserjr">Bowser Jr. Uniform</option>
                    <option value="bill">Bullet Bill Uniform</option>
                    <option value="cheepcheep">Cheep Cheep Uniform</option>
                    <option value="chomp">Chain Chomp Uniform</option>
                    <option value="daisy">Daisy Uniform</option>
                    <option value="dk">Donkey Kong Uniform</option>
                    <option value="diddy">Diddy Kong Uniform</option>
                    <option value="drybowser">Dry Bowser Uniform</option>
                    <option value="fireflower">Fire Flower Uniform</option>
                    <option value="greenshell">Green Shell Uniform</option>
                    <option value="hammer">Hammer Bros. Uniform</option>
                    <option value="ice">Ice Flower Uniform</option>
                    <option value="lakitu">Lakitu Uniform</option>
                    <option value="lblueyoshi">Light Blue Yoshi Uniform</option>
                    <option value="lightning">Lightning Uniform</option>
                    <option value="luigi">Luigi Uniform</option>
                    <option value="luma">Luma Uniform</option>
                    <option value="magikoopa">Magikoopa Uniform</option>
                    <option value="mario">Mario Uniform</option>
                    <option value="peach">Peach Uniform</option>
                    <option value="pinkyoshi">Pink Yoshi Uniform</option>
                    <option value="pow">POW Block Uniform</option>
                    <option value="question">Question Block Uniform</option>
                    <option value="redshell">Red Shell Uniform</option>
                    <option value="redyoshi">Red Yoshi Uniform</option>
                    <option value="mushroom">Super Mushroom Uniform</option>
                    <option value="superstar">Super Star Uniform</option>
                    <option value="thwomp">Thwomp Uniform</option>
                    <option value="waluigi">Waluigi Uniform</option>
                    <option value="wario">Wario Uniform</option>
                    <option value="whiteyoshi">White Yoshi Uniform</option>
                    <option value="yellowyoshi">Yellow Yoshi Uniform</option>
                    <option value="yoshi">Yoshi Uniform</option>
                </select><br />
        
                <label for="Wristbands4">Wristbands</label>
                <select name="Wristbands4" id="Wristbands4">
                	
                     <option value="basic">Standard Mii Uniform</option> <option value="banana">Banana Wristbands</option>
                    <option value="blackyoshi">Black Yoshi Wristbands</option>
                    <option value="blooper">Blooper Wristbands</option>
                    <option value="blueyoshi">Blue Yoshi Wristbands</option>
                    <option value="bobomb">Bob-omb Wristbands</option>
                    <option value="boo">Boo Wristbands</option>
                    <option value="bowser">Bowser Wristbands</option>
                    <option value="bowserjr">Bowser Jr. Wristbands</option>
                    <option value="bill">Bullet Bill Wristbands</option>
                    <option value="cheepcheep">Cheep Cheep Wristbands</option>
                    <option value="chomp">Chain Chomp Wristbands</option>
                    <option value="daisy">Daisy Wristbands</option>
                    <option value="dk">Donkey Kong Wristbands</option>
                    <option value="diddy">Diddy Kong Wristbands</option>
                    <option value="drybowser">Dry Bowser Wristbands</option>
                    <option value="fireflower">Fire Flower Wristbands</option>
                    <option value="greenshell">Green Shell Wristbands</option>
                    <option value="hammer">Hammer Bros. Wristbands</option>
                    <option value="ice">Ice Flower Wristbands</option>
                    <option value="lakitu">Lakitu Wristbands</option>
                    <option value="lblueyoshi">Light Blue Yoshi Wristbands</option>
                    <option value="lightning">Lightning Wristbands</option>
                    <option value="luigi">Luigi Wristbands</option>
                    <option value="luma">Luma Wristbands</option>
                    <option value="magikoopa">Magikoopa Wristbands</option>
                    <option value="mario">Mario Wristbands</option>
                    <option value="peach">Peach Wristbands</option>
                    <option value="pinkyoshi">Pink Yoshi Wristbands</option>
                    <option value="pow">POW Block Wristbands</option>
                    <option value="question">Question Block Wristbands</option>
                    <option value="redshell">Red Shell Wristbands</option>
                    <option value="redyoshi">Red Yoshi Wristbands</option>
                    <option value="mushroom">Super Mushroom Wristbands</option>
                    <option value="superstar">Super Star Wristbands</option>
                    <option value="thwomp">Thwomp Wristbands</option>
                    <option value="waluigi">Waluigi Wristbands</option>
                    <option value="wario">Wario Wristbands</option>
                    <option value="whiteyoshi">White Yoshi Wristbands</option>
                    <option value="yellowyoshi">Yellow Yoshi Wristbands</option>
                    <option value="yoshi">Yoshi Wristbands</option>
                </select>
            </fieldset>
        </form>
    
    	<ul>
             <li>Serve <span id="set4_serve"></span></li>
            <li>Stroke <span id="set4_stroke"></span></li>
            <li>Volley <span id="set4_volley"></span></li>
            <li>Side <span id="set4_side"></span></li>
            <li>Topspin <span id="set4_tops"></span></li>
            <li>Slice <span id="set4_slice"></span></li>
            <li>Speed <span id="set4_speed"></span></li>
            <li>Accleration<span id="set4_acceleration"></span></li>
            <li>Agility <span id="set4_agility"></span></li>
        </ul>
    </div>
    <div style="clear: both">
    <p>Special thanks to the original poster, <a href="http://www.gamefaqs.com/boards/643001-/62994511?page=1" taget="_blank">journies_end who posted it on GameFAQs</a>, the source for these stats. Also thanks to DeadlyWolf844 for <a href="http://www.reddit.com/r/3DS/comments/vew7e/mario_tennis_open_item_stats_credit_goes_to/" target="_blank">sharing on reddit</a></p>
    </div>
</div>
</Shoes>

<script src="/scripts/jquery.js"></script>
<script src="stats.json"></script>
<script>

$(document).ready(function(){
	$('#set1_build select').change(function(){
		serve   = rackets[$('#Racket1').val()].serve + uniform[$('#Uniform1').val()].serve + shoes[$('#Shoes1').val()].serve + wristbands[$('#Wristbands1').val()].serve;
		stroke   = rackets[$('#Racket1').val()].stroke + uniform[$('#Uniform1').val()].stroke + shoes[$('#Shoes1').val()].stroke + wristbands[$('#Wristbands1').val()].stroke;
		volley    = rackets[$('#Racket1').val()].volley + uniform[$('#Uniform1').val()].volley + shoes[$('#Shoes1').val()].volley + wristbands[$('#Wristbands1').val()].volley;
		side   = rackets[$('#Racket1').val()].side + uniform[$('#Uniform1').val()].side + shoes[$('#Shoes1').val()].side + wristbands[$('#Wristbands1').val()].side;
		tops   = rackets[$('#Racket1').val()].tops + uniform[$('#Uniform1').val()].tops + shoes[$('#Shoes1').val()].tops + wristbands[$('#Wristbands1').val()].tops;
		sslice = rackets[$('#Racket1').val()].sslice + uniform[$('#Uniform1').val()].sslice + shoes[$('#Shoes1').val()].sslice + wristbands[$('#Wristbands1').val()].sslice;
		speed = rackets[$('#Racket1').val()].speed + uniform[$('#Uniform1').val()].speed + shoes[$('#Shoes1').val()].speed + wristbands[$('#Wristbands1').val()].speed;
		acceleration = rackets[$('#Racket1').val()].acceleration + uniform[$('#Uniform1').val()].acceleration + shoes[$('#Shoes1').val()].acceleration + wristbands[$('#Wristbands1').val()].acceleration;
		agility  = rackets[$('#Racket1').val()].agility + uniform[$('#Uniform1').val()].agility + shoes[$('#Shoes1').val()].agility + wristbands[$('#Wristbands1').val()].agility;
		
		
		$('#set1_serve').html(serve);
		$('#set1_stroke').html(stroke);
		$('#set1_volley').html(volley);
		$('#set1_side').html(side);
		$('#set1_tops').html(tops);
		$('#set1_slice').html(sslice);
		$('#set1_acceleration').html(acceleration);
		$('#set1_speed').html(speed);
		$('#set1_agility').html(agility);
	});
	
	$('#set2_build select').change(function(){
		serve   = rackets[$('#Racket2').val()].serve + uniform[$('#Uniform2').val()].serve + shoes[$('#Shoes2').val()].serve + wristbands[$('#Wristbands2').val()].serve;
		stroke   = rackets[$('#Racket2').val()].stroke + uniform[$('#Uniform2').val()].stroke + shoes[$('#Shoes2').val()].stroke + wristbands[$('#Wristbands2').val()].stroke;
		volley    = rackets[$('#Racket2').val()].volley + uniform[$('#Uniform2').val()].volley + shoes[$('#Shoes2').val()].volley + wristbands[$('#Wristbands2').val()].volley;
		side   = rackets[$('#Racket2').val()].side + uniform[$('#Uniform2').val()].side + shoes[$('#Shoes2').val()].side + wristbands[$('#Wristbands2').val()].side;
		tops   = rackets[$('#Racket2').val()].tops + uniform[$('#Uniform2').val()].tops + shoes[$('#Shoes2').val()].tops + wristbands[$('#Wristbands2').val()].tops;
		sslice = rackets[$('#Racket2').val()].sslice + uniform[$('#Uniform2').val()].sslice + shoes[$('#Shoes2').val()].sslice + wristbands[$('#Wristbands2').val()].sslice;
		speed = rackets[$('#Racket2').val()].speed + uniform[$('#Uniform2').val()].speed + shoes[$('#Shoes2').val()].speed + wristbands[$('#Wristbands2').val()].speed;
		acceleration = rackets[$('#Racket2').val()].acceleration + uniform[$('#Uniform2').val()].acceleration + shoes[$('#Shoes2').val()].acceleration + wristbands[$('#Wristbands2').val()].acceleration;
		agility  = rackets[$('#Racket2').val()].agility + uniform[$('#Uniform2').val()].agility + shoes[$('#Shoes2').val()].agility + wristbands[$('#Wristbands2').val()].agility;
		
		
		$('#set2_serve').html(serve);
		$('#set2_stroke').html(stroke);
		$('#set2_volley').html(volley);
		$('#set2_side').html(side);
		$('#set2_tops').html(tops);
		$('#set2_slice').html(sslice);
		$('#set2_acceleration').html(acceleration);
		$('#set2_speed').html(speed);
		$('#set2_agility').html(agility);
	});
	
	$('#set3_build select').change(function(){
		serve   = rackets[$('#Racket3').val()].serve + uniform[$('#Uniform3').val()].serve + shoes[$('#Shoes3').val()].serve + wristbands[$('#Wristbands3').val()].serve;
		stroke   = rackets[$('#Racket3').val()].stroke + uniform[$('#Uniform3').val()].stroke + shoes[$('#Shoes3').val()].stroke + wristbands[$('#Wristbands3').val()].stroke;
		volley    = rackets[$('#Racket3').val()].volley + uniform[$('#Uniform3').val()].volley + shoes[$('#Shoes3').val()].volley + wristbands[$('#Wristbands3').val()].volley;
		side   = rackets[$('#Racket3').val()].side + uniform[$('#Uniform3').val()].side + shoes[$('#Shoes3').val()].side + wristbands[$('#Wristbands3').val()].side;
		tops   = rackets[$('#Racket3').val()].tops + uniform[$('#Uniform3').val()].tops + shoes[$('#Shoes3').val()].tops + wristbands[$('#Wristbands3').val()].tops;
		sslice = rackets[$('#Racket3').val()].sslice + uniform[$('#Uniform3').val()].sslice + shoes[$('#Shoes3').val()].sslice + wristbands[$('#Wristbands3').val()].sslice;
		speed = rackets[$('#Racket3').val()].speed + uniform[$('#Uniform3').val()].speed + shoes[$('#Shoes3').val()].speed + wristbands[$('#Wristbands3').val()].speed;
		acceleration = rackets[$('#Racket3').val()].acceleration + uniform[$('#Uniform3').val()].acceleration + shoes[$('#Shoes3').val()].acceleration + wristbands[$('#Wristbands3').val()].acceleration;
		agility  = rackets[$('#Racket3').val()].agility + uniform[$('#Uniform3').val()].agility + shoes[$('#Shoes3').val()].agility + wristbands[$('#Wristbands3').val()].agility;
		
		
		$('#set3_serve').html(serve);
		$('#set3_stroke').html(stroke);
		$('#set3_volley').html(volley);
		$('#set3_side').html(side);
		$('#set3_tops').html(tops);
		$('#set3_slice').html(sslice);
		$('#set3_acceleration').html(acceleration);
		$('#set3_speed').html(speed);
		$('#set3_agility').html(agility);
	});
	
	$('#set4_build select').change(function(){
		serve   = rackets[$('#Racket4').val()].serve + uniform[$('#Uniform4').val()].serve + shoes[$('#Shoes4').val()].serve + wristbands[$('#Wristbands4').val()].serve;
		stroke   = rackets[$('#Racket4').val()].stroke + uniform[$('#Uniform4').val()].stroke + shoes[$('#Shoes4').val()].stroke + wristbands[$('#Wristbands4').val()].stroke;
		volley    = rackets[$('#Racket4').val()].volley + uniform[$('#Uniform4').val()].volley + shoes[$('#Shoes4').val()].volley + wristbands[$('#Wristbands4').val()].volley;
		side   = rackets[$('#Racket4').val()].side + uniform[$('#Uniform4').val()].side + shoes[$('#Shoes4').val()].side + wristbands[$('#Wristbands4').val()].side;
		tops   = rackets[$('#Racket4').val()].tops + uniform[$('#Uniform4').val()].tops + shoes[$('#Shoes4').val()].tops + wristbands[$('#Wristbands4').val()].tops;
		sslice = rackets[$('#Racket4').val()].sslice + uniform[$('#Uniform4').val()].sslice + shoes[$('#Shoes4').val()].sslice + wristbands[$('#Wristbands4').val()].sslice;
		speed = rackets[$('#Racket4').val()].speed + uniform[$('#Uniform4').val()].speed + shoes[$('#Shoes4').val()].speed + wristbands[$('#Wristbands4').val()].speed;
		acceleration = rackets[$('#Racket4').val()].acceleration + uniform[$('#Uniform4').val()].acceleration + shoes[$('#Shoes4').val()].acceleration + wristbands[$('#Wristbands4').val()].acceleration;
		agility  = rackets[$('#Racket4').val()].agility + uniform[$('#Uniform4').val()].agility + shoes[$('#Shoes4').val()].agility + wristbands[$('#Wristbands4').val()].agility;
		
		
		$('#set4_serve').html(serve);
		$('#set4_stroke').html(stroke);
		$('#set4_volley').html(volley);
		$('#set4_side').html(side);
		$('#set4_tops').html(tops);
		$('#set4_slice').html(sslice);
		$('#set4_acceleration').html(acceleration);
		$('#set4_speed').html(speed);
		$('#set4_agility').html(agility);
	});
	
});
</script>

</html>