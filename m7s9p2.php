<link rel="stylesheet" href="css/m7s9_style.css">
<script type="text/javascript" src="js/m7s9_script.js"></script>

<div class='interactive interactive_bg' style="max-width:750px; max-height:574px;  margin:0 auto;">
<div class='col-sm-12'>
<div id='Konck'>
  <img src="img/1.jpg" class="img-responsive" style='cursor:pointer;'/>
</div>

<div class='col-sm-12' id='HiTom'>
  <div class="char-center"><center><img src="img/Character.png" class="img-responsive"/></div>
  <div class="col-sm-6 col-sm-offset-3 col-sm-onset-2">
 <div id="TomStart" class='bot1'> 
 <div class="bt1 bt-round  top1">GREET TOM</div>
 </div> </div>
 <!-- <img src="img/2.jpg" class="img-responsive" style='cursor:pointer;'/>-->
</div>

<div class='col-sm-12' id='HiTom2'>
  <div class="char-left"><img src="img/Character.png" class="img-responsive" /></div>
  <div class="bubble">
  <div class="dr_box1 sb8_dr">Hey Tom, <br/>
How're you doing?<br/>
What brings you in today?</div>
 <!-- <img src="img/3.jpg" class="img-responsive" style='cursor:pointer;'/>-->
  <br/>
 <!--<span class='wait' id='skip0'>Continue</span>-->
</div></div>

    
  <div id='Tom_story'>
	<div id='story'>
	  <div class="char-left"><img src="img/char1.png" class="img-responsive" /></div>
	  <div class="bubble">
	<div class="box1 sb7">
	I'M JUST IN SO MUCH PAIN. I WAS
IN A CAR ACCIDENT A COUPLE OF
YEARS AGO THAT BROKE MY
COLLARBONE AND FRACTURED MY
SPINE. EVER SINCE THEN, EVEN
WITH ALL THE SURGERIES AND
EVERYTHING, I'VE HAD THIS PAIN
THAT'S, LIKE, ALL DAY EVERY DAY.
I'VE BEEN ON AND OFF
MEDICATIONS, AND I JUST FEEL
LIKE I NEED SOMETHING
STRONGER…
	 </div>
	  </div>

	  <!--<img src="img/4.jpg" class="img-responsive" />-->
	  <div class='bot1'>
	    <div class="col-sm-6">
		<div id="intrupt_continue" class="bt1 bt-round">LET TOM CONTINUE</div>
		</div><div class="col-sm-6">
        <div id="intrupt" class="bt1 bt-round">I’M SORRY TO HEAR THAT.  LET’S TALK ABOUT YOUR OPTIONS.</div>
        </div>
    </div>		  
	</div>
  </div>
  
    <div id='Tom_story2'>
		 <div class="char-left"><img src="img/char1.png" class="img-responsive" /></div>
	  <div class="bubble">
	<div class="box1 sb7">
...I CAN'T MANAGE WITH THIS. I'VE
GOT A WIFE, TWO KIDS, AND
THEY'RE BASICALLY GROWING UP
WITHOUT ME BECAUSE I CAN'T
PLAY WITH THEM. I BARELY GET
OFF THE COUCH WHEN I'M HOME,
AND I CAN'T CONCENTRATE AT
WORK. DOCTORS DON'T SEEM TO
KNOW WHAT TO DO WITH ME.

