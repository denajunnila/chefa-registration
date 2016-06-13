<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Add additional student  -->
	<script>
	$(document).ready(function(){

	    $("#addChild").click(function(){
	        $("button").before(
	        	'<div class="form-group"><label for="student[0][lastName]">Last Name:</label><input type="text" class="form-control" name="student[0][lastName]" placeholder="Student Last Name"></div><div class="form-group"><label for="student[0][firstName]">First Name:</label><input type="text" class="form-control" name="student[0][firstName]" placeholder="Student First Name"></div><div class="form-group"><label for="student[0][grade]">Grade:</label><input type="text" class="form-control" name="student[0][grade]" placeholder="5"></div><div class="form-group"><label for="student[0][mobilePhone]">Mobile Phone:</label><input type="text" class="form-control" name="student[0][mobilePhone]" placeholder="559-000-0000"></div><div class="form-group"><label for="student[0][email]">Email</label><input type="email" class="form-control" name="student[0][email]" placeholder="john.doe@example.com"></div><br>'
	        );
	    });
	$("#addChild").click(function(){
		        $(".stuSignature").after('<div><div class="form-group studentSignature"><label for="studentname">Student Name:</label><input type="text" class="form-control" name="studentname" placeholder="Type Name"></div><div class="form-group"><label for="studentgrade">Grade:</label><input type="text" class="form-control" name="studentgrade" placeholder="Grade"></div><div class="form-group"><label for="studentsignature">Student Signature:</label><input type="text" class="form-control" name="studentsignature" placeholder="Sign Name"></div><div class="form-group"><label for="studentdate">Date:</label><input type="text" class="form-control" name="studentdate" placeholder="Date"></div></div>'
         );
    });

	});
	</script>
