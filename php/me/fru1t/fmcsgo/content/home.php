<?php
namespace me\fru1t\fmcsgo\content;
use me\fru1t\fmcsgo\template\EmptyPage;

$body = <<<HTML
hi
HTML;

EmptyPage::start()
    ->with(EmptyPage::FIELD_HTML_TITLE, "Home")
    ->with(EmptyPage::FIELD_BODY, $body)
    ->render();