<br/>THEY CAN'T PINPOINT WHAT'S
CAUSING THE PAIN, AND THEY
DON'T WANT TO GIVE ME MORE
THAN ACETAMINOPHEN, BUT WHAT
AM I SUPPOSED TO DO?
I CAN'T LIVE LIKE THIS. I NEED
SOMETHING STRONGER.
	 </div>
	 <br/>
	  <span class='wait' id='skip'>Continue</span>
	  </div>
	 <!-- <img src="img/5.jpg" class="img-responsive" />-->
	</div>
	
     <div id='Tom_story3'>
	  <div class="char-left"><img src="img/sad.png" class="img-responsive" /></div>
	  <div class="bubble">
	  <div class="circular-sb">I WASN'T DONE YET.</div>
	  <div class="circle3"></div>
      <div class="circle4"></div>
	   <br/>
	  <span class='wait' id='skip01'>Continue</span>
	  </div>
	  <!--<img src="img/6.jpg" class="img-responsive" />-->
	</div>
	
  <div id='First_step' class="row top-padding">
  
             <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="1" class="bt2 bt-round" onclick="app_2.first_click(1)">I CAN UNDERSTAND HOW THIS MUST BE INCREDIBLY FRUSTRATING FOR YOU, NOT ONLY TO BE IN PAIN BUT TO HAVE IT AFFECT YOUR FAMILY LIFE. TELL ME MORE.</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="2" class="bt2 bt-round" onclick="app_2.Second_click(2)">OPIATES HAVE BEEN SHOWN NOT TO BE HELPFUL WITH CHRONIC PAIN, AND I DON&#x2019;T THINK THEY&#x2019;D BE GOOD FOR YOU.</div></div>'
                sponsorList[2]='<div class="col-sm-4 sponsor"><div id="3" class="bt2 bt-round" onclick="app_2.third_click(3)">I&#x2019;VE LOOKED AT YOUR CHART, AND YOU&#x2019;VE HAD IMAGING. I DON&#x2019;T SEE ANYTHING THERE THAT&#x2019;S CAUSING YOUR PAIN.</div></div>'           

                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
			<!--
         <div class="col-sm-4">
		<div id="1" class="bt2 bt-round" onclick="app_2.first_click(1)">
		I CAN UNDERSTAND HOW THIS MUST BE INCREDIBLY FRUSTRATING FOR YOU, NOT ONLY TO BE IN PAIN BUT TO HAVE IT AFFECT YOUR FAMILY LIFE. TELL ME MORE.</div>
		 </div><div class="col-sm-4">
		<div id="2" class="bt2 bt-round" onclick="app_2.Second_click(2)">OPIATES HAVE BEEN SHOWN NOT TO BE HELPFUL WITH CHRONIC PAIN, AND I DON'T THINK THEY'D BE GOOD FOR YOU.</div>
		 </div><div class="col-sm-4">
		<div id="3" class="bt2 bt-round" onclick="app_2.third_click(3)">I'VE LOOKED AT YOUR CHART, AND YOU'VE HAD IMAGING. I DON'T SEE ANYTHING THERE THAT'S CAUSING YOUR PAIN.</div>
		</div>
		-->
  </div>
  
  
  <div id='glad'>
    <div class="char-left"><img src="img/Smile.png" class="img-responsive" /></div>
	  <div class="bubble" id='expiration'>
	  <div  class="circular-sb">I'M SO GLAD YOU'RE TAKING ME SERIOUSLY!</div>
	  <div class="circle3"></div>
      <div class="circle4"></div>
	   <br/>
	  <span class='wait' id='skip1'>Continue</span>
	  </div>
	 <div class="bubble" id='expiration_txt'>
	 <div class="box1 sb7">I love any time I get to spend with my kids. Tommy's just getting into baseball, and I want to be able play catch
