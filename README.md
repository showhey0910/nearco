# Nearco
Nearcoは[showhey.jp](https://showhey.jp)で採用しているシンプルなWordPressテーマです。  

## 使用リソース
[Prism.js](https://prismjs.com)

## Prism.js
当テーマでは、ソースコードのシンタックスハイライターに[Prism.js](https://prismjs.com)を使用しています。

### 対応言語
Markup + HTML + XML + SVG + MathML + SSML + Atom + RSS  
CSS  
C-like  
JavaScript  
ERB  
PHP  
Python  
Ruby  
Sass(Scss)

### 対応プラグイン
Line Highlight(任意の行を強調)  
Line Numbers(行番号の表示)  
Autolinker(URLにハイパーリンクを付与)  
Show Language(ファイル名の表示)  
Toolbar(Show Language, Copy to Clipboard Buttonに必要なプラグイン)  
Copy to Clipboard Button(ソースコードをまとめてコピーできるボタン)

### ショートコード
以下のショートコードで簡単にシンタックスハイライトされたソースコードを記入することができます。  
[prism lang='*ソースコードの言語*' file='*ファイル名*']*ここにソースコードを記入*[/prism]  
langの未入力は、シンタックスハイライトと行番号の表示がオフになります。  
fileの未入力は、ファイル名が「terminal」と表示されます。  
  
例：  
[prism lang='html' file='index.html]&lt;h1&gt;HEADING1&lt;/h1&gt;  
&lt;h2&gt;heading 2&lt;/h2&gt;  
[/prism]  

[prism lang='css' file='style.css']h1{  
&nbsp;&nbsp;color: red;  
}  
[/prism]
