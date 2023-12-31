<?php
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main페이지</title>
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <style>
        
        /* imgText start */
        main{
            background-color: #FFF4FE;
        }
        .imgText__inner2,
        .imgText__inner{
            margin: 0 auto;
            text-align: center;
        }
        .text__inner h1 {
            font-size: 40px;
            font-weight: 800;
        }
        .text__inner h2 {
            font-size: 20px;
        }
        .text__inner p {
            font-size: var(--font__size);
        }
        .text__inner .desc1{
            color: #666666;
        }
        .text__inner .desc2{
            font-weight: 700;
            text-decoration: underline !important;
            text-underline-position: under;
        }
        .img__inner a{
            width: 290px;
            height: 290px;
            margin: 5px;
        /* ?    background-image: url(../html/assets/img/textImg01.png); */
        }
        .img__inner .imgTextImg1{
            max-width: 1200px
        }
        .text__inner2 h1 {
            font-size: 40px;
            font-weight: 800;
        }
        .text__inner2 .desc3 {
            font-size: 20px;
            color: #666666;
        }
        .text__inner2 p {
            font-size: var(--font__size);
        }
        .text__inner2 .desc1{
            color: #666666;
        }
        .text__inner2 .desc2{
            font-weight: 700;
            text-decoration: underline !important;
            text-underline-position: under;
        }
        .text__inner2 .btn a{
            width: 180px;
            line-height: 40px;
            background-color: #D9D9D9;
            font-size: 16px;
            display: inline-block;
            text-align: center;
        }
        .img__inner2{
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }
        .img__inner2 a{
            width: 290px;
            height: 290px;
            margin: 5px;
        }
        .img__inner2 a img{
            display: none;
        }
        .commImg1{
            background-image: url(../html/assets/img/community01.png);
        }
        .commImg2{
            background-image: url(../html/assets/img/community02.png);
        }
        .commImg3{
            background-image: url(../html/assets/img/community03.png);
        }
        .commImg4{
            background-image: url(../html/assets/img/community04.png);
        }
        .commImg5{
            background-image: url(../html/assets/img/community05.png);
        }
        .commImg6{
            background-image: url(../html/assets/img/community06.png);
        }
        .commImg7{
            background-image: url(../html/assets/img/community07.png);
        }
        .commImg8{
            background-image: url(../html/assets/img/community08.png);
        }
       /* imgtext End */
       
        /* imgslider start */
        .slider__inner2 .slider {
            align-items: center;  
            height: 650px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            z-index: 1;
            margin: 0 auto;
        }
        .slider__inner2 .slider.img1{
            background-image: url(../html/assets/img/slider01_01.png);
        }
        .slider__inner2 .slider.img2{
            background-image: url(../html/assets/img/slider01_02.png);
        }
        .slider__inner2 .slider.img3{
            background-image: url(../html/assets/img/slider01_03.png);
        }

        .slider__inner2 .slider__info {
            width: 1920px;
            margin: 0 auto;
            padding: 120px;
        }
        .slider__inner2 .slider__info .small {
            display: inline-block;
            padding: 1px 30px;
            background-color: #fff;
            color: #000;
            font-size: 16px;
            border-radius: 50px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        .slider__inner2 .slider__info .title{
            font-size: 80px;
            color: #fff;
            margin-bottom: 40px;
            margin-left: -5px;
        }
        .slider__inner2 .slider__info .title1 {
            font-size: 150px;
            color: #fff;
            margin: 80px 0 40px 250px;
        }
        .slider__inner2 .slider__info h4{
            color: #fff;
        }
        .slider__inner2 .slider__info .desc{
            font-size: 18px;
            line-height: 1.5;
            color: #fff;
            width: 80%;
            word-break: keep-all;
        }
        .slider__inner2 .slider__info .desc1 {
            color: #fff;
            font-size: 18px;
            margin-left: 700px;
        }
        .slider__inner2 .slider__info .btn{
            position: absolute;
            bottom: 10rem;
        }
        .slider__inner2 .slider__info .btn a {
            text-decoration: none;
            width: 180px;
            background-color: #fff;
            font-size: 16px;
            display: inline-block;
            text-align: center;
            padding: 12px 0;
            margin-right: 4px;
        }
        .slider__inner2 .slider__info .btn a:last-child{
            background-color: #000;
            color: #fff;
        }
        .swiper-button-prev,
        .swiper-button-next  {
            width: 30px;
            height: 65px !important;
            background-image: url(../html/assets/img/slider01_icon.svg);
            background-size: 500px;
        }
        .swiper-button-next {
            background-position: -55px 0;
        }
        .swiper-button-prev:after,
        .swiper-button-next:after {
            font-size: 0 !important;
        }
        /* imgslider end */

        /* icon slider start */
        .slider__inner {
            /* width: 1200px; */
            height: 1090px;
            margin: 0 auto;
            margin-top: 160px;
        }
        .product{
            margin-top: 30px !important;
        }
        .product-registration{
            width: 100%;
        }
        .product{
            width: 100%;
        }

        .slider__inner > p {
            text-align: center;
            font-size: 20px;
        }
        .slider__inner > h2 {
            padding-top: 80px;
            padding-bottom: 40px;
            text-align: center;
            font-size: 20px;
        }
        .slick-track{
            position: relative;
        }
        .slider1 {
            position: absolute;
            left: 0;
            top : 750px;
            transform: translateX(13%);
            width: 80%;
            height: 300px;
        }
        .slider1 .slider__img {
            box-sizing: border-box;
            width: 100%;
            height: 300px;
        }
        .slider1 .slick-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .slider1 .slick-slide img {
            align-items: center;
            background-color: #fff;
            border-radius: 5%;
            width: 180px;
            height: 180px;
            transition: all 0.1s;
        }
        .slider1 .slick-slide img:hover {
            transform: scale(1.1);
        }
        .slick-prev:before, .slick-next:before {
            color: #444444;
        }
        
        .slick-prev:before, .slick-next:before {
            position: absolute;
            left: -15px;
            z-index: 1000;
            font-size: 50px !important;
            line-height: 0.5 !important;
        }
        #slider__bottom {
            background-image: url(../html/assets/img/slider02_01.png);
            background-size: cover;
            width: 100%;
            height: 475px;
        }
        #slider__bottom h1{
            font-weight: 700px;
            font-size: 40px;
            padding-top: 13rem;
            text-align: center;
            
        }
        /* icon slider end */
        /* scroll start */
        #scroll::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border-radius: 5px;
            background-color: #FAFAFA;
        }
        #scroll::-webkit-scrollbar
        {
            width: 8px;
            background-color: #F5F5F5;
        }
        #scroll::-webkit-scrollbar-thumb
        {
            border-radius: 5px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #EAAFC8;
        }
        /* scroll end */
        .list__inner {
            width: calc(100% - 35vw);
            margin: 80px auto 0px auto;
            /* background-color: #fff; */
        }
        .list__inner > h2 {
            margin-bottom: 40px;
            font-size: 30px;
            font-weight: 700;
            text-align: center;
            color: #F06171;
        }
        .section__img {
            min-width: 1000px;
            margin-bottom: 80px;
        }
        .list {
            width: 100%;
            /* padding-bottom: 100px; */
            margin: 0 auto 0 auto;
            /* background-color: #fff; */
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            
        }
        .list__img .img__box{
            /* border-radius: 15px;
            padding: 10px */
            cursor: pointer;
            background-size: cover;
            width: 100;        
        }
        .list__text {
            /* height: 170px; */
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .list__name {
            display: flex;
            justify-content: space-between;
            align-items: end;
            margin-bottom: 35px;
            border-bottom: 1px solid #CCCCCC;
        }
        .list__name b {
            padding-left: 30px;
            position: relative;
            
        }
        .list__name b::before {
            position: absolute;
            content: '';
            background-image: url(../html/assets/img/shareboard-profile.png);
            background-position: 45% 25%;
            background-size: 150%;
            width: 25px;
            height: 25px;
            background-color: #999;
            top: -3px;
            left: 0px;
            border-radius: 50%;
        }
       
        .list__each {
            display: inline-block;
            width: 15vw;
            min-width: 251px;
            height: 250px;
            margin: 0px 0.5vw 1vw 0.4vw;
            background-color: rgba(247, 151, 162, 0.07);
            /* border: 1px solid #F797A2; */
        }
    </style>
</head>
<body id="scroll">
<?php include "../include/abbHeader.php" ?>
        <!-- //header -->
    <!-- //header -->
    <main id="main container" class="mt80" >
        <div class="slider__inner2">            
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider img1">
                            <div class="slider__info">
                                <span class="small">EVENT</span>
                                <h3 class="title">Abide By Beauty</h3>
                                <h4>Protect Your Skin</h4>
                                <p class="desc"> 다시쓰기 찝찝한 쓰다만 화장품, <br>
                                    정확한 유통기한을 확인하고 사용기간을 지켜 트러블이 나지 않도록 하세요.</p>
                                <div class="btn">
                                    <a href="#">자세히보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider img2">
                            <div class="slider__info">
                                <span class="small">EVENT</span>
                                <h3 class="title">Abide By Beauty</h3>
                                <p class="desc">피부타입을 확인해 보세요!</p>
                                <div class="btn">
                                    <a href="#">테스트하러 가기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider img3">
                            <div class="slider__info">
                                <h3 class="title1">Abide By Beauty</h3>
                                <p class="desc1">당신의 아름다움을 지키는 ABB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>                 
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>                
            </div>                               
        </div>
        <div class="slider__inner">
            <p class="mb50">&nbsp;</p>
            <div class="slider1">
                <div class="slider__img"><a  onclick="myFunction('2')"><img src="../html/assets/img/beauty_icon01.png" alt="아이콘1"></a></div>
                <div class="slider__img"><a  onclick="myFunction('3')"><img src="../html/assets/img/beauty_icon02.png" alt="아이콘2"></a></div>
                <div class="slider__img"><a  onclick="myFunction('1')"><img src="../html/assets/img/beauty_icon03.png" alt="아이콘3"></a></div>
                <div class="slider__img"><a  onclick="myFunction('4')"><img src="../html/assets/img/beauty_icon04.png" alt="아이콘4"></a></div>
                <div class="slider__img"><a  onclick="myFunction('5')"><img src="../html/assets/img/beauty_icon05.png" alt="아이콘5"></a></div>
                <div class="slider__img"><a  onclick="myFunction('6')"><img src="../html/assets/img/beauty_icon06.png" alt="아이콘6"></a></div>
                <div class="slider__img"><a  onclick="myFunction('1')"><img src="../html/assets/img/beauty_icon07.png" alt="아이콘7"></a></div>
            </div>
            <div class="category__inner">
                <div class="product-registration">
                    <h3>내 화장품 유통기한 확인 및 등록하기
                        <ir>개봉한 날짜를 입력하시면 언제까지 사용가능한지 날짜를 알려드립니다.<ir>
                    </h3>
                    <div class="product-choice">
                        <div class="section1">
                            <div class="section1-1">
                                <select name="#" id="select1">
                                </select>
                                <label for="date-input"></label>
                                <input class="input1" type="date" id="date-input" name="date">
                                <input class="input1" type="text" id="productName">
                                <button type="button" class="chkExpiration btnStyle6"><a onclick="chkExpiration()">유통기한체크</a></button>
                                <button type="button" class="updateCosmetics btnStyle6"><a onclick="CosmeticUpdate()">제품등록하기</a></button>
                                <input class="input1" type="hidden" id="indexChk">
                                <input class="input1" type="hidden" id="Ddate">
                            </div>
                            <div class="section1-2">
                                <button type="button" onclick="location.href='boardWrite.html';" class="btnStyle6">등록된 화장품확인하기</button>
                            </div>
                        </div>
                        <div class="datecheck">
                            <!-- <p><span>닉네임</span> 님이 확인하신 제품의 <span>유통기한은</span><br> -->
                                <p>확인하신 제품의 유통기한은<br>
                                <span></span>까지 입니다.<br>
                                잘 확인하고 사용해주세요 감사합니다.</p>
                        </div>
                    </div>
    
                </div>
    
                <div class="product">
                    <h3><em>기초</em> 유통기한 정보</h3>
                    <div class="product_inner">
                        <div>
                            <article class="card">
                                <figure class="card__header">
                                    <img id="cardImg" src="../html/../html/assets/img/cate/Skincare.jpg" alt="샴푸">
                                </figure>
                                <div class="card__body">
                                    <h3 class="title">LOTION<span>의</span></h3>
                                    <p class="desc">
                                    </p>
                                    <!-- <p class="desc2">
                                        개봉전<span>36개월</span>
                                    </p>
                                    <p class="desc2">
                                        개봉후<span>12개월</span>
                                    </p> -->
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="slider__bottom" class="mb80">
            <div>
                <h1>"소중한 당신의 피부를 지켜주세요."</h1>
            </div>
            <!-- <img src="../html/assets/img/slider02_01.png" alt="슬라이드밑사진"> -->
        </div>
        <div class="imgText__inner">
            <div class="text__inner">
                <h2 class="mt100">"Take care of your skin."</h2> 
                <h1 class="mt30">ABB</h1>
                <p class="desc1 mt30">ABB는 화장품 유통기한을 확인 하는 공간입니다.</br>
                    화장품의 유통기한을 간편하게 확인한 후</br>
                    당신의 피부와 아름다움을 지켜주세요. </br>
                    이제는 당신의 화장품을 쌓아두지 마세요</br>
                    과감히 버릴 수 있도록 ABB가 도와드립니다.</p>
                <p class="desc2 mt30">당신의 아름다움을 지키는 ABB</p>
            </div>
            
            <div class="img__inner mt100 ">
                <img class="imgTextImg1" src="../html/assets/img/textImg01.png" alt="이미지1">
            </div>
        </div> 
        <div class="imgText__inner2 mb100 ">
            <div class="text__inner2">
                <h1 class="mt100">community</h1>
                <h2 class="desc3 mt20">화장품에 대한 이야기를 마음껏 나눠보세요</h2> 
                <div class="btn mt20">
                    <a href="../shareBoard/shareBoard.php">보러가기</a>
                </div>
            </div>
        </div> 

        <div class="list__inner mb70">
        <!-- <h2>공유 게시판</h2> -->
        <div class="list">
            <!-- list__each -->
        <?php 
$page = 1;
$viewNum = 8;
$viewLimit = ($viewNum * $page) - $viewNum; 

//   1~20 DESC LIMIT 0, 20 -> page1 (viewNum * 1) - viewNum
// 21~40 DESC LIMIT 20, 20 -> page2 (viewNum * 2) - viewNum
// 40~60 DESC LIMIT 40, 20 -> page3 (viewNum * 3) - viewNum
// 60~80 DESC LIMIT 60, 20 -> page4 (viewNum * 4) - viewNum
include "../connect/connect.php";

$sql = "SELECT b.blogID, b.blogContents, b.blogImgFile,  b.blogTitle, m.youName, b.blogRegTime, b.blogView ,m.nickName FROM blog b JOIN members2 m ON b.memberID = m.memberID ORDER BY blogID DESC LIMIT {$viewLimit}, {$viewNum};";
$result = $connect -> query($sql);

// $sql = "SELECT boardID, boardTitle, regTime FROM board ORDER BY boardID DESC LIMIT {$viewLimit}, {$viewNum}";
// $result = $connect -> query($sql);


                
        foreach($result as $blog){?>
        
            <div class="list__each">
                <div class="list__img">
                    <a href="../shareBoard/shareBoardView.php?blogID=<?=$blog['blogID']?>">
                        <img src="../html/assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                    </a>
                </div>
            </div>
        <?php } ?>

            <!-- //list__each -->
        </div>
    </div>
    
        </ul>
    </div>
        
        <?php include "../include/footer.php" ?>
        <!-- //footer -->
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        document.querySelector(".kategorie").addEventListener("mouseover", e => {
            document.querySelector(".kategorie ul").style.display = "block";
        });
        document.querySelector(".kategorie").addEventListener("mouseout", e => {
            document.querySelector(".kategorie ul").style.display = "none";
        });

        document.querySelector(".user").addEventListener("mouseover", e => {
            document.querySelector(".user ul").style.display = "block";
        });
        document.querySelector(".user").addEventListener("mouseout", e => {
            document.querySelector(".user ul").style.display = "none";
        });


        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },

            pagination: {
              el: '.swiper-pagination',
              clickable: true
            },
        
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            }
        });
        // const btnStop = document.querySelector(".swiper-button-stop");
        // const btnStart = document.querySelector(".swiper-button-play");

        // // btnStart.style.display = "none";

        // btnStop.addEventListener("click", ()=>{
        //     swiper.autoplay.stop();
        //     btnStart.style.display = "block";
        //     btnStop.style.display = "none";
        // });
        // btnStart.addEventListener("click", ()=>{
        //     swiper.autoplay.start();
        //     btnStart.style.display = "none";
        //     btnStop.style.display = "block";
        // });
        
    </script>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $( document ).ready( function() {
            $('.slider1').slick( {
            autoplay: true,
            autoplaySpeed: 4000,
            slidesToShow: 5,
            slidesToScroll: 1,
            });
        });  