with him. I feel like if I can't play with them and be a part of their lives, what good am I? This time is so valuable. I need these meds so I don't miss out.</div>
 <br/>
	  <span class='wait' id='skip2'>Continue</span>
	 </div>
  </div>
  
  
  <div id='glad1'>
     <div class="char-left"><img src="img/char1.png" class="img-responsive" /></div>
	 <div class="bubble">
	 <div class="box1 sb7">You don't understand how this is affecting my life and my family. I have friends on opiates and they seem to work for them!</div>
	 	<br/>
	<span class='wait' id='skip3'>Continue</span>
	 </div>
  </div>
  
  <div id='glad2'>
     <div class="char-left"><img src="img/angry.png" class="img-responsive" /></div>
	 <div class="bubble">
	<div class="circular-sb">Great! Another doctor who isn't going to listen to me. <br/>Just because you don't see something doesn't mean my pain isn't real. My pain is real!
  </div>
	<div class="circle3"></div>
    <div class="circle4"></div>
	<br/>
	<span class='wait' id='skip4'>Continue</span>
	 </div>
  </div>
  
  <div id='Second_step' class="row top-padding">
               <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green2(1)">Yes, I love playing with my kids, too, and I want to help you get back to it. What do you think would help with this pain?</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_2" class="bt2 bt-round" onclick="app_2.Yellow2(2)">Would you like to hear more about pain and effective ways to manage it?</div></div>'
                sponsorList[2]='<div class="col-sm-4 sponsor"><div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong2()">Opiates are dangerous. Have you heard that there&#x2019;s currently an opiate epidemic?  I don&#x2019;t prescribe them for this.</div></div>'           

                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
      <!-- <div class="col-sm-4">
		<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green2(1)">Yes, I love playing with my kids, too, and I want to help you get back to it. What do you think would help with this pain?</div>
		</div><div class="col-sm-4">
		<div id="step2_2" class="bt2 bt-round" onclick="app_2.Yellow2(2)">Would you like to hear more about pain and effective ways to manage it?</div>
		</div><div class="col-sm-4">
		<div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong2()">Opiates are dangerous. Have you heard that there's currently an opiate epidemic?  I don't prescribe them for this.</div>
		</div>
		-->
  </div>
  <div id='Second_step_1' class="top-padding">
   <div class="col-sm-2"> </div>
                <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor "><div id="step2_2" class="bt2 bt-round" onclick="app_2.Yellow2(2)">Would you like to hear more about pain and effective ways to manage it?</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong2()">Opiates are dangerous. Have you heard that there&#x2019;s currently an opiate epidemic?  I don&#x2019;t prescribe them for this.</div></div>'

                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
         <div class="col-sm-2"> </div>
  
        <!--<div class="col-sm-4 col-sm-offset-2">  
		<div id="step2_2" class="bt2 bt-round" onclick="app_2.Yellow2(2)">Would you like to hear more about pain and effective ways to manage it?</div>
		</div>
        <div class="col-sm-4 col-sm-onset-2">  
		<div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong2()">Opiates are dangerous. Have you heard that there's currently an opiate epidemic?  I don't prescribe them for this.</div>
		</div>-->
  </div>  
  
  <div id="Green2_Text">
    <div class="char-left"><img src="img/Character.png" class="img-responsive" /></div>
	<div class="bubble">
	<div class="box1 sb7">I think oxycodone would help. I've got friends on it, and they seem to manage really well.</div>
	<br/>
	<span class='wait' id='skip5'>Continue</span>
	</div>
  </div>
  
    <div id="Yellow2_Text">
    <div class="char-left"><img src="img/char1.png" class="img-responsive" /></div>
	<div class="bubble">
	<div class="circular-sb">Here comes the lecture...</div> 
	<div class="circle3"></div>
    <div class="circle4"></div>
	<br/>
	<span class='wait' id='skip6'>Continue</span>
	</div>	</div>
	 
  <div id="Wrong2_Text">
  <div class="char-left"><img src="img/angry.png" class="img-responsive" /></div>
	 <div class="bubble">
	<div class="box1 sb7">I guess that just means I should learn to live with this pain, right? Some people can't handle meds, so I don't get any?</div>
	<br/>
	<span class='wait' id='skip7'>Continue</span>
	 </div>
  </div>
  
  <div id='3rd_step' class="row top-padding">
              <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green3(1)">What I hear you saying is that you&#x2019;re having a lot of pain and this is really affecting your life. We need to do something to help you get your life back on track. <br/>Do you want to hear more about pain and effective ways to manage pain?</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_2" class="bt2 bt-round" onclick="app_2.Yellow2(2)">Would you like to hear more about pain and effective ways to manage it?</div></div>'
                sponsorList[2]='<div class="col-sm-4 sponsor"><div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong3()">Be that as it may, I just don&#x2019;t prescribe opiates for this. We&#x2019;re gonna need to find a different solution.</div></div>'
				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
  <!--<div class="col-sm-4">
		<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green3(1)">What I hear you saying is that you're having a lot of pain and this is really affecting your life. We need to do something to help you get your life back on track. <br/>Do you want to hear more about pain and effective ways to manage pain?</div></div>
		<div class="col-sm-4">
		<div id="step2_2" class="bt2 bt-round" onclick="app_2.Yellow2(2)">Would you like to hear more about pain and effective ways to manage it?</div>
		</div><div class="col-sm-4">
		<div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong3()">Be that as it may, I just don't prescribe opiates for this. We're gonna need to find a different solution.</div>
		</div>-->
  </div>
  

  <div id='3rd_step_1' class="row top-padding">
               <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green3(1)">What I hear you saying is that you&#x2019;re having a lot of pain and this is really affecting your life. We need to do something to help you get your life back on track. <br/>Do you want to hear more about pain and effective ways to manage pain?</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_2" class="bt2 bt-round" onclick="app_2.Yellow2(2)">Would you like to hear more about pain and effective ways to manage it?</div></div>'
                sponsorList[2]='<div class="col-sm-4 sponsor"><div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong3_1()">Tell Tom about pain and opiates.</div></div>'
				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
        <!--<div class="col-sm-4">
		<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green3(1)">What I hear you saying is that
              you're having a lot of pain and this is really affecting your life. We need to do something to help you get your life back on track. <br/>Do you want to hear more about pain and effective ways to manage pain?</div>
         </div> <div class="col-sm-4">
		<div id="step2_2" class="bt2 bt-round" onclick="app_2.Yellow2(2)">Would you like to hear more about pain and effective ways to manage it?</div>
		</div> <div class="col-sm-4">
		<div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong3_1()">Tell Tom about pain and opiates.</div></div>-->
  </div>
  <div id="Green3Text">
	<div class="char-left"><img src="img/Character.png" class="img-responsive" /></div>
	<div class="bubble">
	<div class="box1 sb7">Sure.</div>
	<br/>
	<span class='wait' id='skip8'>Continue</span>
	</div>
  </div>
  
  <div id="Yellow3Text">
	<p></P>
  </div>
  
  <div id="Red3Text">
	 <div class="char-left"><img src="img/angree_thought.png" class="img-responsive" /></div>
	 <div class="bubble">
	 <div class="box1 sb7">But you're not giving me any solutions. You're just telling me what you're not going to do.</div>
	 <br/>
	 <span class='wait' id='skip9'>Continue</span>
	 </div>
  </div>
  
  <div id="whiteText">
    <div class="char-left"><img src="img/Character.png" class="img-responsive" /></div>
	 <div class="bubble">
	<div class="dr_box1 sb8_dr">Although opiates and other medications  can help relieve pain, they are also  addictive and can be deadly. They do not  actually treat the real problem causing  your pain. We want for you to get better,  and I worry opiates will not make you better.  <br/>Acetaminophen and ibuprofen along with other non-medication therapies  can be effective at improving your pain.  Are there any other strategies you have tried to reduce your pain?</div>
	 <br/>
	 <span class='wait' id='skip10'>Continue</span>
	 </div>
  </div>
     <div id='4th_step' class="row top-padding">
	  <div class="col-sm-2"> </div>
	                <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green3(1)">What I hear you saying is that you&#x2019;re having a lot of pain and this is really affecting your life. We need to do something to help you get your life back on track.  Do you want to hear more about pain and effective ways to manage pain?</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong3_1()">Tell Tom about pain and opiates.</div></div>'
				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
			 <div class="col-sm-2"> </div>
	   <!-- <div class="col-sm-4 col-sm-offset-2">
		<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green3(1)">What I hear you saying is that
