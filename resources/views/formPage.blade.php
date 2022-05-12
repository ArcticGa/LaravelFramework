<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center m-5">Заполните форму</h1>
    <form method="post">
        @csrf

        <div class="mb-3">
            <label class="form-label">ФИО</label>
            <input type="email" class="form-control" placeholder="Фамилия Имя Отчество">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Возраст</label>
            <input type="number" class="form-control" placeholder="Возраст">
        </div>

        <div>
            <label class="form-label">Страна проживания</label>
            <select class="form-select mb-3" aria-label="Default select example">
                <option selected>Выберите страну</option>
                <option value="1">Россия</option>
                <option value="2">Америка</option>
                <option value="3">Китай</option>
            </select>
        </div>


        <div class="mb-3">
            <label class="form-label">Адрес проживания</label>
            <input type="text" class="form-control" placeholder="Адрес">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Увлечения</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize: none" placeholder="Ваши увлечения"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">О себе</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Расскажите о себе" rows="6" style="resize: none"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>

    </form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
