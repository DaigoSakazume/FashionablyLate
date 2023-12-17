<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Contact Form</title>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inika&family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
</head>

<body>
<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">FashionablyLate</a>
    </div>
</header>

<main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <p>Contact</p>
        </div>
        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--name">
                        <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}" />
                        <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}" />
                    </div>
                    @error('last_name')
                            <div class="form__error--name">{{ $message }}</div>
                    @enderror
                    @error('first_name')
                            <div class="form__error--name">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--checkbox">
                        <input type="radio" name="gender" id="male" value="1" {{ old('gender','1') == '1' ? 'checked' : '' }}/>
                        <label for="male">男性</label>
                        <input type="radio" name="gender" id="female" value="2" {{ old('gender','2') == '1'}}/>
                        <label for="female">女性</label>
                        <input type="radio" name="gender" id="other" value="3" {{ old('gender','3') == '3'}}/>
                        <label for="other">その他</label>
                    </div>
                    <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="tel" name="tel_1" placeholder="080" value="{{ old('tel_1') }}" />
                        &nbsp;-&nbsp;
                        <input type="tel" name="tel_2" placeholder="1234" value="{{ old('tel_2') }}" />
                        &nbsp;-&nbsp;
                        <input type="tel" name="tel_3" placeholder="5678" value="{{ old('tel_3') }}" />
                    </div>
                    <div class="form__error">
                    @error('tel')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
                    </div>
                    <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}"/>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--select">
                        <select name="category_id" size="1">
                            <option value="" hidden >選択してください</option>
                            <option type="text" value="1" @if(1 === (int)old('category_id')) selected @endif >商品のお届けについて</option>
                            <option type="text" value="2" @if(2 === (int)old('category_id')) selected @endif >商品の交換について</option>
                            <option type="text" value="3" @if(3 === (int)old('category_id')) selected @endif >商品トラブル</option>
                            <option type="text" value="4" @if(4 === (int)old('category_id')) selected @endif >ショップへのお問い合わせ</option>
                            <option type="text" value="5" @if(5 === (int)old('category_id')) selected @endif >その他</option>
                        </select>
                    </div>
                    <div class="form__error">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                    <textarea name="detail" placeholder="お問い合わせの内容をご記載ください">{{ old('detail') }}</textarea>
                    </div>
                    <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
</main>
</body>

</html>