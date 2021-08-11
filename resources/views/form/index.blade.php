<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <form action="/form/save" method="POST" style="display: flex; flex-direction: column; justify-content: center; align-items: center; box-shadow: 0px 0px 20px rgb(180,179,179); height: 400px; width: 400px; background: #4af381; border-radius: 10px;" enctype="multipart/form-data">
        @csrf
        <input type="text"
               name="description"
               style="padding: 10px 20px; border: none; border-radius: 30px;"
               placeholder="type description...">
        <input type="file"
               name="image"
               style="padding: 10px 0px; margin-left: 50px; border: none; border-radius: 30px;"
               placeholder="select image...">
        <button type="submit"
               style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4); padding: 10px 20px; border: 1px solid #19e761; border-radius: 30px;"
                placeholder="type description...">click here</button>
    </form>
</body>
</html>
