<?php
    include '../connect/connect.php';
    include '../connect/session.php';
    include '../connect/checkSession.php';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="1rrock">
    <meta name="description" content="1rrock 포트폴리오 사이트입니다.">
    <meta name="keywords" content="웹표준, 웹접근성, 사이트만들기, 포트폴리오, 1rrock">
    <title>1rrock Portfolio</title>
    
    <!-- CSS Style -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- webfonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>
    <!-- skip -->
    <div id="skip">
        <a href="#mainCont">콘텐츠 바로가기</a>
    </div>
    <!-- //skip -->
    
    <!-- header -->
    <div id="header">
        <?php
            include '../component/header.php';
        ?>    
    </div>
    <!-- //header -->
    
    <main>
        <!-- boardCont -->
        <section id="boardCont">
            <div class="container">
                <div class="listBoard">
                    <h2>게시판입니다.</h2>
                    <div class="listTable">
                        <table class="table">
                            <colgroup>
                                <col style="width: 20%">
                                <col style="width: 80%">
                            </colgroup>
                            <tbody>
                                <!-- <tr>
                                    <th>제목</th>
                                    <td>sdf</td>
                                </tr>
                                <tr>
                                    <th>등록자</th>
                                    <td>sdf</td>
                                </tr>
                                <tr>
                                    <th>등록일</th>
                                    <td>sdf</td>
                                </tr>
                                <tr>
                                    <th>내용</th>
                                    <td>sdf</td>
                                </tr> -->
                                
<?php
    if( isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];

        $sql = "SELECT b.boardID, b.boardTitle, b.boardContent, m.youNickName, b.regTime FROM myBoard b JOIN myMember m ON (m.memberID = b.memberID) ";
        $sql .= "WHERE b.boardID = {$boardID}";

        $result = $dbConnect -> query($sql);
    }
    if( $result ){
        $meberInfo = $result -> fetch_array(MYSQLI_ASSOC);

        echo "<tr><th>제목</th><td>".$meberInfo['boardTitle']."</td></tr>";
        echo "<tr><th>등록자</th><td>".$meberInfo['youNickName']."</td></tr>";
        echo "<tr><th>등록일</th><td>".date('Y-m-d H:i', $meberInfo['regTime'])."</td></tr>";
        echo "<tr><th>내용</th><td class='boardPD'>".$meberInfo['boardContent']."</td></tr>";
    }
?>
                            </tbody>
                        </table>
                    </div>
                    <div class="listSearch">
                        <a class="form-btn black mt20" href="board.php">목록 보기</a>
                    </div>
                    <!-- //listTable -->
                </div>
            </div>
        </section>
        <!-- //boardCont -->
    </main>
    <!-- <?php
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
    ?> -->
</body>
</html>