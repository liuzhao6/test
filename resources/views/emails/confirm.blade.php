<html>
<head>
    <meta charset="utf-8">
    <title>注册确认链接</title>
</head>
<body>
    <h1>感谢您在 sample 网站进行注册</h1>
    <p>
        请点击以下链接完成注册：
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
        
    </p>
    <p>
        如不是您本人操作，请忽略。
    </p>

</body>
</html>