</head>
<body>
	<h2 class="text-center"><em>Christian Home Educators of the Fresno Area (CHEFA)</em></h2>
	<h1 class="text-center">Membership Registration - Renewal 2016/2017</h1>
	<h3 class="text-center">Member Information</h3>

	<form class="form-inline" action="submit.php" method="post">


	  <div class="form-group">
	    <label for="familyLastName">Family Last Name:</label>
	    <input type="text" class="form-control" name="familyLastName" placeholder="Family Last Name">
	  </div>
	  <div class="form-group">
	    <label for="homePhone">Home Phone:</label>
	    <input type="text" class="form-control" name="homePhone" placeholder="559-000-0000">
	  </div>
	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" class="form-control" name="homeEmail" placeholder="jane.doe@example.com">
	  </div>
	  <div class="form-group">
	    <label for="address">Address:</label>
	    <input type="text" class="form-control" name="address" placeholder="123 Street">
	  </div>
	  <div class="form-group">
	    <label for="city">City:</label>
	    <input type="text" class="form-control" name="city" placeholder="City">
	  </div>
	  <div class="form-group">
	    <label for="zip">Zip Code:</label>
	    <input type="text" class="form-control" name="zip" placeholder="12345">
	  </div>

	<p>In order to serve you better, CHEFA is requesting information for each family parent 
		and K-12 student. This information is only for the use of CHEFA and will not be shared 
		with anyone outside of CHEFA leadership. Please provide the names, grades, mobile phone 
		numbers and email addresses for you and all of your homeschooled children (duplicate 
		information does not need to be rewritten).
	</p>

	<fieldset>
		<div>
		<h3>Father</h3>
			<div class="form-group">
			    <label for="fatherLastName">Last Name:</label>
			    <input type="text" class="form-control" name="fatherLastName" placeholder="Father Last Name">		
			</div>
		  	<div class="form-group">
			    <label for="fatherFirstName">First Name:</label>
			    <input type="text" class="form-control" name="fatherFirstName" placeholder="Father First Name">
			</div>
		  	<div class="form-group">
			    <label for="fatherMobilePhone">Mobile Phone:</label>
			    <input type="text" class="form-control" name="fatherMobilePhone" placeholder="559-000-0000">
			</div>
		  	<div class="form-group">
			   <label for="fatherEmail">Email</label>
			    <input type="email" class="form-control" name="fatherEmail" placeholder="john.doe@example.com">
			</div>
		</div>
		<div>
		<h3>Mother</h3>
			<div class="form-group">
			    <label for="motherLastName">Last Name:</label>
			    <input type="text" class="form-control" name="motherLastName" placeholder="Mother Last Name">		
			</div>
		  	<div class="form-group">
		     	<label for="motherFirstName">First Name:</label>
			    <input type="text" class="form-control" name="motherFirstName" placeholder="Mother First Name">
			</div>
		  	<div class="form-group">    
			    <label for="motherMobilePhone">Mobile Phone:</label>
			    <input type="text" class="form-control" name="motherMobilePhone" placeholder="559-000-0000">
			</div>
		  	<div class="form-group">    
			    <label for="motherEmail">Email</label>
			    <input type="email" class="form-control" name="motherEmail" placeholder="john.doe@example.com">
			</div>
		</div>
		<div>
			<h3>Children</h3>
			<div class="form-group">
			    <label for="student[0][lastName]">Last Name:</label>
			    <input type="text" class="form-control" name="student[0][lastName]" placeholder="Student Last Name">		
			</div>
		  	<div class="form-group">
			    <label for="student[0][firstName]">First Name:</label>
			    <input type="text" class="form-control" name="student[0][firstName]" placeholder="Student First Name">
			</div>
		  	<div class="form-group">    
			    <label for="student[0][grade]">Grade:</label>
			    <input type="text" class="form-control" name="student[0][grade]" placeholder="5">
			 </div>
		 	<div class="form-group">  
			    <label for="student[0][mobilePhone]">Mobile Phone:</label>
			    <input type="text" class="form-control" name="student[0][mobilePhone]" placeholder="559-000-0000">
			</div>
		  	<div class="form-group">    
			    <label for="student[0][email]">Email</label>
			    <input type="email" class="form-control" name="student[0][email]" placeholder="john.doe@example.com">
			</div>
		</div>

		<!-- Adding additional student -->
		<div>
			<button type="button" name="addChild" value="addChild" class="btn btn-default" id="addChild">Additional Child</button>

		</div>


	</fieldset>
	<h3><strong>Please check one and complete the information that applies to your school / group: </strong></h3>
		<div class="radio">
		  <label>
		    <input type="radio" name="optionsRadios" id="ips" value="1" checked>
		    IPS-Individual Private School (One family filing own Private School Affidavit)
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="optionsRadios" id="pssp" value="1">
		    PSSP-Private School Satellite Program (One private school affidavit is filed on behalf 
		    of multiple member families)
		  </label>
		</div>
		<div class="radio">
		  <label>
		    <input type="radio" name="optionsRadios" id="supportgroup" value="1">
		    SG-Support Group (Each family is responsible for filing its own affidavit, but support 
		    is offered to member families)
		  </label>
		</div>

		  <div class="form-group">
		    <label for="PsspGroup">PSSP/Group Name:</label>
		    <input type="text" class="form-control" name="PsspGroup" placeholder="PSSP/Group Name">
		  </div>
		  <div class="form-group">
		    <label for="administrator">Administrator:</label>
		    <input type="text" class="form-control" name="administrator" placeholder="Administrator">
		  </div>
	<ol>
		<p><em>As filed with the State of California </em></p>
		<h3><strong>Membership Agreement</strong></h3>
		<p><strong>Parents</strong></p>
		<li>I am a Christian. I am a believer in and a follower of Jesus Christ, the Messiah.
		</li>
		<li>I will cooperate with CHEFA in engaging only Christians in positions of responsibility and leadership.
		</li>
		<li>I understand that CHEFA will operate as a Christian organization according to the principles of Scripture.
		</li>
		<li>I will support CHEFA by conducting myself in a Christian manner while participating with and/or serving 
			members of CHEFA.
			</li>
		<li>I understand that to be a member I must provide a minimum of 51% of my children&rsquo;s education at home 
			(juniors/seniors exempt).
		</li>
		<li>I understand that CHEFA does not accept students as members who participate in, or are enrolled in, a public 
			school system, including Independent Study Programs and/or Charter Schools.
		</li>
		<li>I understand that I am solely responsible for my children&rsquo;s conduct at ALL CHEFA events.</li>
	</ol>
		<h3><strong>Parents and Students</strong></h3>
	<ol>
		<li>I/we have read and agree to honor the CHEFA CODE OF CONDUCT AND DRESS.</li>
		<li>I/we understand that parents are responsible for providing transportation to and from events.</li>
		<li>I/we will not hold CHEFA responsible if a student leaves an event without the knowledge of the CHEFA activity 
			volunteers or with individuals other than those arranged by parents, and
		</li>
		<li>I/we agree to hold CHEFA, its leadership, and its members harmless in the event of any damages or injuries 
			to myself, my family, or property.
		</li>
	</ol><div>
		  <div class="form-group">
		    <label for="parentSignature">Parent Signature:</label>
		    <input type="text" class="form-control" name="parentSignature" placeholder="Type Name">
		  </div>
		  <div class="form-group">
		    <label for="date">Date:</label>
		    <input type="text" class="form-control" name="date" placeholder="Date">
		  </div>
		</div>
		<div class="stuSignature">
		  <div class="form-group">
		    <label for="studentname">Student Name:</label>
		    <input type="text" class="form-control" name="studentname" placeholder="Type Name">
		  </div>
		  <div class="form-group">
		    <label for="studentgrade">Grade:</label>
		    <input type="text" class="form-control" name="studentgrade" placeholder="Grade">
		  </div>
		  <div class="form-group">
		    <label for="studentsignature">Student Signature:</label>
		    <input type="text" class="form-control" name="studentsignature" placeholder="Sign Name">
		  </div>
		  <div class="form-group">
		    <label for="studentdate">Date:</label>
		    <input type="text" class="form-control" name="studentdate" placeholder="Date">
		  </div>
		</div>
	<h3><strong>Membership Benefits</strong></h3>
	<p><strong>Membership dues allow you to receive an HSLDA discount and help to support the following CHEFA activities 
		and benefits:</strong>
	</p>
	<table>
		<tbody>
			 <div class="col-md-4 columns">The Example Newsletter  </div>
			 <div class="col-md-4 columns">Sport&rsquo;s Saturdays </div>
			 <div class="col-md-4 columns">Fine Arts Faire  </div>
			 <div class="col-md-4 columns">Mentor Connection </div>
			 <div class="col-md-4 columns">Locan Library </div>
			 <div class="col-md-4 columns">Graduation ( 12</em><em>th</em><em>)  </div>
			 <div class="col-md-4 columns">Science Faire  </div>
			 <div class="col-md-4 columns">Moms&rsquo; Luncheon/Tea  </div>
			 <div class="col-md-4 columns">Information/Referral Service </div>
			 <div class="col-md-4 columns">Yearbook </em><em>(junior &amp; high school) </div>
			 <div class="col-md-4 columns">Used Book Sale  </div>
			 <div class="col-md-4 columns">Picture Days </div>
			 <div class="col-md-4 columns">Youth Fellowship events </em><em>(CYF)  </div>
			 <div class="col-md-4 columns">CYF Leadership Team </div>
			 <div class="col-md-4 columns">&nbsp;</div>
		</tbody>
	</table>

	<p>(Activity availability may vary based on member volunteer planning and participation)</p>

	<h3><strong>Volunteers</strong></h3>
	<p><strong>Volunteer Sign-up Form - "We Would Just Love to Help!"</strong></p>
	<p> CHEFA is an all-volunteer organization. Your help is needed for these many 
		activities to succeed. Many of the activities are large and can be broken down 
		so everyone does a small part. Without sufficient volunteers, the event(s) will 
		be canceled. If you would like to volunteer for one or many of the things that 
		CHEFA strives to make available to its members, please fill out the form below. 
		Listed below are activities that CHEFA has facilitated in the past but some do 
		not currently have enough volunteers or are new ones that CHEFA would like to offer.

	</p>
	
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
			  <input type="hidden" name="leadership" value="0">
			  <input type="checkbox" name="leadership" value="1"> Leadership

			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
			  <input type="hidden" name="cyfact" value="0">
			  <input type="checkbox" name="cyfact" value="1"> CYF Activities 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="alumniact" value="0">
			  	<input type="checkbox" name="alumniact" value="1"> Alumni Activities
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="considerhomeschool" value="0">
			  <input type="checkbox" name="considerhomeschool" value="1">Considering Homeschooling
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="bonfire" value="0">
			  <input type="checkbox" name="bonfire" value="1"> Bonfire 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="locanlibrary" value="0">
			  <input type="checkbox" name="locanlibrary" value="1"> Locan Library
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="fallfamilykickoff" value="0">
			  <input type="checkbox" name="fallfamilykickoff" value="1"> Fall Family Kickoff
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="christmasparty" value="0">
			  <input type="checkbox" name="christmasparty" value="1"> Christmas Party 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="robotics" value="0">
			  <input type="checkbox" name="robotics" value="1"> Robotics
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="schoolpictures" value="0">
			  <input type="checkbox" name="schoolpictures" value="1">School Pictures
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="cyfaerozone" value="0">
			  <input type="checkbox" name="cyfaerozone" value="1"> CYF Aerozone 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="sportsaturdays" value="0">
			  <input type="checkbox" name="sportsaturdays" value="1"> Sport&rsquo;s Saturdays
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="yearbook" value="0">
			  <input type="checkbox" name="yearbook" value="1">Year Book
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="springsquaredance" value="0">
			  <input type="checkbox" name="springsquaredance" value="1"> Spring Square Dance 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="flagfootball" value="0">
			  <input type="checkbox" name="flagfootball" value="1"> Flag Football (Sept-Oct)
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="usedbooksale" value="0">
			  <input type="checkbox" name="usedbooksale" value="1">Used Book Sale
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="banquet" value="0">
			  <input type="checkbox" name="banquet" value="1"> Banquet 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="soccer" value="0">
			  <input type="checkbox" name="soccer" value="1"> Soccer (Oct-Nov)
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="momtea" value="0">
			  <input type="checkbox" name="momtea" value="1">Mom&rsquo;s Tea
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="seniorsponsor" value="0">
			  <input type="checkbox" name="seniorsponsor" value="1"> Senior Sponsor (couples only) 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="basketball" value="0">
			  <input type="checkbox" name="basketball" value="1"> Basketball (Jan-Feb)
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="chessclub" value="0">
			  <input type="checkbox" name="chessclub" value="1">Chess Club
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="senioractivities" value="0">
			  <input type="checkbox" name="senioractivities" value="1"> Senior Class Activities 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="kickballfrisbee" value="0">
			  <input type="checkbox" name="kickballfrisbee" value="1"> Kickball/Ultimate Frisbee (Feb-Mar)
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="debateclub" value="0">
			  <input type="checkbox" name="debateclub" value="1">Debate Club
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="hsgraduation" value="0">
			  <input type="checkbox" name="hsgraduation" value="1"> High School Graduation 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="tennis" value="0">
			  <input type="checkbox" name="tennis" value="1"> Tennis (Mar-Apr)
			</label>
		</div>
			<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="journalismclub" value="0">
			  <input type="checkbox" name="journalismclub" value="1">Journalism Club
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="nineelevinactivites" value="0">
			  <input type="checkbox" name="nineelevinactivites" value="1"> 9 <sup> th </sup>  - 11 <sup> th </sup>  Grade Activities 
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="fundraising" value="0">
			  <input type="checkbox" name="fundraising" value="1"> Fund Raising
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="fineartsfaire" value="0">
			  <input type="checkbox" name="fineartsfaire" value="1">Fine Arts Faire
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="juniorhighactivities" value="0">
			  <input type="checkbox" name="juniorhighactivities" value="1"> Junior High Grade Activities
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="mentor" value="0">
			  <input type="checkbox" name="mentor" value="1"> Mentor/mentoring
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="dramaclub" value="0">
			  <input type="checkbox" name="dramaclub" value="1">Drama Club
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="elementaryactivities" value="0">
			  <input type="checkbox" name="elementaryactivities" value="1"> Elementary Grade Activities
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="eighthgraduation" value="0">
			  <input type="checkbox" name="eighthgraduation" value="1"> 8 <sup> th </sup>  Grade Graduation
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="sciencefaire" value="0">
			  <input type="checkbox" name="sciencefaire" value="1">Science Faire &shy;&shy;&shy;
			</label>
		</div>
		<div class="col-md-4 columns">
			<label class="checkbox-inline">
				<input type="hidden" name="helpissueshs" value="0">
			  <input type="checkbox" name="helpissueshs" value="1"> Help with High School Issues
			</label>
		</div>
		<div class="col-md-4 columns">&nbsp;</div>	
	</form>
		<label value="newIdea">New Ideas
			<input type="text">
		</label>	
	<p><br /><br /></p>
	<button type="submit" name="mainSubmit" value="submit"class="btn btn-default">Submit</button>
	<p><br /><br /></p>
	<p>CHEFA Youth Fellowship (CYF) offers additional opportunities for CHEFA member students 
		in Grades 7 thru 12 to fellowship and build long-lasting relationships. These activities 
		have included the following in the past: Bonfire (fall), Christmas season event-Laser 
		Tag, Aerozone (winter), Square Dance (spring), and Banquet (spring). Please keep in mind 
		that these activities may vary based on student participation and parental involvement. 
		CHEFA and CYF events are organized entirely by volunteers; therefore, if members do not 
		step forward to implement them, some activities may not occur.
	</p>
	<h2>Membership Manual</h2>
	<p>Christian Home Educators of the Fresno Area (CHEFA) is a network of home educating families 
		who have an organized system for getting information out to the home schooling community. Our 
		purpose is primarily to be a network of communication and support which allows multiple families 
		to get together and be involved in the organization of various activities which encourage 
		quality Christian education through home school in the Fresno area.
	</p>
	<p>CHEFA is an organized not-for-profit group of Christian families which incorporated in 1995 
		and established, through by-laws, a Board of Directors and officers with voting rights. The 
		leadership is made up of those who have volunteered their time to organize activities and 
		oversee the organization. Participation in any event is strictly voluntary. No members are 
		required to attend any meetings or events, however, new member applicants must attend a 
		CHEFA &ldquo;New Member&rsquo;s Meeting.&rdquo; Alumni are exempt, but may attend if they 
		wish.
	</p>
	<p>CHEFA is governed locally by a volunteer Board of Directors (consisting of three to six married 
		couples) who serves CHEFA in various capacities of leadership, as well as, in the functions 
		of a board member.
	</p>
	<h3><strong>Statement of Faith</strong></h3>
	<p>As CHEFA is a Christian organization, CHEFA and its leadership proclaim the following statements 
		of faith:
	</p>
		<ol>
			<li>
			 We believe the Bible to be the inspired, the only infallible, authoritative Word of God. 
			</li>
			<li>
			 We believe that there is one God eternally existent in three persons: Father, Son, and Holy Spirit. 
			</li>
			<li>
			 We believe in the deity of our Lord Jesus Christ, in His virgin birth, in His sinless 
			 life, in His miracles, in His vicarious and atoning death through His shed blood, in 
			 His bodily resurrection, in His ascension to the right hand of the Father, and in His 
			 personal return in power and glory. 
			</li>
			<li>
			 We believe that for the salvation of lost and sinful man, regeneration by the Holy 
			 Spirit is absolutely essential. 
			</li>
			<li>
			 We believe in the present ministry of the Holy Spirit by whose indwelling the Christian 
			 is enabled to live a godly life. 
			</li>
			<li>
			 We believe in the spiritual unity of believers in our Lord Jesus Christ. 
			</li>
		</ol>
	<h3><strong>Membership</strong></h3>
	<p>By becoming a member of CHEFA you agree to abide by the policies and standards set forth. CHEFA is a vine 
		with many branches, whether someone uses one small aspect of what we offer, or whether they use many, we 
		are one. CHEFA is a source of encouragement, and we consider membership a privilege. One way to encourage 
		one another is to have an attitude of cooperation. The spirit we wish to maintain is that of being available 
		to the area home educators while remaining in the spirit of Christian unity.  <strong>&ldquo;May the God 
		who gives endurance and encouragement give you a spirit of unity among yourselves as you follow Christ Jesus, 
		so that with one heart and mouth you may glorify the God and Father of our Lord Jesus Christ.&rdquo; Romans 
		15:5-6</strong> 
	</p>
	<p>We understand that you may not agree with the standards set forth by CHEFA, but to participate in CHEFA events, 
		you must abide by them. We wish to support God&rsquo;s work and remain as a ministry to unify the home schooling 
		community, and to be of help to new home schooling families. We hope to serve you as you serve others. Together, 
		we can work to build God&rsquo;s Kingdom.
	</p>
	<p><br /><br /> 
	<h3><strong>Membership Agreement</strong></h3>
	<p>Each applicant and/or member must agree to the following before membership is granted. If a member is in 
		violation of the agreement, membership can be revoked without refund.
	</p>
		<ol>
			<li>
			 I am a Christian. I am a believer in and a follower of Jesus Christ, the Messiah. 
			</li>
			<li>
			 I will cooperate with CHEFA in engaging only Christians in positions of responsibility and leadership. 
			</li>
			<li>
			 I understand that CHEFA will operate as a Christian organization according to the principles of Scripture. 
			</li>
			<li>
			 I will support CHEFA by conducting myself in a Christian manner while participating with and/or serving 
			 members of CHEFA. 
			</li>
			<li>
			 I understand that to be a member I must provide a minimum of 51% of my children&rsquo;s education at home. 
			</li>
			<li>
			 I understand that CHEFA does not accept students as members who participate in, or are enrolled in, a 
			 public school system, including Independent Study Programs and/or Charter Schools. 
			</li>
			<li>
			 I understand that I am solely responsible for my children&rsquo;s conduct at ALL CHEFA events. 
			</li>
			<li>
			 I agree to hold CHEFA, its leadership, and its members harmless in the event of any damages or injuries 
			 to myself, my children, or property. 
			</li>
		</ol>
	<h3><strong>Release of Liability</strong></h3>
	<p>	As a Christian group, we seek to follow the biblical mandate, which disallows bringing charges 
		against Christian brothers in civil courts. We also seek to be good stewards of the resources 
		and blessings the Lord has provided. Our organization has never had an instance of injury or 
		damages being charged to the group, yet we believe it is best to be sure all members understand 
		our position prior to any mishaps.
	</p>
	<p> We are an organized not-for-profit group of Christian families. The leadership is made up of those 
		who have volunteered their time to organize activities and oversee the organization. Participation 
		in any event is strictly voluntary, with no member ever being required to attend any meeting or event 
		(however, new member applicants must attend a CHEFA &ldquo;New Member Meeting&rdquo;). <strong>Neither 
		CHEFA as an organization, nor its leaders, nor its members are liable for any injuries or damages, 
		whether connected with a CHEFA event or not. </strong>
	</p>
	<p> Student Supervision: At every event, parents are responsible for their own children. Occasionally a 
		member will desire to send his/her child(ren) to an activity with another adult member. We suggest 
		that if you find it necessary to send your child(ren) to an event with another adult, it be one who 
		is comfortable enough with your child to correct him/her if necessary. We encourage you to send a 
		MEDICAL RELEASE form with your child(ren) in case of an emergency. There is a release form provided 
		on the CHEFA website.
	</p>
	<p> Any special guests (grandparents, relative, etc.) who accompany members to any event are under the 
		sole responsibility of that member for behavior, damages, injuries, etc.
	</p>
	<p><strong>When you sign the membership application, you are agreeing to hold CHEFA and its members 
		harmless in the event of any damages or injuries to you, your children, or to your property. </strong>
	</p>
	<h3><strong>Homeschool Basics</strong></h3>
	<p> It is the policy of HSLDA and CHEFA that a student&rsquo;s parent or legal guardian must administer 
		51% or more of the student&rsquo;s education, an exception is held for juniors and seniors in high 
		school.
	</p>
	<p><strong>School Enrollment Options </strong>- Most home educators in California enroll their children 
		in a home education school that has been established by the filing of a <strong>Private School 
		Affidavit (PSA)</strong> with the county Office of Education. Below are three different options 
		for enrolling your children.
	</p>
	<p><strong>Individual</strong><strong> Private School</strong> (One family filing own affidavit): To do 
		this, you will <strong>need to file your own </strong>Private School Affidavit (PSA) and keep 
		ecords that are required by the state. If you choose this option, An Introduction to Home Education 
		(available from CHEA) has all the information you need about how to begin your private home school.&nbsp;
	</p>
	<p><strong>Private School</strong><strong> Satellite Program</strong><strong> (PSP)</strong> (One private 
		school affidavit is filed on behalf of multiple member families): These are private schools which have 
		been established by a home schooling family, as stated above. In addition, they have met other 
		requirements for administrating a private school, and are allowing other families to enroll in their 
		private school. You will be responsible for purchasing your own curriculum (none of these schools 
		provide it), and you will be teaching your child(ren) in your own home. The school will provide support, 
		record keeping, and some socialization opportunities such as park days, field trips, holiday parties, 
		etc. Most of these schools charge tuition to cover such costs as newsletters, insurance and record 
		keeping services.
	</p>
	<p>This was once referred to as Private School Independent Study Program (ISP). However, due to <strong>
		confusion with</strong> <strong>the</strong> <strong>Public </strong><strong>School</strong> <strong>
		Independent Study Program</strong><strong> (ISP), </strong>the Christian Home Educators Association 
		of California (CHEA), California Home School Network (CHN), Home School Association of California (HSC), 
		Home School Legal Defense Association (HSLDA), and Private and Home Educators of California (part of 
		FPM) jointly recommend terminating the use of the term "independent study programs" when referring to 
		multi-family homeschooling situations. It is the California Department of Education&rsquo;s (CDE) position 
		that an "independent study" program, as outlined in the Education Code, can only apply to public school 
		home study programs.
	</p>
	<p><strong>Support Group</strong> (Each family is responsible for filing its own affidavit, but support is 
		offered to member families): This is a group of families who have each filed their own private school 
		affidavit and keep their own records, but still desire to get together occasionally for organized 
		activities.&nbsp; These are usually smaller groups and charge little or no tuition.
	</p>
	<p><strong>Public School</strong><strong> Independent Study Program</strong><strong> (ISP)</strong> are 
		publicly funded or subsidized programs where parents can teach their children at home or the student can 
		complete a self-study public school curriculum with oversight from public school administration. These 
		study programs are not eligible for CHEFA membership.</p>
	<p><strong>Charter schools</strong> are publicly funded elementary or secondary schools that have been 
		freed from some of the rules, regulations, and statutes that apply to other public schools, in exchange 
		for some type of accountability for producing certain results, which are set forth in each charter school's 
		charter. State laws and regulations governing charter schools vary widely. [National Education Association 
	(NEA) website].
	</p>
	<h3><strong>Public School ISP&rsquo;s &amp; Charter Schools</strong></h3>
	<p>It is CHEFA policy that s<strong>tudents enrolled in </strong><strong>publicly funded</strong> 
		<strong>independent study program or Charter schools are </strong><strong>not eligible</strong>
		<strong> for CHEFA membership or participation in its events.</strong> Power and control are an 
		issue when public school officials exercise authority over home schooling parents enrolled in 
		their ISP&rsquo;s by bringing them in line with requirements and regulations applicable to the 
		public schools.
	</p>
	<h3><strong>Legal Protection</strong></h3>
	<p>Home educators in California have enjoyed considerable freedom educating their children.&nbsp; 
		However, the legal climate in California can vary from school district to school district and could 
		change statewide at any time. <strong>We highly recommend you join Home School Legal Defense 
		Association (HSLDA).</strong> Members of CHEFA are eligible to receive a discount for HSLDA 
		dues. Learn more about HSLDA at their web site, www.hslda.org
	</p>
	<h3><strong>CHEFA Events</strong></h3>
	<p>Because we are a network, CHEFA depends on its membership to volunteer in various capacities to make 
		events possible. Being a CHEFA member entitles you to receive our newsletter publications, and the 
		ability to participate in CHEFA sponsored events.
	</p>
	<h3><strong>Planning Meeting</strong></h3>
	<p>A planning meeting for the year&rsquo;s upcoming CHEFA activities is held in June, July or August. 
		At this meeting the budget is presented by the leadership team. All those who have taken leadership 
		positions within CHEFA and all member PSSP/Support Group leaders are asked to attend the planning 
		meeting, however all CHEFA member are welcomed and encouraged to attend.
	</p>
	<h3><strong>Public Events</strong></h3>
	<p>Some of the events offered by CHEFA are open to the greater home educating community. You are welcome 
		to invite fellow home educators who may not be members to attend or take advantage of these 
		events/functions of CHEFA. CHEFA also encourages families who are considering home educating their 
		children to attend some of the &ldquo;Open&rdquo; events.
	</p>
	<h3><strong>Services and Activities Currently Offered</strong></h3>
	<p>There are several activities and services that CHEFA offers every year. All but six services are open 
		to CHEFA members only. Most of the activities only exist if someone volunteers to lead them. Here is 
		a list of the activities and services currently offered by CHEFA:
	</p>
	<div>
		<div class="col-md-6 columns">
			<div class="row">
				<div class="col-md-6 columns">
					Considering Homeschooling
				</div>
				<div class="col-md-6 columns">
					Open
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">
					New Homeschooler&rsquo;s Contact
				</div>
				<div class="col-md-6 columns"> 
					Open
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">
					Used Curriculum Sale 
				</div>
				<div class="col-md-6 columns">
					Open
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">
					PSP &amp; Support Group Referrals 
				</div>
				<div class="col-md-6 columns">
					Open
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">
					Attendance at Fine Arts Faire 
				</div>
				<div class="col-md-6 columns">
					Open
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">
					Attendance at Graduation 
				</div>
				<div class="col-md-6 columns">
					Open
				</div>
			</div>
		</div>
		<div class="col-md-6 columns">
			<div class="row">
				<div class="col-md-6 columns">
				  HSLDA Discount 
				</div>
				<div class="col-md-6 columns">
					  Members 
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns"> 
					  Sports Saturdays 
				</div>
				<div class="col-md-6 columns">
					  Members  
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">
					  School Pictures
				</div>
				<div class="col-md-6 columns"> 
					  Members 
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">
					  Fine Arts Faire
				</div>
				<div class="col-md-6 columns"> 
					  Members 
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns"> 
					  Mom&rsquo;s Luncheon/Tea 
				</div>
				<div class="col-md-6 columns">
					  Members
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">  
					  Science or History Faire 
				</div>
				<div class="col-md-6 columns">
					  Members 
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns"> 
					  8th &amp; 12th Grade Graduation 
				</div>
				<div class="col-md-6 columns">
					  Members
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">  
					  Newsletter 
				</div>
				<div class="col-md-6 columns">
					  Members 
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns"> 
					  Yearbook 
				</div>
				<div class="col-md-6 columns">
					  Members
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 columns">  
					  CYF Activities 
				</div>
				<div class="col-md-6 columns">
				  	Members
				</div> 
			</div>
		</div>	
	</div>
	<h3><strong>Code of Conduct &amp; Dress</strong> (<strong>See Attachment A</strong>)</h3>
	<p>We, the families of CHEFA, represent the home educating community and, most importantly, our Lord
		Jesus Christ, to those around us. In recognition of that, we should behave in a manner consistent 
		with the instruction presented in God&rsquo;s Word. We understand that you may not agree with the 
		standards set forth by CHEFA, but to participate in CHEFA and CYF activities you must abide by these 
		standards.
	</p>
	<p>All students are expected to maintain high standards of conduct. They shall comply with all CHEFA 
		regulations and submit to the authority of any adult in charge, teachers, and board members. <strong>
		All parents and students</strong>, <strong>by virtue of membership, have accepted the Code of Conduct 
		and Dress, and have agreed to comply</strong>. Students are expected to dress modestly at all CHEFA 
		related events.
	</p>
	<p><em><strong>In situations where the nature of dress is not specifically covered in a detailed manner, 
		the adults in charge, who have been given authority by the CHEFA board, reserve the right to use their 
		own discretion in determining the appropriateness of the attire or behavior.</strong></em> <em>CHEFA 
		reserves the right to ask anyone to leave a CHEFA event upon the violation of these standards. Parents 
		are expected to enforce these standards at all CHEFA functions</em><em>.</em>
	</p>
	<p><br /><br /></p>
	<h3><strong>CHEFA Youth Fellowship (CYF)</strong></h3>
	<p>CHEFA Youth Fellowship (CYF) offers additional opportunities for CHEFA member students in Grades 7 thru 
		12 to fellowship and build long-lasting relationships. These activities have included the following in 
		the past (activities vary
	</p>
	<p>based on student participation and parental involvement):</p>
	<p>Bonfire (fall), a Christmas season event, Broomball or Aerozone (winter), Square Dance (spring), and 
		Banquet (spring). Occasionally, CHEFA will organize special classes for CYF students. CHEFA does not 
		always publish CYF classes or activities.
	</p>
	<p>In order to participate in CYF activities, the student&rsquo;s family must be a current member of CHEFA, 
		be in Grades 7-12, and must not be enrolled in a public school system program, either traditional, 
		independent study, or a charter school.
	</p>
	<p>Even though CYF is an entity of CHEFA, students must acknowledge they agree to adhere to the CHEFA Code 
		of Conduct and Dress. This form is available in the CHEFA membership packet.
	</p>
	<h3><strong>CYF Leadership Team</strong></h3>
	<p>The CYF Leadership Team is small group of CYF student representatives who work with parent sponsors and 
		CYF Directors to brainstorm, plan, organize, and implement CYF activities and events. These student 
		representatives act as liaisons between their fellow classmates and the CHEFA board members, providing 
		activity ideas of the students. The CYF-Leadership Team consists of 6 to 8 students, preferably 1 
		boy &amp; 1 girl from the Senior, Junior &amp; Sophomore Class who represent the larger CYF group 
		(7th &ndash; 12th grades).
	</p>
	<p>Qualifications of Student Leaders</p>
	<ul>
		<li>
			Must be in 10<sup>th</sup>, 11<sup>th</sup>, or 12<sup>th</sup> grade next school year.
		</li>
		<li>
			Must be previously active and involved in CHEFA CYF activities.
		</li>
		<li>
			Be available to help and participate in the functions of CYF and follow through until 
			completion.
		</li>
		<li>
			Must be willing to work in a team of student leaders.
		</li>
		<li>
			Must be a positive role model and adhere to the CHEFA Code of Conduct and Dress.
		</li>
	</ul>
	<h3><strong>CHEFA Board and Leadership </strong>(<strong>See Attachment B</strong>)</h3>
	<p>As a ministry, CHEFA is completely run by volunteers, and the leadership team is filled with 
		individuals who desire to further the cause of private Christian Home Education. The role of the 
		leadership team is to help those volunteers who have accepted responsibility for the different 
		events, to administrate CHEFA funds, set and enforce CHEFA policies, to oversee CYF activities, 
		to maintain communication with CHEA of California, and to help new home school families seeking 
		information about home education in the Fresno area. The leadership team is comprised of husband 
		and wife teams that volunteer to take responsibility for board positions. As positions become 
		available, opportunity will be given for others to volunteer. If you would be interested in filling 
		a position, please contact someone on the leadership team.
	</p>
	<h3><strong>Requirements for CHEFA Board and Leadership:</strong></h3>
	<ul>
		<li>Both husband and wife must be Christians, believers in and followers of Jesus Christ. They must agree 
			with and sign the CHEFA agreement letter and statement of faith.
		</li>
		<li>They must be able to make decisions. Some decisions will not always be popular with everyone. They 
			need to be open-minded enough to hear each side of every conflict of policy change, and yet allow 
			the Holy Spirit to guide in each decision. The team comes together to make all final decisions.
		</li>
		<li>Commit for a minimum of two years.
		</li>
		<li>
		Agree to attend all meetings that require their presence.
		</li>
		<li>Have the capability and the knowledge to manage the responsibility of the positions they will be
			filling.
		</li>
	</ul>
	<h3><strong>CHEFA Success</strong></h3>
	<p>The ultimate success of CHEFA will depend on God&rsquo;s purpose for it and the quality of its 
		volunteers.
	</p>
	<p>&ldquo;<em><strong>Set an example for the believers in speech, in life, in love, in faith and in 
		purity.&rdquo; 1 Timothy 4:12</strong></em>
	</p>
	<p><strong>Attachment-A</strong></p>
	<h3><strong>CODE of CONDUCT and DRESS</strong></h3>
	<p>We, the families of CHEFA, represent the home educating community and, most importantly, our Lord 
		Jesus Christ, to those around us. In recognition of that, we should behave in a manner consistent 
		with the instruction presented in God&rsquo;s Word. We understand that you may not agree with the 
		standards set forth by CHEFA, but to participate in CHEFA and CYF activities you must abide by these 
		standards.
	</p>
	<p>Goal Statement &ndash; All parents and students are expected to maintain high standards of conduct. 
		They shall comply with all CHEFA regulations and submit to the authority of any adult in charge, 
		teachers, and board members. <strong>All parents and students</strong>, <strong>by virtue of 
		membership, have accepted the Code of Conduct and Dress Code, and have agreed to comply</strong>. 
		Students are expected to dress modestly at all CHEFA related events.
	</p>
	<h3><strong>As a member of CHEFA/CHEFA Youth Fellowship:</strong></h3>
	<ul>
		<li>I will strive to be an example of Christ-like character in word, deed and conduct.
		</li>
		<li>I will act and speak in a manner worthy of God who calls me. I understand that unkind remarks, 
			profanity, coarse jokes, conversation involving occult or sexual situations, or other language 
			unbecoming of a Christian is unacceptable at CHEFA activities (1 Thessalonians 2:12; Eph 4:1; 5:4).
			
		</li>
		<li>I will encourage wholesome friendships.
		</li>
		<li>I will look upon fellow students as brothers and sisters in Christ and refrain from demonstrating 
			romantic personal affection at all CHEFA activities. I understand that all CHEFA activities are 
			non-dating events. (Gal 5:24; Rom 12:10; Eph 5:3).
		</li>
		<li>I will have an attitude of compassion for the differences, needs or disabilities of others. 
			(Matt 7:12; James 2:1-9; Gal 5:22-23).
		</li>
		<li>I understand that the use or possession of alcoholic beverages, tobacco products, or weapons during 
		any CHEFA activity is prohibited (I Cor. 6:19; Matt 5:16; Gal. 5:19-21).
		</li>
		<li>I will arrive on time for classes offered by CHEFA.
		</li>
		<li>As a young man\woman, I will purpose to dress in a way that will bring glory to God and my family. 
			I will strive to conduct myself in dress and deed in a manner that will not cause my brother to 
			stumble. Clothing should draw attention to the face, not the body (I Tim 2:9-10; I Cor. 8:9, 6:20; 
			Exo 20:12).
		</li>
	</ul>
	<p>GIRLS:</p>
	<ul>
		<li>Dresses and tops must be worn that cover undergarments.
		</li>
		<li>No backless or strapless tops, spaghetti straps, bare midriffs, or revealing necklines. At no time 
		should skin be visible on the front or back of the midriff.
		</li>
		<li>Girls are allowed to wear shorts which are longer than her extended fingertips when her arms are at 
		her side. All skirts and dresses should cover the knee, regardless of leggings or shorts, with no slits 
		revealing leg above the knee. Sheer material is not considered coverage. <em>Why can shorts be shorter 
		than skirts? </em>A skirt that hits above the knee is liable to twirl up at dances or be too short during 
		certain movements such as bending over or sitting on the floor. Many of our events involve games, such 
		as volleyball, or dancing<em>.</em>
		</li>
	</ul>
	<p>BOYS:</p>
	<ul>
		<li>Pants must cover undergarments. Also, for boys, shorts may be worn which are longer than his extended 
			fingertips when his arms are at his side.
		</li>
		<li>Shirts must be worn at all times during CHEFA classes or events.
		</li>
	</ul>
	<p>BOTH BOYS AND GIRLS:</p>
	<ul>
		<li>No clothing articles, belt buckles, or pins advertising tobacco, alcohol, or that suggest lewd, 
		violent, or improper language or gang related symbols are allowed.
		</li>
		<li>No gang or punk-like attire.
		</li>
		<li>Hair should be neat, clean, and well groomed.
		</li>
	</ul>
	<p>In situations where the nature of dress is not specifically covered in a detailed manner, the adults 
		in charge, who have been given authority by the CHEFA board, reserve the right to use their own 
		discretion in determining the appropriateness of the attire or behavior. CHEFA adults should address 
		dress code concerns only with students of the same sex. Parents of the youth involved should also be 
		spoken to by the concerned adult, preferably at the time of the infraction. Any student who violates 
		the dress code, and especially those who do so repeatedly, may be temporarily suspended by the board 
		from CHEFA activities in order to keep chaperoning a pleasant experience for adults involved. CHEFA 
		reserves the right to ask anyone to leave a CHEFA event upon the violation of these standards. Parents 
		are expected to enforce these standards at all CHEFA functions.
		</p>
	<h3><strong>CHEFA Banquet Attire and Conduct Code</strong></h3>
	<p>We look forward to hosting the High School Banquet honoring our seniors this year! The purpose of the 
		Banquet is to provide an opportunity for our students to come together while honoring the Senior Class. 
		It is our sincere desire to provide a safe and wholesome atmosphere for this event.
	</p>
	<p>In keeping with the purpose of the Banquet, wholesome friendships are encouraged between young men and 
		oung ladies. Students are to look upon one another as brothers and sisters in Christ and refrain from 
		demonstrating personal affection. <strong>As with all CHEFA events, this is a non-dating event.</strong>
	</p>
	<p>We would like to thank those parents who, year after year, go to considerable lengths to make sure that 
		their son or daughter is appropriately dressed. The CHEFA Board does not desire to set our standards 
		unattainably high. Please know that we have prayed at length over this dress code.
	</p>
	<p><strong>Gentlemen&rsquo;s Attire:</strong> A dress shirt, necktie and dress pants. A jacket would be 
		nice, but is not mandatory.
	</p>
	<p><strong>Ladies&rsquo; Attire:</strong> A dress is recommended. Please keep MODESTY in mind with these 
		guidelines:
	</p>
	<ul>
		<li>If you choose a shorter dress over a long dress, it must long enough to cover the knee with no slits 
			revealing leg above the knee. If material needs to be added to your dress, it must be a solid fabric. 
			Sheer or nude (skin-colored) material is not considered coverage. No tight-fitting, strapless or 
			backless dresses. At no time should skin be visible on the front or back of the midriff.
		</li>
		<li>If you need to add straps, they must be a solid material. Sheer or nude (skin-colored) material is not 
			considered coverage.
		</li>

	<li>Spaghetti straps will be permitted.</li>
	<li>No halter dresses.</li>
	<li>No plunging necklines or low-cut dresses that reveal cleavage.</li>
	<li>Appropriate undergarments must be worn.</li>
	<li>Dresses must meet these standards without a shawl or wrap.</li>
	</ul>
	<p><em>In order to keep the evening a positive experience, we ask that all attendees adhere to the above 
		standards for dress. For the sake of all CHEFA members, these standards will be enforced by asking 
		any &ldquo;non-adherent&rdquo; student to change before the event. CHEFA is a Christian organization, 
		and our dress and conduct should reflect what we believe. </em><em><strong>If you are in doubt 
		regarding your student&rsquo;s attire, please contact any Board member.</strong></em>
	</p>
	<p>The use of iPods and other such electronic devices is prohibited at the Banquet. The use of cell phones 
		is discouraged. Please encourage your student to refrain from using them at any time during the evening. 
		They are very distracting, and out of courtesy, we ask that they remain out of sight and set on 
		&ldquo;vibrate&rdquo; or turned off.
	</p>
	<p>This event is chaperoned and we are looking forward to a wonderful evening! Thank you for your support 
		and cooperation.
	</p>
	<p>Attachment-B</p>
	<h3><strong>CHEFA Board and Leadership 2016-2017</strong></h3>
	<h3><strong>Board of Directors:</strong> Not less than 6 (3 couples) and not more than 12 (6 couples) 
		Directors
	</h3>
	<table>
		<tbody id="positions" class="container-fluid">
			 <div class="row">
				<div class="col-md-4 columns">

					<p><strong>President/Secretary:</strong></p>
					<p><strong>Steve &amp;Terrie Spalding</strong></p>
					<p>3338 E. Griffith Way</p>
					<p>Fresno, CA 93726</p>
					<p>(559)225-8212</p>
					<p><a>yearbook@chefa.org</a></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">
					<p><strong>Membership Directors:</strong></p>
					<p><strong>Position available</strong></p>
					<p><a>membership@chefa.org</a></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">
					<p><strong>Finance Directors:</strong></p>
					<p><strong>Position available</strong></p>
					<p><a>treasurer@chefa.org</a></p>
					<p><br></p>
				</div>
			</div>	
			<div class="row"> 
				<div class="col-md-4 columns">
					<p><strong>New Membership:</strong></p>
					<p><strong>Craig &amp; Elizabeth Hiett</strong></p>
					<p>2561 E Skyview Ave</p>
					<p>Fresno, CA 93720</p>
					<p>(559) 323-1712</p>
					<p><a>hietts@chefa.org</a></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">
					<p><strong>CYF Directors:</strong></p>
					<p><strong>Kevin &amp; Jacie Shields</strong></p>
					<p>9135 E North Ave</p>
					<p>Sanger, CA 93657</p>
					<p><a>CYF@chefa.org</a></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">&nbsp;</div>
			 </div>
		</tbody>
	</table>
	<h3><strong>Other Leadership Positions:</strong></h3>
	<table>
		<tbody id="positions" class="container-fluid">
			 <div class="row">
				<div class="col-md-4 columns">
					<p><strong>Newsletter Editor</strong></p>
					<p><strong>Emily Baker</strong></p>
					<p><a><strong>newsletter@chefa.org</strong></a></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">

					<p><strong>School Pictures</strong></p>
					<p><strong>Naomi Kent</strong></p> 
					<p><strong>Deeply Rooted Photography</strong></p>
					<p><a><strong>naomi@deeplyrootedphotography.com</strong></a></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">
					<p><strong>Webmaster</strong></p>
					<p><strong>Open</strong></p>
					<p><br></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 columns">
					<p><strong>Sports Saturday Coordinator</strong></p>
					<p><strong>Kevin Shields</strong></p>
					<p><a>CYF@chefa.org</a></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">
					<p><strong>Alumni</strong></p>
					<p><strong>Open</strong></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">
					<p><strong>New Member Coordinator</strong></p>
					<p><strong>Craig and Elizabeth Hiett </strong></p>
					<p><a>hietts@chefa.org</a></p>
					<p><br></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 columns">
					<p><strong>Yearbook</strong></p>
					<p><strong>Paula Hall</strong></p>
					<p><a><strong>yearbook@chefa.org</strong></a></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">
					<p><strong>Considering Homeschooling</strong></p>
					<p><strong>Elizabeth Hiett</strong></p>
					<p><a><strong>hietts@chefa.org</strong></a></p>
					<p><br></p>
				</div>
				<div class="col-md-4 columns">
					<p><strong>History or Science Faire Coordinator </strong></p>
					<p><strong>Ray &amp; Brooke Dressel</strong></p>
					<p><br></p>
				</div>
			 </div>
			 <div class="row">
				<div class="col-md-4 columns">
					<p><strong>Creative Arts Faire Coordinator </strong></p>
					<p><strong>Chuck and Anna Padilla</strong></p>
					<p><a><strong>capsurf5@earthlink.net</strong></a></p>
					<p><br></p>				
				</div>
				<div class="col-md-4 columns">&nbsp;</div>
				<div class="col-md-4 columns">
					<p><strong>Librarian</strong></p>
					<p><strong>Robin Lee</strong></p>
					<p><a>Leeadd123@aol.com</a></p>
					<p><br></p>
				</div>			 
			 </div>			 
		</tbody>
	</table>
	<p>When making calls to the above-named people <strong>please call after 2:00 p.m</strong>.</p>
	<p>Learn more about CHEFA at www.chefa.org or by contacting the New Homeschooler Coordinator or any board member.</p>
	<p><br /><br /></p>	
</body>
</html>