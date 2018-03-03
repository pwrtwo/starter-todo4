<h1>Task # {id}</h1>
<form role="form" action="/mtce/submit" method="post">
    {ftask}<br>
    {fpriority}<br>
    {size}<br>
    {group}<br>
    {status}<br>
    {zsubmit}<br>
</form>
<br>
    {error}
<a href="/mtce/cancel"><input type="button" value="Cancel the current edit"/></a>
<a href="/mtce/delete"><input type="button" value="Delete this todo item"/></a>