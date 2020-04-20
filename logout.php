<!DOCTYPE html>
<html lang="ko" dir="ltr">
<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="layout.css">
        <title>게시판</title>
</head>
<body>
<?php

        session_start();
        $result = session_destroy();

        if($result) {
?>
        <script>
                alert("로그아웃 되었습니다.");
                history.back();
        </script>
<?php   }
?>
</body>
</html>