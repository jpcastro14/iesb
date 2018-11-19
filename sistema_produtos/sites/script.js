
function verifica(recid){
    if(confirm("Deseja excluir esse produto?")){
        window.location="excluir.php?idexc=" + recid
    }
}