you're having a lot of pain and this is really affecting your life. We need to do something to help you get your life back on track.  Do you want to hear more about pain and effective ways to manage pain?</div></div>
<div class="col-sm-4 col-sm-onset-2">	
		<div id="step2_3" class="bt2 bt-round" onclick="app_2.Wrong3_1()">Tell Tom about pain and opiates.</div>
		</div>-->
  </div>
  <div id='commonMSg'>
      <div class="char-left"><img src="img/char1.png" class="img-responsive" /></div>
	 <div class="bubble">
	<div class="box1 sb7">Well, when I go to yoga with my wife, it seems to feel a little bit better. Just not for long. The pain comes back.</div>
	 <br/>
	 <span class='wait' id='skip11'>Continue</span>
	 </div>	 
  </div>
  
 <!-- <div id='5th_step' class="row top-padding" >
    <div class='col-sm-4 col-sm-offset-4 col-sm-onset-4'>
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green4(1)">That's great! Doing exercise will really help you manage your pain. Let's talk about physical therapy or massage.</div>	
   </div>	
  </div>-->
  
  <div id='5th_step_text'>
    <div class="char-left"><img src="img/Smile.png" class="img-responsive" /></div>
	<div class="bubble">
	<div class="circular-sb">That's promising! I feel like he's really listening to me.</div>
	  <div class="circle3"></div>
     <div class="circle4"></div>
	   <br/>
	 <span class='wait' id='skip12'>Continue</span>
	  </div>
  </div>
  
  <!--  <div id='5th_step_Y' class="top-padding">
	  <div class='col-sm-4 col-sm-offset-4 col-sm-onset-4'>
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow5(1)">Yeah, that's alright, but we need to do more. Let's look at physical therapy or massage.</div>	
  </div></div>
  -->
    
  <div id='5th_step_Ytext'>
	  <div class="char-left"><img src="img/char1.png" class="img-responsive" /></div>
	 <div class="bubble">
	<div class="box1 sb7">I can give that a try, but it's not like I just wasn't trying hard enough. This pain is real!
	 </div>
	 <br/>
	 <span class='wait' id='skip13'>Continue</span>
	  </div>
  </div>
  
  <div id='6th_step' class="row top-padding">
                 <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green6(1)">Okay, so what about if we continue with the acetaminophen and start you on physical therapy?  What do you think about that? Would you like to go to yoga more often with your wife?</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow6(1)">Okay, so we&#x2019;ll start you on physical therapy.</div></div>'
                sponsorList[2]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong6(1)">You need to get started on physical therapy.  Why don&#x2019;t you come back and see me once you have been doing that for a couple of weeks?</div></div>'
				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
		<!--	
   <div class="col-sm-4">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green6(1)">Okay, so what about if we
