<style type="text/css">
    ul {
        list-style:none;
    }
    
    .step-state ul:after {
        content:'';
        display:block;
        clear:both;
    }
    .step-state ul li {
        float:left;
        position:relative;
        width:200px; /* 5개 진행바를 5등분 */
        padding-top:80px; /* 진행바 영역 확보 */
        font-size:20px;
        font-weight:bold;
        text-align:center;
        line-height:100px;
        top:20px;
        color:#666
    }
    .step-state ul li p{
        margin-left:50px;
    }
    /* 도전중, 달성 텍스트 영역 */
    .step-state ul li p:after {
        position:absolute; /* absolute 기준은 li 영역 */
        width:70px;
        height:50px;
        margin-right:-55px;
        background:url(/img/progress1.png) no-repeat;
        background-size:70px;
        background-position:0px -10px;
        top:10px;
        color:#fff;
        font-size:20px;
        line-height:35px;
    }
    /* 회색 진행바 생성 */
    .step-state ul li:before {
        position:absolute;
        top:80px;
        left:100px;
        right:-120px;
        height:10px;
        background:#ddd;
        content:''
    }
    /* 첫 번째 진행바 반만 생성
    .step-state ul li:nth-child(1):before {
        left:110px;
    }*/
    /* 마지막 진행바 반만 생성*/
    .step-state ul li:nth-child(4):before {
        right:100px;
    }
    /* 화살표 상태 아이콘 */
    .step-state ul li:after {
        position:absolute;
        top:60px;
        width:100px;
        height:70px;
        margin-left:-10px;
        background:url(/img/progress2.png) no-repeat;
        background-size:50px;
        background-position:10 0px;
        content:''
    }
    
    /* 활성화 진행바 및 활성화 화살표 아이콘 표시 */
    /* 활성화 상태바 */
    .step-state.step2 ul li:nth-child(-n+1):before,
    .step-state.step3 ul li:nth-child(-n+2):before,
    .step-state.step4 ul li:nth-child(-n+3):before {
        background:#ff889b
    }
    /* 활성화 아이콘 표시 */
    .step-state.step1 ul li:nth-child(1):after,
    .step-state.step2 ul li:nth-child(-n+2):after,
    .step-state.step3 ul li:nth-child(-n+3):after,
    .step-state.step4 ul li:nth-child(-n+4):after,
    .step-state.step5 ul li:nth-child(-n+5):after {
        background:url(/img/progress3.png) no-repeat;
        background-size:50px;
        background-position:10 0px;
    }
    .step-state.step1 ul li:nth-child(1) p:before,
    .step-state.step2 ul li:nth-child(2) p:before,
    .step-state.step3 ul li:nth-child(3) p:before{
        background:#ddd
    }
    
    
    /* "달성" 텍스트 표시 */
    .step-state.step1 ul li:nth-child(1) p:after,
    .step-state.step2 ul li:nth-child(2) p:after,
    .step-state.step3 ul li:nth-child(3) p:after,
    .step-state.step4 ul li:nth-child(4) p:after {
        content:'현재';
        right:95px;
    }
</style>
<div class="step-box">
    <!--
        단계별로 class name
        1단계 : step1
        2단계 : step2
        3단계 : step3
        4단계 : step4
        5단계 : step5
    -->
    <div class="step-state step1">
        <ul>
            <li><p>추가적립</p></li>
            <li><p>2%</p></li>
            <li><p>2%</p></li>
            <li><p>2%</p></li>
        </ul>
    </div>
    <div class="step-state step2">
        <ul>
            <li><p>추가적립</p></li>
            <li><p>2%</p></li>
            <li><p>2%</p></li>
            <li><p>2%</p></li>
        </ul>
    </div>
    <div class="step-state step3">
        <ul>
            <li><p>추가적립</p></li>
            <li><p>2%</p></li>
            <li><p>2%</p></li>
            <li><p>2%</p></li>
        </ul>
    </div>
    <div class="step-state step4">
        <ul>
            <li><p>추가적립</p></li>
            <li><p>2%</p></li>
            <li><p>2%</p></li>
            <li><p>2%</p></li>
        </ul>
    </div>
    
</div>