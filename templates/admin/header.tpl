{* purpose of this template: header for admin area *}
{pageaddvar name='javascript' value='prototype'}
{pageaddvar name='javascript' value='validation'}
{pageaddvar name='javascript' value='zikula'}
{pageaddvar name='javascript' value='livepipe'}
{pageaddvar name='javascript' value='zikula.ui'}
{pageaddvar name='javascript' value='modules/MUPolls/javascript/MUPolls.js'}

{* initialise additional gettext domain for translations within javascript *}
{pageaddvar name='jsgettext' value='module_mupolls_js:MUPolls'}

{if !isset($smarty.get.theme) || $smarty.get.theme ne 'Printer'}
    {adminheader}
{/if}