continue with the acetaminophen and start you on physical therapy?  What do you think about that? Would you like to go to yoga more often with your wife?</div></div>  <div class="col-sm-4">
<div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow6(1)">Okay, so we'll start you on
physical therapy.</div></div>  <div class="col-sm-4">
<div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong6(1)">You need to get started on
physical therapy.  Why don't you come back and see me once you have been doing that for a couple of weeks?</div>	
  </div>-->
  </div>
  
  <div id='6th_step_1' class="row top-padding">
                  <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green4(1)">That&#x2019;s great! Doing exercise will really help you manage your pain. Let&#x2019;s talk about physical therapy or massage.</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow5(1)">Yeah, that&#x2019;s alright, but we need to do more. Let&#x2019;s look at physical therapy or massage.</div></div>'
                sponsorList[2]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong6_1(1)">That&#x2019;s not enough. You also need to do physical therapy.</div></div>'
				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
   <!--<div class="col-sm-4">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green4(1)">That's great! Doing exercise
will really help you manage your pain.  Let's talk about physical therapy or massage.</div>
 </div><div class="col-sm-4">
<div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow5(1)">Yeah, that's alright, but we
need to do more.  Let's look at physical therapy or massage.</div></div>
 <div class="col-sm-4"> 
<div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong6_1(1)">That's not enough. You also
need to do physical therapy.</div>	</div>
-->
  </div>
<div id='6th_step_2'>
         <div class="col-sm-2"> </div>
                    <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green6(1)">Okay, so what about if we continue with the acetaminophen and start you on physical therapy?  What do you think about that? Would you like to go to yoga more often with your wife?</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong6(1)">You need to get started on physical therapy.  Why don&#x2019;t you come back and see me once you have been doing that for a couple of weeks?</div></div>'				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
			<!--
<div class="col-sm-4 col-sm-offset-2">
<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green6(1)">Okay, so what about if we
continue with the acetaminophen and start you on physical therapy?  What do you think about that? Would you like to go to yoga more often with your wife?</div></div> <div class="col-sm-4 col-sm-onset-2">
<div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong6(1)">You need to get started on
physical therapy.  Why don't you come back and see me once you have been doing that for a couple of weeks?</div>	
  </div>-->
  <div class="col-sm-2"> </div>
  </div>
<div id='6th_step_3' class="top-padding">
<div class="col-sm-2"> </div>
                    <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green6(1)">Okay, so what about if we continue with the acetaminophen and start you on physical therapy?  What do you think about that? Would you like to go to yoga more often with your wife?</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow6(1)">Okay, so we&#x2019;ll start you on physical therapy.</div></div>'				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
	<!--<div class="col-sm-4 col-sm-offset-2">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green6(1)">Okay, so what about if we
	continue with the acetaminophen and start you on physical therapy?  What do you think about that? Would you like to go to yoga more often with your wife?</div></div>
  <div class='col-sm-4 col-sm-onset-2'>
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow6(1)">Okay, so we'll start you on physical therapy.</div>
  </div>-->
  <div class="col-sm-2"> </div>
  </div> 

<div id="Gree6Text">
    <div class="char-left"><img src="img/Smile.png" class="img-responsive" /></div>
	<div class="bubble">
	<div class="box1 sb7">Yes, we both enjoy that. I'll go with her more regularly, too.</div>
	 <br/>
	 <span class='wait' id='skip14'>Continue</span>
	 </div>
