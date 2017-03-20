<?php
namespace me\fru1t\fmcsgo\content\motd;


use me\fru1t\fmcsgo\template\EmptyPage;

$body = <<<HTML
<div class="spacer spacer-content"></div>

<section class="container">
  <div class="page-title">[Fru1t.Me] Minigames + Funmaps MOTD</div>
  <p>Welcome to the Server!</p>
</section>

<section class="container">
  <div class="subsection">
    <div class="section-title">Rules</div>
  </div>
  
  <ol class="motd-rules">
    <li>No harassing, bullying, threatening, or flaming.</li>
    <li>No racism, racial slurs, homophobic slurs, anti-semitism, or discrimination.</li>
    <li>No chat or mic spamming.</li>
    <li>No hacking, scripting, or use of 3rd party programs for competitive advantage.</li>
    <li>Admins can create reasonable rules that are not listed.</li>
    <li>Enforcement of all rules is subject to admin discretion.</li>
  </ol>
</section>

HTML;

EmptyPage::start()
    ->with(EmptyPage::FIELD_HTML_TITLE, "Fru1t.Me - MOTD")
    ->with(EmptyPage::FIELD_BODY, $body)
    ->render();
