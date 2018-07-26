<?php
   if(!$_SESSION['username']){
    ?>
<script>
   window.location.href="<?php echo pathUrl();?>";
</script>
<?php
   }
require_once 'db.php';
include("view/cjs.php");
?>
<script type="text/javascript">
$(document).ready(function() {
      var section = 's'+app.qs["id"][6];
      var loc0 = app.MData[app.SelecteM].sections[section];
      if (loc0.response1 || loc0.response2) {
		app.GetallResponse1('m7','s9');
      }

      $('#myCarousel2').bind('slid.bs.carousel', function (e) {
        app.showRM();
      });
});
window.onresize = function(){app.showRM();};

app.doneResizing= function(e){
  $('.jqcloud').html('');
   var lo1 = JSON.parse(JSON.stringify(app.WCList1));
   app.WordC(lo1,'my_favorite_latin_words');
   $(".jqcloud, #my_favorite_latin_words").css({"width":"100%"});
}

</script>

<link rel="stylesheet" type="text/css" href="jqcloud/jqcloud.css" />
<script type="text/javascript" src="jqcloud/jqcloud-1.0.4.js"></script>
<link rel="stylesheet" href="css/m7s9p1.css">
<div class="m7s9p1">
   <div class="jumbotron b1">
      <div class="container text-center">
         <br>
         <br>         
         <div class="row">
            <div class="col-sm-12">
               <f><p data--duration="1.5s">MODULE 7 | <span style="color:#f68121">Section 9</span></p></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
               <f><h2>Put it into Practice: High-Value Communication</h2></f>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12">
                <a  class="" href="javascript:app.topScroll('Step1');" style="color:#fff;"><i class="fa fa-angle-down fa-4x dArowh" aria-hidden="true"></i></a> 
            </div>
         </div>
      </div>
   </div>   

  <div id="b1" class="Step1 container text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8">
             <!-- <img src="img/m7s9p2.png" class="img-responsive">		-->
           <?php include"m7s9p2.php";?>			 
         </div>
        <div class="col-sm-2"></div>
      </div>
   </div>

    

	
	
  <div id="all_report" style='display:none;'>	
  <div id="b2" class="container text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-3"></div>
         <div class="col-sm-6">
            <f><h3 class='text-center'>COMMUNICATION ASSESSMENT</h3></f>
			<br/>
			<f><p class='Y1'>How&#x2019;d it go with Tom? Overall, you did pretty well, but there are some areas that could use improvement. Read the Performance Breakdown for more information.</p></f>
			<f><p class='R1'>How&#x2019;d it go with Tom? There were some essential communication opportunities that were missed. Read the Performance Breakdown for more information.</p></f>
			<f><p class='G1'>How&#x2019;d it go with Tom? Overall, you did a great job! Congratulations. Read the Performance Breakdown for more information.</p></f>
			<br/>
			<div id='marks' class='text-center'>70%</div>
			
         </div>
        <div class="col-sm-3"></div>
      </div>
   </div>
	
	<br/>
	
	 <div id="b3" class="container text-center s1bgcol">
      <div class="row text-left">
         <div class="col-sm-2"></div>
         <div class="col-sm-8"><div class="bg1">
         <div class='row'><div class="col-md-12 head"> <f><h4 class='text-center'>PERFORMANCE BREAKDOWN</h4></f></div> </div>    
         <div id="report_details"></div>		 
       <!--  <div class='row'>	
		 <div class='col-xs-2 pd1'><div class='marks1' class='text-center'><p>15</p><span>POINTS</span></div></div>
		 <div class='col-xs-10 pd1'><f><h5>DISTILL AND CONTINUE LISTENING</h5></f>
		 <f><p>Following Tom&#x2019;s interview, you broke down what he was saying to show you understood it and then allowed him to continue speaking. This helps to establish and build rapport as well as provide Tom the opportunity to provide you with valuable information.</p></f>
		 </div>	 
         </div>		 
         <div class='row'>	
		 <div class='col-xs-2 pd1'><div class='marks1 col1' class='text-center'><p>0</p><span>POINTS</span></div></div>
		 <div class='col-xs-10 pd1'><f><h5>AFFIRMATION OF PATIENT&#x2019;S SPECIAL ATTRIBUTES AND ELICITING OF BELIEFS</h5></f>
		 <f><p>You missed the opportunity to find out what makes Tom special and to really discover what led to his desire for opiates. This might have helped inform your decisions on how to approach the issue. Understanding the patient&#x2019;s desires and beliefs will help you learn how to effectively communicate with him or her. </p></f>
		 </div>	 
         </div>	
		 
		 <div class='row'>	
		 <div class='col-xs-2 pd1'><div class='marks1' class='text-center'><p>15</p><span>POINTS</span></div></div>
		 <div class='col-xs-10 pd1'><f><h5>SUMMARIZE AND LEGITIMIZE CONCERNS</h5></f>
		 <f><p>More than anything, patients want to feel understood and taken seriously. You did this for Tom by using the phrase &#x201C;What I hear you saying&#x201D; and rephrasing what he had told you as well as acknowledging the need to get it taken care of. </p></f>
		 </div>	 
         </div>	
		 <div class='row'>	
		 <div class='col-xs-2 pd1'><div class='marks1' class='text-center'><p>15</p><span>POINTS</span></div></div>
		 <div class='col-xs-10 pd1'><f><h5>AFFIRM RESILIENCE</h5></f>
		 <f><p>It&#x2019;s important to celebrate a patient&#x2019;s initiative when he or she discloses positive coping mechanisms. Patients need to feel encouraged to continue and increase their use of these mechanisms as needed, and Tom&#x2019;s participation in yoga is the perfect strategy to help him keep active and combat his pain. In providing Tom assurance of this, you&#x2019;ve helped empower him to take control of his life and health.</p></f>
		 </div>	 
         </div>	
		  <div class='row'>	
		 <div class='col-xs-2 pd1'><div class='marks1 col1 text-center'><p>0</p><span>POINTS</span></div></div>
		 <div class='col-xs-10 pd1'><f><h5>CREATE PARTNERSHIP AND INVITE PARTICIPATION </h5></f>
		 <f><p>When establishing a treatment plan, it&#x2019;s very important to do so collaboratively with the patient. This helps to support buy-in and adherence with the plan and builds trust between the clinician and patient. By dictating the plan without eliciting this participation, it&#x2019;s likely Tom felt brushed off and not highly invested in what you had determined.</p></f>
		 </div>	 
         </div>	
		  <div class='row'>	
		 <div class='col-xs-2 pd1'><div class='marks1' class='text-center'><p>15</p><span>POINTS</span></div></div>
		 <div class='col-xs-10 pd1'><f><h5>TEACHBACK</h5></f>
		 <f><p>Before a patient leaves the office, ask him or her to repeat back your mutually agreed upon plan using their own words. By letting Tom rephrase the plan, you made completely sure that you were understood and that you were both on the same page. If necessary, it would have also allowed you to to clarify or add information where necessary. In addition, Tom didn&#x2019;t feel as though you ended the appointment abruptly without giving him the chance to ask questions or address concerns.</p></f>
		 </div>	 
         </div>	
		 <div class='row'>	
		 <div class='col-xs-2 pd1'><div class='marks1' class='text-center'><p>15</p><span>POINTS</span></div></div>
		 <div class='col-xs-10 pd1'><f><h5>BONUS! - NO INTERRUPTION </h5></f>
		 <f><p>In general, clinicians interrupt their patients&#x2019; opening interview within 18 seconds. Uninterrupted, a patient will discuss his or her concerns and symptoms within two minutes, while Tom&#x2019;s statement lasted less than 40 seconds. Allowing Tom to speak uninterrupted established rapport and helped you garner valuable information that could aid in diagnosis and treatment. Good job allowing him to finish!</p></f>
		 </div>	 
         </div>	
		 -->
		 
		  </div>
         </div>
        <div class="col-sm-2"></div>
      </div>
   </div>
  </div>
	<br/>
	
	
	
   <div class="container text-center s1bgcol">
      <div class="row" id="my-Carousel1">
         <div class="col-sm-2"></div>
         <div class="col-sm-8 ">
            <div class="response1">
               <div class="carouselC1">
                  <br>                 
                  <f><p>What is one take-away you will bring from this exercise into your current or future communications with patients?</p></f> 
                  <f><p>Scroll through user responses.</p></f>
                  <div class="well">
                  <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="false">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                     </ol>
                     <div class="additem carousel-inner" role="listbox">
                     </div>
                      <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                        <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                        <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
                      </a>
                  </div>
                  </div>
               </div>
               
               <div class="act1" >
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="well">
                           <f><h2>Your Perspective</h2></f>
                           <div class="line4"></div>
                           <f><p>What is one take-away you will bring from this exercise into your current or future communications with patients?</p></f>
                            <f><p class="small"><i>Enter your response below to see the response of others like you.</i></p></f>
                           <div class="line4"></div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                      
                     </div>
                     </div>
                  <div class="row">
                     <div class="col-sm-12" >
                        <div  class="navbar-form navbar-center" style="">
                           <div class="input-group" style="width:100%;">
                              <input id="response1Text" type="Search" placeholder="Your response to the question..." class="form-control" />
                              <div class="input-group-btn text-right" style="width:3%;">
                                 <button  onclick="app.Response1(this);" class="btn btn-info">
                                 <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> SUBMIT
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-2"></div>
      </div>
      <br>

   </div>
   
  
   
