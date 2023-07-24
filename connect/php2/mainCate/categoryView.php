<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
    
    // $youName=$_SESSION['youName'];
    // $youEmail=$_SESSION['youEmail'];
    // 초기 회원정보 세팅
    // $sql = "SELECT * FROM members2 WHERE  youEmail = '{$youEmail}'";
    // $Result = $connect -> query($sql);
    // $Info = $Result -> fetch_array(MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
    if (isset($_GET['page'])) {
        $page = (int) $_GET['page'];
    } else {
        $page = 0;
    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>화장품 카테고리</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="../html/assets/js/common.js"></script>
</head>
<style>
    
</style>
<body id="scroll">
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->
    <main id="main" class="mt70 mb20">
        <?php include "../include/abbHeader.php" ?>
        <!-- //header -->
        <div class="info__logo">
            <h1>Abide By Beauty</h1>
        </div>
        <!-- //header -->
        <div class="category__inner">
            <div class="category">
                <div class="category_logo">
                    <a  onclick="myFunction('0')">
                        <img class ="active"  src="../html/assets/img/beauty_icon07.png" alt="기초">
                    </a>
                    <a  onclick="myFunction('1')">
                        <img src="../html/assets/img/beauty_icon03.png" alt="선크림">
                    </a>
                    <a  onclick="myFunction('2')">
                        <img src="../html/assets/img/beauty_icon01.png" alt="메이크업">
                    </a>
                    <a  onclick="myFunction('3')">
                        <img src="../html/assets/img/beauty_icon02.png" alt="헤어">
                    </a>
                    <a  onclick="myFunction('4')">
                        <img src="../html/assets/img/beauty_icon04.png" alt="클렌징">
                    </a>
                    <a  onclick="myFunction('5')">
                        <img src="../html/assets/img/beauty_icon05.png" alt="바디">
                    </a>
                    <a  onclick="myFunction('6')">
                        <img src="../html/assets/img/beauty_icon06.png" alt="마스크팩">
                    </a>
                </div>
            </div>
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
                            <input class="input1" type="text" id="productName" placeholder="화장품 이름">
                            <button type="button" class="chkExpiration btnStyle6"><a onclick="chkExpiration()">유통기한체크</a></button>
                            <button type="button" class="updateCosmetics btnStyle6"><a onclick="CosmeticUpdate()">제품등록하기</a></button>
                            <input class="input1" type="hidden" id="indexChk">
                            <input class="input1" type="hidden" id="Ddate">

                        </div>
                        <div class="section1-2">
                            <button type="button" onclick="location.href='writeList.php';" class="btnStyle6">등록된 화장품확인하기</button>
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
                                <img id="cardImg" src="../html/assets/img/cate/Skincare.jpg" alt="샴푸">
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

        <?php include "../include/footer.php" ?>
        <!-- //footer -->
    </main>

    
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
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
                alert("날자를 선택해 주세요");
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
                url : "insertCosmetic.php",
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
        myFunction(<?=$page?>);
       
       
    </script>
</body>

</html>