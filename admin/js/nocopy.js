<script type="text/JavaScript">

function killCopy(e) {
return false
}
function reEnable () {
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar) {
document.onmousedown=killCopy
document.onlcik=reEnable
}
</script>