</div>
<div id="Yellow6Text">
  <div class="char-left"><img src="img/smile_thought.png" class="img-responsive" /></div>
	<div class="bubble">
	<div class="box1 sb7">Okay...</div>
	 <br/>
	 <span class='wait' id='skip15'>Continue</span>
	 </div>
</div>  

<div id="Wrong6Text">
  <div class="char-left"><img src="img/angry.png" class="img-responsive" /></div>
	<div class="bubble">
	<div class="box1 sb7">Doctor, I really don't feel like you're listening to me.  This is a waste of my time. I'm going to go somewhere else.</div>
	 <br/>
	<!-- <span class='wait' id='skip16'>Continue</span>-->
	 </div>
</div>

<div id="Wrong6_1Text">
 <div class="char-left"><img src="img/sad.png" class="img-responsive" /></div>
	  <div class="bubble">
	<div class="circular-sb">You don't want to give me meds, but you think what I'm doing on my own 'isn't enough.' What do you people even want?!</div>
	  <div class="circle3"></div>
     <div class="circle4"></div>
	  <br/>
	 <span class='wait' id='skip17'>Continue</span>
	  </div>
</div>

<div id='7th_step' class="row top-padding">
                  <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green7(1)">Okay, great. Now can you tell me the plan, just so I know I explained it well?</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow7(1)">Okay great. Thanks, Tom. Please meet with my nurse to discuss your physical therapy.</div></div>'
                sponsorList[2]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong7(1)">Okay, great. I need to get to another appointment, but my nurse will help you with the details.</div></div>'
				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
 <!--<div class="col-sm-4">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green7(1)">Okay, great. Now can you tell me the plan, just so I know I explained it well?</div>
</div> <div class="col-sm-4">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow7(1)">Okay great. Thanks, Tom. Please meet with my nurse to discuss your physical therapy.</div>
	</div> <div class="col-sm-4">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong7(1)">Okay, great. I need to get to another appointment, but my nurse will help you with the details.</div>	</div>-->
 </div>
 <div id='7th_step_1' class="row top-padding">
  <div class="col-sm-2"> </div>
                   <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow7(1)">Okay great. Thanks, Tom. Please meet with my nurse to discuss your physical therapy.</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong7(1)">Okay, great. I need to get to another appointment, but my nurse will help you with the details.</div></div>'				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
			 <div class="col-sm-2"> </div>
 <!--<div class="col-sm-4 col-sm-offset-2">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Yellow7(1)">Okay great. Thanks, Tom. Please meet with my nurse to discuss your physical therapy.</div>
	</div><div class="col-sm-4 col-sm-onset-2">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong7(1)">Okay, great. I need to get to another appointment, but my nurse will help you with the details.</div>	</div>-->
 </div>
 
 <div id='7th_step_2' class="row top-padding">
 <div class="col-sm-2"> </div>
                    <script>
                var sponsorList=new Array()
                sponsorList[0]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Green7_2(1)">While doing exercise will really help manage your pain, what I meant to say was that  sporadic exercise will likely give you only sporadic and impermanent relief, like you described.  Physical therapy will help to really address the pain.</div></div>';
                sponsorList[1]='<div class="col-sm-4 sponsor"><div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong6(1)">You need to get started on physical therapy.  Why don&#x2019;t you come back and see me once you have been doing that for a couple of weeks?</div></div>'				
                var i=0
                var random
                while (i<sponsorList.length){
                    random=Math.floor(Math.random()*sponsorList.length)
                    if (sponsorList[random]!="selected"){
                        document.write(sponsorList[random])
                        sponsorList[random]="selected"
                        i++
                    }
                }
            </script>
			 <div class="col-sm-2"> </div>
   <!-- <div class="col-sm-4 col-sm-offset-2">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Green7_2(1)">While doing exercise will really help manage your pain, what I meant to say was that  sporadic exercise will likely give you only sporadic and impermanent relief, like you described.  Physical therapy will help to really address the pain.</div></div>
	<div class="col-sm-4 col-sm-onset-2">
	<div id="step2_1" class="bt2 bt-round" onclick="app_2.Wrong6(1)">You need to get started on