</div>


<footer class="container-fluid">
         
          <div class="row">
            <div class="col-sm-4 text-left NextBtn">
              <a href="#" onclick="window.location='?id=m7/m7s8p1'"><i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
              <span class="ssp1">MODULE 7 | Section 8</span>
                <span class="sp1"><strong>Care Redesign Case: Cleveland Clinic&#x2019;s...</strong></span></a>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4  text-right NextBtn1">
                <a href="#" onclick="window.location='?id=m7/m7s10p1'"><span class="ssp2">MODULE 7 | Section 10</span>
                <span class="sp2"><strong>Conclusion: High-Value Communication</strong></span>
                <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i></a>
            </div>
          </div>


 <div class="col-md-12 col-sm-12 col-xs-12">            
            <div class="col-md-5 col-sm-4 col-xs-4"></div>
              <div class="col-md-2 col-sm-4 col-xs-4">
                <a target="_blank" href="https://creativecommons.org/licenses/by-nc-nd/2.5/"><img class="img-responsive center-block" src="https://dms-vbhc.s3.amazonaws.com/img/CC.png" width="auto" height="auto"></a>
              </div>
            <div class="col-md-5 col-sm-4 col-xs-4"></div>
          </div>    
      </footer> 




<script>

  $("#my-Carousel1 .additem").on("swipeleft",function(){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $("#my-Carousel1 .carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==l)
	 {
	    $("#my-Carousel1 .carousel-indicators li:nth-child(1)").addClass("active");
	    $("#my-Carousel1 .additem div.item:nth-child(1)").addClass("active");
	 }
	 else{
	     i++;
		 $("#my-Carousel1 .carousel-indicators li:nth-child("+i+")").addClass("active");
	    $("#my-Carousel1 .additem div.item:nth-child("+i+")").addClass("active");
	 }
  });
  $("#my-Carousel1 .additem").on("swiperight",function(){
     var i = $(this).children("div.item.active").index()+1;
	 var l = $(this).children("div.item").length;
	 $("#my-Carousel1 .carousel-indicators li").removeClass("active");
	  $(this).children("div.item").removeClass("active");
     if(i==1)
	 {
	    $("#my-Carousel1 .carousel-indicators li:nth-child("+l+")").addClass("active");
	    $("#my-Carousel1 .additem div.item:nth-child("+l+")").addClass("active");
	 }
	 else{
	     i--;
		 $("#my-Carousel1 .carousel-indicators li:nth-child("+i+")").addClass("active");
	    $("#my-Carousel1 .additem div.item:nth-child("+i+")").addClass("active");
	 }

  });

</script>
