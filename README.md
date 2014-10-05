fLANG-CLASSES
=============

First of all, we are calling us on our files. (Sayfamıza dosyamızı çağırıyoruz.)
<pre><code>require_once("class.fLANG.php");</code></pre>

Class and we are creating a copy of. (CLASS'ımızın kopyasını oluşturuyoruz.)
<pre><code>$fLANG = new fLANG;</code></pre>

If we want to translate from the language of the country in which you're writing code. (Hangi dilden çevrilmesini istiyorsak ülke kodunu yazıyoruz.)
<pre><code>$fLANG->from = "tr";</code></pre>

If you want to be translated into the language of the country in which you're writing code. (Hangi dile çevrilmesini istiyorsak ülke kodunu yazıyoruz.)
<pre><code>$fLANG->to = "de";</code></pre>

Example usage (Örnek kullanım)
<pre><code>echo $fLANG->exec("Merhaba Dünya");</code></pre>

The result (Sonuç)
<pre><code>Hallo Welt</code></pre>
