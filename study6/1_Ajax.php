<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script>
        function sendRequest(){
            const xhr = new XMLHttpRequest();
            //xhr의 onreadystatechange 의 값이 바뀔때마다 실행해줘라 ! 하는 함수
            //내가만약에 지금 이페이지에서 서버에 값을 요청하고 받아 이런것들이 내부적으로 이뤄지는데
            //그 상태가 바뀔때마다 여기있는 값이 저절로 바뀌게됨
            xhr.onreadystatechange = function(){
                if(xhr.readyState == xhr.DONE & xhr.status == 200){
                    document.getElementById("text").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET","1_Ajax_ok.php?userid=apple&userpw=1234",true); //true는 비동기로 보내겠다는거임
            xhr.send();// send메서드를 써주면 위에 세팅한정보로 통신을 하게됨  위페이지를 가게된다
            //페이지를 이동하지않고 내부적으로 보낸거임
            

        }
    </script>
</head>
<body>
    <h2>Ajax</h2>
    <button onclick="sendRequest()">get방식으로 요청보내기</button>
    <p id="text"></p>
</body>
</html>