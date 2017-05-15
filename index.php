<!DOCTYPE html>
<html lang="en">

<link href='//fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
<style>
body {
	font-family: 'Ariel', 'Sans-serif', 'Amiko';
}

tr {
	text-align:center;
}

#table-head {
	background-color: #ccc;
    height: 50px;
}

#milestone {
	text-align:left;
}

#even {
	background-color: #eee;
}
</style>

<head>
<title>PrincetonPool Status</title>
</head>
<body>
	<h1> <a href="http://princeton-pool.herokuapp.com/">PrincetonPool </a></h1>
	<h3> Project Manager: Jonathan Balkind </h3>
	<h3> Project Leader: Annie Chen </h3>
	<h3> Team: </h3>
	<ul>
	<li> Annie Chen - anniec@ </li>
	<li> Rani Jaiswal - rjaiswal@  </li>
	<li> Cindy Liu - cindyliu@ </li>
	<li> Alice Tang - xt6@ </li>
	</ul>
	
	<h3> Elevator Pitch </h3>
	<p>Have you ever looked for a last-minute carpool to the airport? Do you get annoyed by listserv emails looking for carpools to the airport?
	Did you know it can actually be cheaper to carpool to the airport than to take NJTransit? Are you an independent student interested in going grocery
	shopping, but don't want to wait for the Weekend Shopper? PrincetonPool is a webapp that will help you search for carpools <strong>with other
	Princeton students only</strong>. Just tell us <strong>where you want to go</strong>, <strong>when you want to go</strong>,
	<strong>how many empty seats you have for your ride</strong>, and we'll pool you into a group!</p>
	
	<h3> <a href="https://drive.google.com/a/princeton.edu/file/d/0BxY37nHyyhcjVFRkQnJNT3FfVnc/view?usp=sharing">Design Document</a></h3> &emsp; <h3> <a href ="https://drive.google.com/file/d/0BxY37nHyyhcjMGxPSHVJSURyX0k/view?usp=sharing">Demo Slides</a> </h3>
	<h3> Tutorial </h3>
	<h3> Product Guide </h3>
	<h3> Final Report </h3>
	<!--Timeline Table-->
	<h3>Timeline</h3>

	<div id = "table-tall">
	<table style="width:100%">

	<!--col widths-->
	  <col width="50">
	  <col width="100">
	  <col width="200">
	  <col width="500">
		<col width="400">

	<!---->

	  <tr id="table-head">
	    <th>Week</th>
	    <th style = "width:50">Dates</th>
	    <th>Deadlines</th>
	    <th>What We Planned To Do</th>
			<th>What We Actually Did</th>
	  </tr>
	  <tr>
	    <td>1</td>
	    <td>3/19 - 3/25</td>
	    <td>Spring Break</td>
	    <td>Tutorials, division of labor, set up Github repository, get familiar with Github</td>
			<td>Went through tutorials, set up Github repo, practiced commands with Github</td>
	  </tr>
	  <tr id="even">
	    <td>2</td>
	    <td>3/26 - 4/1</td>
	    <td>Assignment 5 due 3/31</td>
	    <td>First TA meeting, continue with tutorials, decide specialization</td>
			<td>Set up status and webapp site (both hosted with Heroku), continued with tutorials, minimal CAS login functionality, met with Jonathan</td>
	  </tr>
	  <tr>
	    <td>3</td>
	    <td>4/2 - 4/8</td>
	    <td>-</td>
	    <td>Working and linked frontend (i.e. buttons and drop-down lists, basic layout of page), ability to make a request and have it show up on the page</td>
			<td>4/3: we discussed more user scenarios and sketched mockups of different pages (see <a href="https://drive.google.com/open?id=0BxY37nHyyhcjbk5Pd2RrNmlqUlk">1</a> and <a href="https://drive.google.com/open?id=0BxY37nHyyhcjWFNjdzk5bDU5Z3M">2</a>); 4/6 Created mockups of example pages for UI</td>

	  </tr>
	  <tr id="even">
	    <td>4</td>
	    <td>4/9 - 4/15</td>
	    <td>Project Prototype 4/16</td>
	    <td>Very basic functionality for each component (i.e. backend server is running, data can be fetched from database and rendered on webpage)</td>
			<td>Rides can be created and show up in the Open Requests list for airport rides.</td>
		</tr>
	  <tr>
	    <td>5</td>
	    <td>4/16 - 4/22</td>
	    <td>-</td>
	    <td>CAS login implementation</td>
			<td>User NetID is passed through CAS authentication. Email notifications about new ride creation implemented. App UI in process of standardization.</td>
	  </tr>
	  <tr id="even">
	    <td>6</td>
	    <td>4/23 - 4/29</td>
	    <td>Alpha Test 4/28</td>
	    <td>Implement notifications by email (and text); should be able to determine a preliminary measure of project success</td>
			<td>Email notifications implemented; airport, shopping, and other rides have separate open requests pages; invalid inputs to form handled; separate login and logout from CAS login logout implemented; your rides page and drop functionality implemented; UI fixes</td>
		</tr>
	  <tr>
	    <td>7</td>
	    <td>4/30 - 5/6</td>
	    <td>Beta Test 5/5</td>
	    <td>Have independents (users) try it and give feedback, fix corner cases</td>
			<td>Name scraping from princeton.edu homepage and search bar (by destination) implemented</td>
	  </tr>
	  <tr id="even">
	    <td>8</td>
	    <td>5/7 - 5/13</td>
	    <td>Demo Days 5/8 - 5/10</td>
	    <td>Fix more corner cases that arise from demo day</td>
			<td>More extensive user testing, fixed corner cases that arose from demo day and user testing, UI improvements (i.e. better compatibility with mobile)</td>
	  </tr>
	  <tr>
	    <td>9</td>
	    <td>5/14</td>
	    <td>Final Project Due Midnight</td>
	    <td>Submit</td>
			<td>Check!</td>
	  </tr>
	</table>
	</div>
</body>
</html>
