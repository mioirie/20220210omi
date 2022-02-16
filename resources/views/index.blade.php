<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>

  <style>
    html,
    body,
    div,
    span,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    abbr,
    address,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    samp,
    small,
    strong,
    sub,
    sup,
    var,
    b,
    i,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section,
    summary,
    time,
    mark,
    audio,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    body {
      line-height: 1;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block;
    }

    nav ul {
      list-style: none;
    }

    blockquote,
    q {
      quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: "";
      content: none;
    }

    a {
      margin: 0;
      padding: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    /* change colours to suit your needs */
    ins {
      background-color: #ff9;
      color: #000;
      text-decoration: none;
    }

    /* change colours to suit your needs */
    mark {
      background-color: #ff9;
      color: #000;
      font-style: italic;
      font-weight: bold;
    }

    del {
      text-decoration: line-through;
    }

    abbr[title],
    dfn[title] {
      border-bottom: 1px dotted;
      cursor: help;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /* change border colour to suit your needs */
    hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #cccccc;
      margin: 1em 0;
      padding: 0;
    }

    input,
    select {
      vertical-align: middle;
    } 
/* CSS  ******************************************************/
    body {
      width: 80vw;
      margin: 20px auto;
    }
    .title {
      font-size: 20px;
      text-align:center;
    }

    .table-form {
      margin: 30px auto;
      width: 90%;
    }

    th {
      text-align:left;
    } 

    .required_mark {
      color: red;
    }

    .input-name { 
      width: 85%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #808080;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    .input {
      width: 185%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #808080;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    .input-postcode {
      width: 175%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #808080;
      appearance: none;
      font-size: 14px;
      outline: none;
      margin-left:-90%;
    }

    .input-opinion {
      width: 185%;
      height: 15vh;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #808080;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    .invalid-feedback-postcode {
      margin-left:-90%;
    }

    .example {
      font-size:12px;
      color: #808080;
      text-indent: 1em;
      margin-top: 5px;
    }

    .example-postcode {
      font-size:12px;
      color: #808080;
      text-indent: 1em;
      margin-top: 5px;
      margin-left:-92%;
    }

    .gender {
      margin-top: 10px;
    }

    .radio-btn {
      width: 25px;
      height: 25px;
      vertical-align: middle;
    }

    .postcode-mark {
      float: left;
      margin-top: 1px;
    }

    .btnconfirm {
      text-align:center;
    }

    .confirm {
      color: #fff;
      background-color: #000;
      font-weight: bold;
      padding: 8px 50px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }
/* CSS  ******************************************************/
  </style>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>

<body>
    
    <form action="/confirm" method="GET/POST">
      @csrf
        <h1 class="title">お問い合わせ</h1>
        <table class="table-form">
            <tr>
                <th>
                    <a>お名前</a>
                    <a class="required_mark">※</a>
                </th>
                <td>
                <input name="fullname" type="text" class="input-name" @if($errors->has('fullname')) is-invalid @endif" id="fullname" value="{{ old('fullname') }}" >
                <div class="invalid-feedback">
                  @foreach ($errors->get('fullname') as $error)
                    {{ $error }}<br>
                  @endforeach
                </div>
                <p class="example">例）山田</p>
                </td>
                <td>
                <input name="fullname" type="text" class="input-name" @if($errors->has('fullname')) is-invalid @endif" id="fullname" value="{{ old('fullname') }}" >
                <div class="invalid-feedback">
                  @foreach ($errors->get('fullname') as $error)
                    {{ $error }}<br>
                  @endforeach
                </div>
                <p class="example">例）太郎</p>
                </td>
            </tr>
            <tr>
                <th>
                    <a>性別</a>
                    <a class="required_mark">※</a>
                </th>
                <td>
                  <div class="gender">
                    <label>
                      <input class="radio-btn" type="radio" name="gender" value="1" checked="checked">男性
                    </label>
                    <label>
                      <input class="radio-btn" type="radio" name="gender" value="2">女性
                    </label>
                  </div>
                </td>
            </tr>
            <tr>
                <th>
                  <a>メールアドレス</a>
                  <a class="required_mark">※</a>
                </th>
                <td>
                <input name="email" type="email" class="input" @if($errors->has('email')) is-invalid @endif" id="email" value="{{ old('email') }}" >
                <div class="invalid-feedback">
                  @foreach ($errors->get('email') as $error)
                    {{ $error }}<br>
                  @endforeach
                </div>
                <p class="example">例）test@example.com</p>
                </td>
            </tr>
            <tr>
                <th>
                  <a>郵便番号</a>
                  <a class="required_mark">※</a>
                </th>
                <td class="postcode-mark">
                  <p>〒</p>
                </td>

                <td>
                <input name="postcode" type="text" class="input-postcode" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address') @if($errors->has('zip')) is-invalid @endif" id="postcode" value="{{ old('postcode') }}";>
                <div class="invalid-feedback-postcode">
                  @foreach ($errors->get('postcode') as $error)
                    {{ $error }}<br>
                  @endforeach
                </div>
                <p class="example-postcode">例）123-4567</p>
                </td>
            </tr>
            <tr>
                <th>
                    <a>住所</a>
                    <a class="required_mark">※</a>
                </th>
                <td>
                <input name="address" type="text" class="input" @if($errors->has('address')) is-invalid @endif" id="address" value="{{ old('address') }}" >
                <div class="invalid-feedback">
                  @foreach ($errors->get('address') as $error)
                    {{ $error }}<br>
                  @endforeach
                </div>
                <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                </td>
            </tr>
            <tr>
                <th>
                  <a>建物名</a>
                </th>
                <td>
                <input class="input" type="text" name="building_name">
                <p class="example">例）千駄ヶ谷マンション101</p>
                </td>
            </tr>
            <tr>
                <th>
                    <a>ご意見</a>
                    <a class="required_mark">※</a>
                </th>
                <td>
                <input name="opinion" type="text" class="input-opinion" @if($errors->has('opinion')) is-invalid @endif" id="opinion" value="{{ old('opinion') }}" >
                <div class="invalid-feedback">
                  @foreach ($errors->get('opinion') as $error)
                    {{ $error }}<br>
                  @endforeach
                </div>
                </td>
            </tr>
        </table>
        <div class="btnconfirm">
          <button class="confirm" onclick="C:\xampp\htdocs\20220210omi\resources\views\confirm.blade.php">確認</button>
        </div>
    </form>

</body>

</html>