physical therapy.  Why don't you come back and see me once you have been doing that for a couple of weeks?</div>	
</div>-->
 </div>
 
 <div id="Gree7_2Text">
    <div class="char-left"><img src="img/happy_thought.png" class="img-responsive" /></div>
	  <div class="bubble">
	<div class="circular-sb">He's finally actually explaining something. Maybe he's starting to listen to me.</div>
	  <div class="circle3"></div>
     <div class="circle4"></div>
	  <br/>
	 <span class='wait' id='skip18'>Continue</span>
	  </div>
</div>
<div id="Green7Text">
    <div class="char-left"><img src="img/Smile.png" class="img-responsive" /></div>
	 <div class="bubble">
	<div class="box1 sb7">Yes, we're gonna keep trying the acetaminophen and I'm going to start physical therapy. I'm going to keep continue doing yoga, too. But I have a question. If this doesn't make a difference, can we revisit stronger pain medication? </div>
	   <br/>
	 <span class='wait' id='skip19'>Continue</span>
	 </div>
	</div>
	
  <div id="Yellow7Text">
    <div class="char-left"><img src="img/Character.png" class="img-responsive" /></div>
	<div class="bubble">
	<div class="box1 sb7">Thanks, Dr. Peterson.</div>
	 <br/>
	<!-- <span class='wait' id='skip20'>Continue</span>-->
	  </div>
  </div>

<div id="Wrong7Text">
  <div class="char-left"><img src="img/char1.png" class="img-responsive" /></div>
	  <div class="bubble">
	<div class="circular-sb">But I still have questions.</div>
	  <div class="circle3"></div>
     <div class="circle4"></div>
	  <br/>
	 <!--<span class='wait' id='skip21'>Continue</span>-->
	  </div>
	<!--<p>Tom will appear unhappy. Thought bubble: "But I still have questions." This will end this line and initiate feedback.</p>-->
</div>
<div id="Green7Text_1">
    <div class="char-left"><img src="img/Smile.png" class="img-responsive" /></div>
	 <div class="bubble">
	<div class="dr_box1 sb8_dr">Yes, certainly. I'll make a note in my report to revisit this. Thank you, Tom. Please see the front desk to schedule your follow-up appointment in a couple of weeks and to schedule physical therapy.</div>
	  <br/>
	 <!-- <span class='wait' id='skip22'>Continue</span>-->
	 </div>
</div>
<div id="Green7Text_2">
	 <div class="char-left"><img src="img/Character.png" class="img-responsive" /></div>
	<!-- <div class="bubble">
	 <div class="circular-sb">...</div>
	 <div class="circle3"></div>
     <div class="circle4"></div>
	  </div>-->
	<!--<p>Tom will look pleased. This will end this line and initiate feedback.</p>-->
</div>


</div>

<script>
$(document).ready(function() {
$(".lnkBreakdown").click(function() {
    $('html, body').animate({
        scrollTop: $("#all_report").offset().top
    }, 1000);
});
});
</script>

<div id="FeedBack1">
	<br/>
	<f><p id='incorrectText'>That didn't go so well. Let's try again. Review your report card below.</p></f>
	<f><p id='incorrectText'><a class="lnkBreakdown" onclick="app_2.Breakdown()">See detailed performance breakdown</a></p></f>
	<button id="reset" onclick="app_2.ResetFun1();" class="btn btn_d btn-default">TRY AGAIN</button>
</div>

<div id="FeedBack2">
	<br/>
	<f><p id='incorrectText'>That wasn't ideal. Though Tom accepted your explanations and treatment decisions, he didn't seem very happy or convinced. Review your report card below, and try again if you like!</p></f>
	<f><p id='incorrectText'><a class="lnkBreakdown" onclick="app_2.Breakdown()">See detailed performance breakdown</a></p></f>
	<button id="reset" onclick="app_2.ResetFun1();" class="btn btn_d btn-default">Replay</button>
</div>
<div id="FeedBack3">
	<br/>
	<f><p id='incorrectText'>Great job! Tom was satisfied with your explanation and how you arrived at your treatment decisions together. Review your report card below, and feel free to play around with the other responses if you'd like!</p></f>
	<f><p id='incorrectText'><a class="lnkBreakdown" onclick="app_2.Breakdown()">See detailed performance breakdown</a></p></f>
	<button id="reset" onclick="app_2.ResetFun1();" class="btn btn_d btn-default">Replay</button>
</div>
</div>
