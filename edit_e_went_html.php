<?php
     
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

        <input type="file" name="file">
        <input type="button" name="" value="Change" onclick="change()">
        <div id="main" class="aaabc">
        <p class="me-4" data-aos="fade-up" data-aos-delay="300" id="text_1st">Over the years, SARAOGI group has diversified its product portfolio and has become a trusted name across various sectors including energy, minerals, FMCG and finance. We have now added focus to the emerging future of the automobile industry – E-Rickshaws and E-Loaders. We are a leading business house of India with rich experience and highly qualified top management and workforce across all dynamics of business. We strive for long term association and value for all our stakeholders including vendors, employees, management, shareholders. Our motive is to focus and rely on superior quality products with maximum customer satisfaction.</p>
     
      
      	    <p class="text_second">Batteries Can Be Modified As Per Requirement For Better Mileage<br>60v 30 Ah - Single Battery - 80 Kms60v 30 Ah - Dual Battery - 150 Kms</p>	

      	   <p class="single_battery_text">Ip60 Bldc Motor, Batteries Can Be Modified As Per Requirement For Better Mileage60v 30 Ah - Single Battery - 80 Kms60v 30 Ah - Dual Battery - 150 Kms</p> 

      	   <p id="motor_text">1000 watt motor,Waterproof bldc motor - ip67,Touch sensor,Push button start and stop,Side stand sensor,Digital cluster,Dual led headlights,Dual shocke</p>


      	    <p id="Waterproof_motor_text">1000 watt motor,Waterproof bldc motor - ip67,Touch sensor,Push button start and stop,Side stand sensor,Digital cluster,Dual led headlights,Dual shocker</p>
      </div>	
        <div id="demo"></div>
        <div id="demo1"></div>
        <input type="submit" name="" id="submit">
        <p id="paragraph"> Dog, <span style="background-color: cyan">Cat</span>, Lizard</p>
<script type="text/javascript">

	      //var vehicles_test=document.getElementById('vehicles_test').value;
        

       		 const x = document.getElementById("main");
		const y = x.getElementsByTagName("p");

		document.getElementById("demo").innerHTML = 
		'The first paragraph (index 0) inside "main" is: ' + y[0].innerHTML; 

		//  var element=document.getElementsByClassName("mypara");
	   	// for(var i=0; i<element.length; i++)
	   	// {
	   	//      element[i].style.color="red";
	        // }	
              
             // const x1 = document.getElementById("main1");
             // const y1=x1.getElementsByTagName("p");

             // document.getElementById("demo1").innerHTML = 
	// 	'The first paragraph (index 0) inside "main" is: ' + y1[0].innerHTML; 
  
                var arr=[];
		var elms=document.getElementsByTagName('p');

                for(i=1; i<elms.length; i++)
                {
                	arr.push(elms.length);
                }	
                //console.log(elms.length[i]);
                var abc="aaaaa";
                let array1=abc.split('');
                console.log(array1);

    //             $(document).ready(function () {
  
    //   // Bind the click event to the function
    // //   $("#buttonId").click(function () {
          
    // //     // Select all the elements with the
    // //     // type of text
    // //     $("#formId input[type=text]")
    // //         .each(function () {
  
    // //       // Print the value currently in
    // //       // the input box
    // //       console.log(this.value);
    // //     });
    // //   })
    // // });
          
             
//       	const mainnew = document.getElementById('main');

// // 👇️ Dog, Cat, Lizard
// const result = mainnew.textContent;
// console.log(result);
//  let arraynew=result.split('');
//   console.log(arraynew);

  						let count_text="";
  						let push_text="";
  						$("document").ready(function(){
  								$("#submit").click(function(){
  										var items=$("#main p").map(function() { return $(this).text(); }).get();
  										//document.write(items[3]);
  										   for(i=1; i<items.length; i++)
  										   {
  										   	      count_text+=items[i] +"<br>";
  										   	      //document.write("\n");

  										   }	
  										   document.getElementById("demo").innerHTML=count_text;
  										   let array2=count_text.split();
  										   console.log(array2);
  								});
  						});
</script>      
						
</body>
</html>