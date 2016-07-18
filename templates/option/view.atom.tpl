{* purpose of this template: options atom feed *}
{assign var='lct' value='user'}
{if isset($smarty.get.lct) && $smarty.get.lct eq 'admin'}
    {assign var='lct' value='admin'}
{/if}
{mupollsTemplateHeaders contentType='application/atom+xml'}<?xml version="1.0" encoding="{charset assign='charset'}{if $charset eq 'ISO-8859-15'}ISO-8859-1{else}{$charset}{/if}" ?>
<feed xmlns="http://www.w3.org/2005/Atom">
    <title type="text">{gt text='Latest options'}</title>
    <subtitle type="text">{gt text='A direct feed showing the list of options'} - {$modvars.ZConfig.slogan}</subtitle>
    <author>
        <name>{$modvars.ZConfig.sitename}</name>
    </author>
{assign var='amountOfItems' value=$items|@count}
{if $amountOfItems gt 0}
{capture assign='uniqueID'}tag:{$baseurl|replace:'http://':''|replace:'/':''},{$items[0].createdDate|dateformat:'%Y-%m-%d'}:{modurl modname='MUPolls' type=$lct func='display' ot='option' id=$items[0].id}{/capture}
    <id>{$uniqueID}</id>
    <updated>{$items[0].updatedDate|dateformat:'%Y-%m-%dT%H:%M:%SZ'}</updated>
{/if}
<link rel="alternate" type="text/html" hreflang="{lang}" href="{modurl modname='MUPolls' type=$lct func='main' fqurl=true}" />
<link rel="self" type="application/atom+xml" href="{php}echo substr(\System::getBaseUrl(), 0, strlen(\System::getBaseUrl())-1);{/php}{getcurrenturi}" />
<rights>Copyright (c) {php}echo date('Y');{/php}, {$baseurl}</rights>

{foreach item='option' from=$items}
    <entry>
        <title type="html">{$option->getTitleFromDisplayPattern()|notifyfilters:'mupolls.filterhook.options'}</title>
        <link rel="alternate" type="text/html" href="{modurl modname='MUPolls' type=$lct func='display' ot='option' id=$option.id fqurl=true}" />
        {capture assign='uniqueID'}tag:{$baseurl|replace:'http://':''|replace:'/':''},{$option.createdDate|dateformat:'%Y-%m-%d'}:{modurl modname='MUPolls' type=$lct func='display' ot='option' id=$option.id}{/capture}
        <id>{$uniqueID}</id>
        {if isset($option.updatedDate) && $option.updatedDate ne null}
            <updated>{$option.updatedDate|dateformat:'%Y-%m-%dT%H:%M:%SZ'}</updated>
        {/if}
        {if isset($option.createdDate) && $option.createdDate ne null}
            <published>{$option.createdDate|dateformat:'%Y-%m-%dT%H:%M:%SZ'}</published>
        {/if}
        {if isset($option.createdUserId)}
            {usergetvar name='uname' uid=$option.createdUserId assign='cr_uname'}
            {usergetvar name='name' uid=$option.createdUserId assign='cr_name'}
            <author>
               <name>{$cr_name|default:$cr_uname}</name>
               <uri>{usergetvar name='_UYOURHOMEPAGE' uid=$option.createdUserId assign='homepage'}{$homepage|default:'-'}</uri>
               <email>{usergetvar name='email' uid=$option.createdUserId}</email>
            </author>
        {/if}

        <summary type="html">
            <![CDATA[
            {$option.title|truncate:150:"&hellip;"|default:'-'}
            ]]>
        </summary>
        <content type="html">
            <![CDATA[
            {$option.colorOfOption|replace:'<br>':'<br />'}
            ]]>
        </content>
    </entry>
{/foreach}
</feed>
