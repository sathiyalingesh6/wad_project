<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    </head>
    <title>Incredible India</title>
    <link rel ="icon" href="icon.png">
    <body>
        <div class="header">
            <ul>
                <li>
                    <a class="button" href="./index.php">Home</a>
                </li>
                <li>
                    <a class="button"  href="./components/Gallery.html">Gallery</a>
                </li>
                <li>
                    <a class="button"  href="./components/contactus.html">Contact us</a>
                </li>
                <li>
                    <a class="button" href="./components/aboutus.html">About us</a>
                </li>
                <li>
                    <a class="button"  href="signin.php">Login</a>
                </li>
                <li>
                    <a class="button" href="signup.php">Register</a>
                </li>
            </ul>
          </div>
          <section class="container">
              <div class="container-left">
                <div class="text">
                    <img src="images/icon.png" alt="logo" />
                    <p>One of the oldest civilisations in the world, 
                        ndia is a mosaic of multicultural experiences. 
                        With a rich heritage and myriad attractions, 
                        the country is among the most popular tourist destinations in the world. 
                        It covers an area of 32, 87,263 sq. km, extending from the snow-covered Himalayan heights to the tropical rain forests of the south. 
                        As the 7th largest country in the world, India stands apart from the rest of Asia, marked off as it is by mountains and the sea, which give the country a distinct geographical entity.</p>
                  </div>
                  <div class="image">
                    <img src="images/girl.png" alt ="doodle">
                  </div>
                  
              </div>
              <div class="container-right">
                  <div class="map">
                    <div class="laksh">
                        <img src="images/laksh.png" alt="">
                    </div>
                      <div class="india">
                        <img src="images/map.png" alt="map" usemap="=#workmap" alt="map">
                        <map name="workmap">
                          <area  coords="184,9,303,48,276,134,215,97,241,113,131,34,154,9,171,12"shape="poly" alt="ladakh" href="./components/ladakh.html">
                          <area  coords="169,76,16" shape="circle" alt="jammu" href="components/jammu.html">
                          <area target="" title="himachal pradesh"routerLink="/statewise"[queryParams]="{ state:'himachal'}" coords="175,110,216,157,248,123,232,106,199,87,192,105" shape="poly">       
                          <area target="" title="punjab"routerLink="/statewise"[queryParams]="{ state:'punjab'}" coords="158,142,15" shape="circle">   
                          <area target="" title="delhi"routerLink="/statewise"[queryParams]="{ state:'Delhi'}" coords="210,200,200,222" shape="rect">
                          <area target="" title="haryana"routerLink="/statewise"[queryParams]="{state:'haryana'}" coords="160,190,190,208,206,215,197,176" shape="poly">
                          <area target="" title="uttarakhand"routerLink="/statewise"[queryParams]="{state:'uttarakhand'}"coords="231,141,224,171,270,199,297,179,295,163,254,142" shape="poly">
                          <area target="" title="uttarpradesh"routerLink="/statewise"[queryParams]="{state:'uttarpradesh'} "coords="221,229,257,298,306,304,354,326,375,256,306,220,216,162" shape="poly">
                          <area target="" title="bihar"routerLink="/statewise"[queryParams] ="{state:'bihar'}" coords="370,235,351,296,433,282,429,237" shape="poly">
                          <area target="" title="westbengal"routerLink="/statewise"[queryParams] ="{state:'westbengal'}"  coords="429,326,482,378" shape="rect">
                          <area target="" title="westbengal"routerLink="/statewise"[queryParams] ="{state:'westbengal'}" coords="410,256,469,240" shape="rect">             
                          <area target="" title="sikkhim"routerLink="/statewise"[queryParams] ="{state:'sikkhim'}" coords="440,228,461,220" shape="rect">
                          <area target="" title="assam"routerLink="/statewise"[queryParams] ="{state:'assam'}"  coords="484,260,565,240" shape="rect">
                          <area target="" title="meghalya"routerLink="/statewise"[queryParams] ="{state:'meghalya'}" coords="495,266,529,285" shape="rect">
                          <area target="" title="manipur" routerLink="/statewise"[queryParams] ="{state:'manipur'}" coords="560,277,593,308" shape="rect">
                          <area target=""  title="nagaland" routerLink="/statewise"[queryParams] ="{state:'nagaland'}" coords="553,220,577,293" shape="rect">
                          <area target="" title="arunachal"routerLink="/statewise"[queryParams] ="{state:'arunachal'}"  coords="534,220,565,200" shape="rect">
                          <area target="" title="mizoram"routerLink="/statewise"[queryParams] ="{state:'mizoram'}"  coords="541,286,569,382" shape="rect">
                          <area target="" title="tripura"routerLink="/statewise"[queryParams] ="{state:'tripura'}" coords="531,310,511,340" shape="rect">  
                          <area target="" title="rajasthan"routerLink="/statewise"[queryParams] ="{state:'rajasthan'}" coords="23,250,89,299,189,304,208,251,126,180" shape="poly">
                          <area target="" title="madhyapradesh"routerLink="/statewise"[queryParams] ="{state:'madhyapradesh'}"coords="149,324,298,383" shape="rect">
                          <area target="" title="chattisgarh"routerLink="/statewise"[queryParams] ="{state:'chattisgarh'}" coords="307,463,297,392,358,342,291,369" shape="poly">
                          <area target="" title="orissa"routerLink="/statewise"[queryParams] ="{state:'orissa'}" coords="311,460,359,362,430,395,377,450" shape="poly">
                          <area target="" title="jharkand"routerLink="/statewise"[queryParams] ="{state:'jharkand'}"coords="370,325,407,372" shape="rect">
                          <area target="" title="andhrapradesh"routerLink="/statewise"[queryParams] ="{state:'andhrapradesh'}"coords="171,556,296,486,311,499,223,602" shape="poly">
                          <area target="" title="puducherry"routerLink="/statewise"[queryParams] ="{state:'puducherry'}" href="" coords="255,632,282,592" shape="rect">
                          <area  coords="176,715,160,634,235,600,244,675" shape="poly" alt="Tamilnadu" href="tamilnadu.php">                       
                          <area title="karnataka" routerLink="/statewise"[queryParams] ="{state:'karnataka'}" coords="126,522,213,511,239,574,188,684,167,661" shape="poly">              
                          <area target="" title="goa"routerLink="/statewise"[queryParams] ="{state:'goa'}" coords="116,490,126,580" shape="rect">
                          <area target="" title="maharastra"routerLink="/statewise"[queryParams] ="{state:'maharastra'}" coords="103,527,93,445,142,406,285,395,181,448,174,504,121,525" shape="poly">
                          <area target="" title="telangana"routerLink="/statewise"[queryParams] ="{state:'telangana'}" coords="189,458,255,514" shape="rect">
                          <area target="" title="daman and diu"routerLink="/statewise"[queryParams] ="{state:'daman and diu'}"  coords="76,371,133,391" shape="rect">
                          <area target="" title="gujarat"routerLink="/statewise"[queryParams] ="{state:'gujarat'}" coords="81,414,146,366,121,316,16,322,27,39s0" shape="poly">
                          <area target="" title="kerala"routerLink="/statewise"[queryParams] ="{state:'kerala'}"  coords="161,626,197,696" shape="rect">
                   
                        </map> 
                      </div>
                      
                      
                      <div class="andaman">
                          <img src="images/andaman.png" alt="">
                      </div>
                  </div>
              
              </div>
          </section> 
       
         
    </body>
</html>