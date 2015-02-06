$(document).ready(function(){
    $('#tableProducts').dataTable();
});
$(document).ready(function(){
    $('#tableFilter').dataTable({
        "order": [[ 8, 'desc' ]]
    });
});