// 데이터만들기
const CosmeticInfo = [
            {  
                infoType:"Skincare",
                infoChoice: [
                "스킨", "로션", "토너", "에센스", "세럼", "엠플", "수분크림", "영양크림"                    
                ],
                infoDesc: [
                    "피부타입에 맞는 제품 선택: 자신의 피부타입을 알고, 그에 맞는 스킨케어 제품을 선택하는 것이 중요합니다. 각각의 피부타입에 맞는 제품을 사용하면 효과적인 결과를 얻을 수 있습니다.",
                    "적절한 클렌징: 매일 꼭 필요한 클렌징 단계를 거쳐 피부를 깨끗하게 유지하세요. 메이크업을 완전히 제거하고, 일상적인 먼지와 오염물질을 깨끗하게 클렌징하여 피부를 건강하게 유지할 수 있습니다.",
                    "보습 유지: 피부를 촉촉하게 유지하는 것은 중요합니다. 보습 크림이나 에센스를 사용하여 피부에 수분을 공급하고 유지하는 것이 좋습니다. 특히 건조한 계절이나 건조한 피부를 가진 분들은 보습에 더욱 신경을 써야 합니다.",
                    "태양 차단제 사용: 자외선은 피부에 큰 손상을 줄 수 있으므로, 일상적으로 태양 차단제를 사용하는 것이 좋습니다. SPF 지수가 높은 제품을 선택하고, 자주 발라서 피부를 보호하세요.",
                    "영양 공급: 스킨케어 루틴에 영양 공급을 위한 세럼이나 앰플을 추가해보세요. 피부에 필요한 영양분을 공급하여 피부 상태를 개선하고 건강한 피부를 유지할 수 있습니다."
                ]
            },
            {
                infoType:"SunCare",
                infoChoice: [
                "선스틱" ,"선크림"
                ],
                infoDesc: [
                    "SPF 레벨 확인: SunCare 제품을 선택할 때 SPF(Sun Protection Factor) 레벨을 확인하세요. SPF은 피부를 자외선으로부터 보호하는 능력을 나타내는 지수입니다. 높은 SPF 값을 가진 제품을 선택하여 피부를 효과적으로 보호하세요.",
                    "넉넉하게 발라라: SunCare를 사용할 때는 얼굴과 몸에 충분한 양을 넉넉하게 발라야 합니다. SPF 효과를 충분히 발휘하기 위해서는 피부에 얇게 발라지 않도록 주의해야 합니다. 적절한 양을 사용하여 피부를 균일하게 보호하세요.",
                    "자주 발라라: SunCare는 햇빛에 오래 노출되거나 땀, 수영 등으로 인해 제거될 수 있습니다. 그러므로 자주 발라주는 것이 중요합니다. 2~3시간마다 혹은 필요할 때마다 SunCare를 다시 발라 피부를 지속적으로 보호하세요.",
                    "모든 계절에 사용: SunCare는 여름철만 사용하는 것이 아닙니다. 자외선은 계절과 날씨와 관계없이 존재하기 때문에, 일년 내내 SunCare를 사용하는 것이 좋습니다. 특히 겨울철에도 자외선에 노출될 수 있으므로 잊지 말고 사용하세요.",
                    "기타 보호 조치: SunCare만으로만 완벽한 자외선 보호를 기대하기보다, 모자, 선글라스, 옷감 등 다른 보호 조치도 함께 사용하는 것이 좋습니다. 특히 자외선이 가장 강한 시간대인 10시부터 16시까지는 그림자에 머무르거나 햇빛을 피할 수 있는 장소를 찾는 것이 좋습니다."
                ]
            },
            {
                infoType:"Makeup",
                infoChoice: [ 
                "립제품", "팩트", "파운데이션", "섀도우"
                ],
                infoDesc: [
                    "청결한 베이스 메이크업: 메이크업을 시작하기 전에 피부를 깨끗하게 세정하고 토너와 보습 크림을 사용하여 촉촉하게 유지하세요. 그리고 프라이머를 사용하여 메이크업이 오랫동안 지속되도록 베이스를 준비하세요.",
                    "적절한 파운데이션 선택: 자신의 피부톤과 타입에 맞는 파운데이션을 선택하세요. 피부에 자연스럽게 어우러지는 파운데이션을 사용하여 매끄럽고 화사한 피부를 연출할 수 있습니다.",
                    "하이라이터와 쉐이딩 활용: 얼굴의 높은 부분에 하이라이터를 사용하여 광채를 더해주고, 쉐이딩을 사용하여 얼굴의 윤곽을 강조해보세요. 이렇게 하면 얼굴이 더 생동감 있고 입체적으로 보일 수 있습니다.",
                    "눈과 입 강조: 메이크업에서 눈과 입은 중요한 포인트입니다. 아이섀도우와 아이라이너를 사용하여 눈을 강조하고, 적절한 립스틱이나 립틴트를 사용하여 입술을 돋보이게 해보세요. 이렇게 하면 메이크업이 더욱 화려하고 매력적으로 완성될 수 있습니다.",
                    "메이크업 고정: 메이크업을 오랫동안 지속시키기 위해 세팅 스프레이를 사용하여 확실하게 고정시켜주세요. 이렇게 하면 메이크업이 더욱 오래 지속되고 신선한 상태를 유지할 수 있습니다."
                ]
            },
            {
                infoType:"Hair",
                infoChoice: [
                "헤어에센스", "헤어스프레이", "샴프", "린스",
                ],
                infoDesc: [
                "적절한 사용량 조절: 헤어에센스와 헤어스프레이를 사용할 때, 적절한 양을 사용하는 것이 중요합니다. 너무 많이 사용하면 머리카락이 무거워지고 지저분해질 수 있으므로 작은 양을 손에 덜어서 부드럽게 머리카락에 펴 발라주세요.",
                "머리카락 끝부분에 집중: 헤어에센스를 사용할 때는 특히 머리카락의 끝부분에 집중적으로 발라주세요. 머리카락의 손상을 예방하고 건강하고 윤기 있는 머리카락을 유지할 수 있습니다.",
                "헤어스프레이를 스타일링에 활용: 헤어스프레이는 헤어스타일을 고정시켜주는데 유용합니다. 스타일링 후에 헤어스프레이를 적절히 뿌려주면 스타일이 오랫동안 지속되고 머리카락이 날아가지 않습니다.",
                "샴푸와 린스 조합: 샴푸와 린스는 함께 사용하여 효과를 극대화할 수 있습니다. 샴푸로 머리를 깨끗하게 세정한 후에 린스를 사용하여 머리카락을 부드럽고 윤기 있게 유지하세요.",
                "열 스타일링 전에 보호케어: 헤어에 열 스타일링 도구(헤어 드라이어, 고데기 등)를 사용하기 전에 열 보호제나 열쇠를 사용하여 머리카락을 보호하세요. 열에 노출되는 머리카락을 보호하고 손상을 최소화할 수 있습니다."
                ]
            },
            {
                infoType:"Cleansing",
                infoChoice: [
                "클레징오일","클레징폼"
                ],
                infoDesc: [
                "더블 클렌징 방법: 클렌징 오일과 클렌징 폼을 함께 사용하여 더블 클렌징을 해보세요. 먼저 클렌징 오일을 사용하여 메이크업과 피지를 부드럽게 녹이고, 그 후에 클렌징 폼을 사용하여 깨끗하게 씻어내면 피부가 깨끗하고 맑아집니다.",
                "올인원 클렌징 제품 활용: 시간이 부족하거나 간편하게 클렌징하고 싶을 때는 올인원 클렌징 제품을 사용해보세요. 클렌징 오일과 클렌징 폼이 하나로 결합된 제품으로, 효과적인 클렌징과 함께 보습 효과까지 얻을 수 있습니다.",
                "마사지 효과 부여: 클렌징 오일을 사용할 때는 피부에 부드럽게 마사지하는 것이 좋습니다. 원하는 부위에 클렌징 오일을 발라 부드럽게 마사지하면 피부의 혈액순환을 촉진시키고 피부 탄력을 높일 수 있습니다.",
                "적절한 온도와 양 조절: 클렌징 폼을 사용할 때는 온도와 양을 적절히 조절해야 합니다. 너무 뜨거운 물이나 너무 많은 양의 클렌징 폼은 피부를 건조하게 만들 수 있으므로, 따뜻한 물과 적절한 양을 사용하여 클렌징하세요.",
                "촉촉한 마무리: 클렌징 후에는 피부가 건조해지지 않도록 촉촉한 마무리를 해주는 것이 중요합니다. 토너나 스킨으로 피부를 보습하고, 보습 크림을 사용하여 수분을 잠금해주세요. 이렇게 하면 클렌징 후에도 피부가 촉촉하고 건강해집니다."
                ]
            },
            {
                infoType:"Body",
                infoChoice: [
                "바디워시", "로션","바디오일"
                ],
                infoDesc: [
                "샤워 전 충분한 보습: 바디워시를 사용하기 전에 미리 충분한 보습을 해주세요. 피부에 보습 크림이나 바디오일을 발라주면 샤워 후에도 피부가 건조해지지 않고 윤기를 유지할 수 있습니다.",
                "피부 타입에 맞는 제품 선택: 자신의 피부 타입에 맞는 바디워시, 로션, 바디오일을 선택해야 합니다. 피부가 건조한 경우 보습 성분이 풍부한 제품을 선택하고, 지성 피부인 경우 가벼운 제품을 선택하세요.",
                "부드러운 마사지로 클렌징: 바디워시를 사용할 때는 부드러운 마사지로 피부를 클렌징해주세요. 원하는 부위에 바디워시를 발라 부드럽게 마사지하면 피부의 혈액순환을 촉진시키고 피부를 매끄럽게 만들 수 있습니다.",
                "적절한 양 사용: 바디워시, 로션, 바디오일을 사용할 때는 적절한 양을 사용해야 합니다. 너무 많이 사용하면 피부에 끼고 불쾌감을 줄 수 있으므로 적절한 양을 손에 덜어 사용해주세요.",
                "촉촉한 마무리: 샤워 후에는 로션이나 바디오일을 사용하여 촉촉한 마무리를 해주세요. 피부를 보호하고 보습을 유지할 수 있습니다. 특히 건조한 부위나 굳은 피부에 집중적으로 발라주세요."
                ]
            },
            {
                infoType:"Mask",
                infoChoice: [
                "시트팩", "워시오프팩", "슬리핑팩"
                ],
                infoDesc: [
                "피부 타입에 맞는 제품 선택: 자신의 피부 타입과 피부 고민에 맞는 시트팩, 워시오프팩, 슬리핑팩을 선택해야 합니다. 각각의 제품은 다른 효과와 장점을 가지고 있으므로 피부 타입에 맞는 제품을 선택하여 사용해주세요.",
                "피부 청소와 촉촉함 동시에: 시트팩과 워시오프팩은 피부 청소와 함께 피부에 촉촉함을 더해줍니다. 청소 효과를 높이기 위해 깊게 적용하고, 촉촉함을 유지하기 위해 충분한 시간을 유지해주세요.",
                "슬리핑팩으로 촉촉한 피부 유지: 슬리핑팩은 잠자는 동안 피부에 영양과 보습을 제공하여 촉촉하고 화사한 피부를 만들어줍니다. 저녁에 슬리핑팩을 바르고 잠을 자면, 아침에 깨어났을 때 피부의 상태가 좋아질 것입니다.",
                "시트팩 사용 시 시간 조절: 시트팩을 사용할 때는 제품에 명시된 시간을 정확히 따라야 합니다. 너무 오래 사용하면 피부에 불편함을 줄 수 있으며, 너무 짧게 사용하면 피부에 충분한 영양을 공급받지 못할 수 있습니다.",
                "꾸준한 사용: 꾸준한 사용이 중요합니다. 일주일에 2~3회 정도의 규칙적인 사용을 유지하여 피부에 지속적인 효과를 누리세요. 꾸준한 관리로 피부 상태를 개선하고 건강한 피부를 유지할 수 있습니다."
                ]
            }
        ];

        //유통기한 처리 로직

        var products = [
            { name: "클렌징오일", years: 1 },
            { name: "클렌징폼", years: 1 },
            { name: "바디워시", years: 1 },
            { name: "로션", years: 1 },
            { name: "바디오일", years: 1 },
            { name: "스킨", years: 1 },
            { name: "로션", years: 1 },
            { name: "토너", years: 1 },
            { name: "에센스", years: 0.5 },
            { name: "세럼", years: 0.5 },
            { name: "엠플", years: 0.5 },
            { name: "수분크림", years: 3 },
            { name: "영양크림", years: 3 },
            { name: "시트팩", years: 1 },
            { name: "워시오프팩", years: 1 },
            { name: "슬리핑팩", years: 0.5 }, // 6개월
            { name: "립제품", years: 1 },
            { name: "팩트", years: 1.5 },
            { name: "파운데이션", years: 3 },
            { name: "섀도우", years: 3 },
            { name: "헤어에센스", years: 1 },
            { name: "헤어스프레이", years: 1 },
            { name: "선스틱", years: 0.5 },
            { name: "선크림", years: 1 }
        ];
        // 날짜계산
        function calculateExpirationDate(productName, years) {
            let currentDate = new Date();
            let selectedDate = new Date($('#date-input').val());

            selectedDate.setFullYear(selectedDate.getFullYear() + years);
            // if (currentDate.getTime() > selectedDate.getTime()) {
            //     return "이미 지났습니다.";
            // } else {
                return convertDateFormat(selectedDate.toDateString());
            // }
        }
        // 날자형식변환
        function convertDateFormat(trasDate) {
            let date = new Date(trasDate);
            let year = date.getFullYear();
            let month = ('0' + (date.getMonth() + 1)).slice(-2);
            let day = ('0' + date.getDate()).slice(-2);
            
            let formattedDate = year + '-' + month + '-' + day;
            // 입력시 필요한 d day값 설정
            $("#Ddate").val(formattedDate);
            return formattedDate;
        }
        // 랜덤숫자 0-4
        function getRandomNumber() {
            let randomNumber = Math.floor(Math.random() * 5);
            return randomNumber;
        }

        // 함수 호출
        
        //초기화 & 셀렉트박스 설정
        function myFunction(type){
            // 입력시 필요한 indext 값 설정
            $("#indexChk").val(type);
            
            $('#select1').empty();
            for (let i = 0; i < CosmeticInfo[type].infoChoice.length; i++) {
                let option = $('<option></option>').text(CosmeticInfo[type].infoChoice[i]).val(CosmeticInfo[type].infoChoice[i]);
                 $('#select1').append(option);
            }

            //이미지 설정
            // $('#cardImg').attr('src', 'assets/img/cate/'+CosmeticInfo[type].infoType+'.jpg');
            $('#cardImg').attr('src', '../html/assets/img/cate/'+CosmeticInfo[type].infoType+'.jpg');


            // 모든 이미지에서 class="active" 제거
            $('.category_logo img').removeClass('active');
            
            // index에 해당하는 이미지에 class="active" 추가
            $('.category_logo img').eq(type).addClass('active');
            $('.product h3 em').text(CosmeticInfo[type].infoType);
            $('.updateCosmetics').hide();
            $('#productName').hide();
            $('.datecheck').hide();
            $('.chkExpiration').show();


            $('.card__body .title').text(CosmeticInfo[type].infoType+" 사용 꿀팁 !");
            $('.product .desc').text(CosmeticInfo[type].infoDesc[getRandomNumber()]);
        }

        // 유통기한체크
        function chkExpiration(){
            if($('#date-input').val() ==''){
                return false
            }
            $('.updateCosmetics').show();
            $('#productName').show();
            $('.datecheck').show();
            $('.chkExpiration').hide();
            
            // 사용자가 선택한 제품과 오늘의 날짜
            // let selectedProduct = "에센스"; // 예시로 "에센스"를 선택한 경우
            // let selectedDate = new Date(); // 오늘의 날짜를 선택한 경우
            
            let selectBox = document.getElementById('select1');
            let selectedOption = selectBox.options[selectBox.selectedIndex];
            let selectedProduct = selectedOption.value;
            // 선택한 제품의 연도 데이터를 찾아 유통기한 계산
            for (let i = 0; i < products.length; i++) {
                let product = products[i];
                if (product.name === selectedProduct) {
                    $('.datecheck span').text(calculateExpirationDate(product.name, product.years));
                    break;
                }
            }
        }
        

        function CosmeticUpdate(){
            let getYouBirth = RegExp(/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/);
            if($('#productName').val() == ''){
                alert('화장품 이름을 입력해주세요');
                $('#productName').focus();
                return false
            }else if($('#date-input').val() == ''){
                alert('날자를 선택해 주세요');
                $('#date-input').focus();
                return false;
            }else if(!getYouBirth.test($('#date-input').val())){
                alert('날자를 데이터를 정확히 선택해주세요');
                $('#date-input').focus();
                return false;
            }
            // 옵션으로 선택한값 selectedValue에 담음
            let selectBox = document.getElementById('select1');
            let selectedOption = selectBox.options[selectBox.selectedIndex];
            let selectedValue = selectedOption.value;
            
            // jsondata 가져오기
            let productName = $('#productName').val();
            let productFilter = selectedValue;
            let productType = CosmeticInfo[$("#indexChk").val()].infoType;
            let productDday = $("#Ddate").val();;
            let productRegist = $('#date-input').val();

            // console.log("productName : "+productName);
            // console.log("productFilter : "+productFilter);
            // console.log("productType : "+productType);
            // console.log("productDday : "+productDday);
            // console.log("productRegist : "+productRegist);

            // 세션체크는 insertCosmetic.php에서 함
            // data : {"productName" : productName,"productFilter":productFilter,"productType":productType,"productDday":productDday,"productRegist":productRegist ,"type" : "isInsertCosmectic"},
             $.ajax({
                type : "POST",
                url : "../mainCate/insertCosmetic.php",
                data : {"productName" : productName,"productFilter":productFilter,"productType":productType,"productDday":productDday,"productRegist":productRegist },
                dataType : "json",
                success : function(data){
                    // location.reload();
                    alert(data.result);
                    // 성공시 값 초기화
                    myFunction($("#indexChk").val())
                    $('#productName').val('');

                },
                error : function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            });
        }
        // 로딩시 실행 0 대신 get으로 0부터 6까지 값을 가져와야함 myFunction(0);
        myFunction(0);
    </script>
</body>
</html>