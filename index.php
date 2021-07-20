<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <title>Kripton COVID-19</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&family=Nanum+Gothic&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=ABeeZee&display=swap');

        * {
            padding: 0;
            margin: 0;
            scroll-behavior: smooth;
        }

        body {
            background: url('background.jpg');
            background-size: cover;
            width: 100vw;
        }

        header {
            width: 100%;
            height: 10vh;
        }

        header nav {
            display: flex;
            position: fixed;
            width: 40%;
            left: 95%;
            z-index: 100;
            top: 30px;
            transform: translateX(-95%);
        }

        nav div {
            font-size: 1.2rem;
            width: 100%;
            text-align: center;
            text-transform: uppercase;
        }

        header nav div a:hover {
            color: rgb(0, 255, 85);
        }

        nav div a {
            cursor: pointer;
            letter-spacing: 2px;
            user-select: none;
            transition: 0.4s ease-out;
            font-weight: 550;
            animation: opc 2s 0s 1;
            text-decoration: none;
            font-family: 'Fira Sans', sans-serif;
            color: #fff;
        }

        .maintxt {
            color: #fff;
            font-size: 2.5rem;
            text-transform: capitalize;
            font-family: 'Fira Sans', sans-serif;
            font-weight: 700;
            letter-spacing: 4px;
            word-spacing: 5px;
            user-select: none;
            position: absolute;
            top: 10%;
            left: 5%;
            animation: txtanim 5s ease-in-out 0s 1;

        }

        @keyframes txtanim {
            0% {
                opacity: 0;
                top: 0px;
                left: 50%;
                transform: translate(-50%, 0%);
            }

            40% {
                opacity: 1;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            45% {
                opacity: 0;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            50% {

                opacity: 1;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            100% {
                top: 10%;
                left: 5%;
                opacity: 1;
            }
        }
        .ham{
            display: none;
        }

        @keyframes opc {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .bottom {
            position: absolute;
            top: 70%;
            width: 30%;
            margin-left: 10px;
            animation: opc 2s 0s 1;

        }

        .bottom span {
            color: #fff;
            font-family: 'Fira Sans', sans-serif;
            font-size: 1.4rem;
        }

        .bottom p {
            color: #fff;
            font-family: 'Nanum Gothic', sans-serif;
        }

        .covidpic {
            filter: blur(0.5px);
            position: absolute;
            top: 50%;
            display: none;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: pic 3s;
        }

        .covidpic:hover {
            width: 400px;
        }

        @keyframes pic {
            0% {
                opacity: 0;
                filter: blur(10px);

            }

            100% {
                filter: blur(0px);
                opacity: 1;
            }
        }
        #home
        {
            height: 100vh;
            width: 100vw;
        }
        #counrty{
            height: 100vh;
            width: 100vw;
            background: url('wrlmap.jpg');
        }
        #about{
            height: 100vh;
            width: 100vw;
        }
        #news{
            
            height: 100vh;
            width: 100vw;
        }
        /* width */
        ::-webkit-scrollbar {
        width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        background: #000000;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: linear-gradient(black,blue,skyblue);
        border-radius: 4px;
        }
        .form-select
        {
            width: 30%;
        }
        legend
        {
            color: #fff;
        }
        .form{
            position: relative;
            top: 20%;
            width:50%;
            left:10%;

        }
        .chart-container
        {
            top:-10px;
            background:#fff;
            left:30%;
            display:none;
            position: relative;
            
            height:70vh;
             width:60vw;
        }
        #h{
            color: rgb(0, 255, 85);
        }
        .container
        {
            position: relative;
            top:100px;
        }
        #_0
        {
            position: relative;
            animation-name: cardanimLR;
            animation-timing-function: ease-in;
            animation-duration: 1s;
        }
        #_3
        {
            position: relative;
            animation-name: cardanimLR;
            animation-timing-function: ease-in;
            animation-duration: 1s;
        }
        #_1
        {
            position: relative;
            animation-name: cardanimTB;
            animation-timing-function: ease-in;
            animation-duration: 1s;
        }
        #_4
        {
            position: relative;
            animation-name: cardanimBT;
            animation-timing-function: ease-in;
            animation-duration: 1s;
        }
        #_2
        {
            position: relative;
            animation-name: cardanimRL;
            animation-timing-function: ease-in;
            animation-duration: 1s;
        }
        #_5
        {
            position: relative;
            animation-name: cardanimRL;
            animation-timing-function: ease-in;
            animation-duration: 1s;
        }
        .row_2 a img
        {
            width: 100px;
            height: 100px;
        }
        @keyframes cardanimLR
        {
            0%{
                left: -100px;
                opacity: 0;
            }
            100%{
                left: 0px;
                opacity: 1;
            }
        }
        @keyframes cardanimRL
        {
            0%{
                right: -100px;
                opacity: 0;
            }
            100%{
                right: 0px;
                opacity: 1;
            }
        }
        @keyframes cardanimTB
        {
            0%{
                top: -100px;
                opacity: 0;
            }
            100%{
                top: 0px;
                opacity: 1;
            }
        }
        @keyframes cardanimBT
        {
            0%{
                bottom: -100px;
                opacity: 0;
            }
            100%{
                bottom: 0px;
                opacity: 1;
            }
        }
        .card-img-top
        {
            width: 80%;
            height: 50%;
        }
        .card p{
            font-size: 0.8rem;
        }
        .conto{
            width: 90vw;
            height: 80vh;
            position: relative;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;

            display: flex;
            flex-direction: column;
        }
        .rw
        {
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .col_1
        {
            position: relative;
            display: none;
            animation-name: none;
            animation-timing-function: ease-in;
            animation-duration: 1s;
        }
        .image
        {
            user-select: none;
            align-items: center;
            justify-content: center;
            position: relative;
            left: 50%;
            background-color: rgb(255, 237, 72);
            border: 1px dashed;
            width: 250px;
            height: 250px;
            border-radius: 50%;           

        }
        .cl
        {
            width: 100%;

        }
        .col_2
        {
            font-size: 1.5rem;
            height: 100%;
            font-family: 'ABeeZee', sans-serif;
            top: 50%;
            color: #fff;
            display: none;
            position: relative;
            animation-name: none;
            animation-timing-function: ease-in;
            animation-duration: 1s;
        }
        .row_2
        {
            display: flex;
            top: 25%;
            position: relative;
            flex-direction: row;
            justify-content: space-around;
            position: relative;
            animation-name: none;
            animation-timing-function: ease-in-out;
            animation-duration: 1s;

        }
        .row_2 a{
            background-color: #fff;
            border-radius: 50%;
            display: none;
            padding: 15px;
        }
        @media only screen and (max-width: 600px) {
            body{
            }
            .maintxt{
                width: 60%;
                font-size: 1.2rem;
            }
            .ham
            {
                position: fixed;
                width:50px;
                height: 50px;
                top: 30px;
                left: 2%;
                z-index: 200;
                background-color: #fff;
                display: flex;
                flex-direction: column;
                padding: 5px;
            }
            .ham .line
            {
                width: 100%;
                position: relative;
                margin-top: 5px;
                height: 5px;
                border: 1px solid black;
                
            }
            .leftc{
            left: -100%;
                
            }
            header nav{                
            display: flex;
            background-color: rgb(199, 102, 255);;
            position: fixed;
            width: 100%;
            transition: 0.6s;
            height: 100%;
            flex-direction: column;
            }
            header nav div a{
                
                font-size: 1.5rem;
            }
            header nav div:nth-child(1){
                margin-top: 30%;

            }
            header nav div{

                background-color: rgb(199, 102, 255);
                padding:50px 10px;
                border-top: 2px solid rgb(0, 0, 0);
                width: 100%;
            }
            .bottom{
                width: 100%;
            }
            .conto{
                top:0;
            left: 0;          
            transform: translate(0px,0px); 
         }
         .form-select{
             width: 80%;
         }
         .form{
top: 5%;            

             width: 100%;
         }
         .chart-container{
             top: 50px;
             position: relative;
             width:100%;
             left:0px;
             height: 200px;
             
             
         }
         .container{
             margin: 0;
             padding: 0;
         }
         .row_2 a{
             padding: 5px;
         }
         .row_2 a img
        {
            width: 20px;
            height: 20px;
        }
        .row_1{
            display: flex;
            flex-direction: column;
        }
        .image{
            top: 50px;
            position: relative;
            left: 10%;
            width: 100px;
            height: 100px;
        }
        .image img{

            width: 120px;
            height: 140px;
        }
        .col_2{
            font-size: 1rem;
            text-align: center;
        }
        }
    </style>
    <meta name="theme-color" content="rgb(60, 0, 95)" />
</head>

<body>
    <div id="home">
        <header>
            <div class="ham " onclick="togal()">
                <div class="line l1"></div>
                <div class="line l2"></div>
                <div class="line l3"></div>
            </div>
            <nav class="leftc">
                <div><a href="#home" id="h" onclick="clo()">Home</a></div>
                <div><a href="#counrty" id="yc" onclick="clo()">Your Country</a></div>
                <div><a href="#news" id="n" onclick="clo()">News</a></div>
                <div><a href="#about" id="a" onclick="clo()">About</a></div>
            </nav>
        </header>
        <main>
            <div class="maintxt">KRIPTON COVID-19</div>
            <img src="stopcovid.png" id="copic" class="covidpic">
            <div class="bottom">
                <span>What is COVID-19?</span>
                <p>Coronavirus disease (COVID-19) is an infectious disease caused
                    by a newly discovered coronavirus. Most people infected with the
                    COVID-19 virus will experience mild to moderate respiratory illness
                    and recover without requiring special treatment.</p>
            </div>
        </main>
        <footer>

        </footer>
    </div>
    <div id="counrty">
        <div class="form">
                       <legend>SEARCH BY COUNTRY</legend>
                        <select id="country" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <?php

                                $curl = curl_init();

                                curl_setopt_array($curl, [
                                    CURLOPT_URL => "https://covid-193.p.rapidapi.com/countries",
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_FOLLOWLOCATION => true,
                                    CURLOPT_ENCODING => "",
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 30,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_CUSTOMREQUEST => "GET",
                                    CURLOPT_HTTPHEADER => [
                                        "x-rapidapi-host: covid-193.p.rapidapi.com",
                                        "x-rapidapi-key: 381e0dbffcmshc09ea9a79184fd7p1d4e68jsn57d21fcf6f3d"
                                    ],
                                ]);

                                $response = curl_exec($curl);
                                $err = curl_error($curl);

                                curl_close($curl);

                                if ($err) {
                                    echo "cURL Error #:" . $err;
                                } else {
                                    $js = json_decode($response,true);
                                    foreach($js['response'] as $k=>$val)
                                    {
                                        echo "<option value={$val}>{$val}</option>";
                                    }
                                }
                                ?>
                                
                          </select>
                          <br>
                          <button onclick="find(event)" type="submit" class="btn btn-outline-light">Submit</button>    
                            </div>  
                <div>
                <div class="chart-container" id="chart-container">
    <canvas id="covidChart"></canvas>
</div>
</div>
        </div>
    <div id="news">

        <div class="container">
            <div class="row row-cols-auto">
                
       
                
             
            </div>
          </div>



















    </div>
    <div id="about">
        <div class="conto">
            <div class="row_1 rw">
                <div class="col_1 cl">
                    <div class="image">
                        
                    <img src="profopic.png"  width="250" height="300">
                    </div>

                </div>
                <div class="col_2 cl">
                    <span>Developer: Subhankar Dutta</span><br>
                    <span>Skills: C/C++, JAVA, PHP, CSS, HTML, Android, Web Developer</span><br>
                    <span>Email: subhankar0810@gmail.com</span>

                </div>
            </div>
            <div class="row_2 rw">
                <a href="https://github.com/Kripton0810" class="a"><img src="git.png"  ></a>
                <a href="https://www.linkedin.com/in/subhankar-d-b87943128/" class="a"><img src="linkedin.png"  ></a>
                <a href="https://www.facebook.com/subhankar.dutta.395669/" class="a"><img src="Facebook-logo.png"  ></a>
                <a href="https://www.instagram.com/ig_kripton/" class="a"><img src="insta.png"  ></a>
                <a href="https://www.youtube.com/channel/UCt6f1XIkwEPRcQ9v8F7OTyw" class="a"><img src="ytf.png"  ></a>


            </div>

        </div>

      
       
    <div>

    </div>














    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        let copic = document.getElementById("copic");
        setTimeout(() => {
            copic.style.display = "block";
        }, 3000);
    </script>





    <script>
        var f=0;
        function clo()
        {
            if($(window).width()<600)
            {
            $('.leftc').css('left','-100px');
            f=0;
            }

        }
        function togal()
        {
            if(f==0)
            {
            $('.leftc').css('left','95%');
            f=1;
            }
            else
            {
            $('.leftc').css('left','-100px');
            f=0;
            }
        }
        function artical()
        {
            $.ajax({
                url:"https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=3752112d8e3d414fb9bbe02c36554502",
                method:"get",
                success:function(data)
                {
                    var js = JSON.stringify(data);
                    var k=0;                            
                    for(var i = 0 ;i< js.length;i++)
                    { 
                        
                        var img = data['articles'][i]["urlToImage"];
                        var title = data['articles'][i]["title"];
                        var desc = String(data['articles'][i]["content"]);
                        if(k<6)
                        {
                        if(img != null )
                        {
                    var newsdata =    "<div class=\"col\" id=_"+k+">"+
                                        "<div class=\"card\" style=\"width: 25rem ;height: 20rem\">"+
                                                "<img src=\""+img+"\" class=\"card-img-top\" alt=\"...\">"+
                                                "<div class=\"card-body\">"+
                                                "<h6 class=\"card-title\">"+title+"</h6>"+
                                                "<p class=\"card-text\">"+desc+"</p>"+             
                                                "</div>        </div>    </div>";
                        
                            
                        
                  
                  $('.row').append(newsdata);   
                  k=k+1;

                        }else
                        {
                            continue;
                        }
                    }else{
                        break;
                    }
                    }
                }
            })
        }
            var graph;
            var fnews = 0;
        function find(event)
        {
            var con = document.getElementById('country').value;
            $.ajax({
                url:"data.php",
                method:"post",
                cache:false,
                data:{
                    'country':con
                },
                success:function(data){
                    var val=[];
                    var lab = [];
                    var death =[];
                    var recover = [];
                    var js = JSON.parse(data);
                    for(var i = 0;i<js.length/2;i++)
                    {
                        lab[i]=js[i].date;
                        val[i]=js[i].new;
                        death[i]=js[i].death;
                        recover[i]=js[i].recovered;
                    }
                    console.log(val);
                    var chartdata={
                        labels: lab,
                        datasets: [{
                            label: 'New Cases',
                            data: val,
                            fill:false,
                            borderWidth: 1,
                            tension: 0.2,
                            backgroundColor: [
                                    'rgba(5, 2, 209, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(55, 2, 209, 1)',
                                ],
                                pointRadius: 0,
                        },
                        {
                            label: 'Death Cases',
                            data: death,
                            fill:false,
                            borderWidth: 1,
                            tension: 0.2,
                            backgroundColor: [
                                    'rgba(205, 9, 2, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(205, 9, 2, 1)',
                                ],
                                pointRadius: 0,
                        }
                        // ,{
                        //     label: 'recovered Cases',
                        //     data: recover,
                        //     fill:false,
                        //     borderWidth: 1,
                        //     tension: 0.2,
                        //     backgroundColor: [
                        //             'rgba(2, 205, 2, 0.2)',
                        //         ],
                        //         borderColor: [
                        //             'rgba(2, 209, 2, 1)',
                        //         ],
                        // }
                        
                        ]
                        ,
                    options: {
                        responsive: true,
            maintainAspectRatio: false,
                }
                    
                    };
                    var tt = $('#chart-container');
                    var ctx = $('#covidChart');
                    if(graph)
                    {
                        graph.destroy();
                    }
                    tt.css("display","block");
                    graph=new Chart(ctx,{
                        type:'line',
                        data:chartdata
                    });

                }
            });
            
        }
        $(window).scroll(function(){
           if(($(window).scrollTop() + $(window).height())>=0 && ($(window).scrollTop() + $(window).height())<= (1.7*$(window).height())){
               $('#h').css("color","rgb(0, 255, 85)");
               $('#n').css("color","rgb(255, 255, 255)");
               $('#yc').css("color","rgb(255, 255, 255)");
               $('#a').css("color","rgb(255, 255, 255)");
               console.log("Home ::"+$(window).scrollTop()+" :: "+$(window).height()+" :: "+$('#home').height());
           }else 
           if(($(window).scrollTop() + $(window).height())>= (1.7*$(window).height()) && ($(window).scrollTop() + $(window).height())<= (2.7*$(window).height())){
               $('#yc').css("color","rgb(0, 255, 85)");
               $('#h').css("color","rgb(255, 255, 255)");
               $('#n').css("color","rgb(255, 255, 255)");
               $('#a').css("color","rgb(255, 255, 255)");
               console.log("country:: "+$(window).scrollTop()+" :: "+$(window).height()+" :: "+$('#counrty').height());
           }
           else
           if(($(window).scrollTop() + $(window).height())>= (2.5*$(window).height()-50) && ($(window).scrollTop() + $(window).height())<= (3.7*$(window).height()-50)){
               $('#n').css("color","rgb(0, 255, 85)");
               $('#h').css("color","rgb(255, 255, 255)");
               $('#yc').css("color","rgb(255, 255, 255)");
               $('#a').css("color","rgb(255, 255, 255)");

               if(fnews==0)
               {
                   artical();
                   fnews=1;
               }
               console.log("news:: "+$(window).scrollTop()+" :: "+$(window).height()+" :: "+$('#news').height());
           }
           else {
            $('.col_1').css("display","block");
               $('.col_2').css("display","block");
               $('.a').css("display","block");
               $('#a').css("color","rgb(0, 255, 85)");
               $('#n').css("color","rgb(255, 255, 255)");
               $('#h').css("color","rgb(255, 255, 255)");
               $('#yc').css("color","rgb(255, 255, 255)");
               console.log("about:: "+$(window).scrollTop()+" :: "+$(window).height()+" :: "+$('#about').height());
               $('.col_1').css("animation-name","cardanimLR");
               $('.col_2').css("animation-name","cardanimRL");
               $('.row_2').css("animation-name","cardanimTB");
           }
           console.log($(window).scrollTop() - $(window).height() +"::"+ $('#home').height()) ;

           
        });


</script>
</body>

</html>