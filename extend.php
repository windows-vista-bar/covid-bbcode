<?php
use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
        ->configure(function (Configurator $config){
            $config->BBCodes->addCustom(
                '[covid-dash]',
                '<iframe name=covid-dash frameborder="0" scrolling="auto" width="100%" height=600 οnlοad="document.all[\'covid-dash\'].style.width=myframe.document.body.scrollWidth" src="https://www.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6"></iframe>'
            );
            $config->BBCodes->addCustom(
                '[covid-mobile]',
                '<iframe name=covid-mobile frameborder="0" scrolling="auto" width="100%" height=600 οnlοad="document.all[\'covid-mobile\'].style.width=myframe.document.body.scrollWidth" src="https://www.arcgis.com/apps/opsdashboard/index.html#/85320e2ea5424dfaaa75ae62e5c06e61"></iframe>'
            );
        });