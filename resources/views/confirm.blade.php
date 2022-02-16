<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>内容確認</title>

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

    th {
      text-align:left;
    } 

    .required_mark {
      color: red;
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

    .fix {
      text-align:center;
      padding-top: 5px;
      font-size: 12px;
    }
/* CSS  ******************************************************/
  </style>
</head>

<body>
    <form action="/confirm" method="POST">
      @csrf
    <h1 class="title">内容確認</h1>
    
@section('title', 'confirm.blade.php')

@section('content')
<table>
  <tr>
    <th>Data</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->getDetail()}}
    </td>
  </tr>
  @endforeach
</table>
@endsection
<!--
        <table class="table-form">

            @error('fullname')
            <tr>
                <th>Error</th>
                <td>{{$message}}</td>
            </tr>
            @enderror
            <tr>
                <th>
                    <a>お名前</a>
                </th>
                <td>

                </td>
                <td>

                </td>
            </tr>
            <tr>
                <th>
                    <a>性別</a>
                </th>
                <td>

                </td>
            </tr>
            @error('email')
            <tr>
                <th>Error</th>
                <td>{{$message}}</td>
            </tr>
            @enderror
            <tr>
                <th>
                    <a>メールアドレス</a>
                </th>
                <td>


                </td>
            </tr>
            @error('postcode')
            <tr>
                <th>Error</th>
                <td>{{$message}}</td>
            </tr>
            @enderror
            <tr>
                <th>
                    <a>郵便番号</a>
                </th>
                <td>


                </td>
            </tr>
            @error('address')
            <tr>
                <th>Error</th>
                <td>{{$message}}</td>
            </tr>
            @enderror
            <tr>
                <th>
                    <a>住所</a>
                </th>
                <td>


                </td>
            </tr>
            <tr>
                <th>
                  <a>建物名</a>
                </th>
                <td>


                </td>
            </tr>
            @error('opinion')
            <tr>
                <th>Error</th>
                <td>{{$message}}</td>
            </tr>
            @enderror
            <tr>
                <th>
                    <a>ご意見</a>
                </th>
                <td>

                </td>
            </tr>
        </table>
  -->
        <div class="btnconfirm">
          <button onclick="resources\views\complete.blade.php" class="confirm">送信</button>
        </div>
        <div class="fix">
        <a href="http://127.0.0.1:8000">修正する</a>
        </div>
    </form>
</body>

</html>