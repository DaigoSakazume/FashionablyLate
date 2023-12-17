<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inika&family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
</head>

<body>
<header class="header">
    <div class="logout__button">
      <button class="logout__button-submit" onclick="location.href='/login'">logout</button>
    </div>
    <div class="header__inner">
        <a class="header__logo" href="/">FashionablyLate</a>
    </div>
</header>

<main>
  <div class="admin__content">
    <div class="admin__heading">
      <p>Admin</p>
    </div>
    <form class="search-form">
      @csrf
      <div class="search-form__item">
        <input class="create-form__item-input" type="text" name="content" value=""/>
        <select class="search-form__item--gender">
          <option value="">全て</option>
        </select>
        <select class="search-form__item--category">
          <option value="">お問い合わせの種類</option>
        </select>
        <select class="search-form__item-date">
          <option value="">日付を選択してください</option>
        </select>
      </div>
    </form>
    <div class="admin-table">
      <table class="todo-table__inner">
      </table>
    </div>
  </div>
</main>
</body>

</html>