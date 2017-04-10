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
	<li> Annie Chen - anniec@princeton.edu </li>
	<li> Rani Jaiswal - rjaiswal@princeton.edu  </li>
	<li> Cindy Liu - cindyliu@princeton.edu </li>
	<li> Alice Tang - xt6@princeton.edu </li>
	</ul>
	<h3> <a href="https://docs.google.com/document/d/19IrN09ag0GRdlq_4Jyv789RsXCkZxkTT3WL-biAkqLU/edit?usp=sharing">Design Document</a></h3>

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
	    <th>Milestone(s)</th>
			<th>Updates</th>
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
			<td></td>
		</tr>
	  <tr>
	    <td>5</td>
	    <td>4/16 - 4/22</td>
	    <td>-</td>
	    <td>CAS login implementation</td>
			<td></td>
	  </tr>
	  <tr id="even">
	    <td>6</td>
	    <td>4/23 - 4/29</td>
	    <td>Alpha Test 4/28</td>
	    <td>Implement notifications by email (and text); should be able to determine a preliminary measure of project success</td>
			<td></td>
		</tr>
	  <tr>
	    <td>7</td>
	    <td>4/30 - 5/6</td>
	    <td>Beta Test 5/5</td>
	    <td>Have independents (users) try it and give feedback, fix corner cases</td>
			<td></td>
	  </tr>
	  <tr id="even">
	    <td>8</td>
	    <td>5/7 - 5/13</td>
	    <td>Demo Days 5/8 - 5/10</td>
	    <td>Fix more corner cases that arise from demo day</td>
			<td></td>
	  </tr>
	  <tr>
	    <td>9</td>
	    <td>5/14</td>
	    <td>Final Project Due Midnight</td>
	    <td>Submit</td>
			<td></td>
	  </tr>
	</table>
	</div>

	<h3> Elevator Pitch </h3>
	<p>Have you ever looked for a last-minute carpool to the airport? Do you get annoyed by listserv emails looking for carpools to the airport?
	Did you know it can actually be cheaper to carpool to the airport than to take NJTransit? Are you an independent student interested in going grocery
	shopping, but don't want to wait for the Weekend Shopper? PrincetonPool is a webapp that will help you search for carpools <strong><em>with other
	Princeton	students only</em></strong>. Just tell us <strong>where you want to go</strong>, <strong>when you want to go</strong>,
	<strong>how many empty seats you have for your ride</strong>, and we'll pool you into a group!</p>
	<h3> Demo Slides </h3>
	<h3> Final Document </h3>
</body>
</html>
