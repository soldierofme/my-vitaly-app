<!DOCTYPE html>
<html lang="ja">

<head>
  @yield('head')
</head>

<body>
  <header>
    @yield('header')
  </header>
  <main>
    <aside>
      @yield('aside')
    </aside>
    <section class="content">
      <h2>基本情報</h2>
      <form>
        <!-- フォームの内容をここに追加 -->
        <label for="company-name">法人名</label>
        <input type="text" id="company-name" name="company-name" value="株式会社健康サービス">

        <label for="address">住所</label>
        <input type="text" id="address" name="address" value="東京都港区">

        <!-- 他のフォームフィールドを追加 -->
      </form>
    </section>
  </main>
</body>

</html>
