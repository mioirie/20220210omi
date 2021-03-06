<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理システム</title>

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

    p {
      text-align: center;
      margin-top: 20%;
    }

    .table-form {
      border: 1.5px solid #000000;
      margin: 15px auto;
      width: 90%;
      padding: 30px;
    }

    th {
      text-align:left;
    }

    .input { 
      width: 85%;
      padding: 10px;
      margin-top: 10px;
      margin-left: 20%;
      border-radius: 5px;
      border: 1px solid #808080;
      appearance: none;
      font-size: 14px;
      outline: none;
    }    

    .gender-header {
      padding-left: 10%;
      text-align: center;
    }

    .gender-contents {
      width: 100%;
      padding-left: 40%;
    }

    .gender {
      text-align: center;
    }

    .radio-btn {
      width: 30px;
      height: 30px;
      vertical-align: middle;      
    }

    .fromto {
      margin-left: 10%;
    }

    .btnsearch {
      text-align: center;
      margin-top: 5%;
    }

    .search {
      color: #fff;
      background-color: #000;
      font-weight: bold;
      padding: 8px 50px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .reset {
      text-align:center;
      padding-top: 5px;
      font-size: 12px;
    }
/* CSS  ******************************************************/

</style>
</head>

<body>
    <form action="/find" method="GET">
    @csrf
    <h1 class="title">管理システム</h1>
      <div class="table-form">
        <table>
            <tr>
                <th>
                  <a>お名前</a>
                </th>
                <td>
                <input name="fullname" type="text" class="input">
                </td>
                <div class="gender-contents">
                <th class="gender-header">
                    <a>性別</a>
                </th>
                <td class="gender">
                  <div class="gender-contents">
                    <label>
                      <input class="radio-btn" type="radio" name="gender" value="1" checked="checked">全て
                    </label>
                    <label>
                      <input class="radio-btn" type="radio" name="gender" value="2">男性
                    </label>
                    <label>
                      <input class="radio-btn" type="radio" name="gender" value="3">女性
                    </label>
                  </div>
                </td>
            </tr>
            <tr>
                <th>
                  <a>登録日</a>
                </th>
                <td>
                  <input name="registar-date" type="date" class="input">
                </td>
                <td class="fromto">
                  <div>～</div>
                </td>
                <td>
                  <input name="registar-date" type="date" class="input">
                </td>
            </tr>
            <tr>
                <th>
                  <a>メールアドレス</a>
                </th>
                <td>
                <input name="email" type="email" class="input" >
                </td>
          </table>
        <div class="btnsearch">
          <button onclick="\" class="search">検索</button>
        </div>
        <div class="reset">
        <a href="">リセット</a>
        </div>
      </div>
    </form>
</body>

</html>