{* purpose of this template: options rss feed *}
{assign var='lct' value='user'}
{if isset($smarty.get.lct) && $smarty.get.lct eq 'admin'}
    {assign var='lct' value='admin'}
{/if}
{mupollsTemplateHeaders contentType='application/rss+xml'}<?xml version="1.0" encoding="{charset assign='charset'}{if $charset eq 'ISO-8859-15'}ISO-8859-1{else}{$charset}{/if}" ?>
<rss version="2.0"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:admin="http://webns.net/mvcb/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:atom="http://www.w3.org/2005/Atom">
{*<rss version="0.92">*}
    <channel>
        <title>{gt text='Latest options'}</title>
        <link>{$baseurl|escape:'html'}</link>
        <atom:link href="{php}echo substr(\System::getBaseUrl(), 0, strlen(\System::getBaseUrl())-1);{/php}{getcurrenturi}" rel="self" type="application/rss+xml" />
        <description>{gt text='A direct feed showing the list of options'} - {$modvars.ZConfig.slogan}</description>
        <language>{lang}</language>
        {* commented out as $imagepath is not defined and we can't know whether this logo exists or not
        <image>
            <title>{$modvars.ZConfig.sitename}</title>
            <url>{$baseurl|escape:'html'}{$imagepath}/logo.jpg</url>
            <link>{$baseurl|escape:'html'}</link>
        </image>
        *}
        <docs>http://blogs.law.harvard.edu/tech/rss</docs>
        <copyright>Copyright (c) {php}echo date('Y');{/php}, {$baseurl}</copyright>
        <webMaster>{$modvars.ZConfig.adminmail|escape:'html'} ({usergetvar name='name' uid=2 default='admin'})</webMaster>

{foreach item='option' from=$items}
    <item>
        <title><![CDATA[{if isset($option.updatedDate) && $option.updatedDate ne null}{$option.updatedDate|dateformat} - {/if}{$option->getTitleFromDisplayPattern()|notifyfilters:'mupolls.filterhook.options'}]]></title>
        <link>{modurl modname='MUPolls' type=$lct func='display' ot='option'  id=$option.id fqurl=true}</link>
        <guid>{modurl modname='MUPolls' type=$lct func='display' ot='option'  id=$option.id fqurl=true}</guid>
        {if isset($option.createdUserId)}
            {usergetvar name='uname' uid=$option.createdUserId assign='cr_uname'}
            {usergetvar name='name' uid=$option.createdUserId assign='cr_name'}
            <author>{usergetvar name='email' uid=$option.createdUserId} ({$cr_name|default:$cr_uname})</author>
        {/if}

        <description>
            <![CDATA[
            {$option.title|replace:'<br>':'<br />'}
            ]]>
        </description>
        {if isset($option.createdDate) && $option.createdDate ne null}
            <pubDate>{$option.createdDate|dateformat:"%a, %d %b %Y %T +0100"}</pubDate>
        {/if}
    </item>
{/foreach}
    </channel>
</rss>
